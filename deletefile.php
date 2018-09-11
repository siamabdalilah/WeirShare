<?php

$filename = $_GET['FILE'];
$user = $_GET['USER'];

$path = "uploads/".$user."/".$filename;
$stat = unlink($path);
echo "Success";

?>