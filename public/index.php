<?php require_once '../private/main_header.php'; ?>


<div id="particles-js2 " class="home-intro">

  <!-- HOW TO E7GZLY
    ================================================== -->

  <section id="how" class=" how container-fluid bg-light  text-center text-dark py-5">
    <br>
    <br>
    <br>
    <div class="w-90 px-5">
      <h1 class="mb-5 display-3">How To <Span class="text-primary"> E7GZLY</Span></h1>
      <div class="row justify-content-between text-center">
        <div class="col-10 offset-1 col-md-3 offset-md-0 col-lg-3">
          <h4 class="display-4 d-inline-block px-3 text-white rounded-circle bg-primary">1</h4>
          <h4 class="fixed-height">Choose organization</h4>
          <div class="py-3 ">
            <img src="img\book1.png" alt="" class="img-fluid  ">
          </div>
        </div>
        <div class="col-10 offset-1 col-md-3 offset-md-1 col-lg-3">
          <h4 class="display-4 d-inline-block px-3 text-white rounded-circle bg-primary">2</h4>
          <h4 class="fixed-height"> Choose service</h4>
          <div class="py-3 ">
            <img src="img\book2.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-10 offset-1 col-md-3 offset-md-1 col-lg-3">
          <h4 class="display-4 d-inline-block px-3 text-white rounded-circle bg-primary">3</h4>
          <h4 class="fixed-height">Book your ticket</h4>
          <img src="img\book3.png" alt="" class="img-fluid py-3  rounded">
        </div>
      </div>
    </div>
  </section>

  <!-- We serve
=========================================-->
  <section class="serve py-5 wow fadeInUpBig" id="partners" data-wow-duration="1.5s">
    <div class="container">
      <br>
      <h1 class="py-5 text-center ">We Serve</h1>
      <div class="row justify-content-between">
        <div class="col-md-3 text-center  mt-4 ">
          <i class="fas fa-university fa-2x text-primary"></i>
          <span id='org_count' class="py-1 d-block number" data-number="">0</span>
          Organizations
        </div>
        <br>
        <div class="col-md-3 text-center mt-4">
          <i class="fas fa-users fa-2x py-2 text-primary"></i>
          <span id='customers_count' class="py-1 d-block number" data-number="">0</span>
          Customers
        </div>
        <br>
        <div class="col-md-3 text-center mt-4">
          <i class="fas fa-ticket-alt fa-2x py-2 text-primary"></i>
          <span id='tickets_count' class="py-1 d-block number" data-number="">0</span>
          Tickets
        </div>
      </div>
    </div>
  </section>



  <?php require_once '../private/main_footer.php'; ?>
  </body>

  </html>