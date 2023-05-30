<style type="text/css">
	@media only screen and (max-width: 400px) {
  .mobile {
    display: none;
  }
  .tmobile{
  	white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100%;
  }
  .textmob{
  	word-wrap: break-word;
    white-space:pre-wrap;
  }
}
@media screen and (min-width: 1000px)  {
  .pmobile {
    display: none;
  }
  .ptmobile{
  	white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100%;
  }
  .ptextmob{
  	word-wrap: break-word;
    white-space:pre-wrap;
  }
}
</style>
<section class="page-search">
	
		<div class="advance-search">
			<div class="container">
				<h1  style="color : white;">Detail Peminjaman</h1></div>
			</div>
		</div>

</section>
<section class="section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="product-title" style="padding-bottom: 2%;">Data Peminjam</h2>
			</div>
			<div class="col-md-3 mobile">
				<i class="fa fa-user-o" style="font-size: 18em;"></i>
			</div>
			<div class="col-md-7">
				<table class="table">
					<tr>
						<td>Nama : </td>
						<td><?php echo $peminjam->nama; ?></td>
					</tr>
					<tr>
						<td>NIM : </td>
						<td><?php echo $peminjam->nim; ?></td>
					</tr>
					<tr>
						<td>Prodi : </td>
						<td><?php echo $peminjam->prodi; ?></td>
					</tr>
					<tr>
						<td>Email : </td>
						<td><?php echo $peminjam->email; ?></td>
					</tr>
					<tr>
						<td>Nomor kontak : </td>
						<td><?php echo $peminjam->nohp; ?></td>
					</tr>
					<tr>
						<td>Tanggal pengembalian : </td>
						<td><?php 
						if ($peminjam->tanggal_pengembalian==null) {
						 	echo"-";
						 }else{
						 	echo $peminjam->tanggal_pengembalian;
						 } ?></td>
					</tr>
					<tr>
						<td>Status peminjaman : </td>
						<td><?php echo $peminjam->status; ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-2 mobile ">
			<img style="display: block;  margin-left: auto; margin-right: auto;" class="d-flex justify-content-center" src="<?php echo 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data='.$_SERVER['REQUEST_URI'] ?>">
				<figcaption class="d-flex justify-content-center"><a class="btn btn-success" style="width:170px;" href="<?php echo 'https://api.qrserver.com/v1/create-qr-code/?size=170x170&data='.$_SERVER['REQUEST_URI'] ?>" download="peminjaman_<?php echo $peminjam->nama ?>">Save QR</a>
			</div></figcaption>
				

			<div class="col-12" style="padding-bottom: 20px;">
				<h2 class="product-title">Buku yang dipinjam</h2>
				<a href="<?php echo site_url('Home/detail/').$peminjam->bibid ?>"><h3 class="product-title">Judul : <?php echo "$buku->title";  ?></h3></a>
				
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-user-o"></i> Oleh <text style="color: black;"><?php if ($buku->author==='') {
						echo "-";
					}else{
						echo "$buku->author";
					} ?></text></li>
					<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Label <text style="color: black;"><?php echo " ".$buku->topic1." | ".$buku->topic2." | ".$buku->topic3." | ".$buku->topic4." | ".$buku->topic5 ?></text> </li>
					<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Lokasi <text style="color: black;"> <?php
	            		switch ($buku->collection_cd) {
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
	            	?> </text></li>
				</ul>
			</div>
			<div class="col-3">
				<img class="img-fluid" src="<?php 
	                switch ($buku->material_cd) {
	                	case '1':
	                		 echo base_url('Themes/images/Buku.png'); 
	                	break;
	                	case '2':
	                		 echo base_url('Themes/images/Buku.png'); 
	                		break;
	                	case '3':
	                		 echo base_url('Themes/images/CD.png');
	                		break;
	                	case '4':
	                		 echo base_url('Themes/images/Jurnal.png'); 
	                		break;
	                	case '5':
	                		 echo base_url('Themes/images/Tesis.png'); 
	                		break;
	                	case '6':
	                		 echo base_url('Themes/images/KICC.png'); 
	                		break;
						default:
	                		break;
        				}
       			 ?>"> 
				<p>
					id : <?php echo $buku->bibid; ?>
                    <br>
                    Status : 
                <?php if ($buku->opac_flg=='Y') {
                    echo '<text style="color : green;" > Sudah Dikembalikan </text>';
                }else{
                    echo '<text style="color : red;" > Sedang Dipinjam </text>';
                }  ?>
				</p>	
			</div>
			<div class="col-8">
				<div class="container-fluid rounded bg-gray tmobile">
					<h3>Abstraksi</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laudantium beatae quod perspiciatis, neque
						dolores eos rerum, ipsa iste cum culpa numquam amet provident eveniet pariatur, sunt repellendus quas
						voluptate dolor cumque autem molestias. Ab quod quaerat molestias culpa eius, perferendis facere vitae commodi
						maxime qui numquam ex voluptatem voluptate, fuga sequi, quasi! Accusantium eligendi vitae unde iure officia
						amet molestiae velit assumenda, quidem beatae explicabo dolore laboriosam mollitia quod eos, eaque voluptas
						enim fuga laborum, error provident labore nesciunt ad. Libero reiciendis necessitatibus voluptates ab
						excepturi rem non, nostrum aut aperiam? Itaque, aut. Quas nulla perferendis neque eveniet ullam?</p>

					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sed, officia reiciendis necessitatibus
						obcaecati eum, quaerat unde illo suscipit placeat nihil voluptatibus ipsa omnis repudiandae, excepturi! Id
						aperiam eius perferendis cupiditate exercitationem, mollitia numquam fuga, inventore quam eaque cumque fugiat,
						neque repudiandae dolore qui itaque iste asperiores ullam ut eum illum aliquam dignissimos similique! Aperiam
						aut temporibus optio nulla numquam molestias eum officia maiores aliquid laborum et officiis pariatur,
						delectus sapiente molestiae sit accusantium a libero, eligendi vero eius laboriosam minus. Nemo quibusdam
						nesciunt doloribus repellendus expedita necessitatibus velit vero?
					</p>
				</div>
			</div>
		</div>
</section>
<section class="section bg-white container pmobile">
	<div class="" style="text-align: center;">
	<img style="display: block;  margin-left: auto; margin-right: auto;" class="d-flex justify-content-center" src="<?php echo 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data='.$_SERVER['REQUEST_URI'] ?>">
	<figcaption class="container textmob"><?php echo 'https://api.qrserver.com/v1/create-qr-code/?size=170x170&data='.$_SERVER['REQUEST_URI'] ?></figcaption>
	</div>
	<figcaption class="d-flex justify-content-center"><a class="btn btn-success" style="width:170px;" href="<?php echo 'https://api.qrserver.com/v1/create-qr-code/?size=170x170&data='.$_SERVER['REQUEST_URI'] ?>" download="peminjaman_<?php echo $peminjam->nama ?>">Save QR</a>
			</div></figcaption>
</section>