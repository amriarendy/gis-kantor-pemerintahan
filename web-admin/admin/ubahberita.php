<h2>Ubah Data Berita</h2>

<?php
$ambil=$koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);

echo "</pre>";

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Berita</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $pecah['judul_berita'];?>"> 
	</div>
	<div class="form-group">
		<label>Isi Berita</label>
		<textarea class="form-control" name="isi" rows="10"><?php echo $pecah['isi'];?></textarea> 
	</div>
	<div class="form-group">
		<label>Isi 1</label>
		<textarea class="form-control" name="isi1" rows="10"><?php echo $pecah['isi1'];?></textarea> 
	</div>
	<div class="form_group">
		<img src="<?php echo $pecah['gambar_depan'];?>" width="100">
	</div>
	<div class="form-group">
		<label>Gambar Depan Berita</label>
		<input type="file" class="form-control" name="gambar_depan"> 
	</div>
	<div class="form_group">
		<img src="<?php echo $pecah['gambar1'];?>" width="100">
	</div>
	<div class="form-group">
		<label>Gambar tengah</label>
		<input type="file" class="form-control" name="gambar1"> 
	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" class="form-control" name="tangga"> 
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['gambar_depan']['name'];
	$lokasi = $_FILES['gambar_depan']['tmp_name'];
	$path = "gambarimg/".$nama."";
		
		// sesuiakan ip address laptop/pc atau URL server
	$actualpath = "http://192.168.43.47/kantor_dinas/$path";
	move_uploaded_file($lokasi, "gambarimg/".$nama);
	$koneksi->query("INSERT INTO pelayanan (judul,isi,isi1,gambar_depan)VALUES('$_POST[judul]','$_POST[isi]','$_POST[isi1]','$actualpath')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=berita'>";
}
?>