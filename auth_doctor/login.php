<?php
include "../connect.php";
$email  = filterRequset("email");
$password  =filterRequset("password");
$stmt = $con->prepare(" SELECT * FROM `doctors` WHERE `email` =? AND `password`=?  ");
$stmt->execute(array($email,$password));
$data  = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"success" , "data" => $data));
}else{
    echo json_encode(array("status"=>"failed"));
}
?>