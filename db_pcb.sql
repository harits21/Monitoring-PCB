-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_pcb
CREATE DATABASE IF NOT EXISTS `db_pcb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_pcb`;

-- Dumping structure for table db_pcb.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table db_pcb.bor
CREATE TABLE IF NOT EXISTS `bor` (
  `id_bor` int(11) NOT NULL,
  `start_bor` timestamp NULL DEFAULT NULL,
  `stop_bor` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_bor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.bor: ~0 rows (approximately)
/*!40000 ALTER TABLE `bor` DISABLE KEYS */;
INSERT INTO `bor` (`id_bor`, `start_bor`, `stop_bor`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `bor` ENABLE KEYS */;

-- Dumping structure for table db_pcb.ctk_jalur_bwh
CREATE TABLE IF NOT EXISTS `ctk_jalur_bwh` (
  `id_ctk_bwh` int(11) NOT NULL,
  `start_ctk_bwh` timestamp NULL DEFAULT NULL,
  `stop_ctk_bwh` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ctk_bwh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.ctk_jalur_bwh: ~0 rows (approximately)
/*!40000 ALTER TABLE `ctk_jalur_bwh` DISABLE KEYS */;
INSERT INTO `ctk_jalur_bwh` (`id_ctk_bwh`, `start_ctk_bwh`, `stop_ctk_bwh`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `ctk_jalur_bwh` ENABLE KEYS */;

-- Dumping structure for table db_pcb.ctk_jlr_atas
CREATE TABLE IF NOT EXISTS `ctk_jlr_atas` (
  `id_ctk_atas` int(11) NOT NULL,
  `start_jlr_atas` timestamp NULL DEFAULT NULL,
  `stop_jlr_atas` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ctk_atas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.ctk_jlr_atas: ~0 rows (approximately)
/*!40000 ALTER TABLE `ctk_jlr_atas` DISABLE KEYS */;
INSERT INTO `ctk_jlr_atas` (`id_ctk_atas`, `start_jlr_atas`, `stop_jlr_atas`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `ctk_jlr_atas` ENABLE KEYS */;

-- Dumping structure for table db_pcb.finishing
CREATE TABLE IF NOT EXISTS `finishing` (
  `id_finishing` int(11) NOT NULL,
  `start_finishing` timestamp NULL DEFAULT NULL,
  `stop_finishing` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_finishing`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.finishing: ~0 rows (approximately)
/*!40000 ALTER TABLE `finishing` DISABLE KEYS */;
INSERT INTO `finishing` (`id_finishing`, `start_finishing`, `stop_finishing`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `finishing` ENABLE KEYS */;

-- Dumping structure for table db_pcb.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `no_invoice` varchar(50) DEFAULT NULL,
  `spec_pcb` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.karyawan: ~1 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`id_karyawan`, `nama_customer`, `no_invoice`, `spec_pcb`, `jumlah`, `nama_karyawan`) VALUES
	(1, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table db_pcb.masking_atas
CREATE TABLE IF NOT EXISTS `masking_atas` (
  `id_masking_atas` int(11) NOT NULL,
  `start_masking_atas` timestamp NULL DEFAULT NULL,
  `stop_masking_atas` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_masking_atas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.masking_atas: ~0 rows (approximately)
/*!40000 ALTER TABLE `masking_atas` DISABLE KEYS */;
INSERT INTO `masking_atas` (`id_masking_atas`, `start_masking_atas`, `stop_masking_atas`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `masking_atas` ENABLE KEYS */;

-- Dumping structure for table db_pcb.masking_bwh
CREATE TABLE IF NOT EXISTS `masking_bwh` (
  `id_masking_bwh` int(11) NOT NULL,
  `start_masking_bawah` timestamp NULL DEFAULT NULL,
  `stop_masking_bawah` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_masking_bwh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.masking_bwh: ~0 rows (approximately)
/*!40000 ALTER TABLE `masking_bwh` DISABLE KEYS */;
INSERT INTO `masking_bwh` (`id_masking_bwh`, `start_masking_bawah`, `stop_masking_bawah`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `masking_bwh` ENABLE KEYS */;

-- Dumping structure for table db_pcb.order_masuk
CREATE TABLE IF NOT EXISTS `order_masuk` (
  `no_invoice` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `spec_pcb` varchar(50) NOT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `id_verif` int(11) DEFAULT NULL,
  `id_potong` int(11) DEFAULT NULL,
  `id_silkscreen_bwh` int(11) DEFAULT NULL,
  `id_ctk_bwh` int(11) DEFAULT NULL,
  `id_ctk_atas` int(11) DEFAULT NULL,
  `id_masking_bwh` int(11) DEFAULT NULL,
  `id_masking_atas` int(11) DEFAULT NULL,
  `id_silkscreen_atas` int(11) DEFAULT NULL,
  `id_bor` int(11) DEFAULT NULL,
  `id_plating` int(11) DEFAULT NULL,
  `id_finishing` int(11) DEFAULT NULL,
  `id_qc` int(11) DEFAULT NULL,
  `id_packing` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_invoice`),
  KEY `FK_order_karyawan` (`id_karyawan`),
  KEY `FK_order_order_verfied` (`id_verif`),
  KEY `FK_order_potong_pcb` (`id_potong`),
  KEY `FK_order_silkscreen_bwh` (`id_silkscreen_bwh`),
  KEY `FK_order_ctk_jalur_bwh` (`id_ctk_bwh`),
  KEY `FK_order_ctk_jlr_atas` (`id_ctk_atas`),
  KEY `FK_order_masking_bwh` (`id_masking_bwh`),
  KEY `FK_order_masking_atas` (`id_masking_atas`),
  KEY `FK_order_silkscreen_atas` (`id_silkscreen_atas`),
  KEY `FK_order_bor` (`id_bor`),
  KEY `FK_order_plating` (`id_plating`),
  KEY `FK_order_finishing` (`id_finishing`),
  KEY `FK_order_qc` (`id_qc`),
  KEY `FK_order_packing` (`id_packing`),
  CONSTRAINT `FK_order_bor` FOREIGN KEY (`id_bor`) REFERENCES `bor` (`id_bor`),
  CONSTRAINT `FK_order_ctk_jalur_bwh` FOREIGN KEY (`id_ctk_bwh`) REFERENCES `ctk_jalur_bwh` (`id_ctk_bwh`),
  CONSTRAINT `FK_order_ctk_jlr_atas` FOREIGN KEY (`id_ctk_atas`) REFERENCES `ctk_jlr_atas` (`id_ctk_atas`),
  CONSTRAINT `FK_order_finishing` FOREIGN KEY (`id_finishing`) REFERENCES `finishing` (`id_finishing`),
  CONSTRAINT `FK_order_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  CONSTRAINT `FK_order_masking_atas` FOREIGN KEY (`id_masking_atas`) REFERENCES `masking_atas` (`id_masking_atas`),
  CONSTRAINT `FK_order_masking_bwh` FOREIGN KEY (`id_masking_bwh`) REFERENCES `masking_bwh` (`id_masking_bwh`),
  CONSTRAINT `FK_order_order_verfied` FOREIGN KEY (`id_verif`) REFERENCES `order_verified` (`id_verif`),
  CONSTRAINT `FK_order_packing` FOREIGN KEY (`id_packing`) REFERENCES `packing` (`id_packing`),
  CONSTRAINT `FK_order_plating` FOREIGN KEY (`id_plating`) REFERENCES `plating` (`id_plating`),
  CONSTRAINT `FK_order_potong_pcb` FOREIGN KEY (`id_potong`) REFERENCES `potong_pcb` (`id_potong`),
  CONSTRAINT `FK_order_qc` FOREIGN KEY (`id_qc`) REFERENCES `qc` (`id_qc`),
  CONSTRAINT `FK_order_silkscreen_atas` FOREIGN KEY (`id_silkscreen_atas`) REFERENCES `silkscreen_atas` (`id_silkscreen_atas`),
  CONSTRAINT `FK_order_silkscreen_bwh` FOREIGN KEY (`id_silkscreen_bwh`) REFERENCES `silkscreen_bwh` (`id_silkscreen_bwh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.order_masuk: ~1 rows (approximately)
/*!40000 ALTER TABLE `order_masuk` DISABLE KEYS */;
INSERT INTO `order_masuk` (`no_invoice`, `nama_customer`, `spec_pcb`, `id_karyawan`, `jumlah`, `id_verif`, `id_potong`, `id_silkscreen_bwh`, `id_ctk_bwh`, `id_ctk_atas`, `id_masking_bwh`, `id_masking_atas`, `id_silkscreen_atas`, `id_bor`, `id_plating`, `id_finishing`, `id_qc`, `id_packing`) VALUES
	(1, 'budi', 'gg', 1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
/*!40000 ALTER TABLE `order_masuk` ENABLE KEYS */;

-- Dumping structure for table db_pcb.order_verified
CREATE TABLE IF NOT EXISTS `order_verified` (
  `id_verif` int(11) NOT NULL,
  `start_order` timestamp NULL DEFAULT NULL,
  `stop_order` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_verif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.order_verified: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_verified` DISABLE KEYS */;
INSERT INTO `order_verified` (`id_verif`, `start_order`, `stop_order`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `order_verified` ENABLE KEYS */;

-- Dumping structure for table db_pcb.packing
CREATE TABLE IF NOT EXISTS `packing` (
  `id_packing` int(11) NOT NULL,
  `start_packing` timestamp NULL DEFAULT NULL,
  `stop_packing` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_packing`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.packing: ~0 rows (approximately)
/*!40000 ALTER TABLE `packing` DISABLE KEYS */;
INSERT INTO `packing` (`id_packing`, `start_packing`, `stop_packing`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `packing` ENABLE KEYS */;

-- Dumping structure for table db_pcb.plating
CREATE TABLE IF NOT EXISTS `plating` (
  `id_plating` int(11) NOT NULL,
  `start_plating` timestamp NULL DEFAULT NULL,
  `stop_plating` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_plating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.plating: ~0 rows (approximately)
/*!40000 ALTER TABLE `plating` DISABLE KEYS */;
INSERT INTO `plating` (`id_plating`, `start_plating`, `stop_plating`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `plating` ENABLE KEYS */;

-- Dumping structure for table db_pcb.potong_pcb
CREATE TABLE IF NOT EXISTS `potong_pcb` (
  `id_potong` int(11) NOT NULL,
  `start_potong` timestamp NULL DEFAULT NULL,
  `stop_potong` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_potong`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.potong_pcb: ~0 rows (approximately)
/*!40000 ALTER TABLE `potong_pcb` DISABLE KEYS */;
INSERT INTO `potong_pcb` (`id_potong`, `start_potong`, `stop_potong`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `potong_pcb` ENABLE KEYS */;

-- Dumping structure for table db_pcb.qc
CREATE TABLE IF NOT EXISTS `qc` (
  `id_qc` int(11) NOT NULL,
  `start_qc` timestamp NULL DEFAULT NULL,
  `stop_qc` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_qc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.qc: ~0 rows (approximately)
/*!40000 ALTER TABLE `qc` DISABLE KEYS */;
INSERT INTO `qc` (`id_qc`, `start_qc`, `stop_qc`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `qc` ENABLE KEYS */;

-- Dumping structure for table db_pcb.silkscreen_atas
CREATE TABLE IF NOT EXISTS `silkscreen_atas` (
  `id_silkscreen_atas` int(11) NOT NULL,
  `start_silkscreen_atas` timestamp NULL DEFAULT NULL,
  `stop_silkscreen_atas` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_silkscreen_atas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.silkscreen_atas: ~0 rows (approximately)
/*!40000 ALTER TABLE `silkscreen_atas` DISABLE KEYS */;
INSERT INTO `silkscreen_atas` (`id_silkscreen_atas`, `start_silkscreen_atas`, `stop_silkscreen_atas`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `silkscreen_atas` ENABLE KEYS */;

-- Dumping structure for table db_pcb.silkscreen_bwh
CREATE TABLE IF NOT EXISTS `silkscreen_bwh` (
  `id_silkscreen_bwh` int(11) NOT NULL,
  `start_silkscreen_bwh` timestamp NULL DEFAULT NULL,
  `stop_silkscreen_bwh` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_silkscreen_bwh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.silkscreen_bwh: ~0 rows (approximately)
/*!40000 ALTER TABLE `silkscreen_bwh` DISABLE KEYS */;
INSERT INTO `silkscreen_bwh` (`id_silkscreen_bwh`, `start_silkscreen_bwh`, `stop_silkscreen_bwh`) VALUES
	(1, NULL, NULL);
/*!40000 ALTER TABLE `silkscreen_bwh` ENABLE KEYS */;

-- Dumping structure for table db_pcb.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_pcb.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
