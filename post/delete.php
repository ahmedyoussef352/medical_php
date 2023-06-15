<?php

include "../connect.php";

$id_post  =filterRequset("id_post");

$stmt = $con->prepare("DELETE FROM `post` WHERE `id`=?");
$stmt->execute(array($id_post));
$count =$stmt->rowCount();

if($count>0){
    
    echo json_encode(array("status" => "success" ));
}else{
    echo json_encode(array("status" => "failed"));
}