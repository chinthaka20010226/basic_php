<!-- Basis -->

<!-- <?php
    $temp = 25;
    $cloudy = true;

    if(($temp < 0) || ($temp > 30)){
        echo "The weather is bad" . "<br>";
    }
    else{
        echo "The weather is good<br>";
    }

    if($cloudy) echo "It's cloudy";
    else echo "It's sunny";

?> -->


<!-- Example -->

<!-- <?php
    $age = 18;
    $citizen = false;

    if(!($age >= 18) || !($citizen)) echo "You can vote";
    else echo "You cann't vote";
?> -->

<!-- Example -->

<?php 
    $child = false;
    $senior = true;
    $ticket = null;

    if($child || $senior) $ticket = 10;
    else $ticket = 15;

    echo "The ticket price is \${$ticket}";

?>