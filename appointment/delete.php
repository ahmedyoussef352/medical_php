<?php

include "../connect.php";

$appointment_id = filterRequset("id");

$stmt = $con->prepare("DELETE FROM `appointments` WHERE `id`=?");
$stmt->execute(array( $appointment_id));
$count =$stmt->rowCount();

if($count>0){
    
    echo json_encode(array("status" => "success" ));
}else{
    echo json_encode(array("status" => "failed"));
}