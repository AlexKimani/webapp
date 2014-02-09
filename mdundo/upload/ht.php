<html>
<body>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">  // (enctype)used when a form requires binary data & (multipart/form-data) stores the binary data as a file
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>// type='file' creates a browse button to allow one to browse & upload a file
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 