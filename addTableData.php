
<?php
include_once "db_connect.php";
$result = executeQuery("SELECT `id`, `fullname`, `email`, `number`,`gender`, `address`, `username` FROM `userinfo`;");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["number"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        // echo "<td><button class='edit-btn'>Edit</button> <button class='delete-btn'>Delete</button></td>";
        echo "<td><a class='edit-btn ' href='index.php?id=" . $row["id"] . "'>Edit</a> <a class='delete-btn' href='index.php?delete_id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No records found</td></tr>";
}
