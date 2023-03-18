<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    $BASE_DIR_PREFIX = "../"; // Prefix to the base dir (for images, etc.)

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/styles.css'>
				<link rel='stylesheet' href='".$BASE_DIR_PREFIX."include/contact.css'>
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
				<h1>Contact Me</h1>
				<p>Use this form as a quick means of getting in touch with me.</p>
				<p>You can also contact me via e-mail at <a href='mailto:colevaske@outlook.com'>colevaske@outlook.com</a>.</p>
				<form id='contactForm'>
					<fieldset>
						<legend>Leave Your Message</legend> 

						<span>Type your Message here</span>
						<textarea name='message' id='message' rows='5' cols='70'></textarea>

						<span>Leave your e-mail so I can respond to you</span>
                        <!-- inline stlying on visibility because of how DOM styling is initailized and never rescanned -->
						<span style='visibility: collapse;' name='regex_warning' id='regex_warning'>Invalid e-mail format. Try again and resubmit.</span>
						<input type='text' name='email' id='email'>
					</fieldset>
					<script src='".$BASE_DIR_PREFIX."include/js/contact.js'></script>
					<button class='submit-btn' type='submit' onclick='submitForm(event)'>Submit</btn>
				</form>
            </main>
            <footer>
                <a href='#top'>Back to top</a>
            </footer>
        </html>
    ";

    echo $html_string;
?>