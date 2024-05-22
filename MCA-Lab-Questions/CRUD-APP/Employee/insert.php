<?php

include('./Database/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Employee Data</title>
</head>
<body>
    <center>
        <table border="1" style="text-align: center;">
            <tr>
                <th colspan="2">Employee Details</th>
            </tr>
            <form action="#" method="post">
            <tr>
                <td>
                    <label for="">Emp Name</label>
                </td>
                <td>
                    <input type="text" name="emp_name" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Age</label>
                </td>
                <td>
                    <input type="number" name="emp_age" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Address</label>
                </td>
                <td>
                    <textarea name="emp_address" id="" cols="21" rows="10">
                    
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Salary</label>
                </td>
                <td>
                    <input type="number" name="emp_salary" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" value="Reset">
                </td>
                <td>
                    <input type="submit" name="submit" id="" value="Submit">
                </td>
            </tr>
            </form>
        </table>
    </center>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $emp_name = $_POST['emp_name'];
    $emp_age = $_POST['emp_age'];
    $emp_address = $_POST['emp_address'];
    $emp_salary = $_POST['emp_salary'];

    $insert_query="insert into `employee_details` (emp_name,emp_age,emp_address,emp_salary,emp_status) values('$emp_name','$emp_age','$emp_address','$emp_salary','true')";
    $run_query=mysqli_query($connection,$insert_query);
    if($run_query)
    {
        echo "<script>alert('Inserted Successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        die(mysqli_error($connection));
    }
}