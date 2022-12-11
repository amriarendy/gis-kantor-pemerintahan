<h2>Tambah Data User</h2>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>username</label>
		<input type="text" class="form-control" name="username"> 
	</div>
	<div class="form-group">
		<label>password</label>
		<input type="text" class="form-control" name="password"> 
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO users (username,password)VALUES('$_POST[username]','$_POST[password]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=user'>";
}
?>