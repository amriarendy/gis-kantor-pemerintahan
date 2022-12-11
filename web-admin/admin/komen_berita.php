<h2>Selamat Datang Di Halaman komen berita</h2>
<table class="table table-bordered">
	<thead>
		<tr>
		 	<th>no</th>
		 	<th>idkb</th>
			<th>id</th>
			<th>idlokasi</th>
			<th>judul</th>
			<th>isi</th>
			<th>rating</th>
			<th>tanggal</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM komen_berita");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['idkb'];?></td>
			<td><?php echo $pecah['id'];?></td>
			<td><?php echo $pecah['id_berita'];?></td>
			<td><?php echo $pecah['judul_komber'];?></td>
			<td><?php echo $pecah['isi_komber'];?></td>
			<td><?php echo $pecah['rating_komber'];?></td>
			<td><?php echo $pecah['tanggal_komber'];?></td>
			<td>
			<a href="index.php?halaman=hapuskomenberita&id=<?php echo $pecah['idkb'];?>" class="btn-danger btn">hapus</a>	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
