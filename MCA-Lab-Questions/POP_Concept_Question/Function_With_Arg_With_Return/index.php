<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function With Argument and With Return Value</title>
</head>
<body>
    <center>
        <h1>Sum of Two Number Using with arg and return value Function</h1>
        <form action="index.php" method="post">
            <p>
                <label for="number1">Enter First Number:</label>
                <input type="number" name="number1" id="">
            </p>
            <p>
                <label for="number2">Enter Second Number:</label>
                <input type="number" name="number2" id="">
            </p>
            <p>
                <button>Submit</button>
            </p>
        </form>
    </center>
</body>
</html>

<?php

if ($_POST) {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    $sum=sum_function($num1,$num2);

    echo "<center>Sum of Two Number is :".$sum."</center>";
}

function sum_function($number1,$number2)
{
    return $number1+$number2;
}

?>