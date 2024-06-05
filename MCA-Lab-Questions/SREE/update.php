<?php
include('./config.php');
?>


<?php
if(isset($_GET['update_id']))
{
    $emp_update=$_GET['update_id'];
    $select_query="select * from empdetils where eid=$emp_update";
    $select_finalquery=mysqli_query($con,$select_query);
    if($select_finalquery)
    {
        while($select_row = mysqli_fetch_assoc($select_finalquery))
        {
            $emp_id = $select_row['eid'];
            $emp_name = $select_row['ename'];
            $emp_salary = $select_row['esalary'];
            $emp_age = $select_row['eage'];
            $emp_email = $select_row['email'];
        }
    }
}

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
                    <input type="text" name="emp_name" value="<?php echo $emp_name ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Age</label>
                </td>
                <td>
                    <input type="number" name="emp_age" value="<?php echo $emp_age ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Email</label>
                </td>
                <td>
                <input type="email" name="emp_email" value="<?php echo $emp_email ?>">        
            </td>
            </tr>
            <tr>
                <td>
                    <label for="">Emp Salary</label>
                </td>
                <td>
                    <input type="number" name="emp_salary" value="<?php echo $emp_salary ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" value="Reset">
                </td>
                <td>
                    <input type="submit" name="submit"  value="Submit">
                </td>
            </tr>
            </form>
        </table>
    </center>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
    $emp_name=$_POST['emp_name'];
    $emp_age=$_POST['emp_age'];
    $emp_email=$_POST['emp_email'];
    $emp_salary=$_POST['emp_salary'];

    $updateinsert_query="update empdetils set ename='$emp_name',esalary='$emp_salary',eage='$emp_age',email='$emp_email' where eid=$emp_id";
    $updaterun_query=mysqli_query($con,$updateinsert_query);
    if($updaterun_query)
    {
        echo "<script>alert('succussfull updatet')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    else{
        die(mysqli_error($con));
    }

}