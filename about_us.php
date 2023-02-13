<?php
include "init.php";

?>
<!-- START ABOUT US -->
<div class="about_page">
    <div class="overlay">
        <div class="container">
            <div class="data">
                <h2 class="animated fadeInUp"> <?php echo $lang['about'] ?> </h2>
                <div class="about_head">
                    <p class="animated fadeInUp"> <?php echo $lang['about_head1'] ?> </p>
                    <p class="animated fadeInUp"> <?php echo $lang['about_head2'] ?> </p>
                    <p class="animated fadeInUp"> <?php echo $lang['about_head3'] ?> </p>
                    <p class="animated fadeInUp"> <?php echo $lang['about_head4'] ?> </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ABOUT US  -->
<!-- START ABOUT US -->
<div class="about_us">
    <div class="container-fluid">
        <div class="data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info">
                        <h4> <?php echo $lang['about_h1'] ?> </h4>
                        <p style="font-weight: bold;"> <?php echo $lang['about_p2'] ?> </p>
                        <ul class="list-unstyled">
                            <li> <span class="fa fa-check"></span> <?php echo $lang['about_p3'] ?> </li>
                            <li> <span class="fa fa-check"></span> <?php echo $lang['about_p4'] ?></li>
                            <li> <span class="fa fa-check"></span> <?php echo $lang['about_p5'] ?></li>
                            <li> <span class="fa fa-check"></span> <?php echo $lang['about_p6'] ?> </li>
                            <li> <span class="fa fa-check"></span> <?php echo $lang['about_p7'] ?> </li>
                            <li> <span class="fa fa-check"></span> <?php echo $lang['about_p8'] ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="images">
                        <img src="uploads/abroch.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END ABOUT US  -->


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