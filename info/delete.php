<?php
include "../connect.php";


$docid  =filterRequset("id");
$imagename = filterRequset("imagename");


$stmt = $con->prepare("DELETE FROM `info_doc` WHERE doc_id = ?");

$stmt->execute(array($docid));

$count = $stmt->rowCount();

if($count>0){
    deleteFile("../upload", $imagename);

    echo json_encode(array("status"=>"success"));

}
else{
    echo json_encode(array("status"=>"failed"));
}
?>