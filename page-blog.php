<?php
include 'header.php';

$id = $_GET['id'];

?>


<div class="container page-blog">
    <div class="row">
      <?php foreach (getPostId($id) as $post ): ?>
        <div class="col-lg-8">
          <img src="<?= "img/blog/".$post['post_image'] ?>">
           <h1><?= $post['post_title'] ?></h1>

          <p><?= $post['post_content'] ?></p>
        </div>
        

      <?php endforeach ?>
      <div class="col-lg-4">
        <div class="card" id="featured">
            <div class="card-body">
              <h3 class="card-title">Featured Post</h3><hr>

                <!-- <div class="row" id="featured-post">
                  <div class="col-md-4">
                    <img src="../img/blog/pemilu.jpg" class="img-fluid">
                  </div> 
                  <div class="col-md-8 text-left">
                    <b class="card-title"><a href="tiga.php">Bijak Menggunakan Sosial Media Di Pemilu</a></b>
                  </div>
                </div> -->
                <?php 

                    $blog = mysqli_query($koneksi,"SELECT*FROM tb_post LIMIT 0,3");

                 ?>
                <?php foreach ($blog as $blog): ?>
                  <div class="row" id="featured-post">
                    <div class="col-md-4">
                      <img src="<?= "img/blog/".$blog['post_image'] ?>" class="img-fluid" >
                    </div> 
                    <div class="col-md-8 text-left">
                      <b class="card-title"><a href="<?= $blog['post_link'] ?>"><?= $blog['post_title'] ?></a></b>
                    </div>
                  </div>
                <?php endforeach ?>

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
  }
  .page-blog{
    margin-top: 130px;
  }
  .page-blog .col-lg-4 img{
    max-width: 99%;
  }
  .page-blog p{
    text-align: justify;
  }
  #featured .row{
    margin-bottom: 30px;
  }
</style>