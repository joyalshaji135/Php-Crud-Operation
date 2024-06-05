<?php
function Dispaly()
{
    global $con;
    $employee_select = "select * from empdetils";
        $employee_data = mysqli_query($con, $employee_select);
        $emp_index = 1;
        echo "<table border='1'>
    <tr>
    <th colspan='5'>Employees Data</th>
    <th colspan='2'><a href='./insert.php'><input type='submit' value='Add'></a></th>
    </tr>
    <tr>
    <th>Emp Id</th>
    <th>Emp Name</th>
    <th>Emp Salary</th>
    <th>Emp Age</th>
    <th>Emp Email</th>
    <th>Updates</th>
    <th>Delete</th>

    </tr>";
    // 					
        if ($employee_data) {
            while ($employee_query = mysqli_fetch_assoc($employee_data)) {
                $emp_id = $employee_query['eid'];
                $emp_name = $employee_query['ename'];
                $emp_salary = $employee_query['esalary'];
                $emp_age = $employee_query['eage'];
                $emp_email = $employee_query['email'];
                echo    "<tr>
        <td>$emp_index</td>
        <td>$emp_name</td>
        <td>$emp_salary</td>
        <td>$emp_age</td>
        <td>$emp_email</td>
        <td><a href='./update.php?update_id=$emp_id'><input type='submit' value='Update'></a></td>
        <td><a href='./delete.php?delete_id=$emp_id'><input type='submit' value='Delete'></a></td>

    </tr>";
    $emp_index++;
            }
        }
        echo "</table>";
}
?>

