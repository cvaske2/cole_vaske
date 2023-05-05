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
		<meta name='author' content='Cole Vaske'>
		<meta name='description' content='A simple personal/resume website'>
		<meta name='keywords' content='Resume, simple website, PHP, HTML/CSS, portfolio'>
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
				<div class='binary-backdrop'>
					<!-- This binary is randomly generated. Don't waste your time trying to decipher it -->
					<?php
						// For the purpose of the image backdrop of binary, we need to know the height of the image in em
						$HEADER_IMAGE_HEIGHT = 25;
						$BINARY_LINE_FONTSIZE = 2;
						$NUM_CHARS = 50;

						$MAX_MARGIN = 10;

						for($i = $HEADER_IMAGE_HEIGHT; $i >= 0; $i -= $BINARY_LINE_FONTSIZE) {
							$margin = rand(-$MAX_MARGIN, $MAX_MARGIN);
							$color_offset = $BACKGROUND_DEC + $margin * $margin;
							$html_string = "<span style='
											margin-left: ".$margin."em;
											margin-top: -".($BINARY_LINE_FONTSIZE / 9.5)."em;
										'>";
							for ($j = 0; $j < $NUM_CHARS; ++$j) {
								$html_string .= rand(0, 1);
							}
							$html_string .= "</span>\n";
							echo $html_string;
						}
					?>
				</div>
				<img class='header-img' src='images/me.jpg' alt='Cole Vaske Portrait'>
			</div>
			<main>
				<h1>Cole Vaske</h1>
				<p>I am a senior Software Engineering student at the University of Nebraska--Lincoln. My career interests include database design and management, and backend systems development.</p>
				<div class='tech-img-container'>
					<img class='tech-img' src='./images/index/html.png' alt='HTML logo'>
					<img class='tech-img' src='./images/index/css.png' alt='CSS logo'>
					<img class='tech-img' src='./images/index/node.png' alt='NodeJS logo'>
					<img class='tech-img' src='./images/index/php.png' alt='PHP logo'>
					<img class='tech-img' src='./images/index/sql.png' alt='SQL logo'>
					<img class='tech-img' src='./images/index/python.png' alt='Python logo'>
					<img class='tech-img' src='./images/index/bash.png' alt='Bash logo'>
					<img class='tech-img' src='./images/index/java.png' alt='Java logo'>
				</div>
				<h1>Past Experiences</h1>
				<p>My professional experience includes working for a shared services organization for trucking companies. The company also had a number of internal websites that each of the internal teams used including legal, HR, and financing. As a software development intnern, I gained fullstack website development skills using jQuery, VueJS, and Bootstrap for frontend development, and SQL for backend interfacing with MySQL and MSSQL databases.</p>
				<p>As a software engineering student at the University of Nebraska--Lincoln, I have had the privilege participating in the School of Computing Capstone Program for two years. My first year, I was responsible for developing a backend API interfacing with an MSSQL database from scratch. This process also involved designing and implementing a comprehensive error tracking system where each data point amongst thousands in a single upload could have several levels of uncertainty that was stored, tracked, and available for display to users and admins.</p>

				<h1>Current Experiences</h1>
				<p>For my second year of capstone, I have had the opportunity to work with several other senior Software Engineering students to develop a piece of software with the intent to become a startup. My primary role wtihin this team is to utilize Amazon Web Service to create an API that interfaces with AWS DynamoDB to store JSON-like data. This is an ongoing project involving managing an AWS organization and their roles, as well as the services we are using to make our startup project come to fruition.</p>
				<p>I currently intern with Huffman Engineering, Inc. (HEI) with the industrial group. My primary concern is industrial automation, and pharmaceutical IT regulatory compliance. With HEI, I have had the privilege to learn aobout manufacturing and utilities processes from many of their clients, as well as gain an <a href='https://inductiveautomation.com'>Ignition SCADA software</a> certification.</p>
				<p>As of late March, I am happy to announce that I have accepted a full-time position with Huffman Engineering, Inc. as a control systems engineer with the utilities group. I am excited to see what the future holds in this industry, and I can't wait to apply my mindset coming from a programming background.</p>
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
	<?php
        echo FOOTER_STRING;
    ?>
</html>

<?php	
	// Save user agent to file for statistics purposes
	logVisit($agent);

	function getBrowserFromUserAgent($user_agent) {

		// Starting isolating the user agent information
		$user_agent = substr($user_agent, strrpos($user_agent, "Gecko"));
        $user_agent = substr($user_agent, strpos($user_agent, " "));
        $user_agent = substr($user_agent, 0, strrpos($user_agent, "/"));
		
        // Start looking at the remainder of the agent
        if (strpos($user_agent, "Firefox") !== false) {
			return "Firefox";
        } else if (strpos($user_agent, "Chrome") !== false && strpos($user_agent, "Safari") + strlen("Safari") === strlen($user_agent)) {
			return "Chrome";
        } else if (strpos($user_agent, "Chrome") !== false && strpos($user_agent, "Edg") !== false) {
			return "Edge";
		}
		return "Other";
	}

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
	$total_agents = 0;

	foreach($agent_file_contents as &$line) {
		$line_content = explode("\t", $line); // [0] is agent, [1] is timestamp
        $line = $line_content; // Rebuild $agent_file_contents in place
		
        if($line[1] === null) {
			// An empty line has been found. Continue to the next
			array_pop($agent_file_contents);
            continue;
        }
        ++$total_agents;
		
        // Isolate the user agent information
		$line[0] = getBrowserFromUserAgent($line[0]);
		++$data[$line[0]]["amt"];
    }
	unset($line);

	/* Because of the way I have implemented the pie chart in CSS, 
	We need to add the percentage of the previous pie slices to the subsequent percentages */
	$pct_sum = 0;
	foreach($data as &$dot) {
		$pct = ($dot["amt"] * 100 / $total_agents);
		$pct_sum += $pct;
		$dot["pct"] = $pct_sum."%";
		$dot["actual_pct"] = round($pct);
	}
	file_put_contents("logs/data/user_agent_calc.json", json_encode($data, JSON_PRETTY_PRINT));

	// Update logs/data/timeseries_data.json
	$visit_high = 0;
	$initial_dates_index = strtok($agent_file_contents[0][1], " ");

	$dates[$initial_dates_index]["total"] = 1;
	$dates[$initial_dates_index][$agent_file_contents[0][0]] = 1;
	$last_date_index = $initial_dates_index;

	/* Need to build timeseries-style JSON data.
		The given data '$agent_file_contents' is sorted chronologically, so no sorting is necessary.
		This loop accomplish do two things:
			1. Counts the number of instances for each date then puts them into an associative array as "date => { total: num_instances, browser1 :..., browser2: ...,}", and
			2. Fills the space between dates (e.g., if no one accessed my site between 01/01/2023 and 01/05/2023) with "date => { total: 0 }". */
	foreach(array_slice($agent_file_contents, 1) as $line) {
		$current_date = strtok($line[1], " ");
		
		if ($current_date == $last_date_index) {
			++$dates[$last_date_index]["total"];
			++$dates[$last_date_index][$line[0]];
		} else {
			$from = DateTime::createFromFormat("m-d-Y", $last_date_index); // This will be less than $current_date
			$to = DateTime::createFromFormat("m-d-Y", $current_date); // This will be greater than $last_date_index
			$date_difference = date_diff($from, $to)->days;

			// Will not run if $date_difference is 1
			for($i = 1; $i < $date_difference; ++$i) {
				// $from is passed by reference and is operated on by the function, so it is incremented by 1 day.
				$new_date = date_add($from, new DateInterval('P1D'))->format('m-d-Y'); 
				$dates[$new_date]["total"] = 0;
			}
			$last_date_index = $current_date;

			$dates[$current_date]["total"] = 1;
			$dates[$current_date][$line[0]] = 1;
		}
		if ($dates[$current_date]["total"] > $visit_high) {
			$visit_high = $dates[$last_date_index]["total"];
		}
	}

	$keys = array_keys($dates);
	$ts_data = [
		"first_date" => $keys[0],
		"mid_date" => $keys[intval((count($keys) - 1) / 2)],
		"last_date" => $keys[count($keys) - 1],
		"most_visits" => $visit_high,
		"data" => $dates
	];
	file_put_contents("logs/data/timeseries_data.json", json_encode($ts_data, JSON_PRETTY_PRINT));
?>