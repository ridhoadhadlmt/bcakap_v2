<?php 
	
	$kategori = $_GET['kategori'];

 ?>
<?php include 'header.php'; ?>
<div class="jumbotron">
	<div class="container">
		<h1 class="display-4" data-aos="fade-out">BLOG </h1>
	</div>  
</div>
<div class="container">
	<div class="category">
		<div class="row">
			<div class="col-md-3">
				<a href="blog-kategori.php?kategori=bijak" class="btn btn-outline-primary <?php if($kategori=='bijak'){echo("bg-primary text-white");} ?>" style="width: 100%;">Bijak</a> 
			</div>
			<div class="col-md-3">
				<a href="blog-kategori.php?kategori=cerdas" class="btn btn-outline-primary <?php if($kategori=='cerdas'){echo("bg-primary text-white");} ?>" style="width: 100%">Cerdas</a> 
			</div> 
			<div class="col-md-3">
				<a href="blog-kategori.php?kategori=kreatif" class="btn btn-outline-primary <?php if($kategori=='kreatif'){echo("bg-primary text-white");} ?>" style="width: 100%">Kreatif</a> 
			</div>
			<div class="col-md-3">
				<a href="blog-kategori.php?kategori=produktif" class="btn btn-outline-primary <?php if($kategori=='produktif'){echo("bg-primary text-white");} ?>" style="width: 100%">Produktif</a> 
			</div>
		</div> 
		<hr>

		<div class="row">
			<?php 
				$blog = mysqli_query($koneksi,"SELECT*FROM tb_post WHERE post_kategori = '$kategori'");

			 ?>	
			 <?php foreach ($blog as $blogs ): ?>
			 	<div class="col-lg-6">
					<div class="card">
						<img src="<?= "img/blog/".$blogs['post_image'] ?>" class="card-img-top" width="140" height="300">
						<div class="card-body">
							
							<h3><?= $blogs['post_title'] ?></h3>
							<p><?= $blogs['post_content'] ?></p>

							<a href="" class="btn btn-outline-primary">Read More</a>
						</div>
					</div>
				</div>
			 <?php endforeach ?>		
		</div>
	</div>


</div>

<?php include 'footer.php'; ?>

<style type="text/css">
	body{
		margin-bottom: 800px;
		font-family: 'Raleway',sans-serif;
	}
	.card{
		border: none;
	}
</style>