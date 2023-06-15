<?php

include "../connect.php";

$id_rating  =filterRequset("id");

$stmt = $con->prepare("DELETE FROM `rating` WHERE `id`=?");
$stmt->execute(array($id_rating));
$count =$stmt->rowCount();

if($count>0){
    
    echo json_encode(array("status" => "success" ));
}else{
    echo json_encode(array("status" => "failed"));
}