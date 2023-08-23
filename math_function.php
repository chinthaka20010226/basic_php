<!-- Basic Idea -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_function.php" method="post">
        <label>x : </label>
        <input type="text" name="x"><br><br>
        <label>y : </label>
        <input type="text" name="y"><br><br>
        <label>z : </label>
        <input type="text" name="z"><br><br>
        <input type="submit" value="Function">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x); //consider up level
    // $total = ceil($x);  //consider low level
    // $total = sqrt($x);
    // $total = pow($x,$y);
    // $total = max($x,$y,$z);
    // $total = min($x,$y,$z);

    // $total = pi(); //we can get 'pi' value
    // $total = rand();
    $total = rand(0,101); //we can give min & max value for get number of in min and max,

    echo $total;
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
    <form action="math_function.php" method="post">
        <label>radius : </label>
        <input type="text" name="radius"><br><br>
        <input type="submit" value="calc">
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];

    // Circumtance,
    $circumtance = 2 * pi() * $radius;
    $circumtance = round($circumtance, 2);

    // Area
    $area = pi() * pow($radius,2);
    $area = round($area, 2);

    // Volume,
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2); 

    echo "<br>" . "Circumtance = {$circumtance}cm";
    echo "<br>" . "Area = {$area}cm^2";
    echo "<br>" . "Volume = {$volume}cm^3";
?>