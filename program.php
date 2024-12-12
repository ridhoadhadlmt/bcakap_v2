<?php
	include 'header.php';
?>

<div class="bckp-program mt-2 mb-2 pt-5 pb-5 ">
	<div class="container-lg">
		<?php
			$sql = "SELECT * FROM tb_program ORDER BY id_program ASC";
			$exe = mysqli_query($koneksi,$sql);
			foreach($exe as $program):
		?>
		<div class="program-item d-block">
			<div class="program-img">
				<img src="assets/img/program/<?= $program['img'];?>">
			</div>
			<div class="program-desc">
				<h4><?= $program['program']; ?></h4>
				<p><?= $program['desc'];?></p>
			</div>
		</div>
		<?php
			endforeach;
		?>
	</div>	
</div>
<?php
	include 'footer.php';
?>


<style type="text/css">
.bckp-program{
	position: relative;
	overflow: hidden;
	background: #FFF;
}	
.bckp-program h1{
	font-family: 'OpenSansBold';
}
.bckp-program .program-item{
	min-height: 300px;
	position: relative;
	overflow: hidden;
	margin-bottom: 20px;
}
.bckp-program .program-img{
	width: 50%;

}
.bckp-program .program-img img{
	width: 100%;
	height: 300px;
	object-fit: contain;
}
.bckp-program .program-desc{
	width: 50%;
	
}
.bckp-program .program-desc h4{
	font-family: 'OpenSansBold';
}

@media (max-width: 576px){
	.bckp-program{
		margin: 100px 0px 0px 0px;
	}
	.bckp-program .program-img{
		width: 100%;

	}
	.bckp-program .program-img img{
		width: 100%;
		height: 300px;
		object-fit: contain;
	}
	.bckp-program .program-desc{
		width: 100%;
		margin: 10px 0px;
	}
	.bckp-program .program-desc h4{
		font-family: 'OpenSansBold';
	}
}
</style>