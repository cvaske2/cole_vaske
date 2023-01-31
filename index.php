<?php
	require_once("./include/callbacks.php");
	require_once("./include/const.php");

	$html_string = "<html>
						<head>
							<title>Cole Vaske</title>
							<link rel='stylesheet' href='include/styles.css'>
						</head>";

	$agent = null;

	try {
		$agent = $_SERVER['HTTP_USER_AGENT'];
	} catch(Exception $e) {
		$agent = -1;
	}
	
	$html_string .= "
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
									<img src='images/linkedin.svg'>
								</a>
								<a href='https://github.com/cvaske2'>
									<img src='images/github.svg'>
								</a>
							</div>
						</ul>
					</header>
					<body>
						<div>
							<div class='img-container'>
								<img class='header-img' src='images/me.jpg' alt='Cole Vaske Portrait'>
							</div>
							<h1>Cole Vaske</h1>
							<p>I am a senior Software Engineering student at the University of Nebraska--Lincoln. My career interests include database design and management, and backend systems development.</p><br>

							<h1>Resume</h1>
							<p>You can download my general resume here:</p>
							<form action='".HTTP_BASE."/include/Cole_Vaske.pdf'>
								<button class=button-92>Download PDF</button>
							</form>
						</div>
					</body>";
	$html_string .= "</html>\n";

	echo $html_string;
	
	// Save user agent to file for statistics purposes
	logVisit($agent);
?>