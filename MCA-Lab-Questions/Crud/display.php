<?php

include("./config.php");


$display = "SELECT * FROM `venimala`;";

$execute = mysqli_query($con,$display);

while ($row = mysqli_fetch_assoc($execute)) {
    $name = $row['sree_name'];
    $no = $row['sree_no'];

    echo $name."<br>".$no;
}
?>