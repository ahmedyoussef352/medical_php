<?php
include "../connect.php";

$id  =filterRequset("id");
$name  = filterRequset("name");
$category  = filterRequset("category");
$year  = filterRequset("year");
$desc  = filterRequset("desc");
$imagename  = imageUpload("file");
$paitent  = filterRequset("paitent");
$city  = filterRequset("city");


 if ($imagename != 'fail'){

$stmt = $con->prepare("INSERT INTO `info_doc`(`doc_doctor`,`doc_name`,`doc_cat`,`doc_year`,`doc_des`,`doc_img`,`doc_paitent`,`doc_city`) VALUES (?,?,?,?,?,?,?,?)");
$stmt->execute(array($id,$name,$category,$year,$desc,$imagename,$paitent,$city));
//,$paitent ));

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