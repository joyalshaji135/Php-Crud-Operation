<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Sizing Array Values</title>
</head>
<body>
    <center>
        <h1>Array Sizing</h1>
        <form action="./basic.php" method="post">
            <p>
                <label for="size_of_array">
                    Enter the Size of Array
                </label>
                <input type="number" name="size" id="">
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
    $size = $_POST['size'];
    echo "<form action='basic.php' method='post'>";
    for ($i=0; $i < $size; $i++) { 
        echo "
            <p>
                <label for='size_of_array'>Enter the No [".$i."] :</label>
                <input type='number' name= txt$i id=''>
            </p>
        ";
    }
    echo "<button>Submit</button>";
    echo "</form>";

    array_value($size);
}


function array_value($sizes)
{
    $array = array();
    if (isset($_POST['txt0'])) {
    for ($i=0; $i < $sizes; $i++) { 
         $array[$i] = $_POST['txt'.$i];
    }
}
}

?>