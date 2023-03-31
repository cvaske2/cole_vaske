<?php
    require_once("../include/const.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $PIE_CHART_VH = 70;

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
                        width: ".$PIE_CHART_VH."vh;
                        height: ".$PIE_CHART_VH."vh;
                        /* background: conic-gradient(<color> <end%>, <color> <start% -or- 0%> <end%>, ..., <color> <start%>); */
                        background: conic-gradient(".$pie_chart['Chrome']['color']." ".$pie_chart['Chrome']['pct'].", 
                            ".$pie_chart['Firefox']['color']." 0% ".$pie_chart['Firefox']['pct'].", 
                            ".$pie_chart['Edge']['color']." 0% ".$pie_chart['Edge']['pct'].", 
                            ".$pie_chart['Other']['color']." 0% ".$pie_chart['Other']['pct'].");
                        border-radius: ".$PIE_CHART_VH."vh;
                    }
                    .chrome-box {
                        width: 2vw;
                        height: 2vw;
                        background: ".$pie_chart['Chrome']['color'].";
                        border: 3px solid white;
                    }
                    .firefox-box {
                        width: 2vw;
                        height: 2vw;
                        background: ".$pie_chart['Firefox']['color'].";
                        border: 3px solid white;
                    }
                    .edge-box {
                        width: 2vw;
                        height: 2vw;
                        background: ".$pie_chart['Edge']['color'].";
                        border: 3px solid white;
                    }
                    .other-box {
                        width: 2vw;
                        height: 2vw;
                        background: ".$pie_chart['Other']['color'].";
                        border: 3px solid white;
                    }
                </style>
                <script src='".BASE_DIR_PREFIX."include/js/global.js'></script>
            </head>
            <a id='top'></a>
            ".HEADER_STRING."
            ".WARNING_BLOCK."
            <main>
                <h2 style='margin: none;'>Browser Access Statistics</h2>
                <p>This page has some statistics about what kinds of browsers are accessing my website. Your browser's user agent is collected when you land on my <a class='hyperlink' href=http://cse.unl.edu/~cvaske>index.html</a> page and stored in a file alongside others. When you refresh this page, that file is examined and the below is calculated.</p>
                <p>Everything was done using HTML and CSS, preprocessed with PHP. No Javascript was used whatsoever on this page.
                <p><b><u>This page is not intended to be practical</u></b>--a better method for generating these visualizations would be to use a JS library or some kind of backend image generation process. The point was to improve my HTML and CSS skills as well as use PHP in a fun way.</p>
                <h2>Visitor Browser Distribution</h2>
                <div class='pie-container'>
                    <div class='pie'></div>
                    <div class='legend-ext'>
                        <table class='legend'>
                            <tr>
                                <td><div class='chrome-box'></div></td>
                                <td>Chrome: </td>
                                <td class='pct-cell'>".$pie_chart["Chrome"]["actual_pct"]."%</td>
                            </tr>
                            <tr>
                                <td><div class='firefox-box'></div></td>
                                <td>Firefox: </td>
                                <td class='pct-cell'>".$pie_chart["Firefox"]["actual_pct"]."%</td>
                            </tr>
                            <tr>
                                <td><div class='edge-box'></div></td>
                                <td>Edge: </td>
                                <td class='pct-cell'>".$pie_chart["Edge"]["actual_pct"]."%</td>
                            </tr>
                            <tr>
                                <td><div class='other-box'></div></td>
                                <td>Other: </td>
                                <td class='pct-cell'>".$pie_chart["Other"]["actual_pct"]."%</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br><br><br><br><br>
                <h2>Visitor Access Logs</h2>
                <div class='access-logs-container'>
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
                        <p style='float: right;'>xx/xx/xxxx</p>
                    </div>
                </div>
            </main>
        </html>
        <footer>
            <a href='#top'>Back to top</a>
        </footer>
    ";

    echo $html_string;
?>