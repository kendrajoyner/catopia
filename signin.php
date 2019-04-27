<?php

include 'header.php';
?>


<body>
  <div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
      <header id="header" class="container">
        <div class="row">
          <div class="12u">
            <div id="header-wrapper">
              <header id="header" class="container">
                <div class="row">
                  <div class="12u">
                  </div>
                </div>
              </header>
              <div id="banner">
                <div class="container">
                  <div class="row">
                    <div class="6u 12u(mobile)" style="padding-top: 150px;">



                      <p>Please enter email and password to log in</p>
                      <form action="login.php" method="post">


                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse" value="">


                        <label for="Email">Email:</label>
                        <input type="text" size="20" name="email">
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" placeholder="Enter Password" name="pass" required>

                        <p>
                          <input type="submit" class="button-big" value="Log In">
                        </p>

                      </form>

                    </div>
                  </div>
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
