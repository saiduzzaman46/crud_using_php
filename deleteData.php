<?php
include_once "db_connect.php";

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $result = executeQuery("DELETE FROM `userinfo` WHERE `userinfo`.`id` = $deleteId");
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "No data found";
    }
}
