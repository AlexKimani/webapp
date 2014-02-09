<?php 

require "db_connect.php";

$sql=mysql_query("SELECT *
FROM downloads INNER JOIN songs ON songs.songId = downloads.songId WHERE downloads.songId = 1
GROUP BY songs.songId, downloads.date, downloads.downloads");

while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>