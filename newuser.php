<!DOCTYPE html>
<php

$user = htmlentities($_GET['USR']);
$path = "uploads/".$user."/"
mkdir($path);
header("Location: userpage.php?USER=".$user);
fwrite(fopen("users.txt", "a"), $user);
?>

