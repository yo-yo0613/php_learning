<?php 
    /*  Logical operators = combine conditional statements
        if(condition1 && condition2) 
    
        && = True if both conditions are true
        || = True if at least one condition is true
         ! = True if false. False if true. 
    */

    $temp = 25;
    $cloudy = true;

    if ($temp >= 0 && $temp <= 30) {
        echo "The weather is good.";
    }
    else {
        echo "The weather is bad.";
    }

    if ($cloudy) {
        echo "It's cloudy.";
    }
    else {
        echo "It's sunny.";
    }

    $age = 25;
    $citizen = true;

    if ($age >= 18 && $citizen) {
        echo "You can vote";
    }
    else {
        echo "You cannot vote";
    }

    $child = false;
    $senior = false;
    $ticket = 10;

    if ($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";
?>