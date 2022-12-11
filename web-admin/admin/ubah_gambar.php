<h2>Ubah Data Gambar</h2>

<?php
$ambil=$koneksi->query("SELECT * FROM gambar WHERE idgambar='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);

echo "</pre>";

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Idlokasi</label>
		<input type="text" class="form-control" name="idlokasig" value="<?php echo $pecah['idlokasi']; ?>"> 
	</div>
	<div class="form-group">
		<label>nama Gambar</label>
		<input type="text" class="form-control" name="namagambar" value="<?php echo $pecah['nmgambar']; ?>"> 
	</div>
	<div class="form_group">
		<img src="<?php echo $pecah['url'];?>" width="100">
	</div>
<div class="form-group">
		<label>Gambar</label>
		<input type="file" class="form-control" name="urlg" value="<?php echo $pecah['url']; ?>"> 
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
	{
	$namafoto = $_FILES['img_depan']['name'];
	$lokasifoto = $_FILES['img_depan']['tmp_name'];
	$path = "gambarimg/".$namafoto."";
		
		// sesuiakan ip address laptop/pc atau URL server
		$actualpath = "http://192.168.43.47/kantor_dinas/$path";

	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasifoto, "gambarimg/$namafoto");

		$koneksi->query("UPDATE lokasi SET namalokasi='$_POST[namalokasi]',desk='$_POST[desk]',alamat='$_POST[alamat]',inftmbh='$_POST[inftmbh]',lat='$_POST[lat]',lng='$_POST[lng]',img_depan='actualpath',rating_avg='$_POST[rating_avg]',rating_sum='$_POST[rating_sum]',rating_count='$_POST[rating_count]'WHERE idlokasi='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE lokasi SET namalokasi='$_POST[namalokasi]',desk='$_POST[desk]',alamat='$_POST[alamat]',inftmbh='$_POST[inftmbh]',lat='$_POST[lat]',lng='$_POST[lng]',rating_avg='$_POST[rating_avg]',rating_sum='$_POST[rating_sum]',rating_count='$_POST[rating_count]'WHERE idlokasi='$_GET[id]'" );
	
}
	echo "<script>alert('Data Telah Di Ubah');</script>";
	echo "<script>location='index.php?halaman=gambar';</script>";
}
?>