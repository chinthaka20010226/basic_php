<?php
    // $food_1 = "apple";
    // $food_2 = "banana";
    // $food_3 = "orange";
    // $food_4 = "coconut";
    // $food_5 = "chery";

    $foods = array("apple","banana","chery","mango","orange");
    $numbers = [1,2,3,4,5];

    //over write,
    $foods[0] = "pineapple";

    //push,
    array_push($foods,"coconut","papaya"); //we add many items, at the end

    //pop,
    array_pop($foods);
    
    //shift, 
    array_shift($foods); //remove first item,

    //reverse array,
    $foods = array_reverse($foods);

    //get length,
    $length = count($foods);
    echo "No.of elements {$length}<br>";

    //check datatype,
    echo gettype($foods) . "<br>"; //array data type,
    echo gettype($numbers) . "<br>";

    //write array,
    foreach($foods as $food){
        echo $food . "<br>";
    }

    

?>