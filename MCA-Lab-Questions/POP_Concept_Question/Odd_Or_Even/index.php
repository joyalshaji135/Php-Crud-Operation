<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Or Even Check</title>
</head>
<body>
    <center>
        <form action="index.php" method="post">
            <p>
                <label for="number">Enter the Number</label>
                <input type="number" name="number" id="">
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
    
    if($number % 2 == 0){
        echo "<center>".$number." is Even Number</center>";
    }
    else
    {
        echo "<center>".$number." is Odd Number</center>";
    }
}
?>