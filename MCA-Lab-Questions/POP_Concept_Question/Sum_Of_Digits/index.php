<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Of a Digits</title>
</head>
<body>
<center>   
<h1>Sum of a Digits</h1>
<form action="index.php" method="post">
    <p>
        <label for="number_1">Enter the Number</label>
        <input type="number" name="number1" id="">
    </p>
    <button>Submit</button>
</form>
</center>
</body>
</html>

<?php

if ($_POST) {
    $number1 = $_POST['number1'];
    $copy = $number1;
    $sum = 0;

    for ($i=$number1; $i != 0 ; $i = $i /10) { 
        $sum += $i % 10;
    }

    echo "<br><br><center>Sum of Number ".$copy." is : ".$sum."</center>";
}
?>