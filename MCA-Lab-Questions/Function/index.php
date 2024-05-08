<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in PHP</title>
</head>
<body>
    <center>
        <h1>Function in PHP</h1>
        <form action="index.php" method="post">
            <p>
                <label for="number1">Enter the First Number</label>
                <input type="number" name="number1" id="">
            </p>
            <p>
                <label for="number2">Enter the Second Number</label>
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

echo "<center>";
if ($_POST) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // Calling on Function
    
    echo "Addition off Two Numbers :".additions($number1,$number2)."<br>";
    multiplication($number1,$number2);
    $division = division();
    echo "Division of Two Number is :".$division."<br>";
    subtraction();
    
}

    // Function With Argument and With Return Value

    function additions($num1,$num2)
    {
        $add = $num1+$num2;
        return $add;
    }

    // Function With Argument and Without Return Value

    function multiplication($number1,$number2)
    {
        $multi = $number1*$number2;
        echo "Multiplication of two Number is :".$multi."<br>";
    }

    // Function Without Argument with Return Value
    
    function division()
    {
        $div = $GLOBALS['number1']/$GLOBALS['number2'];
        return $div;
    }

    // Function Without Argument and Without Return Value
    
    function subtraction()
    {
        $sub = $GLOBALS['number1']-$GLOBALS['number2'];
        echo "Subtraction of Two Number is :".$sub;
    }

    echo "</center>";
?>