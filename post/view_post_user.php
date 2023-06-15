<?php

include "../connect.php";

$id_user  =filterRequset("id_user");


$stmt = $con->prepare("SELECT * FROM `post` WHERE `id_user`= ? ");
$stmt->execute(array($id_user));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success" , "data" => $data));
}else{
    echo json_encode(array("status" => "failed"));
}


