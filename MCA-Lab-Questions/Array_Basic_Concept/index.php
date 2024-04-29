<?php

    echo "<form action='index.php' method='post'>";
    for ($i=0; $i < 5; $i++) { 
        echo "
            <p>
                <label for='size_of_array'>Enter the No [".$i."] :</label>
                <input type='number' name= txt$i id=''>
            </p>
        ";
    }
    echo "<button>Submit</button>";
    echo "</form>";
    $array = array();
    if (isset($_POST['txt0'])) {
    for ($i=0; $i < 5; $i++) { 
         $array[$i] = $_POST['txt'.$i];
    }

    print "<pre>";
    print_r($array);
    print "</pre>";
}

?>