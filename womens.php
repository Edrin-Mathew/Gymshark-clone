<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOMENS</title>
    <link rel="stylesheet" href="Fgymsharkexternalcss.css">
    <script>
        function addtocart()
        {
            alert("Added to Cart!");
        }
    </script>

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

    <section id="products"></section>
    <img src="fcover.png" alt="cover" width="1349" height="375">
        <h2><center>WOMEN'S COLLECTIONS</center></h2>
    <div class="product-container">
        <div class="product-card">
            <img src="fhood1.png" alt="Product 1">
            <p>Price: $29.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fleggin1.png" alt="Product 2">
            <p>Price: $34.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="ftank1.png" alt="Product 3">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="ftop1.png" alt="Product 4">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="ftop2.png" alt="Product 5">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="ftop3.png" alt="Product 6">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fct.png" alt="Product 7">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fct2.png" alt="Product 8">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fh2.png" alt="Product 9">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fh3.png" alt="Product 10">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <img src="fc2.png" alt="fc2" width="1339" height="365">
        <div class="product-card">
            <img src="fh4.png" alt="Product 11">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fh5.png" alt="Product 12">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fh6.png" alt="Product 13">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fb1.png" alt="Product 14">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fb2.png" alt="Product 15">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fb3.png" alt="Product 16">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fb4.png" alt="Product 17">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl1.png" alt="Product 18">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl2.png" alt="Product 19">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl4.png" alt="Product 20">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl3.png" alt="Product 21">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl5.png" alt="Product 22">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl6.png" alt="Product 23">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl7.png" alt="Product 23">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="fl8.png" alt="Product 23">
            <p>Price: $39.99</p>
            <button class="cartib" onclick="addtocart()">Add to Cart</button>
        </div>
      
    </div>
</section>
<footer>
    <p>&copy; 2024 GymShark. All rights reserved.</p>
</footer>

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