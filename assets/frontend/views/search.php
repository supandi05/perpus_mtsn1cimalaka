<style type="text/css">
    .btn-primary{
        background-color: #008000;
        border-color: green;
    }
    .btn-primary:hover{
        background-color: white;
        color: green;
    }
    .page-search{
        background-color:#00008b ;
    }
</style>
<form method="get" action="<?php echo site_url('Home/Search') ?>">
<section class="page-search bg-[#00008b]">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					
						<div class="form-row">
							<div class="form-group col-md-10">
								<input type="text" class="form-control my-2 my-lg-0 bg-white text-dark" id="inputtext4" placeholder="Buku apa yang kamu cari ?" value="<?php echo($nama_buku) ?>" name="buku">
							</div>
							<div class="form-group col-md-2">

								<button type="submit" class="btn btn-primary">Cari</button>
							</div>
						</div>
					
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
					<h2>Pencarian untuk "<?php echo $nama_buku ?>"</h2>
					<p><?php echo $total_buku; ?> Hasil pada <?php echo date("d")." ";

                    switch (date("m")) {
                        case '1':
                            echo "Januari";
                            break;
                        case '2':
                            echo "Februari";
                            break;
                        case '3':
                            echo "Maret";
                            break;
                        case '4':
                            echo "April";
                            break;
                        case '5':
                            echo "Mei";
                            break;
                        case '6':
                            echo "Juni";
                            break;
                        case '7':
                            echo "Juli";
                            break;
                        case '8':
                            echo "Agustus";
                            break;
                        case '9':
                            echo "September";
                            break;
                        case '10':
                            echo "Oktober";
                            break;
                        case '11':
                            echo "November";
                            break;
                        
                        case '12':
                            echo "Desember";
                            break;
                    }
                    echo ", ".date("Y");
                     ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
<div class="widget filter">
	<h4 class="widget-header">Jenis</h4>
	<select name="material_cd">
		<option value="0" <?php 
        if ($material_cd==0) {
             echo "selected";
         } ?> >Semua</option>
		<option value="1" <?php 
        if ($material_cd==1) {
             echo "selected";
         } ?> >Buku</option>
		<option value="3" <?php 
        if ($material_cd==3) {
             echo "selected";
         } ?> >CD</option>
		<option value="4" <?php 
        if ($material_cd==4) {
             echo "selected";
         } ?> >Jurnal</option>
		<option value="5" <?php 
        if ($material_cd==5) {
             echo "selected";
         } ?> >Tesis</option>
		<option value="6" <?php 
        if ($material_cd==6) {
             echo "selected";
         } ?> >KICC</option>
	</select>
</div>


<div class="widget product-shorting">
	<h4 class="widget-header">Filter</h4>
	<!-- <div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" name="judul" 
        <?php 
        // if (isset($judul)) {
        //      echo "checked";
         // } ?> >
	    Judul
	  </label>
	</div>
	<div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="penulis" 
        <?php 
        // if (isset($penulis)) {
        //      echo "checked";
         // } ?> >
        Penulis
      </label>
    </div>
	<div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="kategori" 
        <?php 
        // if (isset($kategori)) {
        //      echo "checked";
         // } ?> >
        Kategori
      </label>
    </div> -->
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="judul" checked hidden>
        <input class="form-check-input" type="checkbox" name="ketersediaan" 
        <?php 
        if (isset($_GET['ketersediaan'])) {
             echo "checked";
         } ?> >
        Ketersediaan
      </label>
    </div>
</div>

<div class="widget product-shorting">
    <h4 class="widget-header">Advance Search</h4>
    <div>
        <div class="form-group">
            <label for="namapengarang">Pengarang</label>
            <input type="text" class="form-control" id="namapengarang"  placeholder="nama pengarang" name="namapengarang" value="<?php if (isset($_GET['namapengarang'])){echo $_GET['namapengarang'];} ?>">
        </div>
         <div class="form-group">
            <label for="namapenerbit">Topik</label>
            <input type="text" class="form-control" id="namapenerbit"  placeholder="Topik" name="topik" value="<?php if (isset($_GET['topik'])){echo $_GET['topik'];} ?>">
        </div>
         <div class="form-group">
            <label>Koleksi</label>
            <select name="collection" style="font-size:2px;">
                <option value="0" <?php 
                if ($collection==0) {
                     echo "selected";
                 } ?> >Semua</option>
                <option value="1" <?php 
                if ($collection==1) {
                     echo "selected";
                 } ?> >referensi, Lantai 2</option>
                 <option value="2" <?php 
                if ($collection==2) {
                     echo "selected";
                 } ?> >sirkulasi, Lantai 1</option>
                <option value="3" <?php 
                if ($collection==3) {
                     echo "selected";
                 } ?> >reserve, Lantai 2</option>
                <option value="4" <?php 
                if ($collection==4) {
                     echo "selected";
                 } ?> >Indonesiana, Lantai 2</option>
                <option value="5" <?php 
                if ($collection==5) {
                     echo "selected";
                 } ?> >UPIana, Lantai 2</option>
                <option value="6" <?php 
                if ($collection==6) {
                     echo "selected";
                 } ?> >Koleksi Pemerintah, Lantai 2</option>
                 <option value="7" <?php 
                if ($collection==7) {
                     echo "selected";
                 } ?> >Kurikulum, Lantai 2</option>
                  <option value="8" <?php 
                if ($collection==8) {
                     echo "selected";
                 } ?> >PPS</option>

            </select>
        </div>
        
        
    </div>
</div>
<!-- Button trigger modal -->



				</div>
			</div>
			<div class="col-lg-9 col-md-8">
<?php
    foreach ($buku as $key) {
?>
<!-- ad listing list  -->
                <div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-3 align-self-center">
            <a href="<?php echo site_url('Home/detail/').$key['bibid'].'/'.$nama_buku ?>">
                <?php
                switch ($key['material_cd']) {
                	case '1':
                		?>
                		<img src="<?php echo base_url('Themes/images/Buku.png') ?>" class="img-fluid" alt="">
                		<?php
                		break;
                	case '2':
                		?>
                		<img src="<?php echo base_url('Themes/images/Buku.png') ?>" class="img-fluid" alt="">
                		<?php
                		break;
                	case '3':
                		?>
                		<img src="<?php echo base_url('Themes/images/CD.png') ?>" class="img-fluid" alt="">
                		<?php
                		break;
                	case '4':
                		?>
                		<img src="<?php echo base_url('Themes/images/Jurnal.png') ?>" class="img-fluid" alt="">
                		<?php
                		break;
                	case '5':
                		?>
                		<img src="<?php echo base_url('Themes/images/Tesis.png') ?>" class="img-fluid" alt="">
                		<?php
                		break;
                	case '6':
                		?>
                		<img src="<?php echo base_url('Themes/images/KICC.png') ?>" class="img-fluid" alt="">
                		<?php
                		break;
                }
                ?>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">
                        <div>
                            <a href="<?php echo site_url('Home/detail/').$key['bibid'].'/'.$nama_buku ?>" class="font-weight-bold"><?php echo $key['title']; ?></a>
                        </div>
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
                            <li class="list-inline-item">
                                <i class="fa fa-cubes"></i>
                                <?php
                                 if ($key['material_cd']==0) {
						             echo "-";
						         } else if ($key['material_cd']==1) {
						             echo "Buku";
						         }else if ($key['material_cd']==3) {
						             echo "Cakram Padat";
						         }else if ($key['material_cd']==4) {
						             echo "Jurnal";
						         }else if ($key['material_cd']==5) {
						             echo "Tesis";
						         } else if ($key['material_cd']==6) {
						             echo "Korea-Indonesia Cultural Corner";
						         } ?>
                            </li>
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
                <div class="col-lg-6 align-self-center">
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- ad listing list  -->

<?php
    }
    if (($buku==null)) {
        ?>
        <p  class="ad-listing-list mt-20 col" style="color: gray;">Tidak Ditemukan...</p>
        <?php
    }
 ?>
				

				<!-- pagination -->
				<div class="pagination justify-content-center py-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
                            <?php
                            if ($pages<3) {
                            	$pagex=2;
                            	$pagend=$pages-1;
                            }else if ($page<=1) {
                            	$pagex=2;
                            	$pagend=$pagex;
                            }else{
                            	if ($page>3) {
                            		?>
                            	 <li class="page-item"><a class="page-link" href="<?php echo $link,1 ?>"><?php echo "1"; ?></a></li>
                            	<li class="page-link">...</li>

                            	<?php
                            	}else if ($page!=2) {
                            	?>
                            	 <li class="page-item"><a class="page-link" href="<?php echo $link,1 ?>"><?php echo "1"; ?></a></li>
                            	<?php
                            	}
                            	$pagex=$page;
                            	if ($page+1>=$pages) {
                            		$pagend=$pages-1;
                            	}else{
                            		$pagend=$pagex+1;
                            	}
                            }
                            for ($i=$pagex-1; $i <=$pagend+1 ; $i++) { 
                            if ($i==$page) {
                            	?>
                            	<li class="page-item active"><a class="page-link" href="<?php echo $link,$i ?>"><?php echo "$i"; ?></a></li>
                            	<?php
                            }else{
                                ?>
                                <li class="page-item"><a class="page-link" href="<?php echo $link,$i ?>"><?php echo "$i"; ?></a></li>
                                <?php
                            }
                            ?>
                            <?php 
                            }if ($i<=$pages) {
                            	if ($pages!=4) {
                            		?>
                            		<li class="page-link">...</li>
                            		<?php
                            	}
                            	?>
                            	 <li class="page-item"><a class="page-link" href="<?php echo $link,$pages ?>"><?php echo "$pages"; ?></a></li>
                            	<?php
                            }
                            ?>

						</ul>
					</nav>
				</div>
				<!-- pagination -->
			</div>
		</div>
	</div>
</section>
</form>