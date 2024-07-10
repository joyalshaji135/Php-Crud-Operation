<?php

include("./config.php");

$delete = "DELETE FROM `venimala` WHERE `venimala`.`sree_id` = 2;";

$execute = mysqli_query($con,$delete);

if ($execute) {
    echo "Deletion Success";
}

?>