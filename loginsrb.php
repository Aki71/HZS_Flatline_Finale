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
<nav class="navbar">
<div class="logo">
        <a href="indexsrb.php">
           <img src="img/logo4.png" alt="FlatlineHZS" class="logo" style="height: 54px;margin-top:2px;margin-left:5px;border:0;outline:0;">
        </a>
        <div style="float:inline-end;margin-top:20px;">
            <a href="loginsrb.php" style="margin-right:3px;">
           <img src="img/serbia.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a>
        <a href="login.php" style="margin-right:20px;">
           <img src="img/united-kingdom.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a></div>
    </div>
        <div class="navbar-links">
          <ul>
            <li><a href="indexsrb.php" style="font-size:17px;">Početna</a></li>
            <li><a href="mestasrb.php">Mesta</a></li>
            <li><a href="restoranisrb.php">Restorani</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logoutsrb.php">Odjavi se</a></li>
                <li style="margin-right:10px;">Dobro došao, <?php echo $_SESSION['user']; ?>!</li>
            <?php else: ?>
                <li><a href="signupsrb.php">Registruj se</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="menu-btn" style="margin-right: 10px;"></div>
      </nav>

      <div class="container">
      <h1>Prijavi se</h1>
      <?php
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user["full_name"]; 
                header("location: indexsrb.php");
                die();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }
    ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="emamil" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Prijavi se" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Niste registrovani <a href="signupsrb.php" style="color:#53884e;text-decoration:underline;">Registruj se ovde.</a></p></div>
    </div>

    <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var navLinks = document.querySelector('.navbar-links');
            navLinks.classList.toggle('show');
        });
    </script>
</body>
</html>