<!-- Basis -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }
        // if($credit_card == "Visa"){
        //     echo "Visa";
        // }
        // elseif($credit_card == "Mastercard"){
        //     echo "Master card";
        // }
        // elseif($credit_card == "American Express"){
        //     echo "American Express";
        // }
        // else{
        //     echo "NOT select one";
        // }

        // replace by using switch case,
        switch($credit_card){
            case "Visa":
                echo "you selected Visa";
                break;
            case "Mastercard":
                echo "you selected Mastercard";
                break;
            case "American Express":
                echo "you selected American Express";
                break;
            default:
                echo "NOT selected one";
        }

    }
?>