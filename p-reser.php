<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="login-container">
        <h2>Reset Password</h2>

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

        // Variable to track the reset email process
        $resetEmailSent = false;

        // Process reset password form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['reset_email'])) {
                // Handle forgot password request
                $email = trim($_POST['email']);

                // Validate email format
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p>Invalid email format. Please enter a valid email.</p>";
                } else {
                    // Check if the email exists
                    $checkStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
                    $checkStmt->bind_param("s", $email);
                    $checkStmt->execute();
                    $checkStmt->store_result();

                    if ($checkStmt->num_rows > 0) {
                        // Email exists, set flag to show new password form
                        $resetEmailSent = true;
                    } else {
                        echo "<p>No user found with that email.</p>";
                    }

                    $checkStmt->close();
                }
            } elseif (isset($_POST['update_password'])) {
                // Handle new password submission
                $new_password = trim($_POST['new_password']);
                $email = trim($_POST['email']); // Remember the email for updating

                // Hash the new password
                $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);
                
                // Update the password in the users table
                $updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
                $updateStmt->bind_param("ss", $hashedPassword, $email);

                if ($updateStmt->execute()) {
                    echo "<p>Password updated successfully! You can now <a href='login.php'>login</a>.</p>";
                } else {
                    echo "<p>Error updating password: " . $updateStmt->error . "</p>";
                }

                $updateStmt->close();
            }
        }
        ?>

        <?php if (!$resetEmailSent): ?>
            <!-- Email Verification Form -->
            <form action="reset_password.php" method="post">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" name="reset_email" class="btn">Verify Email</button>
            </form>
        <?php else: ?>
            <!-- New Password Form -->
            <form action="reset_password.php" method="post">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <div class="input-group">
                    <label for="new_password">New Password:</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>
                <button type="submit" name="update_password" class="btn">Update Password</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
