<!-- Basis -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check_box.php" method="post">
        <input type="checkbox" name="x" value="pizza">Pizza<br>
        <input type="checkbox" name="y" value="hamburger">Hamburger<br>
        <input type="checkbox" name="z" value="hotdog">HotDog<br>
        <input type="checkbox" name="p" value="taco">Taco<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["x"])){
            echo "you like Pizza" . "<br>";
        }
        if(isset($_POST["y"])){
            echo "you like Hamburger<br>";
        }
        if(isset($_POST["z"])){
            echo "you like HotDog" . "<br>";
        }
        if(isset($_POST["p"])){
            echo "you like Taco<br>";
        }
        if(empty($_POST["x"])){
            echo "you don't like Pizza<br>";
        }
        if(empty($_POST["y"])){
            echo "you don't like Hamburger<br>";
        }
        if(empty($_POST["z"])){
            echo "you don't like HotDog<br>";
        }
        if(empty($_POST["p"])){
            echo "you don't like Taco<br>";
        }
    }
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check_box.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="hotdog">HotDog<br>
        <input type="checkbox" name="foods[]" value="taco">Taco<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(empty($_POST["foods"])){
            echo "Not selected one";
        }
        if(isset($_POST["foods"])){
            $foods = $_POST["foods"];

            // echo $foods[0];
            foreach($foods as $food){
                echo $food . "<br>";
            }
        }

        

    }

    
?>