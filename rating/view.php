<?php
include "../connect.php";
// $user_id  =filterRequset("user_id");
$doc_id  =filterRequset("doc_id");

$stmt = $con->prepare(" SELECT * FROM `rating` WHERE `doc_id`= ? ");
$stmt->execute(array($doc_id )); 
$data  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"success" , "data" => $data));
}else{
    echo json_encode(array("status"=>"failed"));
}
?>