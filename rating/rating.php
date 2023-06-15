<?php
include "../connect.php";

$user_id  =filterRequset("user_id");
$doc_id  =filterRequset("doc_id");
$name  = filterRequset("name");
$rating  = filterRequset("rating");
$comment  = filterRequset("comment");




$stmt = $con->prepare("INSERT INTO `rating`(`user_id`,`doc_id`,`username`,`doc_rating`,`doc_noterating`) VALUES (?,?,?,?,?)");
$stmt->execute(array($user_id,$doc_id,$name,$rating,$comment));
//,$paitent ));

$count = $stmt->rowCount();
if($count>0){
    echo json_encode (array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}



?>