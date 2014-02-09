<?php
include "connect.php";
$cname= $_POST['cname'];
$email= $_POST['email'];
$comment= $_POST['comment'];
$pdate= date("l-F-Y : H:i:s");
$ptime= time("localtime()");
//$pdate= $_POST[];
//$value5= $_POST['Message'];

$query=mysql_query("INSERT INTO blog(cname,email,comment,pdate,ptime) VALUES('$cname','$email','$comment','$pdate','$ptime')");

if($query)
{
	header("Location: ../blog.php");
	mysql_close();
	// echo "Success";
	// echo "<br />";
 //  echo date("l-F-Y : H:i:s");
 //  echo "<br />";
 //  echo date(DATE_RSS);
 //  echo "<br />";
 //  echo time("H:i:s");
}
	

else
{
	header("Location: ../blog.php");
	mysql_close();
  // echo "upload failed";
  // echo "<br />";
  // echo date("l-F-Y");
  // echo "<br />";
  // echo date(DATE_RSS);
}


?>


