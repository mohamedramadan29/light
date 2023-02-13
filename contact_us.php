<?php
include "init.php";

?>
<!-- START ABOUT US -->
<div class="about_page">
    <div class="overlay">
        <div class="container">
            <div class="data">
                <h2 class="animated fadeInUp"> <?php echo $lang['contact']; ?> </h2>
            </div>
        </div>
    </div>
</div>

<!-- START Contact Us  -->
<div class="contact_us">
    <div class="container-fluid">
        <div class="data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info">
                        <h2> <?php echo $lang['contact_h1']; ?> </h2>
                        <p style="font-weight: bold;"> <?php echo $lang['contact_p1']; ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info">
                        <form action="" method="post">
                            <div class="box">
                                <label for=""> <?php echo $lang['name']; ?> </label>
                                <input required type="text" class="form-control" name="name">
                            </div>
                            <div class="box">
                                <label for=""> <?php echo $lang['email']; ?> </label>
                                <input required type="email" class="form-control" name="email">
                            </div>
                            <div class="box">
                                <label for=""> <?php echo $lang['mobile']; ?> </label>
                                <input required type="text" class="form-control" name="mobile">
                            </div>
                            <div class="box">
                                <label for=""> <?php echo $lang['message']; ?> </label>
                                <textarea required name="message" class="form-control"></textarea>
                            </div>
                            <div class="box">
                                <input type="submit" class="btn btn-primary" value="<?php echo $lang['send_message']; ?>">
                            </div>
                        </form>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mobile = $_POST['mobile'];
                            $message = $_POST['message'];
                            //$to_email = "marwa1235th@gmail.com";
                            $to_email = "info@thelight.host";
                            $subject = "  لديك رسالة جديدة من موقع نور    ";
                            $body =  $name . '||' . $email . ' || ' . $mobile . '||' . $message;
                            $headers = "From: info@thelight.host";
                            $mail_send =  mail($to_email, $subject, $body, $headers);
                            if ($mail_send) {
                        ?>
                                <div class="alert alert-success">
                                    تم ارسال رسالتك بنجاح سوف نتواصل معك
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger">
                                    هناك خطا ما من فضلك حاول في مرة اخري
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Contact Us  -->

<?php


include $tem . "footer.php";
?>