<?php
$con=new mysqli("localhost","root","","Employee");
if(!$con)
{
    die(mysqli_error($con));
}

?>