<?php


echo "<center> 
<h1> Array Values </h1>
<form action='index.php' method='post'>";
for ($i=0; $i < 5; $i++) { 
    echo "
    <p>
    <label for='array'>A[".$i."]</label>
    <input type='number' name=number$i id=''>
    </p>
    ";
}
echo "
<button>Submit</button>
</form>";

$ascending = array();
$descending = array();
if (isset($_POST['number1'])) {
    for ($i=0; $i < 5; $i++) { 
        $ascending[$i] = $_POST['number'.$i];
        $descending[$i] = $_POST['number'.$i];
    }


    for ($i=0; $i < 5; $i++) { 
        for ($j=$i+1; $j < 5; $j++) { 
            if ($ascending[$i] > $ascending[$j]) {
                $temp = $ascending[$i];
                $ascending[$i] = $ascending[$j];
                $ascending[$j] = $temp;
            }
        }
    }

    for ($i=0; $i < 5; $i++) { 
        for ($j=$i+1; $j < 5; $j++) { 
            if ($descending[$i] < $descending[$j]) {
                $temp = $descending[$i];
                $descending[$i] = $descending[$j];
                $descending[$j] = $temp;
            }
        }
    }
    echo "<center> <h4> Ascending Order : </h4>";
    for ($i=0; $i < 5; $i++) { 
        echo "A[".$i."] = ".$ascending[$i]."<br>";
    }
    echo "</center>";
    echo "<center> <h4> Descending Order : </h4>";
    for ($i=0; $i < 5; $i++) { 
        echo "A[".$i."] = ".$descending[$i]."<br>";
    }
    echo "</center>";
}
?>