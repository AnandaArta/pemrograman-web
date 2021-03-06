-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table belajar-ci.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `judulberita` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tglposting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(50) NOT NULL,
  `isiberita` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table belajar-ci.berita: ~2 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judulberita`, `author`, `tglposting`, `foto`, `isiberita`) VALUES
	(1, 'mencoba', 'Arta', '2020-11-29 22:06:53', '', 'dicoba123'),
	(2, 'mencoba mengisi', 'Ananda', '2020-11-30 11:14:27', '', 'mencoba mengisi berita ini');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table belajar-ci.halaman
CREATE TABLE IF NOT EXISTS `halaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judulhalaman` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isihalaman` varchar(255) NOT NULL,
  `tglposting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table belajar-ci.halaman: ~2 rows (approximately)
/*!40000 ALTER TABLE `halaman` DISABLE KEYS */;
INSERT INTO `halaman` (`id`, `judulhalaman`, `author`, `isihalaman`, `tglposting`) VALUES
	(2, 'dicobaa', 'Arta', 'mencoba isian', '2020-11-30 13:27:45'),
	(3, 'halaman 1', 'ananda', 'berisi berupa halaman 1', '2020-11-30 11:16:40');
/*!40000 ALTER TABLE `halaman` ENABLE KEYS */;

-- Dumping structure for table belajar-ci.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No',
  `password` varchar(200) NOT NULL,
  `created_at` varchar(50) NOT NULL COMMENT 'Created date',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

-- Dumping data for table belajar-ci.users: ~13 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `password`, `created_at`) VALUES
	(1, 'Arta', 'arta@gmail.com', '2018071025', '$2y$10$R1tdNmQLXHtEKYwQi2Lx0O6LQNVPMfz/6OXxtfxHCK7e4pH8Wju1a', '2019-01-01'),
	(2, 'Admin', 'admin@test.com', '9000000002', '$2y$10$xuj8BuRtHsQYDcxdAk08Me5tHw13pEEVOH9.N.mVNiL/W9JgD/VCe', '2019-01-02'),
	(3, 'User', 'user@test.com', '9000000003', '', '2019-01-03'),
	(4, 'Editor', 'editor@test.com', '9000000004', '', '2019-01-04'),
	(5, 'Writer', 'writer@test.com', '9000000005', '', '2019-01-05'),
	(6, 'Contact', 'contact@test.com', '9000000006', '', '2019-01-06'),
	(7, 'Manager', 'manager@test.com', '9000000007', '', '2019-01-07'),
	(8, 'John', 'john@test.com', '9000000055', '', '2019-01-08'),
	(9, 'Merry', 'merry@test.com', '9000000088', '', '2019-01-09'),
	(10, 'Keliv', 'kelvin@test.com', '9000550088', '', '2019-01-10'),
	(11, 'Herry', 'herry@test.com', '9050550088', '', '2019-01-11'),
	(12, 'Mark', 'mark@test.com', '9050550998', '', '2019-01-12'),
	(15, 'Test', 'test@gmail.com', '51000011', '', '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
