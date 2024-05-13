<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of the Circle</title>
</head>
<body>
    <center>
        <h1>Area Of The Circle</h1>
        <form action="index.php" method="post">
            <p>
                <label for="radius">Enter the Circle Radius</label>
                <input type="number" name="radius" id="">
            </p>
            <p>
                <button>Submit</button>
            </p>
        </form>
    </center>
</body>
</html>

<?php

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

if ($_POST) {
    
    $radius = $_POST['radius'];
    $circle = new Circle($radius); 
    $area = $circle->calculateArea(); 
    echo "<center>Area of the circle: " . $area."</center>";
}
?>
