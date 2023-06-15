<?php
include "../connect.php";


$id =filterRequset("id");
$name  = filterRequset("name");
$email  =filterRequset("email");
$phone  =filterRequset("phone");
$address  = filterRequset("address");
$imagename  = imageUploaduser("file");

$stmt = $con->prepare("UPDATE `profile` SET `name`=?,`email`=?, `phone`=?,`address`=?,`image`= ? WHERE `id` =? ");
$stmt->execute(array($name,$email,$phone,$address,$imagename,$id ));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}

?>