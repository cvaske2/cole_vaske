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
							<div class='content'>
								<h1>Cole Vaske</h1>
								<p>I am a senior Software Engineering student at the University of Nebraska--Lincoln. My career interests include database design and management, and backend systems development.</p><br>

								<h1>Resume</h1>
								<p>You can download my general resume here:</p>
								<form action='".HTTP_BASE."/include/Cole_Vaske.pdf'>
									<button class='btn-download'>
										Download PDF
										<svg class='btn-svg' title='Download' width='21' height='21' viewBox='0 0 24 24' fill='none'>
											<!-- Acquired from https://www.svgrepo.com/ -->
											<path d='M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5'></path>
										</svg>
									</button>
								</form>
							</div>
						</div>
					</body>";
	$html_string .= "</html>\n";

	echo $html_string;
	
	// Save user agent to file for statistics purposes
	logVisit($agent);
?>