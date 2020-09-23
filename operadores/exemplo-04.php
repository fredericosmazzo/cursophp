<?php
$a = 55;
$b = 45;
$c = 45;
$d= 60;

var_dump($a <=> $b);
echo "<br>";
var_dump($b <=> $c);
echo "<br>";
var_dump($a <=> $d);
echo "<br>";
var_dump($d <=> $c);
echo "<br>";


$e = NULL;
$f = NULL;
$g = 10;

echo $e ?? $f ?? $g;

?>