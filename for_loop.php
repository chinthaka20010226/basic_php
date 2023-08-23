<!-- Basis -->

<!-- <?php
    //print/write 'Hello wworld' five time,
    // echo "Hello world!<br>";
    // echo "Hello world!" . "<br>";
    // echo "Hello world!";
    // echo "<br>" . "Hello world!<br>";
    // echo "Hello world!";

    //using for loop,
    for($i = 0;$i < 5;$i++){
        echo $i . "<br>";
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
    <form action="for_loop.php" method="post">
        <label>Input the number for count : </label>
        <input type="text" name="countNumber"><br>
        <input type="submit" value="count">
    </form>
</body>
</html>

<?php
    $countNum = $_POST["countNumber"];

    for($i = $countNum;$i > 0;$i-=2){
        echo $i . "<br>";
    }

?>