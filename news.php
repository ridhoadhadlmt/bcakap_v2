<?php
include 'header.php';

?>
<div class="background-news">
 <div class="jumbotron">
  <div class="container">
   <h1 class="display-4" data-aos="fade-out">NEWS</h1>
   <!-- <span class="lead">Bijak, Cerdas, Kreatif, dan Produktif</span>		 -->
  </div>
 </div>
</div>


<div class="news">
 <div class="container">
  <div class="card" id="wrapper-news">
   <div class="card-body">
   	<div class="row">
  	 <div class="col-md-7" data-aos="fade-in"> 	
        <?php foreach (getNews() as $news ): ?>
          <div class="content-news">
            <h1 data-aos="fade-in"><?= $news['news_title'] ?></h1>
            <img src="<?= "img/news/".$news['news_image'] ?>" class="img-fluid">
            <p class="text-center" id="tgl"><i class="fa fa-calendar"></i> <?= date('d m Y',strtotime($news['news_date'])) ?></p>
            <p class="text" align='justify'>
              <?php 
                if ( str_word_count($news['news_content']) > 60 ){
                    echo substr($news['news_content'],0,200); 
                  } 
                  else{
                    echo $news['news_content'];
                  }
               ?>
            </p>
            <a href="<?= $news['news_link'] ?>" class="btn btn-outline-primary">Read More <i class="fa fa-angle-right"></i></a>      
          </div>
        <?php endforeach ?>
  	 </div>
  	
     <div class="col-md-5" data-aos="fade-in">
  	  <div class="card">
  	   <div class="card-body">
  	   	
        <h5>Trending <span>Post</span></h5><hr>
  	   	
        <?php 
          $featured = mysqli_query($koneksi,"SELECT*FROM tb_post LIMIT 0,3");

         ?>
        <?php foreach ($featured as $feature): ?>
          <div class="row">
            <div class="col-md-5" data-aos="fade-in">
              <img src="<?= "img/blog/".$feature['post_image'] ?>" class="img-fluid">	
            </div>
            <div class="col-md-7" data-aos="fade-out">
              <h6><a href="blog/lima.php"><?= $feature['post_title'] ?></a></h6>
              <p>
                <?php 
                  if ( str_word_count($feature['post_content']) > 60 ){
                      echo substr($feature['post_content'],0,60); 
                    } 
                    else{
                      echo $feature['post_content'];
                    }
                 ?>
              </p>
              <span>08/08/2019</span>	
            </div>	
          </div>
        <?php endforeach ?>
  	   	
  	   </div>	
  	  </div> 	 
  	 </div>  	
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
		background: #fafafa;
		margin-bottom: 800px;
		font-family: 'Raleway',sans-serif;
	}
	.background-news{
	}
	.background-news .jumbotron{
		background: #FED700;
		color: #fff;
	}
	.news .container #wrapper-news{
		border:none;
    /*box-shadow: 1px 0 5px #ddd;*/
	}
	.news .container .card .card-body h5{
		font-weight: bold;
	}
	.news .container .card .card-body h5 span{
		font-weight: normal;
	}
	.news .container .card .card-body .row{
		margin-top: 20px;
	}
	.news .container .card .card-body .row .col-md-7 .caption{
		font-weight: bold;
		color: #fff;
	}
	.news .container .card .card-body .row .col-md-7 a{
		margin-top: 10px;
	}
	.news .container .card .card-body .row .col-md-7 .text{
		margin-top: 10px;
	}
	.news .container .card .card-body .row .col-md-7 #tgl{
		margin-top: 10px;
	}
	.news .container .card .card-body .row .col-md-7 h6{
		font-weight: bold;
		margin-bottom: 0;
	}
	.news .container .card .card-body .row .col-md-7 p{
		margin-bottom: 0;
		margin-top: 0;
		font-size: 16px;
	}
	.news .container .card .card-body .row .col-md-7 span{
		color: #ccc;
		font-size: 14px;
	}
	.news .container .card .card-body .row .col-md-5 hr{
		border-top:1px solid #000;
	}
  .news .container .card .card-body .row .col-md-5 .card{
    border: none;
  }
	.news .content-news{
    margin-bottom: 90px;
  }
  .news .container #news-2{
    margin-top: 50px;
    border:1px solid #ddd;
  }
</style>