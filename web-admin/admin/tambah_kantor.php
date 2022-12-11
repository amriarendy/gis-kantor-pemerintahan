<h2>Tambah Data Kantor</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>nama kantor</label>
		<input type="text" class="form-control" name="namalokasi" required> 
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="desk" rows="10" required></textarea> 
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" required> 
	</div>
	<div class="form-group">
		<label>Latitude</label>
		<input type="number" class="form-control" name="lat" required> 
	</div>
	<div class="form-group">
		<label>Longtitude</label>
		<input type="number" class="form-control" name="lng" required> 
	</div>
	<div class="form-group">
		<label>Gambar Depan</label>
		<input type="file" class="form-control" name="img_belakang" required> 
	</div>
	<div class="form-group">
		<label>Rating AVG</label>
		<input type="text" class="form-control" name="rating_avg" required> 
	</div>
	<div class="form-group">
		<label>Rating SUM</label>
		<input type="number" class="form-control" name="rating_sum" required> 
	</div>
	<div class="form-group">
		<label>Rating COUNT</label>
		<input type="number" class="form-control" name="rating_count" required> 
	</div>
	<!-- <div class="form-group">
		<label>Gambar Header</label>
		<input type="file" class="form-control" name="img_header"> 
	</div> -->
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['img_belakang']['name'];
	$lokasi = $_FILES['img_belakang']['tmp_name'];
	$path = "gambarimg/".$nama."";
		
		// sesuiakan ip address laptop/pc atau URL server
	$actualpath = "http://192.168.43.47/kantor_dinas/$path";
	move_uploaded_file($lokasi, "../gambarimg/".$nama);
	//$sql = "INSERT INTO lokasi (namalokasi,desk,alamat,lat,lng,img_header,rating_avg,rating_sum,rating_count)VALUES('$_POST[namalokasi]','$_POST[desk]','$_POST[alamat]','$_POST[lat]','$_POST[lng]','$actualpath','$_POST[rating_avg]','$_POST[rating_sum]','$_POST[rating_count]')";
	$sql = "INSERT INTO lokasi VALUES ('','$_POST[namalokasi]','$_POST[desk]','$_POST[alamat]','$_POST[lat]','$_POST[lng]','$actualpath','$_POST[rating_avg]','$_POST[rating_sum]','$_POST[rating_count]')";
	$koneksi->query($sql);

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	//echo $sql;
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kantor'>";
}
?>