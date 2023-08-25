<!-- Basis -->

<!-- <?php
    $capitals = array(  "USA" => "Washington D.C.",
                        "Japan" => "Kyoto",
                        "South Korea" => "Seoul",
                        "India" => "New Delhi");

    // echo $capitals["USA"] . "<br>"; //we can access value by using key,
    // echo "{$capitals["USA"]}<br>";

    // add new value,
    $capitals["USA"] = "Las Vegas";

    // add new key value pair,
    $capitals["China"] = "Beijing";

    // remove last item,
    $lastItemValue = array_pop($capitals);
    echo $lastItemValue . "<br>";

    // remove fist item,
    $firstItemValue = array_shift($capitals);
    echo "{$firstItemValue}<br>";

    // copy keys for new array,
    $keys = array_keys($capitals);

    foreach($keys as $key){
        echo $key . "<br>";
    }

    //copy values for new array,
    $values = array_values($capitals);

    foreach($values as $value){
        echo $value . "<br>";
    }

    // fliping associative array,
    $capitals = array_flip($capitals);

    // reverse associative array,
    $capitals = array_reverse($capitals);

    // get length,
    echo count($capitals) . "<br>";
    
    foreach($capitals as $key => $value){
        // echo $key . "<br>"; //only key,

        // echo $key . " " . $value . "<br>"; //both key and value,
        echo "{$key} = {$value}" . "<br>";
    }
    
?> -->


<!-- Example -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post">
        <label>Enter a country : </label>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    $capitals = array(  "USA" => "Washington D.C.",
                        "Japan" => "Kyoto",
                        "South Korea" => "Seoul",
                        "India" => "New Delhi");

    $capitals =  $capitals[$_POST["country"]];

    echo "The capital is {$capitals}";
  
?>

