<?php 
	include "koneksi.php";
	
	$url = "http://192.168.43.47/kantor_dinas/gambarimg/";
	
	// perhitungan haversine formula pada sintak SQL
	$idlokasi=$_GET['idlokasi'];
	$query = mysql_query("SELECT gambar.idgambar, gambar.idlokasi, gambar.nmgambar, gambar.url from gambar where idlokasi = '$idlokasi'")or die(mysql_error());
	
	$json = array();
	
	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
		$json[$no]['idgambar'] = $row['idgambar'];
		$json[$no]['idlokasi'] = $row['idlokasi'];
		$json[$no]['nmgambar'] = $row['nmgambar'];
		$json[$no]['url'] = $row['url'];
		$no++;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);

	
	
?>