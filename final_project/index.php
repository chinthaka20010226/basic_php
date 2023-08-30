<?php
    include("database.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h1>Welcome to Fakebook</h1>
        <label>username : </label><br>
        <input type="text" name="username"><br><br>
        <label>password : </label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="register" value="register">
    </form>
</body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "Please enter a username";
        }
        elseif(empty($password)){
            echo "Please enter a password";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(user_name,user_password)
                    VALUES ('$username','$hash')";

            try{
                mysqli_query($conn,$sql);
                echo "You are registered !!!";
            }
            catch(mysqli_sql_exception){
                echo "Usrename allredy used";
            }

        }
        
    }

    mysqli_close($conn);
?>