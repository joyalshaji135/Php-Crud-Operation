<?php
include("./config.php");

$insert = "INSERT INTO `venimala` (`sree_id`, `sree_name`, `sree_no`) VALUES ('2', 'sreemayi', '8590343389');";

$execute = mysqli_query($con,$insert);

if ($execute) {
    echo "Insertion Success";
}
else
{
    mysqli_error($con);
}

?>