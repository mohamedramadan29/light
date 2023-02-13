<?php
include "init.php";

?>
<!-- START ABOUT US -->
<div class="about_page">
    <div class="overlay">
        <div class="container">
            <div class="data">
                <h2 class="animated fadeInUp"> <?php echo $lang['services'] ?> </h2>
                <p class="animated fadeInUp"> <?php echo $lang['services_p1'] ?> </p>
            </div>
        </div>
    </div>
</div>


<!-- START OUR SERVICES  -->
<div class="services">
    <div class="container-fluid">
        <div class="data"> 
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
                <div class="col-lg-4">
                    <div class="info">
                        <div class="images">
                            <img src="uploads/serv6.jpg" alt="">
                        </div>
                        <h4> <?php echo $lang['serv4'] ?> </h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <div class="images">
                            <img src="uploads/serv7.jpg" alt="">
                        </div>
                        <h4><?php echo $lang['serv5'] ?> </h4>
                    </div>
                </div>
            </div>
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