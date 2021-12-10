<?php
    require_once('connect.php');

    function callData(){
        $param = array(
            ':id'=> 1
        );
        $stmt = $conn->prepare('SELECT *
        FROM car_detail
        INNER JOIN amount_insurance
        ON car_detail.id = amount_insurance.model_key
        WHERE car_detail.id = :id '); 
        $stmt->execute($param);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // echo json_encode($result);   
    }
    

    function calInsurance($inHight,$inLow){
        $inResult = ($inHightin+$inLow)/2;
        return $inResult;
    }


    
    
    

    

    
?>