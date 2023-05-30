<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $judulpage; ?></title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- FAVICON -->
  <link href="<?php echo base_url('Themes/'); ?>images/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('Themes/'); ?>plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('Themes/'); ?>plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="<?php echo base_url('Themes/'); ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="<?php echo base_url('Themes/'); ?>plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="<?php echo base_url('Themes/'); ?>plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="<?php echo base_url('Themes/'); ?>plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="<?php echo base_url('Themes/'); ?>plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url('Themes/'); ?>css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
	.inverse{
		border-color: red;
		background-color: white;
		border-style: solid;
		color: red !important; 
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
						<img src="<?php echo base_url('Themes/'); ?>images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('Home'); ?>">Beranda</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dasbor<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<button class="dropdown-item" data-toggle="modal" data-target="#daftar_buku">Daftar Buku Yang Dipinjam</button>
									<a class="dropdown-item" href="<?php echo site_url('Home/kembalikan_buku') ?>">Kembalikan Buku</a>

									<!-- <a class="dropdown-item" href="dashboard-favourite-ads.html">Usulkan Buku</a> -->
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('Home/jadwal_dan_tata_tertib') ?>">Jadwal & Tata Tertib</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('Home/kontak') ?>">Kontak</a>
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
						
									<button class="nav-link text-white add-button inverse" data-toggle="modal" data-target="#adminLogin">Logout</button>
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

</section>
<p style="color :red;"><?php echo $this->session->flashdata('msg'); ?> </p>
<!-- Modal -->
<div class="modal fade" id="daftar_buku" tabindex="-1" role="dialog" aria-labelledby="daftar_buku" aria-hidden="true">
	<form method="post" action="<?php echo site_url('User/daftar_buku_yang_dipinjam') ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cek Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
				  <div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="text" class="form-control" id="nim" placeholder="ex. 170xxx" name="nim">
				  </div>
				  
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
  </form>
</div>

<div class="modal fade" id="adminLogin" tabindex="-1" role="dialog" aria-labelledby="adminLogin" aria-hidden="true">
	<form method="post" action="<?php echo site_url('Home/login') ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<p>Anda yakin untuk logout?</p>				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="<?php echo site_url('Admin/logout'); ?>">ya</a>
      </div>
    </div>
  </div>
  </form>
</div>