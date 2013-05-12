<?php
$arr=array('INDIA',array('tamilnadu',array('machuda','gandu')),array('hijrah',array('sachin','jai')));
echo "<table border='1'>";
foreach($arr as $key=>$val)
{
   if($key==0)
   {
      echo "<tr><td colspan='2'>$val</td></tr>";
   }
   else
   {
       $v=count($arr[$key][1]);
       echo "<tr><td rowspan=$v>".$arr[$key][0]."</td><td>".$arr[$key][1][0]."</td></tr>";
       for($k=1;$k<$v;$k++)
       	  {
		     echo 
		     "<tr><td>".$arr[$key][1][$k]."</td></tr>";
           }    			   
   }
}
?>   