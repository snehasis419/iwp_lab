<?php
$path="C:\wamp";
chdir($path);
$change=getcwd();
$files=scandir($change,1);
print_r($files);
?>