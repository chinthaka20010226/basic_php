<!-- Basis -->

<!-- <?php
    // $var_ = "123";
    // $var_ = "";
    $var_ = null;
    // $var_ = false;
    // $var_ = true;

    // isset(),
    if(isset($var_))
        echo "is declared<br>";
    else
        echo "is NOT declared" . "<br>";

    // echo isset($var_) ? "is declared" : "is NOT declared"; 

    // isempty(),
    if(empty($var_))
        echo "is empty";
    else
        echo "is Not empty";

    // echo empty($var_) ? "is empty" : "is NOT emptty";

?> -->


<!-- Example -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset()_&_isempty().php" method="post">
        <label>Input a number : </label>
        <input type="text" name="number"><br>
        <input type="submit" name="enter" value="input">
    </form>
</body>
</html>

<?php
    // part 01
    // if(isset($_POST["enter"])){
    //     echo gettype($_POST["number"]) . "<br>";
    //     echo isset($_POST["number"]) ? "is declared" . "<br>" : "is NOT declared" . "<br>";
    //     echo empty($_POST["number"]) ? "is empty" : "is NOT empty";
    // }

    // part 02
    echo gettype($_POST["number"]) . "<br>";
    echo isset($_POST["number"]) ? "is declared" . "<br>" : "is NOT declared" . "<br>";
    echo empty($_POST["number"]) ? "is empty" : "is NOT empty";
    
?> -->


<!-- Example -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset()_&_isempty().php" method="post">
        <label>username : </label>
        <input type="text" name="username"><br><br>
        <label>password : </label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
    // echo gettype($_POST);
    foreach($_POST as $key => $value){
        echo "{$key} = {$value}" . "<br>"; 
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) echo "username is missing"; 
        elseif(empty($password)) echo "password is missing";
        else echo "hello {$username}";
    }

?>