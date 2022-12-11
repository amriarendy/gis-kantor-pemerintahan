<?php 
	include_once('connection.php'); 


	$id =$_POST['id'];
	$id_berita=$_POST['id_berita'];
	$judul_komber=$_POST['judul_komber'];
	$isi_komber=$_POST['isi_komber'];
	$rating_komber=$_POST['rating_komber'];
	$tanggal_komber=$_POST['tanggal_komber'];

	$insert = "INSERT INTO komen_berita(id,id_berita,judul_komber,isi_komber,rating_komber,tanggal_komber) VALUES ('$id','$id_berita','$judul_komber','$isi_komber','$rating_komber','$tanggal_komber')";

	$exeinsert = mysqli_query($koneksi,$insert);

	$response = array();

	if($exeinsert)
	{
		$response['code'] =1;
		$response['message'] = "Success ! Data di tambahkan";
	}
	else
	{
		$response['code'] =0;
		$response['message'] = "Failed ! Data Gagal di tambahkan";
	}

		echo json_encode($response);

 ?>