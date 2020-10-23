<!DOCTYPE html>
<html>
<head>
    <title> Finding GCD </title>
</head>

<body>

<h2> Finding GCD </h2>

<form method="post" action="exercise_three.php">

        <p >Input first number: </p>  
        <input type="text" name="num_1">
        <br>

        <p> Input second number: </p>
        <input type="text" name="num_2">
        <br> <br>

        <input type="submit" name="submit">
        <br> <br>

        </form>


<?php

    function getGCD($a, $b) {
            
            if ($b == 0) {
                return $a;
            }
            else {
                return getGCD($b, $a%$b);
            }
    }
?>
    
    <?php
        if(!isset($_POST['submit']))
        {
    ?>

    <?php
        }
        else
        {
            $num1 = (int)$_POST['num_1'];
            $num2 = (int)$_POST['num_2'];

            echo "The answer is: ".getGCD($num1, $num2);
        }
    ?>

</body>

</html>