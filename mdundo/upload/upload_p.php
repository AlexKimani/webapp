<?php

include "connect.php";

$target="files/";

$name=$_FILES['http://localhost/mdundo/hewah/']['mp3']['name'];

$target=$target.basename($name);

$sql=mysql_query("INSERT INTO songs(link) VALUES('$name')");

if($sql)
{
	move_uploaded_file($_FILES['mp3']['tmp_name'],$target);
	
	echo "Success";
}
	

else
{
  echo "file upload failed";
}


?>