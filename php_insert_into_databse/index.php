<?php

    include("databse.php");

    $username = "senarathna";
    $userpass = "Sena123E@";
    
    $userName = "gunasekara";
    $userPass = "Gune123E@";
    $hash = password_hash($userPass, PASSWORD_DEFAULT); 

    // $sql = "INSERT INTO users (user_name,user_password)
    // VALUES ('parami','chinthaka123E@')";
    // $sql = "INSERT INTO users (user_name,user_password)
    // VALUES ('chinthaka','chiron123E@')";
    // $sql = "INSERT INTO users (user_name,user_password)
    // VALUES ('prabath','chi123E@')";

    // $sql = "INSERT INTO users (user_name,user_password)
    //         VALUES ('$username','$userpass')";

    $sql = "INSERT INTO users (user_name,user_password)
            VALUES ('$userName','$hash')";

    try{
        mysqli_query($conn,$sql);
        echo "User is now registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not registered";
    }
    
    mysqli_close($conn);
    

?>