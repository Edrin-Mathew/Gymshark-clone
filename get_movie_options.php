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

$sql = "SELECT id, title FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["id"] . "'>" . $row["title"] . "</option>";
    }
} else {
    echo "<option value=''>No movies available</option>";
}

$conn->close();
?>