<?php
session_start();

?>

<!DOCTYPE html>
<html lang="eng" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">

  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Catopia</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <!--
			CSS
			============================================= -->
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <header id="header" id="home">
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.php"><img src="img/logo.png" alt="" title="catopia logo" /></a>
        </div>
        

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="cats.php">Cats</a></li>
            <li><a href="volunteer.php">Volunteer</a></li>
            <li><a href="contact.php">Contact</a></li>

            <li><a href="registration-form.php" class="button">Register</a></li>
            
          <?php
                if (isset($_SESSION["email"])) {
                  echo '<a href="logout.php" class="button">'.$_SESSION["fname"].'   Log Out</a>'; 
            
                } else {
                  
                  echo '<a href="signin.php" class="button">Log In</a>';      
                }
              ?>
          </ul>
        </nav><!-- #nav-menu-container -->

      </div>
    </div>
  </header><!-- #header -->
</body>

</html>
