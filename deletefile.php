<?php

$filename = $_GET['file'];

$path = "/home/".$username."/public_html/".$filename."/";
unlink($path);
echo "Success";

?>