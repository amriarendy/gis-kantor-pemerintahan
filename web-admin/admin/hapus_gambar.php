<?php 

$ambil = $koneksi->query("SELECT * FROM gambar WHERE idgambar='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambarimg = $pecah['gambarimg'];

$koneksi->query("DELETE FROM gambar WHERE idgambar='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=gambar';</script>";

?>