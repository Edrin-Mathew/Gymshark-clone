<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    echo "<h2>Signup Successful!</h2>";
    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Password: " . htmlspecialchars($password) . "</p>"; 
}
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET["username"]) && isset($_GET["email"])) {
        echo "<h2>Received via GET:</h2>";
        echo "<p>Username: " .htmlspecialchars($_GET["username"]) . "</p>";
        echo "<p>Email: " .htmlspecialchars($_GET["email"]) . "</p>";
    }
} 
?>
