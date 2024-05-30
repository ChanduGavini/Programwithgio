<?php
//Strings
$firstName = 'Chandu';
$lastName = "{$firstName} Gavini";
echo $lastName . '<br />';

$first = 'Sai';
$last = 'Goli';
$name = $first . ' ' . $last;
echo $name . '<br />';

echo $name[1] . '<br />';
//echo $name[-1] . '<br />'; Negative indexing was not allowing from PHP 7.1
$name[15] = 'A';

echo $name . '<br />';
var_dump($name);
echo '<br />';
echo '<br />';
//Heredoc
$x = "Extra1";
$y = "Extra2";
echo 'Heredoc' . '<br />';
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo nl2br($text) . '<br />';
echo '<br />';
//Nowdoc
echo 'Nowdoc' . '<br />';
$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo nl2br($text);