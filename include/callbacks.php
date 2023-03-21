<?php
	define("USER_AGENTS_FILE", "/home/ugrad/cvaske/public_html/logs/user_agents.tsv"); // file to collect user agents -- use absolute path because it is included elsewhere

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
                .warn-text {
                    color: #ffffff;
                    font-family: monospace;
                    font-size: 18px;
                    padding-left: 15px;
                    padding-right: 15px;
                  }
            </style>
            <div class='container-warning'>
                <!-- Image obtained from https://openclipart.org/ -->
                <img class='warning-png' src='".$BASE_DIR."images/warning.png'>
                <p class='warn-text'><b class='warning'>WARNING!</b> This page is still under heavy construction. I left this unfinished page on the production site because I still think it is interesting and a display of what I am currently working on. Feel free to browse, but know that you may run into issues as it is an unfinished product.</p>
                <img class='warning-png' src='".$BASE_DIR."images/warning.png'>
            </div>
        ";
    }

    function displayClassBlock($BASE_DIR = "../")
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
                .container-class-warning {
                    display: grid;
                    grid-template-rows: 1fr;
                    grid-template-columns: .1fr 1fr .1fr;
                    border: 3px solid yellow;
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
                .warn-text {
                    color: #ffffff;
                    font-family: monospace;
                    font-size: 18px;
                    padding-left: 15px;
                    padding-right: 15px;
                  }
            </style>
            <div class='container-class-warning'>
                <!-- Image obtained from https://openclipart.org/ -->
                <img class='warning-png' src='".$BASE_DIR."images/yellow_warning.png'>
                <p class='warn-text'>This page is being used for a class-related project. Its contents may not make sense with the theme of the page for the purpose of meeting certain requirements, and its state is not final.</p>
                <img class='warning-png' src='".$BASE_DIR."images/yellow_warning.png'>
            </div>
        ";
    }
?>