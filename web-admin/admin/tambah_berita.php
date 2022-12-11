<h2>Tambah Data Berita</h2>



<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Berita</label>
		<input type="text" class="form-control" name="judul"> 
	</div>
	<div class="form-group">
		<label>Isi Berita</label>
		<textarea class="form-control" name="isi" rows="10"></textarea> 
	</div>
	<div class="form-group">
		<label>Isi 1</label>
		<textarea class="form-control" name="isi1" rows="10"></textarea> 
	</div>
	<div class="form-group">
		<label>Gambar Depan Berita</label>
		<input type="file" class="form-control" name="gambar_depan"> 
	</div>
	<div class="form-group">
		<label>Gambar Tengah Berita</label>
		<input type="file" class="form-control" name="gambar1"> 
	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" class="form-control" name="tangga"> 
	</div>
	
	<!-- <div class="form-group">
		<label>Gambar Tengah</label>
		<input type="file" class="form-control" name="gambar1"> 
	</div> -->

	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['gambar_depan']['name'];
	$lokasi = $_FILES['gambar_depan']['tmp_name'];
	$path = "gambarimg/".$nama."";
	$nama2 = $_FILES['gambar1']['name'];
	$lokasi2 = $_FILES['gambar1']['tmp_name'];
	$path2 = "gambarimg/".$nama2."";

	$actualpath2 = "http://192.168.43.47/kantor_dinas/$path2";
	move_uploaded_file($lokasi2, "../gambarimg/".$nama2);
		// sesuiakan ip address laptop/pc atau URL server
	$actualpath = "http://192.168.43.47/kantor_dinas/$path";
	move_uploaded_file($lokasi, "../gambarimg/".$nama);
	//$sql = "INSERT INTO lokasi (namalokasi,desk,alamat,lat,lng,img_header,rating_avg,rating_sum,rating_count)VALUES('$_POST[namalokasi]','$_POST[desk]','$_POST[alamat]','$_POST[lat]','$_POST[lng]','$actualpath','$_POST[rating_avg]','$_POST[rating_sum]','$_POST[rating_count]')";
	$sql = "INSERT INTO berita VALUES ('','$_POST[judul]','$_POST[isi]','$actualpath','$_POST[isi1]','$actualpath2','$_POST[tangga]')";
	$koneksi->query($sql);

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	//echo $sql;
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=berita'>";
}
?>	