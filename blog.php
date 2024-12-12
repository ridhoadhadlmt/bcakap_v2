	<?php
	include 'header.php';
?>

<div class="bckp-blog">
	<div class="container-lg">
		<div class="row">
			<div class="col-md-8">
				<?php
					$sql = "SELECT * FROM tb_post ORDER BY id ASC";
					$exe = mysqli_query($koneksi,$sql);
					foreach($exe as $blog):
				?>
				<div class="bckp-blog-list d-flex">
					<div class="blog-img">
						<img src="assets/img/blog/<?= $blog['post_image'];?>">
					</div>
					<div class="col-md-7">
						<div class="blog-content">
						   <h4><?= $blog['post_title'];?></h4>	
						   <p><i class="ion ion-ios-calendar"></i> <?= tgl_indonesia($blog['post_date']);?></p>
						</div>
					</div>	
				</div>
				<?php
					endforeach;
				?>
			</div>
			<div class="col-md-4">
				<div class="bckp-category">
					<div class="bckp-category-header">
						<span>Kategori</span>
					</div>	
					<div class="bckp-category-body">
						<ul class="navbar-nav">
						  <?php
						  	$sql = "SELECT post_kategori FROM tb_post";
						  	$exe = mysqli_query($koneksi,$sql);
						  	foreach($exe as $kategori):
						  ?>
						  <li class="nav-item">
						  	<?= $kategori['post_kategori'];?> <span class="float-right"><input type="checkbox" name=""></span> 
						  </li>	
						  <?php
						  	endforeach;
						  ?>
						</ul>
					</div>
				</div>
			</div>						
		</div>
	</div>
</div>
	
<?php
	include 'footer.php';
?>

<style type="text/css">
.bckp-blog{
	position: relative;
	overflow: hidden;
	padding: 100px 0px 0px 0px ;
	background: #FFF;
}
.bckp-blog-list{
	margin-bottom: 20px;
	/*background: #FFF;*/
}
.bckp-blog-list .blog-img{
	position: relative;
	overflow: hidden;
	width: 40%;
	border-radius: 12px;
}
.bckp-blog-list .blog-img img{
	width: 100%;
	height: 200px;
	object-fit: cover;
}
.bckp-blog-list .blog-content{
	width: 100%;
	padding: 10px 0px;
}
.bckp-blog-list .blog-content h4{
	font-family: 'OpenSansBold';
}

.bckp-category{
	position: relative;
	overflow: hidden;
	border: 1px solid #F0F0F0;
	border-radius: 12px;
}
.bckp-category .bckp-category-header{
	border-bottom: 1px solid #F0F0F0;
	padding: 10px 20px;
}
.bckp-category .bckp-category-body{
	padding: 10px 20px;

}
.bckp-category .bckp-category-body li{
	text-transform: capitalize;
	margin-bottom: 10px;
}
</style>