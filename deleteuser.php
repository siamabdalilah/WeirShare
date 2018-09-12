<?php

$username = htmlentities($_GET['USER']);
$content = file_get_contents('users.txt');
$content = str_replace($username,'',$content);
file_put_contents('users.txt', $content);

$path = "../../../../srv/uploads/".$username;

$files = array_diff(scandir($path), array('.','..'));
$stat = true;

foreach ($files as $file) {
	// printf("%s", $file);
	$stat = unlink($file);
	if ($stat == false) {
	header("Location: status.php?USER=".$username."&TYPE=failure");
	
	exit;
	}
}
rmdir($path);


if ($stat == false) {
	header("Location: status.php?USER=".$username."&TYPE=failure");
	
	exit;
}
header("Location: status.php?USER=".$username."&TYPE=success");
?>