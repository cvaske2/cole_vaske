<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/styles.css'>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/ewb.css'>
            </head>
            <a id='top'></a>
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
            ".displayClassBlock()."
            <main>
                <h1>Select a Background Color</h1>
                <div class='dropdown-container'>
                    <button class='dropdown-btn'>Background Color</button>
                    <div class='dropdown-options'>
                        <p class='dropdown-item' onclick=\"changeBackgroundColor('green')\">Green</p>
                        <p class='dropdown-item' onclick=\"changeBackgroundColor('brown')\">Brown</p>
                        <p class='dropdown-item' onclick=\"changeBackgroundColor('purple')\">Purple</p>
                    </div>
                </div>
            </main>
            <footer>
                <a href='#top'>Back to top</a>
            </footer>
        </html>
        <script>
            function changeBackgroundColor(color) {
                console.log('we in here');
                const color_codes = {
                    green: '#132300',
                    brown: '#432300',
                    purple: '#35004a'
                };
                document.body.style.backgroundColor = color_codes[color];
            }
        </script>
    ";

    echo $html_string;
?>