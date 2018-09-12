<?php

$user = htmlentities($_GET['USR']);
$checking = fopen("../../../../srv/users.txt", "r");
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
$path = "../../../../srv/uploads/".$user."/";
mkdir($path);
fwrite(fopen("../../../../srv/users.txt", "a"), "\n".$user);
header("Location: userpage.php?USER=".$user);
exit;

?>

