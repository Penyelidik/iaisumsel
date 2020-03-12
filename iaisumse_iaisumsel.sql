-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2020 at 07:59 PM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iaisumse_iaisumsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `is_active`, `date_created`) VALUES
(1, 'satria', 'satriadinata1@gmail.com', '$2y$10$uRWTWZ8Zh.eqMJl8P.gXp.JqX1fBrlDCzxARli7u3gSakl3VBePX.', 1, 1564390199),
(2, 'AdminIAI', 'admin@iaisumsel.or.id', '$2y$10$VNPSDJWG.qr89zSCwiWkdePGtyY1sRKAmn898enQTImARtW3eq15O', 1, 1571197822),
(3, 'Sylvia Trisnawati', 'adm.iaisumsel@yahoo.com', '$2y$10$K9YsB58/9PDsqDXxZHxjCOdca27/oi6AqV/x4r3xPfLDxFoaV25qa', 1, 1571375308),
(4, 'Yulia Puspita Sari', 'iai.ppl2019@gmail.com', '$2y$10$gKNxTkxtmpMLn5CZ6g01peGYdnfneOsuvdu3Il2RnPhijS0S2hkDG', 1, 1574842177);

-- --------------------------------------------------------

--
-- Table structure for table `fotoberjalan`
--

CREATE TABLE `fotoberjalan` (
  `id` int(11) NOT NULL,
  `foto` varchar(512) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fotoberjalan`
--

INSERT INTO `fotoberjalan` (`id`, `foto`, `tanggal`) VALUES
(4, 'okeku.jpg', '2019-10-08 00:50:19'),
(10, 'okeku2.jpg', '2019-10-08 01:16:20'),
(11, 'okeku31.jpg', '2019-10-08 01:16:27'),
(12, 'okeku42.jpg', '2019-10-08 01:16:39'),
(19, 'header_website.jpg', '2019-10-26 05:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `fotopopup`
--

CREATE TABLE `fotopopup` (
  `id` int(11) NOT NULL,
  `foto` varchar(512) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fotopopup`
--

INSERT INTO `fotopopup` (`id`, `foto`, `tanggal`) VALUES
(10, 'Pelatihan_Akuntansi_Aplikom_fix.jpg', '2019-11-18 03:07:58'),
(12, 'KLINIK_TESIS_DISERTASI.png', '2020-02-13 08:34:41'),
(13, 'KJA-PSAK_TERBARU.png', '2020-02-27 06:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(512) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `tanggal`) VALUES
(16, 'PELANTIKAN1.jpg', 1572104280),
(17, 'PELANTIKAN2.jpg', 1572104302),
(18, 'PELANTIKAN3.jpg', 1572104460),
(19, 'PELANTIKAN4.jpg', 1572105078),
(20, 'PELANTIKAN5.jpg', 1572105257),
(21, 'PELANTIKAN6.jpg', 1572105522),
(22, 'PELANTIKAN7.jpg', 1572106099),
(23, 'PELANTIKAN8.jpg', 1572106115),
(24, 'PELANTIKAN9.jpg', 1572106275),
(25, 'tft1.jpg', 1572424093),
(26, 'tft2.jpg', 1572425363),
(27, 'tft3.jpg', 1572425927),
(28, 'metopen1.jpg', 1572425967),
(29, 'metopen2.jpg', 1572425976),
(30, 'metopen3.jpg', 1572425984),
(31, 'metopen4.jpg', 1572426000),
(32, 'metopen5.jpg', 1572426012),
(33, 'metopen6.jpg', 1572426025),
(37, 'pemeriksaanpajak1.jpg', 1572426117),
(38, 'pemeriksaanpajak2.jpg', 1572426128),
(39, 'pemeriksaanpajak3.jpg', 1572426138),
(40, 'aspekperpajakan11.jpg', 1572504043),
(41, 'aspekperpajakan21.jpg', 1572504051),
(42, 'aspekperpajakan31.jpg', 1572504063),
(43, 'web_1.jpg', 1574045891),
(44, 'web_2.jpg', 1574046032),
(45, 'web_3.jpg', 1574046097),
(46, 'web_4.jpg', 1574046189),
(47, 'web_5.jpg', 1574046364),
(48, 'web_6.jpg', 1574046409),
(49, 'hari_guru.jpg', 1575255313),
(50, '1.jpg', 1575255756),
(51, '2.jpg', 1575255779),
(52, '3.jpg', 1575255791),
(53, '4.jpg', 1575255805),
(54, '78411566_2601723163246533_5402908080562241536_n.jpg', 1575683544),
(55, '78891382_2601723233246526_3345328887025369088_n.jpg', 1575683554),
(56, '79216322_2601723289913187_1908416894902206464_n.jpg', 1575683562),
(57, '9fix.png', 1580285161),
(58, '8fix.png', 1580285212),
(59, '7fix.png', 1580285222),
(60, '6fix.png', 1580285236),
(61, '5fix.png', 1580285242),
(62, '1fix.png', 1580285263),
(63, '2fix.png', 1580285279),
(64, '3fix.png', 1580285287),
(65, '4fix.png', 1580285295),
(66, '1.png', 1580730341),
(67, '2.png', 1580730366),
(68, '3.png', 1580730406),
(69, '4.png', 1580730454),
(70, '5.png', 1580730518),
(71, '6.png', 1580730667),
(72, '7.png', 1580730674),
(73, '8.png', 1580730686),
(74, '9.png', 1580730723),
(75, '17.png', 1580730759),
(76, '21.png', 1580730812),
(77, '19.png', 1580730861),
(78, '11.png', 1582876849),
(79, '22.png', 1582876896),
(80, '44.png', 1582877050),
(81, '55.png', 1582877111),
(82, '66.png', 1582877249),
(83, '77.png', 1582877304),
(84, '12.png', 1583724724),
(85, '31.png', 1583724741),
(86, '41.png', 1583724758),
(87, '23.png', 1583725075),
(88, '32.png', 1583725086),
(90, '13.png', 1583725393),
(91, '24.png', 1583725401),
(92, '34.png', 1583725409);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `nama_jurnal` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `date_uploaded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `nama_jurnal`, `file_name`, `date_uploaded`) VALUES
(3, 'jurnal2', 'jurnal2.pdf', 1565519525),
(4, 'jurnal3', 'jurnal3.pdf', 1565519925);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `jenis_kegiatan` varchar(128) NOT NULL,
  `deskripsi_kegiata` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`jenis_kegiatan`, `deskripsi_kegiata`) VALUES
('kursus', ''),
('seminar', '');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(512) NOT NULL,
  `deskripsi` text NOT NULL,
  `kelas` varchar(256) NOT NULL,
  `tipe` varchar(20) NOT NULL DEFAULT 'kursus',
  `sesi` varchar(128) NOT NULL,
  `periode` varchar(256) NOT NULL,
  `waktu` varchar(512) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `kuota` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `anggota` varchar(50) NOT NULL,
  `umum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id_kegiatan`, `nama_kegiatan`, `deskripsi`, `kelas`, `tipe`, `sesi`, `periode`, `waktu`, `jumlah_peserta`, `kuota`, `lokasi`, `anggota`, `umum`) VALUES
(1, 'Pelatihan Brevet Pajak A&B Terpadu', '<br>', 'Reguler A', 'kursus', '42 Sesi', '-', 'Senin, Rabu, Jumat(16.30-21.00)', 11, 25, 'IAI SUMSEL', '3.200.000', '3.800.000'),
(2, 'Pelatihan Brevet Pajak A&B Terpadu', '<br>', 'Reguler  B', 'kursus', '38 Sesi', '-', 'Selasa & Kamis (16.30 - 21.00 )', 0, 25, 'IAI SUMSEL', '3.200.000', '3.800.000'),
(10, 'Penyusunan Laporan Keuangan Perusahaan Jasa Dengan Menggunakan Aplikasi Komputer Akuntansi', '<br>', '-', 'kursus', '6 Sesi', '-', 'Senin, Rabu dan Jumat (15.00 - 17.00)', 8, 20, 'IAI Sumsel', '450.000', '450.000'),
(11, 'Audit atas Siklus Persediaan, Penyimpanan dan Pembayaran Utang Usaha', '<p>Khusus Mahasiswa</p>\r\n', '-', 'seminar', '1 Sesi', '-', '-', 0, 20, 'IAI Sumsel', '300.000', '300.000'),
(12, 'Pengelolaan Keuangan Desa', '<p>Khusus Mahasiswa</p>\r\n', '-', 'seminar', '1 Sesi', '-', '-', 0, 20, 'IAI Sumsel', '300.000', '300.000'),
(13, 'Pelatihan Brevet Pajak A&B Terpadu', '<br>', 'Eksekutif Siang', 'kursus', '38 sesi', 'Januari - April', 'Sabtu dan Minggu (13.00 - 17.00)', 11, 25, 'IAI Sumsel', '3.400.000', '4.000.000'),
(14, 'GRI STANDARDS CERTIFIED TRAINING ON SUSTAINABILITY REPORTING', '<br>', '-', 'kursus', '24 SKP', '28 - 30 Januari 2020', '-', 20, 20, 'Hotel Azza Palembang', '5.500.000', '10.500.000'),
(15, 'Klinik Tesis dan Disertasi di bidang Akuntansi', '<br>', 'Angkatan ke-2', 'kursus', '10 SKP', '14 - 15 Maret 2020', 'Sabtu dan Minggu (08.00-13.00)', 7, 20, 'IAI Sumsel', '500.000', '500.000'),
(16, 'Klinik Tesis dan Disertasi di bidang Akuntansi', '<br>', 'Angkatan ke-3', 'kursus', '10 SKP', '28 - 29 Maret 2020', 'Sabtu dan Minggu (08.00-13.00)', 0, 20, 'IAI Sumsel', '500.000', '500.000'),
(17, 'Kupas Tuntas PSAK 71, 72, dan 73 (Efektif Berlaku 1 Januari 2020)', '<br>', '-', 'seminar', '8 SKP', '28 Maret 2020', 'Sabtu (08.00 - 17.00)', 0, 50, 'Hotel (dalam Konfirmasi)', '350.000', '500.000'),
(18, 'Pelatihan Brevet Pajak C', '<br>', 'Eksekutif', 'kursus', '30 sesi', '-', 'Sabtu dan Minggu (08.00-13.00)', 1, 20, 'Grha Akuntan IAI Sumsel', '2.450.000', '2.650.000');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `kategori`, `judul`, `tanggal_upload`) VALUES
(1, 'kursus', 'Judul_Materi_Saya.pdf', '2019-08-20 03:57:08'),
(3, 'seminar', 'Materi_WWF.pdf', '2019-11-15 18:11:29'),
(4, 'seminar', 'MateriOJK.pdf', '2019-11-15 18:25:59'),
(5, 'seminar', 'Materi_PT_BA.pdf', '2019-11-15 18:26:32'),
(6, 'seminar', 'Materi_ICSP1.pdf', '2019-11-15 18:27:04'),
(7, 'seminar', 'Materi_ICSP2.pdf', '2019-11-15 18:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_rumah` text NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `nama_institusi` varchar(40) NOT NULL,
  `alamat_institusi` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `kategori` varchar(512) NOT NULL,
  `course` int(11) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `id_card` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `bukti_pembayaran` varchar(512) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_actived` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `handphone`, `nama_institusi`, `alamat_institusi`, `password`, `kategori`, `course`, `golongan`, `biaya`, `id_card`, `is_active`, `bukti_pembayaran`, `date_created`, `date_actived`) VALUES
(4, 'Satria', 'variandendisono@gmail.com', 'Palembang', '2019-10-10', 'Palembang', '086362728', 'Unsri', 'Unsri', 'WR4EJR', 'kursus', 1, 'anggota', '1.000.000', '0a3f8f4b449baa355a54a83beaafab9c.png', 2, '241c819b29c8bb736db3dc322147481b.jpg', 1571203467, 1571736358),
(15, 'Dendisono', 'variandendisono@gmail.com', 'sungailiat', '1991-01-09', 'Pusri', '08137218291829', 'Unsri', 'jauh', '', 'kursus', 1, 'anggota', '2.950.000', 'd2112db0e089f1eaee1a4712bb6b06f9.jpg', 0, '6585a6eb55b0271327b6b8ee6ae62feb.jpg', 1573726853, 0),
(25, 'UMBRA NATA AJI SASTRO PUTRA', 'umbra.aji02@gmail.com', 'PALEMBANG', '2000-07-02', 'JL. KAPTEN ANWAR ARSYAD LRG. MELATI NO. 4187 RT. 034 RW. 009 KEL. DEMANG LEBAR DAUN KEC. ILIR BARAT I PALEMBANG SUMATERA SELATAN 30137', '081958049427', 'UNIVERSITAS SRIWIJAYA', 'JL. RAYA PALEMBANG - PRABUMULIH KM. 32 INDRALAYA OGAN ILIR SUMATERA SELATAN 30662\r\n', '5X57LV', 'kursus', 1, 'anggota', '2.950.000', 'b04d0ac2408196fefa2014d43aa7795f.jpg', 1, 'ba470ef73e06acef23f2988779fb6c06.png', 1575950594, 1576464505),
(26, 'Diana Novita', 'diananovita62@rocketmail.com', 'Palembang', '1998-11-11', 'Jl. Prof. Dr. Soepomo no. 1114, Kota Palembang, kelurahan pahlawan, kecamatan Kemuning, 30126', '087884782116', '', '', '01WH9N', 'kursus', 1, 'anggota', '2.950.000', '797aa8046acb4f3cd6d10750fd3ece39.jpg', 1, 'e18aa777dc8f51dcc8283c93af308bf7.jpg', 1576733145, 1576809168),
(29, 'Jefi Riana', 'jefir27@gmail.com', 'Palembang', '1998-02-07', 'Jl. Kedondong No. 71, Kemang Manis, Bukit Besar, Palembang', '089621788704', 'Universitas Katolik Musi Charitas', 'Jl. Bangau No. 60', 'SOAT7P', 'kursus', 1, 'anggota', '2.950.000', 'fca61f12a55b241b4e5b04eb6e54036f.jpg', 1, '4706d42b69849584f54447556019072a.jpg', 1576733471, 1576809174),
(30, 'Emi Yulia Siska', 'siskaemi74@gmail.com', 'Palembang', '1974-07-01', 'Jl. Trikora Lorong Sepakat No.1418 RT.14 RW.04 Kelurahan Demang Lebar Daun Kecamatan IB I Palembang', '081377940909', 'UIN Raden Fatah Palembang', 'Jl. Prof KH. Zainal Abidin Fikri No. 1 km.3,5 Palembang', 'PXVIQM', 'seminar', 14, 'anggota', '5.500.000', '42fbb4fc2f53146a5e2d1c91666e8235.jpg', 1, '587635ea771d44621c3266c502c7e1d4.jpg', 1577354415, 1577355662),
(32, 'Dewi Fitriyani', 'dewi_fitriyani@unja.ac.id', 'Jambi', '1981-08-02', 'Jl. Sersan Bais Komp. Unja RT.05 No.44 Kenali Besar Jambi 36129', '081366090329', 'Universitas Jambi', 'Jurusan Akuntansi Fakultas Ekonomi dan Bisnis Universitas Jambi\r\nJl. Raya Jambi-Bulian Km.15 Mendalo Indah - Kab. Muaro Jambi 36361', '1WDIVD', 'seminar', 14, 'anggota', '5.500.000', '17b74cc26dd1981fced88bd15e68e81b.jpg', 1, '59f0a10212a59b706d1f413ab53a95cd.jpeg', 1578298445, 1579057612),
(34, 'ARSYTA RATRI PRAMUDITA', 'arsytapramudita@gmail.com', 'Palembang', '1997-11-11', 'Jl. Kebun Bunga Lrg. Jaya Kesuma No.1478 RT.14/RW.04 Kel. Kebun Bunga Kec. Sukarami, Kota Palembang', '081272649286', 'Universitas Sriwijaya', 'Jl. Srijaya Negara Kel. Bukit Lama Kec. Ilir Barat I, Bukit Kota Palembang', '4ZKTUM', 'kursus', 10, 'anggota', '450.000', 'bac249683e3d916b784823f63f40cfd0.jpeg', 1, '7dcab4c33d6e969a4ceb3a853815ac8f.jpeg', 1579575846, 1580216649),
(36, 'Septiani Fransisca', 'septiani.fransisca@binadarma.ac.id', 'Palembang', '1988-09-20', 'Perum Rajawali Residence Blok B No.6, RT.21 RW.06 Kel.Gandus Kec.Gandus Kota Palembang 30149', '085279796767', 'Universitas Sriwijaya', 'Jl. Srijaya Negara Kota Palembang', '7AHVFT', 'kursus', 15, 'anggota', '500.000', 'ce64fcb8585a3c82ffe80a2c7a460826.jpeg', 1, '4e2dbbf341de7bb6f9f001b8555cc096.jpeg', 1581659176, 1581661512),
(37, 'Nadya Shinta Savira Gunawan', 'nadyashintasg@gmail.com', 'Palembang', '1998-08-29', 'Jl. Beringin No. 5 Komp. PT PUSRI RT 002 / RW 001 Kel. Sei Selayur Kec. Kalidoni Palembang', '081377603393', '', '', 'EOAG13', 'kursus', 10, 'anggota', '450.000', 'c8e762031f4a75a09e5e3e32427b0ce2.jpg', 1, '5743c39369c9791afcbca78c07e075c8.png', 1582342943, 1582784260);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_kategori` varchar(20) NOT NULL,
  `berita_image` varchar(128) NOT NULL,
  `berita_tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_kategori`, `berita_image`, `berita_tanggal`) VALUES
(5, 'SEMINAR NASIONAL: SUSTAINABILITY REPORTING 2019', '   <p style=\"text-align: justify;\">IAI Wil. Sumsel bersama IAI Wil. Babel Selenggarakan</p>\r\n\r\n<p style=\"text-align: justify;\">Seminar Nasional di Pangkal Pinang</p>\r\n\r\n<p style=\"text-align: justify;\">Palembang, 25 November 2019. Ikatan Akuntan Indonesia (IAI) Wilayah Sumatera Selatan menyelenggarakan Seminar Nasional <em>Sustainability Reporting</em>: “Peluang dan Tantangan bagi Industri Praktisi dan Akademisi”. Acara berlangsung pada tanggal 16 November 2019 bertempat di Hotel Santika Pangkal Pinang. Seminar Nasional ini dihadiri oleh 127 orang yang terdiri dari praktisi, akademisi, serta pelaku industri dan mahasiswa. Seminar Nasional ini dihadiri oleh 127 orang yang terdiri dari praktisi, akademisi, serta pelaku industri dan mahasiswa. Seminar nasional ini dapat berjalan lancar sesuai harapan berkat dukungan dari bebagai pihak baik para sponsor, panitia, cohost serta peserta.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Acara dibuka oleh Ibu Inten Meutia, CA perwakilan dari IAI Wil. Sumsel dan IAI Wil. Babel. Semianar nasional ini dilaksanakan untuk memperkenalkan dan menambah pemahaman serta membuka wawasan mengenai <em>Sustainability Reporting</em> dilihat dari sisi Perusahaan dan Perbankan sebagai Praktisi, Pemerintah sebagai Regulator serta Akademisi, maka dari itu panitia menghadirkan lima Narasumber dari Instansi yang berbeda yaitu Bapak Eko Ganis Sukoharsono dari <em>Institute of Certified Sustainability Practitioners</em>, Ibu Mariska Sukmajaya dari WWF-Indonesia, Bapak Gustaf Rajagukguk dri Otoritas Jasa Keuangan , Bapak Septyo Cholidie dari PT Bukit Asam, dan Bapak Ali Darwin dari <em>National Center for Sustainability Reporting.</em></p>\r\n\r\n<p style=\"text-align: justify;\">Penyusunan laporan keberlanjutan atau yang dikenal dengan <em>Sustainability Reporting&nbsp;</em>merupakan terobosan baru yang dibuat oleh regulator untuk merespon <em>stakeholders </em>terhadap kepedulian korporasi terhadap keselamatan lingkungan. Penyusunan laporan keberlanjutan menjadi sesuatu yang penting karena terdapat prinsip dan standar pengungkapan yang mencerminkan tingkat aktivitas perusahaan secara menyeluruh.Dengan adanya hal tersebut, kinerja perusahaan dapat dinilai oleh pemerintah, masyaratkat, organisasi lingkungan, media massa, dan khususnya investor dan kreditor.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 'Laporan', 'SEMINAR_NASIONAL:_SUSTAINABILITY_REPORTING_20191.jpg', 1574752574),
(6, 'WORKSHOP PAJAK OLEH IAI WILAYAH SUMSEL', ' <p style=\"text-align: justify;\">Palembang, 25 November 2019. Ikatan Akuntan Indonesia (IAI) Wilayah Sumatera Selatan menyelenggarakan Workshop Pajak selama dua hari dengan mengusung dua tema yaitu “Persiapan Menghadapi Pemeriksaan Pajak Pasca SPT Tahunan” di hari pertama dan “Aspek Perpajakan Pada Yayasan Pendidikan, Rumah Sakit dan Perkebunan” di hari kedua. Workshop berlangsung pada tanggal 26 dan 27 Oktober 2019 bertempat di Hotel Azza Palembang. Narasumber yang dihadirkan pada workshop ini adalah Bapak Basri Musri, beliau merupakan Tim Ahli Bidang Pengembangan Akuntan Perpajakan IAI KAPj dan Dosen Maksi FEB Universitas Indonesia.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Dihari pertama Bapak Basri Musri berbagi tips dan trik serta solusi untuk persiapan menghadapi pemeriksaaan pajak secara bijak, agar terhindar dari sanksi-sanksi yang ada. Pada hari kedua segala aspek pajak yang berkaitan dengan 3 (tiga) badan usaha yaitu rumah sakit, pendidikan dan perkebunan dikupas secara tuntas bersama-sama oleh Bapak Basri Musri dan para peserta.</p>\r\n', 'Laporan', 'WORKSHOP_PAJAK_OLEH_IAI_WILAYAH_SUMSEL.jpg', 1574831338),
(9, 'Penandatangan MoU antara IAI Wil. Sumsel dan UNPAL pada Workshop Metode Pembelajaran Akuntansi Syariah serta Mengenal Metodologi Penelitian Kualitatif', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;color:black\">Palembang,\r\n27 November 2019. Ikatan Akuntan Indonesia (IAI) Wilayah Sumatera Selatan\r\nbekerja sama dengan Universitas Palembang menyelenggarakan workshop “Metode\r\nPembelajaran Akuntansi Syariah serta Mengenal Metodologi Penelitian Kualitatif\r\ndi bidang Akuntansi”. Acara tersebut berlangsung pada hari Kamis, 10 Oktober\r\n2019 di Aula Mindar Manurung Universitas Palembang dengan tiga narasumber yaitu\r\nProf. Tjiptohadi Sawarjuwono yang merupakan&nbsp;\r\nKetua Dewan Penasehat IAI Wil. Jawa Timur, Prof. Iwan Triyuwono seorang\r\nKoordinator Forum Dosen Akuntansi Syariah IAI-KAPd, dan yang terakhir Ibu Inten\r\nMeutia, CA Ketua IAI Wil. Sumsel.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;color:black\">Pada Acara\r\nini dilakukan penandatangan MoU antara pihak IAI Wil. Sumsel yang diwakili oleh\r\nIbu Inten Meutia, CA dan Universitas Palembang yang diwakili oleh Pembantu\r\nRektor IV Bapak IR. Joni Phillep Rompas. Penandatanganan ini dilakukan dalam\r\nrangka kerjasama untuk peningkatan dan pengembangan ilmu pengetahuan khususnya\r\ndalam bidang akuntansi dan perpajakan. Sebanyak 58 orang peserta menghadiri\r\nworkshop “Metode Pembelajaran Akuntansi Syariah serta Mengenal Metodologi Penelitian\r\nKualitatif di bidang Akuntansi” yang terdiri dari Mahasiswa, Dosen, Serta\r\npelaku bisnis syariah.&nbsp; Kegiatan ini\r\ndilatarbelakangi fenomena perkembangan ekonomi syariah yang ada di indonesia.\r\nSaat ini perkembangan ekonomi syariah tidak hanya didominasi oleh perbankan\r\nsyariah namu telah menyentuh lembanga-lembaga keuangan non bank dan bisnis\r\nberbasis syariah. Oleh Karena itu akuntan pendidik, mahasiswa, dan para pelaku\r\nbisnis agar dapat bersinergi dengan perkembangan ekonomi syariah secara\r\nmendalam dan mengembangkan metode pembelajarannya.<o:p></o:p></span></p>', 'Event', 'Penandatangan_MoU_antara_IAI_Wil._Sumsel_dan_UNPAL_pada_Workshop_Metode_Pembelajaran_Akuntansi_Syariah_serta_Mengenal_Metodologi', 1574929090),
(10, 'Pelaksanaan GRI STANDARDS CERTIFIED TRAINING ON SUSTAINABILITY REPORTING', '<div>Palembang, 27-29 Januari 2020.</div><div>Telah diselenggarakan kegiatan PPL dari IAI Sumsel kerjasama dengan National Center for Sustainability Reporting (NCSR) b<span style=\"font-size: 1rem;\">ersama narasumber Bapak Dr. Ali Darwin, Ak., M.Sc. yang merupakan Chairman and Executive Director of the National Center for Sustainability Reporting (NCSR). Kegiatan ini diikuti oleh 12 orang peserta berlatar belakang akademisi, baik Dosen maupun Mahasiswa. Diharapkan dengan terlaksananya kegiatan ini dapat menambah pengetahuan dan wawasan lebih mengenai \"Sustainability\"</span></div>', 'Event', 'Pelaksanaan_GRI_STANDARDS_CERTIFIED_TRAINING_ON_SUSTAINABILITY_REPORTING.png', 1580285639);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `foto`, `tanggal`) VALUES
(16, 'banner_aplikom.png', 1574047983);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotoberjalan`
--
ALTER TABLE `fotoberjalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotopopup`
--
ALTER TABLE `fotopopup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`jenis_kegiatan`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `tipe` (`tipe`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fotoberjalan`
--
ALTER TABLE `fotoberjalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fotopopup`
--
ALTER TABLE `fotopopup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kursus`
--
ALTER TABLE `kursus`
  ADD CONSTRAINT `kursus_ibfk_1` FOREIGN KEY (`tipe`) REFERENCES `kegiatan` (`jenis_kegiatan`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`course`) REFERENCES `kursus` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
