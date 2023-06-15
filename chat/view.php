<?php

include "../connect.php";
$id_doc  = filterRequset("id_doc");
$id_user  =filterRequset("id_user");

$stmt = $con->prepare("SELECT * FROM `chat` where `id_doc` = ? &&  `id_user` = ?");
// $stmt = $con->prepare("SELECT * FROM `appointments` WHERE `appointment_date` >= CURRENT_DATE && `appointment_time` >= CURRENT_TIME `appointment_id`= ?");
$stmt->execute(array($id_doc,$id_user));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success" , "data" => $data));
}else{
    echo json_encode(array("status" => "failed"));
}
