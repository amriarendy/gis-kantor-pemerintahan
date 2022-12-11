<h2>Halaman Ubah Kantor</h2>

<?php
$ambil=$koneksi->query("SELECT * FROM lokasi WHERE idlokasi='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);

echo "</pre>";

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>nama kantor</label>
		<input type="text" class="form-control" name="namalokasi" value="<?php echo $pecah['namalokasi']; ?>"> 
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="desk" rows="10"><?php echo $pecah['desk'];?></textarea> 
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat']; ?>"> 
	</div>
	<div class="form-group">
		<label>Latitude</label>
		<input type="number" class="form-control" name="lat" value="<?php echo $pecah['lat']; ?>"> 
	</div>
	<div class="form-group">
		<label>Longtitude</label>
		<input type="number" class="form-control" name="lng" value="<?php echo $pecah['lng']; ?>"> 
	</div>
	<div class="form-group">
		<label>Rating AVG</label>
		<input type="number" class="form-control" name="rating_avg" value="<?php echo $pecah['rating_avg']; ?>"> 
	</div>
	<div class="form-group">
		<label>Rating SUM</label>
		<input type="number" class="form-control" name="rating_sum" value="<?php echo $pecah['rating_sum']; ?>"> 
	</div>
	<div class="form-group">
		<label>Rating COUNT</label>
		<input type="number" class="form-control" name="rating_count" value="<?php echo $pecah['rating_count']; ?>"> 
	</div>
	<div class="form_group">
		<img src="<?php echo $pecah['img_header'];?>" width="100">
	</div>
	<div class="form-group">
		<label>Gambar Depan</label>
		<input type="file" class="form-control" name="img_header"> 
	</div>
	<!-- <div class="form-group">
		<label>Gambar Header</label>
		<input type="file" class="form-control" name="img_header"> 
	</div> -->
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
	$namafoto = $_FILES['img_depan']['name'];
	$lokasifoto = $_FILES['img_depan']['tmp_name'];
	$path = "gambarimg/".$namafoto."";
		
		// sesuiakan ip address laptop/pc atau URL server

	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasi, "../gambarimg/".$nama);

		$koneksi->query("UPDATE lokasi SET namalokasi='$_POST[namalokasi]',desk='$_POST[desk]',alamat='$_POST[alamat]',inftmbh='$_POST[inftmbh]',lat='$_POST[lat]',lng='$_POST[lng]',img_depan='actualpath',rating_avg='$_POST[rating_avg]',rating_sum='$_POST[rating_sum]',rating_count='$_POST[rating_count]'WHERE idlokasi='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE lokasi SET namalokasi='$_POST[namalokasi]',desk='$_POST[desk]',alamat='$_POST[alamat]',inftmbh='$_POST[inftmbh]',lat='$_POST[lat]',lng='$_POST[lng]',rating_avg='$_POST[rating_avg]',rating_sum='$_POST[rating_sum]',rating_count='$_POST[rating_count]'WHERE idlokasi='$_GET[id]'" );
	
}
	echo "<script>alert('Data Telah Di Ubah');</script>";
	echo "<script>location='index.php?halaman=kantor';</script>";
}
?> 



<!-- <?php
if (isset($_POST['save']))
{
	$nama = $_FILES['img_header']['name'];
	$lokasi = $_FILES['img_header']['tmp_name'];
	$path = "gambarimg/".$nama."";
		
		// sesuiakan ip address laptop/pc atau URL server
	$actualpath = "http://192.168.43.47/kantor_dinas/$path";
	move_uploaded_file($lokasi, "../gambarimg/".$nama);
	//$sql = "INSERT INTO lokasi (namalokasi,desk,alamat,lat,lng,img_header,rating_avg,rating_sum,rating_count)VALUES('$_POST[namalokasi]','$_POST[desk]','$_POST[alamat]','$_POST[lat]','$_POST[lng]','$actualpath','$_POST[rating_avg]','$_POST[rating_sum]','$_POST[rating_count]')";
	$sql = "UPDATE lokasi VALUES ('$_POST[namalokasi]','$_POST[desk]','$_POST[alamat]','$_POST[lat]','$_POST[lng]','$actualpath','$_POST[rating_avg]','$_POST[rating_sum]','$_POST[rating_count]')";
	$koneksi->query($sql);

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	//echo $sql;
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kantor'>";
}
?> -->