
<?php
$ambil=$koneksi->query("SELECT * FROM users WHERE id='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);

echo "</pre>";

?>

<form method="post" enctype="multipart/form-data">
	<!-- <div class="form-group">
		<label>Id</label>
		<input type="number" class="form-control" name="id" value="<?php echo $pecah['id']; ?>"> 
	</div> -->
	<div class="form-group">
		<label>Nama User</label>
		<input type="text" class="form-control" name="username" value="<?php echo $pecah['username']; ?>"> 
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="password" value="<?php echo $pecah['password']; ?>"> 
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
	 
	{
		if ($ambil) {
		$koneksi->query("UPDATE users SET id='$_POST[id]',username='$_POST[username]',password='$_POST[password]'WHERE id='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE users SET id='$_POST[id]',username='$_POST[username]',password='$_POST[password]'WHERE id='$_GET[id]'" );
	
}
	echo "<script>alert('Data Telah Di Ubah');</script>";
	echo "<script>location='index.php?halaman=user';</script>";
}
?>