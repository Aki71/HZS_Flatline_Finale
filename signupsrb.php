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
    <a href="signupsrb.php" style="margin-right:3px;">
           <img src="img/serbia.png" alt="FlatlineHZS" class="logo" style="height: 20px;">
        </a>
        <a href="signup.php" style="margin-right:20px;">
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
                <li><a href="loginsrb.php">Prijavi se</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="menu-btn" style="margin-right: 10px;"></div>
      </nav>



<div class="container" style="margin-top:100px;">
<h1>Registruj se</h1>
<?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Sva polja su obavezna");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email nije validan");
           }
           if (strlen($password)<8) {
            array_push($errors,"Šifra mora da bude minimalno 8 karakterea");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors, "Šifra se ne poklapa");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email već postoji!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (id,full_name, email, password) VALUES (id, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Uspešno si se registrovao.</div>";
            }else{
                die("Nešto nije u redu");
            }
           }
          

        }
        ?>

<br>
    <form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
</div>
<script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var navLinks = document.querySelector('.navbar-links');
            navLinks.classList.toggle('show');
        });
    </script>
</body>
</html>