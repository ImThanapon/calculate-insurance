<?php
include('connection_profile.php');
$sql = "SELECT * FROM amphures WHERE province_id={$_GET['province_id']}";
$query = mysqli_query($conn1, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);