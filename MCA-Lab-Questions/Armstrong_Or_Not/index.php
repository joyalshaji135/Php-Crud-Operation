<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Or Not</title>
</head>
<body>
    <center>
        <h1>Armstrong Or Not</h1>
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

    $copy = $number;

    
}

?>