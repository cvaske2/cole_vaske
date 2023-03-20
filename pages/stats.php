<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $STATIC_TS_CHART_HEIGHT = 200;

    $pie_chart = [
        "Chrome" => [
            "color" => "Red",
            "amt" => 0,
            "pct" => "100%",
            "actual_pct" => 0
        ],
        "Firefox" => [
            "color" => "Orange",
            "amt" => 0,
            "pct" => "0%",
            "actual_pct" => 0
        ],
        "Edge" => [
            "color" => "Blue",
            "amt" => 0,
            "pct" => "0%",
            "actual_pct" => 0
        ],
        "Other" => [
            "color" => "Purple",
            "amt" => 0,
            "pct" => "0%",
            "actual_pct" => 0
        ]
    ];

    $agent_file_contents = file_get_contents($BASE_DIR_PREFIX."/logs/user_agents.tsv");
    $agent_file_contents = explode("\n", $agent_file_contents);

    $total_agents = 0;

    foreach($agent_file_contents as &$line) {
        $line_content = explode("\t", $line); // [0] is agent, [1] is timestamp
        $line = $line_content; // Rebuild $agent_file_contents in place

        if($line[1] === null) {
            /* An empty line has been found. Continue to the next */
            continue;
        }
        $total_agents++;

        /* Isolate the user agent information */
        $agent = $line[0];
        $agent = substr($agent, strrpos($agent, "Gecko"));
        $agent = substr($agent, strpos($agent, " "));
        $agent = substr($agent, 0, strrpos($agent, "/"));

        /* Start looking at the remainder of the agent */
        if (strpos($agent, "Firefox") !== false) {
            $pie_chart["Firefox"]["amt"]++;
        } else if (strpos($agent, "Chrome") !== false && strpos($agent, "Safari") + strlen("Safari") === strlen($agent)) {
            $pie_chart["Chrome"]["amt"]++;
        } else if (strpos($agent, "Chrome") !== false && strpos($agent, "Edg") !== false) {
            $pie_chart["Edge"]{"amt"}++;
        } else {
            $pie_chart["Other"]["amt"]++;
        }
    }

    /* Because of the way I have implemented the pie chart in CSS, 
        We need to add the percentage of the previous pie slices to the subsequent percentages */
    $pct_sum = 0;
    foreach($pie_chart as &$pie) {
        $pct = ($pie["amt"] * 100 / $total_agents);
        $pct_sum += $pct;
        $pie["pct"] = $pct_sum."%";
        $pie["actual_pct"] = round($pct);
    }

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/css/styles.css'>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/css/stats.css'>
                <style type='text/css'>
                    .pie {
                        width: 400px;
                        height: 400px;
                        /* background: conic-gradient(<color> <end%>, <color> <start% -or- 0%> <end%>, ..., <color> <start%>); */
                        background: conic-gradient(".$pie_chart['Chrome']['color']." ".$pie_chart['Chrome']['pct'].", 
                            ".$pie_chart['Firefox']['color']." 0% ".$pie_chart['Firefox']['pct'].", 
                            ".$pie_chart['Edge']['color']." 0% ".$pie_chart['Edge']['pct'].", 
                            ".$pie_chart['Other']['color']." 0% ".$pie_chart['Other']['pct'].");
                        transition: 0.25s;
                        border-radius: 200px;
                    }
                    .chrome-box {
                        display: flex;
                        width: 15px;
                        height: 15px;
                        background: ".$pie_chart['Chrome']['color'].";
                        border: 2px solid white;
                    }
                    .firefox-box {
                        display: flex;
                        width: 15px;
                        height: 15px;
                        background: ".$pie_chart['Firefox']['color'].";
                        border: 2px solid white;
                    }
                    .edge-box {
                        display: flex;
                        width: 15px;
                        height: 15px;
                        background: ".$pie_chart['Edge']['color'].";
                        border: 2px solid white;
                    }
                    .other-box {
                        display: flex;
                        width: 15px;
                        height: 15px;
                        background: ".$pie_chart['Other']['color'].";
                        border: 2px solid white;
                    }
					.timeseries-container {
                        display: flex;
                        background: black;
                        border: 2px solid white;
                        height: ".$STATIC_TS_CHART_HEIGHT."px;
                        margin: 20px;
                        align-items: flex-end;
                        gap: 5px;
                        padding: 0px 5px 5px 5px;
                    }

					.ts-point {
                        flex-grow: 1;
						background: white;
					}
                </style>
            </head>
            <a id='top'></a>
            <header>
                <ul>
                    <div class='pages'>
                        <li><a href='".HTTP_BASE."/'>Home</a></li>
                        <li><a href='".HTTP_BASE."/pages/about.php'>About</a></li>
                        <li><a href='".HTTP_BASE."/pages/contact.php'>Contact</a></li>
                        <li><a href='".HTTP_BASE."/pages/ewb.php'>EWB</a></li>
                        <li><a href='".HTTP_BASE."/pages/stats.php'>Site Stats</a></li>
                    </div>
                    <div class='socials'>
                        <a href='https://www.linkedin.com/in/cole-vaske-6644071a2/'>
                            <img src='".$BASE_DIR_PREFIX."images/linkedin.svg'>
                        </a>
                        <a href='https://github.com/cvaske2'>
                            <img src='".$BASE_DIR_PREFIX."images/github.svg'>
                        </a>
                    </div>
                </ul>
            </header>
                ".displayWarningBlock()."
            <main>
                <h2><b>Browser Access Statistics</b></h2>
                <p>This page has some statistics about what kinds of browsers are accessing my website. Your browser's user agent is collected when you land on my <a class='hyperlink' href=http://cse.unl.edu/~cvaske>index.html</a> page and stored in a file alongside others. When you refresh this page, that file is examined and the below is calculated. Everything you see is done entirely in PHP and CSS.</p>
                <p>You could sit on my <a class='hyperlink' href=http://cse.unl.edu/~cvaske>index.html</a> page and hit refresh to see this pie chart and the percentages shift. That being said, I clean out the .tsv file I use to store the user agents every now and again.</p>
                <div class='pie-container'>
                    <div class='pie'></div>
                    <div class='legend-ext'>
                        <div class='legend'>
                            <div class='chrome-box'></div>
                            <div class='textbox'>Chrome: ".$pie_chart["Chrome"]["actual_pct"]."%</div>
                            <div class='firefox-box'></div>
                            <div class='textbox'>Firefox: ".$pie_chart["Firefox"]["actual_pct"]."%</div>
                            <div class='edge-box'></div>
                            <div class='textbox'>Edge: ".$pie_chart["Edge"]["actual_pct"]."%</div>
                            <div class='other-box'></div>
                            <div class='textbox'>Other: ".$pie_chart["Other"]["actual_pct"]."%</div>
                        </div>
                    </div>
                </div>
                <div class='timeseries-container'>
					<div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>
                    <div class='ts-point' style='height: 150px'></div>
                    <div class='ts-point' style='height: 50px'></div>
                    <div class='ts-point' style='height: 40px'></div>   
                </div>
                <div class='ts-dates'>
                    <p>xx/xx/xxxx</p>
                    <p>xx/xx/xxxx</p>
                    <p>xx/xx/xxxx</p>
                </div>
            </main>
        </html>
        <footer>
            <a href='#top'>Back to top</a>
        </footer>
    ";

    echo $html_string;
?>