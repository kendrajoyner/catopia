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
            Contact Us
          </h1>
          <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="contact.php"> Contact Us</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start contact-page Area -->
  <section class="contact-page-area section-gap">
    <div class="container">
      <div class="row">
       
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d28717.217225965185!2d-82.55771266500626!3d35.58992251011397!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1553641204041" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="col-lg-4 d-flex flex-column address-wrap">
          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-home"></span>


            </div>
            <div class="contact-details">
              <h5>Asheville, North Carolina </h5>
              <p>123 Furrever Way</p>
            </div>
          </div>
          <div class="single-contact-address d-flex flex-row">
            <div class="icon">
              <span class="lnr lnr-phone-handset"></span>
            </div>
            <div class="contact-details">
              <h5>(828) 568-3228</h5>
              <p>Mon to Fri 9am to 6 pm</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
            <div class="row">
              <div class="col-lg-6 form-group">
                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
              </div>
              <div class="col-lg-6 form-group">
                <textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
              </div>
              <div class="col-lg-12 d-flex justify-content-between">
                <div class="alert-msg" style="text-align: left;"></div>
                <button class="genric-btn primary circle" style="float: right;">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact-page Area -->

 <?php

include 'footer.php';
?>