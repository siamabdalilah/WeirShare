<!doctype html>

<html lang = "en">
	<head>
		<title>
			Action Status
		</title>
	</head>

	<body>
		<h1> <?php printf("%s", htmlentities($_GET['TYPE'])); ?> </h1>
		<br>
		<a <?php printf("href = \"userpage.php?USER=%s\"", htmlentities($_GET['USER']));?>> Go Back to File View </a>
	</body>