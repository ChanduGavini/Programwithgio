<?php
//Integer Data Type

$a = 5;
$b = 0x2A; //Octal numbers prefix 0(Zero) 42
$c = 055; //Output 45
$d = 0b11; //3
$e = 0b110; //6
$f = PHP_INT_MAX; //9223372036854775807
$g = PHP_INT_MAX + 1; //9.2233720368548E+18
$h = (int) true; //int(0)
$i = (int) false; //int(1)
$j = (int) 5.98; //int(5)
$k = (int) '5.9'; //int(5)
$l = (int) '78'; //int(78)
$m = (int) '78xwxwx'; //int(78)
$n = (int) 'test'; //int(0)
$o = (int) null; //int(0)

echo $a . '<br />';
echo $b . '<br />';
echo $c . '<br />';
echo $d . '<br />';
echo $e . '<br />';
echo $f . '<br />';
var_dump($f); //int(9223372036854775807)
echo  '<br />';
echo $g . '<br />';
var_dump($g); //float(9.2233720368548E+18)
echo  '<br />';
var_dump($h);
echo  '<br />';
var_dump($i);
echo  '<br />';
var_dump($j);
echo  '<br />';
var_dump(($k));
echo  '<br />';
var_dump(($l));
echo  '<br />';
var_dump(($m));
echo  '<br />';
var_dump(($n));
echo  '<br />';
var_dump(($o));
echo  '<br />';
var_dump(is_int($o)); //bool(true)