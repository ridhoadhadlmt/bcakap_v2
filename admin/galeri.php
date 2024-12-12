<nav aria-label="breadcrumb">
  <ol class="breadcrumb lead">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Galeri</li>
    
  </ol>
</nav>
<div class="card">
 <div class="card-body">
	<table class="table table-striped">
	 <thead>
	  <tr>
	  	<th>No</th>
	  	<th>Image Galeri</th>
	  	
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
		 	
		 	<td><img src="<?= "../img/galeri/".$value['foto']; ?>"></td>
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