
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
					<h1>MTs Negeri 1 Cimalaka</h1>
					<p>Sistem Informasi Perpustakaan MTs Negeri 1 Cimalaka <br> Demi layanan simpan pinjam yang lebih praktis</p>
			
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form method="get" action="<?php echo site_url('Welcome/SearchBuku/') ?>">
											<div class="form-row">
												<div class="form-group col-md-11">
													<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" name="keyword" placeholder="Buku apa yang sedang kamu cari?">
												</div>
												<div class="form-group col-md-1 align-self-center">
													<button type="submit" class="btn btn-success">Cari</button>
												</div>
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
					<h2>Rating Judul Buku</h2>
					<p>Rekomendasi buku untuk dibaca</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<?php 
            foreach($buku as $b){
              ?>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="<?php echo base_url('images/buku.png'); ?>" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html"><?php echo $b->judul; ?></a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i><?php echo $b->penulis; ?></a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i><?php echo $b->tahun; ?></a>
		    	</li>
		    </ul>
		    <p class="card-text"><?php echo $b->abstrak; ?></p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
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
	</div>
</section>
