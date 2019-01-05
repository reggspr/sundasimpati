-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 10:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsunda`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_pembooking` varchar(80) NOT NULL,
  `no_hp` varchar(90) NOT NULL,
  `no_meja` varchar(50) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `tgl_book` date NOT NULL,
  `status_booking` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_pembooking`, `no_hp`, `no_meja`, `tanggal`, `waktu`, `tgl_book`, `status_booking`) VALUES
(4, 'Regi Permana', '085759902259', '4', '2017-08-09', '12:59', '0000-00-00', 'Batal'),
(5, 'Regi', '085759902259', '2', '2017-08-23', '23:00', '0000-00-00', 'Selesai'),
(6, 'Regi', '085759902259', '4', '2017-08-15', '13:00', '0000-00-00', 'Batal'),
(7, 'Regi', '085759902259', '6', '2017-08-04', '13:05', '2017-08-03', 'Selesai'),
(8, 'ewaed', '085759902259', '4', '2017-08-05', '13:00', '2017-08-03', 'Selesai'),
(9, 'dsad', '085759902259', '5', '2017-08-23', '13:00', '2017-08-05', 'Selesai'),
(10, 'Jaenudin', '085759902259', '4', '2017-08-22', '13:59', '2017-08-06', 'Batal'),
(11, 'Regi', '085759902259', '3', '2017-08-11', '14:12', '2017-08-09', 'Selesai'),
(12, 'Regi', '085759902259', '4', '2017-08-12', '18:12', '2017-08-09', 'belum konfirmasi'),
(13, 'Regi', '085759902259', '1', '2017-09-06', '13:00', '2017-09-04', 'belum konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` int(11) NOT NULL,
  `nama_pemesan` varchar(80) NOT NULL,
  `no_hp` varchar(80) NOT NULL,
  `alamat` text NOT NULL,
  `pesanan` text NOT NULL,
  `total` varchar(200) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `status_delivery` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `nama_pemesan`, `no_hp`, `alamat`, `pesanan`, `total`, `tgl_pesan`, `status_delivery`) VALUES
(1, 'Yandoru', '085759902259', 'Jl. semangka', 'Jus Jeruk 1<br>Rendang sapi 1<br>', '22,000.00', '2017-08-03', 'Selesai'),
(2, 'Reggie', '085759902259', 'Jl', 'Ayam bumbu kelapa 1<br>Rendang sapi 1<br>Jus Jeruk 1<br>', '31,000.00', '2017-08-03', 'Selesai'),
(3, 'reza', '085759902259', 'panembong', 'Jus Jeruk 1<br>', '7,000.00', '2017-08-06', 'Selesai'),
(4, 'Resa', '085759902259', 'jl. jalan', 'Jus Jeruk 1<br>Rendang sapi 6<br>', '97,000.00', '2017-08-09', 'Belum Konfirmasi'),
(5, 'raysa', '085759902259', 'Jl kenangan', 'Rendang sapi 1<br>', '15,000.00', '2017-08-09', 'Belum Konfirmasi'),
(6, 'Regi', '085759902259', 'Jl. raya cugenang', 'Rendang sapi 1<br>', '15,000.00', '2017-08-09', 'Belum Konfirmasi'),
(7, 'Jangka', '085759902259', 'Jl. Anda', 'Ayam bumbu kelapa 1 1<br>', '9,000.00', '2017-09-04', 'Belum Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(80) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `harga_menu` varchar(90) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `gambar`, `jenis`, `harga_menu`, `deskripsi`) VALUES
(10, 'Ayam bumbu kelapa 1', 'http://localhost/sundasimpati//assets/uploads/ayam-goreng-kelapa5.jpg', 'makanan', '9000', 'Ayam Goreng ditambah dengan bumbu kelapa yang gurih sekali'),
(11, 'Rendang sapi', 'http://localhost/sundasimpati//assets/uploads/rendang_sapi.jpg', 'makanan', '15000', 'Rendang sapi dengan bumbu pedas yang sangat menggoda'),
(12, 'Jus Jeruk', 'http://localhost/sundasimpati//assets/uploads/jus_jeruk.jpg', 'minuman', '7000', 'Jus jeruk yang dingin membuat tenggorokan terasa lega'),
(13, 'Jus Alpukat', 'http://localhost/sundasimpati//assets/uploads/jus_alpukat.jpg', 'minuman', '8000', 'Jus alpukat yang segar ditambah dengan susu kental manis coklat'),
(14, 'Semur Jengkol', 'http://localhost/sundasimpati//assets/uploads/jengkol.jpg', 'makanan', '5000', 'Jengkol yang disemur ditambah dengan bumbu pedas yang nikmat'),
(16, 'Ati Ampela', 'http://localhost/sundasimpati//assets/uploads/hati-ampela2.jpg', 'makanan', '7500', 'Ati ampela dengan kecap');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id_delivery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
