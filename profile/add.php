<?php
include "../connect.php";


$name  = filterRequset("name");
$email  = filterRequset("email");
$phone  = filterRequset("phone");
$address  = filterRequset("address");
$imagename  = imageUploaduser("file");
$id_user  = filterRequset("id_user");


 if ($imagename != 'fail'){

$stmt = $con->prepare("INSERT INTO `profile`(`id_user`,`name`,`email`,`phone`,`address`,`image`) VALUES (?,?,?,?,?,?)");
$stmt->execute(array($id_user,$name,$email,$phone,$address,$imagename));


$count = $stmt->rowCount();
if($count>0){
    echo json_encode (array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}

}

else{
    echo json_encode(array("status"=>"failed"));
}
?>