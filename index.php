<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','ger1976ser1999');
define('DB_NAME','xml');
include('classes/DataXml.php');
include('classes/Connecttobd.php');
include('classes/Render.php');
include('classes/Search.php');
$connect = new ConnectToDB();
$render = new Render();
$render->connection = $connect->connectDB();
$data = new DataXml();
$data->connection = $connect->connectDB();
$search = new Search();
$search->connection = $connect->connectDB();

if(isset($_GET['go'])) {
    $data->InsertDataToDB();
}    

if(isset($_GET['delete'])) {
    $data->DeleteDataFromDB();
}    
    
include('inc/layout.php');
?>

