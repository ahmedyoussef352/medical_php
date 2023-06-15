<?php
include "../connect.php";


$contet  = filterRequset("content");
$username  = filterRequset("username");
$imagename  = imageUploadpost("file");
$id_user  =filterRequset("id_user");


$stmt = $con->prepare("INSERT INTO `post`(`id_user`,`user_name`,`post_content`,`post_image`) VALUES (?,?,?,?)");
$stmt->execute(array($id_user,$username,$contet,$imagename));
//,$paitent ));

$count = $stmt->rowCount();
if($count>0){
    echo json_encode (array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}


?>