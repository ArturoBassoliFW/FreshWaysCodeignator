<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Style -->
  <link href="asset/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="asset/style.css" rel="stylesheet" type="text/css">

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;900&display=swap" rel="stylesheet">

</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg sticky-top bg-light shadow-sm">
    <div class="container-fluid mx-5">
      <a class="navbar-brand" href="home_page"><img src="<?php echo 'asset/images/svg/FreshWaysLogo.svg'; ?>" alt="Fresh Ways Logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0 align-items-center">
          <li class="nav-item">
          <a href="home_page" <?php if($active == "home_page" || empty($active)) {echo 'class="nav-link active"';} else {echo 'class="nav-link"';}?> title="Home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a  <?php if($active=="about_us") {echo 'class="nav-link dropdown-toggle active"';} else {echo 'class="nav-link dropdown-toggle"';}?> href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="About us">
              About us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about_us">Company</a></li>
              <li><a class="dropdown-item" href="about_us#offices">Offices</a></li>
              <li><a class="dropdown-item" href="about_us#team">Team</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a <?php if($active=="our_services") {echo 'class="nav-link dropdown-toggle active"';} else {echo 'class="nav-link dropdown-toggle"';}?> href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Our Services">
              Our Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="our_services">Overviewe</a></li>
              <li><a class="dropdown-item" href="our_services#logistic">Logistics</a></li>
              <li><a class="dropdown-item" href="our_services#customs">Customs</a></li>
              <li><a class="dropdown-item" href="our_services#transport">Transport</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a <?php if($active=="documents") {echo 'class="nav-link active"';} else {echo 'class="nav-link"';}?> href="documents" title="Useful documents">Useful documents</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="contact_us">
              <button type="button" <?php if($active=="contact_us") {echo 'class="btn btn-primary btn-primary-active"';} else {echo 'class="btn btn-primary"';}?> class="btn btn-primary">Primary</button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="<?php echo 'asset/images/svg/login.svg'; ?>" alt="My SVG Image" />
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Language">
              Language
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" role="button">IT</a></li>
              <li><a class="dropdown-item" href="#" role="button">EN</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>