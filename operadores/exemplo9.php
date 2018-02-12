<?php

$a = 55.0;
$b = 55;

var_dump($a > $b);
echo "<br />";
var_dump($a < $b);
echo "<br />";
//var_dump($a = $b); // apenas atribui os valores, não compara
//echo "<br />";
var_dump($a == $b);
echo "<br />";
var_dump($a === $b); // Igual tipo e valor

echo "<br />";
var_dump($a != $b);

echo "<br />";
var_dump($a !== $b);

?>