<!-- Basis -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate_.php" method="post">
        username : 
        <input type="text" name="username"><br><br>
        age : 
        <input type="text" name="age"><br><br>
        email :
        <input type="text" name="email"><br><br>
        <input type="submit" name="login" value="Login">
    </form>
    
</body>
</html>


<?php
    if(isset($_POST["login"])){
        // $username = $_POST["username"];
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        // $age = $_POST["age"];
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}<br>";
        echo "You are {$age} years old<br>";
        echo "Your email is : {$email}";
    }
?>