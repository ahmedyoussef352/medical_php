<?php

include "../connect.php";
$id_post  = filterRequset("id_post");


$stmt = $con->prepare("SELECT * FROM `comment` where `id_post` = ? ");
// $stmt = $con->prepare("SELECT * FROM `appointments` WHERE `appointment_date` >= CURRENT_DATE && `appointment_time` >= CURRENT_TIME `appointment_id`= ?");
$stmt->execute(array($id_post ));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success" , "data" => $data));
}else{
    echo json_encode(array("status" => "failed"));
}
