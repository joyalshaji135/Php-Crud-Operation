<?php

include('./config.php');

if(isset($_GET['delete_id']))
{
    $delete_id=$_GET['delete_id'];
    $delete_query="delete from empdetils where eid=$delete_id";
    $deletefinal_query=mysqli_query($con,$delete_query);
    if($deletefinal_query)
    {
        echo "<script>alert('succussfull deleted')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }
    else{
        die(mysqli_error($con));
    }
}

?>