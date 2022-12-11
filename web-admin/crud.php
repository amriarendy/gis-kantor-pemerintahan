<?php 
	include_once('connection.php'); 


	$id =$_POST['id'];
	$idlokasi=$_POST['idlokasi'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$rating=$_POST['rating'];
	$tanggal=$_POST['tanggal'];

	$insert = "INSERT INTO komen(id,idlokasi,judul,isi,rating,tanggal) VALUES ('$id','$idlokasi','$judul','$isi','$rating','$tanggal')";

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