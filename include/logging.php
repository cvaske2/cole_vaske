<?php
    define("LOGFILE", "/home/ugrad/cvaske/public_html/logs/log.txt"); // log file

    function buildDateHeader() {
        $date = date('dMY h:i:s A');
        $date = "########## -----------[ $date ]----------- ##########";
        $upper_lower = str_repeat("#", strlen($date));

        return $upper_lower."\n".$date."\n".$upper_lower;
    }

    function logLine($str, $overwrite = false) {
        if (is_array($str)) {
            $str = json_encode($str, JSON_PRETTY_PRINT);
        } else if ($str instanceof DateTime) {
            $str = $str->format('dMY');
        }

        $fp = null;
        if ($overwrite) {
            $fp = fopen(LOGFILE, 'w');
        } else {
            $fp = fopen(LOGFILE, 'a');
        }
        $input = buildDateHeader()."\n".$str."\n\n";

        fwrite($fp, $input);
        fclose($fp);
    }
?>