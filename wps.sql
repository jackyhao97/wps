-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2023 pada 04.47
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `konten` text NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id`, `konten`, `modified_by`, `modified_on`) VALUES
(12, '<p>Our company name is PT Widya Presisi Solusi. We chose the name&nbsp; <strong>Widya</strong>&nbsp;meaning knowledge because we want to give solutions based on our skills and expertise to your management and your employees to become a great company. As Sir Francis Bacon said,&nbsp;<strong>Knowledge is Power</strong>&nbsp;or in Latin&nbsp;<i>Scientia potentia est</i>.</p><p>&nbsp;</p><p>Being an experienced consultant from one of the big four accounting firms and a leader from a multinational company for more than 20 years has allowed us to garner invaluable experiences that will be beneficial in guiding your company. We believe it will help us to assist you in solving your problems.</p><p>&nbsp;</p><p>We focus on improving your Business Processes by providing these services:</p><ol><li>Payroll Outsourcing to help you focus on your core business.</li><li>Implement Payroll and Employee Self Service Software to make your processes more efficient and controlled</li><li>Business process outsourcing to assist you in other noncore processes such as accounting, recruitment, and other administrations.</li><li>&nbsp;IT security to protect your network from any vulnerable threat</li></ol><p>&nbsp;</p><h4><strong>Vision</strong></h4><p>&nbsp;</p><p>To be the best consulting company in Indonesia by providing persistent services in payroll outsourcing &amp; HR software</p><p>&nbsp;</p><h4><strong>Mission</strong></h4><p>&nbsp;</p><p>To provide the right solution to our clients based on the in-depth knowledge and experience in the client\'s Industries and based on Indonesia\'s regulation.</p><p>&nbsp;</p><h4><strong>Values</strong></h4><p>&nbsp;</p><ul><li>Integrity</li><li>Passionate to fulfill client’s needs</li><li>Professional</li><li>Positive attitude</li><li>Teamwork</li><li>Continuous learning to become agile and resilient</li></ul><p>&nbsp;</p><h4><strong>Quality Policy</strong></h4><p>&nbsp;</p><p>The WPSian is always persistent and proactive in meeting the customer\'s needs by working precision (correct &amp; meticulous) with agility and ensures the maintenance of confidentiality so that all parties are satisfied in receiving what is duly theirs on time.<br>All parties are including employees, clients, and the Government (Tax, BPJS Ketenagakerjaan &amp; Health).<br>With the implementation of the ISO 9001 &amp; ISO 27001, we expect that client and client\'s employee satisfaction and security experience can provide a reward for the prosperity of employees, management, and shareholders.</p>', 'admin', '2023-03-06 14:50:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_career`
--

CREATE TABLE `tb_career` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `requirement` text NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_career`
--

INSERT INTO `tb_career` (`id`, `title`, `requirement`, `urutan`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(2, 'Payroll Consultant', '<p><span id=\"ContentPlaceHolder1_lblDetail\">Is responsible to mainly calculate Client\'s payroll on time.</span></p><p><span id=\"ContentPlaceHolder1_lblDetail\">Requirements :</span></p><ul><li><span id=\"ContentPlaceHolder1_lblDetail\">Fresh graduate from Tax or Accounting (Diploma (D3) or University)</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Like to calculate meticolous numbers</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Willing to meet to deadline or hardworking</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Good at communicating with client to obtain data and explain report</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Good at excel software and ability to learn payroll software</span></li></ul>', 1, 'admin', '2023-03-15 14:16:26', '', '0000-00-00 00:00:00'),
(3, 'IT Support', '<p><span id=\"ContentPlaceHolder1_lblDetail\">Bertanggung jawab untuk mengimplementasikan software payroll atau ERP sesuai dengan metodologi yang ditentukan. Bertanggung jawab terhadap kegiatan IT Support</span></p><p><span id=\"ContentPlaceHolder1_lblDetail\">Persyaratan:</span></p><ul><li><span id=\"ContentPlaceHolder1_lblDetail\">S1 jurusan Sistem Informasi, Teknik Informatika atau jurusan lain yang terkait dengan IPK minimal 3 dan SMA IPA yang senang untuk belajar mengenai sistem informasi/IT.</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Mengerti data base seperti Microsoft SQL dan mengetahui pembuatan report: misal crystal report</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Mau bekerja keras dan berinisiatif untuk mengatasi tantangan untuk memenuhi kebutuhan klien.</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Mampu menyelesaikan pekerjaan tepat waktu.</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Mampu berkomunikasi baik dengan klien.</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Dapat bekerja sendiri dan bekerja dalam tim.</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Kemampuan bahasa Inggris adalah nilai tambah.</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\">Berpengalaman pada <strong>Database dan Report</strong> menjadi nilai tambah</span></li><li><span id=\"ContentPlaceHolder1_lblDetail\"><strong>Dapat bekerja di bawah tekanan</strong></span></li></ul>', 2, 'admin', '2023-03-15 14:16:47', '', '0000-00-00 00:00:00'),
(4, 'Finance/Accounting Consultant', '<p><span id=\"ContentPlaceHolder1_lblDetail\">Bertanggung jawab dan mampu mengimplementasikan berbagai cara praktis untuk menyusun laporan keuangan, pembayaran invoice baik Intern maupun Eksternal dengan tugas tanggung jawab utama:</span></p><ul style=\"list-style-type:circle;\"><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Mengerjakan administrasi pembayaran dan penagihan</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Menindaklanjuti tagihan yang dikirimkan kepada Klien</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Membantu pelaporan dan pembayaran pajak</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Menyusun jurnal dari transaksi bank dan kas kecil</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Menyusun Laporan Keuangan</span></li></ul><p><span id=\"ContentPlaceHolder1_lblDetail\">Persyaratan yang diinginkan:</span></p><ul style=\"list-style-type:circle;\"><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Jurusan Akuntansi dengan IPK minimal 2.8</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Senang menghitung atau berhubungan dengan angka</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Teliti</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Mampi bekerja di bawah tekanan / deadline</span></li><li style=\"list-style-type:circle;\"><span id=\"ContentPlaceHolder1_lblDetail\">Multitasking</span></li></ul>', 3, 'admin', '2023-03-15 14:17:11', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`id`, `category`, `tipe`, `urutan`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Berita', 'berita', 1, '2023-03-18 14:02:14', 'admin', '2023-03-18 14:02:25', 'admin'),
(2, 'Terpopuler', 'terpopuler', 2, '2023-03-18 14:02:35', 'admin', '2023-03-23 00:41:51', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_clients`
--

CREATE TABLE `tb_clients` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_clients`
--

INSERT INTO `tb_clients` (`id`, `path`, `url`, `created_on`, `created_by`, `modified_by`, `modified_on`) VALUES
(10, 'CLIENT_141_1678549535.jpg', 'https://www.yara.com/', '2023-03-11 16:44:58', 'admin', 'admin', '2023-03-11 16:45:35'),
(11, 'CLIENT_53_1678625886.jpg', 'https://www.wri.org/', '2023-03-12 13:58:06', 'admin', '', '0000-00-00 00:00:00'),
(12, 'CLIENT_295_1678625908.jpg', 'https://www.weidmuller.com/en/index.jsp', '2023-03-12 13:58:28', 'admin', '', '0000-00-00 00:00:00'),
(13, 'CLIENT_481_1678625951.jpg', 'https://www.vivere.co.id/', '2023-03-12 13:59:11', 'admin', '', '0000-00-00 00:00:00'),
(14, 'CLIENT_784_1678625964.jpg', 'https://www.vfc.com/', '2023-03-12 13:59:24', 'admin', '', '0000-00-00 00:00:00'),
(15, 'CLIENT_721_1678625983.jpg', 'https://www.unilever.co.id/', '2023-03-12 13:59:43', 'admin', '', '0000-00-00 00:00:00'),
(16, 'CLIENT_326_1678625996.jpg', 'https://www.uangme.id/', '2023-03-12 13:59:56', 'admin', '', '0000-00-00 00:00:00'),
(17, 'CLIENT_878_1678626039.jpg', 'https://tungaloy.com/', '2023-03-12 14:00:39', 'admin', '', '0000-00-00 00:00:00'),
(18, 'CLIENT_992_1678626053.jpg', 'https://www.trouwnutritionasiapacific.com/en-id/', '2023-03-12 14:00:53', 'admin', '', '0000-00-00 00:00:00'),
(19, 'CLIENT_509_1678626067.jpg', 'https://www.tableau.com/', '2023-03-12 14:01:07', 'admin', '', '0000-00-00 00:00:00'),
(20, 'CLIENT_758_1678626083.jpg', '', '2023-03-12 14:01:23', 'admin', '', '0000-00-00 00:00:00'),
(21, 'CLIENT_428_1678626099.jpg', 'https://www.samsung.com/id/', '2023-03-12 14:01:39', 'admin', '', '0000-00-00 00:00:00'),
(22, 'CLIENT_274_1678626114.jpg', '', '2023-03-12 14:01:54', 'admin', '', '0000-00-00 00:00:00'),
(23, 'CLIENT_92_1678626135.jpg', 'https://www.procurri.com', '2023-03-12 14:02:15', 'admin', '', '0000-00-00 00:00:00'),
(24, 'CLIENT_340_1678626157.jpg', 'https://www.peremeks.com', '2023-03-12 14:02:37', 'admin', '', '0000-00-00 00:00:00'),
(25, 'CLIENT_685_1678626173.jpg', '', '2023-03-12 14:02:53', 'admin', '', '0000-00-00 00:00:00'),
(26, 'CLIENT_161_1678626207.jpg', '', '2023-03-12 14:03:27', 'admin', '', '0000-00-00 00:00:00'),
(27, 'CLIENT_153_1678626220.jpg', '', '2023-03-12 14:03:40', 'admin', '', '0000-00-00 00:00:00'),
(28, 'CLIENT_7_1678626233.jpg', 'https://m.mobilelegends.com', '2023-03-12 14:03:53', 'admin', '', '0000-00-00 00:00:00'),
(29, 'CLIENT_459_1678626249.jpg', 'https://moie.com', '2023-03-12 14:04:09', 'admin', '', '0000-00-00 00:00:00'),
(30, 'CLIENT_780_1678626262.jpg', '', '2023-03-12 14:04:22', 'admin', '', '0000-00-00 00:00:00'),
(31, 'CLIENT_540_1678626281.jpg', '', '2023-03-12 14:04:41', 'admin', '', '0000-00-00 00:00:00'),
(32, 'CLIENT_252_1678626293.jpg', '', '2023-03-12 14:04:53', 'admin', '', '0000-00-00 00:00:00'),
(33, 'CLIENT_539_1678626317.jpg', '', '2023-03-12 14:05:17', 'admin', '', '0000-00-00 00:00:00'),
(34, 'CLIENT_89_1678626338.jpg', '', '2023-03-12 14:05:38', 'admin', '', '0000-00-00 00:00:00'),
(35, 'CLIENT_823_1678626352.jpg', '', '2023-03-12 14:05:52', 'admin', '', '0000-00-00 00:00:00'),
(36, 'CLIENT_552_1678626375.jpg', '', '2023-03-12 14:06:15', 'admin', '', '0000-00-00 00:00:00'),
(37, 'CLIENT_685_1678626384.jpg', '', '2023-03-12 14:06:24', 'admin', '', '0000-00-00 00:00:00'),
(38, 'CLIENT_407_1678626390.jpg', '', '2023-03-12 14:06:30', 'admin', '', '0000-00-00 00:00:00'),
(39, 'CLIENT_168_1678626400.jpg', 'https://www.techinasia.com/companies/innotech-asia', '2023-03-12 14:06:40', 'admin', '', '0000-00-00 00:00:00'),
(40, 'CLIENT_245_1678626414.jpg', 'https://iif.co.id/id/', '2023-03-12 14:06:54', 'admin', '', '0000-00-00 00:00:00'),
(41, 'CLIENT_393_1678626428.jpg', 'https://www.iff.com', '2023-03-12 14:07:08', 'admin', '', '0000-00-00 00:00:00'),
(42, 'CLIENT_291_1678626441.jpg', 'https://www.idemia.com', '2023-03-12 14:07:21', 'admin', '', '0000-00-00 00:00:00'),
(43, 'CLIENT_527_1678626456.jpg', 'https://www.huya.com', '2023-03-12 14:07:36', 'admin', '', '0000-00-00 00:00:00'),
(44, 'CLIENT_447_1678626472.jpg', 'https://www.hollysys.com', '2023-03-12 14:07:52', 'admin', '', '0000-00-00 00:00:00'),
(45, 'CLIENT_723_1678626483.jpg', 'https://www.groz-beckert.com', '2023-03-12 14:08:03', 'admin', '', '0000-00-00 00:00:00'),
(46, 'CLIENT_28_1678626496.jpg', 'https://grameenfoundation.org', '2023-03-12 14:08:16', 'admin', '', '0000-00-00 00:00:00'),
(47, 'CLIENT_623_1678626512.jpg', '', '2023-03-12 14:08:32', 'admin', '', '0000-00-00 00:00:00'),
(48, 'CLIENT_276_1678626523.jpg', 'https://www.grainger.ca/en', '2023-03-12 14:08:43', 'admin', '', '0000-00-00 00:00:00'),
(49, 'CLIENT_450_1678626533.jpg', 'https://www.geoservices.co.id', '2023-03-12 14:08:53', 'admin', '', '0000-00-00 00:00:00'),
(50, 'CLIENT_510_1678626545.jpg', 'https://gamelygames.com', '2023-03-12 14:09:05', 'admin', '', '0000-00-00 00:00:00'),
(51, 'CLIENT_543_1678626558.jpg', 'https://gama-group.co.id/?p=543', '2023-03-12 14:09:18', 'admin', '', '0000-00-00 00:00:00'),
(52, 'CLIENT_194_1678626570.jpg', 'https://www.fruit.com', '2023-03-12 14:09:30', 'admin', '', '0000-00-00 00:00:00'),
(53, 'CLIENT_810_1678626580.jpg', 'https://www.durr.com', '2023-03-12 14:09:40', 'admin', '', '0000-00-00 00:00:00'),
(54, 'CLIENT_873_1678626592.jpg', ' http://www.douyu.com', '2023-03-12 14:09:52', 'admin', '', '0000-00-00 00:00:00'),
(55, 'CLIENT_390_1678626606.jpg', 'https://www.discovery.com', '2023-03-12 14:10:06', 'admin', '', '0000-00-00 00:00:00'),
(56, 'CLIENT_969_1678626618.jpg', '', '2023-03-12 14:10:18', 'admin', '', '0000-00-00 00:00:00'),
(57, 'CLIENT_338_1678626630.jpg', 'https://www.clozette.co.id/', '2023-03-12 14:10:30', 'admin', '', '0000-00-00 00:00:00'),
(58, 'CLIENT_757_1678626642.jpg', '', '2023-03-12 14:10:42', 'admin', '', '0000-00-00 00:00:00'),
(59, 'CLIENT_560_1678626654.jpg', 'https://www.ciputra.com/en/homepage-en/', '2023-03-12 14:10:54', 'admin', '', '0000-00-00 00:00:00'),
(60, 'CLIENT_168_1678626664.jpg', '', '2023-03-12 14:11:04', 'admin', '', '0000-00-00 00:00:00'),
(61, 'CLIENT_124_1678626676.jpg', 'https://www.cemindo.com/en', '2023-03-12 14:11:16', 'admin', '', '0000-00-00 00:00:00'),
(62, 'CLIENT_806_1678626687.jpg', '', '2023-03-12 14:11:27', 'admin', '', '0000-00-00 00:00:00'),
(63, 'CLIENT_729_1678626694.jpg', '', '2023-03-12 14:11:34', 'admin', '', '0000-00-00 00:00:00'),
(64, 'CLIENT_527_1678626703.jpg', '', '2023-03-12 14:11:43', 'admin', '', '0000-00-00 00:00:00'),
(65, 'CLIENT_225_1678626714.jpg', 'https://www.bigo.tv/id/', '2023-03-12 14:11:54', 'admin', '', '0000-00-00 00:00:00'),
(66, 'CLIENT_321_1678626728.jpg', 'https://belantara.or.id/', '2023-03-12 14:12:08', 'admin', '', '0000-00-00 00:00:00'),
(67, 'CLIENT_535_1678626742.jpg', '', '2023-03-12 14:12:22', 'admin', '', '0000-00-00 00:00:00'),
(68, 'CLIENT_919_1678626748.jpg', 'https://www.basf.com/id/id.html', '2023-03-12 14:12:28', 'admin', '', '0000-00-00 00:00:00'),
(69, 'CLIENT_824_1678626759.jpg', '', '2023-03-12 14:12:39', 'admin', '', '0000-00-00 00:00:00'),
(70, 'CLIENT_582_1678626768.jpg', '', '2023-03-12 14:12:48', 'admin', '', '0000-00-00 00:00:00'),
(71, 'CLIENT_114_1678626777.jpg', 'https://www.asliri.id/', '2023-03-12 14:12:57', 'admin', '', '0000-00-00 00:00:00'),
(72, 'CLIENT_121_1678626787.jpg', 'https://alizhar.sch.id/', '2023-03-12 14:13:07', 'admin', '', '0000-00-00 00:00:00'),
(73, 'CLIENT_856_1678626797.jpg', 'https://www.alfatrex.id/', '2023-03-12 14:13:17', 'admin', '', '0000-00-00 00:00:00'),
(74, 'CLIENT_12_1678626807.jpg', '', '2023-03-12 14:13:27', 'admin', 'admin', '2023-03-12 14:13:41'),
(75, 'CLIENT_810_1678626836.jpg', '', '2023-03-12 14:13:56', 'admin', '', '0000-00-00 00:00:00'),
(76, 'CLIENT_910_1678626844.jpg', 'https://www.aica.co.id/?lang=id', '2023-03-12 14:14:04', 'admin', '', '0000-00-00 00:00:00'),
(77, 'CLIENT_914_1678626852.jpg', 'https://www.adecco.com/', '2023-03-12 14:14:12', 'admin', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `name`, `email`, `subject`, `topic`, `message`) VALUES
(3, 'Jacky', 'jacky@gmail.com', 'Subject untuk testing', 'Payroll Administration', 'Message untuk testing apakah data yang dikirim itu berhasil masuk.'),
(4, 'testing', 'testing@gmail.com', 'testing lagi', 'IT Security', 'testing 123 testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123'),
(5, 'testing', 'testing@gmail.com', 'testing lagi', 'IT Security', 'testing 123 testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123testing 123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_content`
--

CREATE TABLE `tb_content` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_content`
--

INSERT INTO `tb_content` (`id`, `judul`, `keterangan`, `path`, `urutan`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(9, 'CYBER-SECURITY AND ZERO TRUST NETWORK ACCESS', 'Mitigate the risk of cyber attacks on the internal network and end-users.', 'CONTENT_782_1678525512.jpg', 1, '2023-03-05 03:13:39', 'admin', '2023-03-11 10:05:12', 'admin'),
(11, 'HR SYSTEM EMPLOYEE SELF-SERVICE', 'Reducing Adminstrative Work of Processing Leaves and Medical Claims', 'CONTENT_642_1678525552.jpg', 2, '2023-03-05 03:20:33', 'admin', '2023-03-11 10:05:52', 'admin'),
(12, 'OTHER BUSINESS PROCESS OUTSOURCING', 'Other BPO Service for HR, Accounting, Finance, Tax, Purchasing and GA', 'CONTENT_506_1678525587.jpg', 3, '2023-03-05 03:21:39', 'admin', '2023-03-11 10:06:27', 'admin'),
(13, 'PAYROLL ADMINISTRATOR/ PROFESSIONAL EMPLOYER ORGANIZATION', 'Contract your employee to work for your company', 'CONTENT_240_1678525622.jpg', 4, '2023-03-05 03:22:18', 'admin', '2023-03-11 10:07:02', 'admin'),
(14, 'PAYROLL OUTSOURCING', 'Process confidential salary information on time and accurately', 'CONTENT_876_1678525648.jpg', 5, '2023-03-05 03:22:58', 'admin', '2023-03-11 10:19:24', 'admin'),
(15, 'WPS E-LEARNING PLATFORM', 'An e-Learning platform to develop our people and your people', 'CONTENT_725_1678525685.jpg', 6, '2023-03-05 03:23:30', 'admin', '2023-03-11 10:21:55', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen_slider`
--

CREATE TABLE `tb_dokumen_slider` (
  `id` int(11) NOT NULL,
  `slider_id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dokumen_slider`
--

INSERT INTO `tb_dokumen_slider` (`id`, `slider_id`, `img_path`, `urutan`, `created_on`, `created_by`) VALUES
(15, 18, 'SLIDER_WIDYA PRESISI SOLUSI_1677594459.jpg', 1, '2023-02-28 15:27:39', 'admin'),
(16, 19, 'SLIDER_PAYROLL OUTSOURCING_1677594471.jpg', 2, '2023-02-28 15:27:51', 'admin'),
(17, 20, 'SLIDER_208_1678521757.jpg', 3, '2023-03-11 09:02:37', 'admin'),
(18, 21, 'SLIDER_183_1678521772.jpg', 4, '2023-03-11 09:02:52', 'admin'),
(19, 22, 'SLIDER_37_1678521783.jpg', 5, '2023-03-11 09:03:03', 'admin'),
(20, 23, 'SLIDER_313_1678521797.jpg', 6, '2023-03-11 09:03:17', 'admin'),
(21, 24, 'SLIDER_128_1678521807.jpg', 7, '2023-03-11 09:03:27', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tgl_berita` date NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `seo_link` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id`, `judul`, `category_id`, `tgl_berita`, `keterangan`, `path`, `seo_link`, `urutan`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(2, 'teststest', 1, '2023-03-18', '<p>sdfsdaf</p><p>sf</p><p>sd</p><p>fsd</p><p>f</p><p>sdf</p>', 'NEWS_420_1679154017.jpg', 'teststest', 1, '2023-03-18 16:40:17', 'admin', '2023-03-22 10:25:46', 'admin'),
(3, 'sdfsdfsdfsfd', 2, '2023-03-20', '<p>asdfsdaf</p><p>sadf</p><p>sad</p><p>fsad</p><p>f</p><p>asdf</p><p>fgh</p>', 'NEWS_492_1679210292.jpg', 'sdfsdfsdfsfd', 2, '2023-03-19 08:18:12', 'admin', '2023-03-22 10:25:51', 'admin'),
(7, 'testes', 2, '2023-03-19', '<p>sdfsdf</p><p>sdf</p><p>sdf</p><p>sdf</p><figure class=\"image\"><img src=\"https://sardanagroup.co.id/HP/production/images/news/pencapaian mitsubishi di iims 2023.jpg\"></figure><p>sdfsdfsdf</p><figure class=\"image\"><img src=\"https://sardanagroup.co.id/HP/production/images/news/Prestasi Mitsubishi Triton.jpg\"></figure><p>sdfsdfsdfsdfsdf</p><figure class=\"image\"><img src=\"https://sardanagroup.co.id/HP/production/images/news/Harga Mitsubishi Pajero Sport Medan Maret 2023.jpg\"></figure><figure class=\"image\"><img src=\"http://localhost/wps/admin/img/news/details/dummy-jpg_1679233549.jpg\"></figure>', 'NEWS_507_1679222069.jpg', 'testes', 3, '2023-03-19 11:34:29', 'admin', '2023-03-19 14:57:22', 'admin'),
(8, 'cobababa', 2, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p>', 'NEWS_436_1679477078.jpg', '', 4, '2023-03-22 10:24:38', 'admin', '0000-00-00 00:00:00', ''),
(9, 'tuurururu', 2, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_966_1679477105.jpg', '', 5, '2023-03-22 10:25:05', 'admin', '0000-00-00 00:00:00', ''),
(10, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', '', 6, '2023-03-22 10:25:25', 'admin', '0000-00-00 00:00:00', ''),
(11, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', '', 7, '2023-03-22 10:25:25', 'admin', '0000-00-00 00:00:00', ''),
(12, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', '', 8, '2023-03-22 10:25:25', 'admin', '0000-00-00 00:00:00', ''),
(13, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', '', 9, '2023-03-22 10:25:25', 'admin', '0000-00-00 00:00:00', ''),
(14, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', '', 10, '2023-03-22 10:25:25', 'admin', '0000-00-00 00:00:00', ''),
(15, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', '', 11, '2023-03-22 10:25:25', 'admin', '0000-00-00 00:00:00', ''),
(16, 'owqieuwqieoiu', 1, '2023-03-22', '<p>sdfsdf</p><p>sd</p><p>f</p><p>sdf</p><p>sd</p><p>fs</p><p>df</p><p>sdafsd</p><p>sdf</p>', 'NEWS_831_1679477125.jpg', 'owqieuwqieoiu', 12, '2023-03-22 10:25:25', 'admin', '2023-03-22 14:50:59', 'admin'),
(17, 'Walau dunia membenci ku kan tetap disini & kamu', 1, '2023-03-22', '<p>Berita terhadap kawan yang ada di medan dan sekitarnya</p><p>Berita terhadap kawan yang ada di medan dan sekitarnya</p><p>Berita terhadap kawan yang ada di medan dan sekitarnya</p><p>Berita terhadap kawan yang ada di medan dan sekitarnya</p><p>Berita terhadap kawan yang ada di medan dan sekitarnya</p><p>Berita terhadap kawan yang ada di medan dan sekitarnya</p>', 'NEWS_427_1679491025.jpg', 'walau-dunia-membenci-ku-kan-tetap-disini-kamu', 13, '2023-03-22 14:17:05', 'admin', '2023-03-22 14:19:07', 'admin'),
(18, 'News yang terbaru', 2, '2023-03-23', '<p>news yang terbaru</p><p>news yang terbaru</p><p>news yang terbaru</p><p>news yang terbaru</p><p>news yang terbaru</p><p>news yang terbaru</p>', 'NEWS_368_1679528947.jpg', 'news-yang-terbaru', 13, '2023-03-23 00:49:07', 'admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_partners`
--

CREATE TABLE `tb_partners` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_partners`
--

INSERT INTO `tb_partners` (`id`, `path`, `url`, `created_on`, `created_by`, `modified_by`, `modified_on`) VALUES
(2, 'PARTNER_698_1678714740.jpg', 'https://adecco.com', '2023-03-13 14:38:19', 'admin', 'admin', '2023-03-13 14:39:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_services`
--

CREATE TABLE `tb_services` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_services`
--

INSERT INTO `tb_services` (`id`, `judul`, `keterangan`, `path`, `urutan`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(10, 'Process your confidential salary information on time and accurately', '<p><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;font-size:12.0pt;\"><span style=\"line-height:107%;mso-ansi-language:EN-ID;mso-ascii-theme-font:minor-latin;mso-bidi-language:AR-SA;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\">Payroll outsourcing is highly beneficial because you may focus on your strategic initiative to develop people to achieve the company\'s objectives/goals. We help you concentrate on your core business process and Human Resources Function. We can help you to make your job done payroll process, which sometimes needs time, is tedious and not easy to manage with changing regulations. We are passionate about processing your confidential salary information with high accuracy (including Tax/PPh21 &amp; BPJS) and efficiency so that your employees can receive their meticulously calculated salaries on time in their bank accounts. We can assist you in submitting monthly tax reports and BPJS or Social Benefit Premium so that the information will not be shared between different functions within the organization, ensuring the confidentiality of salary information. In addition, you can get better control of the salary information as your organization, and we can double-check it. Therefore, this will avoid conflict of interest and ensure better accuracy. With our updated tax knowledge and determination to provide the right solution, we ensure that salary and tax calculations meet the regulations not more and, not less.</span></span></p>', 'SERVICES_253_1678540569.jpg', 1, '2023-03-08 14:17:14', 'admin', '2023-03-11 14:16:09', 'admin'),
(11, 'Payroll Administrator/ Professional Employer Organization', '<p class=\"MsoNormal\" style=\"text-align:justify;\"><span style=\"color:#0E101A;font-size:12.0pt;\"><span style=\"line-height:107%;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;\" dir=\"ltr\" lang=\"EN-ID\">Whether you need assistance managing your headcount or plan to start a business in Indonesia, Widya Presisi Solusi (WPS) can help engage your employee to work for your company. Many multinational companies that benefit from a Professional Employer Organization (PEO) have appointed us to administer and provide a contract for your dedicated employees by taking them under our payrolls. Through this, your business will still grow in Indonesia, and at the same time, your local employees can pay taxes in Indonesia and meet their obligation.</span></span><o:p></o:p></p>', 'SERVICES_157_1678540310.jpg', 2, '2023-03-08 14:17:45', 'admin', '2023-03-11 14:11:50', 'admin'),
(12, 'Human Resources Information System connects employees with Human Resources', '<p class=\"MsoNormal\" style=\"text-align:justify;\"><span style=\"color:#0E101A;font-size:12.0pt;\"><span style=\"line-height:107%;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;\" dir=\"ltr\" lang=\"EN-ID\">We are proud that we have developed our software under Autonomous Oracle Database in Oracle Cloud Infrastructure which is well-known as secure and high availability because we want peace of mind for us and our clients. As we have experience processing payroll in various industries for more than eight years, we know the expectation of clients, including different tax rules such as gross, net, or mix gross and net, tax of benefit in kind etc. Our dedicated IT team serves our clients with dynamic and unique requirements to meet their needs and follow regulation rules with a parameter base set up to make it easy to adapt.</span></span><o:p></o:p></p><p class=\"MsoNormal\" style=\"text-align:justify;\">&nbsp;</p><p class=\"MsoNormal\" style=\"text-align:justify;\"><span style=\"color:#0E101A;font-size:12.0pt;\"><span style=\"line-height:107%;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;\" dir=\"ltr\" lang=\"EN-ID\">As we want our clients to be more efficient with connecting among employees, superiors and HR, we also provide apps for employee self-service to make easy connections and transparent among them. We are the first consultant to use emoticon language to express feeling for reporting the attendance and the mood of their feeling/ conditions so that the superior and HR can pay more attention if needed.&nbsp;We also measure whether the employees are happy during the work day or month.</span></span><o:p></o:p></p><p class=\"MsoNormal\" style=\"text-align:justify;\">&nbsp;</p><p class=\"MsoNormal\" style=\"text-align:justify;\"><span style=\"color:#0E101A;font-size:12.0pt;\"><span style=\"line-height:107%;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;\" dir=\"ltr\" lang=\"EN-ID\">We want to provide a reliable HRIS, so we offer apps that identify false attendance and can record without networks to report the attendance.</span><span style=\"line-height:107%;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;mso-spacerun:yes;\" dir=\"ltr\" lang=\"EN-ID\">&nbsp;</span></span><o:p></o:p></p>', 'SERVICES_492_1678540353.jpg', 3, '2023-03-08 14:18:15', 'admin', '2023-03-11 14:12:33', 'admin'),
(13, 'Cyber-security and Zero Trust Network Access', '<p><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;font-size:12.0pt;\"><span style=\"line-height:107%;mso-ansi-language:EN-ID;mso-ascii-theme-font:minor-latin;mso-bidi-language:AR-SA;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\">Information Technology has provided a two-edged sword. It helps to increase productivity and efficiency, which allow people to work from anywhere, but also it adds additional threat as cybercrime, including ransomware and information leak. As we implement ISO 27001, we are responsible for protecting our client information. As a partner of Fortinet, we can share our experiences implementing Fortinet products such as Fortigate and Forti End Point Management Systems to protect the network and end-users. Zero Trust Network Access is the latest technology that helps to mitigate the risk of cyber attacks on the internal network and end-users. Forticlient EMS (Endpoint Management Server) controls and monitors security policies to make users work anywhere with safe access. If there is a risk to the end users, the Forti Client will automatically block the user from accessing the unsafe website. The security administrator can get reports if the end user\'s laptop has critical vulnerabilities to mitigate.</span></span></p>', 'SERVICES_107_1678540404.jpg', 4, '2023-03-08 14:18:31', 'admin', '2023-03-11 14:13:24', 'admin'),
(14, 'WPS e-learning platform', '<p class=\"MsoNormal\" style=\"text-align:justify;\"><span style=\"color:#0E101A;font-size:12.0pt;\"><span style=\"line-height:107%;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-ID;\" dir=\"ltr\" lang=\"EN-ID\">We develop an e-learning platform to develop our people, and you may use it too. Our learning material helps our team to understand to process payroll from tax (PPh21), BPJS Kesehatan and BPJS Tenagakerja, including how to report it. It also allows our employees and clients to utilize our payroll software and Employees Self Services.</span></span><o:p></o:p></p>', 'SERVICES_34_1678540438.jpg', 5, '2023-03-08 14:19:11', 'admin', '2023-03-11 14:13:58', 'admin'),
(15, 'Other business process outsourcing HR Administration', '<p style=\"margin:0in 0in .0001pt;text-align:justify;\"><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;\"><span style=\"mso-ascii-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\">recruitment is tedious and challenging; finding suitable candidates takes work. Our HR is ready to find the right candidate for you from any possible resources that we can reach so that you can get the right person in your organization.&nbsp;&nbsp;</span></span><o:p></o:p></p><p style=\"margin:0in 0in .0001pt;text-align:justify;\"><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;font-size:11.0pt;\"><span style=\"line-height:107%;mso-ansi-language:EN-ID;mso-ascii-theme-font:minor-latin;mso-bidi-language:AR-SA;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-language:EN-US;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\">recruitment is tedious and challenging; finding suitable candidates takes work. Our HR is ready to find the right candidate for you from any possible resources that we can reach so that you can get the right person in your organization.</span></span></p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\"><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;\"><span style=\"mso-ascii-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\"><strong>Accounting</strong>: if you are in a service organization, you can outsource the accounting to us. As we are in the same service business, you do not need a dedicated accounting staff to make monthly financial statements. We can help you make the financial statements for you every month.</span></span><o:p></o:p></p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\"><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;\"><span style=\"mso-ascii-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\"><strong>Finance:</strong></span></span><o:p></o:p></p><p style=\"margin:0in 0in .0001pt;text-align:justify;\"><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;\"><span style=\"mso-ascii-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\">Our unique client trusted us to make payments on behalf of clients, and we will help our client ensure that we transfer on time and manage the cash flow.</span></span><o:p></o:p></p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\"><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;\"><span style=\"mso-ascii-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\"><strong>Tax</strong>: You may outsource your obligation to report monthly withholding tax such as PPh 23 (withholding tax of services), Pph 4.2 (withholding tax of building rental) or PPh21 (withholding tax of employees/individuals) or annual corporate income return. We have prepared and do reporting to the tax office on behalf of our clients and ensure that your company complies with the relevant tax regulation.</span></span><o:p></o:p></p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p style=\"margin:0in 0in .0001pt;text-align:justify;\">&nbsp;</p><p><span style=\"color:#0E101A;font-family:&quot;Calibri&quot;,sans-serif;font-size:12.0pt;\"><span style=\"line-height:107%;mso-ansi-language:EN-ID;mso-ascii-theme-font:minor-latin;mso-bidi-language:AR-SA;mso-bidi-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-language:EN-US;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\" dir=\"ltr\" lang=\"EN-ID\"><strong>Purchasing &amp; GA:</strong>&nbsp;We have experience in helping a client to do purchasing and GA, you may get benefit from us having a shared resource, and we ensure that you will get competitive suppliers from our approved vendor list, and we can also help you to report your WLK (Wajib Lapor Ketenagakerjaan), WLP (Wajib Lapor Perda/Fasilitas Kesejahteraan Pekerja) and BKPM reports as required by regulations.</span></span></p>', 'SERVICES_599_1678540527.jpg', 6, '2023-03-08 14:19:33', 'admin', '2023-03-11 14:15:27', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `name`, `path`, `urutan`, `created_on`, `created_by`, `modified_by`, `modified_on`) VALUES
(18, 'Widya Presisi Solusi', 'SLIDER_30_1678521535.jpg', 1, '2023-02-28 15:27:39', 'admin', 'admin', '2023-03-11 08:58:55'),
(19, 'Business Process Outsourcing', 'SLIDER_14_1678521644.jpg', 2, '2023-02-28 15:27:51', 'admin', 'admin', '2023-03-11 09:00:44'),
(20, 'e-Learning Platform-v1', 'SLIDER_208_1678521757.jpg', 3, '2023-03-11 09:02:37', 'admin', '', '0000-00-00 00:00:00'),
(21, 'it security', 'SLIDER_183_1678521772.jpg', 4, '2023-03-11 09:02:52', 'admin', '', '0000-00-00 00:00:00'),
(22, 'Payroll Administrator', 'SLIDER_37_1678521783.jpg', 5, '2023-03-11 09:03:03', 'admin', '', '0000-00-00 00:00:00'),
(23, 'PAYROLL OUTSOURCING', 'SLIDER_313_1678521797.jpg', 6, '2023-03-11 09:03:17', 'admin', '', '0000-00-00 00:00:00'),
(24, 'V1_HR System and Employee Self-Service', 'SLIDER_128_1678521807.jpg', 7, '2023-03-11 09:03:27', 'admin', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `testimoni` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `nama`, `testimoni`, `path`, `urutan`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(2, 'Andre', '“Dengan memakai jasa Widya Presisi Solusi saya sangat puas sekali karena ketepatan waktu dalam penghitungan payroll”', 'TESTIMONIAL_571_1679580452.jpg', 1, '2023-03-23 15:07:32', 'admin', '0000-00-00 00:00:00', ''),
(3, 'Jacky', '“Dengan memakai jasa Widya Presisi Solusi saya sangat puas sekali karena ketepatan waktu dalam penghitungan payroll”', 'TESTIMONIAL_166_1679665417.jpg', 2, '2023-03-24 14:22:22', 'admin', '2023-03-24 14:43:37', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `isactive`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_career`
--
ALTER TABLE `tb_career`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_content`
--
ALTER TABLE `tb_content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dokumen_slider`
--
ALTER TABLE `tb_dokumen_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_partners`
--
ALTER TABLE `tb_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_career`
--
ALTER TABLE `tb_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_content`
--
ALTER TABLE `tb_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_dokumen_slider`
--
ALTER TABLE `tb_dokumen_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_partners`
--
ALTER TABLE `tb_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
