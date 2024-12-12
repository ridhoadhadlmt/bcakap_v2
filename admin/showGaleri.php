<?php
include '../koneksi.php';

$sql = mysqli_query($koneksi,"SELECT *FROM tb_gallery");

?>

<?php
if(isset($_GET['galeri'])){
	$news = $_GET['galeri'];
}
else{
	$news = null;
}
?>

<div class="backgroundGaleri">
 <h1>Galeri</h1>
 <a href="index.php?home=showGaleri&galeri=addGaleri" class="btn btn-outline-primary" id="addGaleri">Add Galeri</a>	
</div>

<?php
if ($news == null) {
	include 'galeri.php';
}
else{
	if($news == 'addGaleri'){
		include 'addGaleri.php';
	}
}


?>

<style type="text/css">
	#btn-blog{
		float: right;	
	}
	.card{
		padding: 20px 0;
	}
</style>