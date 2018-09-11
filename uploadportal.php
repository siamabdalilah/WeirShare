<!doctype html>

<html>
  <head>
    <title>
      Upload Portal
    </title>
  </head>
  <body>
  <form enctype="multipart/form-data" action="uploader.php" method="POST">
	<p>
		<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
		<input type="hidden" name = "USER" <?php printf("value = \"%s\"", htmlentities($_GET['USER'])); ?> >
		<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
	</p>
	<p>
		<input type="submit" value="Upload File" />
	</p>
</form>
</body>
</html>



