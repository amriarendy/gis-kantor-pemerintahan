<h2>Selamat Datang Di Halaman kantor</h2>
<a href="index.php?halaman=tambah_kantor" class="btn btn-primary">Tambah Data</a>
<table class="table table-bordered">
	<thead>
		<tr>
		 	<th>no</th>
		 	<th>idlokasi</th>
			<th>namalokasi</th>
			<th>deskripsi</th>
			<th>alamat</th>
			<th>latitude</th>
			<th>longtitude</th>
			<th>gambar belakang</th>
			<th>rating avg</th>
			<th>rating sum</th>
			<th>rating count</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM lokasi");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['idlokasi'];?></td>
			<td><?php echo $pecah['namalokasi'];?></td>
			<td><?php echo $pecah['desk'];?></td>
			<td><?php echo $pecah['alamat'];?></td>
			<td><?php echo $pecah['lat'];?></td>
			<td><?php echo $pecah['lng'];?></td>
			<td>
				<img src="<?php echo $pecah['img_header'];?>" width="100">
			</td>
			
			<td><?php echo $pecah['rating_avg'];?></td>
			<td><?php echo $pecah['rating_sum'];?></td>
			<td><?php echo $pecah['rating_count'];?></td>
			<td>
			<a href="index.php?halaman=hapuskantor&id=<?php echo $pecah['idlokasi'];?>" class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubahkantor&id=<?php echo $pecah['idlokasi']; ?>" class="btn btn-warning">ubah</a> 	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_kantor" class="btn btn-primary">Tambah Data</a>