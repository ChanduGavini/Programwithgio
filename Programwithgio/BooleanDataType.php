<?php
//Boolean

$isComplete = 'false';

// integers 0, -0 = false
// floats 0.0, -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump(is_bool($isComplete));
echo '<br />';

if ($isComplete){
    //Do Something
    echo 'Success';
} else {
    //Do Something else
    echo 'Fail';
}