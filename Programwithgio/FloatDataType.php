<?php
//Float Data Type

$a = 13.2;
$b = 13.2e3;
$c = 13.2e-3;
$d = floor((0.1 + 0.7) * 10);
$e = ceil((0.1 + 0.7) * 10);
$f = ceil((0.1 + 0.2) * 10);
$g = 0.23;
$h = 1 - 0.77;
$i = 5;
$j = 'csdv';
$k = '15.5a';

echo $a . '<br />'; //13.2
echo $b . '<br />'; //13200
var_dump($b); //float(13200)
echo '<br />';
echo $c . '<br />'; //0.0132
var_dump($c); //float(0.0132)
echo '<br />';
//echo PHP_FLOAT_MAX;
echo $d . '<br />'; //7
echo $e . '<br />'; //8
echo $f . '<br />'; //4
var_dump($g); //float(0.23)
echo '<br />';
var_dump($h); //float(0.22999999999999998)
echo '<br />';
echo NAN . '<br />'; //NAN
echo log(-1) . '<br />';//NAN
echo INF . '<br />'; //INF
var_dump(is_nan(log(-1))); // bool(true)
echo '<br />';
var_dump((float) $i); //float(5)
echo '<br />';
var_dump(floatval($i)); //float(5)
echo '<br />';
var_dump((float) $j); //float(0)
echo '<br />';
var_dump((float) $k); //float(15.5)