<!doctype html>

<html>
	<head>
		<title>User Page</title>
	</head>
	<body>

		<p>
			Your Files
		</p>
		
		<?php
		$username = htmlentities($_GET['USER']);
		$path = "uploads/".$username;

		$files = array_diff(scandir($path), array('.','..'));

		foreach ($files as $file) {
			// printf("%s", $file);
			printf("<a href = \"viewfile.php?USER=%s&FILE=%s\"> %s </a> &nbsp &nbsp &nbsp
					<a href = \"deletefile.php?USER=%s&FILE=%s\"?>Delete </a><br>", $username, $file,$file,$username, $file);
		};
		?>


		<!-- NOT REALLY SURE IF THIS WILL WORK -->
		<?php
			for ($i = 0; $i < 5; $i = $i + 1){
				printf("<br>");
			}
		?>

		<a href = "uploadportal.php?USER=<?php printf("%s", $username)?>"> Upload Files</a><br>
		<a href = "logout.php"> LOG OUT</a><br>
		<a <?php printf("href = \"deleteuser.php?USER=%s\"", $username); ?> > DELETE USER </a>
	</body>
</html>