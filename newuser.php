<?php

$user = htmlentities($_GET['USR']);
$checking = fopen("users.txt", "r");
// srv/userdata/
while (!feof($checking)) {
	$linecheck = fgets($checking);
	$usercheck = trim($linecheck);
	
	if ($user == $usercheck) {
		header("Location: login.php?stat2=false");
		exit;
	}
		
}

fclose($checking);
$path = "uploads/".$user."/";
mkdir($path);
fwrite(fopen("users.txt", "a"), "\n".$user);
header("Location: userpage.php?USER=".$user);
exit;

?>

