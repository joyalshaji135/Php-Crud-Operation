<?php

include('./config.php');

?>

<?php

$update_id = $_GET['update_id'];

$update_select = "select * from employee_details where emp_id = $update_id";
$update_select_query = mysqli_query($connection,$update_select);
while ($update_value = mysqli_fetch_assoc($update_select_query)) {
    $emp_id = $update_value['emp_id'];
    $emp_name = $update_value['emp_name'];
    $emp_age = $update_value['emp_age'];
    $emp_address = $update_value['emp_address'];
    $emp_salary = $update_value['emp_salary'];
    $emp_status = $update_value['emp_status'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Data</title>
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
                    <input type="text" name="emp_name" id="" value="<?php echo $emp_name ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Age</label>
                </td>
                <td>
                    <input type="number" name="emp_age" id="" value="<?php echo $emp_age ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Address</label>
                </td>
                <td>
                    <textarea name="emp_address" id="" cols="21" rows="10" >
                    <?php echo $emp_address ?>
                    </textarea>
                
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Salary</label>
                </td>
                <td>
                    <input type="number" name="emp_salary" id="" value="<?php echo $emp_salary ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Salary</label>
                </td>
                <td>
                    <select name="emp_status" id="" >
                        <?php
                        ?>
                       <option value="true">True</option>
                       <option value="false">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" value="Reset">
                </td>
                <td>
                    <input type="submit" name="update" id="" value="Update">
                </td>
            </tr>
            </form>
        </table>
    </center>
</body>
</html>

<?php

if (isset($_POST['update'])) {
    $emp_name = $_POST['emp_name'];
    $emp_age = $_POST['emp_age'];
    $emp_address = $_POST['emp_address'];
    $emp_salary = $_POST['emp_salary'];
}

?>