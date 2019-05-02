<?php

include 'header.php';
?>


<div id="page-wrapper">

  <!-- Header -->
  <div id="banner">
    <div class="container">
      <div class="row">
        <div class="6u 12u(mobile)" style="padding-top: 150px;">

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

                <input type="hidden" id="recaptchaResponse" name="recaptcha_response">

                <button type="submit">Register</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include 'footer.php';
?>
