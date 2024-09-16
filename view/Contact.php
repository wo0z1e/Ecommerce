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
                <li><a class="active" href="Contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2>#Lets_talk</h2>
        <p>LEAVE A MESSAGE ,We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us Today!</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map" ></i>
                    <p>56 Glass Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <i class="far fa-envelope" ></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt" ></i>
                    <p>016********</p>
                </li>
                <li>
                    <i class="far fa-clock" ></i>
                    <p>Monday to Saturday: 9:00am to 16:00pm</p>
                </li>
            </div>
        </div>
        <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.502498145301!2d-71.12082372346643!3d42.37444073419215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377427d7f0199%3A0x5937c65cee2427f0!2sHarvard%20University!5e0!3m2!1sen!2sbd!4v1726322758860!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>Leave A Message</span>
            <h2>We love to hear form you</h2>
            <input type="text" placeholder="Your Name" >
            <input type="text" placeholder="Email" >
            <input type="text" placeholder="Subject Name" >
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" ></textarea>
            <button class="normal" >Submit</button>
        </form>
        <div class="people" >
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Doe</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email:Contact@example.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>William Smith</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email:Contact@example.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Emma Stone</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email:Contact@example.com</p>
            </div>
        </div>
    </section>
    
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" class="Your email address">
            <button class="normal">Sign Up</button>
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