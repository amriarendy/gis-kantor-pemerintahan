<?php 

$ambil = $koneksi->query("SELECT * FROM komen WHERE idks='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM komen WHERE idks='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=komen';</script>";

?>