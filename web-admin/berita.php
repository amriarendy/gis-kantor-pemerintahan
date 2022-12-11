<?php 
	include "koneksi.php";
	
	$query = mysql_query("SELECT *FROM berita ORDER BY tanggal_berita DESC");
	
	$json = array();

	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
		$json[$no]['id_berita'] = $row['id_berita'];
		$json[$no]['judul_berita'] = $row['judul_berita'];
		$json[$no]['isi'] = $row['isi'];
		$json[$no]['gambar_depan'] = $row['gambar_depan'];
		$json[$no]['isi1'] = $row['isi1'];
		$json[$no]['gambar1'] = $row['gambar1'];
		$json[$no]['tanggal_berita'] = $row['tanggal_berita'];
		
		$no++;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>