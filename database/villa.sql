-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 10:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villa`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID` varchar(13) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Tarif` varchar(30) NOT NULL,
  `Jenis_Pembayaran` varchar(20) NOT NULL,
  `Status_Pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID`, `Nama`, `Tarif`, `Jenis_Pembayaran`, `Status_Pembayaran`) VALUES
('C0001', 'Ryad', '1800000', 'Cash', 'lunas'),
('C0003', 'Indro', '850000', 'Cash', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `ID` varchar(13) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `JK` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanggal_masuk` varchar(30) NOT NULL,
  `Durasi` varchar(20) NOT NULL,
  `Jenis_Kamar` varchar(20) NOT NULL,
  `Tarif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`ID`, `Nama`, `JK`, `alamat`, `tanggal_masuk`, `Durasi`, `Jenis_Kamar`, `Tarif`) VALUES
('C0001', 'Ryad', 'Laki - Laki', 'Padalarang', 'Jul 5, 2022', '3', 'Sedang', '1800000'),
('C0003', 'Indro', 'Laki - Laki', 'Banjaran', 'Jul 5, 2022', '1', 'Besar', '850000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
