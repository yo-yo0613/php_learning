<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
</head>
<body>
    <!-- <input type="text"> -->
</body>
</html>

<?php
    $height = 180;
    if ($height <= 100) {
        echo "Your ticket price is free. <br>";
    } else if ($height >= 101 && $height <= 120) {
        echo "Your ticket price is half price. <br>";
    } else {
        echo "Your ticket price is full price. <br>";
    }

    $height2 = 150;

    switch ($height2) {
        case ($height2 <= 100):
            echo "Your ticket price is free. <br>";
            break;
        case ($height2 >= 101 && $height2 <= 120):
            echo "Your ticket price is half price. <br>";
            break;
        default:
            echo "Your ticket price is full price. <br>";
    }
?>