<div class="container">
	<?php if($peminjam){
		?>
		<h2>Detail Peminjam</h2>
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
			</table>
			<h2>Daftar Buku yang dipinjam</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Buku</th>
				      <th scope="col">ID Buku</th>
				      <th scope="col">Tanggal Pengembalian</th>
				      <th scope="col">Status</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($buku as $key) {
				  		?>
				  		<tr>
					      <th scope="row">1</th>
					      <td><?php echo $key['title'] ?></td>
					      <td><?php echo $key['id_buku'] ?></td>
					      <td><?php echo $key['tanggal_pengembalian'] ?></td>
					      <td><?php echo $key['status'] ?></td>
					    </tr>
				  		<?php
				  	} ?>
				    
				  </tbody>
				</table>
		<?php
	}  ?>
	

</div>