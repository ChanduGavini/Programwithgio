<?php

//Variable Variables

$word = 'Hakuna';

$$word = 'Matata';

echo $word, $Hakuna;
echo '<br />';
echo $word, $$word;
echo '<br />';
echo "$word{$$word}";
echo '<br />';
echo "$word${$word}";