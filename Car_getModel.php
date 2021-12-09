<?php
include('connection_car.php');

$sql = "SELECT * FROM Modelcar WHERE Brand_ID={$_GET['brand_car']}";
$query = mysqli_query($conn1, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);