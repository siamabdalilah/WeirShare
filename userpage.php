<!doctype html>

<html>
	<head>
		<title>WeirShare FileView</title>
		<link rel = "stylesheet" type = "text/css" href = "userpage.css"/>
	</head>

	<body>
		<div id = "top">WeirShare</div>
		<br>
		
		<div>
			<a class = "actionbuttons" href = "uploadportal.php?USER=<?php printf("%s", $username)?>"> Upload Files</a>
			<a class = "actionbuttons" href = "login.php"> LOG OUT</a>
			<a class = "actionbuttons" <?php printf("href = \"deleteuser.php?USER=%s\"", $username); ?> > DELETE USER </a>
		</div>

		<br><br><br><br><br>
		<div id = "filestag">
			Your Files:
		</div>
		
		<br>

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


	</body>
</html>