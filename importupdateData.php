<?php
include_once "db_connect.php";

$update_id = null;
$update_data = [];

if(isset($_GET['id'])){
    $update_id = $_GET['id'];
    $result = executeQuery("SELECT * FROM `userinfo` WHERE `id` = $update_id;");

    if($result->num_rows>0){
        $update_data = $result->fetch_assoc();
    }
}

?>