#!/usr/bin/php
<?php
function y($m) {
$m = preg_replace("/\./", " x ", $m); 
$m = preg_replace("/@/", " y", $m); 

return $m; 

}


function x($y) {
$a = file_get_contents($y);
$a = preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a);  return $a;}
// $a = preg_replace("/\[/", "(", $a); $a = preg_replace("/\]/", ")", $a); return $a; }
$r = x($argv[1]); print $r;
$r = y($argv[1]); 
print $r;


?>
