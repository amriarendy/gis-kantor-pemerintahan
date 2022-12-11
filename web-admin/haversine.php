<?php 
	include "koneksi.php";
	
	$query = mysql_query("SELECT *FROM lokasi ORDER BY namalokasi ASC");
	
	$json = array();
	
	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
		$json[$no]['idlokasi'] = $row['idlokasi'];
		$json[$no]['namalokasi'] = $row['namalokasi'];
		$json[$no]['desk'] = $row['desk'];
		$json[$no]['alamat'] = $row['alamat'];
		$json[$no]['lat'] = $row['lat'];
		$json[$no]['lng'] = $row['lng'];
		$json[$no]['img_header'] = $row['img_header'];
		$json[$no]['rating_avg'] = $row['rating_avg'];
		
		$no++;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>