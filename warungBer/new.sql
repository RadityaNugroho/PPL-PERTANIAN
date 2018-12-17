-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 07:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_penjualan`, `id_produk`, `jumlah`, `total_harga`, `tanggal`) VALUES
(1, 11, 53, 636, '2018-10-20'),
(4, 11, 53, 636, '2018-10-20'),
(5, 13, 54, 6642, '2018-10-22'),
(6, 17, 51, 510000, '2018-10-22'),
(7, 13, 52, 6396, '2018-10-22'),
(8, 13, 9, 1107, '2018-10-23'),
(9, 15, 6, 66000, '2018-10-23'),
(10, 13, 6, 75000, '2018-10-23'),
(11, 11, 6, 66000, '2018-10-23'),
(11, 15, 6, 66000, '2018-10-23'),
(12, 15, 8, 88000, '2018-10-27'),
(14, 13, 7, 87500, '2018-10-27'),
(15, 11, 8, 88000, '2018-10-29'),
(15, 13, 7, 87500, '2018-10-29'),
(16, 20, 9, 99000, '2018-10-29'),
(16, 15, 10, 110000, '2018-10-29'),
(16, 11, 8, 88000, '2018-10-29'),
(17, 17, 8, 88000, '2018-10-29'),
(18, 13, 7, 87500, '2018-11-10'),
(19, 15, 8, 88000, '2018-11-10'),
(20, 11, 10, 110000, '2018-11-10'),
(20, 11, 5, 55000, '2018-11-10'),
(21, 13, 7, 87500, '2018-11-10'),
(22, 20, 6, 66000, '2018-11-10'),
(23, 13, 7, 87500, '2018-11-11'),
(24, 13, 6, 75000, '2018-11-11'),
(25, 11, 7, 77000, '2018-11-11'),
(27, 13, 7, 87500, '2018-11-11'),
(28, 13, 5, 62500, '2018-11-11'),
(29, 17, 7, 77000, '2018-11-11'),
(30, 13, 6, 75000, '2018-11-11'),
(31, 11, 6, 66000, '2018-11-11'),
(32, 11, 7, 77000, '2018-11-11'),
(33, 21, 9, 108000, '2018-11-11'),
(34, 13, 5, 62500, '2018-11-11'),
(34, 13, 7, 87500, '2018-11-11'),
(35, 13, 6, 75000, '2018-11-11'),
(36, 21, 5, 60000, '2018-11-12'),
(37, 13, 9, 112500, '2018-11-12'),
(38, 11, 5, 55000, '2018-11-14'),
(39, 15, 7, 77000, '2018-11-14'),
(39, 13, 6, 75000, '2018-11-14'),
(40, 15, 5, 55000, '2018-11-16'),
(41, 13, 6, 75000, '2018-11-23'),
(42, 11, 7, 77000, '2018-11-23'),
(42, 13, 7, 87500, '2018-11-23'),
(43, 15, 100, 1100000, '2018-11-23'),
(44, 13, 100, 1250000, '2018-11-23'),
(45, 15, 11, 121000, '2018-11-29'),
(46, 13, 6, 75000, '2018-11-29'),
(47, 21, 10, 120000, '2018-11-29'),
(48, 15, 7, 77000, '2018-12-03'),
(49, 13, 7, 87500, '2018-12-03'),
(50, 13, 5, 62500, '2018-12-06'),
(51, 13, 15, 187500, '2018-12-07'),
(51, 15, 30, 330000, '2018-12-07'),
(52, 23, 10, 120000, '2018-12-07'),
(52, 22, 190, 209000, '2018-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `harga_pasar`
--

CREATE TABLE `harga_pasar` (
  `id_harga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `h_pemerintah` double NOT NULL,
  `h_beli` double NOT NULL,
  `h_jual` double NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_pasar`
--

INSERT INTO `harga_pasar` (`id_harga`, `tanggal`, `h_pemerintah`, `h_beli`, `h_jual`, `jenis`) VALUES
(2, '2018-11-02', 10000, 9000, 9500, 'beras');

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id_komplain` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `komplain` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komplain`
--

INSERT INTO `komplain` (`id_komplain`, `id_penjualan`, `id_user`, `no_telp`, `komplain`, `tanggal`) VALUES
(1, 5, 6, '081335887861', 'saya kecewa', '2018-12-06'),
(2, 46, 6, '081335887862', 'aslkdjaposjdaskdj', '2018-12-06'),
(3, 5, 6, '081335887861', 'kurang puas', '2018-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notif` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `notifikasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notif`, `id_user`, `subject`, `notifikasi`, `tanggal`) VALUES
(1, 2, 'saldo', 'saldo anda telah bertambah sebanyak 200000', '0000-00-00'),
(2, 8, 'saldo', 'saldo anda telah bertambah sebanyak 15000', '2018-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga` double NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `nama_produk`, `jumlah_stok`, `harga`, `foto_produk`, `deskripsi`, `status`) VALUES
(11, 2, 'Beras Hitam', -17, 11000, '20102018111450berashitam.jpg', 'Beras organik kini banyak sekali dijumpai di pasar swalayan yang ada di Jakarta. Mulai dari beras Mentik Wangi, Mentik Wangi Susu, dan lain-lain. Beras mentik wangi ini bentuknya bulat mirip dengan pandan wangi. Warnanya sedikit kusam namun memiliki aroma beras yang wangi. Beras organik ini bisa mengontrol gula darah karena kandungan gula nya jauh lebih rendah', 'Terverifikasi'),
(13, 8, 'Beras Menthik Wangi susu', 771, 12500, '20102018111705mentikwangi.jpg', 'Beras organik kini banyak sekali dijumpai di pasar swalayan yang ada di Jakarta. Mulai dari beras Mentik Wangi, Mentik Wangi Susu, dan lain-lain. Beras mentik wangi ini bentuknya bulat mirip dengan pandan wangi. Warnanya sedikit kusam namun memiliki aroma beras yang wangi. Beras organik ini bisa mengontrol gula darah karena kandungan gula nya jauh lebih rendah', 'Terverifikasi'),
(15, 9, 'beras wangi', 855, 11000, '20102018115234mentikwangi.jpg', 'Beras organik kini banyak sekali dijumpai di pasar swalayan yang ada di Jakarta. Mulai dari beras Mentik Wangi, Mentik Wangi Susu, dan lain-lain. Beras mentik wangi ini bentuknya bulat mirip dengan pandan wangi. Warnanya sedikit kusam namun memiliki aroma beras yang wangi. Beras organik ini bisa mengontrol gula darah karena kandungan gula nya jauh lebih rendah', 'Terverifikasi'),
(17, 7, 'beras hitamnyaa', 59, 11000, '22102018085225berashitam.jpg', 'Beras organik kini banyak sekali dijumpai di pasar swalayan yang ada di Jakarta. Mulai dari beras Mentik Wangi, Mentik Wangi Susu, dan lain-lain. Beras mentik wangi ini bentuknya bulat mirip dengan pandan wangi. Warnanya sedikit kusam namun memiliki aroma beras yang wangi. Beras organik ini bisa mengontrol gula darah karena kandungan gula nya jauh lebih rendah', 'Terverifikasi'),
(20, 16, 'beras wangi', 85, 11000, '23102018042509mentikwangi.jpg', 'Beras organik kini banyak sekali dijumpai di pasar swalayan yang ada di Jakarta. Mulai dari beras Mentik Wangi, Mentik Wangi Susu, dan lain-lain. Beras mentik wangi ini bentuknya bulat mirip dengan pandan wangi. Warnanya sedikit kusam namun memiliki aroma beras yang wangi. Beras organik ini bisa mengontrol gula darah karena kandungan gula nya jauh lebih rendah', 'Terverifikasi'),
(21, 7, 'Beras Banyuwangi', 90, 12000, '11112018143220berasmerah.jpg', 'Beras organik kini banyak sekali dijumpai di pasar swalayan yang ada di Jakarta. Mulai dari beras Mentik Wangi, Mentik Wangi Susu, dan lain-lain. Beras mentik wangi ini bentuknya bulat mirip dengan pandan wangi. Warnanya sedikit kusam namun memiliki aroma beras yang wangi. Beras organik ini bisa mengontrol gula darah karena kandungan gula nya jauh lebih rendah', 'Terverifikasi'),
(22, 8, 'beras hitam baru new', 1111, 1100, '06122018154857berashitam.jpg', 'beras hitam wow', 'Terverifikasi'),
(23, 8, 'beras Jember asli', 2324, 12000, '06122018155144mentikwangi.jpg', 'wow mantap nih produk', 'Terverifikasi'),
(24, 8, 'Beras Merah unej', 2000, 12000, '07122018033318berasmerah.jpg', 'beras merah produksi unej', 'Belum Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `saldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `id_user`, `tanggal`, `saldo`) VALUES
(1, 2, '2018-11-30', 20000),
(3, 7, '2018-11-30', 100000),
(4, 8, '2010-00-00', 20181202),
(5, 8, '2018-12-02', 200000),
(6, 8, '2018-12-02', 212314),
(7, 2, '2018-12-02', 3424141);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'belum bayar',
  `bukti_transfer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_user`, `tanggal`, `status`, `bukti_transfer`) VALUES
(1, 3, '2018-10-20', 'Terverifikasi', ''),
(2, 3, '2018-10-20', 'Terverifikasi', ''),
(3, 3, '2018-10-20', 'Terverifikasi', ''),
(4, 3, '2018-10-20', 'Terverifikasi', ''),
(5, 6, '2018-10-22', 'Pesanan Diterima', '1211201817490400a.jpg'),
(6, 3, '2018-10-22', 'Terverifikasi', ''),
(7, 3, '2018-10-22', 'Pesanan Diterima', ''),
(8, 6, '2018-10-23', 'Pesanan Diterima', ''),
(9, 3, '2018-10-23', 'Terverifikasi', ''),
(10, 6, '2018-10-23', 'Pesanan Diterima', ''),
(11, 6, '2018-10-23', 'Terverifikasi', ''),
(12, 6, '2018-10-27', 'Terverifikasi', ''),
(13, 6, '2018-10-27', 'Terverifikasi', ''),
(14, 6, '2018-10-27', 'Dalam Pengiriman', ''),
(15, 6, '2018-10-29', 'Dalam Pengiriman', ''),
(16, 6, '2018-10-29', 'Terverifikasi', '22112018153159bukti.png'),
(17, 6, '2018-10-29', 'Terverifikasi', ''),
(18, 6, '2018-11-10', 'Dalam Pengiriman', NULL),
(19, 6, '2018-11-10', 'Terverifikasi', NULL),
(20, 6, '2018-11-10', 'Terverifikasi', 'bukti.jpg'),
(21, 6, '2018-11-10', 'Terverifikasi', NULL),
(22, 6, '2018-11-10', 'Terverifikasi', NULL),
(23, 6, '2018-11-11', 'Terverifikasi', NULL),
(24, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(25, 6, '2018-11-11', 'Terverifikasi', NULL),
(26, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(27, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(28, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(29, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(30, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(31, 6, '2018-11-11', 'Terverifikasi', NULL),
(32, 6, '2018-11-11', 'Terverifikasi', NULL),
(33, 3, '2018-11-11', 'Belum Terverifikasi', NULL),
(34, 3, '2018-11-11', 'Belum Terverifikasi', NULL),
(35, 6, '2018-11-11', 'Belum Terverifikasi', NULL),
(36, 6, '2018-11-12', 'Belum Terverifikasi', NULL),
(37, 3, '2018-11-12', 'Pesanan Diterima', NULL),
(38, 6, '2018-11-14', 'Belum Terverifikasi', NULL),
(39, 6, '2018-11-14', 'Terverifikasi', NULL),
(40, 17, '2018-11-16', 'Belum Terverifikasi', '16112018144322_1909421263.jpg'),
(41, 6, '2018-11-23', 'Terverifikasi', NULL),
(42, 3, '2018-11-23', 'Pesanan Diterima', '23112018093851bukti.png'),
(43, 3, '2018-11-23', 'Terverifikasi', '23112018094134bukti.png'),
(44, 3, '2018-11-23', 'Pesanan Diterima', '23112018100238bukti.png'),
(45, 6, '2018-11-29', 'Belum Terverifikasi', NULL),
(46, 6, '2018-11-29', 'Pesanan Diterima', NULL),
(47, 18, '2018-11-29', 'Terverifikasi', NULL),
(48, 6, '2018-12-03', 'Belum Terverifikasi', '03122018072926bukti.png'),
(49, 3, '2018-12-03', 'Belum Terverifikasi', NULL),
(50, 6, '2018-12-06', 'Belum Terverifikasi', NULL),
(51, 24, '2018-12-07', 'Belum Terverifikasi', NULL),
(52, 25, '2018-12-07', 'Belum Terverifikasi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `email`, `level`, `no_telepon`, `alamat`, `kecamatan`, `kota`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 1, '0987654321', '', '', ''),
(2, 'fajar', 'fajar', 'fajar', 'fajar@gmail.com', 2, '09876545678', 'Jln. Diponegoro gang 6 A perum indah', 'Thailand', 'Jember utara'),
(3, 'pembeli', 'pembeli', 'pembeli', 'pembeli@gmail.com', 3, '987656733', 'Jln. Halmahera gang 2 no 14', 'Thailand', 'Jember utara'),
(6, 'boni', 'boni', 'boni', 'bonbon2@gmail.com', 3, '08978390660', 'Jln. Halmahera gang 2 no 19', 'Bangau', 'semarang'),
(7, 'billy', 'billy', ' billy', 'testing@testing.com', 2, '08133488917', 'Jln. Halmahera gang 2 no 14', 'Sumbersari 2', 'Jember utara'),
(8, 'ageng', 'ageng', 'ageng', 'situsitu@bondo.com', 2, '088890890', 'Jln. Halmahera gang 2 no 15', 'Thailand', 'burcak'),
(9, 'rizal', 'rizal', 'rizal123', 'rkhisyam54@gmail.com', 2, '08133488901', '', '', ''),
(10, 'refardo', 'dodo', 'dodo', 'dodo@gmail.com', 3, '08133488922', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(11, 'atta', 'asd', 'asd', 'faisol@gmail.com', 2, '08133488912', 'Jln. Halmahera gang 2 no 15', 'Sumbersara', 'Jember'),
(12, 'inul', 'inul', 'tinul', 'rasdkhisyam54@gmail.com', 2, '08133488917', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(13, 'caca', 'sadsad', 'sadsad', 'user@gmail.com', 2, '08133488919', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(14, 'tomo', 'tomo', 'tomo', 'pastiagtumbuhan@gmail.com', 2, '08133488334', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(15, 'komo', 'komo', 'komo', 'pastiagtumbuhan@gmail.com', 2, '08133488334', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(16, 'radit', 'raditya', 'radit', 'radit@gmail.com', 2, '08133488919', 'Jln. Halmahera gang 2 no 15', 'Sumbersari', 'Jember'),
(17, 'Raditya Mulya Nugroho', 'raditya', 'raditya02', 'raditya.mn99@gmail.com', 3, '08133488917', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(18, 'Wahyu Panda Irawan', 'wahib', 'wahib', 'wahib@gmail.com', 3, '08133488912', 'Jln. Diponegoro gang 6 A perum indah', 'Sumbersari', 'Jember'),
(19, 'Wahyu Panda Irawan', 'wahib', 'wahib', 'wahib@gmail.com', 3, '08133488912', 'Jln. Halmahera gang 2 no 14', 'Sumbersari', 'Jember'),
(20, 'paijo', 'boni', '123456', 'rkhisyam54@gmail.com', 2, '08133488917', 'Jln. Halmahera gang 2 no 11', 'Sumbersari', 'Jember'),
(21, 'joko', 'joko', 'joko', 'joko@gmail.com', 2, '081335886871', 'jalan pemuda', 'ambulu', 'semarang'),
(22, 'sarwono', 'wono', 'wono', 'joko2@gmail.com', 2, '081335886879', 'jl. pangeran diponegoro gang 105a', 'ambulu', 'semarang'),
(23, 'uji', 'uji', 'uji', 'rasdkhisyam54@gmail.com', 3, '08133488911', 'Jln. Diponegoro gang 6 A perum indah', 'Sumbersara', 'burcak'),
(24, 'putri', 'putri', 'putri', 'rkhisyam54@gmail.com', 3, '08133488911', 'Jln. Halmahera gang 5 no 90', 'Sumbersari', 'Jember'),
(25, 'fitri', 'fitri123', 'fitri123', 'fitri@gmail.com', 3, '085259997030', 'jln. jawa no 2', 'Sumbersari', 'Jember'),
(26, 'raditya mulyo', 'raditya123456789012345', 'radit', 'raditya65@gmail.com', 3, '08133488912', 'Jln. Halmahera gang 2 no 14', 'Sumbersari 2', 'Jember');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `id_order` (`id_penjualan`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `harga_pasar`
--
ALTER TABLE `harga_pasar`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id_komplain`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga_pasar`
--
ALTER TABLE `harga_pasar`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id_komplain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komplain`
--
ALTER TABLE `komplain`
  ADD CONSTRAINT `komplain_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
