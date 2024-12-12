-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2019 pada 11.01
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bcakap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`id`, `foto`) VALUES
(10, 'galeri.jpg'),
(11, 'galeri1.jpg'),
(12, 'galeri2.jpg'),
(13, 'galeri3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_title` varchar(255) NOT NULL,
  `news_content` longtext NOT NULL,
  `news_link` varchar(255) NOT NULL,
  `news_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id`, `news_date`, `news_title`, `news_content`, `news_link`, `news_image`) VALUES
(4, '2019-08-08 21:22:13', 'Panglima Kodam I/Bukit Barisan beri pesan kepada prajurit', 'Panglima Kodam I Bukit Barisan, Mayor Jendral TNI MS Fadhillah, Minta prajurit TNI ikut memerangi narkoba,mewaspadai berita hoaks,bersikap bijaksana,dalam menggunakan media sosial,dan memelihara sinergitas TNI-Kepolisian Indonesia yang sudah terjalin baik selama ini.', 'https://seword.com/umum/jejak-digital-yang-mengganjal-RJcw9Djdv8', 'new.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id` int(30) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_link` varchar(255) NOT NULL,
  `post_kategori` varchar(30) NOT NULL,
  `post_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id`, `post_date`, `post_content`, `post_title`, `post_link`, `post_kategori`, `post_image`) VALUES
(4, '2019-08-09 15:43:11', 'Sosial media sangat mudah menghubungkan penggunanya dengan berbagai perusahaan, media, hingga public figure yang menginspirasi. Dalam hal ini, pengguna bisa menjadikan sosial media sebagai ensiklopedia. Mengikuti page-page yang terkait dengan minat dan bakat penggunanya. Misalnya jika pengguna ingin belajar Bahasa Inggris, mereka bisa mengikuti page-page terkait dengan English as Second Language atau English as Foreign Language.\r\n\r\n\r\nPun, bagi pengguna yang ingin mempelajari tentang IPA. Sehingga pada saat membuka beranda atau â€œhomeâ€ yang terlihat tidak hanya status-status alay dari pengguna yang lain.', 'Gunakan Social Media Sebagai Ensiklopedia', 'page-blog?id=4', 'bijak', 'image-1.png\r\n		'),
(5, '2019-08-09 15:44:36', 'Bisa dikatakan bahwa hampir semua masyarakat Indonesia saat ini telah melek teknologi, khususnya internet. Namun sayangnya, sebagian besar dari mereka menggunakan media sosial hanya untuk hal-hal konsumtif, membuat status, melakukan hal-hal yang kurang penting dan yang pasti hal-hal yang tidak meningkatkan nilai tambah. Padahal banyak hal produktif memanfaatkan internet yang bisa dijalankan.\r\n\r\n\r\nSekali lagi menjadi lebih produktif memanfaatkan internet tidak akan rugi sama sekali. Sebaliknya Anda bisa sukses lebih cepat dari yang lainnya. Dari internet Anda dapat melakukan apa saja, dari mulai mencari peluang bisnis yang menguntungkan, partner bisnis yang sesuai target, visi dan misi, mencari mentor dan lain sebagainya. Karena harganya yang murah, maka jangan sia-siakan internet, apalagi untuk hal-hal yang kurang bernilai.', 'Cara Produktif Memanfaatkan Internet di Era Digital Masa Kini', 'page-blog?id=5', 'cerdas', 'digital.jpg\r\n		'),
(6, '2019-08-09 15:48:21', 'Saat ini tentu tidak jarang kalau kita menemukan berita yang menjelekan salah satu pihak di media sosial. Hal inilah yang terkadang bertujuan demi menjatuhkan nama pesaing dengan menyebarkan berita yang hasil rekayasa. Maka dari itu, pengguna media sosial dituntut agar lebih cerdas lagi saat menangkap sebuah informasi\r\n\r\n\r\napabila Anda ingin menyebarkan informasi tersebut, alangkah bijaknya jika Anda melakukan kroscek terlebih dahulu atas kebenaran informasi tersebut.', 'Kroscek Kebenaran Berita', 'page-blog?id=6', 'produktif', 'hoax.jpg\r\n		');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
