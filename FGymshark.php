<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymShark</title>
    <link rel="stylesheet" href="Fgymsharkexternalcss.css">
    <script>
        function addtocart(productName, productPrice, productImage) {
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItems.push({ name: productName, price: productPrice, image: productImage }); 
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        alert(productName + ' has been added to your cart.');
        }    
    </script>

</head>
<body>
    <header>
        <nav>
            <div class="logo"> <img src="fgymsharklogo.gif" alt="lg" width="100" height="35"></div>
            <ul>
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
    <main>
        <section id="hero">
            <h1 style="font-size: xx-large;">Welcome to GymShark</h1>
            <p><i>Your ultimate fitness apparel destination.</i></p>
            <a href="#products" class="cta-button">Shop Now</a>
        </section>

        <section id="products">
            <h2>Our Products</h2>
            <div class="product-container">
                <div class="product-card">
                    <img src="mtee1.png" alt="Product 1">
                    <p>Price: $28</p>
                    <button class="cartib" onclick="addtocart('Product 1', 29.99, 'mtee1.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mhood1.png" alt="Product 2">                   
                    <p>Price: $60</p>
                    <button class="cartib" onclick="addtocart('Product 2', 29.99, 'mhood1.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mhood2.png" alt="Product 3">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 3', 29.99, 'mhood2.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mshorts1.png" alt="Product 4">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 4', 29.99, 'mshorts1.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mtank1.png" alt="Product 5">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 5', 29.99, 'mtank1.png');">Add to Cart</button>  
                 </div>
                 <img src="" alt="">
                <div class="product-card">
                    <img src="fhood1.png" alt="Product 6">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 6', 29.99, 'fhood1.png');">Add to Cart</button>                
                </div>
                <div class="product-card">
                    <img src="fleggin1.png" alt="Product 7">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 7', 29.99, 'fleggin1.png');">Add to Cart</button>                
                </div>
                <div class="product-card">
                    <img src="ftop1.png" alt="Product 8">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 8', 29.99, 'ftop1.png');">Add to Cart</button>                
                </div>
                 <div class="product-card">
                    <img src="ftop5.png" alt="Product 9">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 9', 29.99, 'ftop5.png');">Add to Cart</button>                
                </div>
                <div class="product-card">
                    <img src="ftank1.png" alt="Product 10">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 10', 29.99, 'ftank1.png');">Add to Cart</button>                
                </div>

                <img src="main pgh (2).jpg" alt="mainpgh" width="1349" height="395">
                <div class="product-card">
                    <img src="ftop3.png" alt="Product 11">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 11', 29.99, 'ftop3.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="ftop2.png" alt="Product 12">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 12', 29.99, 'ftop2.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="ftank2.png" alt="Product 13">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 13', 29.99, 'ftank2.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="ftop4.png" alt="Product 14">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 14', 29.99, 'ftop4.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="fhood1.png" alt="Product 15">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 15', 29.99, 'fhood1.png');">Add to Cart</button>
                </div>

                <img src="mainf1.png" alt="mainf" width="1359" height="365" >
                <div class="product-card">
                    <img src="mhood3.png" alt="Product 16">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 16', 29.99, 'mhood3.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mtank3.png" alt="Product 17">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 17', 29.99, 'mtank3.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mtee3.png" alt="Product 18">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 18', 29.99, 'mtee3.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mshorts3.png" alt="Product 19">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 19', 29.99, 'mshorts3.png');">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="mtee1.png" alt="Product 20">
                    <p>Price: $34.99</p>
                    <button class="cartib" onclick="addtocart('Product 20', 29.99, 'mtee1.png');">Add to Cart</button>
                </div>
                <a href="mens.php" class="cta-button">More in MEN</a>
                <a href="womens.php" class="cta-button">More in WOMEN</a>

            </div>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>We are a brand dedicated to providing high-quality fitness apparel that inspires and empowers your fitness journey.</p>
        </section>
<center>
<section id="contact">
            <h2>Contact Us</h2>
            
                <input type="text" placeholder="Your Name" required></br>
                <input type="email" placeholder="Your Email" required></br>
                <textarea placeholder="Your Message" required></textarea></br>
                <button type="submit">Send Message</button>
            </form>
        </section>
</center>
        
    </main>

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
