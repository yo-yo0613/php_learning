<?php 
    $age = 21;

    if ($age >= 18) {
        echo "You may enter this site";
    }
    else if ($age <= 0) {
        echo "That wasn't a valid age";
    }
    else if ($age >= 100) {
        echo "You are too old to enter this site";
    }
    else {
        echo "You must be 18+ to enter";
    }

    $adult = false;

    if($adult) {
        echo "You may enter this site";
    }
    else {
        echo "You must be an adult to enter";
    }

    $hours = 40;
    $rate = 15;
    $weekly_pay = null;
    
    if ($hours < 0) {
        $weekly_pay = 0;
    }
    else if($hours <= 0) {
        $weekly_pay = $hours * $rate;
    }
    else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";
?>