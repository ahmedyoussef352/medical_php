<?php
include "../connect.php";

// Retrieve the request parameters from the HTTP POST request
$id = filterRequset("id");
$location = filterRequset("location");

// Insert the request parameters into the database
$stmt = $con->prepare("INSERT INTO `info_doc` (`doc_doctor`, `location`) VALUES (?, ?)");
$stmt->execute(array($id, $location));
$count = $stmt->rowCount();

// Return a JSON response indicating the status of the database operation
if ($count > 0) {
  echo json_encode(array("status" => "success"));
} else {
  echo json_encode(array("status" => "failed"));
}
