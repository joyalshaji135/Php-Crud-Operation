<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biggest Of Two Numbers</title>
</head>
<body>
<center>   
<h1>Biggest of two Numbers</h1>
<form action="index.php" method="post">
    <p>
        <label for="number_1">Enter the First Number</label>
        <input type="number" name="number1" id="">
    </p>
    <p>
        <label for="number_2">Enter the Second Number</label>
        <input type="number" name="number2" id="">
    </p>
    <button>Submit</button>
</form>
</center>
</body>
</html>

<?php

if ($_POST) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // if ($number1 > $number2) {
    //     echo "<center>The Biggest Number is :".$number1."</center>";
    // }
    // else
    // {
    //     echo "<center>The Smallest Number is :".$number2."</center>";
    // }

    // Ternary Operation 

    $main = ($number1 > $number2) ? $number1 : $number2;
  print ("The Biggest Number is :".$main);
}


?>