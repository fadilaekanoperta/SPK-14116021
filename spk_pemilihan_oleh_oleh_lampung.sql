-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2022 pada 02.43
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pemilihan_oleh_oleh_lampung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(4) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `id_ket_kriteria` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `nama_kriteria`, `id_ket_kriteria`) VALUES
('A001', 'Keripik Pisang Gurih', 'Expired Date', 'K001'),
('A002', 'Keripik Pisang Gurih', 'Harga', 'K006'),
('A003', 'Keripik Pisang Gurih', 'Tekstur', 'K011'),
('A004', 'Keripik Pisang Gurih', 'Varian Rasa', 'K018'),
('A005', 'Keripik Pisang Manis', 'Expired Date', 'K001'),
('A006', 'Keripik Pisang Manis', 'Harga', 'K006'),
('A007', 'Keripik Pisang Manis', 'Tekstur', 'K011'),
('A008', 'Keripik Pisang Manis', 'Varian Rasa', 'K016'),
('A009', 'Keripik Pisang Pedas', 'Expired Date', 'K001'),
('A010', 'Keripik Pisang Pedas', 'Harga', 'K006'),
('A011', 'Keripik Pisang Pedas', 'Tekstur', 'K011'),
('A012', 'Keripik Pisang Pedas', 'Varian Rasa', 'K017'),
('A013', 'Lapis Legit Bolu', 'Expired Date', 'K002'),
('A014', 'Lapis Legit Bolu', 'Harga', 'K008'),
('A015', 'Lapis Legit Bolu', 'Tekstur', 'K013'),
('A016', 'Lapis Legit Bolu', 'Varian Rasa', 'K016'),
('A017', 'Lapis Legit Premium', 'Expired Date', 'K003'),
('A018', 'Lapis Legit Premium', 'Harga', 'K009'),
('A019', 'Lapis Legit Premium', 'Tekstur', 'K014'),
('A020', 'Lapis Legit Premium', 'Varian Rasa', 'K016'),
('A021', 'Klanting', 'Expired Date', 'K001'),
('A022', 'Klanting', 'Harga', 'K006'),
('A023', 'Klanting', 'Tekstur', 'K012'),
('A024', 'Klanting', 'Varian Rasa', 'K018'),
('A025', 'Stick Keju', 'Expired Date', 'K001'),
('A026', 'Stick Keju', 'Harga', 'K007'),
('A027', 'Stick Keju', 'Tekstur', 'K012'),
('A028', 'Stick Keju', 'Varian Rasa', 'K018'),
('A029', 'Seblak Bantet', 'Expired Date', 'K001'),
('A030', 'Seblak Bantet', 'Harga', 'K006'),
('A031', 'Seblak Bantet', 'Tekstur', 'K011'),
('A032', 'Seblak Bantet', 'Varian Rasa', 'K017'),
('A033', 'Bakso Sony', 'Expired Date', 'K003'),
('A034', 'Bakso Sony', 'Harga', 'K008'),
('A035', 'Bakso Sony', 'Tekstur', 'K014'),
('A036', 'Bakso Sony', 'Varian Rasa', 'K018'),
('A037', 'Sale Pisang', 'Expired Date', 'K002'),
('A038', 'Sale Pisang', 'Harga', 'K006'),
('A039', 'Sale Pisang', 'Tekstur', 'K013'),
('A040', 'Sale Pisang', 'Varian Rasa', 'K016'),
('A041', 'Marning', 'Expired Date', 'K001'),
('A042', 'Marning', 'Harga', 'K006'),
('A043', 'Marning', 'Tekstur', 'K012'),
('A044', 'Marning', 'Varian Rasa', 'K018'),
('A045', 'Untir-Untir', 'Expired Date', 'K001'),
('A046', 'Untir-Untir', 'Harga', 'K006'),
('A047', 'Untir-Untir', 'Tekstur', 'K012'),
('A048', 'Untir-Untir', 'Varian Rasa', 'K018'),
('A049', 'Kemplang', 'Expired Date', 'K003'),
('A050', 'Kemplang', 'Harga', 'K006'),
('A051', 'Kemplang', 'Tekstur', 'K011'),
('A052', 'Kemplang', 'Varian Rasa', 'K018'),
('A053', 'Keripik Singkong Manis', 'Expired Date', 'K001'),
('A054', 'Keripik Singkong Manis', 'Harga', 'K007'),
('A055', 'Keripik Singkong Manis', 'Tekstur', 'K011'),
('A056', 'Keripik Singkong Manis', 'Varian Rasa', 'K016'),
('A057', 'Keripik Singkong Gurih', 'Expired Date', 'K001'),
('A058', 'Keripik Singkong Gurih', 'Harga', 'K007'),
('A059', 'Keripik Singkong Gurih', 'Tekstur', 'K011'),
('A060', 'Keripik Singkong Gurih', 'Varian Rasa', 'K018'),
('A061', 'Keripik Singkong Pedas', 'Expired Date', 'K001'),
('A062', 'Keripik Singkong Pedas', 'Harga', 'K007'),
('A063', 'Keripik Singkong Pedas', 'Tekstur', 'K011'),
('A064', 'Keripik Singkong Pedas', 'Varian Rasa', 'K020'),
('A065', 'Emping', 'Expired Date', 'K001'),
('A066', 'Emping', 'Harga', 'K006'),
('A067', 'Emping', 'Tekstur', 'K011'),
('A068', 'Emping', 'Varian Rasa', 'K018'),
('A069', 'Bumbu Kuah Bakso Son Hajisony', 'Expired Date', 'K002'),
('A070', 'Bumbu Kuah Bakso Son Hajisony', 'Harga', 'K006'),
('A071', 'Bumbu Kuah Bakso Son Hajisony', 'Tekstur', 'K014'),
('A072', 'Bumbu Kuah Bakso Son Hajisony', 'Varian Rasa', 'K018'),
('A073', 'Kacang Atom', 'Expired Date', 'K002'),
('A074', 'Kacang Atom', 'Harga', 'K006'),
('A075', 'Kacang Atom', 'Tekstur', 'K012'),
('A076', 'Kacang Atom', 'Varian Rasa', 'K018'),
('A077', 'Tiwul', 'Expired Date', 'K003'),
('A078', 'Tiwul', 'Harga', 'K006'),
('A079', 'Tiwul', 'Tekstur', 'K014'),
('A080', 'Tiwul', 'Varian Rasa', 'K018'),
('A081', 'Roti Kering', 'Expired Date', 'K001'),
('A082', 'Roti Kering', 'Harga', 'K006'),
('A083', 'Roti Kering', 'Tekstur', 'K012'),
('A084', 'Roti Kering', 'Varian Rasa', 'K018'),
('A085', 'Stik Pisang', 'Expired Date', 'K004'),
('A086', 'Stik Pisang', 'Harga', 'K007'),
('A087', 'Stik Pisang', 'Tekstur', 'K014'),
('A088', 'Stik Pisang', 'Varian Rasa', 'K016'),
('A089', 'Keripik Nangka', 'Expired Date', 'K001'),
('A090', 'Keripik Nangka', 'Harga', 'K007'),
('A091', 'Keripik Nangka', 'Tekstur', 'K011'),
('A092', 'Keripik Nangka', 'Varian Rasa', 'K018'),
('A093', 'Kerupuk Pecah Seribu', 'Expired Date', 'K001'),
('A094', 'Kerupuk Pecah Seribu', 'Harga', 'K007'),
('A095', 'Kerupuk Pecah Seribu', 'Tekstur', 'K011'),
('A096', 'Kerupuk Pecah Seribu', 'Varian Rasa', 'K018'),
('A097', 'Kerupuk Getas', 'Expired Date', 'K001'),
('A098', 'Kerupuk Getas', 'Harga', 'K007'),
('A099', 'Kerupuk Getas', 'Tekstur', 'K011'),
('A100', 'Kerupuk Getas', 'Varian Rasa', 'K018'),
('A101', 'Kue Bangkit Lampung', 'Expired Date', 'K003'),
('A102', 'Kue Bangkit Lampung', 'Harga', 'K006'),
('A103', 'Kue Bangkit Lampung', 'Tekstur', 'K014'),
('A104', 'Kue Bangkit Lampung', 'Varian Rasa', 'K016'),
('A105', 'Kremes Mantang', 'Expired Date', 'K001'),
('A106', 'Kremes Mantang', 'Harga', 'K007'),
('A107', 'Kremes Mantang', 'Tekstur', 'K012'),
('A108', 'Kremes Mantang', 'Varian Rasa', 'K018'),
('A109', 'Keripik Kulit Ikan Patin', 'Expired Date', 'K002'),
('A110', 'Keripik Kulit Ikan Patin', 'Harga', 'K006'),
('A111', 'Keripik Kulit Ikan Patin', 'Tekstur', 'K011'),
('A112', 'Keripik Kulit Ikan Patin', 'Varian Rasa', 'K018'),
('A113', 'Pempek 123', 'Expired Date', 'K004'),
('A114', 'Pempek 123', 'Harga', 'K009'),
('A115', 'Pempek 123', 'Tekstur', 'K014'),
('A116', 'Pempek 123', 'Varian Rasa', 'K018'),
('A117', 'Kacang Pedas', 'Expired Date', 'K002'),
('A118', 'Kacang Pedas', 'Harga', 'K006'),
('A119', 'Kacang Pedas', 'Tekstur', 'K013'),
('A120', 'Kacang Pedas', 'Varian Rasa', 'K017'),
('A121', 'Pempek Nori', 'Expired Date', 'K004'),
('A122', 'Pempek Nori', 'Harga', 'K009'),
('A123', 'Pempek Nori', 'Tekstur', 'K014'),
('A124', 'Pempek Nori', 'Varian Rasa', 'K018'),
('A125', 'Lempok Durian', 'Expired Date', 'K003'),
('A126', 'Lempok Durian', 'Harga', 'K007'),
('A127', 'Lempok Durian', 'Tekstur', 'K013'),
('A128', 'Lempok Durian', 'Varian Rasa', 'K016'),
('A129', 'Dodol Durian', 'Expired Date', 'K003'),
('A130', 'Dodol Durian', 'Harga', 'K006'),
('A131', 'Dodol Durian', 'Tekstur', 'K014'),
('A132', 'Dodol Durian', 'Varian Rasa', 'K016'),
('A133', 'Keripik Buah Salak', 'Expired Date', 'K001'),
('A134', 'Keripik Buah Salak', 'Harga', 'K007'),
('A135', 'Keripik Buah Salak', 'Tekstur', 'K011'),
('A136', 'Keripik Buah Salak', 'Varian Rasa', 'K018'),
('A137', 'Terasi Udang', 'Expired Date', 'K001'),
('A138', 'Terasi Udang', 'Harga', 'K006'),
('A139', 'Terasi Udang', 'Tekstur', 'K014'),
('A140', 'Terasi Udang', 'Varian Rasa', 'K020'),
('A141', 'Keripik Nanas', 'Expired Date', 'K001'),
('A142', 'Keripik Nanas', 'Harga', 'K007'),
('A143', 'Keripik Nanas', 'Tekstur', 'K011'),
('A144', 'Keripik Nanas', 'Varian Rasa', 'K018'),
('A145', 'Keripik Talas', 'Expired Date', 'K001'),
('A146', 'Keripik Talas', 'Harga', 'K006'),
('A147', 'Keripik Talas', 'Tekstur', 'K011'),
('A148', 'Keripik Talas', 'Varian Rasa', 'K018'),
('A149', 'Pie Susu Pisang', 'Expired Date', 'K004'),
('A150', 'Pie Susu Pisang', 'Harga', 'K006'),
('A151', 'Pie Susu Pisang', 'Tekstur', 'K013'),
('A152', 'Pie Susu Pisang', 'Varian Rasa', 'K016'),
('A153', 'Kerupuk Cumi', 'Expired Date', 'K001'),
('A154', 'Kerupuk Cumi', 'Harga', 'K007'),
('A155', 'Kerupuk Cumi', 'Tekstur', 'K011'),
('A156', 'Kerupuk Cumi', 'Varian Rasa', 'K018'),
('A157', 'Dodol Pandan', 'Expired Date', 'K003'),
('A158', 'Dodol Pandan', 'Harga', 'K006'),
('A159', 'Dodol Pandan', 'Tekstur', 'K014'),
('A160', 'Dodol Pandan', 'Varian Rasa', 'K016'),
('A161', 'Engkak', 'Expired Date', 'K004'),
('A162', 'Engkak', 'Harga', 'K007'),
('A163', 'Engkak', 'Tekstur', 'K013'),
('A164', 'Engkak', 'Varian Rasa', 'K016'),
('A165', 'Kopi Durian', 'Expired Date', 'K001'),
('A166', 'Kopi Durian', 'Harga', 'K007'),
('A167', 'Kopi Durian', 'Tekstur', 'K013'),
('A168', 'Kopi Durian', 'Varian Rasa', 'K020'),
('A169', 'Sambal Lingkung', 'Expired Date', 'K002'),
('A170', 'Sambal Lingkung', 'Harga', 'K008'),
('A171', 'Sambal Lingkung', 'Tekstur', 'K013'),
('A172', 'Sambal Lingkung', 'Varian Rasa', 'K017'),
('A173', 'Abon Jamur', 'Expired Date', 'K001'),
('A174', 'Abon Jamur', 'Harga', 'K007'),
('A175', 'Abon Jamur', 'Tekstur', 'K013'),
('A176', 'Abon Jamur', 'Varian Rasa', 'K018'),
('A177', 'Kopi Lampung', 'Expired Date', 'K001'),
('A178', 'Kopi Lampung', 'Harga', 'K007'),
('A179', 'Kopi Lampung', 'Tekstur', 'K013'),
('A180', 'Kopi Lampung', 'Varian Rasa', 'K020'),
('A181', 'Kerupuk Ikan Tenggiri', 'Expired Date', 'K002'),
('A182', 'Kerupuk Ikan Tenggiri', 'Harga', 'K006'),
('A183', 'Kerupuk Ikan Tenggiri', 'Tekstur', 'K011'),
('A184', 'Kerupuk Ikan Tenggiri', 'Varian Rasa', 'K018'),
('A185', 'Lampung Bona Cake', 'Expired Date', 'K003'),
('A186', 'Lampung Bona Cake', 'Harga', 'K008'),
('A187', 'Lampung Bona Cake', 'Tekstur', 'K014'),
('A188', 'Lampung Bona Cake', 'Varian Rasa', 'K016'),
('A189', 'Pempek Khas Lampung', 'Expired Date', 'K002'),
('A190', 'Pempek Khas Lampung', 'Harga', 'K008'),
('A191', 'Pempek Khas Lampung', 'Tekstur', 'K014'),
('A192', 'Pempek Khas Lampung', 'Varian Rasa', 'K018'),
('A193', 'Kerupuk Udang', 'Expired Date', 'K001'),
('A194', 'Kerupuk Udang', 'Harga', 'K007'),
('A195', 'Kerupuk Udang', 'Tekstur', 'K011'),
('A196', 'Kerupuk Udang', 'Varian Rasa', 'K018'),
('A197', 'Kopi Ulubelu', 'Expired Date', 'K001'),
('A198', 'Kopi Ulubelu', 'Harga', 'K007'),
('A199', 'Kopi Ulubelu', 'Tekstur', 'K013'),
('A200', 'Kopi Ulubelu', 'Varian Rasa', 'K020'),
('A201', 'Kopi Luwak', 'Expired Date', 'K001'),
('A202', 'Kopi Luwak', 'Harga', 'K008'),
('A203', 'Kopi Luwak', 'Tekstur', 'K013'),
('A204', 'Kopi Luwak', 'Varian Rasa', 'K020'),
('A205', 'Lele Asap', 'Expired Date', 'K002'),
('A206', 'Lele Asap', 'Harga', 'K007'),
('A207', 'Lele Asap', 'Tekstur', 'K013'),
('A208', 'Lele Asap', 'Varian Rasa', 'K018'),
('A209', 'Kue Semprong', 'Expired Date', 'K002'),
('A210', 'Kue Semprong', 'Harga', 'K007'),
('A211', 'Kue Semprong', 'Tekstur', 'K011'),
('A212', 'Kue Semprong', 'Varian Rasa', 'K018'),
('A213', 'Lampung Banana Foster', 'Expired Date', 'K003'),
('A214', 'Lampung Banana Foster', 'Harga', 'K008'),
('A215', 'Lampung Banana Foster', 'Tekstur', 'K014'),
('A216', 'Lampung Banana Foster', 'Varian Rasa', 'K016'),
('A217', 'Browkis (Brownies Kulit Pisang)', 'Expired Date', 'K003'),
('A218', 'Browkis (Brownies Kulit Pisang)', 'Harga', 'K006'),
('A219', 'Browkis (Brownies Kulit Pisang)', 'Tekstur', 'K014'),
('A220', 'Browkis (Brownies Kulit Pisang)', 'Varian Rasa', 'K016'),
('A221', 'Bolu Tape', 'Expired Date', 'K004'),
('A222', 'Bolu Tape', 'Harga', 'K007'),
('A223', 'Bolu Tape', 'Tekstur', 'K014'),
('A224', 'Bolu Tape', 'Varian Rasa', 'K016'),
('A225', 'Dodol Sirsak', 'Expired Date', 'K003'),
('A226', 'Dodol Sirsak', 'Harga', 'K007'),
('A227', 'Dodol Sirsak', 'Tekstur', 'K014'),
('A228', 'Dodol Sirsak', 'Varian Rasa', 'K016'),
('A229', 'Benjak Enjak', 'Expired Date', 'K003'),
('A230', 'Benjak Enjak', 'Harga', 'K006'),
('A231', 'Benjak Enjak', 'Tekstur', 'K013'),
('A232', 'Benjak Enjak', 'Varian Rasa', 'K016'),
('A233', 'Sambal Lampung', 'Expired Date', 'K003'),
('A234', 'Sambal Lampung', 'Harga', 'K006'),
('A235', 'Sambal Lampung', 'Tekstur', 'K013'),
('A236', 'Sambal Lampung', 'Varian Rasa', 'K017'),
('A237', 'Manisan Buah Lampung', 'Expired Date', 'K003'),
('A238', 'Manisan Buah Lampung', 'Harga', 'K006'),
('A239', 'Manisan Buah Lampung', 'Tekstur', 'K014'),
('A240', 'Manisan Buah Lampung', 'Varian Rasa', 'K019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_oleh`
--

CREATE TABLE `data_oleh` (
  `id_oleh_oleh` varchar(4) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_oleh`
--

INSERT INTO `data_oleh` (`id_oleh_oleh`, `nama_alternatif`) VALUES
('O045', 'Abon Jamur'),
('O010', 'Bakso Sony'),
('O060', 'Benjak Enjak'),
('O058', 'Bolu Tape'),
('O057', 'Browkis (Brownies Kulit Pisang)'),
('O019', 'Bumbu Kuah Bakso Son Hajisony'),
('O034', 'Dodol Durian'),
('O041', 'Dodol Pandan'),
('O059', 'Dodol Sirsak'),
('O018', 'Emping'),
('O042', 'Engkak'),
('O020', 'Kacang Atom'),
('O031', 'Kacang Pedas'),
('O014', 'Kemplang'),
('O035', 'Keripik Buah Salak'),
('O029', 'Keripik Kulit Ikan Patin'),
('O037', 'Keripik Nanas'),
('O024', 'Keripik Nangka'),
('O001', 'Keripik Pisang Gurih'),
('O002', 'Keripik Pisang Manis'),
('O003', 'Keripik Pisang Pedas'),
('O015', 'Keripik Singkong Gurih'),
('O016', 'Keripik Singkong Manis'),
('O017', 'Keripik Singkong Pedas'),
('O038', 'Keripik Talas'),
('O040', 'Kerupuk Cumi'),
('O026', 'Kerupuk Getas'),
('O047', 'Kerupuk Ikan Tenggiri'),
('O025', 'Kerupuk Pecah Seribu'),
('O050', 'Kerupuk Udang'),
('O006', 'Klanting'),
('O043', 'Kopi Durian'),
('O046', 'Kopi Lampung'),
('O052', 'Kopi Luwak'),
('O051', 'Kopi Ulubelu'),
('O028', 'Kremes Mantang'),
('O027', 'Kue Bangkit Lampung'),
('O054', 'Kue Semprong'),
('O055', 'Lampung Banana Foster'),
('O048', 'Lampung Bona Cake'),
('O004', 'Lapis Legit Bolu'),
('O005', 'Lapis Legit Premium'),
('O053', 'Lele Asap'),
('O033', 'Lempok Durian'),
('O056', 'Manisan Buah Lampung'),
('O012', 'Marning'),
('O030', 'Pempek 123'),
('O049', 'Pempek Khas Lampung'),
('O032', 'Pempek Nori'),
('O039', 'Pie Susu Pisang'),
('O022', 'Roti Kering'),
('O011', 'Sale Pisang'),
('O013', 'Sambal Lampung'),
('O044', 'Sambal Lingkung'),
('O009', 'Seblak Bantet'),
('O008', 'Stick Keju'),
('O023', 'Stik Pisang'),
('O036', 'Terasi Udang'),
('O021', 'Tiwul'),
('O007', 'Untir-Untir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_kriteria`
--

CREATE TABLE `ket_kriteria` (
  `id_ket_kriteria` varchar(4) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `bobot_pilih` enum('-','5','4','3','2','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ket_kriteria`
--

INSERT INTO `ket_kriteria` (`id_ket_kriteria`, `nama_kriteria`, `keterangan`, `bobot_pilih`) VALUES
('K001', 'Expired Date', '> 1 Bulan', '5'),
('K002', 'Expired Date', '15 Hari - 1 Bulan', '3'),
('K003', 'Expired Date', '8 - 14 Hari', '5'),
('K004', 'Expired Date', '3 - 7 Hari', '4'),
('K005', 'Expired Date', '< 3 Hari', '2'),
('K006', 'Harga', '< 20.000', '1'),
('K007', 'Harga', '20.001 - 50.000', '2'),
('K008', 'Harga', '50.001 - 100.000', '3'),
('K009', 'Harga', '100.001 - 300.000', '4'),
('K010', 'Harga', '> 300.000', '5'),
('K011', 'Tekstur', 'Sangat Kering', '2'),
('K012', 'Tekstur', 'Kering', '5'),
('K013', 'Tekstur', 'Sedang', '4'),
('K014', 'Tekstur', 'Basah', '3'),
('K015', 'Tekstur', 'Sangat Basah', '1'),
('K016', 'Varian Rasa', 'Manis', '5'),
('K017', 'Varian Rasa', 'Pedas', '4'),
('K018', 'Varian Rasa', 'Gurih', '3'),
('K019', 'Varian Rasa', 'Asam', '2'),
('K020', 'Varian Rasa', 'Pahit', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(4) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `tipe_kriteria` enum('Cost','Benefit') NOT NULL,
  `bobot_acuan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot_acuan`) VALUES
('C003', 'Expired Date', 'Benefit', 0.23),
('C001', 'Harga', 'Cost', 0.3),
('C004', 'Tekstur', 'Benefit', 0.17),
('C002', 'Varian Rasa', 'Benefit', 0.3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'Fadila Eka Noperta', 'fadila@mail.com', 'fc88df38a7262a0915586ca126a0b366', 'admin'),
(2, 'User', 'user@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(3, 'Admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'fadila', 'fadila@gmail.com', 'fc88df38a7262a0915586ca126a0b366', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `nama_kriteria` (`nama_kriteria`),
  ADD KEY `id_ket_kriteria` (`id_ket_kriteria`),
  ADD KEY `nama_alternatif` (`nama_alternatif`);

--
-- Indexes for table `data_oleh`
--
ALTER TABLE `data_oleh`
  ADD PRIMARY KEY (`nama_alternatif`);

--
-- Indexes for table `ket_kriteria`
--
ALTER TABLE `ket_kriteria`
  ADD PRIMARY KEY (`id_ket_kriteria`),
  ADD KEY `nama_kriteria` (`nama_kriteria`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`nama_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `fk_alternatif_id_ket_kriteria` FOREIGN KEY (`id_ket_kriteria`) REFERENCES `ket_kriteria` (`id_ket_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_alternatif_nama_alternatif` FOREIGN KEY (`nama_alternatif`) REFERENCES `data_oleh` (`nama_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_alternatif_nama_kriteria` FOREIGN KEY (`nama_kriteria`) REFERENCES `kriteria` (`nama_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ket_kriteria`
--
ALTER TABLE `ket_kriteria`
  ADD CONSTRAINT `fk_ket_kriteria_nama_kriteria` FOREIGN KEY (`nama_kriteria`) REFERENCES `kriteria` (`nama_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
