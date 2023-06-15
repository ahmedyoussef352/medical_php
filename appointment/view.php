<?php

include "../connect.php";




$userid = filterRequset("id");

$stmt = $con->prepare("SELECT * FROM `appointments` WHERE `appointment_id`= ? ");
// $stmt = $con->prepare("SELECT * FROM `appointments` WHERE `appointment_date` >= CURRENT_DATE && `appointment_time` >= CURRENT_TIME `appointment_id`= ?");
$stmt->execute(array($userid));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success" , "data" => $data));
}else{
    echo json_encode(array("status" => "failed"));
}


