<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Of a Numbers</title>
</head>
<body>
<center>   
<h1>Factorial of a Numbers</h1>
<form action="index.php" method="post">
    <p>
        <label for="number_2">Enter the Number</label>
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
    $fact = 1;
    for ($i=1; $i <= $number1; $i++) { 
        $fact = $fact * $i;
    }

    echo "<br><br><center>Factorial of ".$number1." is :".$fact."</center>";
}


?>