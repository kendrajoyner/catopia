<?php

include 'header.php';
?>


<!-- start banner Area -->
<section class="banner-area relative" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Cats
        </h1>
        <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="cats.php"> Cats</a></p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

    <div class="container">
      <div class="row d-flex justify-content-center">
        
          <div class="title text-center">
            <h1 class="mb-20">Adoptable Cats</h1>
            <p> Below are some of our amazing adoptable cats. For more information please contact us or stop by the sanctuary.</p>
          </div>
        </div>
      </div>
   

<!-- Start cat-list Area -->
<section class="cat-list-area section-gap">

<div class="container">
  
<?php

    // database code -- need to refactor
    include 'config.php';
    $connect = mysqli_connect(SERVER, USER, PW, DB);

 if(!$connect)
    {
        exit("Error could not connect to the database.");
         
    }

  // first retrieve the cats
  $query = "SELECT * from cats WHERE avail = true"; 
  $result = mysqli_query($connect, $query);

  //  display the cats and images
  $i = 0;
  while($row = mysqli_fetch_assoc($result)){
  
  if ($i % 4 == 0 && $i != 0 ) {
    echo '</div>';
  }
  
  if ($i % 4 == 0) {
    echo '<div class="row">';
  }
      echo' <div class="col-lg-3 col-md-6">';
       echo' <div class="single-cat-list">';
          echo' <img src="img/'.$row["name_cat"].'" alt="'.$row["cat_image_id"].'" width="300px" class="img-thumbnail">';
  
           echo'<div class="">';
          echo'  <div class="text">'.$row["cat_image_id"].'</div>';
         echo' </div>';
  echo' </div>'; 
   echo' </div>';
  
 if ($i == mysqli_num_rows($result) -1) {
    echo '</div>';
  }  
  
  $i++;
}
?>

</div>
</section>



<!-- End cat-list Area 


<!-- Start calltoaction Area -->
<section class="calltoaction-area section-gap relative">
  <div class="container">
    <div class="overlay overlay-bg"></div>
    <div class="row align-items-center justify-content-center">
      <h1 class="text-white">Want to help? Become a Volunteer</h1>

      <p class="text-white">
        Volunteers play a critical role in carrying out our mission and fill a need that would otherwise have to be performed by paid staff. Whether cleaning dishes, washing laundry, taking out the garbage, or answering the phones, volunteers help Catopia spend its money where it matters – on the felines.
        <br>
        <br>
        Volunteers also make a substantial impact on the lives of the cats with whom they interact. Our Special Needs cats, for example, whose medical conditions diminish their chances of being adopted, are quite content to live long-term at the sanctuary with so many volunteers to offer them cuddles and warm laps to snuggle in. Others, whose timid personalities make placement in a forever home difficult, blossom under the patient and persistent socializing efforts of our volunteers and become ideal adoption candidates.
      </p>

      <div class="buttons d-flex flex-row">
        <a href="volunteer.php" class="primary-btn text-uppercase">Register now</a>
      </div>
    </div>
  </div>
</section>
<!-- End calltoaction Area -->

<?php

include 'footer.php';
?>
