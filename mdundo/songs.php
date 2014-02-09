
<?php

require 'conection.php';

//$jsonstring = $_REQUIRE['genre'];

$jsonstring = '{"genre": 1}' ;
$obj = json_decode ( $jsonstring );
$songid= $obj ->{ 'genre' }; 


//$songid=1;//$_POST['songid'];

//$sql=mysql_query("SELECT fname, lname, email, phone, userid FROM users WHERE userId='$userid'");
$sql=mysql_query("SELECT song artist FROM artists, songs WHERE songid='$songid' and artists.artistid= songs.artistid ");



$song=array();
while($row=mysql_fetch_assoc($sql))


 
$song['userdetails'][]=$row;

print(json_encode($song));
 





?>