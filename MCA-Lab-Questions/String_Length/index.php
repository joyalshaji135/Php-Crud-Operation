<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length</title>
</head>
<body>
    <center>
        <h1>String Length</h1>
        <form action="index.php" method="post">
            <p>
                <label for="string">Enter the String</label>
                <input type="text" name="word" id="">
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
    $word = $_POST['word'];
    
    $str = $word;
    $word = strlen($word);

    echo "<center>This ".$str."String Length is :".$word."</center>";
}

?>