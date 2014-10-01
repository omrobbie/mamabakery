-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 05:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mamabakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `idDashboard` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`idDashboard`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`idDashboard`, `nama`, `link`) VALUES
(1, 'kategori', 'cAdmin/#'),
(2, 'galeri', 'cAdmin/galeriTampil'),
(3, 'resep mama', 'cAdmin/#');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `idGaleri` int(3) NOT NULL AUTO_INCREMENT,
  `idKategori` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(7) NOT NULL,
  `diskon` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `bahan` text NOT NULL,
  PRIMARY KEY (`idGaleri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `idKategori`, `nama`, `harga`, `diskon`, `foto`, `bahan`) VALUES
(1, 1, 'cake kukus stroberi lapis', 150000, 70, 'cake-kukus-stroberi-lapis', '<ol>\r\n	<li>4 butir telur</li>\r\n	<li>125 gram gula pasir</li>\r\n	<li>1/4 sendok teh garam</li>\r\n	<li>1 sendok teh emulsifier (sp/tbm)</li>\r\n	<li>125 gram tepung terigu protein sedang</li>\r\n	<li>1/4 sendok teh baking powder</li>\r\n	<li>75 gram santan kental instan</li>\r\n	<li>3 tetes pewarna merah rose</li>\r\n	<li>1/8 sendok teh essen stroberi</li>\r\n	<li>50 gram selai stroberi</li>\r\n	<li>25 gram strawberi segar, potong kota</li>\r\n	<li>1/2 sendok makan air</li>\r\n</ol>'),
(2, 1, 'lapis kukus tiga roda', 75000, 0, 'lapis-kukus-tiga-roda', '<ol>\r\n	<li>6 butir telur</li>\r\n	<li>120 gram gula pasir</li>\r\n	<li>1 sendok makan sp</li>\r\n	<li>75 gram tepung terigu protein sedang</li>\r\n	<li>15 gram tepung maizena</li>\r\n	<li>25 gram margarin, dilelehka</li>\r\n	<li>25 gram susu cair</li>\r\n	<li>1/4 sendok teh garam</li>\r\n	<li>1 tetes warna merah muda</li>\r\n	<li>1 tetes warna hijau</li>\r\n	<li>1/8 sendok teh cokelat pasta</li>\r\n	<li>3 butir telur</li>\r\n	<li>60 gram gula pasir</li>\r\n	<li>1 sendok teh sp</li>\r\n	<li>45 gram tepung terigu protein sedang</li>\r\n	<li>25 gram margarin</li>\r\n	<li>1/4 sendok teh vanila</li>\r\n	<li>50 gram selai strawberry untuk olesan</li>\r\n</ol>'),
(3, 1, 'cake keju lapis stroberi', 120000, 0, 'cake-keju-lapis-stroberi', '<ol>\r\n	<li>7 kuning telur</li>\r\n	<li>4 putih telur</li>\r\n	<li>100 gram gula pasir</li>\r\n	<li>1 1/2 sendok teh emulsifier (sp/tbm)</li>\r\n	<li>100 gram tepung terigu protein sedang</li>\r\n	<li>20 gram tepung maizena</li>\r\n	<li>10 gram susu bubuk</li>\r\n	<li>50 gram margarin, dilelehka</li>\r\n	<li>100 ml susu cair</li>\r\n	<li>3 lembar keju lembaran, dipotong-poton</li>\r\n	<li>100 gram stroberi segar, dicincang kasa</li>\r\n	<li>50 gram selai stroberi</li>\r\n	<li>100 gram krim bubuk</li>\r\n	<li>200 ml air es</li>\r\n</ol>'),
(4, 1, 'cake kukus vanila stroberi', 140000, 30, 'cake-kukus-vanila-stroberi', '<ol>\r\n	<li>200 gr putih telur</li>\r\n	<li>2 butir telur</li>\r\n	<li>1/2 sdm emulsifier</li>\r\n	<li>1/4 sdt garam</li>\r\n	<li>120 gr gula pasir</li>\r\n	<li>1 sdm santan kental instan</li>\r\n	<li>150 gr tepung terigu protein rendah</li>\r\n	<li>1/4 sdt baking powder</li>\r\n	<li>60 gr margarin, dilelehkan</li>\r\n	<li>1/2 sdt pasta vanila</li>\r\n	<li>1/8 sdt esens stroberi</li>\r\n	<li>10 tetes pewarna merah muda</li>\r\n	<li>30 gr putih telur</li>\r\n	<li>1/4 sdt garam</li>\r\n	<li>150 gr gula tepung</li>\r\n</ol>'),
(5, 3, 'kue nastar bunga isi stroberi', 80000, 0, 'kue-nastar-bunga-isi-stroberi', '<ol>\r\n	<li>200 gram Margarin</li>\r\n	<li>200 gram Mentega</li>\r\n	<li>150 gram Gula halus</li>\r\n	<li>1/2 sdt Garam halus</li>\r\n	<li>2 btr Kuning telur</li>\r\n	<li>500 gram Tepung terigu rendah protein</li>\r\n	<li>2 sdm Tepung maizena</li>\r\n	<li>30 gram Susu bubuk</li>\r\n	<li>100 gram Selai Strawberry</li>\r\n	<li>3 btr Kuning telur</li>\r\n	<li>1 sdt Gula halus</li>\r\n</ol>'),
(6, 2, 'kue kering stroberi bentuk hati', 175000, 20, 'kue-kering-stroberi-bentuk-hati', '<ol>\r\n	<li>100 gram gula halus</li>\r\n	<li>125 gram mentega</li>\r\n	<li>1 butir kuning telur</li>\r\n	<li>200 gram tepung terigu</li>\r\n	<li>25 gram susu bubuk</li>\r\n	<li>50 gram selai stroberi, tiriskan</li>\r\n	<li>1 sendok teh mentega untuk olesan loyang</li>\r\n</ol>'),
(7, 1, 'bronis kukus coklat stroberi', 30000, 0, 'bronis-kukus-coklat-stroberi', '<ol>\r\n	<li>100 gram coklat bubuk</li>\r\n	<li>50 gram coklat hitam atau dark cooking chocolate</li>\r\n	<li>100 gram coklat yang diparut (sebagai topping)</li>\r\n	<li>6 butir telur ayam</li>\r\n	<li>250 gram gula pasir</li>\r\n	<li>1 sendok teh pengemulsi atau baking powder</li>\r\n	<li>1/4 sendok teh garam</li>\r\n	<li>130 gram terigu yang telah di saring dan telah diayak yang dicampur dengan bubuk coklat (usahakan menggunakan terigu dengan kualitas baik)</li>\r\n	<li>100 gram mentega atau margarin</li>\r\n	<li>75 gram butter cream sebagai penghias</li>\r\n	<li>Buah strawberry secukupnya sebagai penghias.</li>\r\n</ol>'),
(8, 5, 'kue ultah stroberi', 178000, 10, 'kue-ultah-stroberi', ''),
(9, 1, 'kue tart coklat stroberi', 98000, 0, 'kue-tart-coklat-stroberi', ''),
(10, 1, 'kue coklat pisang almon', 120000, 0, 'kue-coklat-pisang-almon', ''),
(11, 5, 'kue ultah pink stroberi', 250000, 0, 'kue-ultah-pink-stroberi', ''),
(12, 4, 'kue pie stroberi', 70000, 0, 'kue-pie-stroberi', ''),
(13, 4, 'pie double delight', 300000, 0, 'pie-double-delight', ''),
(14, 4, 'pie almon stroberi', 80000, 0, 'pie-almon-stroberi', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idKategori` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  PRIMARY KEY (`idKategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `nama`) VALUES
(1, 'kue kukus'),
(2, 'kue kering'),
(3, 'kue nastar'),
(4, 'kue pie'),
(5, 'kue ulang tahun');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idKomentar` int(5) NOT NULL AUTO_INCREMENT,
  `idResep` int(5) NOT NULL,
  `idUser` int(3) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`idKomentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idKomentar`, `idResep`, `idUser`, `tanggal`, `nama`, `email`, `komentar`) VALUES
(1, 1, 0, '2014-09-05 21:11:00', 'omrobbie', 'omrobbie@hitman.com', 'Resep ini berguna sekali.. Terimakasih karna telah memposting resep yang bagus. Tetap berkarya.. Salam kenal!'),
(2, 1, 1, '2014-09-07 14:23:00', 'mama ratih', 'mamaratih@mamabakery.com', 'Terima kasih. Semoga dapat menambah menu kreasi anda.'),
(3, 2, 0, '2014-09-09 00:00:00', 'omrobbie', 'omrobbie@hitman.com', 'teaser!');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `idResep` int(5) NOT NULL AUTO_INCREMENT,
  `idUser` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `kunjungan` int(3) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`idResep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`idResep`, `idUser`, `tanggal`, `judul`, `isi`, `kunjungan`, `foto`) VALUES
(1, 1, '2014-07-18', 'cake kukus stroberi lapis', '<p>Teksturnya yang lembut dengan aroma segar stroberi dapat Anda nikmati dalam sajian yang istimewa ini. Untuk Anda yang sedang belajar membuat kue kukus atau bagi anda yang ingin menambah menu sajian anda, berikut ini adalah resep <strong>kue kukus stroberi lapis</strong> yang dapat Anda coba dengan bahan-bahan yang mudah didapat beserta cara membuatnya.</p>\r\n<p>\r\n	<strong>Bahan-bahan :</strong>\r\n	<ol>\r\n		<li>4 butir telur</li>\r\n		<li>125 gram gula pasir</li>\r\n		<li>1/4 sendok teh garam</li>\r\n		<li>1 sendok teh emulsifier (sp/tbm)</li>\r\n		<li>125 gram tepung terigu protein sedang</li>\r\n		<li>1/4 sendok teh baking powder</li>\r\n	</ol>\r\n</p>\r\n<p>\r\n	<strong>Cara membuat :</strong>\r\n	<ol>\r\n		<li>Selai, campur selai selai stroberi, stroberi segar, dan air. Masak sambil diaduk hingga agak kental dan strawberry sedikit layu. Dinginkan. Sisihkan.</li>\r\n		<li>Kocok telur, gula pasir, garam, dan emulsifier sampai mengembang. Masukkan tepung terigu dan baking powder sambil diayak dan diaduk perlahan bergantian dengan santan kental instan.</li>\r\n		<li>Bagi 3 bagian. Dua bagian tambahkan pewarna merah rose dan essen strawberi. Aduk rata.</li>\r\n		<li>Sisanya adonan tambahkan selai. Aduk asal semburat.</li>\r\n		<li>Tuang adonan satu bagian adonan merah muda di loyang loaf 24x10x7 cm yang dialas kertas roti. Kukus 5 menit dengan api sedang. Tuang satu bagian adonan putih dengan selai. Kukus 5 menit.</li>\r\n		<li>Tuang sisa adonan merah muda. Kukus 15 menit sampai matang.</li>\r\n	</ol>\r\n</p>', 83, 'cake-kukus-stroberi-lapis'),
(2, 1, '2014-09-15', 'lapis kukus tiga roda', '<p>lapis kukus tiga roda</>', 12, 'lapis-kukus-tiga-roda');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
  `idTentang` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `foto` varchar(10) NOT NULL,
  PRIMARY KEY (`idTentang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`idTentang`, `isi`, `foto`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'team.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`) VALUES
(1, 'mama ratih');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
