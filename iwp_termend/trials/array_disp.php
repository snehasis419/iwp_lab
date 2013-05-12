<?php
$arr=array('INDIA',array('tamilnadu',array('machuda','gandu')),array('hijrah',array('sachin','jai')));
disp($arr);

function disp($arr)
{
   foreach($arr as $val)
   {
        if(is_array($val))
		{
		   disp($val);
		 }
         else
         {
             echo $val."   ";
          }
     }
}
?>	 