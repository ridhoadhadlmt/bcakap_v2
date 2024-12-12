<?php
include 'header.php';

?>
<div class="background-prof">
 <div class="jumbotron">
  <div class="container">
  	<h1 class="display-4" data-aos="fade-out">PROFILE </h1>
  </div>	
 </div>
</div>

<div class="profile-bcakap">
 <div class="container">
  <div class="row">
  <div class="col-md-6" data-aos="fade-out">
  	<h1>B'CAKAP</h1>
  	<div class="caption">
     <p>B'CAKAP adalah kepanjangan dari bijak, cerdas, kretif ,dan produktif dalam bersosial media. Aplikasi website ini bertujuan untuk menyadarkan kembali masyarakat akan pentingnya bijak, cerdas, kreatif dan produktif dalam bersosial media.</p> 
    </div>
  </div>
  <div class="col-md-6" data-aos="fade-in">
  	<img src="img/bela.png" class="img-fluid">
  </div>	
 </div>		
 </div>
</div>

<div class="arti-bcakap">
 <div class="container text-center">
  <div class="row">
   <div class="col-md-3" data-aos="fade-in">
   	<div class="card">
   	 <div class="card-body">
   	  <h1>B</h1>
	    <h6>Bijak</h6>
	    <span>bersosial media</span>	
   	 </div>	
   	</div>
   </div>
   <div class="col-md-3" data-aos="fade-in">
   	<div class="card">
   	 <div class="card-body">
   	  <h1>CA</h1>
	    <h6>Cerdas</h6>
	    <span>bersosial media</span>	
   	 </div>	
   	</div>
   </div>
   <div class="col-md-3" data-aos="fade-out">
   	<div class="card">
   	 <div class="card-body">
   	  <h1>KA</h1>
	    <h6>Kreatif</h6>
	    <span>bersosial media</span>	
   	 </div>	
   	</div>
   </div> 	
   <div class="col-md-3" data-aos="fade-out">
   	<div class="card">
   	 <div class="card-body">
   	  <h1>P</h1>
	    <h6>Produktif</h6>
	    <span>bersosial media</span>	
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
	body{
		margin-bottom: 800px;
		font-family: 'Raleway', sans-serif;
	}
	.background-prof{
	}
	.background-prof .jumbotron{
		background: #003399;
		color: #fff;
	}
	.profile-bcakap{
		min-height: 400px;
	}
	.profile-bcakap .container{
		/*border-bottom: 1px solid #ddd;*/

	}
  .profile-bcakap .container .row .col-md-6 h1{
    font-weight: bold;
    /*font-family: 'Alegreya Sans SC',sans-serif;*/
  } 
	.profile-bcakap .container .row .col-md-6 p{
		line-height: 30px;
    margin-left: 20px;
	}
  .profile-bcakap .container .row .col-md-6 .caption{
    border-left: 2px solid #003399;
    margin-top: 20px;
  }
  .arti-bcakap .container .row{
    margin-top: 50px;
  }
	.arti-bcakap .container .row .col-md-3 .card:hover{
		box-shadow: 1px 0 5px #ccc;
    cursor: pointer;
	}
	.arti-bcakap .container .row .col-md-3 .card .card-body h1{
		font-weight: bold;
	}
</style>