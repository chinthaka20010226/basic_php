<!-- Basis -->

<!-- <?php
    function happy_birthday($name,$age){
        echo "Happy birthday {$name} !" . "<br>";
        echo "You are {$age} year old<br><br>";
    }

    happy_birthday("xyz", 25);
    happy_birthday("pqr",23);

?> -->


<!-- Example -->

<!-- <?php
    function is_even($num){
        return $num % 2 == 0 ? "even" : "odd";
    }

    $is_ = is_even(11);
    echo "number is {$is_}";

?> -->


<!-- Example -->

<?php
    function hypotenuse($x,$y){
        // $hypotenuse = sqrt($x * $x + $y * $y);
        // $hypotenuse = sqrt($x ** 2 + $y ** 2);
        // $hypotenuse = sqrt(pow($x,2) + pow($y,2));

        // return $hypotenuse;
        return sqrt($x ** 2 + $y ** 2);

    }

    echo "hypotenuse is : " . hypotenuse(3,4);

?>