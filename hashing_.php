<!-- Basis -->

<?php
    $password = "Chiron123E@";

    // Hashing,
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // echo $hash;

    // Veryfing,
    if(password_verify($password,$hash)){
        echo "You are logged in";
    }
    else{
        echo "Incorrect password";
    }

?>