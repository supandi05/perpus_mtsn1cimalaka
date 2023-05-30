
<style type="text/css">
	.btn-success{
        background-color: #008000;
        border-color: green;
    }
    .btn-success:hover{
        background-color: white;
        color: green;
        border-color: green;
    }
    .btn-success:active{
        background-color: #008000;
        border-color: green;
    }
</style>
<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>SI Perpus UPI</h1>
					<p>Sistem Informasi Perpustakaan Kampus Universitas Pendidikan Indonesia <br> Demi layanan simpan pinjam yang lebih praktis</p>
					<div class="short-popular-category-list text-center">
						<h2>Kategori Popular</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="<?php echo site_url('Home/Search').'?buku=Komputer&material_cd=0&judul=on&namapengarang=&topik=&collection=0' ?>"><i class="fa fa-windows"></i> Komputer</a></li>
							<li class="list-inline-item">
								<a href="<?php echo site_url('Home/Search').'?buku=Sains&material_cd=0&judul=on&namapengarang=&topik=&collection=0' ?>"><i class="fa fa-gg-circle"></i> Sains</a>
							</li>
							<li class="list-inline-item">
								<a href="<?php echo site_url('Home/Search').'?buku=Olahraga&material_cd=0&judul=on&namapengarang=&topik=&collection=0' ?>"><i class="fa fa-bicycle"></i> Olahraga</a>
							</li>
							<li class="list-inline-item">
								<a href="<?php echo site_url('Home/Search').'?buku=Bisnis&material_cd=0&judul=on&namapengarang=&topik=&collection=0' ?>"><i class="fa fa-bar-chart"></i> Bisnis</a>
							</li>
							<li class="list-inline-item">
								<a href="<?php echo site_url('Home/Search').'?buku=Bahasa&material_cd=0&judul=on&namapengarang=&topik=&collection=0' ?>l"><i class="fa fa-book"></i> Bahasa</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form method="get" action="<?php echo site_url('Home/Search') ?>">
											<input type="hidden" name="material_cd" value="0">
											<div class="form-row">
												<div class="form-group col-md-11">
													<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" name="buku" placeholder="Buku apa yang sedang kamu cari?">
												</div>
												<div class="form-group col-md-1 align-self-center">
													<button type="submit" class="btn btn-success">Cari</button>
												</div>
											</div>
											<div class="form-row">
												<li class="list-inline-item col"></li>
												<li class="list-inline-item md-1">
		<input type="hidden" name="collection" ><input type="checkbox" name="judul" checked> <i class="fa"> Judul </i></li>
												<li class="list-inline-item md-1"><input type="checkbox" name="kategori"> <i class="fa"> Kategori </i></li>
												<li class="list-inline-item md-1"><input type="checkbox" name="penulis"> <i class="fa"> Penulis </i></li>
									</div>
									</form>
								</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Daftar Buku</h2>
					<p>Yang mungkin membuat kamu terinspirasi!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
	<?php 
	foreach ($buku as $key ) {
	 ?>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="<?php echo site_url('Home/detail/').$key['bibid']; ?>"><?php echo $key['title'];  ?></a></h4>
		    <ul class="list-inline mt-2 mb-3">
                            <li class="list-inline-item">
                                <i class="fa fa-user"></i><?php if ($key['author']) {
                                        echo " ".$key['author'];
                                    }else{
                                        echo " - ";
                                    }  ?>
                            </li>
                            <br>
                            <li class="list-inline-item">
                                <i class="fa fa-flag"></i><?php echo " ".$key['topic1']." ".$key['topic2']." ".$key['topic3']." ".$key['topic4']." ".$key['topic5'] ?>
                            </li>
                            <br>
                            
                        </ul>
                        <p> 
                            id : <?php echo $key['bibid']; ?>
                            <br>
                            Status : 
                        <?php if ($key['opac_flg']=='Y') {
                            echo '<text style="color : green;" > tersedia </text>';
                        }else{
                            echo '<text style="color : red;" > tidak tersedia </text>';
                        }  ?>
                        	<br>
                        	Koleksi : 
                        	<?php
                        		switch ($key['collection_cd']) {
                        			case '1':
                        				echo "referensi, Lantai 2";
                        				break;
                        			case '2':
                        				echo "sirkulasi, Lantai 1";
                        				break;
                        			case '3':
                        				echo "reserve, Lantai 2";
                        				break;
                        			case '4':
                        				echo "Indonesiana, Lantai 2";
                        				break;
                        			case '5':
                        				echo "UPIana, Lantai 2";
                        				break;
                        			case '6':
                        				echo "Koleksi Pemerintah, Lantai 2";
                        				break;
                        			case '7':
                        				echo "Kurikulum, Lantai 2";
                        				break;
                        			case '8':
                        				echo "PPS";
                        				break;
                        		}
                        	?>
                        	<br>
                        	Nomor Panggil : <?php echo $key['call_nmbr1']." ".$key['call_nmbr2']." ".$key['call_nmbr3']; ?>
                        </p>
		</div>
	</div>
</div>



					</div>
<?php 
	}
	 ?>
				</div>
			</div>
			
			
		</div>
	</div>
</section>




<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Bacalah buku dan cari inspirasimu !</h2>
					<ul class="list-inline mt-30">
						<!-- <li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a></li>
						<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser Listing</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
