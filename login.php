<?php
session_start();

include 'functions/cat-functions.php';
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


          </div>
        </div>
      </header>
      <div id="banner">
        <div class="container">
          <div class="row" style="padding-top: 150px">
            <div class="6u 12u(mobile)">





              <?php 

                          
if(empty($_POST['email']) || empty($_POST['pass']) )
{
    echo '<p>Please enter an user name and password to login</p>';
    echo '<p><a href="signin.php" class="button-big">Return to login</a></p>';
}

else
// first round is okay -- gather variables and run the query
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // database code -- need to refactor
    include 'config.php';
    $connect = mysqli_connect(SERVER, USER, PW, DB);

    if(!$connect)
    {
        exit("Error could not connect to the database.");
         
    }

    else
    // all is good -- time to run the query and test the password
    {
             // security
        $email = db_escape($connect, $email);
        $pass = db_escape($connect, $pass);
        
        
        // first retrieve the user
            $query = "SELECT * from user WHERE email = '$email'"; 
            $result = mysqli_query($connect, $query);

            // put the result in an array called row
            $row = mysqli_fetch_assoc($result);

            // test that only one row was returned
            if(@count($row['email']) == 0)
           
                echo "<p>No record found with the email $email.</p>";
         
     

            else
            {
                // test the password

                $hash = $row['pass'];

                if(password_verify($pass, $hash))
                {
                    // success
                    $_SESSION['email'] = $row['email'];
                  $_SESSION['fname'] = $row['fname'];
                  
                    if($row['level'] == 'a'){
                      $_SESSION['isadmin'] = true;
                }
                  

                    
header("location:index.php");
                }

                else
                    echo "<p>Passwords do not match.</p>";
                 echo '<p><a href="signin.php" class="button-big">Return to login</a></p>';

            }

        }

    }



?>

            </div>
          </div>
        </div>
      </div>
    </div>


    <?php

include 'footer.php';
?>
