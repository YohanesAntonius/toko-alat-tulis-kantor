-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 03:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoatk`
--

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `no_kluar` varchar(15) NOT NULL,
  `tgl_kluar` date NOT NULL,
  `id_bar` varchar(15) NOT NULL,
  `nama_bar` varchar(50) NOT NULL,
  `merk_bar` varchar(30) NOT NULL,
  `jenis_bar` varchar(30) NOT NULL,
  `satuan_bar` varchar(30) NOT NULL,
  `qty` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(10) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'amplop'),
(2, 'ballpoint'),
(3, 'isi pensil'),
(4, 'kalkulator'),
(5, 'kapur'),
(6, 'kertas hvs'),
(7, 'map'),
(8, 'pelubang kertas'),
(9, 'penggaris'),
(10, 'penghapus'),
(11, 'pensil'),
(12, 'spidol'),
(13, 'stapler');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merek` int(10) NOT NULL,
  `nama_merek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merek`, `nama_merek`) VALUES
(1, 'air mail'),
(2, 'bagus'),
(3, 'big'),
(4, 'biola'),
(5, 'bola dunia'),
(6, 'butterfly'),
(7, 'kasio'),
(8, 'citizen'),
(9, 'executive'),
(10, 'fabel castell'),
(11, 'faber castel'),
(12, 'faster'),
(13, 'gunindo'),
(14, 'handcraft'),
(15, 'joyko'),
(16, 'kenko'),
(17, 'merpati'),
(18, 'paper one'),
(19, 'paperline'),
(20, 'pilot'),
(21, 'queen'),
(22, 'sinar dunia'),
(23, 'standart'),
(24, 'tizzo'),
(25, 'topla'),
(26, 'snowman');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(7) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `qty`, `description`) VALUES
('5d733fa3f2f8b', 'Pensil', 3000, 35, 'Pensil 2B'),
('5d73470d78154', 'Penghapus', 3000, 50, 'Penghapus bulpoin dan pensil'),
('5d930d736a2a7', 'Penggaris 30cm', 3500, 500, 'penggaris Butterfly  30cm');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(10) NOT NULL,
  `nama_satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'buah'),
(2, 'lembar'),
(3, 'lusin'),
(4, 'pack'),
(5, 'pak'),
(6, 'pcs'),
(7, 'rim'),
(8, 'roll');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brng`
--

CREATE TABLE `tbl_brng` (
  `id_bar` varchar(15) NOT NULL,
  `nama_bar` varchar(50) NOT NULL,
  `merk_bar` varchar(30) NOT NULL,
  `jenis_bar` varchar(30) NOT NULL,
  `satuan_bar` varchar(10) NOT NULL,
  `qty` int(7) NOT NULL,
  `harga_bar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brng`
--

INSERT INTO `tbl_brng` (`id_bar`, `nama_bar`, `merk_bar`, `jenis_bar`, `satuan_bar`, `qty`, `harga_bar`) VALUES
('a321', 'kertas hvs', 'sinar dunia', 'kertas hvs', 'lusin', 5, 6),
('aaa111', 'pensil 2b v2', 'faber castel', 'pensil', 'pack', 0, 150000),
('AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 0, 12500),
('AMP-C-EX', 'Amplop Coklat 250x353 mm (B4)', 'Executive', 'amplop', 'pak', 400, 81000),
('AMP-C-HC', 'Amplop soal ujian lipat besar', 'Handcraft', 'amplop', 'lembar', 360, 1800),
('AMP-PB-MP', 'Amplop Putih polos 110x70mm', 'Merpati', 'amplop', 'pak', 205, 11000),
('AMP-PK-MP', 'Amplop Polos Kabinet 28 x 40 cm', 'Merpati', 'amplop', 'pak', 320, 24000),
('AMP-PS-MP', 'Amplop Putih Kecil 95x152 mm', 'Merpati', 'amplop', 'pak', 0, 13000),
('BP-FAS-C6', 'Ballpoint Faster C 6', 'Faster', 'Ballpoint', 'lusin', 0, 23220),
('BP-FAS-C600', 'Ballpoint Faster C600', 'Faster', 'Ballpoint', 'lusin', 300, 19600),
('BP-JK-WRN', 'Ballpoint Joyko BP-213 4 Warna', 'Joyko', 'Ballpoint', 'lusin', 0, 59860),
('BP-KEN-WRN', 'Ballpoint Kenko Retractable pen Gel K-1', 'Kenko', 'Ballpoint', 'lusin', 300, 46440),
('BP-PLT-BL', 'Ballpoint Pilot balliner', 'Pilot', 'Ballpoint', 'lusin', 250, 133140),
('BP-PLT-WRN', 'Ballpoint Pilot BPT-P / HITAM/BIRU/MERAH', 'Pilot', 'Ballpoint', 'lusin', 200, 16510),
('BP-QN-C6000', 'Ballpoint QUEEN C6000', 'QUEEN', 'Ballpoint', 'lusin', 250, 12380),
('BP-SNW-V5', 'Ballpoint Snowman V-5', 'Snowman', 'Ballpoint', 'lusin', 300, 21940),
('BP-SNW-V56', 'Kecap', 'Bango', 'Kecap', 'pcs', 50, 12000),
('BP-SNW-V6', 'Ballpoint Snowman V-6', 'Snowman', 'Ballpoint', 'lusin', 250, 14960),
('BP-SNW-WRN', 'Ballpoint Snowman BP-7, merah/hitam/biru', 'Snowman', 'Ballpoint', 'lusin', 220, 13150),
('BP-STD-GEL', 'Ballpoint Standard B-Gel F2', 'Standard', 'Ballpoint', 'lusin', 200, 49020),
('BP-STD-WRN', 'Ballpoint Standard AE7 hitam/biru', 'Standard', 'Ballpoint', 'lusin', 200, 13930),
('BP-TZ-GEL', 'Ballpoint Balliner gel ink', 'Tizzo', 'Ballpoint', 'lusin', 200, 30960),
('HVS-A0-PL', 'Kertas HVS A0 Plotter', 'Paperline', 'Kertas HVS', 'Roll', 400, 196000),
('HVS-A280-SD', 'Kertas HVS A2 80 gr', 'Sinar Dunia', 'Kertas HVS', 'Roll', 520, 95000),
('HVS-A370-PO', 'Kertas HVS A3 70 gr', 'Paper One', 'Kertas HVS', 'Rim', 410, 62000),
('HVS-A380-SD', 'Kertas HVS A3 80 gr', 'Sinar Dunia', 'Kertas HVS', 'Rim', 350, 58000),
('HVS-A470-PL', 'Kertas HVS A4 70 gr', 'Paperline', 'Kertas HVS', 'Rim', 420, 31500),
('HVS-A470-SD', 'Kertas HVS A4 70 gr', 'Sinar Dunia', 'Kertas HVS', 'Rim', 500, 27000),
('HVS-A480-PL', 'Kertas HVS A4 80 gr', 'Paperline', 'Kertas HVS', 'Rim', 400, 30000),
('HVS-A480-SD', 'Kertas HVS A4 80 gr', 'Sinar Dunia', 'Kertas HVS', 'Rim', 450, 35000),
('HVS-A4S70-SD', 'Kertas HVS A4S 70 gr', 'Sinar Dunia', 'Kertas HVS', 'Rim', 400, 28000),
('HVS-F460-SD', 'Kertas HVS F4 60 gr', 'Sinar Dunia', 'Kertas HVS', 'Rim', 400, 28000),
('HVS-F470-BD', 'Kertas HVS F4 70 gr', 'Bola Dunia', 'Kertas HVS', 'Rim', 380, 37000),
('HVS-F470-SD', 'Kertas HVS F4 70 gr ', 'Sinar Dunia', 'Kertas HVS', 'Rim', 460, 30000),
('HVS-F480-PL', 'Kertas HVS F4 80 gr', 'Paperline', 'Kertas HVS', 'Rim', 330, 34680),
('HVS-F480-SD', 'Kertas HVS F4 80 gr', 'Sinar Dunia', 'Kertas HVS', 'Rim', 400, 34000),
('HVS-F4STD-SD', 'Kertas HVS F4 std', 'Sinar Dunia', 'Kertas HVS', 'Rim', 400, 30000),
('IPNS-PLT-2B', 'Isi Pensil 0,5 2B  pilot', 'Pilot', 'Isi Pensil', 'buah', 200, 2320),
('ISTP-B-J', 'Isi Stapler Besar', 'Joyko', 'stapler', 'pak', 300, 46000),
('ISTP-K-J', 'Isi Stapler Kecil', 'Joyko', 'stapler', 'pak', 0, 18000),
('ISTP-S-J', 'Isi Stapless Sedang', 'Joyko', 'stapler', 'pack', 200, 22000),
('KAL-CAS', 'Kalkulator', 'Casio', 'kalkulator', 'buah', 200, 62000),
('KAL-CTZ', 'Kalkulator', 'Citizen', 'kalkulator', 'buah', 200, 57000),
('KPR-BGS', 'Kapur barus putih', 'Bagus', 'Kapur', 'pak', 200, 23480),
('PG-30-BF', 'Penggaris 30 cm', 'Butterfly', 'penggaris', 'buah', 300, 4500),
('PG-40-BF', 'Penggaris 40 cm', 'Butterfly', 'penggaris', 'buah', 300, 6600),
('PG-B100-KEN', 'Penggaris Besi 100 cm', 'Kenko', 'penggaris', 'buah', 300, 34000),
('PG-B30-KEN', 'Penggaris Besi 30 cm', 'Kenko', 'penggaris', 'buah', 300, 5000),
('PG-B50-KEN', 'Penggaris Besi 50 cm', 'Kenko', 'penggaris', 'buah', 300, 13000),
('PHP-KR-FC', 'Karet Penghapus Pensil', 'Faber Castel', 'penghapus', 'buah', 200, 1705),
('PHP-PT-FC', 'Penghapus Papan Tulis', 'Faber Castel', 'penghapus', 'buah', 200, 3300),
('PHP-WB-GUN', 'Penghapus Whiteboard', 'Gunindo', 'penghapus', 'buah', 300, 4000),
('PHP-WB-TP', 'Penghapus Whiteboard', 'Topla', 'penghapus', 'buah', 300, 3300),
('PK-30-KEN', 'Perforator / pelubang kertas no.30', 'Kenko', 'Pelubang kertas', 'buah', 300, 10000),
('PK-40-KEN', 'Perforator / pelubang kertas 40 XL', 'Kenko', 'Pelubang kertas', 'buah', 200, 27000),
('PK-85-KEN', 'Perforator / pelubang kertas no.85', 'Kenko', 'pelubang kertas', 'buah', 200, 50000),
('PNS-FC-2B', 'Pensil 2B Fabel Castell', 'Fabel Castell', 'Pensil', 'lusin', 220, 33540),
('PNS-JK-M', 'Pensil Mekanik Joyko', 'Joyko', 'Pensil', 'buah', 270, 3090),
('PNS-PLT-M', 'Pensil Mekanik Pilot', 'Pilot', 'Pensil', 'buah', 217, 12900),
('SMAP-KF4-BIO', 'Stopmap kertas F4 Warna', 'Biola', 'map', 'pak', 205, 15000),
('SMAP-PF4T-BIO', 'Stopmap plastik F4 Transparan', 'Big', 'map', 'lusin', 200, 28000),
('SMAP-PF4W-BIO', 'Stopmap plastik F4 Warna', 'Big', 'map', 'pak', 400, 28000),
('SPD-SNW-K', 'Spidol kecil Snowman', 'Snowman', 'Spidol', 'lusin', 201, 8510),
('SPD-SNW-WRN', 'Spidol Boardmarker Snowman HITAM/BIRU/MERAH', 'Snowman', 'Spidol', 'buah', 200, 5160),
('STP-K-B', 'Stapler Besar', 'Joyko', 'stapler', 'buah', 300, 17000),
('STP-K-J', 'Stapler Kecil', 'Joyko', 'stapler', 'buah', 6, 12000),
('STP-K-S', 'Stapler Sedang', 'Joyko', 'stapler', 'buah', 300, 55000),
('uuuuuaaaa', 'spidol warna', 'kenko', 'spidol', 'pcs', 78, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brng_kluar`
--

CREATE TABLE `tbl_brng_kluar` (
  `id_kluar` varchar(15) NOT NULL,
  `tgl_kluar` date NOT NULL,
  `id_bar` varchar(15) NOT NULL,
  `nama_bar` varchar(50) NOT NULL,
  `merk_bar` varchar(30) NOT NULL,
  `jenis_bar` varchar(30) NOT NULL,
  `satuan_bar` varchar(10) NOT NULL,
  `qty` int(7) NOT NULL,
  `tujuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brng_kluar`
--

INSERT INTO `tbl_brng_kluar` (`id_kluar`, `tgl_kluar`, `id_bar`, `nama_bar`, `merk_bar`, `jenis_bar`, `satuan_bar`, `qty`, `tujuan`) VALUES
('BK0001', '2019-10-30', 'AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 10, 'Malang'),
('BK0002', '2019-11-01', 'AMP-C-EX', 'Amplop Coklat 250x353 mm (B4)', 'Executive', 'amplop', 'pak', 10, 'Surabaya'),
('BK0003', '2019-11-01', 'AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 50, 'Surabaya'),
('BK0004', '2019-10-02', 'AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 10, 'Surabaya'),
('BK0005', '2018-12-24', 'AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 10, 'Surabaya'),
('BK0006', '2019-12-05', 'PNS-PLT-M', 'Pensil Mekanik Pilot', 'Pilot', 'Pensil', 'buah', 33, 'Sby');

--
-- Triggers `tbl_brng_kluar`
--
DELIMITER $$
CREATE TRIGGER `barang_keluar` AFTER INSERT ON `tbl_brng_kluar` FOR EACH ROW BEGIN UPDATE tbl_brng SET qty=qty-NEW.qty WHERE id_bar = NEW.id_bar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brng_msuk`
--

CREATE TABLE `tbl_brng_msuk` (
  `id_masuk` varchar(15) NOT NULL,
  `tgl_msuk` date NOT NULL,
  `id_bar` varchar(15) NOT NULL,
  `nama_bar` varchar(50) NOT NULL,
  `merk_bar` varchar(30) NOT NULL,
  `jenis_bar` varchar(30) NOT NULL,
  `satuan_bar` varchar(10) NOT NULL,
  `qty` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brng_msuk`
--

INSERT INTO `tbl_brng_msuk` (`id_masuk`, `tgl_msuk`, `id_bar`, `nama_bar`, `merk_bar`, `jenis_bar`, `satuan_bar`, `qty`) VALUES
('BM0001', '2019-11-01', 'AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 40),
('BM0003', '2019-11-01', 'BP-FAS-C6', 'Ballpoint Faster C 6', 'Faster', 'Ballpoint', 'lusin', 30),
('BM0004', '2019-11-01', 'BP-SNW-V5', 'Ballpoint Snowman V-5', 'Snowman', 'Ballpoint', 'lusin', 30),
('BM0005', '2019-11-01', 'AMP-C-HC', 'Amplop soal ujian lipat besar', 'Handcraft', 'amplop', 'lembar', 10),
('BM0006', '2019-10-30', 'AMP-C-AM', 'Amplop gaji coklat kabinet', 'Air Mail', 'amplop', 'pak', 50),
('BM0007', '2019-12-20', 'SPD-SNW-K', 'Spidol kecil Snowman', 'Snowman', 'Spidol', 'lusin', 1),
('BM0008', '2019-12-20', 'AMP-C-HC', 'Amplop soal ujian lipat besar', 'Handcraft', 'amplop', 'lembar', 50),
('BM0009', '2019-12-20', 'SMAP-KF4-BIO', 'Stopmap kertas F4 Warna', 'Biola', 'map', 'pak', 5),
('BM0010', '2019-12-06', 'AMP-PB-MP', 'Amplop Putih polos 110x70mm', 'Merpati', 'amplop', 'pak', 5);

--
-- Triggers `tbl_brng_msuk`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `tbl_brng_msuk` FOR EACH ROW BEGIN
	UPDATE tbl_brng SET qty=qty+NEW.qty
    WHERE id_bar = NEW.id_bar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `pass`, `level`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('1714321006', 'yuga', 'e3b210551cfa6a1569deedd2a0d6152d', 2),
('1714321009', 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 1),
('1714321010', 'yohanes', '493331a7321bf622460493a8cda5e4c4', 3),
('2', 'gudang', '202446dd1d6028084426867365b0c7a1', 2),
('3', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tbl_brng`
--
ALTER TABLE `tbl_brng`
  ADD PRIMARY KEY (`id_bar`);

--
-- Indexes for table `tbl_brng_kluar`
--
ALTER TABLE `tbl_brng_kluar`
  ADD PRIMARY KEY (`id_kluar`),
  ADD KEY `id_barang` (`id_bar`);

--
-- Indexes for table `tbl_brng_msuk`
--
ALTER TABLE `tbl_brng_msuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_bar` (`id_bar`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_brng_kluar`
--
ALTER TABLE `tbl_brng_kluar`
  ADD CONSTRAINT `tbh_brng` FOREIGN KEY (`id_bar`) REFERENCES `tbl_brng` (`id_bar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_brng_msuk`
--
ALTER TABLE `tbl_brng_msuk`
  ADD CONSTRAINT `tambah_qty` FOREIGN KEY (`id_bar`) REFERENCES `tbl_brng` (`id_bar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
