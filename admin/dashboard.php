<?php
include '../koneksi.php';
$sql = mysqli_query($koneksi,"SELECT *FROM tb_post");
$blog = mysqli_num_rows($sql);

$sql_news = mysqli_query($koneksi,"SELECT *FROM tb_news");
$news = mysqli_num_rows($sql_news);

$sql_galeri = mysqli_query($koneksi,"SELECT *FROM tb_gallery");
$galeri = mysqli_num_rows($sql_galeri);
?>

<h1 id="title-dashboard">Dashboard</h1>			
  <div class="row">
   <div class="col-md-4">
   	<div class="card">
   	 <div class="card-body text-center">
   	  <div class="row">
   	   <div class="col-md-4">
   	   	<h1 class="card-title"><?php echo $blog?></h1>
   	    <p class="card-text">BLOG</p>
   	   </div>	
   	   <div class="col-md-8">
   	   	<img src="../assets/icon/blogger.png">
   	   </div>	
   	  </div>  	
   	 </div>	
   	</div>
   	<!-- <div class="container text-center">
   	 <a href="index.php?home=showblog" class="btn btn-default"><i class="fa fa-eye fa-2x" id="eye"></i></a>
   	 <a href="index.php?home=addblog" class="btn btn-default"><i class="fa fa-plus fa-2x" id="plus"></i></a>	
   	</div> -->
   </div>
   <div class="col-md-4">
   	<div class="card">
   	 <div class="card-body text-center">
   	  <div class="row">
   	   <div class="col-md-4">
   	   	 <h1 class="card-title"><?php echo $news; ?></h1>
   	     <p class="card-text">NEWS</p>	
   	   </div>
   	   <div class="col-md-8">
   	   	<img src="../assets/icon/news.png" class="img-fluid">
   	   </div>	
   	  </div>	
   	  	
   	 
   	 </div>	
   	</div>
   	<!-- <div class="container text-center">
   	 <a href="index.php?home=showNews" class="btn btn-default"><i class="fa fa-eye fa-2x" id="eye"></i></a>
   	 <a href="index.php?home=addNews" class="btn btn-default"><i class="fa fa-plus fa-2x" id="plus"></i></a>	
   	</div> -->
   </div>		
   <div class="col-md-4">
   	<div class="card">
   	 <div class="card-body text-center">
   	  <div class="row">
   	   <div class="col-md-4">
   	   	<h1 class="card-title"><?php echo $galeri;?></h1>
   	    <p class="card-text">GALERI</p>
   	   </div>	
   	   <div class="col-md-8">
   	   	<img src="../assets/icon/galeri.png" width="">
   	   </div>	
   	  </div>
   	  	
   	  	
   	 </div>	
   	</div>
   	<!-- <div class="container text-center">
   	 <a href="index.php?home=showGaleri" class="btn btn-default"><i class="fa fa-eye fa-2x" id="eye"></i></a>
   	 <a href="index.php?home=addGaleri" class="btn btn-default"><i class="fa fa-plus fa-2x" id="plus"></i></a>	
   	</div> -->
   </div>	
  </div>
  <div class="card" id="info-dashboard">
   <div class="card-body">
   	<img src="../assets/icon/kdam.png" class="img-fluid">
   </div>	
  </div>
        