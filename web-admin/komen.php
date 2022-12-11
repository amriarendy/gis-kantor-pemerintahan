<?php 
	include "koneksi.php";
	
	$url = "http://192.168.43.47/mulaibaru/images/";
	
	// perhitungan haversine formula pada sintak SQL
	$idlokasi=$_GET['idlokasi'];
	$query = mysql_query("SELECT komen.idks, komen.idlokasi, komen.judul, users.username, komen.isi, komen.rating, komen.tanggal from komen, users where komen.id = users.id and idlokasi = '$idlokasi'")or die(mysql_error());
	
	$json = array();
	
	$no = 0;
	
	while($row = mysql_fetch_assoc($query)){
		$json[$no]['idks'] = $row['idks'];
		$json[$no]['idlokasi'] = $row['idlokasi'];
		$json[$no]['judul'] = $row['judul'];
		$json[$no]['username'] = $row['username'];
		$json[$no]['isi'] = $row['isi'];
		$json[$no]['rating'] = $row['rating'];
		$json[$no]['tanggal'] = $row['tanggal'];
		$no++;
	}
	
	echo json_encode($json);
	

	mysql_close($connect);

	
	
?>