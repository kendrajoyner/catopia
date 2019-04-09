<?php

include 'header.php';
?>
   

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registration form</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="assets/css/main.css" />
  <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>






<body>
  <div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
      <header id="header" class="container">
        <div class="row">
          <div class="12u">



                  <div id="banner">
                    <div class="container">
                      <div class="row">
                        <div class="6u 12u(mobile)">


                          <button onclick="document.getElementById('id01').style.display='block'" class="button-big" style="width:auto;">Register</button>

                          <div id="id01" class="modal">

                            <form class="modal-content animate" action="registration.php" method="post">
                              <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                              </div>

                              <div class="container">
                                <label for="firstname"></label>
                                <input type="text" placeholder="Enter First Name" name="firstname" required>

                                <label for="lastname"></label>
                                <input type="text" placeholder="Enter Last Name" name="lastname" required>

                                <label for="email"></label>
                                <input type="text" placeholder="Enter Email" name="email" required>

                                <label for="pass"></label>
                                <input type="password" placeholder="Enter Password" name="pass" required>

                                <button type="submit">Register</button>

                              </div>


                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

  
  <!-- Scripts -->
  <!--<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/skel-viewport.min.js"></script>
  <script src="assets/js/util.js"></script>
  <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  <!--<script src="assets/js/main.js"></script>


 <?php

include 'footer.php';
?>





</body>

</html>
