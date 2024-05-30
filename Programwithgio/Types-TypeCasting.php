<?php
//Data Types and Type Casting

    # Scalar Types - 4
    echo 'Scalar Types(bool, int, float, string)' . '<br />';
    # bool - true/false
    $completed = true;
    # int - 1, 2, 3, -5(No decimal)
    $score = 80;
    # float - 1.5, 2.8, -4.5
    $salary = 35000.02;
    # string - 'Hello', "World", "10"
    $greetings = 'Hello Sreshta!';

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $salary . '<br />';
    echo $greetings . '<br />';
    echo '<br />';

    echo gettype($completed) . '<br />';
    echo gettype($score) . '<br />';
    echo gettype($salary) . '<br />';
    echo gettype($greetings) . '<br />';
    echo '<br />';

    var_dump($completed);
    echo '<br />';
    var_dump($score);
    echo '<br />';
    var_dump($salary);
    echo '<br />';
    var_dump($greetings);
    echo '<br />';

    # Compound Types - 4
    # array
    $company = [1, 2, 3.2, "Chandu", true];
    # object
    # callable
    # iterable

    echo $company . '<br />';
    echo '<br />';
    print_r($company);
    echo '<br />' . '<br />';

    # Special Types - 2
    # resource
    # null

    function sum($x, $y){
        var_dump($x, $y);
        echo '<br />';
        return $x + $y;
    }
    $sum = sum (2, '10');

    echo $sum . '<br />';
    var_dump($sum);

    echo '<br />' . '<br />';
    //Casting
    echo 'Casting' . '<br />';
    $x = (int) '5';// It will force the string to convert into string.
    var_dump($x);