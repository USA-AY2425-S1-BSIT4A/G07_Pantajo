<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- fonr awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <!-- cusrom css file link -->
      <link rel="stylesheet" href="css/contact.css">

</head>
<body>
            <!-- header section starts -->
            <section class="header" id="header">
        <a href="home.php" class="logo">
            <img src="images/Logo.png" alt=""></span>
        </a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="portfolio.php">portfolio</a>
            <a href="conatct.php">contact</a>
            <a href="contact.php"><button>Book a Call <i class="fa-solid fa-arrow-up-right-dots"></i> </button></a>
        </nav>



        <div id="menu-btn" class="fas fa-bars"></div>

     </section>

     <section class="contact-container">
        <div class="contact-left">
            <h1>Let’s get in touch!</h1>
            <img src="images/contact1.png" alt="Team Working">
            <div class="contact-info">
                <div class="info-item">
                    <span class="icon">✉️</span>
                    <div>
                        <h3>Email</h3>
                        <p>We usually email you back within an hour</p>
                        <a href="mailto:galadevs@gmail.com">galadevs@gmail.com</a>
                    </div>
                </div>
                <div class="info-item">
                    <span class="icon">📞</span>
                    <div>
                        <h3>Phone</h3>
                        <p>We’re available weekdays from 9AM to 5PM</p>
                        <p>xxx-xxx-xxx-xxx</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-right">
            <h2>Fill out the form below to get started</h2>
            <p>Let us know about your project and we will get back to you with our proposal timeline.</p>

            <form id="contact-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone <span class="optional">(Optional)</span></label>
                <input type="tel" id="phone" name="phone">

                <label for="message">How can we help you? <span class="char-limit">Max 500 characters</span></label>
                <textarea id="message" name="message" rows="4" maxlength="500" placeholder="Tell us a little bit about your project..."></textarea>

                <div class="checkbox-group">
                    <h3>Expected services</h3>
                    <label><input type="checkbox" name="services" value="web-dev"> Web Design and Development</label>
                    <label><input type="checkbox" name="services" value="mobile-dev"> Mobile App Development</label>
                    <label><input type="checkbox" name="services" value="custom-software"> Custom Software</label>
                    <label><input type="checkbox" name="services" value="other"> Other</label>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
</section>

    
<section class="footer">

<div class="box-container">

    <div class="box">   
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="portfolio.php"> <i class="fas fa-angle-right"></i> portfolio</a>
        <a href="conatct.php"> <i class="fas fa-angle-right"></i> contact</a>
    </div>

    <div class="box">   
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
    </div>

    <div class="box">   
        <h3>contact information</h3>
        <a href="#"> <i class="fas fa-phone"></i> +xxx-xxx-xxxx</a>
        <a href="#"> <i class="fas fa-phone"></i> +xxx-xxx-xxxx</a>
        <a href="#"> <i class="fas fa-envelope"></i> galadevs@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> IloIlo City, Philippines</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>

</div>

<div class="credit"> created by <span>GalaDevs</span> | all rights reserved!</div>
</section>


    
     
     <!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
 <script src="js/script.js"></script>
 

    
</body>
</html>