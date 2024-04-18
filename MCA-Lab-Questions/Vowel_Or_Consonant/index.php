<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Or Consonant</title>
</head>
<body>
    <center>
        <h1>Vowel Or Consonant</h1>
    <form action="index.php" method="post">
        <label for="letter">Enter the Letter</label>
        <input type="text" name="letter" id="">
        <br>
        <br>
        <button>Submit</button>
    </form>
    </center>
</body>
</html>
<?php

    if ($_POST) {
        $letter = $_POST['letter'];

        if ($letter == 'A' ||$letter == 'E' ||$letter == 'I' ||$letter == 'O' ||$letter == 'U' ||$letter == 'a' ||$letter == 'e' ||$letter == 'i' ||$letter == 'o' ||$letter == 'u') {
            echo "<center>".$letter." is vowel letter</center>";
        }
        else
        {
            echo "<center>".$letter." is consonant letter</center>";
        }
    }

?>