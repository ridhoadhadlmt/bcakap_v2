
<?php 
	include '../koneksi.php';
	if (isset($_POST['submit'])) {
		$max = mysqli_query($koneksi,"SELECT MAX(id) AS id FROM `tb_post`");
		$ftc = mysqli_fetch_array($max);
		$id  = $ftc['id'];
		$id = $id+1;

		$title = $_POST['title'];
		$content = $_POST['content'];
		$kategori = $_POST['kategori'];


		$nama_file = $_FILES['img']['name'];
		$source    = $_FILES['img']['tmp_name'];
		$folder    = "../img/blog/";
		$exe_img  = move_uploaded_file($source, $folder.$nama_file);

		$s  = "INSERT INTO tb_post(id,post_content,post_title,post_link,post_kategori,post_image) VALUES('$id','$content','$title','page-blog?id=$id','$kategori','$nama_file')";
		$insert = mysqli_query($koneksi,$s);

		if ($insert) {
			header('location:index.php?home=showBlog');
		}
		else{
			echo $s;
		}

	}

 ?>