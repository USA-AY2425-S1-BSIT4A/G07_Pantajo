<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- fonr awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <!-- cusrom css file link -->
      <link rel="stylesheet" href="css/home.css">

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

     <section class="home">
    <div class="main-home">
        <div class="home-text">
            <div class="title">
                <h3>SOFTWARE APPLICATION DEVELOPMENT COMPANY</h3>
            </div>
            <div class="title2">
                <h2>We create digital<br>solutions that help<br>businesses grow<br>faster</h2>
            </div>
            <div class="description">
                <p>We help you build and develop websites, web apps, mobile apps,<br> custom software solutions, and more.</p>
            </div>
            <div class="description2">
                <p>Trusted for years in providing reliable digital solutions.</p>
            </div>
        </div>
    </div>
</section>
    <!-- header section ends -->

    <section class="why-galadevs">
    <h1>Why GalaDevs?</h1>
    <p>Our expert and developer team uses cutting-edge tools and <br> technologies to ensure that solutions delivered exceed expectations.</p>
    <div class="card-grid">
      <div class="card cardup">
        <img src="images/sports develop.png" alt="Sport Icon">
        <h3>It is a Sport Development</h3>
        <p>For every client we invest  in building a cohensive team with the shared goals and service of ownership.
        </p>
      </div>
      <div class="card cardup">
        <img src="images/time.png" alt="Clock Icon">
        <h3>The Appropriate team, scaled rapidly, for the right project.</h3>
        <p>Our ability to deliver complete and flawless Software Development QA Cloud Engineering, DevOps, and AI/ Machine Learning practices defines GalaDevs.</p>
      </div>
      <div class="card carddown">
        <img src="images/1 app.png" alt="Gear Icon">
        <h3>One application at a time accelerating innovation</h3>
        <p>We have assembled an award-winning team of specialist with an unique on how technology grows and thrives to what our  client   and complete successfully </p>
      </div>
      <div class="card carddown">
        <img src="images/monitor.png" alt="Globe Icon">
        <h3>Not only in the domain knowledge</h3>
        <p>Our projects range from software development and quality assurance to support and maintenance of on permission . cloud. and Saas applications in a variety of GalaDevs.</p>
      </div>
    </div>
  </section>

  

 

  <div class="background">
    <section class="about-us">
      <div class="content">
        <h2>About Us</h2>
        <h3>Businesses and organizations have confidence in us.</h3>
        <p>
          To ensure project satisfaction, we consistently include our clients as
          part of the solution development team. We deliver regular project status
          reports to our clients in order to make early adjustments.
        </p>
        <button class="read-more">Read More</button>
      </div>
      <div class="image">
        <img src="images/aboutus.png" alt="Project dashboard preview">
      </div>
    </section>
  </div>
  
<section class="testimonial-main">
  <div class="test">
  <h1>Here's what our clients say about us</h1>
  <p>We help grow businesses and organizations with digital solutions that actually work. <br>Hear it from the people we've actually worked with.</p>
  </div>


<!-- Create Review Button -->


<!-- Create Review Form (Hidden by Default) -->
<form id="createForm" action="create.php" method="POST" class="review-form" style="display: none;">
    <input type="text" name="username" placeholder="Your Name" required>
    <textarea name="comment" placeholder="Your Comment" required></textarea>
    <label for="rating">Rating:</label>
    <select name="rating" required>
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>
    </select>
    <button class="submit" type="submit">Submit Review</button>
    <button type="button" onclick="toggleCreateForm()">Cancel</button>
</form>

<!-- Update Review Form (Hidden by Default) -->
<form id="updateForm" action="update.php" method="POST" class="review-form" style="display: none;">
    <input type="hidden" name="id" id="updateId">
    <textarea name="comment" id="updateComment" placeholder="Your Comment" required></textarea>
    <label for="updateRating">Rating:</label>
    <select name="rating" id="updateRating" required>
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>
    </select>
    <button type="submit">Update Review</button>
    <button type="button" onclick="closeUpdateForm()">Cancel</button>
</form>

<!-- Carousel Container -->
<div class="carousel-container">
    <div class="carousel" id="carousel"></div>
</div>

<button id="createButton" class="create-button" onclick="toggleCreateForm()">Create Review</button>



</section>







<!-- footer section starts -->

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