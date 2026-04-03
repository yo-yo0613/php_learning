<?php
  /* associative array = An array ade of key => value pairs 
  
     countries => capitals
     id => username
     item => price
  */  

    $hour24 = 14;

    $period = ($hour24 >= 12 ) ? "PM" : "AM";
    $hour12 = ($hour24 > 12) ? $hour24 - 12 : $hour24;

    echo "The time is $hour12 $period <br>";

    $n = 1;

    for ($i = 27; $i <= 51; $i++) {
      if ($i % 2 == 0) {
        echo "$i is even <br>";
      } else {
        echo "$i is odd <br>";
      }
    }

    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
      if ($i >= 27 && $i <= 51 && $i % 2 != 0) {
        echo "$i is odd <br>";
        $sum += $i;
      }
    }
    echo "The sum of odd numbers between 27 and 51 is: $sum <br>";
?>