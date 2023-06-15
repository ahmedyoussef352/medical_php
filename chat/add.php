<?php
include "../connect.php";


$username  = filterRequset("username");
$time  = filterRequset("time");
$text_comment  = filterRequset("text");
$id_doc  = filterRequset("id_doc");
// $imagename  = imageUploadpost("file");
$id_user  =filterRequset("id_user");


$stmt = $con->prepare("INSERT INTO `chat`(`username`,`time`,`text`,`id_doc`,`id_user`) VALUES (?,?,?,?,?)");
$stmt->execute(array($username,$time,$text_comment,$id_doc,$id_user));
//,$paitent ));

$count = $stmt->rowCount();
if($count>0){
    echo json_encode (array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}


?>