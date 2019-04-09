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
  <meta name="Catopia" content="cats">
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
                  
                   //echo '<p><a href="index.php" class="button-big">Logout</a>' . "  " . $_SESSION['email'] . '</p>';
                } else {
                  
                  echo '<a href="signin.php" class="button">Log In</a>';      
                }
              ?>


          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header><!-- #header -->

  <!-- start banner Area -->
  <section class="banner-area relative" id="home">
    <div class="container">
      <div class="overlay overlay-bg"></div>
      <div class="row fullscreen d-flex align-items-center justify-content-start">
        <div class="banner-content col-lg-8 col-md-12">
          <h1 class="text-uppercase">

            We need your help
          </h1>
          <p class="text-white sub-head">

          </p>
          <a href="cats.php" class="primary-btn header-btn text-uppercase">Find a pet to adopt</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->
</body>

</html>
