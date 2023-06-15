<?php
include "../connect.php";


$docid =filterRequset("id");
$name  = filterRequset("name");
$category  =filterRequset("category");
$year  =filterRequset("year");
$description  = filterRequset("description");
$area  =filterRequset("area");
$paitent  =filterRequset("paitent");
$imagename  = imageUpload("file");
if(isset($_FILES['file'])){
    deleteFile("../upload" ,$imagename);
    $imagename = imageUpload("file");
}
$stmt = $con->prepare("UPDATE `info_doc` SET
 `doc_name`=?,`doc_cat`=?, `doc_year`=?,
  `doc_des`=?,`doc_area`=?,`doc_paitent`=? , `doc_img`= ? WHERE `doc_id ` =? ");
$stmt->execute(array($name,$category,$year,$description,$area,$paitent,$imagename,$docid ));
$count = $stmt->rowCount();
if($count>0){
    echo json_encode(array("status"=>"success"));
}else{
    echo json_encode(array("status"=>"failed"));
}

// $noteid  = filterRequset("id");
// $title  = filterRequset("title");
// $content  = filterRequset("content");
// $imagename  = filterRequset("imagename");
// if(isset($_FILES['file'])){
//     deleteFile("../upload" ,$imagename);
//     $imagename = imageUpload("file");
// }




// $stmt = $con->prepare("UPDATE `notes` SET
//  `notes_title`=?,`notes_content`=? , notes_image = ? WHERE `notes_id` =? ");
// $stmt->execute(array( $title , $content , $imagename , $noteid ));
// $count = $stmt->rowCount();
// if($count>0){
//     echo json_encode(array("status"=>"success"));
// }else{
//     echo json_encode(array("status"=>"failed"));
// }
?>