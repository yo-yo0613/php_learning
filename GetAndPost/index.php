<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>

    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

    /* $_GET =  Data is appended to the url 
                NOT SECURE
                char limit
                Bookmark is possible w/ values
                GET requests can be cached
                Better for a search page
                */
    /* $_POST = Data is package inside the body of the HTTP request 
                MORE SECURE
                No data limit
                Cannot bookmark
                requests are not cached
                Better for submitting credentials*/
    
                $item = "pizza";
                $price = 5.99;
                $quantity = $_POST["quantity"];
                $total = null;

                $total = $quantity * $price;

                echo "You have ordered {$quantity} x {$item}/s <br>";
                echo "Your total is: \${$total}";
?>