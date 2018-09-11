<!DOCTYPE html>
<?php

$user = htmlentities($_GET['USER']);
$content = file_get_contents('users.txt');
$content = str_replace('$user','',$content);
$stat = file_put_contents('users.txt', $content);

if ($stat = true) {
header("Location: status.php?USER=".$user."$TYPE=success");
exit;
}
header("Location: status.php?USER=".$user."$TYPE=failure")
?>