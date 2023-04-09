<?php
    require_once("../include/const.php");
?>
<html>
    <head>
        <title>Cole Vaske</title>
        <link rel='stylesheet' href='../include/css/styles.css'>
        <link rel='stylesheet' href='../include/css/ewb.css'>
        <script src='../include/js/global.js'></script>
    </head>
    <a id='top'></a>
    <?php
        echo HEADER_STRING;
    ?>
    <div class='content-wrapper'>
        <div class='nav'>
            <span class='nav-heading'>EWB Sub-pages</span>
            <div class='separator-bar-wrapper'>
                <div class='separator-bar'></div>
            </div>
            <ul>
                <li>
                    <button>Main</button>
                </li>
                <li>
                    <button>Nebraska Team</button>
                </li>
                <li>
                    <button>My Roles</button>
                </li>
                <li>
                    <button>Summer 2023 Travel</button>
                </li>
            </ul>
        </div>
        <main>
            <?php
                echo CLASS_BLOCK;
            ?>
            <h1>University of Nebraska Engineers Without Borders</h1>
            <p>I have been a member of the University of Nebraska student chapter of Engineers Without Borders (EWB-NU) for my entire collegiate career. The chapter is responsible for a bridge project in Zambia and a solar panel project in Madagascar, as well as a number of local outreach events and programs.</p>
            <p>During my time at EWB, I have been treasurer, fundraising lead and manager of the "Nebraska Team", and vice president.</p>
            <p>This page and its subpages details EWB-NUs and its projects, events, and my involvement in the organization.</p>
        </main>
    </div>
    <?php
        echo FOOTER_STRING;
    ?>
</html>