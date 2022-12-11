<h2>Selamat Datang Di Halaman Berita</h2>
<a href="index.php?halaman=tambah_berita" class="btn btn-primary">Tambah Data</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
		 	<th>id berita</th>
			<th>gambar depan</th>
			<th>judul berita</th>
			<th>isi berita</th>
			<th>gambar1</th>
			<th>isi1</th>
			<th>Tanggal</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM berita");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id_berita'];?></td>
			<td>
			<img src="<?php echo $pecah['gambar_depan'];?>" width="100">
			</td>
			<td><?php echo $pecah['judul_berita'];?></td>
			<td><?php echo $pecah['isi'];?></td>
			<td>
			<img src="<?php echo $pecah['gambar1'];?>" width="100">
			</td>
			<td><?php echo $pecah['isi1'];?></td>
			<td><?php echo $pecah['tanggal_berita'];?></td>
			<td>
			<a href="index.php?halaman=hapusberita&id=<?php echo $pecah['id_berita'];?>" class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubahberita&id=<?php echo $pecah['id_berita']; ?>" class="btn btn-warning">ubah</a> 	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_berita" class="btn btn-primary">Tambah Data</a>