<!-- Basis -->

<!-- <?php
    // $i =0;
    // while($i < 10){
    //     echo $i . "<br>";
    //     $i++;
    // }

    $seconds = 0;
    $minitues = 0;  
    $hours = 0;
    $running = true;

    while($running == true){
        $seconds++;
        // echo $seconds . "<br>";
        if($seconds == 60){
            $minitues++;
            $seconds = 0;
            if($minitues == 60){
                $hours++;
                $minitues = 0;
                break;
            }
            continue;
        }
    }

    echo "hours : {$hours}<br>minitues : {$minitues}<br>seconds : {$seconds}";

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
    <form action="while_loop.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    $seconds = 0;
    $running = true;

    while($running){
        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
    echo "seconds : " . $seconds;

?>