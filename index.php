<?php 
include "init.php";
?>
<!-- START SLIDER  -->
<div class="carsual">
  <div id="carouselExampleCaptions" class="carousel-fade  carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay"></div>
        <img src="uploads/header1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animated fadeInUp"> <?php echo $lang['the_light'] ?> </h5>
          <p class="animated fadeInUp"> <?php echo $lang['index_p1'] ?> </p>
        </div>

      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="uploads/header2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animated fadeInUp"> <?php echo $lang['the_light'] ?> </h5>
          <p class="animated fadeInUp"> <?php echo $lang['index_p2'] ?> </p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="uploads/header3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 class="animated fadeInUp"> <?php echo $lang['the_light'] ?> </h5>
          <p class="animated fadeInUp"> <?php echo $lang['index_p3'] ?> </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- END SLIDER -->

<!-- START ABOUT US -->
<div class="about_us">
  <div class="container-fluid">
    <div class="data">
      <div class="row">
        <div class="col-lg-6">
          <div class="info">
            <h4> <?php echo $lang['about'] ?> </h4>
            <p> <?php echo $lang['index_p4'] ?> </p>
            <ul class="list-unstyled">
              <li> <span> 1 - </span> <?php echo $lang['index_p5'] ?> </li>
              <li> <span> 2 - </span> <?php echo $lang['index_p6'] ?> </li>
              <li> <span> 3 - </span> <?php echo $lang['index_p7'] ?> </li>
              <li> <span> 4 - </span> <?php echo $lang['index_p8'] ?></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="images">
            <img src="uploads/about.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- END ABOUT US  -->
<!-- START COUNTER -->
<div class="counter">
  <div class="container-fluid">
    <div class="data">
      <div class="row">
        <div class="col-lg-6">
          <div class="info">
            <i class="fa fa-balance-scale"></i>
            <h3> 99 + </h3>
            <p> <?php echo $lang['index_h1'] ?> </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info">
            <i class="fa fa-users"></i>
            <h3> 100 + </h3>
            <p> <?php echo $lang['index_h2'] ?> </p>
          </div>
        </div>
        <!--
        <div class="col-lg-3">
          <div class="info">
            <i class="fa fa-building"></i>
            <h3> 2 </h3>
            <p> <?php echo $lang['index_h3'] ?> </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info">
            <i class="fa fa-suitcase"></i>
            <h3> 30 + </h3>
            <p> <?php echo $lang['index_h4'] ?> </p>
          </div>
        </div>
-->
      </div>
    </div>
  </div>
</div>
<!-- END COUNTER -->

<!-- START OUR SERVICES  -->
<div class="services">
  <div class="container-fluid">
    <div class="data">
      <h2> <?php echo $lang['services'] ?> </h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="info">
            <div class="images">
              <img src="uploads/serv1.jpg" alt="">
            </div>
            <h4> <?php echo $lang['serv1'] ?> </h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info">
            <div class="images">
              <img src="uploads/serv2.jpg" alt="">
            </div>
            <h4> <?php echo $lang['serv2'] ?> </h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info">
            <div class="images">
              <img src="uploads/serv3.jpg" alt="">
            </div>
            <h4> <?php echo $lang['serv3'] ?> </h4>
          </div>
        </div>
      </div>
      <a href="services.php" class="btn btn-primary"> <?php echo $lang['allserv'] ?> </a>
    </div>
  </div>
</div>
<!-- END OUR SERVICES  -->
<!-- START HELP SECTION -->
<div class="help">
  <div class="overlay">
    <div class="container-fluid">
      <div class="data">
        <h2> <?php echo $lang['help_h1'] ?> </h2>
        <p> <?php echo $lang['help_p1'] ?> </p>
        <a href="contact_us.php" class="btn btn-primary"> <?php echo $lang['contact'] ?> </a>
      </div>
    </div>
  </div>
</div>
<!-- END HELP SECTION  -->
<?php


include $tem . "footer.php";
?>