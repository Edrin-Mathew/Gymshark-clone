<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginpage.css">
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        session_start();

        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "gymsharklog";

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if user is logged in
        if (isset($_SESSION['userID'])) {
            header("Location: FGymshark.php"); 
            exit();
        }
        
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            if (isset($_POST['login'])) {
                
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
                $username = htmlspecialchars($username);
                //details from the database
                $stmt = $conn->prepare("SELECT password, userID FROM users WHERE username = ?");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($hashedPassword, $userID);

                if ($stmt->num_rows > 0) {
                    $stmt->fetch();
                    if (password_verify($password, $hashedPassword)) {
                        //session
                        $_SESSION['userID'] = $userID;
                        $_SESSION['username'] = $username;
                        header("Location: FGymshark.php");
                        exit();
                    } else {
                        echo "<script>showAlert('Invalid password. Please try again.');</script>";
                    }
                } else {
                    echo "<script>showAlert('Invalid username. Please try again.');</script>";
                }
                $stmt->close();
            }
        }
        ?>

        
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login" class="btn">Login</button>
        </form>

        <p>Are you a new user? <a href="register.php">Click here to register.</a></p>
        
        <hr>
        <h3>Forgot Password?</h3>
        <p>If you forgot your password, <a href="p-reset.php">click here</a> to reset it.</p>
    </div>
</body>
</html>
