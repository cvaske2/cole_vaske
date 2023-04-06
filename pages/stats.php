<?php
    require_once("../include/const.php");
    require_once("../include/logging.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $PIE_CHART_VH = 70;
    $TS_CHART_HEIGHT = 300;

    $pie_chart = json_decode(file_get_contents("../logs/data/user_agent_calc.json"), true);
    $ts_chart = json_decode(file_get_contents("../logs/data/timeseries_data.json"), true);
    
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
                    .timeseries-container {
                        display: flex;
                        position: relative;
                        background: black;
                        border: 2px solid white;
                        width: 98%;
                        height: ".$TS_CHART_HEIGHT."px; /* this will eventually be changed in the HTML file */
                        margin-right: auto;
                        margin-top: 12px;
                        align-items: flex-end;
                        gap: 2px;
                        padding: 2px 2px 2px 2px;
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
                    <div class='ts-y-labels'>
                        <span>".$ts_chart["most_visits"]." visits</span>
                        <span>".intval($ts_chart["most_visits"]/2)." visits</span>
                    </div>
                    <div class='timeseries-container'>
                        <div class='y-bg-line-1'></div>
                        <div class='y-bg-line-2'></div>
                        <div class='y-bg-line-3'></div>
                        <div class='x-bg-line-1'></div>
                        <div class='x-bg-line-2'></div>
                        <div class='x-bg-line-3'></div>
                        <div class='x-bg-line-4'></div>
                        <div class='x-bg-line-5'></div>
                        <div class='x-bg-line-6'></div>
                        <div class='x-bg-line-7'></div>";

                        foreach ($ts_chart["data"] as $visit_count) {
                            $height = intval(($visit_count / $ts_chart["most_visits"]) * $TS_CHART_HEIGHT);
                            $html_string .= "
                                <div class='ts-point' style='height: ".$height."px'>
                                    <div class='ts-point-tooltip'></div>
                                </div>";
                        }

                        $html_string .= "
                    </div>
                    <div>
                    </div>
                    <div class='ts-dates'>
                        <span>".$ts_chart["first_date"]."</span>
                        <span>".$ts_chart["mid_date"]."</span>
                        <span style='float: right;'>".$ts_chart["last_date"]."</span>
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