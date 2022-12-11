<h2>Halaman Ubah Pelayanan</h2>

<?php
$ambil=$koneksi->query("SELECT * FROM pelayanan WHERE id_pelayanan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);

echo "</pre>";

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Idlokasi</label>
		<input type="number" class="form-control" name="idlokasi" value="<?php echo $pecah['idlokasi']; ?>"> 
	</div>
	<div class="form-group">
		<label>Pelayanan</label>
		<input type="text" class="form-control" name="pelayanan" value="<?php echo $pecah['pelayanan']; ?>"> 
	</div>
	<div class="form-group">
		<label>Sub Pelayanan</label>
		<textarea class="form-control" name="sub_pelayanan" rows="10"><?php echo $pecah['sub_pelayanan'];?></textarea> 
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
	 
	{
		if ($ambil) {
		$koneksi->query("UPDATE pelayanan SET idlokasi='$_POST[idlokasi]',pelayanan='$_POST[pelayanan]',sub_pelayanan='$_POST[sub_pelayanan]'WHERE id_pelayanan='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE lokasi SET idlokasi='$_POST[idlokasi]',pelayanan='$_POST[pelayanan]',sub_pelayanan='$_POST[sub_pelayanan]'WHERE id_pelayanan='$_GET[id]'" );
	
}
	echo "<script>alert('Data Telah Di Ubah');</script>";
	echo "<script>location='index.php?halaman=pelayanan';</script>";
}
?>