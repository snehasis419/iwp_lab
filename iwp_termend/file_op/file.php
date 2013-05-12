<?php
$file=fopen("hello.txt","r");
$sum=0;
while(!feof($file))
{
  $ch=fgetc($file);
  if($ch==" ")
  {
     $sum+=1;
  } 
  //echo fgets($file);
  
}
fclose($file);
$file=fopen("hello.txt","r");
while(!feof($file))
{
  $ch=fgetS($file);
  echo $ch;
  $sum+=1;
  echo "<br>";
}
echo "total numbe of words is ".$sum;
fclose($file);

?>