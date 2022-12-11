<h2>Tambah Data komen</h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
		<label>id</label>
		<input type="number" class="form-control" name="id"> 
	</div>
	<div class="form-group">
		<label>idlokasi</label>
		<input type="number" class="form-control" name="idlokasi"> 
	</div>
	<div class="form-group">
		<label>judul</label>
		<input type="text" class="form-control" name="judul"> 
	</div>
	<div class="form-group">
		<label>isi</label>
		<textarea class="form-control" name="isi" rows="10"></textarea> 
	</div>
	<div class="form-group">
		<label>rating</label>
		<input type="number" class="form-control" name="rating"> 
	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="number" class="form-control" name="rating"> 
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO komen (idlokasi,id,judul,isi,rating,tanggal)VALUES('$_POST[idlokasi]','$_POST[id]','$_POST[judul]'$_POST[isi]'$_POST[rating]'$_POST[tanggal]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=komen'>";
}
?>