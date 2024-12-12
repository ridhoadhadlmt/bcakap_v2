<nav aria-label="breadcrumb">
  <ol class="breadcrumb lead">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Blog</li>
  </ol>
</nav>
<div class="card">
 <div class="card-body">
	<table class="table table-striped">
	 <thead>
	  <tr>
	  	<th>No</th>
	  	<th>Blog Title</th>
	  	<th width="50%">Blog Content</th>
	  	<th width="10%">Link Blog</th>
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
		 	<td><?= $value['post_title'];?></td>
		 	<td>
		 	<?php 
				if ( str_word_count($value['post_content']) > 60 ){
	                echo substr($value['post_content'],0,200); 
	              } 
	              else{
	                echo $value['post_content'];
	              }
			?>
		 	</td>
		 	<td><?= $value['post_link'];?></td>
		 	<td><a href="deleteBlog.php?id=<?= $value['id']; ?>" class="btn btn-danger">Hapus</a></td>
		 </tr>	
		<?php
		$a++;
		endforeach;
		?> 
	 </tbody>	
	</table> 	
 </div>	
</div>