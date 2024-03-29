<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img style="width: 115px;" src="uploads/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" id="index" aria-current="page" href="index.php"><?php echo $lang['home']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="about_us" href="about_us.php"><?php echo $lang['about']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="services" href="services.php"><?php echo $lang['services']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact_us" href="contact_us.php"><?php echo $lang['contact']; ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $lang["head_lang"] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?lang=ar">Arabic</a></li>
            <li><a class="dropdown-item" href="index.php?lang=en">English</a></li>
          </ul>
        </li>
        <ul class="list-unstyled social_icon">
          <li> <a href="https://www.linkedin.com/feed/"> <i class="fa fa-linkedin"></i> </a> </li>
          <li> <a href="https://instagram.com/marwa36912?igshid=ZDdkNTZiNTM="> <i class="fa fa-instagram"></i> </a> </li>
          <li> <a href="mailto://info@thelight.host"> <i class="fa fa-envelope"></i> </a> </li>
          <li> <a href="https://www.facebook.com/profile.php?id=100089609746453"> <i class="fa fa-facebook"></i> </a></li>
          <li> <a href="https://www.tiktok.com/@user7982152553305?_t=8f9kee0pl8C&_r=1"> <img style="    width: 23px;
    position: relative;
    top: -2px;" src="uploads/tiktok.png" alt=""> </a></li>
          <li> <a href="https://youtube.com/@TheLight-yv9ze?si=kF2OTPrdPUbwOsso"> <i class="fa fa-youtube"></i> </a></li>

        </ul>
      </ul>
    </div>
  </div>
</nav>