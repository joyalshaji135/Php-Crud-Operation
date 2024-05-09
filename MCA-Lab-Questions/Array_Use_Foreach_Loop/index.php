<?php 
echo "<form action='index.php' method='post'>";
for ($i=1; $i <= 5; $i++) { 
    echo "<p>
        <label for='number'>Value".$i."</label>
        <input type='number' name=num$i id=''>
    </p>";
}
echo "
<button>Submit</button>
</form>";

$freelancer = array();

if (isset($_POST['num1'])) {
    for ($i=1; $i <= 5; $i++) { 
        $freelancer[$i] = $_POST['num'.$i];
    }


  
// Loop through employee array 
foreach($freelancer as $key => $value) { 
    echo "Key Value : ".$key . "  Pair Value : " . $value . "<br>"; 
} 
}
?> 




<!-- 
"name" => "Eric", 
    "email" => "Eric@gmail.com", 
    "age" => 22, 
    "gender" => "male" -->