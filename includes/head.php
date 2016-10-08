<?php include('options.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miami Performing Arts Studio</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body class="<?php echo $bodyClass != '' ? $bodyClass : ''; ?>">

  <div class="nav">
    <div class="top">
      <div class="nav-container">
        <div class="top__nav-wrap">
          <a href="/" class="logo">
            <img class="img-responsive" src="/assets/img/logo.png" alt="">
          </a>
          <a class="mobile-trigger">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <i class="fa fa-close" aria-hidden="true"></i>
          </a>
          <div class="menu">
            <ul class="navigation">
              <li><a href="/">Home</a></li>
              <li class="dropdown">
                  <a href="#">Programs <span class="fa fa-angle-down"></span></a>
                  <ul class="subnav">
                      <li><a href="<?php echo $danceUrl; ?>">Dance</a></li>
                      <li><a href="<?php echo $musicUrl; ?>">Music</a></li>
                      <li><a href="<?php echo $voiceUrl; ?>">Voice</a></li>
                      <li><a href="<?php echo $preProfUrl; ?>">Pre-Professional Program</a></li>
                      <li><a href="<?php echo $musicalTheatherUrl; ?>">Musical Theater</a></li>
                  </ul>
              </li>
              <li><a href="<?php echo $scheduleUrl; ?>">Schedule</a></li>
              <li><a href="<?php echo $aboutUrl; ?>">About Us</a></li>
              <li><a href="<?php echo $contactUrl; ?>">Contact</a></li>
              <li><a class="register-btn" href="<?php echo $registerUrl; ?>">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="nav-container">
        <div class="bottom__nav-wrap">
          <div class="tagline">
            Where Professionals Teach Your Kids
          </div>
          <div class="phone">
            Call Us: <a href="tel:7868086033">786.808.6033</a>
          </div>
        </div>
      </div>
    </div>
  </div>
