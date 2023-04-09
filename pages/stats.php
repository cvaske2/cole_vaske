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
                        width: 1em;
                        height: 1em;
                        background: ".$pie_chart['Chrome']['color'].";
                        border: .1em solid white;
                    }
                    .firefox-box {
                        width: 1em;
                        height: 1em;
                        background: ".$pie_chart['Firefox']['color'].";
                        border: .1em solid white;
                    }
                    .edge-box {
                        width: 1em;
                        height: 1em;
                        background: ".$pie_chart['Edge']['color'].";
                        border: .1em solid white;
                    }
                    .other-box {
                        width: 1em;
                        height: 1em;
                        background: ".$pie_chart['Other']['color'].";
                        border: .1em solid white;
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
                <p><b><u>This page is not intended to be practical</u></b>--a better method for generating these visualizations would be to use a JS library or some kind of server-side image generation process. The point was to improve my HTML and CSS skills as well as use PHP in a fun way.</p>
                <h2>Visitor Browser Distribution</h2>
                <div class='pie-container'>
                    <div class='pie'></div>
                    <div class='legend-ext'>
                        <table class='legend'>
                            <tr>
                                <th><u>###<//u></th>
                                <th><u>Browser</u></th>
                                <th><u>Ct.</u></th>
                                <th><u>Dist.</u></th>
                            </tr>
                            <tr>
                                <td><div class='chrome-box'></div></td>
                                <td>Chrome: </td>
                                <td>".$pie_chart["Chrome"]["amt"]."</td>
                                <td class='pct-cell'>".$pie_chart["Chrome"]["actual_pct"]."%</td>
                            </tr>
                            <tr>
                                <td><div class='firefox-box'></div></td>
                                <td>Firefox: </td>
                                <td>".$pie_chart["Firefox"]["amt"]."</td>
                                <td class='pct-cell'>".$pie_chart["Firefox"]["actual_pct"]."%</td>
                            </tr>
                            <tr>
                                <td><div class='edge-box'></div></td>
                                <td>Edge: </td>
                                <td>".$pie_chart["Edge"]["amt"]."</td>
                                <td class='pct-cell'>".$pie_chart["Edge"]["actual_pct"]."%</td>
                            </tr>
                            <tr>
                                <td><div class='other-box'></div></td>
                                <td>Other: </td>
                                <td>".$pie_chart["Other"]["amt"]."</td>
                                <td class='pct-cell'>".$pie_chart["Other"]["actual_pct"]."%</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br><br><br><br><br>
                <h2>Visitor Access Logs</h2>
                <div class='access-logs-container'>
                    <div class='ts-y-labels-wrapper'>
                        <span class='y-axis-label'><u>Visits</u></span>
                        <div class='ts-y-labels'>
                            <span>".$ts_chart["most_visits"]."</span>
                            <span>".intval($ts_chart["most_visits"]/2)."</span>
                        </div>
                    </div>
                    <div class='timeseries-container'>";

                        /* y-axis gridlines
                            The number of these is static so this isn't 100% necessary but I like to reduce my lines of code*/
                        $NUM_Y_GRIDLINES = 8;
                        for($i = 1; $i < $NUM_Y_GRIDLINES; ++$i) {
                            $html_string .= "<div class='y-bg-line' style='top: ".($i * 100 / $NUM_Y_GRIDLINES)."%;'></div>";
                        }

                        /* x-axis gridlines
                            The number of these is static so this isn't 100% necessary but I like to reduce my lines of code*/
                        $NUM_X_GRIDLINES = 24;
                        for($i = 1; $i < $NUM_X_GRIDLINES; ++$i) {
                            $html_string .= "<div class='x-bg-line' style='left: ".($i * 100 / $NUM_X_GRIDLINES)."%;'></div>";
                        }

                        // Place each bar in the timeseries chart
                        $bar_count = count($ts_chart["data"]);
                        $bar_iteration = 0;
                        foreach ($ts_chart["data"] as $visit_date => $visit_count_obj) {
                            
                            /* The following conditional loop and its corresponding variables sets the offset of the bar tooltip.
                                This is necessary because otherwise tooltips near the edge of the window will hang outside of the window,
                                making some of the information invisible to the user. */
                            ++$bar_iteration;
                            $content_alignment_offset = 0;
                            $OFFSETS_EFFECT_DEPTH = 14; // the number of bars from either edge that will be affected by this code
                            if ($bar_iteration < $OFFSETS_EFFECT_DEPTH) {
                                // This will produce a positive number so the tooltip is offset ot the right
                                $content_alignment_offset = ($OFFSETS_EFFECT_DEPTH - $bar_iteration) / 2;
                            } else if ($bar_count - $bar_iteration < $OFFSETS_EFFECT_DEPTH) {
                                // This will produce a negative number so the tooltip is offset ot the left
                                $content_alignment_offset = ($bar_count - $bar_iteration - 14) / 2;
                            }

                            $height = intval(($visit_count_obj["total"] / $ts_chart["most_visits"]) * $TS_CHART_HEIGHT);
                            $html_string .= "
                                <div class='ts-point' style='height: ".$height."px;'>
                                    <div class='ts-point-tooltip' style='transform: translateY(-100%) translateX(".$content_alignment_offset."em);'>
                                        <h4><b>".DateTime::createFromFormat("m-d-Y", $visit_date)->format("F j, Y")."</b></h4>
                                        <div class='tooltip-content-wrapper'>
                                            <div class='tooltip-point-pie-chart' style='background: conic-gradient(";

                            // Generate and place conic-gradient parameters
                            $pct_accumulation = 0;
                            foreach ($visit_count_obj as $browser => $browser_count) {
                                if ($browser == "total") {
                                    // Completely skip this so the pie chart remains unaffected
                                    continue;
                                }
                                $pct_accumulation += $browser_count * 100 / $visit_count_obj["total"];
                                $html_string .= $pie_chart[$browser]['color']." 0% ".$pct_accumulation."%, ";
                            }

                            // Remove last two characters before continuing (will strip the substring ", ")
                            $html_string = substr($html_string, 0, -2);
                            $html_string .= "
                                            );'></div>
                                            <table class='tooltip-browser-info'>
                                                <tr>
                                                    <th>
                                                    <th><u>Browser</u></th>
                                                    <th><u>Ct.</u></th>
                                                </tr>";

                            // Generate table row for each browser for that day
                            $total_count = null;
                            foreach ($visit_count_obj as $browser => $browser_count) {
                                // This case is handled later, but we need the count for that time.
                                if ($browser == "total") {
                                    $total_count = $browser_count;
                                } else {
                                    $html_string .= "
                                                <tr>
                                                    <td><div class='".strtolower($browser)."-box'></td>
                                                    <td>$browser:</td>
                                                    <td>$browser_count</td>
                                                </tr>";
                                }
                            }
                            $html_string .="
                                                <tr>
                                                    <td></td>
                                                    <td><b>Total<b>:</td>
                                                    <td><b>$total_count<b></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>";
                        }

                        $html_string .= "
                    </div>
                    <div>
                    </div>
                    <div class='ts-dates-wrapper'>
                        <span>".$ts_chart["first_date"]."</span>
                        <span>".$ts_chart["mid_date"]."</span>
                        <span style='float: right;'>".$ts_chart["last_date"]."</span>
                    </div>
                </div>
            </main>
        </html>
        <footer>
            <a href='#top'>Back to top</a>
        </footer>";

    echo $html_string;
?>