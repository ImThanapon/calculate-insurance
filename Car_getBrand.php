<?php
include('connection_car.php');
//$year = $_POST['year_car'];
$sql = "SELECT * FROM brandcar WHERE Year_ID={$_GET['year_car']}";
$query = mysqli_query($conn1, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);