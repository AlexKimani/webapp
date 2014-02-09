<?php
include 'connect.php';

$id=6;

$sql=mysql_select('SELECT artistImg, imgLink from artists where artistid="id"')
 $all=array();
while($row=mysql_fetch_assoc($sql))
 $all['artistsarray'][]=$row;

print(json_encode($all));

echo $sql;

?>