-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 04:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsevander`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(10) NOT NULL,
  `webtitle` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bp` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `mstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `webtitle`, `title`, `subtitle`, `name`, `avatar`, `nickname`, `dob`, `bp`, `gender`, `religion`, `height`, `weight`, `nationality`, `mstatus`) VALUES
(1, 'About', 'About Me', 'Know More About Me', 'Evander Naufal Lasmanto', 'images/evan.jpg', 'Evan', '2000-11-17', 'Jakarta', 'Laki-Laki', 'Islam', 170, 53, 'Indonesian', 'Not Married');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `webtitle` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `webtitle`, `title`, `subtitle`, `address`, `email`, `phone`) VALUES
(1, 'Contact', 'Contact Me', 'Contact Me if You Want to Hire Me', 'Panorama Serpong D6 No.1, Bakti Jaya, Setu', 'falevan17@gmail.com', '087774546517');

-- --------------------------------------------------------

--
-- Table structure for table `creation`
--

CREATE TABLE `creation` (
  `id` int(10) NOT NULL,
  `webtitle` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `judul1` varchar(255) NOT NULL,
  `dec1` varchar(1000) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `judul2` varchar(255) NOT NULL,
  `dec2` varchar(1000) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `cp1` varchar(255) NOT NULL,
  `deccp1` varchar(1000) NOT NULL,
  `linkcp1` varchar(255) NOT NULL,
  `cp2` varchar(255) NOT NULL,
  `deccp2` varchar(1000) NOT NULL,
  `linkcp2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creation`
--

INSERT INTO `creation` (`id`, `webtitle`, `title`, `subtitle`, `judul1`, `dec1`, `link1`, `judul2`, `dec2`, `link2`, `cp1`, `deccp1`, `linkcp1`, `cp2`, `deccp2`, `linkcp2`) VALUES
(1, 'Creation', 'My Creation', 'This is My Creation', 'Janji Daun Ivy', 'Nama aku Samudra. Aku terlahir sebagai anak ke empat dari lima bersaudara. Hidup ini sangatlah sulit. Namun, sejak mempunyai seorang kakak baru, hidupku sedikit lebih baik.   Aku adalah orang yang nggak suka berjanji. Namun, temanku ini sangatlah taat pada janji. Apakah aku bisa bertahan hidup dengan seseorang yang taat pada janji.', 'https://play.google.com/store/books/details/Evander_Naufal_Janji_Daun_Ivy?id=GtVfDwAAQBAJ', 'Mengapa Aku Terlahir di Keluarga Ini?', 'Pertemanan yang di ganggu oleh percintaan dalam kehidupan seorang pelajar sangatlah berat. Aku selalu bertanya-tanya, mengapa aku terlahir di keluarga yang seperti ini. Dapatkah aku menemukan jawabannya.', 'https://play.google.com/store/books/details/Evander_Naufal_Mengapa_Aku_Terlahir_di_Keluarga_in?id=mqdhDwAAQBAJ', 'Implementasi Perangkat Lunak – Aplikasi Java NetBean Pada Sistim Informasi Bisnis Pemula Susu Segar', 'Hak Cipta atas implementasi perangkat lunak yang digunakan sebagai media sistim informasi dari penyelia bisnis pemula kepada pelanggan, dengan tujuan memberikan keuntungan, bukan saja bagi kedua pihak yaitu penjual dan pembeli, bahkan juga pihak ketiga, yaitu penyelia jasa kurir. Bagi pengguna aplikasi ini memberikan kemudahan bagi penyelia bisnis produk Susu Segar, yang akan memberikan peluang yang lebih besar dalam meningkatkan kualitas pelayanan yang diharapkan pelanggan.', 'https://pdki-indonesia.dgip.go.id/index.php/hakcipta/cVFNUVZ0S2l0K3B4ZlRtMlVsSnFBZz09?q=EC00201947561&type=1', 'Implementasi Perangkat Lunak Aplikasi Berbasis Mobile Pada Sistim JSDP UPJ', 'Hak Cipta atas  JSDP atau Jaya Softskills Development Program adalah program pemberian keterampilan (softskills) dan pengetahuan yang dilakukan oleh Universitas Pembangunan Jaya (UPJ). Program ini diikuti oleh seluruh mahasiswa dan mencakup kegiatan dalam lingkup akademik maupun non-akademik. Aplikasi JSDP-KU memudahkan mahasiswa dalam mengunggah JSDP. Selain itu, pada aplikasi JSDP-KU menggunakan sistem yang sudah berbasis mobile sehingga bisa diakses dimana saja oleh mahasiswa.', 'https://pdki-indonesia.dgip.go.id/index.php/hakcipta/NTE1TlIrdWFJbFh0ZWRvSWtHQkZoQT09?q=EC00202015943%2C&type=1');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `webtitle` varchar(50) NOT NULL,
  `bghome` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `linkfb` varchar(100) NOT NULL,
  `linkig` varchar(100) NOT NULL,
  `linkgh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `webtitle`, `bghome`, `subtitle`, `name`, `linkfb`, `linkig`, `linkgh`) VALUES
(1, 'Home', 'images/header-bg.gif', 'Welcome to My Portfolio', 'Evander Naufal Lasmanto', 'https://www.facebook.com/evander.naufal/', 'https://www.instagram.com/evandernaufal/', 'https://github.com/evandernaufal');

-- --------------------------------------------------------

--
-- Table structure for table `messageadmin`
--

CREATE TABLE `messageadmin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messageadmin`
--

INSERT INTO `messageadmin` (`id`, `name`, `date`, `email`, `subject`, `message`) VALUES
(13, 'Elmar', '2020-11-01', 'elmar@gmail.com', 'Join My Team at Google Inc', 'Hello Evander, i like your portfolio, so i hopelly can work together with you in Google Inc. If you want this inviting, please reply my email, Thankyou'),
(14, 'Elsa', '2020-11-02', 'elsacarinta@gmail.com', 'Project Web Design', 'Hello Evan, i like your web design, so can you make me one web like this for my portfolio? I will pay you of your work. If you interesting, please chat me at whatsapp on 081212457878, Thankyou.'),
(17, 'Rafi', '2020-10-30', 'rafimaulanaa996@gmail.com', 'Kenalan', 'Hai kak aku mahasiswa baru jurusan informatika, apakah kakak bisa ajarin aku cara membuat website seperti ini, karena aku belum mengerti caranya kak, Jika kakak berkenan boleh bales ke email ya kak, terimakasih...');

-- --------------------------------------------------------

--
-- Table structure for table `myeducation`
--

CREATE TABLE `myeducation` (
  `id` int(10) NOT NULL,
  `webtitle` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `yeartk` varchar(50) NOT NULL,
  `namatk` varchar(50) NOT NULL,
  `dectk` varchar(255) NOT NULL,
  `yearsd` varchar(50) NOT NULL,
  `namasd` varchar(50) NOT NULL,
  `decsd` varchar(255) NOT NULL,
  `yearsmp` varchar(50) NOT NULL,
  `namasmp` varchar(50) NOT NULL,
  `decsmp` varchar(255) NOT NULL,
  `yearsma` varchar(50) NOT NULL,
  `namasma` varchar(50) NOT NULL,
  `decsma` varchar(255) NOT NULL,
  `yearpt` varchar(50) NOT NULL,
  `namapt` varchar(50) NOT NULL,
  `decpt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myeducation`
--

INSERT INTO `myeducation` (`id`, `webtitle`, `title`, `subtitle`, `yeartk`, `namatk`, `dectk`, `yearsd`, `namasd`, `decsd`, `yearsmp`, `namasmp`, `decsmp`, `yearsma`, `namasma`, `decsma`, `yearpt`, `namapt`, `decpt`) VALUES
(1, 'My Education', 'My Education', 'Welcome to My Education', '2005 - 2006', 'TK Permata Bunda', 'My kindergarten is the best for me because i can play anything in playground at school. I like drawing on my drawing book and i really like draw a rabbit with carrot. Also many time to playing with friends.', '2006 - 2012', 'SDN Pamulang 4', 'I always rank 2th-8th in the class but i never get first rank. I got many experience in elementary school, like i play in friends home, i can go home by my self, also i like eating in canteen specially siomay.', '2012 - 2015', 'SMPN 20 Tangerang Selatan', 'I ever join organization OSIS on junior high school. Since I in class 7, i like socializing, sharing with friends until night, and many more. Also i got first rank on my graduation, since that time i really like study.', '2015 - 2018', 'SMAN 6 Tangerang Selatan', 'My high school is my favorite school on my life because i know what mean of love. But not only love, i also learn many things from this school like tadarusan every morning and read Yasin every friday in the morning.', '2018 - Now', 'Pembangunan Jaya University', 'I really like informatics departement because i have a dream when i was on junior high school to can be a student at this place. I also happy because my departement a belief in me to be a head of Himaforka.');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) NOT NULL,
  `linkfb` varchar(50) NOT NULL,
  `linkig` varchar(50) NOT NULL,
  `linkgh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `linkfb`, `linkig`, `linkgh`) VALUES
(1, 'https://www.facebook.com/evander.naufal/', 'https://www.instagram.com/evandernaufal/', 'https://github.com/');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `webtitle` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `widthwd` int(3) NOT NULL,
  `widthpp` int(3) NOT NULL,
  `widthpc` int(3) NOT NULL,
  `widthaa` int(3) NOT NULL,
  `widthse` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `webtitle`, `title`, `subtitle`, `widthwd`, `widthpp`, `widthpc`, `widthaa`, `widthse`) VALUES
(1, 'Skills', 'My Skills', 'This is My Skills', 90, 80, 70, 95, 62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creation`
--
ALTER TABLE `creation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messageadmin`
--
ALTER TABLE `messageadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myeducation`
--
ALTER TABLE `myeducation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `creation`
--
ALTER TABLE `creation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messageadmin`
--
ALTER TABLE `messageadmin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `myeducation`
--
ALTER TABLE `myeducation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
