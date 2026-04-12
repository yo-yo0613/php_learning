<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="MasterCard">
        MasterCard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">  
    </form>
</body>
</html>

<?php
    // function ratechange(int $amount, float $rate){
    //     $result = $amount * $rate;
    //     return $result;
    // }

    // $amount = 1000;
    // $rate = 4.99;

    // $result = ratechange($amount, $rate);
    
    // echo "結果為: ". $result;

    // function bmi(float $weight, float $height) {
    //     $result = $weight / ($height * $height);
    //     return $result;
    // }

    // $weight = 70;
    // $height = 1.75;

    // $result = bmi($weight, $height);
 
    // echo "BMI為: ". round($result, 2);
    
    // $name = array("小明","小華","小藍","小綠","小紅");
    // $scores = array(100,85,59,72,40);

    // foreach ($name as $index => $value) {
    //     if ($scores[$index] >= 60) {
    //         echo "◎". $value. "=>" . "及格了<br>";
    //     } else {
    //         echo "◎". $value . "=>" . "不及格了<br>";
    //     }
    // }
    
    $credit_card = $_POST["credit_card"];
?>