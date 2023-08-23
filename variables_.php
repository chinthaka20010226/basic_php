<?php
    //String 
    $fName = "chinthaka";
    $lName = "senarathna";
    $email = "chironprabath@gmail.com";
    $food = "pizza";

    //Integer
    $myAge = 22;
    $gfAge = 25;

    //Float
    $gpa = 3.1;
    $price = 4.1;
    $quantity = 3;

    //Boolean,
    $employee = true;
    $online = True; //only display true -> 1,
    $for_sale = false; //not display any thing

    echo "My name is {$fName} {$lName}<br>";
    echo "My email is ".$email."<br>";

    echo "I am {$myAge} year old<br>";
    echo "My girl friend age ".$gfAge."<br>";

    echo "My gpa is ".$gpa."<br>";
    echo "Your pizza is \${$price}<br>";

    echo "online status : {$online}<br>"; 


    //Operation,
    $total = null;

    echo "You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "Your total is \${$total}";
?>