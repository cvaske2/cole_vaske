<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/styles.css'>
            </head>
            <header>
                <ul>
                    <div class='pages'>
                        <li><a href='".HTTP_BASE."/'>Home</a></li>
                        <li><a href='".HTTP_BASE."/pages/about.php'>About</a></li>
                        <li><a href='".HTTP_BASE."/pages/contact.php'>Contact</a></li>
                        <li><a href='".HTTP_BASE."/pages/ewb.php'>EWB</a></li>
                        <li><a href='".HTTP_BASE."/pages/stats.php'>Site Stats</a></li>
                    </div>
                    <div class='socials'>
                        <a href='https://www.linkedin.com/in/cole-vaske-6644071a2/'>
                            <img src='".$BASE_DIR_PREFIX."images/linkedin.svg'>
                        </a>
                        <a href='https://github.com/cvaske2'>
                            <img src='".$BASE_DIR_PREFIX."images/github.svg'>
                        </a>
                    </div>
                </ul>
            </header>
            ".displayWarningBlock()."
            <main>
                <p>This page contains some background about how I became interested in engineering and programming, my current goals and interests, etc.</p>
                <h1>Background</h1>
                <p>I became interested in engineering when I did VEX Robotics in middle school. At the time, I was only interested in the mechanical design and operation of the crude robot we were building. I remember at one point, our linear tower kept slipping off the tracks, so we added a bunch of rubber bands to hold the slide towers together more tigntly so the moving tower wouldn't slip. At the time, programming was not something that I was interested in--even higly optimized graphical UI that VEX distributed at the time was too daunting for me to understand. While at Omaha North High School, I took some of the engineering classes that were offered. One of them was an introductory Computer Science course, where we learned Python. I never particularly enjoyed the course until I decided to make a calculator for my final project. I fell in love with all of the different design possibilities and different approaches that I could take on to complete the app.</p>
                <p>After that, I applied some of my programming interest by working on the programming side of VEX robotics and taking additional programming and computing classes in high school. Funnily enough, I didn't originally plan to come to uNL for Software Engineering. I wanted to be a Computer Science major. However, at the time, Computer Science was a major under the College of Arts and Sciences, which had elevated high school language requirements that I did not meet. To sidestep this, I looked at Software Engineering and realized that the program offered something that more closely resembled what I wanted as a career, so I made the switch.</p>

                <h1>Projects</h1>
            </main>
        </html>
    ";

    echo $html_string;
?>