<h2>Tambah Data pelayanan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>idlokasi</label>
		<input type="number" class="form-control" name="idlokasi"> 
	</div>
	<div class="form-group">
		<label>pelayanan</label>
		<input type="text" class="form-control" name="pelayanan"> 
	</div>
	<div class="form-group">
		<label>sub pelayanan</label>
		<textarea class="form-control" name="sub_pelayanan" rows="10"></textarea> 
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO pelayanan (idlokasi,pelayanan,sub_pelayanan)VALUES('$_POST[idlokasi]','$_POST[pelayanan]','$_POST[sub_pelayanan]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelayanan'>";
}
?>