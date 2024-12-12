<?php
include '../koneksi.php';

$sql = mysqli_query($koneksi,"SELECT *FROM tb_news");

?>

<?php

if(isset($_GET['news'])){
	$news = $_GET['news'];
}
else{
	$news = null;
}
?>

<div class="backgroundNews">
 <h1>NEWS</h1>
 <a href="index.php?home=showNews&news=addNews" class="btn btn-outline-primary" id="addNews">Add News</a>	
</div>

<?php
if ($news == null) {
	include 'news.php';
}
else{
	if($news == 'addNews'){
		include 'addNews.php';
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