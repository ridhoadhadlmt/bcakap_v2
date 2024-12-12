<?php 
	
	include '../koneksi.php';
	$id = $_GET['id'];

	$query = mysqli_query($koneksi,"DELETE FROM tb_news WHERE id='$id'");

	if ($query) {
		header('location:index.php?home=showNews');
	}
 ?>

