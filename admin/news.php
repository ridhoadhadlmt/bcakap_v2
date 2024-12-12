<nav aria-label="breadcrumb">
  <ol class="breadcrumb lead">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">News</li>
  </ol>
</nav>
<div class="card">
 <div class="card-body">
	<table class="table table-striped table-responsive">
	 <thead>
	  <tr>
	  	<th>No</th>
	  	<th width="15%">News Title</th>
	  	<th width="75%">News Content</th>
	  	<th width="10%">Link News</th>
	  	<th>Image</th>
	  	<th>Action</th>
	  </tr>	
	 </thead>
	 <tbody>
	 	<?php
	 	$a = 1;
	 	foreach($sql as $value):
	 	?>
		 <tr>
		 	<td><?= $a;?></td>
		 	<td><?= $value['news_title'];?></td>
		 	<td>
		 	<?php 
				if ( str_word_count($value['news_content']) > 60 ){
	                echo substr($value['news_content'],0,200); 
	              } 
	              else{
	                echo $value['news_content'];
	              }
			?>
		 	</td>	
		 	<td><?= $value['news_link'];?></td>
		 	<td><img src="<?= "../img/news/" .$value['news_image'];?>" width="150"></td>
		 	<td><a href="deleteGaleri.php?id=<?= $value['id'];?>" class="btn btn-danger">Hapus</a></td>
		 </tr>	
		<?php
		$a++;
		endforeach;
		?> 
	 </tbody>	
	</table> 	
 </div>	
</div>