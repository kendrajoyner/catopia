<?php

include 'header.php';
?>


  <div id="page-wrapper">
    
    <!-- Header -->
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

<?php

   
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $pass = htmlspecialchars($_POST['pass']);
    $email= htmlspecialchars($_POST['email']);
      
    include'config.php'; 
    include 'functions/cat-functions.php';
    $connect = mysqli_connect(SERVER,USER,PW,DB);
    
   
    if(!$connect)
        
    {
        exit ('Ahhhh...an error has occured! No Database found.');
    }
    
    else
    {
        
        $firstname = db_escape($connect, $firstname);
        $lastname =db_escape($connect, $lastname);
        $pass = db_escape($connect, $pass);
        $email= db_escape($connect, $email);
      
        
        
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $query = "INSERT INTO user (fname, lname, pass, email, level) VALUES( '$firstname', '$lastname', '$pass','$email', 'm')";
     
        
        $result = mysqli_query($connect,$query);
     
        echo 'You have successfully registered';
       
        echo '<p><a href="signin.php" class="button-big">Return to login</a></p>';
        
  }

?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php

include 'footer.php';
?>


