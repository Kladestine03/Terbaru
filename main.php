<?php

    $conn = new mysqli("172.19.0.2","root","rayhan123","TRUCORPUAS");

    if($conn->connect_error){
        die('Connect error'.$conn->error);
    }


$conn;
$rows = array();

$res = $conn->query("SELECT * FROM users");
while($row = mysqli_fetch_assoc($res)){
  $rows [] = $row;
print $res;
}



?>
