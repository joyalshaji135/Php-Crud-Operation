<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Or Not</title>
</head>
<body>
    <center>
        <h1>Prime Or Not Check</h1>
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
    $flag = 1;
    if($number != 1){
    for ($i=2; $i < $number; $i++) { 
        if ($number % $i == 0) {
            $flag = 0;
        }
    }
    if($flag == 1)
    {
        echo $number." is Prime Number";
    }
    else
    {
        echo $number." is Not Prime Number";
    }
}
else
{
    echo $number." is Not Prime Number";
}
}
?>