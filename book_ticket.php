<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$movie_id = $_POST['movie'];
$seats = $_POST['seats'];
$date = $_POST['date'];

$sql = "INSERT INTO bookings (movie_id, seats, date) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iis", $movie_id, $seats, $date);

if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>