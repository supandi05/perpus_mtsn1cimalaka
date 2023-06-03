

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
        
				  <div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" id="username" name="username">
				  </div>
				   <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password">
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
					<h1>MTs Negeri 1 Sumedang</h1>
					<p>Sistem Informasi Perpustakaan MTs Negeri 1 Sumedang <br> Demi layanan simpan pinjam yang lebih praktis</p>
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
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
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
