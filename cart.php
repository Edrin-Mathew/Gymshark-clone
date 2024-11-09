<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="Fgymsharkexternalcss.css"> 
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
    <center>
        <h1 style="color: black;">Your Cart</h1>
        <div id="cartItemsContainer"></div>
        
    </center> 
    <script>
        function displayCartItems() {
            const cartItemsContainer = document.getElementById('cartItemsContainer');
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            if (cartItems.length > 0) {
                cartItems.forEach(item => {
                    const itemDiv = document.createElement('div');
                    itemDiv.classList.add('cart-item');
                    itemDiv.innerHTML = `
                        <img src="${item.image}" alt="${item.name}" width="150">
                        <p>${item.name}</p>
                        <p>Price: $${item.price}</p>
                    `;
                    cartItemsContainer.appendChild(itemDiv);
                });
            } else {
                cartItemsContainer.innerHTML = "<p>Your cart is empty. Continue Shopping...</p>";              
            }
        }
        
        function clearCart() {
            localStorage.removeItem('cartItems'); 
            location.reload(); 
        }

        window.onload = displayCartItems; 
    </script>
    <center>
        <a href="FGymshark.php" class="cta-button">SHOP MORE</a>
        <button class="cta-button" onclick="clearCart()">Clear Cart</button> 
        <a href="buynow.php" class="cta-button">Buy Now</a>
        
    </center>
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
