<?php 

$ambil = $koneksi->query("SELECT * FROM komen_berita WHERE idkb='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM komen_berita WHERE idkb='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=komen_berita';</script>";

?>