<?php 

$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambarimg = $pecah['gambarimg'];
if (file_exists("../gambarimg/$gambarimg"))
{
	unlink("../gambarimg/$gambarimg");
}

$koneksi->query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=berita';</script>";

?>