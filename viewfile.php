<?php

$filename = htmlentities($_GET['FILE']);;
$user = htmlentities($_GET['USER']);
$path = "../../../../srv/uploads/".$user."/".$filename;

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $finfo->file($path);
header("Content-type: ".$mimetype);

readfile($path);

?>
