<?php
include "../connect.php";
$username  =filterRequset("username");
$email  = filterRequset("email");
$phone  = filterRequset("phone");
$password  =filterRequset("password");
$stmt = $con->prepare("INSERT INTO `users_signup`( `username`, `email`,`phone`, `password`) VALUES (?,?,?,?)");
$stmt->execute(array($username,$email,$phone,$password));
$count = $stmt->rowCount();
if($count>0){
    echo json_encode (array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}

