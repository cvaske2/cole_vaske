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
            ".displayWarningBlock()."
			".displayClassBlock()."
            <main>
				<form id='contactForm'>
					<fieldset>
						<legend>Message</legend> 
						<table>
							<tr>
							<td>Type your Message here</td>
							</tr>
							<tr>
								<td><textarea name='message' id='message' rows='5' cols='70'></textarea></td>
							</tr>
							<tr>
								<td>Rate my site out of 5 stars!</td>
							</tr>
						</table>
						<table>
							<tr>
								<td><i>[1 star]</i></td>
								<td><input type='radio' id='rad1' name='radio-group'></td>
								<td><input type='radio' id='rad2' name='radio-group'></td>
								<td><input type='radio' id='rad3' name='radio-group'></td>
								<td><input type='radio' id='rad4' name='radio-group'></td>
								<td><input type='radio' id='rad5' name='radio-group'></td>
								<td><i>[5 star]</i></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Leave your e-mail so I can contact you</td>
							</tr>
							<tr>
								<td>
									<input class='email-txt' type='text' name='email' id='email'>
								</td>
							</tr>
						</table>
					</fieldset>
				<td>
					<button class='submit-btn' onclick='submitForm()'>Submit Button</btn>
				</td>
			</form>
            </main>
            <footer>
                <a href='#top'>Back to top</a>
            </footer>
        </html>
		<script>
			function getRating(form) {
				if (form.rad1.checked)
				return 1;
				else if (form.rad2.checked)
				return 2;
				else if (form.rad3.checked)
				return 3;
				else if (form.rad4.checked)
				return 4;
				else if (form.rad5.checked)
				return 5;
				return null;
			}
			console.log('we in here');
			function submitForm() {
				var contactForm = document.getElementById('contactForm');
				console.log(contactForm);
				var message = contactForm.message.value;
				var rating = getRating(contactForm);
				var email = contactForm.email.value;

				rating = rating === null ? '<no rating given>' : rating + '/5';
				
				var word_count = message === '' ? 0 : (message.match(/ /g) || []).length + 1;

				var output = `Number of words: \${word_count}\nYour rating: \${rating}\nYour supplied e-mail: \${email}`;
				alert(output);
			}
		</script>
    ";

    echo $html_string;
?>