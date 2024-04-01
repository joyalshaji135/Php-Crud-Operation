<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Of a Numbers</title>
</head>
<body>
<center>   
<h1>Reverse of a Numbers</h1>
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
    $num1 = $number1;
    $revnum = 0;  
    while ($number1 > 1)  
    {  
        $rem = $number1 % 10;  
        $revnum = ($revnum * 10) + $rem;  
        $number1 = ($number1 / 10);   
    }  

    echo "<br><br><center>Reverse of Number of ".$num1." is : ".$revnum."</center>";
}


?>