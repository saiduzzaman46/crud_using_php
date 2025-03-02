<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

try {

    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
function executeQuery($sql)
{
    global $conn;
    return $conn->query($sql);
}
