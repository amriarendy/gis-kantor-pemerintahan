<h2>Selamat Datang Di Halaman kantor</h2>
<table class="table table-bordered">
	<thead>
		<tr>
		 	<th>no</th>
		 	<th>idlokasi</th>
			<th>namalokasi</th>
			<th>deskripsi</th>
			<th>alamat</th>
			<th>info tambahan</th>
			<th>latitude</th>
			<th>longtitude</th>
			<th>gambar depan</th>
			<th>gambar belakang</th>
			<th>rating avg</th>
			<th>rating sum</th>
			<th>rating count</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_kantor" class="btn btn-primary">Tambah Data</a><?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM lokasi ORDER BY idlokasi ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['img_depan'] != ""): ?>
									<img src="uploads/<?php echo $row['img_depan']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="gambarimg/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['first_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['last_name']; ?></td>
								</tr>
								<?php } ?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['idlokasi'];?></td>
			<td><?php echo $pecah['namalokasi'];?></td>
			<td><?php echo $pecah['desk'];?></td>
			<td><?php echo $pecah['alamat'];?></td>
			<td><?php echo $pecah['inftmbh'];?></td>
			<td><?php echo $pecah['lat'];?></td>
			<td><?php echo $pecah['lng'];?></td>
			<td>
				
				<!-- <img src="../gambarimg/<?php echo $pecah['img_depan'];?>" widht="100"> -->
			</td>
			<td><?php echo $pecah['img_header'];?></td>
			<td><?php echo $pecah['rating_avg'];?></td>
			<td><?php echo $pecah['rating_sum'];?></td>
			<td><?php echo $pecah['rating_count'];?></td>
			<td>
			<a href="index.php?halaman=hapuskantor&id=<?php echo $pecah['idlokasi'];?>" class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubahkantor&id=<?php echo $pecah['idlokasi']; ?>" class="btn btn-warning">ubah</a> 	
			</td>
		</tr>
		