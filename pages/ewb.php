<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/css/styles.css'>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/css/ewb.css'>
                <script src='".BASE_DIR_PREFIX."include/js/global.js'></script>
            </head>
            <a id='top'></a>
            ".HEADER_STRING."
            ".CLASS_BLOCK."
            <main>
                <h1>University of Nebraska Engineers Without Borders</h1>
                <p>I have been a member of the University of Nebraska student chapter of Engineers Without Borders (EWB-NU) for my entire collegiate career. The chapter is responsible for a bridge project in Zambia and a solar panel project in Madagascar, as well as a number of local outreach events and programs.</p>
                <p>During my time at EWB, I have been treasurer, fundraising lead and manager of the \"Nebraska Team\", and vice president.</p>
                <p>This page and its subpages details EWB-NUs and its projects, events, and my involvement in the organization.</p>
            </main>
            <footer>
                <a href='#top'>Back to top</a>
            </footer>
        </html>
    ";

    echo $html_string;
?>