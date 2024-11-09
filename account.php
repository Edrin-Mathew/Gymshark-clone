<?php
session_start();

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "gymsharklog";
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['userID'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $stmt = $conn->prepare("SELECT password, userID FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($hashedPassword, $userID);

        if ($stmt->num_rows > 0) {
            $stmt->fetch();
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['userID'] = $userID;
                $_SESSION['username'] = $username;
                header("Location: account.php");
                exit();
            } else {
                echo "<script>alert('Invalid password.');</script>";
            }
        } else {
            echo "<script>alert('Invalid username.');</script>";
        }
        $stmt->close();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
        <link rel="stylesheet" href="loginpage.css">
    </head>
    <body>
        <h2>Login to Your Account</h2>
        <form action="account.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <button type="submit" name="login">Login</button>
        </form>
        <p>New user? <a href="register.php">Register here</a></p>
    </body>
    </html>

<?php
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
        <link rel="stylesheet" href="loginpage.css">
    </head>
    <body>
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

        <ul>
            <li><a href="logout.php" class="btn">Logout</a></li>
            <li><a href="d-acc.php" class="btn"onclick="return confirm('Are you sure you want to delete your account?');">Delete Account</a></li>
        </ul>
    </body>
    </html>

<?php
}
$conn->close();
?>

