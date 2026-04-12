<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
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

    $capitals = array("USA" => "Washington, D.C.", 
                      "Japan" => "Tokyo", 
                      "South Korea" => "Seoul", 
                      "India" => "New Delhi");

    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";
    array_pop($capitals);
    array_shift($capitals);
    $keys = array_keys($capitals);
    $value = array_values($capitals);
    $capitals = array_flip($capitals);
    $cpaitals = array_reverse($capitals);
    echo count($capitals) . "<br>";

    foreach ($capitals as $key => $value) {
        echo "{$key} {$value} <br>"; 
    }

    $capitals = $_POST["country"];
    $capitals = $capitals[$_POST["country"]];

    echo "The capital is {$capitals} <br>";
?>