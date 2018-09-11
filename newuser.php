<!DOCTYPE html>
<php

$user = $_GET['USR'];
$path = "uploads/".$user."/"
mkdir($path);
header("Location: userpage.php?USER=".$user);

?>

