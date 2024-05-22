<?php

$connection = new mysqli('localhost','root','','company');

if (!$connection) {
    die(mysqli_error($connection));
}

?>