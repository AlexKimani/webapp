<?php
session_start();
include "connect.php";

$email= $_POST['email'];
$pword= $_POST['pword'];

$query=mysql_query("SELECT * FROM members WHERE email='$email' AND password='$pword'");

if ($query) {
	
	header("Location: ../logged.php");
	mysql_close();
}
else{
	header("Location: ../sign.php");
	mysql_close();
}

?>