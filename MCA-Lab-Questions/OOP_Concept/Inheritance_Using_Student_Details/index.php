<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance Using Student Details</title>
</head>
<body>
    <center>
        <h1>Student Details Using Inheritance</h1>
        <form action="index.php" method="post">
            <p>
                <label for="name">Enter the Student name</label>
                <input type="text" name="s_name" id="">
            </p>
            <p>
                <label for="roll_no">Enter the Student Roll No</label>
                <input type="number" name="roll_no" id="">
            </p>
            <p>
                <label for="mark">Enter the Student Total Mark</label>
                <input type="number" name="mark" id="">
            </p>
            <p>
                <button>Submit</button>
            </p>
        </form>
    </center>
</body>
</html>



<?php

// Parent class
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Child class inheriting from Person
class Student extends Person {
    private $rollNo;
    private $marks;

    public function __construct($name, $rollNo, $marks) {
        parent::__construct($name);
        $this->rollNo = $rollNo;
        $this->marks = $marks;
    }

    public function getRollNo() {
        return $this->rollNo;
    }

    public function getMarks() {
        return $this->marks;
    }

    public function displayDetails() {

        echo "<center>
        <table border='1'>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Roll No
                </th>
                <th>
                    Mark
                </th>
            </tr>
            <tr>
                <td>".$this->getName()."</td>
                <td>".$this->rollNo."</td>
                <td>".$this->marks."</td>
            </tr>
        </table>
        </center>";
    }
}

if ($_POST) {
    
    $name = $_POST['s_name'];
    $roll_no = $_POST['roll_no'];
    $mark = $_POST['mark'];
    $student = new Student($name, $roll_no, $mark);
    
    $student->displayDetails();
}
?>

