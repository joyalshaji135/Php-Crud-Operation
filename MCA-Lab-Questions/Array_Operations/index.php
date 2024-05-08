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
        for ($j=$i+1; $j < 5; $j++) { 
            if ($array1[$i] < $array1[$j]) {
                $temp = $array1[$i];
                $array1[$i] = $array1[$j];
                $array1[$j] = $temp;
            }
        }
    }
    
    echo "<br><br>First Array Elements Sorted: <br><br>";
    for ($i=0; $i < 5; $i++) { 
        echo "Array 1 [".$i."] = ".$array1[$i]."<br>";
    }

    // Sum Of an Array 
    $sum = 0;
    for ($i=0; $i < 5; $i++) { 
        $sum = $sum + $array1[$i];
    }

    echo "<br><br>Sum of Array Element :".$sum."<br><br>";

    // Sorting of an Array in Acsending Order

    for ($i=0; $i < 5; $i++) { 
        for ($j=$i+1; $j < 5; $j++) { 
            if ($array1[$i] > $array1[$j]) {
                $temp = $array1[$i];
                $array1[$i] = $array1[$j];
                $array1[$j] = $temp;
            }
        }
    }

    echo "<br><br>First Array Elements Sorted: <br><br>";
    for ($i=0; $i < 5; $i++) { 
        echo "Array 1 [".$i."] = ".$array1[$i]."<br>";
    }

    // Merging Two Arrays
    
   print_r(array_merge($array1,$array2));
}

?>

<!-- sort , sum , merge , sorting in asending -->