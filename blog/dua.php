<?php include 'header.php'; ?>

	<div class="container page-blog">
		<div class="row">
			<div class="col-lg-4">
				<img src="../img/blog/image-1.png">
			</div>
			<div class="col-lg-5 text-left">
				<h1>Gunakan Social Media Sebagai Ensiklopedia</h1>

				<p>Sosial media sangat mudah menghubungkan penggunanya dengan berbagai perusahaan, media, hingga public figure yang menginspirasi. Dalam hal ini, pengguna bisa menjadikan sosial media sebagai ensiklopedia. Mengikuti page-page yang terkait dengan minat dan bakat penggunanya. Misalnya jika pengguna ingin belajar Bahasa Inggris, mereka bisa mengikuti page-page terkait dengan English as Second Language atau English as Foreign Language.</p>
				<br>
				<p>Pun, bagi pengguna yang ingin mempelajari tentang IPA. Sehingga pada saat membuka beranda atau “home” yang terlihat tidak hanya status-status alay dari pengguna yang lain.</p>
			</div>

			<div class="col-lg-3">
				<div class="card" id="featured">
			  	  <div class="card-body">
			  	  	<h3 class="card-title">Featured Post</h3><hr>
				  	  	<div class="row">
				  	  	 <div class="col-md-4">
				  	  	 	<img src="../img/blog/digital.jpg" class="img-fluid">
				  	  	 </div>	
				  	  	 <div class="col-md-8 text-left">
				  	  	 	<b class="card-title"><a href="empat.php">Cara Produktif Memanfaatkan Internet di Era Digital Masa Kini</a></b>
				  	  	 </div>
				  	  	</div>

				  	  	<div class="row" id="featured-post">
				  	  	 <div class="col-md-4">
				  	  	 	<img src="../img/blog/hoax.jpg" class="img-fluid">
				  	  	 </div>	
				  	  	 <div class="col-md-8 text-left">
				  	  	 	<b class="card-title"><a href="lima.php">Kroscek Kebenaran Berita</a></b>
				  	  	 </div>
				  	  	</div>
			  	  	
				  	  	<div class="row" id="featured-post">
				  	  	 <div class="col-md-4">
				  	  	 	<img src="../img/blog/pemilu.jpg" class="img-fluid">
				  	  	 </div>	
				  	  	 <div class="col-md-8 text-left">
				  	  	 	<b class="card-title"><a href="tiga.php">Bijak Menggunakan Sosial Media Di Pemilu</a></b>
				  	  	 </div>
				  	  	</div>
			  	  </div>	
			  	</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>

<style type="text/css">
	.page-blog{
		margin-top: 130px;
	}
	.page-blog .col-lg-4 img{
		max-width: 99%;
	}
	.page-blog p{
		text-align: justify;
	}
	.page-blog h1{
		margin-bottom: 9px;
	}
	.container .row .col-lg-5 h1{
		font-family: 'Ropa Sans',sans-serif;
	}
	#featured .row{
		margin-bottom: 30px;
	}
</style>