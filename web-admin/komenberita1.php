<?php 
	include "koneksi.php";
	
	$url = "http://192.168.43.47/mulaibaru/images/";
	
	// perhitungan haversine formula pada sintak SQL
	
	$query = mysql_query("SELECT *FROM komen_berita");
	
	$json = array();
	
	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
		$json[$no]['idkb'] = $row['idkb'];
		$json[$no]['id_berita'] = $row['id_berita'];
		$json[$no]['judul_komber'] = $row['judul_komber'];
		$json[$no]['isi_komber'] = $row['isi_komber'];
		$json[$no]['rating_komber'] = $row['rating_komber'];
		$json[$no]['tanggal_komber'] = $row['tanggal_komber'];
		$no++;
	}
	
	echo json_encode($json);
	

	mysql_close($connect);

	
	
?>