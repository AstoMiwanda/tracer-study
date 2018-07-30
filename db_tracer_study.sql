-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 11:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_alumni`
--

CREATE TABLE `t_alumni` (
  `id_alumni` int(10) NOT NULL,
  `nama_lengkap_alumni` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_ijazah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_alumni`
--

INSERT INTO `t_alumni` (`id_alumni`, `nama_lengkap_alumni`, `tempat_lahir`, `tanggal_lahir`, `angkatan`, `pekerjaan`, `alamat`, `email`, `no_hp`, `no_ijazah`) VALUES
(1, 'Asto Arianto Miwanda', 'Karawang', '2001-01-08', '24 (lulus tahun 2019)', 'CEO Google Microsoft', 'Baseh RT02/01', 'astomiwanda08@gmail.com', '083126923754', 'MBUHP1R4'),
(2, 'asdas', 'kljklj', '2000-04-12', '25', 'asdsa', 'kjlkljlk', 'asd@klj.kll', '90812093', 'KJH123J3'),
(3, 'qwee', 'oiuiouoi', '1999-12-14', '27', 'poipoipoi', 'qweqweqw', 'qweqw@ioi.qwe', '899897', 'H1938H12'),
(4, 'zxczx', 'nmnmnm', '2000-08-18', '26', 'nbmnbm', 'zxczxcz', 'nmbmn@zxcz.mnm', '123799987', 'NB1V2NB3V1'),
(5, 'asto miwanda', 'karawang', '2001-09-01', 'Angkatan 24 (lulus tahun 2019)', 'CEO GOOGLE', 'baseh ya kena', 'astomiwanda@asto.ast', '09129310293', 'h8182813h'),
(6, 'a', 'a', '2000-01-01', '20', 'a', 'aa', 'a@a.a', '90', 'h1'),
(7, 'as', 'kj', '2000-04-15', '20', 'ad', 'ir', 'jr@ff.ss', '900', 'f23f'),
(8, 'kok', 'owkk', '2000-12-10', '20', 'jjkkj', 'kjjkk', 'das@asd.ads', '00990', 'g1231'),
(9, 'qeiqoweio', 'huawhwq', '2000-12-12', '20', 'th', 'qwee', 'dsaasd@asda.ada', '0909', 'd2133'),
(10, 'quoiuu', 'oiuio', '2000-08-09', '20', 'eqweq', 'jfksjdf', 'qweq@asd.asd', '0999', 'f12f3'),
(11, 'asdasduaoisdu', 'qweoqwiejoi', '2000-04-01', '20', 'qweqwe', 'klnninoi', 'qweqw@fdsfs.pok', '90908089', 'f23412');

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `penulis_berita` varchar(50) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `isi_berita` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_berita`
--

INSERT INTO `t_berita` (`id_berita`, `judul_berita`, `penulis_berita`, `tanggal_berita`, `isi_berita`) VALUES
(3, 'Website e ws dadi', 'Asto Dong', '2018-10-07', 'webite ws ddi kye semoga ora nana bug aamiin'),
(5, 'Alhamdulillah jadi', 'asto', '2018-07-10', 'websitenya sebentar lagi jadi'),
(7, 'jajal', 'asto dong', '2018-07-11', 'y mbuh ya mngko jajal sapa sing nulis');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengumuman`
--

CREATE TABLE `t_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `penulis_pengumuman` varchar(50) NOT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `isi_pengumuman` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sekolah`
--

CREATE TABLE `t_sekolah` (
  `id_sekolah` int(10) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `telp_sekolah` varchar(20) NOT NULL,
  `hp_sekolah` varchar(20) NOT NULL,
  `alamat_sekolah` varchar(500) NOT NULL,
  `website_sekolah` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `nama_lengkap_user`) VALUES
(1, 'asto', '81dc9bdb52d04dc20036dbd8313ed055', 'Astroboy'),
(2, 'mbuh sapa', 'f5bb0c8de146c67b44babbf4e6584cc0', 'mbuh yaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_alumni`
--
ALTER TABLE `t_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_alumni`
--
ALTER TABLE `t_alumni`
  MODIFY `id_alumni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  MODIFY `id_sekolah` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
