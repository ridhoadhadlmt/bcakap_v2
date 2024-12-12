
<?php 
	include '../koneksi.php';
	if (isset($_POST['submit'])) {

		$title = $_POST['title'];
		$content = $_POST['content'];
		$link = $_POST['link'];

		$nama_file = $_FILES['img']['name'];
		$source    = $_FILES['img']['tmp_name'];
		$folder    = "../img/news/";
		$exe_img  = move_uploaded_file($source, $folder.$nama_file);

		echo $s  = "INSERT INTO tb_news(news_title,news_content,news_link,news_image) VALUES('$title','$content','$link','$nama_file')";
		$insert = mysqli_query($koneksi,$s);

		if ($insert) {
			header('location:index.php?home=showGaleri');
		}

	}

 ?>