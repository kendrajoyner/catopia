<?php

include 'header.php';
?>

  <div id="page-wrapper">


              <div id="banner">
                <div class="container">
                  <div class="row">
                    <div class="6u 12u(mobile)" style="padding-top: 150px;">

                      <p>Please enter email and password to log in</p>
                      <form action="login.php" method="post">

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
    
        <?php

include 'footer.php';
?>
