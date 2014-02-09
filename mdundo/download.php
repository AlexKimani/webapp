 <?php
include 'connect.php';
$link='1';
$sql=mysql_select(SELECT link from songs where artistid='$link');
$filename='link';
@header("Content-type: mp3/audio");
@header("Content-Disposition: attachment; filename=$filename");
echo file_get_contents('link');
?> 