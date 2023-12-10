<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelMaster</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9R5_WzRnEoZPhY9tfqUndbLuGFS3PeYM&libraries=places&callback=initMap" async defer></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        iframe {
            width: 100%;
            height: 100vh;
            border: 0;
            display: block;
        }
    </style>
</head>

<body style="background-color: #f5f5dc;">
    <?php
    session_start();
    ?>
    <nav class="navbar">
        <div class="logo">
            <a href="indexsrb.php">
                <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 54px;margin-top:2px;margin-left:5px;border:0;outline:0;">
            </a>
            <div style="float:inline-end;margin-top:20px;">
                <a href="restoransrb.php" style="margin-right:3px;">
                    <img src="img/serbia.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
                </a>
                <a href="restorani.php" style="margin-right:20px;">
                    <img src="img/united-kingdom.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
                </a>
            </div>
        </div>
        <div class="navbar-links">
            <ul>
                <li><a href="indexsrb.php">Početna</a></li>
                <li><a href="mestasrb.php">Mesta</a></li>
                <li><a href="restoranisrb.php" style="color:black;font-weight:bold;">Restorani</a></li>

                <?php if (isset($_SESSION['user'])) : ?>
                    <li><a href="logoutsrb.php">Odjavi se</a></li>
                    <li style="margin-right:10px;">Dobro došao, <?php echo $_SESSION['user']; ?>!</li>
                <?php else : ?>
                    <li><a href="loginsrb.php">Prijavi se</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="menu-btn" style="margin-right: 10px;" id="yourHamburgerMenu"></div>
    </nav>

    <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var navLinks = document.querySelector('.navbar-links');
            navLinks.classList.toggle('show');
        });
    </script>


    <div>
        <iframe style="border: 0;" src="//maps.google.com/maps?q=restaurants+near+me&amp;output=embed" width="100%" height="570" frameborder="0" allowfullscreen="allowfullscreen">1
    </div>




</body>

</html>