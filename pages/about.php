<?php
    require_once("../include/const.php");
?>

<html>
    <head>
        <title>Cole Vaske</title>
        <link rel='stylesheet' href='../include/css/styles.css'>
        <link rel='stylesheet' href='../include/css/about.css'>
        <script src='../include/js/global.js'></script>
    </head>
    <a id='top'></a>
    <?php
        echo HEADER_STRING;
    ?>
    <main>
        <h1>Background</h1>
        <p>I gained interested in engineering when I did VEX Robotics in middle school. At the time, I was only interested in the mechanical design and operation of the crude robot we were building.</p>
        <p>I remember at one point, our pseudo-linear-slide lift kept slipping off the tracks, so we added a bunch of rubber bands to hold the slide towers together more tigntly so the lift wouldn't slip. At the time, programming was not something that I was interested in--even the higly optimized <a href='https://www.vexrobotics.com/easyc-v5.html'>graphical programming UI that VEX distributed at the time</a> was too daunting for me to understand.<p>
        <p>While at Omaha North High School, I took some of the engineering classes that were offered. One of them was an introductory Computer Science course, where we learned Python. I never particularly enjoyed the course until I decided to make a calculator for my final project. I fell in love with all of the different design possibilities and different approaches that I could take on to complete the app.</p>
        <p>After that, I applied some of my programming interest by working on the programming side of VEX robotics and taking additional programming and computing classes in high school.</p>
        <div class='about-img-container'>
            <img class='robotics-img' src='../images/about/1064J_1.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/1064J_2.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/1064C_1.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/1064C_2.jpg' alt='Image of Omaha North High School robotics activities'>
        </div>
        <p>By my junior year of high school, I had enough experience in robotics to start seeing some success. Thanks to the success of my team and a generous grant towards our robotics program, I had the opportunity to fly to China to compete in an international <a href='https://www.create-found.org/'>CREATE robotics</a> tournament in Shanghai during the summer of 2018. This was a life-changing experience that I will never forget.
        <div class='about-img-container'>
            <img class='robotics-img' src='../images/about/china_1.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/china_2.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/china_3.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/china_4.jpg' alt='Image of Omaha North High School robotics activities'>
            <img class='robotics-img' src='../images/about/china_5.jpg' alt='Image of Omaha North High School robotics activities'>
        </div>
        <p>With my team and an alliance with another team from the boarding school in China, we were tournament finalists.</p>

        <h1>Career Choice</h1>
        <p>By my junior year of high school, I realized I liked programming enough to pursue it as a career. After searching at programs around the midwest area and looking at costs, I settled on UNL.</p>
        <p>I did not originally plan to attend UNL for Software Engineering, I planned on Computer Science. My first year, the Software Engineering program was a relatively new program and lesser known than the Computer Science program. After applying to UNL and being accepted, I examined the Software Engineering major and realized that developing professional software for real-world applications was more suitable to me, so I decided upon Software Engineering.</p>

        <h1>Relevant Coursework</h1>
        <p>I have fulfilled or am actively fulfilling within this semester the entire UNL 2019-2020 catalogue year requirements for a Bachelors of Science in Software Engineering with a minor in mathematics.</p>
        <p>In addition to Software Engineering, I will also be graduating with a minor in Mathematics as well as a <a href='https://computing.unl.edu/focus-areas/'>focus area</a> in Data Science and Informatics. These courses included:</p>
        <ul>
            <li><b>[CSCE 474] Data Mining</b> [currently enrolled] - Introduction to data preparation and cleaning, apriori principle and association rules generation, clustering, and data classification.</li>
            <li><b>[CSCE 411] Data Modeling</b> - Introduction to SQL and NoSQL-type databases, data analysis using K-Means clustering and related models for market masket analysis, and elementary introduction to data modeling on webpages.</li>
            <li><b>[CSCE 413] Database Systems</b> - Introduction to constraint databases and their applications.</li>
        </ul>
        <p>I have also taken several optional technical electives, including:</p>
        <ul>
            <li><b>[CSCE 462] Communication Networks</b> - Introductory networking course covering internet architecture, protocols, checksums, and end-to-end delay analysis.</li>
            <li><b>[CSCE 464] Internet Systems Programming</b> - Introductory website programming course covering HTML, CSS, Javascript, PHP, and front-end frameworks. Part of this website (the <a href='contact.php'>contact</a>, <a href='EWB'>EWB</a>, and <a href='stats'>stats</a> page) were used for a graded project in this class.</li>
            <li><b>[CSCE 451] Operating Systems Principles</b> - Introduction to operating systems principles and low-level programming concepts such as memory management, synchronization, and program management.</li>
            <li><b>[SOFT 460] Software Engineering for Robotics</b> - Introduction to autonomous car concepts using the F1TENTH base model vehicle running ROS on an embedded Linux system including LIDAR processing and localization and mapping.</li>
        </ul>
    </main>
    <?php
        echo FOOTER_STRING;
    ?>
</html>