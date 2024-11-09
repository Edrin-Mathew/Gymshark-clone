<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENS</title>
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
    <img src="mcover.png" alt="mcover" width="1349" height="385">
    <section id="products">
        <h2>MEN'S COLLECTIONS</h2>
        <div class="product-container">
            <div class="product-card">
                <img src="mtee1.png" alt="Product 21">
                <p>Price: $29.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mhood1.png" alt="Product 22">
                <p>Price: $34.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
              </div>
            <div class="product-card">
                <img src="mshorts1.png" alt="Product 23">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mtank1.png" alt="Product 24">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mshorts2.png" alt="Product 25">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mhood2.png" alt="Product 26">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mhood3.png" alt="Product 27">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mhood4.png" alt="Product 28">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mshorts2.png" alt="Product 29">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mshorts3.png" alt="Product 30">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <img src="mc2.png" alt="mc2" width="1349" height="375">
            <div class="product-card">
                <img src="mtank2.png" alt="Product 31">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mtank3.png" alt="Product 32">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mtee2.png" alt="Product 33">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mtee3.png" alt="Product 34">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mss.png" alt="Product 35">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mp2.png" alt="Product 36">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mp3.png" alt="Product 37">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mp4.png" alt="Product 38">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            
            <div class="product-card">
                <img src="ms1.png" alt="Product 39">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            
            <div class="product-card">
                <img src="ms2.png" alt="Product 40">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            
            <div class="product-card">
                <img src="ms3.png" alt="Product 41">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mt4.png" alt="Product 42">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mta4.png" alt="Product 43">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mtank2.png" alt="Product 44">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="mtank3.png" alt="Product 45">
                <p>Price: $39.99</p>
                <button class="cartib" onclick="addtocart()">Add to Cart</button>
            </div>          
            </div>          
    </section>
     <footer>
        <p>&copy; 2024 GymShark. All rights reserved.</p>
    </footer>
</body>
</html>