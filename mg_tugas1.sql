-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:35 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mg_tugas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konten`
--

CREATE TABLE `tbl_konten` (
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konten`
--

INSERT INTO `tbl_konten` (`konten`) VALUES
('<p><span style="font-family:times new roman,times,serif"><span style="font-size:26px">aaaaaaaaaaaaaaaaaaaaaaaaaaa</span></span></p>\r\n\r\n<p><span style="font-family:times new roman,times,serif"><span style="font-size:26px">aaaaaaaaaaaaaaaaaaaaaaaaaaa</span></span></p>\r\n\r\n<p><span style="font-family:times new roman,times,serif"><span style="font-size:26px">aaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></span></p>\r\n\r\n<p><span style="font-family:times new roman,times,serif"><span style="font-size:26px">aaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></span></p>\r\n\r\n<p><span style="font-family:times new roman,times,serif"><span style="font-size:26px">aaaaaaaaaaaaaaaaaaaaaaaaaaa</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `status`, `email`, `telp`, `jabatan`, `foto`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', '', '', '', ''),
(1234, 'saputra', '202cb962ac59075b964b07152d234b70', 'admin', '', '', '', ''),
(1248, 'asd', '202cb962ac59075b964b07152d234b70', 'pengguna', 'asd', '342', '', ''),
(1249, 'hardiii', '202cb962ac59075b964b07152d234b70', 'pengguna', 'hardiii', '123', '', ''),
(1250, 'saputraa', '202cb962ac59075b964b07152d234b70', 'pengguna', 'saputraa', '123', '', ''),
(1252, 'Hardi Saputra', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna', 'Hardi Saputra', '081315408748', '', ''),
(1253, 'saputra hardi', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna', 'saputra hardi', '081315408748', '', ''),
(1254, 'Hardi S', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna', 'Hardi S', '081315408748', '', ''),
(121725222, 'vera', '202cb962ac59075b964b07152d234b70', 'pengguna', 'hardisaputra97@gmail.com', '081284633083', 'kepala sekolah', '1234.jpg'),
(121725223, 'widyawati', '202cb962ac59075b964b07152d234b70', 'pengguna', 'widyawati', '123', '', ''),
(121725224, 'abc', '202cb962ac59075b964b07152d234b70', 'pengguna', 'abc', '123', '', ''),
(121725225, 'mnb', '62cd43b670f7e4ec902b5c7acb4d33d5', 'pengguna', 'mnb', 'mnb', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121725226;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
