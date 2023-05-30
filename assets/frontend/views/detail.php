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
    .page-search{
        background-color:#00008b ;
    }
</style>
<section class="page-search">
	<form method="get" action="<?php echo site_url('Home/Search') ?>">
		<div class="advance-search">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-12 align-content-center">
						<form method="get" action="<?php echo site_url('Home/Search') ?>">
						    <input type="hidden" name="collection" value="0">
							<input type="hidden" name="material_cd" value="0">
							<div class="form-row">
								<div class="form-group col-md-11">
									<input type="text" class="form-control my-2 my-lg-1 bg-white text-dark" id="inputtext4" name="buku" placeholder="Buku apa yang sedang kamu cari?" value="<?php echo $judul ?>">
								</div>
								<div class="form-group col-md-1 align-self-center">
									<button type="submit" class="btn btn-success">Cari</button>
								</div>
							</div>
							<div class="form-row">
								<li class="list-inline-item"></li>
								<li class="list-inline-item md-1"><input id="cb2" type="hidden" name="judul" checked> <i class="fa" style="color: white;"> </i></li>
								<!-- <li class="list-inline-item md-1"><input id="cb2" type="checkbox" name="kategori"> <i class="fa" style="color: white;"> Kategori </i></li>
								<li class="list-inline-item md-1"><input id="cb2" type="checkbox" name="penulis"> <i class="fa" style="color: white;"> Penulis </i></li> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>

<section class="section bg-white">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12" style="padding-bottom: 20px;">
				<h1 class="product-title"><?php echo "$buku->title";  ?></h1>
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
                    echo '<text style="color : green;" > tersedia </text>';
                }else{
                    echo '<text style="color : red;" > tidak tersedia </text>';
                }  ?>
				</p>	
			</div>
			<div class="col-8">
				<div class="container-fluid rounded bg-gray">
					<h3>Abstraksi</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laudantium beatae quod perspiciatis, neque
						dolores eos rerum, ipsa iste cum culpa numquam amet provident eveniet pariatur, sunt repellendus quas
						voluptate dolor cumque autem molestias. Ab quod quaerat molestias culpa eius, perferendis facere vitae commodi
						maxime qui numquam ex voluptatem voluptate, fuga sequi, quasi! Accusantium eligendi vitae unde iure officia
						amet molestiae velit assumenda, quidem beatae explicabo dolore laboriosam mollitia quod eos, eaque voluptas
						enim fuga laborum, error provident labore nesciunt ad. Libero reiciendis necessitatibus voluptates ab
						excepturi rem non, nostrum aut aperiam? Itaque, aut. Quas nulla perferendis neque eveniet ullam?</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sed, officia reiciendis necessitatibus
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
			<?php if ($buku->opac_flg=='Y') { ?>
           	<a type="button" style="color: white;" class="d-flex justify-content-center btn btn-primary" data-toggle="modal" data-target="#modalPinjam">
			  Pinjam
			</a>
			<div class="modal fade" id="modalPinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				    <div class="modal-content">
					    <div class="modal-header">
					    	<h5 class="modal-title" id="exampleModalLabel">Formulir peminjaman</h5>
					    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					        <span aria-hidden="true">&times;</span>
					        </button>
					    </div>
				      	<form method="post" action="<?php echo(site_url('User/Pinjam'))?>">
					      	<div class="modal-body">
					          	<div class="form-group">
					            	<label for="nama" class="col-form-label">Nama :</label>
					            	<input type="hidden" name="bibid" value="<?php echo $buku->bibid ?>">
					            	<input type="text" class="form-control" id="nama" name="nama" required>
					          	</div>
					          	<div class="form-group">
					            	<label for="nim" class="col-form-label">NIM :</label>
					            	<input type="text" class="form-control" id="nim" name='nim' required>
					          	</div>
					          	<div class="form-group">
					            	<label for="prodi" class="col-form-label">Prodi/Jurusan :</label>
					            	<input type="text" class="form-control" id="prodi" name="prodi" required>
					          	</div>
					          	<div class="form-group">
						            <label for="email" class="col-form-label">Email :</label>
						            <input type="email" class="form-control" id="email" name="email" required>
					          	</div>
						        <div class="form-group">
						        	<label for="nohp" class="col-form-label">No Whatsapp :</label>
						        	<input type="text" class="form-control" id="nohp" name="nohp" required>
						        </div>
					      	</div>
				      		<div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <input type="submit" class="btn btn-success" value="pinjam">
				      		</div>
				      	</form>
				    </div>
				</div>
			</div>
		        <?php
		        }else{
		           ?>
		           <a class="d-flex justify-content-center btn btn btn-danger" onclick="alert('Tidak Tersedia');">Tidak Tersedia</a>
		           <?php
		        }  ?>
	</div>
</section>