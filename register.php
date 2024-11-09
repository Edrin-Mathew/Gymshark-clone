<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="login-container">
        <h2>Register</h2>
        
        <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL); 
        $servername = "localhost"; 
        $db_username = "root";
        $db_password = "";
        $dbname = "gymsharklog";

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>Invalid email format. Please enter a valid email.</p>";
            } else {
                //checking if email exists or not
                $checkStmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
                $checkStmt->bind_param("ss", $username, $email);
                $checkStmt->execute();
                $checkStmt->store_result();

                if ($checkStmt->num_rows > 0) {
                    echo "<p>Username or email already exists. Please choose another.</p>";
                } else {
                    $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
                    //query to insert user
                    $stmt=$conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $username, $email, $hashedPassword);
                    if ($stmt->execute()) {
                        echo "<p>Registration successful! You can now <a href='login.php'>login</a>.</p>";
                    } else {
                        echo "<p>Error: " . $stmt->error . "</p>";
                    }
                    $stmt->close();
                }
                $checkStmt->close();
            }
            $conn->close();
        }
        ?>
        <form action="register.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>
