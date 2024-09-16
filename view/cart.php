
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a  href="Contact.php">Contact</a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2>#cart</h2>
        <p>Add your coupon code & SAVE upto 70% !</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%" >
            <thead>
                <tr>
                    <td>REMOVE</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>SubTotal</td>
                </tr>
            </thead>
            <tbody>
               <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/products/f1.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"  ></td>
                <td>$118.19</td>
               </tr> 
               <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/products/f2.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"  ></td>
                <td>$118.19</td>
               </tr> 
               <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/products/f3.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"  ></td>
                <td>$118.19</td>
               </tr> 
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1" >
        <div id="coupon" >
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon" >

                <button class="normal" >Apply</button>
            </div>
        </div> 

        <div id="subtotal" >
            <h3>Cart Subtotal</h3>
            <table>
                <tr>
                    <td>Cart SubTotal</td>
                    <td>$ 335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal" >Proceed to Checkout</button>
        </div>

    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address :</strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <p><strong>Phone :</strong>...................</p>
            <p><strong>Hours :</strong>...................</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Getways </p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>© 2021. Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>
    <script src="../controller/script/script.js"></script>
</body>

</html>