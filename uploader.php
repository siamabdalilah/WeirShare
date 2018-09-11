<?php


// Get the filename and make sure it is valid
$filename = basename($_FILES['uploadedfile']['name']);
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}


$username = htmlentities($_POST['USER']);

$full_path = sprintf("uploads/%s/%s", $username, $filename); //Temporary filepath for testing
// "../../../../srv/uploads/%s/%s" --> This path for amazon instance.

if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
	//header("Location: upload_success.html");
	header("Location: status.php?USER=".$username."&TYPE=Success");
	exit;
}else{
	//header("Location: upload_failure.html");
	header("Location: status.php?USER=".$username."&TYPE=Failure");
	exit;
}

?>
