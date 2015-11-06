<?php
session_start();

$memberEmail = $_POST['memberEmail'];
$memberPassword = $_POST['memberPass'];


$salt = "social";
//$hash = hash($salt, $memberPassword);
//echo $hash."<br />";
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";
$connect = mysqli_connect('localhost','developer','password','member_chat');

$sql = "select * from members where memberEmail='{$memberEmail}'";
$result = mysqli_query($connect, $sql) or die('Could not access members database');

$count = mysqli_num_rows($result);

if($count > 0) {
	
	while($row = mysqli_fetch_assoc($result)) {
		extract($row);

		$mpass = $memberPass;
	}

	if($hash == $mpass) {
		echo "Password is valid";
	} else {
		echo "Password is not valid:
		<p>{$memberPass}</p>
		<p>{$hash}</p>
		";
	}


} else {
	echo "User account does not exist!";
}




?>