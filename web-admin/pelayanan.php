<?php 
	include "koneksi.php";
	
	$idlokasi=$_GET['idlokasi'];
	$query = mysql_query("SELECT pelayanan.id_pelayanan, pelayanan.idlokasi, pelayanan.pelayanan, pelayanan.sub_pelayanan from pelayanan where idlokasi = '$idlokasi'")or die (mysql_error());
	
	$json = array();
	
	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
	
		$json[$no]['idlokasi'] = $row['idlokasi'];
		$json[$no]['pelayanan'] = $row['pelayanan'];
		$json[$no]['sub_pelayanan'] = $row['sub_pelayanan'];
		
		$no++;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>