<?php
include "../connect.php";
$category  =filterRequset("category");
$city  =filterRequset("city");
$stmt = $con->prepare(" SELECT * FROM `info_doc` WHERE `doc_cat` = ? && `doc_city` = ? ");
$stmt->execute(array($category,$city)); 
$data  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"success" , "data" => $data));
}else{
    echo json_encode(array("status"=>"failed"));
}
?>