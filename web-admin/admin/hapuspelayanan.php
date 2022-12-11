<?php 

$ambil = $koneksi->query("SELECT * FROM pelayanan WHERE id_pelayanan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=pelayanan';</script>";

?>