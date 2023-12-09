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
           <img src="" alt="FlatlineHZS" class="logo">
        </a>
    </div>
       
        <div class="navbar-links">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="mesta.php">Places</a></li>
            <li style="background-color: #67b161;"><a href="restorani.php">Restaurants</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <li style="padding-top:15px;margin-right:10px;">Welcome, <?php echo $_SESSION['user']; ?>!</li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
          </ul>
        </div>

      </nav>
</body>
</html>