<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Using Recursion</title>
</head>
<body>
    <center>
        <h1>Factorial Of a Number Using Recursion</h1>
        <form action="index.php" method="post">
            <p>
                <label for="number">Enter the Factorial Identify Number :</label>
                <input type="number" name="fact" id="">
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
    $number = $_POST['fact'];
    echo "<center> Factorial of ".$number." is :".factorial($number)."</center>";
} 
function factorial($n)    
{    
    if ($n < 0)    
        return -1; /*Wrong value*/    
    if ($n == 0)    
        return 1; /*Terminating condition*/    
    return ($n * factorial ($n -1));    
}    
    
    
?>    