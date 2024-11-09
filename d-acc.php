<?php
session_start();

if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}

$servername="localhost";
$db_username="root";
$db_password="";
$dbname="gymsharklog";

$conn=new mysqli($servername, $db_username, $db_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userID=$_SESSION['userID'];

$sql="DELETE FROM users WHERE userID = ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("i", $userID);

if ($stmt->execute()) {
    session_unset();
    session_destroy();
    header("Location: account.php?message=Account successfully deleted.");
    exit();
} else {
    echo "Error deleting account: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
