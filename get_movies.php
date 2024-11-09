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

$sql = "SELECT id, title, description FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='movie'>";
        echo "<h3>" . $row["title"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No movies available.";
}

$conn->close();
?>