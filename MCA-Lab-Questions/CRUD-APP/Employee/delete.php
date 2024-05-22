<?php
include('./config.php');
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
?>