-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 08:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bor`
--

CREATE TABLE `bor` (
  `id_bor` int(11) NOT NULL,
  `start_bor` timestamp NULL DEFAULT NULL,
  `stop_bor` timestamp NULL DEFAULT NULL,
  `id_karyawanB` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bor`
--

INSERT INTO `bor` (`id_bor`, `start_bor`, `stop_bor`, `id_karyawanB`, `no_invoice`) VALUES
(1, '2021-08-17 14:48:10', '2021-08-17 14:48:13', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:12:54', '2021-08-17 15:12:57', 3, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `ctk_jalur_atas`
--

CREATE TABLE `ctk_jalur_atas` (
  `id_ctk_atas` int(11) NOT NULL,
  `start_ctk_atas` timestamp NULL DEFAULT NULL,
  `stop_ctk_atas` timestamp NULL DEFAULT NULL,
  `id_karyawanCA` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctk_jalur_atas`
--

INSERT INTO `ctk_jalur_atas` (`id_ctk_atas`, `start_ctk_atas`, `stop_ctk_atas`, `id_karyawanCA`, `no_invoice`) VALUES
(1, '2021-08-17 14:11:57', '2021-08-17 14:12:03', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:11:49', '2021-08-17 15:11:53', 6, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `ctk_jalur_bawah`
--

CREATE TABLE `ctk_jalur_bawah` (
  `id_ctk_bawah` int(11) NOT NULL,
  `start_ctk_bawah` timestamp NULL DEFAULT NULL,
  `stop_ctk_bawah` timestamp NULL DEFAULT NULL,
  `id_karyawanCB` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctk_jalur_bawah`
--

INSERT INTO `ctk_jalur_bawah` (`id_ctk_bawah`, `start_ctk_bawah`, `stop_ctk_bawah`, `id_karyawanCB`, `no_invoice`) VALUES
(1, '2021-08-17 14:05:51', '2021-08-17 14:05:56', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:11:30', '2021-08-17 15:11:34', 7, 'TOKPED123890'),
(3, '2021-08-18 04:29:52', '2021-08-18 04:29:53', 7, 'BUKALAPAK989898');

-- --------------------------------------------------------

--
-- Table structure for table `finishing`
--

CREATE TABLE `finishing` (
  `id_finishing` int(11) NOT NULL,
  `start_finishing` timestamp NULL DEFAULT NULL,
  `stop_finishing` timestamp NULL DEFAULT NULL,
  `id_karyawanF` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finishing`
--

INSERT INTO `finishing` (`id_finishing`, `start_finishing`, `stop_finishing`, `id_karyawanF`, `no_invoice`) VALUES
(1, '2021-08-17 14:56:40', '2021-08-17 14:56:44', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:13:29', '2021-08-17 15:13:31', 2, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`) VALUES
(1, 'Tester'),
(2, 'Rizki'),
(3, 'Alif'),
(4, 'Ilham'),
(5, 'Jajang'),
(6, 'RIzal'),
(7, 'Tria'),
(8, 'Nivha'),
(9, 'Alma');

-- --------------------------------------------------------

--
-- Table structure for table `masking_atas`
--

CREATE TABLE `masking_atas` (
  `id_masking_atas` int(11) NOT NULL,
  `start_masking_atas` timestamp NULL DEFAULT NULL,
  `stop_masking_atas` timestamp NULL DEFAULT NULL,
  `id_karyawanMA` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masking_atas`
--

INSERT INTO `masking_atas` (`id_masking_atas`, `start_masking_atas`, `stop_masking_atas`, `id_karyawanMA`, `no_invoice`) VALUES
(1, '2021-08-17 14:34:10', '2021-08-17 14:34:14', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:12:16', '2021-08-17 15:12:20', 4, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `masking_bawah`
--

CREATE TABLE `masking_bawah` (
  `id_masking_bawah` int(11) NOT NULL,
  `start_masking_bawah` timestamp NULL DEFAULT NULL,
  `stop_masking_bawah` timestamp NULL DEFAULT NULL,
  `id_karyawanMB` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masking_bawah`
--

INSERT INTO `masking_bawah` (`id_masking_bawah`, `start_masking_bawah`, `stop_masking_bawah`, `id_karyawanMB`, `no_invoice`) VALUES
(3, '2021-08-17 14:28:23', '2021-08-17 14:28:25', 1, 'SHOPEE86969123'),
(4, '2021-08-17 15:12:02', '2021-08-17 15:12:05', 5, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `order_masuk`
--

CREATE TABLE `order_masuk` (
  `no_invoice` varchar(50) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `spec_pcb` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_masuk`
--

INSERT INTO `order_masuk` (`no_invoice`, `nama_customer`, `spec_pcb`, `jumlah`, `id_karyawan`, `date`) VALUES
('0', '0', '0', 10, NULL, '2021-08-18 04:32:32'),
('12312341239', 'tester2', 'sadasda', 5, NULL, '2021-08-18 04:37:36'),
('BUKALAPAK989898', 'Farhan', 'kakakakaka', 1, NULL, '2021-08-18 04:32:32'),
('INV123123131', 'tester2', 'jjjjjj', 1, NULL, '2021-08-18 04:33:26'),
('SHOPEE86969123', 'tester', 'Sedang', 20, NULL, '2021-08-18 04:32:32'),
('TOKPED123890', 'Harits', 'sedang', 5, NULL, '2021-08-18 04:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_verified`
--

CREATE TABLE `order_verified` (
  `id_verified` int(11) NOT NULL,
  `start_verif` timestamp NULL DEFAULT NULL,
  `stop_verif` timestamp NULL DEFAULT NULL,
  `id_karyawanV` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_verified`
--

INSERT INTO `order_verified` (`id_verified`, `start_verif`, `stop_verif`, `id_karyawanV`, `no_invoice`) VALUES
(1, '2021-08-13 15:24:28', '2021-08-13 15:24:29', 1, 'SHOPEE86969123'),
(3, '2021-08-13 15:25:02', '2021-08-13 15:25:03', 1, 'SHOPEE86969123'),
(4, '2021-08-13 15:25:48', '2021-08-13 15:25:49', 1, 'SHOPEE86969123'),
(5, '2021-08-17 13:11:57', '2021-08-17 13:11:58', 1, 'SHOPEE86969123'),
(6, '2021-08-17 13:20:30', '2021-08-17 13:20:34', 2, 'SHOPEE86969123'),
(7, '2021-08-17 13:35:58', NULL, 3, 'SHOPEE86969123'),
(25, '2021-08-17 13:52:22', '2021-08-17 13:52:23', 3, 'SHOPEE86969123'),
(26, '2021-08-17 15:10:55', '2021-08-17 15:11:01', 9, 'TOKPED123890'),
(27, '2021-08-18 03:31:35', '2021-08-18 03:31:37', 1, 'TOKPED123890'),
(28, '2021-08-18 04:26:02', '2021-08-18 04:26:13', 1, 'TOKPED123890'),
(29, '2021-08-18 04:29:43', '2021-08-18 04:29:44', 9, 'BUKALAPAK989898'),
(30, '2021-08-18 04:38:53', '2021-08-18 04:38:56', 3, 'BUKALAPAK989898');

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `id_packing` int(11) NOT NULL,
  `start_packing` timestamp NULL DEFAULT NULL,
  `stop_packing` timestamp NULL DEFAULT NULL,
  `id_karyawanPCK` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id_packing`, `start_packing`, `stop_packing`, `id_karyawanPCK`, `no_invoice`) VALUES
(1, '2021-08-17 15:09:22', '2021-08-17 15:09:24', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:13:46', '2021-08-17 15:13:51', 2, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `plating`
--

CREATE TABLE `plating` (
  `id_plating` int(11) NOT NULL,
  `start_plating` timestamp NULL DEFAULT NULL,
  `stop_plating` timestamp NULL DEFAULT NULL,
  `id_karyawanPLT` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plating`
--

INSERT INTO `plating` (`id_plating`, `start_plating`, `stop_plating`, `id_karyawanPLT`, `no_invoice`) VALUES
(1, '2021-08-17 14:52:06', '2021-08-17 14:52:10', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:13:09', '2021-08-17 15:13:12', 2, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `potong_pcb`
--

CREATE TABLE `potong_pcb` (
  `id_potong` int(11) NOT NULL,
  `start_potong` timestamp NULL DEFAULT NULL,
  `stop_potong` timestamp NULL DEFAULT NULL,
  `id_karyawanP` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potong_pcb`
--

INSERT INTO `potong_pcb` (`id_potong`, `start_potong`, `stop_potong`, `id_karyawanP`, `no_invoice`) VALUES
(7, '0000-00-00 00:00:00', '2021-08-17 13:54:10', 3, 'SHOPEE86969123'),
(8, '0000-00-00 00:00:00', '2021-08-17 13:54:10', 6, 'SHOPEE86969123'),
(9, '2021-08-17 13:55:36', '2021-08-17 13:55:42', 1, 'SHOPEE86969123'),
(10, '2021-08-17 15:11:15', '2021-08-17 15:11:20', 8, 'TOKPED123890'),
(11, '2021-08-18 04:29:48', '2021-08-18 04:29:49', 8, 'BUKALAPAK989898');

-- --------------------------------------------------------

--
-- Table structure for table `qc`
--

CREATE TABLE `qc` (
  `id_qc` int(11) NOT NULL,
  `start_qc` timestamp NULL DEFAULT NULL,
  `stop_qc` timestamp NULL DEFAULT NULL,
  `id_karyawanQC` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qc`
--

INSERT INTO `qc` (`id_qc`, `start_qc`, `stop_qc`, `id_karyawanQC`, `no_invoice`) VALUES
(1, '2021-08-17 15:02:23', '2021-08-17 15:02:26', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:13:37', '2021-08-17 15:13:40', 2, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `silkscreen_atas`
--

CREATE TABLE `silkscreen_atas` (
  `id_silk_atas` int(11) NOT NULL,
  `start_silk_atas` timestamp NULL DEFAULT NULL,
  `stop_silk_atas` timestamp NULL DEFAULT NULL,
  `id_karyawanSA` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `silkscreen_atas`
--

INSERT INTO `silkscreen_atas` (`id_silk_atas`, `start_silk_atas`, `stop_silk_atas`, `id_karyawanSA`, `no_invoice`) VALUES
(3, '2021-08-17 14:43:51', '2021-08-17 14:43:53', 1, 'SHOPEE86969123'),
(4, '2021-08-17 15:12:45', '2021-08-17 15:12:48', 3, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `silkscreen_bawah`
--

CREATE TABLE `silkscreen_bawah` (
  `id_silk_bawah` int(11) NOT NULL,
  `start_silk_bawah` timestamp NULL DEFAULT NULL,
  `stop_silk_bawah` timestamp NULL DEFAULT NULL,
  `id_karyawanSB` int(11) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `silkscreen_bawah`
--

INSERT INTO `silkscreen_bawah` (`id_silk_bawah`, `start_silk_bawah`, `stop_silk_bawah`, `id_karyawanSB`, `no_invoice`) VALUES
(1, '2021-08-17 14:38:42', '2021-08-17 14:38:46', 1, 'SHOPEE86969123'),
(2, '2021-08-17 15:12:32', '2021-08-17 15:12:37', 3, 'TOKPED123890');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bor`
--
ALTER TABLE `bor`
  ADD PRIMARY KEY (`id_bor`),
  ADD KEY `FK_bor_order_masuk` (`no_invoice`),
  ADD KEY `FK_bor_karyawan` (`id_karyawanB`);

--
-- Indexes for table `ctk_jalur_atas`
--
ALTER TABLE `ctk_jalur_atas`
  ADD PRIMARY KEY (`id_ctk_atas`),
  ADD KEY `FK_ctk_jalur_atas_order_masuk` (`no_invoice`),
  ADD KEY `FK_ctk_jalur_atas_karyawan` (`id_karyawanCA`);

--
-- Indexes for table `ctk_jalur_bawah`
--
ALTER TABLE `ctk_jalur_bawah`
  ADD PRIMARY KEY (`id_ctk_bawah`),
  ADD KEY `FK_ctk_jalur_bawah_order_masuk` (`no_invoice`),
  ADD KEY `FK_ctk_jalur_bawah_karyawan` (`id_karyawanCB`);

--
-- Indexes for table `finishing`
--
ALTER TABLE `finishing`
  ADD PRIMARY KEY (`id_finishing`),
  ADD KEY `FK_finishing_order_masuk` (`no_invoice`),
  ADD KEY `FK_finishing_karyawan` (`id_karyawanF`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `masking_atas`
--
ALTER TABLE `masking_atas`
  ADD PRIMARY KEY (`id_masking_atas`),
  ADD KEY `FK_masking_atas_order_masuk` (`no_invoice`),
  ADD KEY `FK_masking_atas_karyawan` (`id_karyawanMA`);

--
-- Indexes for table `masking_bawah`
--
ALTER TABLE `masking_bawah`
  ADD PRIMARY KEY (`id_masking_bawah`),
  ADD KEY `FK_masking_bawah_order_masuk` (`no_invoice`),
  ADD KEY `FK_masking_bawah_karyawan` (`id_karyawanMB`);

--
-- Indexes for table `order_masuk`
--
ALTER TABLE `order_masuk`
  ADD PRIMARY KEY (`no_invoice`),
  ADD KEY `FK_order_masuk_karyawan` (`id_karyawan`);

--
-- Indexes for table `order_verified`
--
ALTER TABLE `order_verified`
  ADD PRIMARY KEY (`id_verified`),
  ADD KEY `FK_order_verified_order_masuk` (`no_invoice`),
  ADD KEY `FK_order_verified_karyawan` (`id_karyawanV`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`id_packing`),
  ADD KEY `FK_packing_order_masuk` (`no_invoice`),
  ADD KEY `FK_packing_karyawan` (`id_karyawanPCK`);

--
-- Indexes for table `plating`
--
ALTER TABLE `plating`
  ADD PRIMARY KEY (`id_plating`),
  ADD KEY `FK_plating_order_masuk` (`no_invoice`),
  ADD KEY `FK_plating_karyawan` (`id_karyawanPLT`);

--
-- Indexes for table `potong_pcb`
--
ALTER TABLE `potong_pcb`
  ADD PRIMARY KEY (`id_potong`),
  ADD KEY `FK_potong_pcb_order_masuk` (`no_invoice`),
  ADD KEY `FK_potong_pcb_karyawan` (`id_karyawanP`);

--
-- Indexes for table `qc`
--
ALTER TABLE `qc`
  ADD PRIMARY KEY (`id_qc`),
  ADD KEY `FK_qc_order_masuk` (`no_invoice`),
  ADD KEY `FK_qc_karyawan` (`id_karyawanQC`);

--
-- Indexes for table `silkscreen_atas`
--
ALTER TABLE `silkscreen_atas`
  ADD PRIMARY KEY (`id_silk_atas`),
  ADD KEY `FK_silkscreen_atas_order_masuk` (`no_invoice`),
  ADD KEY `FK_silkscreen_atas_karyawan` (`id_karyawanSA`);

--
-- Indexes for table `silkscreen_bawah`
--
ALTER TABLE `silkscreen_bawah`
  ADD PRIMARY KEY (`id_silk_bawah`),
  ADD KEY `FK_silkscreen_bawah_order_masuk` (`no_invoice`),
  ADD KEY `FK_silkscreen_bawah_karyawan` (`id_karyawanSB`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bor`
--
ALTER TABLE `bor`
  MODIFY `id_bor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ctk_jalur_atas`
--
ALTER TABLE `ctk_jalur_atas`
  MODIFY `id_ctk_atas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ctk_jalur_bawah`
--
ALTER TABLE `ctk_jalur_bawah`
  MODIFY `id_ctk_bawah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `finishing`
--
ALTER TABLE `finishing`
  MODIFY `id_finishing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `masking_atas`
--
ALTER TABLE `masking_atas`
  MODIFY `id_masking_atas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masking_bawah`
--
ALTER TABLE `masking_bawah`
  MODIFY `id_masking_bawah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_verified`
--
ALTER TABLE `order_verified`
  MODIFY `id_verified` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id_packing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plating`
--
ALTER TABLE `plating`
  MODIFY `id_plating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potong_pcb`
--
ALTER TABLE `potong_pcb`
  MODIFY `id_potong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qc`
--
ALTER TABLE `qc`
  MODIFY `id_qc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `silkscreen_atas`
--
ALTER TABLE `silkscreen_atas`
  MODIFY `id_silk_atas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `silkscreen_bawah`
--
ALTER TABLE `silkscreen_bawah`
  MODIFY `id_silk_bawah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bor`
--
ALTER TABLE `bor`
  ADD CONSTRAINT `FK_bor_karyawan` FOREIGN KEY (`id_karyawanB`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_bor_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `ctk_jalur_atas`
--
ALTER TABLE `ctk_jalur_atas`
  ADD CONSTRAINT `FK_ctk_jalur_atas_karyawan` FOREIGN KEY (`id_karyawanCA`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_ctk_jalur_atas_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `ctk_jalur_bawah`
--
ALTER TABLE `ctk_jalur_bawah`
  ADD CONSTRAINT `FK_ctk_jalur_bawah_karyawan` FOREIGN KEY (`id_karyawanCB`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_ctk_jalur_bawah_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `finishing`
--
ALTER TABLE `finishing`
  ADD CONSTRAINT `FK_finishing_karyawan` FOREIGN KEY (`id_karyawanF`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_finishing_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `masking_atas`
--
ALTER TABLE `masking_atas`
  ADD CONSTRAINT `FK_masking_atas_karyawan` FOREIGN KEY (`id_karyawanMA`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_masking_atas_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `masking_bawah`
--
ALTER TABLE `masking_bawah`
  ADD CONSTRAINT `FK_masking_bawah_karyawan` FOREIGN KEY (`id_karyawanMB`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_masking_bawah_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `order_masuk`
--
ALTER TABLE `order_masuk`
  ADD CONSTRAINT `FK_order_masuk_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Constraints for table `order_verified`
--
ALTER TABLE `order_verified`
  ADD CONSTRAINT `FK_order_verified_karyawan` FOREIGN KEY (`id_karyawanV`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_order_verified_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `packing`
--
ALTER TABLE `packing`
  ADD CONSTRAINT `FK_packing_karyawan` FOREIGN KEY (`id_karyawanPCK`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_packing_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `plating`
--
ALTER TABLE `plating`
  ADD CONSTRAINT `FK_plating_karyawan` FOREIGN KEY (`id_karyawanPLT`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_plating_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `potong_pcb`
--
ALTER TABLE `potong_pcb`
  ADD CONSTRAINT `FK_potong_pcb_karyawan` FOREIGN KEY (`id_karyawanP`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_potong_pcb_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `qc`
--
ALTER TABLE `qc`
  ADD CONSTRAINT `FK_qc_karyawan` FOREIGN KEY (`id_karyawanQC`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_qc_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `silkscreen_atas`
--
ALTER TABLE `silkscreen_atas`
  ADD CONSTRAINT `FK_silkscreen_atas_karyawan` FOREIGN KEY (`id_karyawanSA`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_silkscreen_atas_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);

--
-- Constraints for table `silkscreen_bawah`
--
ALTER TABLE `silkscreen_bawah`
  ADD CONSTRAINT `FK_silkscreen_bawah_karyawan` FOREIGN KEY (`id_karyawanSB`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `FK_silkscreen_bawah_order_masuk` FOREIGN KEY (`no_invoice`) REFERENCES `order_masuk` (`no_invoice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
