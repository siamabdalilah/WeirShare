<?php

$filename = $_GET['file'];
$path = "/home/.$username."/public_html/".$filename."/";

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $finfo->file($path);

readfile($path);

?>
