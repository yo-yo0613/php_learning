<?php 
    $name = "Bro Code";
    $food = "pizza";
    $email = "fake123@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 4;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;
    
    $total = null;

    echo "Hello {$name}<br>";
    echo "You like {$food}";
    echo "<br>Your email is: {$email}<br>";

    echo "<br>You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "The sales tax rate is: {$tax_rate}%<br>";

    echo "Online status: {$online}<br>";

    echo "You have ordered {$quantity} x {$food}s";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>