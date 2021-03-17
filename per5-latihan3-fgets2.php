<?php
$file = fopen("per5-latihan1-test1.txt","r"); 
while(! feof($file)) 
 { 
 echo fgets($file). "<br />"; 
 } 
fclose($file);  

?>