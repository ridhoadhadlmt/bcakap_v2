
<?php 
	include '../koneksi.php';
	
	$nama_file = $_FILES['img1']['name'];
	

	if ($nama_file != null) {
		$source    = $_FILES['img1']['tmp_name'];
		$folder    = "../img/galeri/";
		$exe_img1  = move_uploaded_file($source, $folder.$nama_file);
		$a  = "INSERT INTO tb_gallery(foto) VALUES('$nama_file')";
		$inserta = mysqli_query($koneksi,$a);

	}

	$nama_file2 = $_FILES['img2']['name'];
	if ($nama_file2) {
		$source2    = $_FILES['img2']['tmp_name'];
		$folder1    = "../img/galeri/";
		$exe_img2  = move_uploaded_file($source2, $folder1.$nama_file2);
		$b  = "INSERT INTO tb_gallery(foto) VALUES('$nama_file2')";
		$insertb = mysqli_query($koneksi,$b);
	}


	$nama_file3 = $_FILES['img3']['name'];
	if ($nama_file3) {
		$source3    = $_FILES['img3']['tmp_name'];
		$folder3    = "../img/galeri/";
		$exe_img3  = move_uploaded_file($source3, $folder3.$nama_file3);
		$c  = "INSERT INTO tb_gallery(foto) VALUES('$nama_file3')";
		$insertc = mysqli_query($koneksi,$c);
		
	}

	$nama_file4 = $_FILES['img4']['name'];
	if ($nama_file4) {
		$source4    = $_FILES['img4']['tmp_name'];
		$folder4    = "../img/galeri/";
		$exe_img4  = move_uploaded_file($source4, $folder4.$nama_file4);
		$d  = "INSERT INTO tb_gallery(foto) VALUES('$nama_file4')";
		$insertd = mysqli_query($koneksi,$d);
	}

	header('location:index.php?home=showGaleri');


 ?>