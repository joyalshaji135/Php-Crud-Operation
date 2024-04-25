<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Two Numbers</title>
</head>

<body>
    <center>
        <h1>Swapping Two Numbers</h1>
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

if ($_POST) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    // $temp;

    // First Case of Swapping
    // $temp = $number1;
    // $number1 = $number2;
    // $number2 = $temp;
    // Second Case of Swapping

    // $number1 = 10 , $number2 = 20   Result = num1 = 20 , num2 = 10

    echo "<center>
    <table border='1' style='text-align: center;'>
        <tr>
            <th>Section</th>
            <th>Number 1</th>
            <th>Number 2</th>
        </tr>
        <tr>
            <td>Before</td>
            <td>" . $number1 . "</td>
            <td>" . $number2 . "</td>
        </tr>
    ";

    $number1 = $number1 + $number2;
    $number2 = $number1 - $number2;
    $number1 = $number1 - $number2;

    echo "<tr>
    <td>After</td>
    <td>" . $number1 . "</td>
    <td>" . $number2 . "</td>
</tr>
</table>
</center>";
}

?>
