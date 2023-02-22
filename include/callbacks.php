<?php
	define("USER_AGENTS_FILE", "/home/ugrad/cvaske/public_html/logs/user_agents.tsv"); // file to collect user agents -- use absolute path because it is included elsewhere

    $BASE_DIR_PREFIX = "../";

    // function addChromeNote($agent)
    // {
    //     $chrome_pos = strpos($agent, "Chrome/"); // will return -1 if not found, making following conditional false
    //     if ($chrome_pos) { // Chromium-based browser
    //         $browser_info_substring = substr($agent, $chrome_pos);
            
    //         // This will only occur is Chrome is used. Non-Chrome Chromium browsers have additional forward-slashes indicating browser info.
    //         if(substr_count($browser_info_substring, "/") === 2) {
    //             return "<p>
    //                         Hi there, thanks for visiting my webpage.<br>
    //                         I noticed you're using the Google Chrome browser. You're not alone--<a href='https://www.w3schools.com/browsers/'>most people also use chrome</a>.<br>
    //                         As a developer and browser enthusiast, I would like to recommend that you switch to another browser--particularly a <a href='https://www.computerworld.com/article/3261009/googles-chromium-browser-explained.html'>non-chromium browser</a>.<br>
    //                         This is so you can help maintain a more <a href='https://medium.com/samsung-internet-dev/because-browser-diversity-is-good-for-the-web-910d1cbcdf3b'>diverse internet</a>, and for <a href='https://thehackernews.com/2021/03/google-to-reveals-what-personal-data.html'>privacy concerns</a>. While not perfect by any means, I primarily use Firefox.<br>
    //                         Thanks!
    //                     </p>";
    //         }
    //     }
    //     return "";
    // }

    function logVisit($agent)
    {
        // <User agent>    YYYY-mm-dd hh:mm:ss
        $input_string = "<".$agent.">\t".date("Y-m-d")." ".date("H:i:s")."\n";

        $fp = fopen(USER_AGENTS_FILE, 'a');
        fwrite($fp, $input_string);
        fclose($fp);
    }

    // TODO: Change or get rid of this default parameter, preferably get rid of the parameter altogether if possible
    function displayWarningBlock($BASE_DIR = "../")
    {
        return "
            <style type='text/css'>
                .container-warning {
                    display: grid;
                    grid-template-rows: 1fr;
                    grid-template-columns: .1fr 1fr .1fr;
                    border: 3px solid red;
                    background: black;
                    margin: 2vw;
                }
                
                .warning {
                    font-size: 20px;
                }
                
                .warning-png {
                    display: block;
                    margin: auto;
                    width: 70px;
                    height: auto;
                }
            </style>
            <div class='container-warning'>
                <!-- Image obtained from https://openclipart.org/ -->
                <img class='warning-png' src='".$BASE_DIR."images/warning.png'>
                <p><b class='warning'>WARNING!</b> This page is still under heavy construction. I left this unfinished page on the production site because I still think it is interesting and a display of what I am currently working on. Feel free to browse, but know that you may run into issues as it is an unfinished product.</p>
                <img class='warning-png' src='".$BASE_DIR."images/warning.png'>
            </div>
        ";
    }
?>