<?php
include "connect.php";

$sname= $_POST['sname'];
$other= $_POST['other'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$uname= $_POST['uname'];
$pword= $_POST['pword'];
$rpword= $_POST['rpword'];
$about= $_POST['about'];
$org= $_POST['org'];


$query=mysql_query("INSERT INTO members(sname,lname,email,phone,uname,password,rpassword,about,org) VALUES('$sname','$other','$email','$phone','$uname','$pword','$rpword','$about','$org')");

if($query)
{
	header("Location: ../sign.php");
	// echo "Success";
	// echo "<br />";
 //  echo date("l-F-Y : H:i:s");
 //  echo "<br />";
 //  echo date(DATE_RSS);
 //  echo "<br />";
 //  echo time("H:i:s");
	mysql_close();
}
	

else
{
	die("Sorry, could not sign you in. Wrong login information.");
	header("Location: ../sign.php");
	mysql_close();
  // echo "upload failed";
  // echo "<br />";
  // echo date("l-F-Y");
  // echo "<br />";
  // echo date(DATE_RSS);
}

?>