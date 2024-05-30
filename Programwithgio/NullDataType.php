<?php
//Null

//Null constant
$x = null;
echo $x . '<br />';
var_dump($x);
echo '<br />';
var_dump(is_null($x));
echo '<br />';
var_dump($x === null);
echo '<br />';
var_dump($y);
echo '<br />';
var_dump(is_null($y));
echo '<br />';
echo '<br />';

$z = 23;
var_dump($z);

unset($z);
var_dump($z);