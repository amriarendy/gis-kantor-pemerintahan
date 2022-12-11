<h2>Tambah Data Gambar</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Idlokasi</label>
		<input type="text" class="form-control" name="idlokasi"> 
	</div>
	<div class="form-group">
		<label>nama Gambar</label>
		<input type="text" class="form-control" name="nmgambar"> 
	</div>
<div class="form-group">
		<label>Gambar</label>
		<input type="file" class="form-control" name="url"> 
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['url']['name'];
	$lokasi = $_FILES['url']['tmp_name'];
	$path = "gambarimg/".$nama."";
		
		// sesuiakan ip address laptop/pc atau URL server
	$actualpath = "http://192.168.43.47/kantor_dinas/$path";
	move_uploaded_file($lokasi, "../gambarimg/".$nama);
	//$sql = "INSERT INTO lokasi (namalokasi,desk,alamat,lat,lng,img_header,rating_avg,rating_sum,rating_count)VALUES('$_POST[namalokasi]','$_POST[desk]','$_POST[alamat]','$_POST[lat]','$_POST[lng]','$actualpath','$_POST[rating_avg]','$_POST[rating_sum]','$_POST[rating_count]')";
	$sql = "INSERT INTO gambar VALUES ('','$_POST[idlokasi]','$_POST[nmgambar]','$actualpath')";
	$koneksi->query($sql);

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	//echo $sql;
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>