<!doctype html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <title>Log In</title>

  <link rel="stylesheet" href="assets/css/main.css" />
  <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>


<body>
  <div id="page-wrapper">


    <?php

   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['pass'];
    $email= $_POST['email'];
      
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
        $query = "INSERT INTO user (fname, lname, pass, email) VALUES( '$firstname', '$lastname', '$pass','$email')";
      var_dump($query);
        
        $result = mysqli_query($connect,$query);
     
        echo 'You have successfully registered';
       
        echo '<p><a href= "signin.php" class="button-big">Return to login</a></p>';
        
    }
    


    ?>

  </div>

</body>

</html>
