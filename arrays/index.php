<?php
    
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";

    array_push($foods, "grape"); // add to end of array
    array_pop($foods); // remove from end of array
    array_unshift($foods, "strawberry"); // add to beginning of array
    $reversed_foods = array_reverse($foods); // reverse the order of the array

    echo count($foods) . "<br>";

    foreach($reversed_foods as $food) {
        echo $food . "<br>";
    }
?>