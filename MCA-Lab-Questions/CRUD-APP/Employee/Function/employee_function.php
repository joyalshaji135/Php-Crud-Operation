

<?php

function Display()
{
    global $connection;
    $employee_select = "select * from employee_details";
    $employee_data = mysqli_query($connection, $employee_select);
    $emp_index = 1;
    echo "<table border='1'>
<tr>
<th colspan='6'>Employees Data</th>
<th colspan='2'><a href='./insert.php'><input type='submit' value='Add'></a></th>
</tr>
<tr>
<th>S/O</th>
<th>Emp Name</th>
<th>Emp Age</th>
<th>Emp Address</th>
<th>Emp Salary</th>
<th>Emp Status</th>
<th>Update</th>
<th>Delete</th>
</tr>";
    if ($employee_data) {
        while ($employee_query = mysqli_fetch_assoc($employee_data)) {
            $emp_id = $employee_query['emp_id'];
            $emp_name = $employee_query['emp_name'];
            $emp_age = $employee_query['emp_age'];
            $emp_address = $employee_query['emp_address'];
            $emp_salary = $employee_query['emp_salary'];
            $emp_status = $employee_query['emp_status'];
            echo    "<tr>
    <td>$emp_index</td>
    <td>$emp_name</td>
    <td>$emp_age</td>
    <td>$emp_address</td>
    <td>$emp_salary</td>
    <td>$emp_status</td>
    <td><a href='./update.php?update_id=$emp_id'><input type='submit' value='Update'></a></td>
    <td><a href='./delete.php?delete_id=$emp_id'><input type='submit' value='Delete'></a></td>
</tr>";
        }
    }
    echo "</table>";
}

function Delete()
{
    global $connection;
    if(isset($_GET['delete_id']))
{
    $emp_id=$_GET['delete_id'];
    $delete_query="delete from employee_details where emp_id=$emp_id";
    $result_query=mysqli_query($connection,$delete_query);
    if($result_query)
    {
        echo "<script>alert('Delete Successfully');</script>";
        header('location:index.php');
    }
}
}
?>