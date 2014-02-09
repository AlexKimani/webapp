
<?php

require 'conection.php';
//$jsonstring = $_REQUIRE['genre'];

$jsonstring = '{"genre": 1}' ;
$obj = json_decode ( $jsonstring );
$genreid= $obj ->{ 'genre' }; 



//$sql=mysql_query("SELECT fname, lname, email, phone, userid FROM users WHERE userId='$userid'");

$sql=mysql_query("SELECT artists.stagename, songs.song ,link FROM artists, songs,downloads,genre WHERE songs.artistid = artists.artistid and downloads.songid=songs.songid and genre.genreId=$genreid ORDER BY downloads.downloads desc;");


$featured=array();
while($row=mysql_fetch_assoc($sql))


$featured['Song_downloads'][]=$row;

print(json_encode($featured));
 

?>