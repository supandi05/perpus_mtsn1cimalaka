<style type="text/css">
	.btn-sm{
		font-size: 12px;
		position: relative;
		width: 120px;
		height: 50px;
	}
	.vertical-center {
	color: white;
	position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
	}
</style>
			<table class="container table" >
            <thead>
              <tr>
                <th>Mahasiswa</th>
                <th>Buku Yang dipinjam</th>
                <th class="text-center" style="width :200px">Tanggal Kembali</th>
                <th class="text-center">Status</th>
                <th class="text-center" style="width:120px;">Aksi</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	foreach ($peminjam as $key) {
            		?>
            		<tr>

                <td class="product-thumb"><?php echo $key->nama ?>
                	<br>
                	<?php echo $key->nim ?>
                </td>
                <td class="product-details">
                  <h4 class="title"><?php echo $key->title ?></h4>
                  <span class="add-id"><strong>ID-Buku: </strong><?php echo $key->id_buku ?></span>
                
                </td>
                <td style="text-align: center;"><time><?php if ($key->tanggal_pengembalian==null) {
                  	echo "-";
                  }else{
                  	echo "$key->tanggal_pengembalian";
                  } ?></time>
                </td>
                <td class="product-category"><span class="categories"><?php echo $key->status ?></span></td>

                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                    	<?php 
                    	if ($key->status=='Peminjaman Dibatalkan') {
                    		?>
                    		<li class="list-inline-item">
		                        <a class="delete" data-toggle="tooltip" data-placement="top" title="delete" href="<?php echo site_url('Admin/delete/').$key->id; ?>">
		                          <i class="fa fa-trash"></i>
		                        </a>
		                      </li>
                    		<?php
                    	}else if($key->status=='Sedang dipinjam'){
                    		?>
                    		 <li class="list-inline-item">
		                        <a class="update" data-toggle="tooltip" data-placement="top" title="Konfirmasi Pengembalian" href="<?php echo site_url('Admin/kembalikan/').$key->id; ?>">
		                          <i class="fa fa-retweet"></i>
		                        </a>
		                      </li>
                    		<?php
                    	}elseif ($key->status=='Mengajukan Pinjaman') {
                    		?>
                    		<li class="list-inline-item">
	                        	<a data-toggle="tooltip" data-placement="top" title="Setujui" class="view" href="<?php echo site_url('Admin/setujui/').$key->id; ?>">
	                          		<i class="fa fa-check" style="color:green;"></i>
	                        	</a>
	                      	</li>
	                      	<li class="list-inline-item">
		                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Batalkan" href="<?php echo site_url('Admin/batalkan/').$key->id; ?>">
		                          	<i class="fa fa-remove" style="color:red;"></i>
		                        </a>
	                      	</li>
                    		<?php
                    	}elseif ($key->status=='Buku Telah Dikembalikan'){
                    		?>
                    		<li class="list-inline-item">
		                        <a class="delete" data-toggle="tooltip" data-placement="top" title="delete" href="<?php echo site_url('Admin/delete/').$key->id; ?>">
		                          <i class="fa fa-trash"></i>
		                        </a>
		                      </li>
                    		<?php
                    	}
                    	?>
                      
                     
                      
                    </ul>
                  </div>
                </td>
              </tr>
              <?php
            	}
            	 ?>
              
            </tbody>
          </table>