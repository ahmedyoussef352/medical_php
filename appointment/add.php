<?php

include "../connect.php";

$username = filterRequset("username");
$time = filterRequset("time");
$date = filterRequset("date");
$type  = filterRequset("type");
$doctor = filterRequset("doctor");
$place  = filterRequset("place");
$userid = filterRequset("id");
$docid = filterRequset("docid");


$stmt = $con->prepare("INSERT INTO `appointments` (`username`,`appointment_time`,`appointment_date`,`appointment_type`,`appointment_doctor`,`appointment_place`,`appointment_id`,`appoinment_doc_id`) VALUES (?,?,?,?,?,?,?,?)");

$stmt->execute(array($username,$time, $date,$type,$doctor,$place,$userid,$docid));


$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("status" => "failed"));
}


