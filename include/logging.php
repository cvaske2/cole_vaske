<?php
    define("LOGFILE", "/home/ugrad/cvaske/public_html/logs/log.txt"); // log file

    function buildDateHeader() {
        $date = date('dMY h:i:s A');
        $date = "########## -----------[ $date ]----------- ##########";
        $upper_lower = str_repeat("#", strlen($date));

        return $upper_lower."\n".$date."\n".$upper_lower;
    }

    function logLine($str) {
        $fp = fopen(LOGFILE, 'a');
        $input = buildDateHeader()."\n".$str."\n\n\n\n\n";
        fwrite($fp, $input);
        fclose($fp);
    }
?>