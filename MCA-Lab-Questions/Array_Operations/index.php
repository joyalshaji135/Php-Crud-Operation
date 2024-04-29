<?php

    echo "<form action='index.php' method='post'>";
    echo "Array 1";
    for ($i=0; $i < 5; $i++) { 
        echo "
            <p>
                <label for='size_of_array'>Enter the No [".$i."] :</label>
                <input type='number' name= txt$i id=''>
            </p>
        ";
    }
    echo "Array 2";
    for ($j=0; $j < 5; $j++) { 
        echo "
            <p>
                <label for='size_of_array'>Enter the No [".$j."] :</label>
                <input type='number' name= txts$j id=''>
            </p>
        ";
    }
    echo "<button>Submit</button>";
    echo "</form>";
    $array1 = array();
    $array2 = array();
    if (isset($_POST['txt0'],$_POST['txts0'])) {
    for ($i=0; $i < 5; $i++) { 
         $array1[$i] = $_POST['txt'.$i];
         $array2[$i] = $_POST['txts'.$i];
    }
    echo "Display All Elements <br>";
    echo "<br><br>First Array Elements : <br><br>";
    for ($i=0; $i < 5; $i++) { 
        echo "Array 1 [".$i."] = ".$array1[$i]."<br>";
    }
    echo "<br><br>Second Array Elements : <br><br>";
    for ($j=0; $j < 5; $j++) { 
        echo "Array 2 [".$j."] = ".$array2[$j]."<br>";
    }

    // Sorting of An Array 

    for ($i=0; $i < 5; $i++) { 
        for ($j=i+1; $j < 5; $j++) { 
            if ($array1[$i] < $array[$j]) {
                $temp = 
            }
        }
    }
}

?>

<!-- sort , sum , merge , sorting in asending -->