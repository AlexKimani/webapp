<?php 

require "db_connect.php";

$sql=mysql_query("SELECT songs.songId, songs.song, artists.stagename, genre.genre
FROM (artists INNER JOIN songs ON artists.artistId = songs.artistId) INNER JOIN genre ON songs.genreId = genre.genreId
GROUP BY songs.songId, songs.song, artists.stagename, genre.genre");

while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>