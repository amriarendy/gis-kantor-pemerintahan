<h2>Selamat Datang Di Halaman Pelayanan</h2>
<a href="index.php?halaman=tambah_pelayanan" class="btn btn-primary">Tambah Data</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
		 	<th>id_pelayanan</th>
			<th>idlokasi</th>
			<th>pelayanan</th>
			<th>sub_pelayanan</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM pelayanan");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id_pelayanan'];?></td>
			<td><?php echo $pecah['idlokasi'];?></td>
			<td><?php echo $pecah['pelayanan'];?></td>
			<td><?php echo $pecah['sub_pelayanan'];?></td>
			<td>
			<a href="index.php?halaman=hapuspelayanan&id=<?php echo $pecah['id_pelayanan'];?>" class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubahpelayanan&id=<?php echo $pecah['id_pelayanan']; ?>" class="btn btn-warning">ubah</a> 	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_pelayanan" class="btn btn-primary">Tambah Data</a>