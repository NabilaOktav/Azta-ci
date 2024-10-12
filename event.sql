-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for event
DROP DATABASE IF EXISTS `event`;
CREATE DATABASE IF NOT EXISTS `event` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `event`;

-- Dumping structure for table event.jnslomba
DROP TABLE IF EXISTS `jnslomba`;
CREATE TABLE IF NOT EXISTS `jnslomba` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_lomba` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penyelenggara` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table event.jnslomba: ~0 rows (approximately)
DELETE FROM `jnslomba`;

-- Dumping structure for table event.pendaftaran
DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_lomba` int DEFAULT NULL,
  `nama_pendaftar` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelas` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table event.pendaftaran: ~0 rows (approximately)
DELETE FROM `pendaftaran`;

-- Dumping structure for table event.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table event.user: ~0 rows (approximately)
DELETE FROM `user`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
