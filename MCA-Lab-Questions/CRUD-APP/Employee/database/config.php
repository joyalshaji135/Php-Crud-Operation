<?php

$connection = new mysqli('localhost','root','','employee_details');

if (!$connection) {
    die(mysqli_error($connection));
}

?>