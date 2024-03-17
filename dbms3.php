<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plants";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user_pass (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    if ($username === "admin") {
        header("Location: purchase.html");
    } else {
        header("Location: main.html");
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>