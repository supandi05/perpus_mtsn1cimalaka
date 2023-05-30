<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan - MTs Negeri 1 Sumedang</title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- FAVICON -->
  <link href="<?php echo base_url('images/logomts.png'); ?>" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/bootstrap/css/bootstrap-slider.css'); ?>">
  <!-- Font Awesome -->
  <link href="<?php echo base_url('assets/frontend/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="<?php echo base_url('assets/frontend/plugins/slick-carousel/slick/slick.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/plugins/slick-carousel/slick/slick-theme.css'); ?>" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="<?php echo base_url('assets/frontend/plugins/fancybox/jquery.fancybox.pack.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/plugins/jquery-nice-select/css/nice-select.css'); ?>" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url('assets/frontend/css/style.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
	.inverse{
		border-color: #28a745;
		background-color: white;
		border-style: solid;
		color: #28a745 !important; 
		margin-left: 20px;
		border-width: medium;
		font-weight: bold;
	}
	.gren{
		border-color: #28a745;
		border-style: solid;
		border-width: medium;

	}
</style>
</head>
<body class="body-wrapper">
<section>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light navigation">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('images/logomts.png'); ?>" alt="" width="100px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome'); ?>">Beranda</a>
              </li>
                 <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome/tentang') ?>">Tentang</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome/kontak') ?>">Kontak</a>
              </li>
              <!-- <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Halaman <span><i class="fa fa-angle-down"></i></span>
                </a> -->
                <!-- Dropdown list -->
                <!-- div class="dropdown-menu">
                  <a class="dropdown-item" href="about-us.html">Tentang Kami</a>
                  <a class="dropdown-item" href="contact-us.html">Kontak</a>
                </div>
              </li> -->
              <!-- <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Listing <span><i class="fa fa-angle-down"></i></span>
                </a> -->
                <!-- Dropdown list -->
                <!-- <div class="dropdown-menu">
                  <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                  <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                </div> -->
              <!-- </li> -->

            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              <li class="nav-item">
                <a class="nav-link text-white add-button gren" href="<?php echo site_url('Home/bantuan') ?>">Butuh Bantuan ?</a>
                  <a class="nav-link text-white add-button gren" href="<?php echo site_url('login') ?>">Login</a>
              </li>
              <!-- li class="nav-item">
                <a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
              </li> -->
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>