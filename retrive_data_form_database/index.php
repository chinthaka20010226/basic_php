<!-- <?php
    // include("database.php");

    // $sql = "SELECT *
    //         FROM users
    //         WHERE user_name='chinthaka'
    //         ";
    // $result = mysqli_query($conn,$sql);

    // if(mysqli_num_rows($result) > 0){
    //     $row = mysqli_fetch_assoc($result);
    //     echo $row["user_id"] . "<br>";
    //     echo $row["user_name"] ."<br>";
    //     echo $row["user_password"] . "<br>";
    //     echo $row["user_date"];
    // }
    // else{
    //     echo "Not found user";
    // }

    // mysqli_close($conn);

?> -->


<?php
    include("database.php");

    $sql = "SELECT *
            FROM users";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["user_id"] . "<br>";
            echo $row["user_name"] . "<br>";
            echo $row["user_password"] . "<br>";
            echo $row["user_date"] . "<br>";
        }
    }
    else{
        echo "Not found user";
    }

    mysqli_close($conn);

?>