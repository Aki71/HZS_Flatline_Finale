<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelMaster</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9R5_WzRnEoZPhY9tfqUndbLuGFS3PeYM&libraries=places&callback=initMap" async defer></script>
    

</head>
<body style="background-color: #f5f5dc;" onload="getLocation()">
<?php
session_start();
?>
    <nav class="navbar">
    <div class="logo">
        <a href="index.php">
           <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 54px;margin-top:2px;margin-left:5px;border:0;outline:0;">
        </a>
    </div>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php" style="font-size:17px;">Home</a></li>
            <li><a href="mesta.php" style="color:black;font-weight:bold;">Places</a></li>
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


                <div class="mesta-resp"> 
                    <div class="post-container">
                        <h2 class="post-title">Faculty of Organizational Sciences</h2>
                        <p class="post-content">
                            The Association of Informatics Students of the Faculty of Organizational Sciences, FONIS, is a student organization that gathers future IT experts in order to participate in professional lectures, courses, competitions and seminars, work on projects and achieve professional practices in IT fields. FONIS represents the only faculty organization closely specialized in the field of information technologies. As such, it strives to promote IT, the Information Systems and Technologies department at the Faculty of Organizational Sciences, as well as its members, who are engaged in various projects in the field of informatics and management in IT.
                        </p>
                        <img src="img/fon.jpg" alt="" class="post-image" style="height: 200px;">
                        <audio controls class="citanje">
                            <source src="audio/fonis-voice.mp3" type="audio/mpeg" >
                        </audio>
                    </div>
                <div class="mapica">
                    <iframe src="//maps.google.com/maps?q=cafe+near+me&radius=100&amp;output=embed" width="550" height="550" style="border:0;margin-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

        </div>
        <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var navLinks = document.querySelector('.navbar-links');
            navLinks.classList.toggle('show');
        });
    </script>
</body>
</html>