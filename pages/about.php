<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/css/styles.css'>
                <script src='".BASE_DIR_PREFIX."include/js/global.js'></script>
            </head>
            <a id='top'></a>
            ".HEADER_STRING."
            <main>
                <p>This page contains some background about how I became interested in engineering and programming, my current goals and interests, etc.</p>
                <h1>Background</h1>
                <p>I became interested in engineering when I did VEX Robotics in middle school. At the time, I was only interested in the mechanical design and operation of the crude robot we were building. I remember at one point, our linear tower kept slipping off the tracks, so we added a bunch of rubber bands to hold the slide towers together more tigntly so the moving tower wouldn't slip. At the time, programming was not something that I was interested in--even higly optimized graphical UI that VEX distributed at the time was too daunting for me to understand. While at Omaha North High School, I took some of the engineering classes that were offered. One of them was an introductory Computer Science course, where we learned Python. I never particularly enjoyed the course until I decided to make a calculator for my final project. I fell in love with all of the different design possibilities and different approaches that I could take on to complete the app.</p>
                <p>After that, I applied some of my programming interest by working on the programming side of VEX robotics and taking additional programming and computing classes in high school. I did not originally plan to attend UNL for Software Engineering, I planned on Computer Science. My first year, the Software Engineering program was a relatively new program and lesser known than the Computer Science program. After applying to UNL and being accepted, I examined the Software Engineering major and realized that developing professional software for real-world applications was more suitable to me, so I decided upon Software Engineering.</p>

                <h1>Relevant Coursework</h1>
                <p>I have fulfilled or am actively fulfilling within this semester the entire UNL 2019-2020 catalogue year requirements for a Bachelors of Science in Software Engineering</p>
                <p>In addition to Software Engineering, I will also be graduating with a minor in Mathematics as well as a <a href='https://computing.unl.edu/focus-areas/'>focus area</a> in Data Science and Informatics. These courses included:</p>
                <ul>
                    <li><b>[CSCE 474] Data Mining</b> [currently enrolled] - Introduction to data preparation and cleaning, apriori principle and association rules generation, clustering, and data classification.</li>
                    <li><b>[CSCE 411] Data Modeling</b> - Introduction to SQL and NoSQL-type databases, data analysis using K-Means clustering and related models for market masket analysis, and elementary introduction to data modeling on webpages.</li>
                    <li><b>[CSCE 413] Database Systems</b> - Introduction to constraint databases and their applications.</li>
                </ul>
                <p>I have also taken several optional technical electives, including:</p>
                <ul>
                    <li><b>[CSCE 462] Communication Networks</b> - Introductory networking course covering internet architecture, protocols, checksums, and end-to-end delay analysis.</li>
                    <li><b>[CSCE 464] Internet Systems Programming</b> - Introductory website programming course covering HTML, CSS, Javascript, PHP, and front-end frameworks.</li>
                    <li><b>[CSCE 451] Operating Systems Principles</b> - Introduction to operating systems principles and low-level programming concepts such as memory management, synchronization, and program management.</li>
                    <li><b>[SOFT 460] Software Engineering for Robotics</b> - Introduction to autonomous car concepts using the F1TENTH base model vehicle running ROS on an embedded Linux system including LIDAR processing and localization and mapping.</li>
                </ul>
            </main>
        </html>
        <footer>
            <a href='#top'>Back to top</a>
        </footer>
    ";

    echo $html_string;
?>