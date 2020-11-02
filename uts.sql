-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 06:11 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, 'nins.jpg', 'About MeTes', 'Kelas satu berlalu dan lanjut kelas dua. Saat kelas dua SMA itu merupakan masa terseru pada jenjang SMA. Kebetulan saya memiliki lingkungan pertemanan yang baik karena kami saat itu terpikir untuk membuat sesuatu sebelum lulus. Saya membicarakan acara tersebut dengan teman-teman saya yang berbeda kelas dengan saya. Kami sepakat untuk membuat acara itu walaupun resiko ditolak sekolah sangat tinggi.Awal kami membuat panitia hanya dua belas orang saja yang berposisi sebagai ketua setiap divisi. Saat ingin mengajukan proposal kesekolah untuk pertama kali kami langsung ditolak mentah-mentah dengan seribu alasan. Namun kami tetap ingin menjalankan acara tersebut dan tetap mencari panitia dari angkatan yang lebih muda. Walaupun acara kami belum disetujui oleh pihak sekolah tetapi kami tetap yakin kalau acara kami akan berjalan lancar. Saat semua divisi sudah terisi oleh panitia kami kembali menyerahkan proposal kepada pihak sekolah namun pihak sekolah masih tidak mau menerima karena dengan alesan biaya. Saya dan para ketua panitia mendesak pihak sekolah agar segera menyetujui acara kami karena tanpa persetujuan dari sekolah kami tidak bisa mencari sponsor untuk acara kami. Tetapi pihak sekolah tetap tidak mau menyutujui acara kami sampai akhirnya sekolah meminta tenggat waktu pengumpulan biaya selama tiga bulan. Kamipun menyetujui tenggat waktu tersebut. Tapi kami juga meminta sekolah untuk memperbaiki lapangan sekolah kami karena keadaannya sudah tidak layak untuk dijadikan lapangan perlombaan.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `isi`) VALUES
(1, 'nino', 'ragilgalanino@gmail.com', 'test'),
(2, 'af', 'nino@gmail.com', 'sadsa'),
(3, 'nino', 'nino@gmail.com', 'sacACW'),
(4, 'ashiap', 'nino@gmail.com', 'cobaa');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gambar` text NOT NULL,
  `id_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gambar`, `id_gambar`) VALUES
('nino.jpg\r\n', 4),
('gb1.jpg', 8),
('gbr2.jpg', 9),
('gbr3.jpg', 10),
('gbr4.jpg', 11),
('gbr5.jpg', 12),
('gbr6.jpg', 13),
('gbr7.jpg', 14),
('gbr8.jpg', 15),
('gbr9.jpg', 16),
('gbr10.jpg', 17),
('gbr11.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `subjudul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `gambar`, `judul`, `subjudul`) VALUES
(1, 'nino.jpg', 'Portofolio Nino Arsyad', 'Selamat Datang di');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `subjudul` varchar(50) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `id_porto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`gambar`, `judul`, `subjudul`, `isi`, `id_porto`) VALUES
('forka.jpg', 'Forka Fest', 'Tahun 2018', 'Acara prodi yang banyak drama', 2),
('nino.jpg', 'Moonzer Cup', 'Tahun 2018', 'Udah gak demam panggung lagi soalnya gak terlalu rame', 4),
('fusion.jpg', 'Fusion Cup 2017', 'Tahun 2017', 'Ini merupakan pengalaman pertama saya menjalankan acara', 5),
('juara.jpg', 'Juara Futsal', 'Tahun 2018', 'Juara futsal yang sangat dramatis ashiap', 7),
('logo.jpg', 'Tongkrongin', 'Tahun 2019', 'Aplikasi mobile pertama saya', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_porto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_porto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
