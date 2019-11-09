<?php 

   $fp = fopen("counterlog.txt", "r"); 
   $count = fread($fp, 10); 
   fclose($fp); 
   $count = $count + 1; 
   echo "<p>Page views:" . $count . "</p>"; 
   $fp = fopen("counterlog.txt", "w"); 
   fwrite($fp, $count); 
   fclose($fp); 
/*
print "<h3> REFRESH PAGE </h3>";

$name="counterlog.txt";

$file = fopen($name,"r");

$hits= fscanf($file,"%d");

fclose($file);


$hits[0]++;

$file = fopen($name,"w");

fprintf($file,"%d",$hits[0]);

fclose($file);


print "Total number of views: ".$hits[0];
*/

 ?> 