-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 03:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nyumbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hardi`
--

CREATE TABLE `hardi` (
  `id_infaq` int(5) NOT NULL,
  `namaa` varchar(20) NOT NULL,
  `bank` enum('BCA SYARIAH','BNI SYARIAH','BRI SYARIAH','BNI SYARIAH') NOT NULL,
  `nilai_infaq` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lembaga` enum('Dompet Dhuafa','BAZNAS','Rumah Yatim','Aksi Cepat Tanggap') NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardi`
--

INSERT INTO `hardi` (`id_infaq`, `namaa`, `bank`, `nilai_infaq`, `nama`, `lembaga`, `gambar`) VALUES
(151, 'hardi', 'BNI SYARIAH', '100000', 'hardi', 'BAZNAS', 'gambar1558617928.jpg'),
(152, 'hardi', 'BNI SYARIAH', '10000000', 'saputra', 'BAZNAS', 'gambar1558617951.jpeg'),
(160, 'saputra', 'BCA SYARIAH', '99999999', 'Hamba Allah', 'Aksi Cepat Tanggap', 'gambar1558618813.jpg'),
(161, 'saputra', 'BNI SYARIAH', '300000', 'aa', 'Dompet Dhuafa', 'gambar1558689731.jpg'),
(162, 'saputra', 'BCA SYARIAH', '100000', 'hardi', 'BAZNAS', 'gambar1558691146.jpg'),
(163, 'hardi', 'BCA SYARIAH', '12121211', 'Sedekah', 'Dompet Dhuafa', 'gambar1566743156.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keseluruhan`
--

CREATE TABLE `keseluruhan` (
  `nis` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sodaqoh`
--

CREATE TABLE `sodaqoh` (
  `kd_sodaqoh` int(5) NOT NULL,
  `namaa` varchar(20) NOT NULL,
  `nama_muzaki` varchar(20) NOT NULL,
  `jumlah_sedekah` varchar(20) NOT NULL,
  `lembaga` enum('laki-laki','perempuan') NOT NULL,
  `bank` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sodaqoh`
--

INSERT INTO `sodaqoh` (`kd_sodaqoh`, `namaa`, `nama_muzaki`, `jumlah_sedekah`, `lembaga`, `bank`, `gambar`, `tanggal_lahir`, `tempat`) VALUES
(85, 'hardi', 'hardi', '123', '', 'BCA SYARIAH', 'gambar1566710611.jpg', '0000-00-00', '');

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
-- Table structure for table `tbl_kritik`
--

CREATE TABLE `tbl_kritik` (
  `kd_kritik` int(5) NOT NULL,
  `kritik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kritik`
--

INSERT INTO `tbl_kritik` (`kd_kritik`, `kritik`) VALUES
(1, 'aaa'),
(2, 'tesss'),
(3, 'lembaga penyalur masih sedikit, semoga kedepan bisa lebih banyak');

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
(121725224, 'abc', '202cb962ac59075b964b07152d234b70', 'pengguna', 'abc', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `proses1` varchar(50) NOT NULL,
  `proses2` varchar(50) NOT NULL,
  `proses3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tanggal`, `nama`, `telp`, `alamat`, `paket`, `proses1`, `proses2`, `proses3`) VALUES
(10, '2020-07-06', 'vera', '14022', '1231231', 'Paket Express 12 jam = Rp.10000', 'akan dikerjakan', 'sedang diproses', ''),
(11, '2020-07-08', 'vera', '08198962475', 'ini alamat', 'Paket Express 12 jam = Rp.10000', 'akan dikerjakan', 'sedang diproses', 'selesai, mohon siapkan uang cash sejumlah nominal'),
(12, '2020-07-15', 'widyawati', '0987654', 'bekasii', 'Paket Express 12 jam = Rp.10000', 'akan dikerjakan', 'sedang diproses', 'selesai, mohon siapkan uang cash sejumlah nominal');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `nama_ustad` varchar(50) NOT NULL,
  `judul_ceramah` varchar(50) NOT NULL,
  `videoo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_ustad`, `judul_ceramah`, `videoo`) VALUES
(1, 'Ustad Adi Hidayat', 'Dahsyatnya Sedekah Dibulan Ramadhan', '12345.mp4'),
(2, 'Ustad Hanan Attaki', 'Tidak Berkurang Harta Karena Sedekah', 'v1.mp4'),
(3, 'Ustad Badrusalam', 'Infaq dan Sedekah terbaik', 'v2.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `zakat_fitrah`
--

CREATE TABLE `zakat_fitrah` (
  `kd_zakat_f` int(5) NOT NULL,
  `namaa` varchar(20) NOT NULL,
  `nama_muzaki` varchar(100) NOT NULL,
  `nilai_zakat` enum('35000') NOT NULL,
  `jumlah` enum('35000','70000','105000','140000') NOT NULL,
  `lembaga` enum('Dompet Dhuafa','BAZNAS','Rumah Yatim','Aksi Cepat Tanggap') NOT NULL,
  `bank` enum('BNI SYARIAH','BCA SYARIAH','BRI SYARIAH','MANDIRI SYARIAH') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakat_fitrah`
--

INSERT INTO `zakat_fitrah` (`kd_zakat_f`, `namaa`, `nama_muzaki`, `nilai_zakat`, `jumlah`, `lembaga`, `bank`, `gambar`) VALUES
(8, 'hardi', 'hardi, saputra', '35000', '70000', 'Dompet Dhuafa', 'BNI SYARIAH', 'gambar1558616761.jpg'),
(9, 'hardi', 'saputra, hardi, saya', '35000', '105000', 'BAZNAS', 'BNI SYARIAH', 'gambar1558616899.jpeg'),
(10, 'hardi', 'hardi', '35000', '35000', 'Rumah Yatim', 'BRI SYARIAH', 'gambar1558616932.jpeg'),
(17, 'saputra', 'sendiri', '35000', '35000', 'Dompet Dhuafa', 'BCA SYARIAH', 'gambar1558617210.jpg'),
(20, 'saputra', 'hardi', '35000', '35000', 'Dompet Dhuafa', 'BCA SYARIAH', 'gambar1558688568.jpg'),
(22, 'saputra', 'hardi', '35000', '105000', 'BAZNAS', 'BNI SYARIAH', 'gambar1558691103.jpeg'),
(24, 'Hardi S', 'saya, adik, ibu, ayah', '35000', '140000', 'Dompet Dhuafa', 'BRI SYARIAH', 'gambar1576466284.jpg'),
(25, 'hardi', 'saya, anda, saputra, hardi', '35000', '35000', 'Dompet Dhuafa', 'BCA SYARIAH', 'gambar1583417817.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zakat_mal`
--

CREATE TABLE `zakat_mal` (
  `kd_zakat_m` int(3) NOT NULL,
  `namaa` varchar(20) NOT NULL,
  `nama_muzaki` varchar(20) NOT NULL,
  `penghasilan` enum('dibawah 50jt','50-70jt','70-90jt','di atas 100jt') NOT NULL,
  `dikeluarkan` enum('1jt','2jt','3jt','4jt') NOT NULL,
  `lembaga` enum('BAZNAS','Dompet dhuafa','Rumah Zakat','Rumah Yatim') NOT NULL,
  `bank` enum('BNI SYARIAH','BCA SYARIAH','BRI SYARIAH','MANDIRI SYARIAH') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakat_mal`
--

INSERT INTO `zakat_mal` (`kd_zakat_m`, `namaa`, `nama_muzaki`, `penghasilan`, `dikeluarkan`, `lembaga`, `bank`, `gambar`) VALUES
(9, 'hardi', 'saputra', 'di atas 100jt', '4jt', 'BAZNAS', 'BNI SYARIAH', 'gambar1558617485.jpg'),
(10, 'hardi', '1', 'dibawah 50jt', '2jt', 'Dompet dhuafa', 'BCA SYARIAH', 'gambar1583762567.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hardi`
--
ALTER TABLE `hardi`
  ADD PRIMARY KEY (`id_infaq`);

--
-- Indexes for table `keseluruhan`
--
ALTER TABLE `keseluruhan`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `sodaqoh`
--
ALTER TABLE `sodaqoh`
  ADD PRIMARY KEY (`kd_sodaqoh`);

--
-- Indexes for table `tbl_kritik`
--
ALTER TABLE `tbl_kritik`
  ADD PRIMARY KEY (`kd_kritik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `zakat_fitrah`
--
ALTER TABLE `zakat_fitrah`
  ADD PRIMARY KEY (`kd_zakat_f`);

--
-- Indexes for table `zakat_mal`
--
ALTER TABLE `zakat_mal`
  ADD PRIMARY KEY (`kd_zakat_m`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hardi`
--
ALTER TABLE `hardi`
  MODIFY `id_infaq` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `keseluruhan`
--
ALTER TABLE `keseluruhan`
  MODIFY `nis` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sodaqoh`
--
ALTER TABLE `sodaqoh`
  MODIFY `kd_sodaqoh` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `tbl_kritik`
--
ALTER TABLE `tbl_kritik`
  MODIFY `kd_kritik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121725225;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zakat_fitrah`
--
ALTER TABLE `zakat_fitrah`
  MODIFY `kd_zakat_f` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `zakat_mal`
--
ALTER TABLE `zakat_mal`
  MODIFY `kd_zakat_m` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
