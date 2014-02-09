[	<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Upload Song</title>
</head>

<body>
<h3 align="center">Upload Song</h3>
<form name="mp3upload" action="../upload_p.php" enctype="multipart/form-data" method="post">
<P>Song Title</p>
<input name="sname" type="text" id="aname" size="50" maxlength="20" />
<P>Genre</P>
<select name="genre">
<option value="0" selected>(please select:)</option>
<option value="1">Gospel</option>
<option value="2">Hip-hop</option>
<option value="3">Local Pop</option>
<option value="4">Rock</option>
</select>

<P>Album</P>
<input name="aname" type="text" id="aname" size="50" maxlength="20" />
<P>Artist Stagename</p>

<?php

include'connect.php';

$sql = "SELECT stagename FROM artists";
$result = mysql_query($sql);

echo "<select name='stagename'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['stagename'] . "'>" . $row['stagename'] . "</option>";
}
echo "</select>";

?>

<P>Release Date</p>
<input name="rdate" type="date" id="rdate" size="50" maxlength="20" />
<P>Upload Date</p>
<input name="udate" type="date" id="udate" size="50" maxlength="20" />
<P>Browse Song</p>
<label for="mp3">mp3 File:</label> 
     <input type="file" id="mp3" name="mp3" /><br />
    <input type="submit" name="submit" value="Upload" />
</form>
<?php
include 'connect.php';

$v1=$_GET['sname'];
$v2=$_POST['genre'];
$v3=$_POST['sname'];
$v1=$_POST['stagename'];
$v1=$_POST['rdate'];
$v1=$_POST['udate'];

$sql="insert into ";


?>
</body>
</html>