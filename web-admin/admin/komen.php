<h2>Selamat Datang Di Halaman komen</h2>
<table class="table table-bordered">
	<thead>
		<tr>
		 	<th>no</th>
		 	<th>idks</th>
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
	<?php $ambil=$koneksi->query("SELECT * FROM komen");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['idks'];?></td>
			<td><?php echo $pecah['id'];?></td>
			<td><?php echo $pecah['idlokasi'];?></td>
			<td><?php echo $pecah['judul'];?></td>
			<td><?php echo $pecah['isi'];?></td>
			<td><?php echo $pecah['rating'];?></td>
			<td><?php echo $pecah['tanggal'];?></td>
			<td>
			<a href="index.php?halaman=hapuskomen&id=<?php echo $pecah['idks'];?>" class="btn-danger btn">hapus</a>	
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
