<?php
include '../koneksi.php';

$sql = mysqli_query($koneksi,"SELECT *FROM tb_post");

?>

<?php
if(isset($_GET['blog'])){
	$news = $_GET['blog'];
}
else{
	$news = null;
}
?>

<div class="backgroundBlog">
 <h1>Blog</h1>
 <a href="index.php?home=showBlog&blog=addBlog" class="btn btn-outline-primary" id="addBlog">Add Blog</a>	
</div>

<?php
if ($news == null) {
	include 'blog.php';
}
else{
	if($news == 'addBlog'){
		include 'addBlog.php';
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