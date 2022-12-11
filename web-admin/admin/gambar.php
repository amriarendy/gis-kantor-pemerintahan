<h2>Selamat Datang Di Halaman Gambar</h2>

<a href="index.php?halaman=tambah_gambar" class="btn btn-primary">Tambah Data</a>
<table class="table table-bordered">
	<thead>
		<tr>
		 	<th>no</th>
		 	<th>Id_gambar</th>
			<th>Idlokasi</th>
			<th>Nama Gambar</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM gambar");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['idgambar'];?></td>
			<td><?php echo $pecah['idlokasi'];?></td>
			<td><?php echo $pecah['nmgambar'];?></td>
			<td><img src="<?php echo $pecah['url'];?>" width="100"></td>
			<td>
			<a href="index.php?halaman=hapus_gambar&id=<?php echo $pecah['idgambar'];?>" class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubah_gambar&id=<?php echo $pecah['idgambar']; ?>" class="btn btn-warning">ubah</a> 	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambah_gambar" class="btn btn-primary">Tambah Data</a>