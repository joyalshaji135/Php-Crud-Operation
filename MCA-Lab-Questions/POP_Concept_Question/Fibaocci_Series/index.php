<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <center>
        <h1>Fibonacci Series</h1>
    <form action="./index.php" method="post">
        <p>
        <label for="number">Enter the Count of the Series</label>
        <input type="text" name="number" id="">
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
    $number = $_POST['number'];
    $real = $number;
    $number = $number-2;
    $num = 0;  
    $n1 = 0;  
    $n2 = 1;  
    echo "<center>";
    echo "<h3>Fibonacci series for first ".$real." numbers: </h3>";  
    echo "\n";  
    echo $n1.' '.$n2.' ';  
    while ($num < $number )  
    {  
        $n3 = $n2 + $n1;  
        echo $n3.' ';  
        $n1 = $n2;  
        $n2 = $n3;  
        $num = $num + 1;  
    }
    echo "</center>";
}

?>