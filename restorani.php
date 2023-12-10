<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBusiness</title>
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
        <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 50px;margin-top:2px;margin-left:5px;border:0;outline:0;">
        </a>
    </div>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php" style="font-size:17px;">Home</a></li>
            <li><a href="mesta.php" >Places</a></li>
            <li><a href="restorani.php" style="color:black;font-weight:bold;">Restaurants</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <li style="margin-right:10px;">Welcome, <?php echo $_SESSION['user']; ?>!</li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
      <div>
        <iframe style="border: 0;" src="//maps.google.com/maps?q=restaurants+near+me&amp;output=embed" width="100%" height="570"  frameborder="0" allowfullscreen="allowfullscreen">1
      </div>
      


      
</body>
</html>