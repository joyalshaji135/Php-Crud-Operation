<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Building Type Function</title>
</head>
<body>
    <center>
        <h1>String Functions</h1>
        <form action="index.php" method="post">
            <p>
                <label for="word">Enter the String</label>
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
    
    $str1 = $word;
    $str2 = $word;
    $str3 = $word;    
    $str4 = $word;
    $str5 = $word;
    $str6 = $word;
    $str7 = $word;

    // String to Lower
    $str1 = strtolower($str1);
    // String to Upper
    $str2 = strtoupper($str2);
    // String Upper Case First
    $str3 = ucfirst($str3);
    // String Lower Case First
    $str4 = lcfirst($str4);
    // String First Character of each Word into uppercase
    $str5 = ucwords($str5);
    // String Reverse
    $str6 = strrev($str6);
    // String Length
    $str7 = strlen($str7);
    echo "<center>
    <table border='1'>";
    echo "<tr><th>String Use Define</th><th>Sting Output</th></tr>";
    echo "<tr><td>String to Lower :</td><td>".$str1."</td></tr>";
    echo "<tr><td>String to Upper :</td><td>".$str2."</td></tr>";
    echo "<tr><td>String Upper Case First :</td><td>".$str3."</td></tr>";
    echo "<tr><td>String Lower Case First :</td><td>".$str4."</td></tr>";
    echo "<tr><td>String First Character of each Word into uppercase :</td><td>".$str5."</td></tr>";
    echo "<tr><td>String Reverse :</td><td>".$str6."</td></tr>";
    echo "<tr><td>String Length :</td><td>".$str7."</td></tr>";
    echo "</table></center>";
}

?>