<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Build-in Type Function Three</title>
</head>
<body>
    <center>
        <h1>String Build-in Three Function</h1>
        <form action="index.php" method="post">
            <p>
                <label for="string1">Enter the String 1</label>
                <input type="text" name="string1" id="">
            </p>
            <p>
                <label for="string1">Enter the String 2</label>
                <input type="text" name="string2" id="">
            </p>
            <p>
                <label for="string1">Enter the String 3</label>
                <input type="text" name="string3" id="">
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
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    $string3 = $_POST['string3'];
    
    echo "<center>
    <table border='1'>";
    echo "<tr><th>String Use Define</th><th>Sting Output</th></tr>";
    echo "<tr><td>String to Lower'".$string1."' :</td><td>".strtolower($string1)."</td></tr>";
    echo "<tr><td>String to Upper '".$string2."':</td><td>".strtoupper($string2)."</td></tr>";
    echo "<tr><td>String Length '".$string3."':</td><td>".strlen($string3)."</td></tr>";
    echo "</table></center>";
    
}

?>