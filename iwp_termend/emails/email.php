<html>
<head>
<title>
mail
</title>
</head>
<body>
<?php
if(isset($_POST["to"]))
{
  $subject=$_POST["subject"];
  $from=$_POST["from"];
  $to=$_POST["to"];
  $message=$_POST["message"];
  mail($to,$subject,$message,$from);
  echo "Mail successfully sent!!";
}
else
{
  echo "<form action='email.php' method='post'>";
  echo "<br>To:<input type='text' name='to'>";
   echo "<br>From:<input type='text' name='from'>";
    echo "<br>Subject:<input type='text' name='subject'>";
	 echo "<br>Message:<br><textarea name='message' rows='15' cols='10'></textarea>";
	 echo "<br><input type='submit' onclick='submit'>";
	 echo "</form>";
	 }
?>