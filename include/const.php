<?php
    date_default_timezone_set("America/Chicago");
    define("HTTP_BASE", "https://cse.unl.edu/~cvaske");
    define("PORTRAIT_URL", "http://media-exp1.licdn.com/dms/image/D5603AQG3W9cPDX4WxQ/profile-displayphoto-shrink_800_800/0/1664315060063?e=1672876800&v=beta&t=1ev4yd7_A54MZ_26QgrKdxn1OFe1TFA95g3SNjwsvp0");
	define("CHROME_AGENT_LENGTH", 111);

    define("HEADER_STRING", 
        "<header>
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
                        <img src='".HTTP_BASE."/images/linkedin.svg'>
                    </a>
                    <a href='https://github.com/cvaske2'>
                        <img src='".HTTP_BASE."/images/github.svg'>
                    </a>
                </div>
            </ul>
        </header>"
    );

    define("WARNING_BLOCK", 
        "<style type='text/css'>
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
            <img class='warning-png' src='".HTTP_BASE."/images/warning.png'>
            <p class='warn-text'><b class='warning'>WARNING!</b> This page is still under heavy construction. I left this unfinished page on the production site because I still think it is interesting and a display of what I am currently working on. Feel free to browse, but know that you may run into issues as it is an unfinished product.</p>
            <img class='warning-png' src='".HTTP_BASE."/images/warning.png'>
        </div>"
    );

    define("CLASS_BLOCK", 
        "<style type='text/css'>
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
            <img class='warning-png' src='".HTTP_BASE."/images/yellow_warning.png'>
            <p class='warn-text'>This page is being used for a class-related project. Its contents may not make sense with the theme of the page for the purpose of meeting certain requirements, and its state is not final.</p>
            <img class='warning-png' src='".HTTP_BASE."/images/yellow_warning.png'>
        </div>"
    );
?>