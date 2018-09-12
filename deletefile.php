<?php

$filename = $_GET['FILE'];
$user = $_GET['USER'];

$path = "../../../../srv/uploads/".$user."/".$filename;
$stat = unlink($path);

if ($stat == true){
	header("Location: status.php?USER=".$user."&TYPE=success");
	exit;
}

header("Location: status.php?USER=".$user."&TYPE=failure");
?>