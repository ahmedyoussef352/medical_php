<?php
include "../connect.php";
$id_Doc  = filterRequset("id");

$stmt = $con->prepare(" SELECT `doc_doctor` FROM `info_doc` WHERE `doc_doctor` = ? ");
$stmt->execute(array($id_Doc)); 
$data  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"success" , "data" => $data));
}else{
    echo json_encode(null);
}
?>