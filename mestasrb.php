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
        <a href="indexsrb.php">
           <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 54px;margin-top:2px;margin-left:5px;border:0;outline:0;">
        </a>
        <div style="float:inline-end;margin-top:20px;">
    <a href="mestasrb.php" style="margin-right:3px;">
           <img src="img/serbia.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a>
        <a href="mesta.php" style="margin-right:20px;">
           <img src="img/united-kingdom.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a></div>
    </div>
        <div class="navbar-links">
          <ul>
            <li><a href="indexsrb.php" >Početna</a></li>
            <li><a href="mestasrb.php" style="color:black;font-weight:bold;">Mesta</a></li>
            <li><a href="restoransrb.php">Restorani</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logoutsrb.php">Odjavi se</a></li>
                <li style="margin-right:10px;">Dobro došao, <?php echo $_SESSION['user']; ?>!</li>
            <?php else: ?>
                <li><a href="loginsrb.php">Prijavi se</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="menu-btn" style="margin-right: 10px;"></div>
      </nav>


                <div class="mesta-resp" style="margin-left: 20px;"> 
                    <div class="post-container">
                        <h2 class="post-title">Fakultet organizacionih nauka</h2>
                        <p class="post-content">
                        Udruženje studenata informatike Fakulteta organizacionih nauka FONIS je studentska organizacija koja okuplja buduće IT stručnjake kako bi učestvovali na stručnim predavanjima, kursevima, takmičenjima i seminarima, radili na projektima i sticali stručne prakse u IT oblastima. FONIS predstavlja jedinu fakultetsku organizaciju usko specijalizovanu za oblast informacionih tehnologija. Kao takva, nastoji da promoviše IT, smer Informacioni sistemi i tehnologije na Fakultetu organizacionih nauka, kao i svoje članove koji su angažovani na različitim projektima iz oblasti informatike i menadžmenta u IT.
                        </p>
                        <img src="img/fon.jpg" alt="" class="post-image" style="height: 200px;">
                        <audio controls class="citanje">
                            <source src="audio/fonice-zvuk.mp3" type="audio/mpeg" >
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