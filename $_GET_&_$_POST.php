<!-- Example - 01 -->

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="$_GET_&_$_POST.php" method="post">
            <label>username : </label>
            <input type="text" name="username"><br><br>
            <label>password : </label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Log in">
        </form> 
    </body>
</html> -->

<!-- <?php
    // echo $_GET["username"];
    // echo $_GET["username"] . "<br>";
    //echo "{$_POST["username"]}<br>";
    //echo $_POST["password"];
?> -->


<!-- Example 02 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="$_GET_&_$_POST.php" method="post">
        <label>quantity : </label>
        <input type="text" name="quantity"><br><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 3.5;
    $total = null;

    $quantity = $_POST["quantity"];

    $total = $quantity * $price;

    echo "<br>" . "You have {$quantity} X {$item}/s" . "<br>";
    echo "You have total is : \${$total}";
?>