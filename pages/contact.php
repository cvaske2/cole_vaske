<?php
    require_once("../include/const.php");
    require_once("../include/logging.php");
    define('BASE_DIR_PREFIX' , "../"); // Prefix to the base dir (for images, etc.)
?>
<html>
    <head>
        <title>Cole Vaske</title>
        <link rel='stylesheet' href='../include/css/styles.css'>
        <link rel='stylesheet' href='../include/css/contact.css'>
        <script src='../include/js/global.js'></script>
        <script src='../include/js/contact.js'></script>
    </head>
    <a id='top'></a>
    <?php
        echo HEADER_STRING;
    ?>
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
            <div>
                <button class='submit-btn' id='submit-btn' type='button' onclick='submitForm(event)'>Submit</btn>
            </div>
            <div style='visibility: collapse;' id='submission-note-container'>
                <p>Your form has been successfully submitted. Thank you for contacting me.</p>
                <p>Your supplied e-mail: <u><span id='user-email'></span></u> on <u><span id='submission-date'></span></u></p>
            </div>
        </form>
    </main>
    <?php
        echo FOOTER_STRING;
    ?>
</html>