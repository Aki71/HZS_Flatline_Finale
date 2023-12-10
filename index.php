<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelMaster</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #f5f5dc;">
<?php
session_start();
?>
<nav class="navbar">
    <div class="logo">
        <a href="index.php">
           <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 54px;margin-top:2px;margin-left:5px;border:0;outline:0;">
        </a>
        <div style="float:inline-end;margin-top:20px;">
    <a href="indexsrb.php" style="margin-right:3px;">
           <img src="img/serbia.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a>
        <a href="index.php" style="margin-right:20px;">
           <img src="img/united-kingdom.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a></div>
    </div>
   
        <div class="navbar-links">
        <ul>    
            <li><a href="index.php" style="color:black;font-weight:bold;font-size:17px;">Home</a></li>
            <li><a href="mesta.php">Places</a></li>
            <li><a href="restorani.php">Restaurants</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <li style="margin-right:10px;">Welcome, <?php echo $_SESSION['user']; ?>!</li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="menu-btn" style="margin-right: 10px;"></div>
      </nav>
      <div style="text-align: center;">
        <h1 style="font-family: 'Montserrat', sans-serif;">Finished a meeting, what now?</h1>
        <p style="font-family: 'Open Sans', sans-serif;">After a meeting, you're not senteced to a hotel room. TravelMaster will take it from here.</p>
      </div>

      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/slika.jpg" style="width:100%;height:450px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/grad_4.jpeg" style="width:100%;height:450px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/grad_3.jpeg" style="width:100%;height:450px;">
 
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>



<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }
</script>




      <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var navLinks = document.querySelector('.navbar-links');
            navLinks.classList.toggle('show');
        });
    </script>
    </body>
</html>