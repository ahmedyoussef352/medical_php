<?php

include "../connect.php";

$time = filterRequset("time");
$date = filterRequset("date");
$appointment_id = filterRequset("id");


$stmt = $con->prepare("UPDATE `appointments` SET `appointment_time`=?, `appointment_date`=? WHERE `id`=?");

$stmt->execute(array( $time , $date ,$appointment_id ));

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("status" => "failed"));
}