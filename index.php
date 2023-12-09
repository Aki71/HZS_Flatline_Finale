<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBusiness</title>
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
           <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 50px;margin-top:2px;margin-left:5px;">
        </a>
    </div>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="mesta.php">Places</a></li>
            <li><a href="restorani.php">Restaurants</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <li style="padding-top:15px;margin-right:10px;">Welcome, <?php echo $_SESSION['user']; ?>!</li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="menu-btn" style="margin-right: 10px;"></div>
      </nav>
    
      <div style="text-align: center;font-size:xx-large;">
        <h1>Welcome!</h1>
      </div>




























      <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var navLinks = document.querySelector('.navbar-links');
            navLinks.classList.toggle('show');
        });
    </script>
    </body>
</html>