<?php
    require_once('connect.php');

    $param = array(
        ':id'=> 1
        //
        //
        //
    );
    $stmt = $conn->prepare('SELECT *
    FROM car_detail
    INNER JOIN amount_insurance
    ON car_detail.id = amount_insurance.model_key
    WHERE car_detail.id = :id '); 
    $stmt->execute($param);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($result);   
    


    function calInsurance($inHight,$inLow){
        $inResult = ($inHightin+$inLow)/2;
        return $inResult;
    }

    
    $year = 2555; //ที่ลูกค้าเลือก

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $result[0]['type']." - ";
    echo "ทุนประกันสูงสุด : ".$result[0]['y_'.$year];  //"y_".+$..
    echo '<br>';
    echo $result[1]['type']." - ";
    echo "ทุนประกันต่ำสุด : ".$result[1]['y_'.$year];
    
?>