<?php
//echo $_POST['name'];
$val=$_POST["name"];
$val1=$_POST["tit"];

setcookie("hello",$val,time()+3600);
setcookie("hello1",$val1,time()+3600);
echo $_COOKIE["hello"];
echo "<br>";
echo $_COOKIE["hello1"];

?>
