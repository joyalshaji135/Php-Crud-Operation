<?php

$con = new mysqli("localhost","root","","Hashing");

if (!$con) {
    die(mysqli_error($con));
}

?>