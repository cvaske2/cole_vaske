<?php
    require_once("const.php");

	define("USER_AGENTS_FILE", "/home/ugrad/cvaske/public_html/logs/user_agents.tsv"); // file to collect user agents -- use absolute path because it is included elsewhere
    
    function logVisit($agent) {
        // <User agent>    YYYY-mm-dd hh:mm:ss
        $input_string = "<".$agent.">\t".date("Y-m-d")." ".date("H:i:s")."\n";

        $fp = fopen(USER_AGENTS_FILE, 'a');
        fwrite($fp, $input_string);
        fclose($fp);
    }
?>