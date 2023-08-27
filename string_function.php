<?php
    $name = "Chinthaka Senarathna"; 
    echo $name . "<br>";

    $phone = "123-456-7890";
    echo $phone . "<br>";

    // to LowerCase,
    // $name = strtolower($name);
    // echo $name . "<br>";
    
    // to UpperCase,
    // $name = strtoupper($name);
    // echo $name;

    // Trim
    // $name = trim($name);
    // echo $name;

    // Pad  ----> widder string to certon amounts of characters,
    // $name = str_pad($name, 30, "0");
    // echo $name;

    // replace characters by using another character,
    // $phone = str_replace("-", "", $phone);
    // echo $phone;

    // Reverse string
    // $name = strrev($name);
    // echo $name;

    // shuffle
    // $name = str_shuffle($name);
    // echo $name;

    // Compare String  -----> return '0'/false if they are same,
    //                        return '1'/'-1' if they are not same,  
    // $equal = strcmp($name, "Chinthaka Senarathna");
    // echo $equal;

    // Length of String
    // $count = strlen($name);
    // echo $count;

    // Given character position,
    $index = strpos($name," ");
    echo $index . "<br>";

    // get Sub String,
    // $firstName = substr($name,0,9);
    // $lastName = substr($name,10);

    // echo $firstName . " " . strlen($firstName) . "<br>";
    // echo $lastName . " " . strlen($lastName) . "<br>";


    // String convert to Array,
    $fullName = explode(" ", $name);

    foreach($fullName as $name){
        echo $name . "<br>";
    }


    // Array convert to String,
    $userName = implode(" ",$fullName);
    echo $userName;

?>