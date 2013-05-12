<?php
if($_FILES["file"]["error"]>0)
{
echo "error";
}
else
{
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  echo "file type is".$_FILES["file"]["type"];
  echo "<br>";
  echo "file size is".(($_FILES["file"]["size"])/1024)."kb";
  echo "<br>";
  echo "file located in".$_FILES["file"]["tmp_name"];
  echo "<br>";
  echo "file name is".$_FILES["file"]["name"];
  if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }

 }
 else
 {
 echo "invalid type";
 }
 }
 ?>