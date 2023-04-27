<?php
    require_once("../include/const.php");
?>
<html>
    <head>
        <title>Cole Vaske</title>
        <link rel='stylesheet' href='../include/css/styles.css'>
        <link rel='stylesheet' href='../include/css/ewb.css'>
        <script src='../include/js/global.js'></script>
        <script src='../include/js/ewb.js'></script>
    </head>
    <a id='top'></a>
    <?php
        echo HEADER_STRING;
    ?>
    <div class='content-wrapper'>
        <div class='nav'>
            <span class='nav-heading'><b>EWB Sub-pages</b></span>
            <div class='separator-bar-wrapper'>
                <div class='separator-bar'></div>
            </div>
            <ul>
                <li>
                    <button onclick="loadPage('main')">Main</button>
                </li>
                <li>
                    <button onclick="loadPage('ne_team')">Nebraska Team</button>
                </li>
                <li>
                    <button onclick="loadPage('roles')">My Roles</button>
                </li>
                <li>
                    <button onclick="loadPage('fundraising')">Fundraising</button>
                </li>
                <li>
                    <button onclick="loadPage('travel')">Summer 2023 Travel</button>
                </li>
            </ul>
            <div class='separator-bar-wrapper'>
                <div class='separator-bar'></div>
            </div>
        </div>
        <main>
            <?php
                echo CLASS_BLOCK;
            ?>
            <div id='main'>
                <h1>University of Nebraska Engineers Without Borders</h1>
                <p>I have been a member of the University of Nebraska student chapter of Engineers Without Borders (EWB-NU) for my entire collegiate career. The chapter is responsible for a bridge project in Zambia and a solar panel project in Madagascar, as well as a number of local outreach events and programs.</p>
                <p>During my time at EWB, I have been treasurer, fundraising lead and manager of the "Nebraska Team", and vice president.</p>
                <p>This page and its subpages details EWB-NUs and its projects, events, and my involvement in the organization.</p>
                
                <h1>About EWB-NU</h1>
                <p>EWB-NU is the Nebraska student chapter of Engineers Without Borders-USA. It was founded in 2010 and is an inter-campus student organization within the University of Nebraska system and has members on both UNL and UNO campuses.
                <p>The chapter is comprised of three core teams: the Zambia bridge team, the Madagascar solar team, and the Nebraska Team.</p>
                
                <h1>Zambia Team</h1>
                <p>This team was formed in 2017 and has been working in Zambia within the Sindowe region. Within this region lies the town of Zimbe--a community separated by the Kalomo river.</p>
                <p>During the dry season, this river remains fairly tame--rarely reaching heights greater than a few inches. Sometimes it even runs dry, like how it did when the Zambia team visited for a surveying trip in the summer of 2022.</p>
                <div class='multi-img-container'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_1.jpg' alt='Kalomo River during the summer 2019 survey trip' title='Kalomo River during the summer 2019 survey trip'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_2.jpg' alt='Kalomo River during the summer 2022 secondary survey trip' title='Kalomo River during the summer 2022 secondary survey trip'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_3.png' alt='Kalomo River during the summer 2022 secondary survey trip' title='Kalomo River during the summer 2022 secondary survey trip'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_4.png' alt='Kalomo River during the summer 2022 secondary survey trip' title='Kalomo River during the summer 2022 secondary survey trip'>
                </div>
                <p>However, during the rainy monsoon season, the river floods with rushing water. This creates dangerous conditions for people trying to cross between the two sides of the community--a year-round necessity given that one side of the river houses a hospital while the other has a large, popular marketplace.</p>
                <p>Members of this community have a need to cross year round, and every year at least one person dies trying to meet this need.</p>
                <p>As of Spring 2023, we are currently working on designing the bridge and evaluating the cost of construction materials for in-country fabrication.</p>
                
                <h1>Madagascar Team</h1>
                <p>Madagascar Tean was formed in 2009 to work with the rural Malagasy township of Kianjavato. Originally, our chapter intended to work on two projects with the community: a freshwater supply project, and a solar power project. The water project eventually was canceled and turned over to another NGO due to political reasons within the community.</p>
                <p>The power project with this community involves supplying power to schools within the township through solar panels and a battery array. These schools are quite dim even in the best of conditions, so we have also installed lights, enabling students to see better throughout the day and study into the night.</p>
                <div class='multi-img-container'>
                    <img class='multi-square-img' src='../images/ewb/madagascar/madagascar_1.jpg' alt='Group photo in Kianjavato' title='Group photo in Kianjavato'>
                    <img class='multi-square-img' src='../images/ewb/madagascar/madagascar_2.jpg' alt='Photo of studnets in a classroom in Kianjavato' title='Photo of studnets in a classroom in Kianjavato'>
                    <img class='multi-square-img' src='../images/ewb/madagascar/madagascar_3.jpg' alt='EWB members wiring in the attic of one of the schools' title='EWB members wiring in the attic of one of the schools'>
                </div>
                <p>Unfortunately, Madagascar recently experienced a severe monsoon season. Lots of infrastructure--including some of our systems--have been damaged. This, compounded by travel restrictions due to COVID-19 in the past few years, has extended the lifecycle of our project.</p>
                <p>I have actively been involved with Madagascar Tean as my time has permitted me during the past four years.</p>

                <h1>Nebraska Team</h1>
                <p>The Nebraska Team was founded in ~2018 and was formed because our fundraising and local outreach activities grew too large for a committee of only officers to handle.</p>
                <p>The Nebraska Team is responsible for fundraising and local outreach</p>
                <br><br><br>
            </div>
            <div id='ne_team' style='display: none;'>
                <h1>EWB-NU "Nebraska Team"</h1>
            </div>
            <div id='roles' style='display: none;'>
                <h1>My Roles in EWB-NU</h1>
            </div>
            <div id='fundraising' style='display: none;'>
                <h1>Fundraising</h1>
            </div>
            <div id='travel' style='display: none;'>
                <h1>Summer 2023 Madagascar Travel</h1>
            </div>
        </main>
    </div>
    <?php
        echo FOOTER_STRING;
    ?>
</html>