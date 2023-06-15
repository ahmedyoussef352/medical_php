<?php
include "../connect.php";


$username  = filterRequset("username");
$time  = filterRequset("time");
$text_comment  = filterRequset("text_comment");
$id_post  = filterRequset("id_post");
$image = filterRequset("image");
// $imagename  = imageUploadpost("file");
$id_user  =filterRequset("id_user");


$stmt = $con->prepare("INSERT INTO `comment`(`username`,`image`,`time`,`text_comment`,`id_post`,`id_user`) VALUES (?,?,?,?,?,?)");
$stmt->execute(array($username,$image,$time,$text_comment,$id_post,$id_user));
//,$paitent ));

$count = $stmt->rowCount();
if($count>0){
    echo json_encode (array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}


?>