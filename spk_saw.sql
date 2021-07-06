-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2014 at 06:14 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL,
  `blokir` varchar(2) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`, `email`, `telp`, `level`, `blokir`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator@gmail.com', '081267771344', 'Admin', 'N', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_hasil`
--

CREATE TABLE IF NOT EXISTS `laporan_hasil` (
  `id_laporan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_mhs` varchar(255) NOT NULL,
  `nilai_ipk` varchar(255) NOT NULL,
  `penghasilan_ortu` varchar(255) NOT NULL,
  `tanggungan_ortu` varchar(255) NOT NULL,
  `usia` int(5) NOT NULL,
  `nilai` float NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `laporan_hasil`
--

INSERT INTO `laporan_hasil` (`id_laporan`, `nama_mhs`, `nilai_ipk`, `penghasilan_ortu`, `tanggungan_ortu`, `usia`, `nilai`, `waktu`) VALUES
(1, 'Roki Aditama', '3.75', 'Rp 2.500.000', '5 Orang', 22, 11, '2014-06-30 14:36:50'),
(2, 'Edo Iqbal', '3.00', 'Rp 3.200.000', '3 Orang', 21, 6.33, '2014-06-30 14:36:50'),
(3, 'Doni Winarso', '3.99', 'Rp 4.000.000', '2 Orang', 24, 3.83, '2014-06-30 14:36:50'),
(4, 'Sherly Venora', '2.90', 'Rp 6.000.000', '7 Orang', 20, 2.08, '2014-06-30 14:36:50'),
(5, 'Randi Komara', '3.85', 'Rp 1.500.000', '2 Orang', 25, 5, '2014-06-30 14:46:56'),
(6, 'Laura Hikmah', '3.10', 'Rp 2.100.000', '3 Orang', 26, 10, '2014-06-30 14:46:56'),
(7, 'Tommy Utama', '3.29', 'Rp 3.000.000', '2 Orang', 23, 4.17, '2014-06-30 14:46:56'),
(8, 'Dewi Senjana', '2.20', 'Rp 4.400.000', '5 Orang', 20, 2.5, '2014-06-30 14:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama_mhs` varchar(255) NOT NULL,
  `nilai_ipk` varchar(255) NOT NULL,
  `penghasilan_ortu` varchar(255) NOT NULL,
  `tanggungan_ortu` varchar(255) NOT NULL,
  `usia` int(5) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mhs`, `nilai_ipk`, `penghasilan_ortu`, `tanggungan_ortu`, `usia`) VALUES
(1, 'Randi Komara', '3.11', 'Rp 1.500.000', '2 Orang', 25),
(2, 'Laura Hikmah', '3.10', 'Rp 2.100.000', '3 Orang', 26),
(3, 'Tommy Utama', '3.29', 'Rp 3.000.000', '2 Orang', 23),
(4, 'Dewi Senjana', '2.20', 'Rp 4.400.000', '5 Orang', 20),
(5, 'Randi Komara 1', '3.11', 'Rp 1.500.000', '2 Orang', 25),
(6, 'Laura Hikmah 1', '3.10', 'Rp 2.100.000', '3 Orang', 26),
(7, 'Tommy Utama 1', '3.29', 'Rp 3.000.000', '2 Orang', 23),
(8, 'Dewi Senjana 1', '2.20', 'Rp 4.400.000', '5 Orang', 20);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE IF NOT EXISTS `nilai_kriteria` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `dari` int(11) NOT NULL,
  `sampai` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_nilai`, `dari`, `sampai`) VALUES
(1, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `statis`
--

CREATE TABLE IF NOT EXISTS `statis` (
  `id_statis` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_statis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `statis`
--

INSERT INTO `statis` (`id_statis`, `judul`, `isi`) VALUES
(1, 'Profile / Tentang saya', 'AHP merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki, menurut Saaty (1993), hirarki didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif. Dengan hirarki, suatu masalah yang kompleks dapat diuraikan ke dalam kelompok-kelompoknya yang kemudian diatur menjadi suatu bentuk hirarki sehingga permasalahan akan tampak lebih terstruktur dan sistematis. '),
(2, 'Selamat datang di halaman utama Sistem Pegambilan Keputusan untuk Beasiswa', 'Analytic Hierarchy Process (AHP) adalah teknik untuk mendukung proses pengambilan keputusan yang bertujuan untuk menentukan pilihan terbaik dari beberapa alternatif yang dapat diambil. AHP dikembangkan oleh Thomas L.Saaty pada tahun 1970-an, dan telah mengalami banyak perbaikan dan pengembangan hingga saat ini. Kelebihan AHP adalah dapat memberikan kerangka yang komprehensif dan rasional dalam menstrukturkan permasalahan pengambilan keputusan. AHP merupakan salah satu metode untuk menyelesaikan masalah Multi Criteria Decision Making (MCDM).\r\n\r\nZimmermann (Kusumadewi dkk, 2006:69) mengemukakan bahwa MCMM adalah suatu metode pengambilan keutusan  untuk menetapkan alternatif terbaik dari sejumlah alternatif berdasarkan beberapa  kriteria tertentu. Kriteria biasanya berupa ukuran-ukuran, aturan-aturan atau standar yang digunakan dalam pengambilan keputusan.\r\n\r\nKenapa AHP ? AHP menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki. Menurut Saaty (1993), hirarki didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif. Dengan hirarki, suatu masalah yang kompleks dapat diuraikan ke dalam kelompok-kelompoknya yang kemudian diatur menjadi suatu bentuk hirarki sehingga permasalahan akan tampak lebih terstruktur dan  sistematis.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'customer',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `aktif`, `id_session`, `alamat_lengkap`) VALUES
('udin', '6bec9c852847242e384a4d5ac0962ba0', 'udin sedunia', 'udin@gmail.com', '0812741234578', 'customer', 'N', '6bec9c852847242e384a4d5ac0962ba0', 'Siteba'),
('roza', '3e48bf11dacddf353350b4e27ca7478f', 'Roza Benniati', 'roza@gmail.com', '081267771344', 'customer', 'Y', '8479c86c7afcb56631104f5ce5d6de62', 'Lubuk Begalung'),
('olivia', '47bc17dc1a2f164967f55325d866c75c', 'hanumm', 'hanum@yahoo.com', '0909090909', 'customer', 'Y', '47bc17dc1a2f164967f55325d866c75c', 'lubeg'),
('zeze', '202cb962ac59075b964b07152d234b70', 'zeze part', 'zeze@yahoo.com', '978786', 'customer', 'N', '202cb962ac59075b964b07152d234b70', 'agjssd'),
('ani', '29d1e2357d7c14db51e885053a58ec67', 'ani sukma', 'ani@yahoo.com', '0987654321', 'customer', 'N', '29d1e2357d7c14db51e885053a58ec67', 'lubeg'),
('poi', 'd6e1c05c8a81c2ae74c7aedea5ec92c1', 'poi kusuma', 'poi@gmail.com', '043239402374', 'customer', 'N', 'd6e1c05c8a81c2ae74c7aedea5ec92c1', 'lubeg'),
('apoi', '14cc708c5974275fb9231acec60200b1', 'apoi sihotang', 'apoi@yahoo.com', '9803947', 'customer', 'Y', '14cc708c5974275fb9231acec60200b1', 'jhkdjshfksjdfk'),
('ari', 'fc292bd7df071858c2d0f955545673c1', 'ari sutomo', 'ari@yahoo.com', '74393287429', 'customer', 'Y', 'fc292bd7df071858c2d0f955545673c1', 'ashdasjdkahdsk'),
('adi', 'c46335eb267e2e1cde5b017acb4cd799', 'adi kurnia', 'adi@yahoo.com', '2429374293', 'customer', 'Y', 'c46335eb267e2e1cde5b017acb4cd799', 'lubeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
