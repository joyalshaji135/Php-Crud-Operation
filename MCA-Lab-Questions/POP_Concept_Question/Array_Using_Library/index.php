<?php

    
    echo "<form action='index.php' method='post'>
    <center>";
    echo "<h1> Enter Book Details </h1>
    <table border='1'>
    <tbody>
        <tr>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Book Price</th>
        </tr>";
    for ($i=1; $i <= 5; $i++) { 
        echo "
        <tr>
        <td>B".$i."</td>
        <td><input type='text' name= book_name$i id=''></td>
        <td><input type='text' name= author_name$i id=''></td>
        <td><input type='number' name= book_price$i id=''></td>
    </tr>
        ";   
    }
    echo "</tbody>
    </table>
    <br>
    ";
    echo "
    <button>Submit</button>
    </center>
    </form>";

    $book_name = array();
    $author_name = array();
    $book_price = array();
    if (isset($_POST['book_name1'],$_POST['author_name1'],$_POST['book_price1'])) {
    for ($i=1; $i <= 5; $i++) { 
         $book_name[$i] = $_POST['book_name'.$i];
         $author_name[$i] = $_POST['author_name'.$i];
         $book_price[$i] = $_POST['book_price'.$i];
    }
    }
    $size = sizeof($book_name);
    echo "<center>
    <h1> Book Details </h1>
    <table border='1'>
    <tbody>
        <tr>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Book Price</th>
        </tr>";
    for ($i=1; $i <= $size; $i++) { 
        echo "
        <tr>
        <td>B".$i."</td>
        <td>".$book_name[$i]."</td>
        <td>".$author_name[$i]."</td>
        <td>".$book_price[$i]."</td>
    </tr>
        ";
    }
    echo "</tbody>
    </table>
    <br>
    </center>
    </form>";

?>