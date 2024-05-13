<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Number With Argument</title>
</head>
<body>
    <center>

        <h1>Multiplication of Two Number With Argument</h1>
        <form action="index.php" method="post">
            <p>
                <label for="number1">Enter the First Number :</label>
                <input type="number" name="number1" id="">
            </p>
            <p>
                <label for="number2">Enter the Second Number :</label>
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
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    Sum($number1,$number2);
}

function Sum($num1,$num2)
{
    $sum = $num1*$num2;
    echo "<center> Multiplication of Two Number is :".$sum."</center>";
}
?>