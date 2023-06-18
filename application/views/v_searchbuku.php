<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form method="get" action="<?php echo site_url('Welcome/SearchBuku/') ?>">
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" name="keyword" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="Buku apa yang sedang kamu cari?">
							</div>
							<div class="form-group col-md-2">
								<button type="submit" class="btn btn-success">Cari</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<?php if(!empty($keyword)){ ?>
					<h2>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</h2>
					<?php } ?>
				</div>
			</div>
		</div>
		

				<div class="product-grid-list">
					<div class="row mt-30">
						<div>
							<!-- product card -->
							<?php foreach ($data as $row) { ?>
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img src="<?php echo base_url('images/buku.png'); ?>" alt="gambar" width="100px">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html"><?= $row['judul'] ?></a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i><?= $row['penulis'] ?></a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i><?= $row['tahun'] ?></a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i> Ketersediaan Buku <?= $row['stok'] ?></a>
		    	</li>
		    </ul>
		    <p class="card-text"><?= $row['abstrak'] ?></p>
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

<?php }?>

					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>