<!doctype html>

<html>
	<head>
		<title>ewd</title>
	</head>
	<body>

		<p>
			Your Files
		</p>
		
		<?php
		$username = $_GET['USER'];
		$path = "uploads/".$username;

		$files = array_diff(scandir($path), array('.','..'));

		foreach ($files as $file) {
			// printf("%s", $file);
			printf("<a href = \"viewfile.php?USER=%s&FILE=%s\"> %s </a> &nbsp &nbsp &nbsp
					<a href = \"deletefile.php?USER=%s&FILE=%s\"?>Delete </a><br>", $username, $file,$file,$username, $file);
		};
		?>
	</body>
</html>