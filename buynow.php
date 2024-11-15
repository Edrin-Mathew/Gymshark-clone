<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceed to Buy</title>
    <link rel="stylesheet" href="Fgymsharkexternalcss.css">
    <style>

        
body
         {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vx;
}

h1 {
    color: #333;
}

.buy-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
}

.form-section, .summary-section {
    margin-bottom: 20px;
}

h2 {
    color: #444;
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.summary-section p {
    margin: 5px 0;
    font-size: 18px;
}

.confirm-section {
    text-align: center;
}

button {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"> <img src="fgymsharklogo.gif" alt="lg" width="100" height="35"></div>
            <ul>
                <li><a href="FGymshark.php">HOME</a></li>
                <li><a href="mens.php">MEN</a></li>
                <li><a href="womens.php">WOMEN</a></li>
                <li><a href="cart.php">CART</a></li>               
                <?php
                session_start();
                if (isset($_SESSION['userID'])) {
                    echo '
                        <li id="accountButton">
                            <a href="#" onclick="toggleAccountMenu()">ACCOUNT</a>
                            <ul id="accountMenu" style="display: none;">
                                <li><a href="account.php">Account Settings</a></li>
                                <li><a href="#" onclick="logout()">Logout</a></li>
                                <li><a href="#" onclick="deleteAccount()">Delete Account</a></li>
                            </ul>
                        </li>
                    ';
                } else {
                    echo '<li id="loginButton"><a href="login.php">LOGIN</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <h1>Proceed to Buy</h1>

    <div class="buy-container">
        <div class="form-section">
            <h2>Shipping Details</h2>
            <form>
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>

                <label for="zipcode">Zip Code:</label>
                <input type="text" id="zipcode" name="zipcode" required>

                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </form>
        </div>

        <div class="form-section">
            <h2>Billing Details</h2>
            <form>
                <label for="cardname">Name on Card:</label>
                <input type="text" id="cardname" name="cardname" required>

                <label for="cardnumber">Card Number:</label>
                <input type="text" id="cardnumber" name="cardnumber" required>

                <label for="expiry">Expiry Date:</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </form>
        </div>

       
        <div class="summary-section">
            <h2>Order Summary</h2>
            <p>Item: GymShark Hoodie</p>
            <p>Quantity: 1</p>
            <p>Price: $34.99</p>
            <hr>
            <p><strong>Total Amount:</strong> $34.99</p>
        </div>
        
        
        <div class="confirm-section">
            <button onclick="confirmPurchase()">Confirm Purchase</button>
        </div>
    </div>

    <script>
        function confirmPurchase() {
            alert("Purchase confirmed! Thank you for shopping.");
          
        }
    </script>
    <script>
        function toggleAccountMenu() {
            const menu=document.getElementById('accountMenu');
            menu.style.display=menu.style.display==='none' ? 'block' : 'none';
        }
        function logout() {
            fetch('logout.php')
                .then(response=>response.text())
                .then(data=>{
                    alert('Logged out successfully!');
                    window.location.href='login.php'; 
                })
                .catch(error=>{
                    console.error('Error logging out:', error);
                });
        }
        function deleteAccount() {
            if (confirm("Are you sure you want to delete your account? This action cannot be undone.")) {
                fetch('d-acc.php', {
                    method: 'POST'
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    window.location.href='login.php'; 
                })
                .catch(error=>{
                    console.error('Error deleting account:', error);
                });
            }
        }
    </script>

</body>
</html>
