<?php 
	include "koneksi.php";
	
	$url = "http://192.168.43.47/mulaibaru/images/";
	
	// perhitungan haversine formula pada sintak SQL
	$id_berita=$_GET['id_berita'];
	$query = mysql_query("SELECT komen_berita.idkb, komen_berita.id_berita, komen_berita.judul_komber, users.username, komen_berita.isi_komber, komen_berita.rating_komber, komen_berita.tanggal_komber from komen_berita, users where komen_berita.id = users.id and id_berita = '$id_berita' order by komen_berita.tanggal_komber desc")or die(mysql_error());
	
	$json = array();
	
	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
		$json[$no]['idkb'] = $row['idkb'];
		$json[$no]['id_berita'] = $row['id_berita'];
		$json[$no]['judul_komber'] = $row['judul_komber'];
		$json[$no]['username'] = $row['username'];
		$json[$no]['isi_komber'] = $row['isi_komber'];
		$json[$no]['rating_komber'] = $row['rating_komber'];
		$json[$no]['tanggal_komber'] = $row['tanggal_komber'];
		$no++;
	}
	
	echo json_encode($json);
	

	mysql_close($connect);

	
	
?>