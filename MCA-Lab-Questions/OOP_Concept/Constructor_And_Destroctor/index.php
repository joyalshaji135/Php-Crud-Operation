<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Rectangle Using Constructor and Destructor</title>
</head>
<body>
    <center>
        <h1>Area of a Rectangle Using Constructor and Destructor</h1>
        <form action="index.php" method="post">
            <p>
                <label for="length">Enter the Length of a Rectangle</label>
                <input type="number" name="length" id="">
            </p>
            <p>
                <label for="width">Enter the Width of a Rectangle</label>
                <input type="number" name="width" id="">
            </p>
            <p>
                <button>Submit</button>
            </p>
        </form>
    </center>
</body>
</html>


<?php
echo "<center>";
class Rectangle {
    private $length;
    private $width;

    // Constructor
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
        echo "Rectangle object created.<br><br>";
    }

    // Destructor
    public function __destruct() {
        echo "<center>Rectangle object destroyed.<br><br></center>";
    }

    // Method to calculate area
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

if ($_POST) {
 
    $length = $_POST['length'];
    $width = $_POST['width'];
    $rectangle = new Rectangle($length, $width);

    echo "Area of the rectangle: " . $rectangle->calculateArea() . "<br><br>";
}
echo "</center>";
?>
