<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Calculator </title>
</head>

<body>

<form>
    
    <h2> Calculator </h2>

    <p> Input first number: </p>  
    <input type="text" name="num1">
    <br>

    <p> Input second number: </p>
    <input type="text" name="num2">
    <br>

    <br>
    <button type="btn1" name="btn1" value="btn1"> + </button>
    <button type="btn2" name="btn2" value="btn2"> - </button>
    <button type="btn3" name="btn3" value="btn3"> * </button>
    <button type="btn4" name="btn4" value="btn4"> / </button>

</form>

<p> The answer is: </p>

<?php

    if (isset($_GET['btn1'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        echo $result1 + $result2;
    }

    if (isset($_GET['btn2'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        echo $result1 - $result2;
    }

    if (isset($_GET['btn3'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        echo $result1 * $result2;
    }

    if (isset($_GET['btn4'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        echo $result1 / $result2;
    }

?>

</body>

</html>