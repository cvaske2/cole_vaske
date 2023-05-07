<?php
    require_once("../include/const.php");
    require_once("../include/callbacks.php");
    require_once("../include/logging.php");
    define('BASE_DIR_PREFIX' , "../"); // Prefix to the base dir (for images, etc.)

    // $EMAIL_REGEX = "/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
    $validated_parameters = true;
    $message = $_GET['message'];
    $email = $_GET['email'];

    # Run some quick checks on passed parameters (broken out for readability)
    if ($message === null || $email === null)
        $validated_parameters = false;
    else if ($message === "")
        $validated_parameters = false;
    // else if (!preg_match($email_regex, $email))
    //     $validated_parameters = false;

    $html_string = "
        <html>
            <head>
                <title>Cole Vaske</title>
                <link rel='stylesheet' href='".BASE_DIR_PREFIX."include/css/styles.css'>
				<link rel='stylesheet' href='".BASE_DIR_PREFIX."include/css/contact.css'>
                <script src='".BASE_DIR_PREFIX."include/js/global.js'></script>
                <script src='".BASE_DIR_PREFIX."include/js/contact.js'></script>
            </head>
            <a id='top'></a>
            ".HEADER_STRING."
			".CLASS_BLOCK;

            $html_string .= $validated_parameters ? returnContactSuccess($email) : returnContactForm();

            $html_string .= FOOTER_STRING;

            $html_string .= "
        </html>";

    echo $html_string;

    if ($validated_parameters) {
        submitMessage($message, $email);
    }

    function returnContactForm() {
        return "<main>
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
                        <button class='submit-btn' id='submit-btn' type='button' onclick='submitForm(event)'>Submit</btn>
                    </form>
                </main>
            ";
    }

    function returnContactSuccess($email) {
        return "<main>
                    <h1>Contact Me</h1>
                    <p>Your form has been successfully submitted. Thank you for contacting me.</p>
                    <p>Your supplied e-mail: <u>$email</u></p>
                </main>";
    }

    function submitMessage($message, $email) {
        $fp = fopen(BASE_DIR_PREFIX."logs/contact_submissions.txt", "a");
        $input = buildDateHeader()."\n[SENDER] $email\n[MESSAGE]\n\n".trim($message)."\n\n[END MESSAGE]\n";
        fwrite($fp, $input);
        fclose($fp);
    }
?>