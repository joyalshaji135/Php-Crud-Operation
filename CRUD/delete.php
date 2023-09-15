<?php
include('./config.php');
if(isset($_GET['delete_id']))
{
    $user_id=$_GET['delete_id'];
    $delete_query="delete from operation where user_id=$user_id";
    $result_query=mysqli_query($con,$delete_query);
    if($result_query)
    {
        header('location:display.php');
    }
}
?>