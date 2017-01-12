-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 12:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote_sajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sajak`
--

CREATE TABLE IF NOT EXISTS `kategori_sajak` (
`id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_sajak`
--

INSERT INTO `kategori_sajak` (`id_kategori`, `kategori`) VALUES
(1, 'Sajak Cinta'),
(2, 'Sajak Sindiran'),
(3, 'Sajak Penyesalan');

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuan`
--

CREATE TABLE IF NOT EXISTS `pemberitahuan` (
`id_pemberitahuan` int(11) NOT NULL,
  `isi_pemberitahuan` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id_pemberitahuan`, `isi_pemberitahuan`, `username`, `waktu`) VALUES
(1, 'STIKI Mengirimi anda Pesan', 'fiqih', '2016-12-01 02:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id_pesan` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `judul_pesan` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `username`, `judul_pesan`, `isi_pesan`, `pengirim`, `waktu`) VALUES
(5, 'asdasd@sajak.com', 'apa aja', 'dasdasdsa', 'fiqih', '2016-12-28 12:42:25'),
(7, 'liufiq', 'wawhh', 'gembel24', 'fiqih', '2016-12-28 12:43:32'),
(14, 'fiqih', 'asd', 'alsjclkavj''lJ ;KLJF;AJFN;LKAJFL ANSD; KLFNALDKSFN ADL; NFLDASFM KADNFL ADNFKL ASDNFL NDAFL ANDLK FNAD;KLF NALK;DN FL;AN F;KLAFKLANDF LAND LNASDLKN LKASD FLKJsandlk;JN SKLCJ ANJNLWK CAD C', 'liufiq', '2016-12-28 05:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `sajak`
--

CREATE TABLE IF NOT EXISTS `sajak` (
`id_sajak` int(11) NOT NULL,
  `judul_sajak` varchar(30) NOT NULL,
  `isi_sajak` text NOT NULL,
  `status_sajak` enum('aktif','tidak aktif') NOT NULL DEFAULT 'aktif',
  `id_kategori` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sajak`
--

INSERT INTO `sajak` (`id_sajak`, `judul_sajak`, `isi_sajak`, `status_sajak`, `id_kategori`, `tgl_dibuat`) VALUES
(1, 'Cintaku Yang Di Tinggalkan', 'Berakit rakit kehulu,\r\nberenang renang ketepian,\r\nkamu sama dia udah kepenghulu,\r\naku masih saja kesepian.', 'aktif', 1, '2016-12-18 06:18:36'),
(2, 'Uun yang di terpa erwan', 'angin berhembus di keheningan senja\r\n,bagai ikan dan erwan yang tenggelam,padahal uun ingin bertatap dengannya saja, tetapi ia malah menimbulkan kesan yg kelam', 'aktif', 3, '2016-12-28 03:08:11'),
(3, 'Angin', 'angin membuatnya tetap berangan,menuju arah yang tak menentu,ingin ku tinggalkan kenangan,tapi bayang-bayangmu masih menjadi hantu', 'aktif', 1, '2016-12-28 03:08:11'),
(4, 'Angin Dan Rindu', 'semilir angin yg membuat erwan berangan,bersama rindu di dalam keheningan,ingin Thrias mengulangi kenangan, walaupun hanya berbentuk kodingan', 'aktif', 1, '2016-12-28 03:08:11'),
(5, 'Stiki ataukah Pujangga', 'Stiki tetaplah stiki,hembusan angin mendera sikap yang dingin,sembari ku menanti seseorang di kala senja ,dan aku hanya berdiam diri di tangga ,sembari menikmati indahnya kota malang,jika dirimu ingin menjadi pujangga,kuliahlah di Stiki kampus Elang', 'aktif', 2, '2016-12-28 03:08:11'),
(6, 'Tenggelam', 'Biarkan aku tenggelam bersama ikan-ikan di dasar air agar mereka mengetahui bahwa aku hanyalah manusia biasa yang di penuhi dengan dosa walaupun yang ku ingat hanyalah sepercik asa', 'aktif', 3, '2016-12-28 03:08:11'),
(7, 'Disakiti ', 'berakit-rakit kehulu \r\nberenang-renang ketepian\r\nkamu nyakitin aku melulu ,\r\nbiarkan aku tenggelam dalam kesepian', 'aktif', 3, '2016-12-27 06:14:18'),
(8, 'Aku Si Penakut', 'Aku hanya si penakut,\r\nyang Merangkai sajak-sajak indah dikala senja, agar ketika malam dapat bersembunyi dalam gelapnya.\r\nketika berenang aku tak sanggup berhenti tuk mengenang,\r\nwalaupun aku tenggelam,\r\ndirimu tetaplah menjadi masa laluku yang kelam', 'aktif', 1, '2016-12-28 05:12:14'),
(9, 'Langit Mendung', 'Langit mendung yang datang membuatku tetap tenggelam,\r\nindahnya senja pun mulai menampakan,\r\naku pun letih sehabis berenang,\r\nrindu terbendung oleh masa lalu yang kelam,\r\naku selalu kamu campakkan,\r\nkamu gak tau kalo sebenernya aku masih sayang', 'aktif', 1, '2016-12-28 13:27:20'),
(10, 'Sekali Mendayung', 'Sekali mendayung, dua pulau terlampaui.\r\nSekali tenggelam ,kau tetap masalaluku yang kelam', 'aktif', 3, '2016-12-29 04:12:12'),
(11, 'Gula Dan Pahit', 'Manisnya gula tak lagi terasa,\r\nkarna yang ku kecap hanya pahitnya derita', 'aktif', 3, '2016-12-27 04:10:13'),
(12, 'Rasa yang berdosa', 'diantara rasa pernah bersemayam sepercik asa yang membuatmu merasa berdosa, gengsi yang menjadi saksi akan membuatmu mati ditikam rindumu sendiri, lupa? yg ku ingat hanyalah jawaban gapapa membuatmu diam dan bertapa merasakan kesedihan mendalam seperti erwan yang tenggelam berharap bisa meninggalkan masa lalu yang kelam', 'aktif', 3, '2016-12-28 02:08:11'),
(13, 'Rindu Yang selesai', 'bagai rindu yang selesai dan kembali dengan pertemuan yang telah usai,\r\nberharap untuk di pertemukan,\r\nnamun akhirnya di pisahkan', 'aktif', 1, '2016-12-27 04:15:19'),
(14, 'Hari Senin', 'seperti hari senin dan setumpuk kesibukan yang membuatmu sikapmu semakin dingin', 'aktif', 2, '2016-12-28 10:14:16'),
(15, 'Antara Febri,thrias,leo dan di', 'leo tetap menjadi illuminati,erwan pun terbang ke langit, bagaimana febri membuka hati, sedangkan thrias dan dirta dalam persaingan yang sengit', 'aktif', 2, '2016-12-27 03:10:16'),
(16, 'Cerita atau Quota', 'semoga kamu niat untuk membaca, agar kamu dapat ber cerita, aku tau matamu pasti berkaca-kaca, melihat isi komentar penuh derita dan buang" Quota', 'aktif', 2, '2016-12-27 05:13:17'),
(17, 'Meminang Kekosongan', 'bagai pinang yang di belah dua,seperti aku yang ingin meminang,namun engkau pergi entah kemana', 'aktif', 1, '2017-01-10 09:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE IF NOT EXISTS `status_user` (
`id_status` int(11) NOT NULL,
  `isi_status` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `tgl_status` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`id_status`, `isi_status`, `username`, `tgl_status`) VALUES
(5, 'bagai pucuk merindukan bulan', 'fiqih', '2016-12-24 09:28:18'),
(6, 'aku cinta kamu', 'liufiq', '2017-01-10 10:46:06'),
(7, 'taek', 'liufiq', '2017-01-10 10:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `tentang` text NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '3',
  `status` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `nama`, `tgl_lahir`, `alamat`, `foto`, `tentang`, `votes`, `status`) VALUES
('contoh', 'contoh', 'contoh@contoh.com', 'contoh user', '0000-00-00', 'contoh nomor contoh kabupaten contoh', 'default.jpg', '', 3, 'user'),
('fiqih', 'matamua', 'liufiq@gmail.com', 'Fiqh Rizki Saputra', '1995-12-07', 'Malang', 'tole_1483796165.jpg', 'Solo Traveller sendiri naik gunung', 999999, 'admin'),
('liufiq', 'gembel24', 'liufiqs@gmail.com', 'Liu Fiq', '1995-10-08', 'Pujangga', 'default.jpg', 'Aku Hanyalah manusia biasa', 1300, 'pujangga');

-- --------------------------------------------------------

--
-- Table structure for table `user_vote_sajak`
--

CREATE TABLE IF NOT EXISTS `user_vote_sajak` (
`id_vote` int(11) NOT NULL,
  `id_sajak` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_vote_sajak`
--

INSERT INTO `user_vote_sajak` (`id_vote`, `id_sajak`, `username`) VALUES
(1, 1, 'fiqih'),
(2, 4, 'fiqih');

-- --------------------------------------------------------

--
-- Table structure for table `vote_kategori_sajak`
--

CREATE TABLE IF NOT EXISTS `vote_kategori_sajak` (
`id_vote_kategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_sajak`
--
ALTER TABLE `kategori_sajak`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
 ADD PRIMARY KEY (`id_pemberitahuan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `sajak`
--
ALTER TABLE `sajak`
 ADD PRIMARY KEY (`id_sajak`);

--
-- Indexes for table `status_user`
--
ALTER TABLE `status_user`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_vote_sajak`
--
ALTER TABLE `user_vote_sajak`
 ADD PRIMARY KEY (`id_vote`);

--
-- Indexes for table `vote_kategori_sajak`
--
ALTER TABLE `vote_kategori_sajak`
 ADD PRIMARY KEY (`id_vote_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_sajak`
--
ALTER TABLE `kategori_sajak`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
MODIFY `id_pemberitahuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sajak`
--
ALTER TABLE `sajak`
MODIFY `id_sajak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `status_user`
--
ALTER TABLE `status_user`
MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_vote_sajak`
--
ALTER TABLE `user_vote_sajak`
MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vote_kategori_sajak`
--
ALTER TABLE `vote_kategori_sajak`
MODIFY `id_vote_kategori` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
