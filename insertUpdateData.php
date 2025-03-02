<?php include "updateData.php" ?>
<?php
include_once "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $getId = isset($_POST['id']) ? $_POST['id'] : null;

    if (empty($_POST["fullname"]) || empty($_POST["email"]) || empty($_POST["number"]) || ($_POST["gender"] === "") || empty($_POST["address"]) || empty($_POST["username"]) || (!$getId && empty($_POST["password"]))) {
        die("All fields are required.");
    }

    try {


        $name =  $_POST["fullname"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($getId) {
            if (!empty($password)) {
                throw new Exception("Don't change password.");
            } else {

                $query = "UPDATE `userinfo` SET `fullname` = '$name', `email` = '$email', `number` = '$number', `gender` = '$gender', `address` = '$address', `username` = '$username' WHERE `userinfo`.`id` = $getId;";
            }
        } else {
            $result = executeQuery("SELECT MAX(id) AS maxid FROM `userinfo`;");
            if (!$result) {
                throw new Exception("Failed to show data." . $conn->errno);
            }
            $max_id = 0;
            $row = $result->fetch_assoc();
            $max_id = (int) $row["maxid"];
            $max_id++;

            $query = "INSERT INTO `userinfo` (`id`,`fullname`, `email`, `number`,`gender`, `address`, `username`, `password`) VALUES ($max_id, '$name', '$email', '$number','$gender', '$address', '$username', '$password');";
        }
        $insert = executeQuery($query);

        if (!$insert) {
            throw new Exception("Failed to insert data." . $conn->errno);
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    } finally {
        header("Location: index.php");
        exit();
    }
}
