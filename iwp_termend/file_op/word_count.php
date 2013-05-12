<?php
$file=fopen("hello.txt","r");
$v="";
$c=array();
$d=array();
$coun=0;
$found=0;
while(!feof($file))
{
  $u=fgetc($file);
  if($u==" " || $u=="\n")
  {
    for($i=0;$i<count($c);$i++)
	{
	  if($c[$i]==$v)
	  {
	     $found=1;
		 $d[$i]+=1;
		 break;
	   }
     }
      if($found==0)
      {
        $p=count($c);
        $c[$p]=$v;
        $d[$p]=1;    		
	  }
    $found=0;
	$v="";
	
	}	  
	  
	else
    {
       $v=$v.$u;
    }
}
echo "<table border='1'>";
for($rt=0;$rt<count($c);$rt++)
{
 echo "<tr>";
  echo "<td>"; 
  echo $c[$rt];
  echo "</td>";
  echo "<td>"; 
  echo $d[$rt];
echo "</td>"; 
echo "</tr>";   
  
}
echo "</table>";
?>  