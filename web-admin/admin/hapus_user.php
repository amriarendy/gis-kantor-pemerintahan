<?php 

$ambil = $koneksi->query("SELECT * FROM users WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambarimg = $pecah['gambarimg'];

$koneksi->query("DELETE FROM users WHERE id='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=user';</script>";

?>