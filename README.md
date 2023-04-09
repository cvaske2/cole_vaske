# cole_vaske
Simplistic, straightforward static resume website using base PHP, HTML, CSS, and Javascript with no frameworks or libraries.

Currently hosted at http://cse.unl.edu/~cvaske.

PHP 7.4.33 (UNL CSCE server version as of 22Feb2023).

Added to Git 31Jan2023 because this project grew large enough to warrant version history.

<br>

## TODO
Mostly a note for myself

- Implement global environment variables
- Rework contact.php to avoid refreshing
- Add content to EWB.php
- Migrate the pie chart on stats.php to an SVG element instead of a conic-gradient div background
- Go around the website and test different screen sizes, standardize content resizing and reformatting
- Use cookies and check if the user's browser has one before adding to browser log
- Using the user's cookie, track their movement around the website
	- Also add a disclaimer allowing the user to opt-out if they would like
	- Use this data for an association rule mining side project
- Implement rolling date window for stats.php timeseries chart
- Transition browser user agent evaluation code in index.php into C script executable that is triggered by php