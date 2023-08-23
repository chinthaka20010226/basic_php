<!-- Basis -->

<!-- <?php 
    $marks = 55;

    // if(($grade <= 100) &&($grade >= 0)){
    //     if($grade >= 75){
    //         echo "grade A";
    //     }
    //     elseif($grade >= 65){
    //         echo "grade B";
    //     }
    //     elseif($grade >= 55){
    //         echo "grade C";
    //     }
    //     elseif($grade >= 45){
    //         echo "grade D";
    //     }
    //     else{
    //         echo "grade F";
    //     }

    // }
    // else{
    //     echo "Invalid marks";
    // }

    if($marks >= 0 && $marks <= 100){
        switch($marks){
            case $marks >= 75:
                echo "greate";
                break;
            case $marks >= 65:
                echo "good";
                break;
            case $marks >= 55:
                echo "okay";
                break;
            case $marks >= 45:
                echo "poor";
                break;
            default:
                echo "fail";
        }
    }
    else{
        echo "{$marks} is invalid";
    }

?> -->


<!-- Example -->

<?php
    $date = date("l");
    
    switch($date){
        case "Monday":
            echo "I hate {$date}";
            break;
        case "Tuesday":
            echo "It's Taco {$date}";
            break;
        case "Wednesday":
            echo "The work week is half over {$date}";
            break;
        case "Thursday":
            echo "It's almost the weekend {$date}";
            break;
        case "Friday":
            echo "This is weekend hree {$date}";
            break;
        case "Saturday":
            echo "Time to part {$date}";
            break;
        case "Sunday":
            echo "Time to relax {$date}";
            break;
        default:
            echo "{$date} is invalid";
    }

?>