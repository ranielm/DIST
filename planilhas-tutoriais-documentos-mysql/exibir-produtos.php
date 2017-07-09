<?php
$db = new mysqli('localhost', 'id2007186_root', 'banco', 'id2007186_dist');
if(mysqli_connect_errno()){
echo mysqli_connect_error();
}

$query = "SELECT primeironome, segundonome from usuarios";
$result = $db->query($query);
while($fetch = $result->fetch_assoc()) {
    echo "<p>";
    foreach ($fetch as $field => $value) {
        echo $value ;
    }
    echo "</p>";
 }

$db->close();

/*$result = $db->query('SELECT * FROM `produtos`');
if($result){
   while ($row = $result->fetch_assoc()){
       echo '<br /><pre>';
       print_r($row);
       echo '</pre>';
   }
   $result->free();

$result = $db->query('SELECT nomeproduto FROM `produtos`');
if($result){
   while ($row = $result->fetch_assoc()){
//       echo '<br /><pre>';
       print_r($row);
       //echo '</pre>';
   }
   $result->free();
}
}*/

?>