<!-- Basis -->

<!-- <?php
    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value}<br>";

    }
?> -->

<!-- 1.PHP_SELF -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>


<!-- 2.REQUEST_METHOD -->

<?php
    /*if(isset($_POST["login"])){
        
    }*/

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello";

    }

?>