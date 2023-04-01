<?php
	require_once("./include/const.php");
	require_once("./include/callbacks.php");
	require_once("./include/logging.php");

	$agent = null;

	try {
		$agent = $_SERVER['HTTP_USER_AGENT'];
	} catch(Exception $e) {
		$agent = -1;
	}
?>
	
<html>
	<head>
		<title>Cole Vaske</title>
		<link rel='stylesheet' href='include/css/styles.css'>
		<link rel='stylesheet' href='include/css/index.css'>
		<script src='".BASE_DIR_PREFIX."include/js/global.js'></script>
	</head>
	<a id='top'></a>
	<?php
		echo HEADER_STRING;
	?>
	<body>
		<div>
			<div class='img-container'>
				<img class='header-img' src='images/me.jpg' alt='Cole Vaske Portrait'>
			</div>
			<main>
				<h1>Cole Vaske</h1>
				<p>I am a senior Software Engineering student at the University of Nebraska--Lincoln. My career interests include database design and management, and backend systems development.</p>

				<h1>Past Experiences</h1>
				<p>My professional experience includes working for a shared services organization for trucking companies. One of these services included IT services. The company also had a number of internal websites that each of the internal teams used including legal, HR, and financing. As a software development intnern, I gained fullstack website development skills using jQuery, VueJS, and Bootstrap for frontend development, and SQL for backend interfacing with MySQL and MSSQL databases.</p>
				<p>As a software engineering student at the University of Nebraska--Lincoln, I have had the privilege participating in the School of Computing Capstone Program for two years. My first year, I was responsible for developing a backend API interfacing with an MSSQL database from scratch. This process also involved designing and implementing a comprehensive error tracking system where each data point amongst thousands in a single upload could have several levels of uncertainty that was stored, tracked, and available for display to users and admins.</p>

				<h1>Current Experiences</h1>
				<p>For my second year of capstone, I have had the opportunity to work with several other senior Software Engineering students to develop a piece of software with the intent to become a startup. My primary role wtihin this team is to utilize Amazon Web Service to create an API that interfaces with AWS DynamoDB to store and display JSON-like data. This is an ongoing project involving managing an AWS organization and their roles, as well as the services we are using to make our startup project come to fruition.</p>
				<p>I currently intern with Huffman Engineering, Inc. (HEI) with their industrial group. My primary concern is industrial automation, and pharmaceutical IT maintenance and regulatory compliance. With HEI, I have had the privilege to learn aobout manufacturing and utilities processes from many of their clients, as well as gain an <a href='https://inductiveautomation.com'>Ignition SCADA software</a> certification.</p>
				<p>I also currently work as a Dean's Leader with the College of Engineering. This role primarily deals with helping prospective students looking at engineering and computing decide on a major based on their interests and showcase all of the opportunities available at the College of Engineering and the School of Computing at the University of Nebraska--Lincoln.</p>

				<h1>Resume</h1>
				<form action='".HTTP_BASE."/include/Cole_Vaske.pdf'>
					<p>You can download my general resume here:</p>
					<button class='btn-download' download='".HTTP_BASE."/include/Cole_Vaske.pdf'>
						<svg class='btn-svg' title='Download' width='21' height='21' viewBox='0 0 24 24' fill='none'>
							<!-- Acquired from https://www.svgrepo.com/ -->
							<path d='M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5'></path>
						</svg>
						<span class='btn-text'>
							Download PDF
						</span>
						<svg class='btn-svg' title='Download' width='21' height='21' viewBox='0 0 24 24' fill='none'>
							<!-- Acquired from https://www.svgrepo.com/ -->
							<path d='M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5'></path>
						</svg>
					</button>
				</form>
			</main>
		</div>
	</body>
	<footer>
		<a href='#top'>Back to top</a>
	</footer>
</html>

<?php
	echo $html_string;
	
	// Save user agent to file for statistics purposes
	logVisit($agent);

	$agent_file_contents = file_get_contents("logs/user_agents.tsv");
    $agent_file_contents = explode("\n", $agent_file_contents);
	
	$data = [
        "Chrome" => [
            "color" => "Red",
            "amt" => 0,
            "pct" => "100%",
            "actual_pct" => 0
        ],
        "Firefox" => [
            "color" => "Orange",
            "amt" => 0,
            "pct" => "0%",
            "actual_pct" => 0
        ],
        "Edge" => [
            "color" => "Blue",
            "amt" => 0,
            "pct" => "0%",
            "actual_pct" => 0
        ],
        "Other" => [
            "color" => "Purple",
            "amt" => 0,
            "pct" => "0%",
            "actual_pct" => 0
        ]
    ];

	foreach($agent_file_contents as &$line) {
        $line_content = explode("\t", $line); // [0] is agent, [1] is timestamp
        $line = $line_content; // Rebuild $agent_file_contents in place

        if($line[1] === null) {
            /* An empty line has been found. Continue to the next */
            continue;
        }
        $total_agents++;

        /* Isolate the user agent information */
        $agent = $line[0];
        $agent = substr($agent, strrpos($agent, "Gecko"));
        $agent = substr($agent, strpos($agent, " "));
        $agent = substr($agent, 0, strrpos($agent, "/"));

        /* Start looking at the remainder of the agent */
        if (strpos($agent, "Firefox") !== false) {
            $data["Firefox"]["amt"]++;
        } else if (strpos($agent, "Chrome") !== false && strpos($agent, "Safari") + strlen("Safari") === strlen($agent)) {
            $data["Chrome"]["amt"]++;
        } else if (strpos($agent, "Chrome") !== false && strpos($agent, "Edg") !== false) {
            $data["Edge"]{"amt"}++;
        } else {
            $data["Other"]["amt"]++;
        }

		/* Because of the way I have implemented the pie chart in CSS, 
        We need to add the percentage of the previous pie slices to the subsequent percentages */
		$pct_sum = 0;
		foreach($data as &$dot) {
			$pct = ($dot["amt"] * 100 / $total_agents);
			$pct_sum += $pct;
			$dot["pct"] = $pct_sum."%";
			$dot["actual_pct"] = round($pct);
		}
    }

	file_put_contents("logs/data/user_agent_calc.json", json_encode($data, JSON_PRETTY_PRINT));
?>