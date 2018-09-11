<!DOCTYPE html>
<php

$user = htmlentities($_GET['USR']);
$path = "uploads/".$user."/"
mkdir($path);
fwrite(fopen("users.txt", "a"), $user);
header("Location: userpage.php?USR=".$user);
exit'

?>

