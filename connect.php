
<?php

$dsn = "mysql:host=localhost;dbname=gp_app";
$username = "root";
$password = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
$countrowinpage = 9 ;
try{
    $con = new PDO ($dsn , $username , $password, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
    header("Access-Control-Allow-Methods: POST, OPTIONS , GET");


    include "functions.php";
    checkAuthenticate() ;

}
catch(PDOException $e){
    echo $e->getMessage();

}

// $dsn = "mysql:host=localhost;dbname=gp_app";
// $username = "root";
// $password = "";
// $option = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
// );
// try{
//     $con = new PDO ($dsn , $username,$password,$option);
//     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     header("Access-Control-Allow-Origin: *");
//     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
//     header("Access-Control-Allow-Methods: POST, OPTIONS , GET");


//     include "functions.php";
//     checkAuthenticate() ;

// }
// catch(PDOException $e){
//     echo $e->getMessage();

// }


// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
//    header("Access-Control-Allow-Methods: POST, OPTIONS , GET");

//    checkAuthenticate() ; 


?>