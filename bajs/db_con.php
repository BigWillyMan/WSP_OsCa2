<?php
$server = "localhost";
$user = "admin";
$pass = "kaka";
$db = "Lab2"


$conn = new mysqli($server, $user, $pass, $db);


if ($conn->connect_error) {
    die(connection failed: " . $conn->connect_error");
}

else {
    echo "connection success";
}

?>
