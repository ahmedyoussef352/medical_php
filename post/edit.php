 <?php

include "../connect.php";

$contet  = filterRequset("content");
$imagename  = imageUploadpost("file");
$id_post  =filterRequset("id_post");


$stmt = $con->prepare("UPDATE `post` SET `post_content`=? ,`post_image`=? WHERE `id`=?");

$stmt->execute(array(  $contet , $imagename ,$id_post ));

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count =$stmt->rowCount();

if($count>0){
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("status" => "failed"));
} 