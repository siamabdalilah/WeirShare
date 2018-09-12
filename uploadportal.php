<!doctype html>

<html>
	<head>
		<title>
			Upload Portal
		</title>
		<link rel = "stylesheet" type = "text/css" href = "uploadportal.css"/>
	</head>

	<body>
		<div id ="top">WeirShare</div><br>
		<form enctype="multipart/form-data" action="uploader.php" method="POST">
			<p>
				<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
				<input type="hidden" name = "USER" <?php printf("value = \"%s\"", htmlentities($_GET['USER'])); ?> >
				<label for="uploadfile_input" id = "lab">Choose a file to upload:<br></label> <input name="uploadedfile" type="file" id="uploadfile_input" />
			</p>
			<p>
				<input class = "button" type="submit" value="Upload File" />
			</p>
		</form>
	</body>
</html>



