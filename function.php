<?php 
	function tgl_indonesia($date){
		
		$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis","Jum'at","Sabtu");
		$Bulan = array("Januari", "Februari","Maret","April","Mei","Juni","Juli","Agustus","September",
			"Oktober","November","Desember");


		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
		$waktu = substr($date, 11, 5);
		$hari = date("w", strtotime($date));
		$result = " ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ";
		// $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." | ".$waktu." WIB";
		
		return $result;
		
		
		// return $result;		
	}
	
	function getPost()
	{
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_post");

		return $query;
	}

	 function getPostId($id)
	{
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_post WHERE id = '$id'");

		return $query;
	}

	function getLastPost()
	{
		global $koneksi;
		$select = mysqli_query($koneksi,"SELECT*FROM tb_post");
		$row = mysqli_num_rows($select);
		$content = $row - 2;

		$s = "SELECT*FROM tb_post LIMIT $content,$row";
		$query = mysqli_query($koneksi,$s);
		return $query;
	}

	function newPost()
	{
		global $koneksi;
		$select = mysqli_query($koneksi,"SELECT max(id) AS id FROM tb_post");
		$ftc = mysqli_fetch_array($select);
		$max = $ftc['id'];

		$s = "SELECT*FROM tb_post WHERE id='$max'";

		$query = mysqli_query($koneksi,$s);
		return $query;
	}

	function getGallery()
	{
		global $koneksi;
		$query  = mysqli_query($koneksi,"SELECT*FROM tb_gallery");

		return $query;
	}
 ?>