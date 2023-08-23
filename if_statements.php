<!-- Basis -->

<!-- <?php
    // if,
    // $age = 12;

    // if($age < 18){
    //     echo "Your age must 18+";
    // }

    // if-else,
    // $age = 25;

    // if($age < 18) echo "Your age must 18+";
    // else echo "Okay, you can access";

    // else-if ladder,
    // $age = -3;

    // if($age <= 0){
    //     echo "Invalid age";
    // }
    // elseif($age < 18){
    //     echo "Your age must 18+";
    // }
    // else{
    //     echo "Okay, you can access now";
    // }
?> -->

<?php
    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5)); 
    }

    echo "You made \${$weekly_pay} this week";

?>