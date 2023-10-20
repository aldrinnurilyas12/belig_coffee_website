-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2023 at 02:58 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `plg_id` int NOT NULL,
  `plg_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `total` int NOT NULL,
  `tanggal_kedatangan` datetime NOT NULL,
  `jumlah_tamu` int NOT NULL,
  `no_meja` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `notes` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_bayar` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal_booking` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `plg_id`, `plg_nama`, `total`, `tanggal_kedatangan`, `jumlah_tamu`, `no_meja`, `notes`, `status_bayar`, `tanggal_booking`) VALUES
('BOK040823000001', 7, 'Aldrin Nur Ilyas', 39800, '2023-08-07 17:06:00', 4, 'Meja 1', 'Tolong dipersiapkan ya 15 menit sebelum saya datang', 'Menunggu Konfirmasi', '2023-08-04 10:14:18'),
('BOK140823000001', 7, 'Aldrin Nur Ilyas', 49000, '2023-08-16 11:06:00', 2, 'Meja 3', 'Tolong dipersiapkan ya 15 menit sebelum saya datang', 'Menunggu Konfirmasi', '2023-08-14 04:08:54'),
('BOK140823000002', 7, 'Aldrin Nur Ilyas', 88000, '2023-08-17 11:19:00', 3, 'Meja 3', 'Tolong dipersiapkan ya 15 menit sebelum saya datang', 'Menunggu Konfirmasi', '2023-08-14 04:20:30'),
('BOK150723000001', 1, 'Kanaya Daendra', 72500, '2023-07-16 20:30:00', 3, 'Meja 2', 'Meja tolong dibersihkan sebelum saya datang', 'Sudah dikonfirmasi', '2023-07-15 08:28:26'),
('BOK160723000001', 7, 'Abed', 47400, '2023-07-17 20:00:00', 2, 'Meja 3', 'Jangan ada yang tempatin ', 'Pesanan sedang disiapkan', '2023-07-16 07:12:13'),
('BOK160723000002', 7, 'Abed', 48000, '2023-07-20 21:20:00', 3, 'Meja 6', 'Bantu bersihin meja ya', 'Sudah dikonfirmasi', '2023-07-16 07:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `detail_id` int NOT NULL,
  `detail_menu_id` int NOT NULL,
  `detail_menu_nama` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detail_harjul` double NOT NULL,
  `detail_porsi` int NOT NULL,
  `detail_subtotal` double NOT NULL,
  `detail_booking_id` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`detail_id`, `detail_menu_id`, `detail_menu_nama`, `detail_harjul`, `detail_porsi`, `detail_subtotal`, `detail_booking_id`) VALUES
(1, 4, 'Ice Caramel Latte ', 14250, 2, 28500, 'BOK150723000001'),
(2, 16, 'Paket Bundle Happy', 22000, 2, 44000, 'BOK150723000001'),
(3, 9, 'Ice Cappuchino', 16150, 1, 16150, 'BOK160723000001'),
(4, 11, 'Cafe Latte', 17000, 1, 17000, 'BOK160723000001'),
(5, 4, 'Ice Caramel Latte ', 14250, 1, 14250, 'BOK160723000001'),
(6, 14, 'Lychee Yakult', 19000, 1, 19000, 'BOK160723000002'),
(7, 8, 'Roti Selai Srikaya', 10000, 1, 10000, 'BOK160723000002'),
(8, 1, 'Hazelnut Latte', 19000, 1, 19000, 'BOK160723000002'),
(9, 14, 'Lychee Yakult', 19000, 1, 19000, 'BOK040823000001'),
(10, 7, 'Ice Americano', 10000, 1, 10000, 'BOK040823000001'),
(11, 19, 'Ice Americano', 10800, 1, 10800, 'BOK040823000001'),
(12, 8, 'Roti Selai Srikaya', 10000, 3, 30000, 'BOK140823000001'),
(13, 1, 'Hazelnut Latte', 19000, 1, 19000, 'BOK140823000001'),
(14, 1, 'Hazelnut Latte', 19000, 2, 38000, 'BOK140823000002'),
(15, 17, 'Kopi Susu Regal', 20000, 1, 20000, 'BOK140823000002'),
(16, 3, 'Kentang Goreng', 15000, 2, 30000, 'BOK140823000002');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `keluhan_id` int NOT NULL,
  `pembayaran_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal_pembayaran` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `plg_id` int NOT NULL,
  `plg_nama` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keluhan` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggapan` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kel_status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_keluhan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`keluhan_id`, `pembayaran_id`, `tanggal_pembayaran`, `plg_id`, `plg_nama`, `kategori`, `keluhan`, `tanggapan`, `kel_status`, `tanggal_keluhan`) VALUES
(1, 'PAY180723000001', '2023-07-18 08:26:51', 7, 'Abed', 'fasilitas', 'buruk', 'baik kak akan ditingkatkan', 'sudah ditanggapi', '2023-07-18 02:13:44'),
(2, 'PAY180723000002', '2023-07-18 09:17:03', 7, 'Aldrin Nur Ilyas', 'pelayanan', 'perbaiki dong kualitas pelayanannya', '', 'Belum Ditanggapi', '2023-09-20 15:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_booking`
--

CREATE TABLE `konfirmasi_booking` (
  `konfirmasi_id` int NOT NULL,
  `booking_id` varchar(30) NOT NULL,
  `plg_id` int NOT NULL,
  `plg_nama` varchar(100) NOT NULL,
  `status_bayar` varchar(40) NOT NULL,
  `tanggal_konfirmasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_booking`
--

INSERT INTO `konfirmasi_booking` (`konfirmasi_id`, `booking_id`, `plg_id`, `plg_nama`, `status_bayar`, `tanggal_konfirmasi`) VALUES
(1, 'BOK160723000001', 7, 'Abed', 'Sudah dikonfirmasi', '2023-07-16 07:15:18'),
(2, 'BOK150723000001', 1, 'Kanaya Daendra', 'Sudah dikonfirmasi', '2023-07-16 07:16:50'),
(3, 'BOK160723000002', 7, 'Abed', 'Sudah dikonfirmasi', '2023-07-16 07:22:34'),
(4, 'BOK160723000001', 7, 'Abed', 'Pesanan sedang disiapkan', '2023-07-18 03:55:06'),
(5, 'BOK160723000001', 7, 'Abed', 'Sudah dikonfirmasi', '2023-07-23 12:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` varchar(30) NOT NULL,
  `booking_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pemesanan_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `plg_id` int NOT NULL,
  `plg_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_booking` datetime DEFAULT NULL,
  `tanggal_pemesanan` datetime DEFAULT NULL,
  `bank` text NOT NULL,
  `total` double NOT NULL,
  `notes` text NOT NULL,
  `foto_bukti` varchar(600) NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `booking_id`, `pemesanan_id`, `plg_id`, `plg_nama`, `tanggal_booking`, `tanggal_pemesanan`, `bank`, `total`, `notes`, `foto_bukti`, `tanggal_pembayaran`) VALUES
('PAY040823000001', 'BOK040823000001', NULL, 7, 'Aldrin Nur Ilyas', '2023-08-04 17:14:18', NULL, 'Mandiri', 39800, 'pembayaran booking meja a.n Aldrin nur ilyas', 'e9dd6af0da182dce8b69df13abd0f22b.png', '2023-08-04 10:18:38'),
('PAY140823000001', 'BOK140823000001', NULL, 7, 'Aldrin Nur Ilyas', '2023-08-14 11:08:54', NULL, 'Mandiri', 49000, 'Bayar booking meja\r\na.n Aldrin Nur Ilyas', 'e4dba6e510a291015b837d148e9f7394.png', '2023-08-14 04:10:38'),
('PAY140823000002', 'BOK140823000002', NULL, 7, 'Aldrin Nur Ilyas', '2023-08-14 11:20:30', NULL, 'Mandiri', 88000, 'bayar booking meja a.n Aldrin Nur Ilyas', '5570b440ed2980e1cf7f91945247f813.png', '2023-08-14 04:21:04'),
('PAY180723000001', 'BOK160723000001', NULL, 7, 'Abed', '2023-07-16 14:12:13', NULL, 'Mandiri', 47400, 'bayar', '58c6a0bc472c758406f759cef3c4685e.png', '2023-07-18 01:26:51'),
('PAY180723000002', NULL, 'ORD160723000001', 7, 'Abed', NULL, '2023-07-16 16:46:03', 'BNI', 33250, '', 'cd54f274d2dcbcba54c828e7ee6e2842.png', '2023-07-18 02:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pemesanan_id` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_pemesanan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `plg_id` int DEFAULT NULL,
  `plg_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `notes` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `meja` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`pemesanan_id`, `tanggal_pemesanan`, `plg_id`, `plg_nama`, `status`, `total`, `notes`, `meja`) VALUES
('ORD150723000001', '2023-07-15 05:15:39', 1, 'Kanaya Daendra', 'Pesanan selesai', 28500, 'Bantu bersihin meja ya', 'Meja 2'),
('ORD150723000002', '2023-07-15 11:55:17', 1, 'Kanaya Daendra', 'Pesanan selesai', 19000, 'Bantu bersihin meja ya', 'Meja 2'),
('ORD160723000001', '2023-07-16 09:46:03', 7, 'Abed', 'Pesanan selesai', 33250, 'banyakin es ya', 'Meja 3');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `plg_id` int NOT NULL,
  `pembayaran_id` varchar(30) NOT NULL,
  `tanggal_pembayaran` datetime NOT NULL,
  `menu_nama` varchar(300) NOT NULL,
  `plg_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rating` int NOT NULL,
  `isi_review` text NOT NULL,
  `tanggal_review` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_booking`
--

CREATE TABLE `status_booking` (
  `status_booking_id` int NOT NULL,
  `nama_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_booking`
--

INSERT INTO `status_booking` (`status_booking_id`, `nama_status`) VALUES
(1, 'Belum Dikonfirmasi'),
(2, 'Sudah dikonfirmasi'),
(3, 'Pesanan sedang disiapkan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `detail_id` int NOT NULL,
  `detail_menu_id` int DEFAULT NULL,
  `detail_menu_nama` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `detail_harjul` double DEFAULT NULL,
  `detail_porsi` int DEFAULT NULL,
  `detail_subtotal` double DEFAULT NULL,
  `detail_pemesanan_id` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail`
--

INSERT INTO `tbl_detail` (`detail_id`, `detail_menu_id`, `detail_menu_nama`, `detail_harjul`, `detail_porsi`, `detail_subtotal`, `detail_pemesanan_id`) VALUES
(1, 4, 'Ice Caramel Latte ', 14250, 2, 28500, 'ORD150723000001'),
(2, 1, 'Hazelnut Latte', 19000, 1, 19000, 'ORD150723000002'),
(3, 4, 'Ice Caramel Latte ', 14250, 1, 14250, 'ORD160723000001'),
(4, 14, 'Lychee Yakult', 19000, 1, 19000, 'ORD160723000001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Signature');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int NOT NULL,
  `menu_nama` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `menu_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `menu_harga_baru` int DEFAULT NULL,
  `diskon` varchar(30) DEFAULT NULL,
  `harga_diskon` varchar(30) DEFAULT NULL,
  `harga_menu` int DEFAULT NULL,
  `menu_kategori_id` int DEFAULT NULL,
  `menu_kategori_nama` varchar(30) DEFAULT NULL,
  `menu_status` int DEFAULT '1',
  `menu_gambar` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `promo` varchar(30) NOT NULL,
  `tgl_awal_promo` date NOT NULL,
  `tgl_akhir_promo` date NOT NULL,
  `tanggal_menu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_nama`, `menu_deskripsi`, `menu_harga_baru`, `diskon`, `harga_diskon`, `harga_menu`, `menu_kategori_id`, `menu_kategori_nama`, `menu_status`, `menu_gambar`, `promo`, `tgl_awal_promo`, `tgl_akhir_promo`, `tanggal_menu`) VALUES
(1, 'Hazelnut Latte', 'Hazelnut Latte adalah kopi dengan tambahan rasa Hazelnut yang berbeda. Perpaduan rasa kacang Hazelnut membuat harimu akan lebih semarak.', 20000, '5', '1000', 19000, 2, 'Minuman', 1, 'file_1688834809.jpg', 'promo', '2023-07-09', '2023-07-13', '2023-07-08 16:46:49'),
(2, 'Kopi Tubruk', 'Kopi tubruk arabica yang nikmat untuk teman ngopi kamu', 10000, '0', '0', 10000, 2, 'Minuman', 1, 'file_1688843266.jpeg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:07:46'),
(3, 'Kentang Goreng', 'Cemilan yang cocok dengan teman ngopi kamu', 15000, '0', '0', 15000, 1, 'Makanan', 1, 'file_1688838048.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 17:40:48'),
(5, 'Ice Matcha', 'Minuman matcha latte dengan green tea yang membuat kamu merasakan sensasi yang unik', 20000, '0', '0', 20000, 3, 'Signature', 1, 'file_1688838699.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 17:51:39'),
(6, 'Strawberry Smoothies', 'Strawberry Smoothies perpaduan antara yogurt, susum dan buah strawberry', 20000, '0', '0', 20000, 3, 'Signature', 1, 'file_1688842782.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 18:59:42'),
(7, 'Ice Americano', 'kopi americano dingin cocok untuk teman ngopi kamu', 10000, '0', '0', 10000, 2, 'Minuman', 1, 'file_1688842873.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:01:13'),
(8, 'Roti Selai Srikaya', 'Roti dengan selai srikaya yang manis.\r\nper 2 pcs', 10000, '0', '0', 10000, 1, 'Makanan', 1, 'file_1688842967.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:02:47'),
(10, 'Vietnam Drip', 'Kopi vietnam drip merupakan kopi khas vietnam yang penyajiannya sangat unik', 17000, '0', '0', 17000, 2, 'Minuman', 1, 'file_1688843174.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:06:14'),
(11, 'Cafe Latte', 'Hot cafe latte merupakan kopi dengan rasa yang nikmat', 17000, '0', '0', 17000, 2, 'Minuman', 1, 'file_1688843422.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:10:22'),
(12, 'Lemon Tea', 'lemon tea merupakan minuman teh dengan rasa lemon', 15000, '0', '0', 15000, 2, 'Minuman', 1, 'file_1688843652.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:14:12'),
(13, 'Ice Taro', 'Es taro merupakan menu signature kami yang paling banyak disukai', 15000, '0', '0', 15000, 3, 'Signature', 1, 'file_1688844178.jpg', 'tidak', '2023-07-09', '2023-07-09', '2023-07-08 19:22:58'),
(15, 'Redvelvet Ice', ' rasa red velvet sedikit mirip dengan rasa cokelat, tetapi memberikan sensasi rasa yang lebih manis dan uniK', 15000, '0', '0', 15000, 3, 'Signature', 1, 'file_1688844469.jpg', 'tidak', '2023-07-09', '2023-07-12', '2023-07-08 19:27:49'),
(16, 'Paket Bundle Happy', 'Paket happy bundle, paket isi kopi susu aren dan roti selai sarikaya yang nikmat', 22000, '0', '0', 22000, 1, 'Makanan', 1, 'file_1688897393.png', 'promo', '2023-07-10', '2023-07-20', '2023-07-09 10:09:53'),
(17, 'Kopi Susu Regal', 'Kopi susu dengan perpaduan biskuit regal', 20000, '0', '0', 20000, 2, 'Minuman', 1, 'file_1689132109.jpg', 'tidak', '2023-07-12', '2023-07-12', '2023-07-12 03:21:49'),
(18, 'Ice Taro Latte', 'enak', 17000, '5', '850', 16150, 2, 'Minuman', 1, 'file_1691143183.jpg', 'promo', '2023-08-21', '2023-08-24', '2023-08-04 09:59:43'),
(19, 'Ice Americano', 'enaak', 12000, '10', '1200', 10800, 2, 'Minuman', 1, 'file_1691143240.jpg', 'promo', '2023-08-10', '2023-08-25', '2023-08-04 10:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `plg_id` int NOT NULL,
  `plg_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `plg_alamat` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `plg_notelp` varchar(30) DEFAULT NULL,
  `plg_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `plg_photo` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `plg_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `plg_password` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `plg_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`plg_id`, `plg_nama`, `plg_alamat`, `plg_notelp`, `plg_email`, `plg_photo`, `plg_register`, `plg_password`, `plg_status`) VALUES
(1, 'Kanaya Daendra', 'Jl Meruya Selatan', '08967408458', 'kanaya@gmail.com', 'file_1688603384.jpg', '2023-07-06 00:29:44', '94c8a2c7649f625a8fd5d13ea7e57690', 0),
(2, 'Dandi Ananda', 'Kuningan', '08967405805', 'dandi@gmail.com', 'file_1688740883.jpg', '2023-07-07 14:41:23', '202cb962ac59075b964b07152d234b70', 0),
(3, 'Anisa Salsabilla', 'Jl Cipondoh', '08967489298', 'anisa@yahoo.com', 'file_1689032638.jpg', '2023-07-10 23:43:58', '301b96488b077ba8f9a4a01db8dab2db', 0),
(4, 'Joana Cassandra', 'Jl.Merpati Raya No.90', '08967898788', 'joana12@gmail.com', 'file_1689086845.jpg', '2023-07-11 14:47:25', 'c689de85871d8325aca2ddef8de173cd', 0),
(5, 'Alexander', 'Mumbai, India', '089678994994', 'alexander@gmail.com', 'file_1689116381.jpg', '2023-07-11 22:59:41', '202cb962ac59075b964b07152d234b70', 0),
(6, 'Amanda ', 'Jl Pancoran Mas', '089674998886', 'amanda@gmail.com', 'file_1689117229.jpeg', '2023-07-11 23:13:49', '0f4004e836509904e0005999a4fadc48', 0),
(7, 'Aldrin Nur Ilyas', 'Jagakarsa No.90', '089695679922', 'aldrin@gmail.com', 'file_1689129242.jpg', '2023-07-12 02:34:02', '45159656f36ab98de7a49b4c660bd588', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int NOT NULL,
  `pengguna_nama` varchar(60) DEFAULT NULL,
  `pengguna_username` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pengguna_password` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(30) DEFAULT NULL,
  `pengguna_status` int DEFAULT '1',
  `pengguna_level` varchar(2) DEFAULT NULL,
  `pengguna_photo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_photo`) VALUES
(1, 'adminbelig', 'adminbelig', '6ca140860a3c345fa53771e07bd68e78', 'beligadmin@gmail.com', '089674050689', 1, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int NOT NULL,
  `status_nama` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_nama`) VALUES
(1, 'Dikonfirmasi'),
(2, 'Sedang diproses'),
(3, 'Pesanan selesai');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int NOT NULL,
  `plg_id` int NOT NULL,
  `plg_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembayaran_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_pembayaran` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rating` int NOT NULL,
  `isi_testimonial` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `balasan` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_testimonial` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `plg_id`, `plg_nama`, `pembayaran_id`, `tanggal_pembayaran`, `rating`, `isi_testimonial`, `balasan`, `tgl_testimonial`) VALUES
(1, 7, 'Aldrin Nur Ilyas', 'PAY180723000002', '2023-07-18 09:17:03', 2, 'enak sekali kopinya', '', '2023-09-20 15:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`keluhan_id`);

--
-- Indexes for table `konfirmasi_booking`
--
ALTER TABLE `konfirmasi_booking`
  ADD PRIMARY KEY (`konfirmasi_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`),
  ADD KEY `inv_plg_id` (`plg_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `status_booking`
--
ALTER TABLE `status_booking`
  ADD PRIMARY KEY (`status_booking_id`);

--
-- Indexes for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `detail_inv_no` (`detail_pemesanan_id`),
  ADD KEY `detail_menu_id` (`detail_menu_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_kategori_id` (`menu_kategori_id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`plg_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `keluhan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfirmasi_booking`
--
ALTER TABLE `konfirmasi_booking`
  MODIFY `konfirmasi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `plg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`plg_id`) REFERENCES `tbl_pelanggan` (`plg_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD CONSTRAINT `tbl_detail_ibfk_1` FOREIGN KEY (`detail_pemesanan_id`) REFERENCES `pemesanan` (`pemesanan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_ibfk_2` FOREIGN KEY (`detail_menu_id`) REFERENCES `tbl_menu` (`menu_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`menu_kategori_id`) REFERENCES `tbl_kategori` (`kategori_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
