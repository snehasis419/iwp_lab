<html>
<body>
<form action='upload.php' method='post' enctype="multipart/form-data">
<br>To:<input type='text' name='to'>
<br>From:<input type='text' name='from'>
<br>Subject:<input type='text' name='subject'>
<br>Message:<br><textarea name='message' rows='10' cols='20'></textarea>
<br><label for="file">Filename:</label><br>
<input type="file" id="file" name="file">
<br><input type='submit' onclick='submit'>
</form>
</body>
</html>
