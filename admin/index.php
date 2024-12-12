
<?php

session_start();
include '../koneksi.php';

// if($_SESSION['level']==""||$_SESSION['level']==""){
//  header('location:../login.php');
// }
// if($_SESSION['level']==""||$_SESSION['level']==""){
//   header('location:../login.php');
// }
?>

<?php


if(isset($_GET['home'])){
    $home = $_GET['home'];
}
else{
	$home = null;
}

?>

<?php

include 'header.php';

?>
<?php
include '../koneksi.php';
$sql = mysqli_query($koneksi,"SELECT *FROM tb_post");
$blog = mysqli_num_rows($sql);

$sql_news = mysqli_query($koneksi,"SELECT *FROM tb_news");
$news = mysqli_num_rows($sql_news);

$sql_galeri = mysqli_query($koneksi,"SELECT *FROM tb_gallery");
$galeri = mysqli_num_rows($sql_galeri);
?>

<div class="container-fluid">
 <div class="row">
  <div class="col-md-2">
   	<div class="list-group" id="dashboard">
   	 <a href="index.php" class="list-group-item list-group-item-action"><img src="../assets/icon/dashboard.png" width="20"> Dashboard </a>	
   	</div>
   	<div class="list-group" id="menu-list" style="margin-top: 20px;">
   	 <a href="index.php?home=showBlog" class="list-group-item list-group-item-action"><img src="../assets/icon/blogger.png" width="20"> Blog <span class="badge badge-primary"><?php echo $blog;?></span></a>	
   	 <a href="index.php?home=showNews" class="list-group-item list-group-item-action"><img src="../assets/icon/news.png" width="20"> News <span class="badge badge-danger"><?php echo $news;?></span></a>	
   	 <a href="index.php?home=showGaleri" class="list-group-item list-group-item-action"><img src="../assets/icon/galeri.png" width="20"> Galeri <span class="badge badge-success"><?php echo $galeri;?></span></a>	
   	</div>
   </div>	
  </div>
  
 </div>	
</div>




<?php
include 'footer.php';
?>



<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});

</script>
