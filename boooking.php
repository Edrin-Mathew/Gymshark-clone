<?php
$servername = "localhost";
$username = "root";  /
$password = "";  
$dbname = "movie_booking";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $conn->real_escape_string($_POST['movie']);
    $seats = $conn->real_escape_string($_POST['seats']);
    $date = $conn->real_escape_string($_POST['date']);
    $customer_name = $conn->real_escape_string($_POST['customer_name']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO bookings (movie_id, number_of_seats, booking_date, customer_name, email) 
            VALUES ('$movie', '$seats', '$date', '$customer_name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success'>Booking successful! Your booking ID is: " . $conn->insert_id . "</div>";
    } else {
        echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ebccd1;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="movie">Select Movie:</label>
            <select id="movie" name="movie" required>
                <option value="">Choose a movie</option>
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);
                $result = $conn->query("SELECT id, title FROM movies");
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
                }
                $conn->close();
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="seats">Number of Seats:</label>
            <input type="number" id="seats" name="seats" min="1" max="10" required>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="customer_name">Your Name:</label>
            <input type="text" id="customer_name" name="customer_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <button type="submit">Book Now</button>
    </form>
</body>
</html>