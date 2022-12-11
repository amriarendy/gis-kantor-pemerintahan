<h2>Selamat Datang Di Halaman User</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
		 	<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM users");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id'];?></td>
			<td><?php echo $pecah['username'];?></td>
			<td><?php echo $pecah['password'];?></td>
			<td>
			<a href="index.php?halaman=hapus_user&id=<?php echo $pecah['id'];?>" class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubah_user&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">ubah</a> 	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_user" class="btn btn-primary">Tambah Data</a>