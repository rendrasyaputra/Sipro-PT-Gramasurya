-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 01:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gramasurya`
--

-- --------------------------------------------------------

--
-- Table structure for table `binding`
--

CREATE TABLE `binding` (
  `id_binding` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_binding` int(100) NOT NULL,
  `status_binding` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_binding` date NOT NULL,
  `keterangan_jadwal_binding` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` text NOT NULL,
  `tanggal_pengerjaan_3` date NOT NULL,
  `hasil_3` int(100) NOT NULL,
  `rejek_3` int(100) NOT NULL,
  `operator_3` varchar(100) NOT NULL,
  `kru_3` varchar(100) NOT NULL,
  `keterangan_3` text NOT NULL,
  `tanggal_pengerjaan_4` date NOT NULL,
  `hasil_4` int(100) NOT NULL,
  `rejek_4` int(100) NOT NULL,
  `operator_4` varchar(100) NOT NULL,
  `kru_4` varchar(100) NOT NULL,
  `keterangan_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binding`
--

INSERT INTO `binding` (`id_binding`, `id_order`, `id_jadwal_binding`, `status_binding`, `tanggal_pelaksanaan_binding`, `keterangan_jadwal_binding`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`, `tanggal_pengerjaan_3`, `hasil_3`, `rejek_3`, `operator_3`, `kru_3`, `keterangan_3`, `tanggal_pengerjaan_4`, `hasil_4`, `rejek_4`, `operator_4`, `kru_4`, `keterangan_4`) VALUES
(11, 9, 0, '', '2021-06-25', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, 'binding', '2021-06-10', 'zsfzsfa', '2021-06-29', 1900, 6, 'Joki', 'B', 'Mantap', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cetak`
--

CREATE TABLE `cetak` (
  `id_cetak` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `mesin_cover_1` varchar(100) NOT NULL,
  `warna_cover_1` varchar(100) NOT NULL,
  `insit_cover_1` varchar(100) NOT NULL,
  `mesin_cover_2` varchar(100) NOT NULL,
  `warna_cover_2` varchar(100) NOT NULL,
  `insit_cover_2` varchar(100) NOT NULL,
  `mesin_cover_3` varchar(100) NOT NULL,
  `warna_cover_3` varchar(100) NOT NULL,
  `insit_cover_3` varchar(100) NOT NULL,
  `mesin_isi_1` varchar(100) NOT NULL,
  `warna_isi_1` varchar(100) NOT NULL,
  `insit_isi_1` varchar(100) NOT NULL,
  `mesin_isi_2` varchar(100) NOT NULL,
  `warna_isi_2` varchar(100) NOT NULL,
  `insit_isi_2` varchar(100) NOT NULL,
  `mesin_isi_3` varchar(100) NOT NULL,
  `warna_isi_3` varchar(100) NOT NULL,
  `insit_isi_3` varchar(100) NOT NULL,
  `mesin_isi_4` varchar(100) NOT NULL,
  `warna_isi_4` varchar(100) NOT NULL,
  `insit_isi_4` varchar(100) NOT NULL,
  `keterangan_cetak_cover` text NOT NULL,
  `keterangan_cetak_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cetak`
--

INSERT INTO `cetak` (`id_cetak`, `id_order`, `mesin_cover_1`, `warna_cover_1`, `insit_cover_1`, `mesin_cover_2`, `warna_cover_2`, `insit_cover_2`, `mesin_cover_3`, `warna_cover_3`, `insit_cover_3`, `mesin_isi_1`, `warna_isi_1`, `insit_isi_1`, `mesin_isi_2`, `warna_isi_2`, `insit_isi_2`, `mesin_isi_3`, `warna_isi_3`, `insit_isi_3`, `mesin_isi_4`, `warna_isi_4`, `insit_isi_4`, `keterangan_cetak_cover`, `keterangan_cetak_isi`) VALUES
(80, 9, '-', '-', '', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/0', '150', '-', '-', '', '-', '-', '', '', '', '', '', '3 SET 2UP'),
(81, 10, 'SM 74 4W - A', '4/4', '1000', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/4', '1000', '-', '-', '', '-', '-', '', '', '', '', '1 SET BLK', '16 SET GANTI 1 SET BLK'),
(82, 11, 'SM 74 4W - A', '4/1', '150', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/4', '150', '-', '-', '', '-', '-', '', '', '', '', '4/1 MAL. 2UP', '2 SET GANTI (KT PENGANTAR) ISI DAN SHEET BALDE AMBIL STOK'),
(85, 12, 'SM 74 4W - A', '4/4', '150', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/1', '', 'Oliver 72 1w', '-', '', '-', '-', '', '', '', '', '2 SET GANTI 2UP', '1 SET BLK'),
(86, 13, 'SM 74 4W - A', '4/1', '150', '-', '-', '', '-', '-', '', '-', '-', '', '-', '-', '', '-', '-', '', '', '', '', '4/1 BALIKAN MAL 2UP', '1/1 BW 30 PLAT GANTI 2 DOUBLE 16UP KANCINGAN 1/0 HITAM 4UP'),
(87, 14, 'SM 74 4W - A', '4/0', '150', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/4', '100', 'Oliver 72 1w', '1/1', '2', '-', '-', '', '', '', '', '1 SET 2UP', '1 SEt BLG MESIN 74 PLAT GANTI MESIN 72 6UP'),
(88, 15, 'SM 74 4W - A', '4/4', '150', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/4', '150', '-', '-', '', '-', '-', '', '', '', '', '1 SET BLK', '20 HAL 4 SET GANTI 1 SET BLK 40 HAL 10 SET GANTI 4 UP'),
(89, 16, 'SM 74 4W - A', '4/4', '150', '-', '-', '', '-', '-', '', 'SM 74 4W - A', '4/4', '150', '-', '-', '', '-', '-', '', '', '', '', '1 SET BLK', '4 SET GANTI 1 SET BLK 1 SET BLK 1/4'),
(90, 17, 'Tokko', '2/0', '50', '-', '-', '', '-', '-', '', '-', '-', '', '-', '-', '', '-', '-', '', '', '', '', '', ''),
(91, 18, 'Fotocopy', '2/2', '34', '-', '-', '', '-', '-', '', 'Fotocopy', '4/1', '5', '-', '-', '', '-', '-', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ctcp`
--

CREATE TABLE `ctcp` (
  `id_ctcp` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `ctcp_cover_1` varchar(100) NOT NULL,
  `plat_cover_1` varchar(100) NOT NULL,
  `ctcp_cover_2` varchar(100) NOT NULL,
  `plat_cover_2` varchar(100) NOT NULL,
  `ctcp_cover_3` varchar(100) NOT NULL,
  `plat_cover_3` varchar(100) NOT NULL,
  `ctcp_isi_1` varchar(100) NOT NULL,
  `plat_isi_1` varchar(100) NOT NULL,
  `ctcp_isi_2` varchar(100) NOT NULL,
  `plat_isi_2` varchar(100) NOT NULL,
  `ctcp_isi_3` varchar(100) NOT NULL,
  `plat_isi_3` varchar(100) NOT NULL,
  `ctcp_isi_4` varchar(100) NOT NULL,
  `plate_isi_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctcp`
--

INSERT INTO `ctcp` (`id_ctcp`, `id_order`, `ctcp_cover_1`, `plat_cover_1`, `ctcp_cover_2`, `plat_cover_2`, `ctcp_cover_3`, `plat_cover_3`, `ctcp_isi_1`, `plat_isi_1`, `ctcp_isi_2`, `plat_isi_2`, `ctcp_isi_3`, `plat_isi_3`, `ctcp_isi_4`, `plate_isi_4`) VALUES
(80, 9, '-', '', '-', '', '-', '', 'Plat 74', '12', '-', '', '-', '', '', ''),
(81, 10, 'Plat 74', '4', '-', '', '-', '', 'Plat 74', '68', '-', '', '-', '', '', ''),
(82, 11, 'Plat 74', '5', '-', '', '-', '', 'Plat 74', '8', '-', '', '-', '', '', ''),
(85, 12, 'Plat 74', '8', '-', '', '-', '', 'Plat 74', '20', '-', '', '-', '', '', ''),
(86, 13, 'Plat 74', '5', '-', '', '-', '', 'Plat 102', '32', 'Plat 72', '1', '-', '', '', ''),
(87, 14, 'Plat 74', '4', '-', '', '-', '', 'Plat 74', '4', 'Plat 72', '12', '-', '', '', ''),
(88, 15, 'Plat 74', '4', '-', '', '-', '', 'Plat 74', '60', '-', '', '-', '', '', ''),
(89, 16, 'Plat 74', '4', '-', '', '-', '', 'Plat 74', '24', '-', '', '-', '', '', ''),
(90, 17, 'Plat paperplate', '2', '-', '', '-', '', '-', '', '-', '', '-', '', '', ''),
(91, 18, 'Plat 770 x 1030', '2', '-', '', '-', '', 'Plat 74.2 x 60.5', '2', '-', '', '-', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_ctcp`
--

CREATE TABLE `data_ctcp` (
  `id_data_ctcp` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `id_imposisi` int(100) DEFAULT NULL,
  `ctcp_status` varchar(100) NOT NULL,
  `namaoperatorctcp1` varchar(100) NOT NULL,
  `namaoperatorctcp2` varchar(100) NOT NULL,
  `catatan_ctcp` text NOT NULL,
  `total_plat_gagal_cover` int(100) NOT NULL,
  `total_plat_gagal_isi` int(100) NOT NULL,
  `cover1set1` varchar(100) NOT NULL,
  `cover1set2` varchar(100) NOT NULL,
  `cover1set3` varchar(100) NOT NULL,
  `cover2set1` varchar(100) NOT NULL,
  `cover2set2` varchar(100) NOT NULL,
  `cover2set3` varchar(100) NOT NULL,
  `isi1set1` varchar(100) NOT NULL,
  `isi1set2` varchar(100) NOT NULL,
  `isi1set3` varchar(100) NOT NULL,
  `isi2set1` varchar(100) NOT NULL,
  `jumlahplategagalcover1` int(100) DEFAULT NULL,
  `jumlahplategagalcover2` int(100) DEFAULT NULL,
  `jumlahplategagalisi1` int(100) DEFAULT NULL,
  `jumlahplategagalisi2` int(100) DEFAULT NULL,
  `jumlahplategagalisi3` int(100) DEFAULT NULL,
  `tanggal_out_ctcp_cover` text NOT NULL,
  `tanggal_out_ctcp_isi1` text NOT NULL,
  `tanggal_out_ctcp_isi2` text NOT NULL,
  `isi2set2` varchar(100) NOT NULL,
  `isi2set3` varchar(100) NOT NULL,
  `isi3set1` varchar(100) NOT NULL,
  `isi3set2` varchar(100) NOT NULL,
  `isi3set3` varchar(100) NOT NULL,
  `cover1lbrcetak1` varchar(100) NOT NULL,
  `cover1lbrcetak2` varchar(100) NOT NULL,
  `cover1lbrcetak3` varchar(100) NOT NULL,
  `cover2lbrcetak1` varchar(100) NOT NULL,
  `cover2lbrcetak2` varchar(100) NOT NULL,
  `cover2lbrcetak3` varchar(100) NOT NULL,
  `isi1lbrcetak1` varchar(100) NOT NULL,
  `isi1lbrcetak2` varchar(100) NOT NULL,
  `isi1lbrcetak3` varchar(100) NOT NULL,
  `isi2lbrcetak1` varchar(100) NOT NULL,
  `isi2lbrcetak2` varchar(100) NOT NULL,
  `isi2lbrcetak3` varchar(100) NOT NULL,
  `isi3lbrcetak1` varchar(100) NOT NULL,
  `isi3lbrcetak2` varchar(100) NOT NULL,
  `isi3lbrcetak3` varchar(100) NOT NULL,
  `cover1tglctcp1` text DEFAULT NULL,
  `cover1tglctcp2` text DEFAULT NULL,
  `cover1tglctcp3` text DEFAULT NULL,
  `isi1tglctcp1` text DEFAULT NULL,
  `isi1tglctcp2` text DEFAULT NULL,
  `isi1tglctcp3` text DEFAULT NULL,
  `cover2tglctcp1` text DEFAULT NULL,
  `cover2tglctcp2` text DEFAULT NULL,
  `cover2tglctcp3` text DEFAULT NULL,
  `isi2tglctcp1` text DEFAULT NULL,
  `isi2tglctcp2` text DEFAULT NULL,
  `isi2tglctcp3` text DEFAULT NULL,
  `isi3tglctcp1` text DEFAULT NULL,
  `isi3tglctcp2` text DEFAULT NULL,
  `isi3tglctcp3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ctcp`
--

INSERT INTO `data_ctcp` (`id_data_ctcp`, `id_order`, `id_imposisi`, `ctcp_status`, `namaoperatorctcp1`, `namaoperatorctcp2`, `catatan_ctcp`, `total_plat_gagal_cover`, `total_plat_gagal_isi`, `cover1set1`, `cover1set2`, `cover1set3`, `cover2set1`, `cover2set2`, `cover2set3`, `isi1set1`, `isi1set2`, `isi1set3`, `isi2set1`, `jumlahplategagalcover1`, `jumlahplategagalcover2`, `jumlahplategagalisi1`, `jumlahplategagalisi2`, `jumlahplategagalisi3`, `tanggal_out_ctcp_cover`, `tanggal_out_ctcp_isi1`, `tanggal_out_ctcp_isi2`, `isi2set2`, `isi2set3`, `isi3set1`, `isi3set2`, `isi3set3`, `cover1lbrcetak1`, `cover1lbrcetak2`, `cover1lbrcetak3`, `cover2lbrcetak1`, `cover2lbrcetak2`, `cover2lbrcetak3`, `isi1lbrcetak1`, `isi1lbrcetak2`, `isi1lbrcetak3`, `isi2lbrcetak1`, `isi2lbrcetak2`, `isi2lbrcetak3`, `isi3lbrcetak1`, `isi3lbrcetak2`, `isi3lbrcetak3`, `cover1tglctcp1`, `cover1tglctcp2`, `cover1tglctcp3`, `isi1tglctcp1`, `isi1tglctcp2`, `isi1tglctcp3`, `cover2tglctcp1`, `cover2tglctcp2`, `cover2tglctcp3`, `isi2tglctcp1`, `isi2tglctcp2`, `isi2tglctcp3`, `isi3tglctcp1`, `isi3tglctcp2`, `isi3tglctcp3`) VALUES
(34, 18, NULL, 'ctcp cover', '123', '', '12', 12, 0, '', '', '', '', '', '', '', '', '', '', 12, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `display_cetak`
--

CREATE TABLE `display_cetak` (
  `id_display_cetak` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `status_cetak_cover` varchar(100) NOT NULL,
  `status_cetak_isi` varchar(100) NOT NULL,
  `status_cetak` varchar(100) NOT NULL,
  `mesin_cover_1` varchar(100) NOT NULL,
  `tanggal_cetak_cover1` text NOT NULL,
  `tanggal_out_cetak_cover1` text NOT NULL,
  `jumlah_kertas_cover1` varchar(100) NOT NULL,
  `hasil_kertas_cover1` varchar(100) NOT NULL,
  `ukuran_potong_cover1` varchar(100) NOT NULL,
  `suborder_in_cetak_cover1` text NOT NULL,
  `suborder_out_cetak_cover1` text NOT NULL,
  `mesin_cover_2` varchar(100) NOT NULL,
  `tanggal_cetak_cover2` text NOT NULL,
  `tanggal_out_cetak_cover2` text NOT NULL,
  `jumlah_kertas_cover2` varchar(100) NOT NULL,
  `hasil_kertas_cover2` varchar(100) NOT NULL,
  `ukuran_potong_cover2` varchar(100) NOT NULL,
  `suborder_in_cetak_cover2` text NOT NULL,
  `suborder_out_cetak_cover2` text NOT NULL,
  `mesin_cover_3` varchar(100) NOT NULL,
  `tanggal_cetak_cover3` text NOT NULL,
  `tanggal_out_cetak_cover3` text NOT NULL,
  `jumlah_kertas_cover3` varchar(100) NOT NULL,
  `hasil_kertas_cover3` varchar(100) NOT NULL,
  `ukuran_potong_cover3` varchar(100) NOT NULL,
  `suborder_in_cetak_cover3` text NOT NULL,
  `suborder_out_cetak_cover3` text NOT NULL,
  `mesin_isi_1` varchar(100) NOT NULL,
  `tanggal_cetak_isi1` text NOT NULL,
  `tanggal_out_cetak_isi1` text NOT NULL,
  `jumlah_kertas_isi1` varchar(100) NOT NULL,
  `hasil_kertas_isi1` varchar(100) NOT NULL,
  `ukuran_potong_isi1` varchar(100) NOT NULL,
  `suborder_in_cetak_isi1` text NOT NULL,
  `suborder_out_cetak_isi1` text NOT NULL,
  `mesin_isi_2` varchar(100) NOT NULL,
  `tanggal_cetak_isi2` text NOT NULL,
  `tanggal_out_cetak_isi2` text NOT NULL,
  `jumlah_kertas_isi2` varchar(100) NOT NULL,
  `hasil_kertas_isi2` varchar(100) NOT NULL,
  `ukuran_potong_isi2` varchar(100) NOT NULL,
  `suborder_in_cetak_isi2` text NOT NULL,
  `suborder_out_cetak_isi2` text NOT NULL,
  `mesin_isi_3` varchar(100) NOT NULL,
  `tanggal_cetak_isi3` text NOT NULL,
  `tanggal_out_cetak_isi3` text NOT NULL,
  `jumlah_kertas_isi3` varchar(100) NOT NULL,
  `hasil_kertas_isi3` varchar(100) NOT NULL,
  `ukuran_potong_isi3` varchar(100) NOT NULL,
  `suborder_in_cetak_isi3` text NOT NULL,
  `suborder_out_cetak_isi3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display_cetak`
--

INSERT INTO `display_cetak` (`id_display_cetak`, `id_order`, `status_cetak_cover`, `status_cetak_isi`, `status_cetak`, `mesin_cover_1`, `tanggal_cetak_cover1`, `tanggal_out_cetak_cover1`, `jumlah_kertas_cover1`, `hasil_kertas_cover1`, `ukuran_potong_cover1`, `suborder_in_cetak_cover1`, `suborder_out_cetak_cover1`, `mesin_cover_2`, `tanggal_cetak_cover2`, `tanggal_out_cetak_cover2`, `jumlah_kertas_cover2`, `hasil_kertas_cover2`, `ukuran_potong_cover2`, `suborder_in_cetak_cover2`, `suborder_out_cetak_cover2`, `mesin_cover_3`, `tanggal_cetak_cover3`, `tanggal_out_cetak_cover3`, `jumlah_kertas_cover3`, `hasil_kertas_cover3`, `ukuran_potong_cover3`, `suborder_in_cetak_cover3`, `suborder_out_cetak_cover3`, `mesin_isi_1`, `tanggal_cetak_isi1`, `tanggal_out_cetak_isi1`, `jumlah_kertas_isi1`, `hasil_kertas_isi1`, `ukuran_potong_isi1`, `suborder_in_cetak_isi1`, `suborder_out_cetak_isi1`, `mesin_isi_2`, `tanggal_cetak_isi2`, `tanggal_out_cetak_isi2`, `jumlah_kertas_isi2`, `hasil_kertas_isi2`, `ukuran_potong_isi2`, `suborder_in_cetak_isi2`, `suborder_out_cetak_isi2`, `mesin_isi_3`, `tanggal_cetak_isi3`, `tanggal_out_cetak_isi3`, `jumlah_kertas_isi3`, `hasil_kertas_isi3`, `ukuran_potong_isi3`, `suborder_in_cetak_isi3`, `suborder_out_cetak_isi3`) VALUES
(1, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 10, '', '', 'cetak', '', '2021-06-15', '2021-06-15', '', '200', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-15', '2021-06-16', '', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fa_potong`
--

CREATE TABLE `fa_potong` (
  `id_fa_potong` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_fa_potong` int(100) NOT NULL,
  `status_fa_potong` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_fa_potong` date NOT NULL,
  `keterangan_jadwal_fa_potong` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` text NOT NULL,
  `tanggal_pengerjaan_3` date NOT NULL,
  `hasil_3` int(100) NOT NULL,
  `rejek_3` int(100) NOT NULL,
  `operator_3` varchar(100) NOT NULL,
  `kru_3` varchar(100) NOT NULL,
  `keterangan_3` text NOT NULL,
  `tanggal_pengerjaan_4` date NOT NULL,
  `hasil_4` int(100) NOT NULL,
  `rejek_4` int(100) NOT NULL,
  `operator_4` varchar(100) NOT NULL,
  `kru_4` varchar(100) NOT NULL,
  `keterangan_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fa_potong`
--

INSERT INTO `fa_potong` (`id_fa_potong`, `id_order`, `id_jadwal_fa_potong`, `status_fa_potong`, `tanggal_pelaksanaan_fa_potong`, `keterangan_jadwal_fa_potong`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`, `tanggal_pengerjaan_3`, `hasil_3`, `rejek_3`, `operator_3`, `kru_3`, `keterangan_3`, `tanggal_pengerjaan_4`, `hasil_4`, `rejek_4`, `operator_4`, `kru_4`, `keterangan_4`) VALUES
(11, 9, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `finishing`
--

CREATE TABLE `finishing` (
  `id_finishing` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `finishing_cover_doff` varchar(100) NOT NULL,
  `finishing_cover_emboss` varchar(100) NOT NULL,
  `finishing_cover_glossy` varchar(100) NOT NULL,
  `finishing_cover_hotprint` varchar(100) NOT NULL,
  `finishing_cover_spot_uvi` varchar(100) NOT NULL,
  `finishing_cover_uvi` varchar(100) NOT NULL,
  `keterangan_finishing_cover` varchar(100) NOT NULL,
  `finishing_isi_lipat` varchar(100) NOT NULL,
  `finishing_isi_susun` varchar(100) NOT NULL,
  `keterangan_finishing_isi` varchar(100) NOT NULL,
  `finishing_akhir_bending` varchar(100) NOT NULL,
  `finishing_akhir_hard_cover` varchar(100) NOT NULL,
  `finishing_akhir_jahit_benang` varchar(100) NOT NULL,
  `finishing_akhir_jahit_kawat` varchar(100) NOT NULL,
  `finishing_akhir_klem` varchar(100) NOT NULL,
  `finishing_akhir_pond` varchar(100) NOT NULL,
  `finishing_akhir_spiral` varchar(100) NOT NULL,
  `keterangan_finishing_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finishing`
--

INSERT INTO `finishing` (`id_finishing`, `id_order`, `finishing_cover_doff`, `finishing_cover_emboss`, `finishing_cover_glossy`, `finishing_cover_hotprint`, `finishing_cover_spot_uvi`, `finishing_cover_uvi`, `keterangan_finishing_cover`, `finishing_isi_lipat`, `finishing_isi_susun`, `keterangan_finishing_isi`, `finishing_akhir_bending`, `finishing_akhir_hard_cover`, `finishing_akhir_jahit_benang`, `finishing_akhir_jahit_kawat`, `finishing_akhir_klem`, `finishing_akhir_pond`, `finishing_akhir_spiral`, `keterangan_finishing_akhir`) VALUES
(80, 9, '', '', '', '', '', '', '', '', 'susun', '', '', '', '', '', 'klem', '', '', ''),
(81, 10, '', '', '', '', '', '', '', 'lipat', 'susun', '', '', '', '', 'jahit_kawat', '', '', '', ''),
(82, 11, 'doff', '', '', 'hotprint', 'spot_uvi', '', '', 'lipat', 'susun', '', '', 'hard_cover', 'jahit_benang', '', '', '', '', ''),
(85, 12, '', '', '', '', '', 'uvi', '', 'lipat', 'susun', '', '', '', 'jahit_benang', '', '', '', '', ''),
(86, 13, 'doff', '', '', '', '', '', '', 'lipat', 'susun', '', '', 'hard_cover', '', '', '', '', '', ''),
(87, 14, '', '', '', '', '', 'uvi', '', 'lipat', 'susun', '', 'bending', '', '', '', '', '', '', ''),
(88, 15, 'doff', '', '', '', '', '', '', 'lipat', 'susun', '', '', '', '', 'jahit_kawat', '', '', '', ''),
(89, 16, 'doff', '', '', '', '', '', '', 'lipat', 'susun', '', '', '', '', 'jahit_kawat', '', '', '', ''),
(90, 17, '', '', '', '', '', '', '', '', 'susun', '', '', '', '', '', '', '', '', ''),
(91, 18, 'doff', '', '', '', '', '', '', '', 'susun', '', '', '', '', 'jahit_kawat', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hardcover`
--

CREATE TABLE `hardcover` (
  `id_hardcover` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_hardcover` int(100) NOT NULL,
  `status_hardcover` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_hardcover` date NOT NULL,
  `keterangan_jadwal_hardcover` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` text NOT NULL,
  `tanggal_pengerjaan_3` date NOT NULL,
  `hasil_3` int(100) NOT NULL,
  `rejek_3` int(100) NOT NULL,
  `operator_3` varchar(100) NOT NULL,
  `kru_3` varchar(100) NOT NULL,
  `keterangan_3` text NOT NULL,
  `tanggal_pengerjaan_4` date NOT NULL,
  `hasil_4` int(100) NOT NULL,
  `rejek_4` int(100) NOT NULL,
  `operator_4` varchar(100) NOT NULL,
  `kru_4` varchar(100) NOT NULL,
  `keterangan_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hardcover`
--

INSERT INTO `hardcover` (`id_hardcover`, `id_order`, `id_jadwal_hardcover`, `status_hardcover`, `tanggal_pelaksanaan_hardcover`, `keterangan_jadwal_hardcover`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`, `tanggal_pengerjaan_3`, `hasil_3`, `rejek_3`, `operator_3`, `kru_3`, `keterangan_3`, `tanggal_pengerjaan_4`, `hasil_4`, `rejek_4`, `operator_4`, `kru_4`, `keterangan_4`) VALUES
(11, 9, 0, '', '2021-06-10', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `imposisi`
--

CREATE TABLE `imposisi` (
  `id_imposisi` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `namaoperator1` varchar(100) NOT NULL,
  `namaoperator2` varchar(100) NOT NULL,
  `total_plat_cover` varchar(100) NOT NULL,
  `total_plat_isi` varchar(100) NOT NULL,
  `imposisi_status` varchar(100) NOT NULL,
  `status_ctcp_cover` varchar(100) NOT NULL,
  `status_ctcp_isi` varchar(100) NOT NULL,
  `cover1mesin1` varchar(100) NOT NULL,
  `jumlahplatecover1` varchar(100) NOT NULL,
  `cover1plat1` int(100) NOT NULL,
  `cover1plat2` int(100) NOT NULL,
  `cover1plat3` int(100) NOT NULL,
  `cover1set1` varchar(100) NOT NULL,
  `cover1set2` varchar(100) NOT NULL,
  `cover1set3` varchar(100) NOT NULL,
  `cover1up1` varchar(100) NOT NULL,
  `cover1up2` varchar(100) NOT NULL,
  `cover1up3` varchar(100) NOT NULL,
  `cover1lbrcetak1` varchar(100) NOT NULL,
  `cover1lbrcetak2` varchar(100) NOT NULL,
  `cover1lbrcetak3` varchar(100) NOT NULL,
  `cover1warna1` varchar(100) NOT NULL,
  `cover1warna2` varchar(100) NOT NULL,
  `cover1warna3` varchar(100) NOT NULL,
  `cover1status1` varchar(100) NOT NULL,
  `cover1status2` varchar(100) NOT NULL,
  `cover1status3` varchar(100) NOT NULL,
  `cover1keterangan1` varchar(100) NOT NULL,
  `cover1keterangan2` varchar(100) NOT NULL,
  `cover1keterangan3` varchar(100) NOT NULL,
  `cover1tglimposisi1` text NOT NULL,
  `cover1tglimposisi2` text NOT NULL,
  `cover1tglimposisi3` text NOT NULL,
  `cover2mesin1` varchar(100) NOT NULL,
  `jumlahplatecover2` varchar(100) NOT NULL,
  `cover2plat1` int(100) NOT NULL,
  `cover2plat2` int(100) NOT NULL,
  `cover2plat3` int(100) NOT NULL,
  `cover2set1` varchar(100) NOT NULL,
  `cover2set2` varchar(100) NOT NULL,
  `cover2set3` varchar(100) NOT NULL,
  `cover2up1` varchar(100) NOT NULL,
  `cover2up2` varchar(100) NOT NULL,
  `cover2up3` varchar(100) NOT NULL,
  `cover2lbrcetak1` varchar(100) NOT NULL,
  `cover2lbrcetak2` varchar(100) NOT NULL,
  `cover2lbrcetak3` varchar(100) NOT NULL,
  `cover2warna1` varchar(100) NOT NULL,
  `cover2warna2` varchar(100) NOT NULL,
  `cover2warna3` varchar(100) NOT NULL,
  `cover2status1` varchar(100) NOT NULL,
  `cover2status2` varchar(100) NOT NULL,
  `cover2status3` varchar(100) NOT NULL,
  `cover2keterangan1` varchar(100) NOT NULL,
  `cover2keterangan2` varchar(100) NOT NULL,
  `cover2keterangan3` varchar(100) NOT NULL,
  `cover2tglimposisi1` text NOT NULL,
  `cover2tglimposisi2` text NOT NULL,
  `cover2tglimposisi3` text NOT NULL,
  `isi1mesin1` varchar(100) NOT NULL,
  `jumlahplateisi1` varchar(100) NOT NULL,
  `isi1plat1` int(100) NOT NULL,
  `isi1plat2` int(100) NOT NULL,
  `isi1plat3` int(100) NOT NULL,
  `isi1set1` varchar(100) NOT NULL,
  `isi1set2` varchar(100) NOT NULL,
  `isi1set3` varchar(100) NOT NULL,
  `isi1up1` varchar(100) NOT NULL,
  `isi1up2` varchar(100) NOT NULL,
  `isi1up3` varchar(100) NOT NULL,
  `isi1lbrcetak1` varchar(100) NOT NULL,
  `isi1lbrcetak2` varchar(100) NOT NULL,
  `isi1lbrcetak3` varchar(100) NOT NULL,
  `isi1warna1` varchar(100) NOT NULL,
  `isi1warna2` varchar(100) NOT NULL,
  `isi1warna3` varchar(100) NOT NULL,
  `isi1status1` varchar(100) NOT NULL,
  `isi1status2` varchar(100) NOT NULL,
  `isi1status3` varchar(100) NOT NULL,
  `isi1keterangan1` varchar(100) NOT NULL,
  `isi1keterangan2` varchar(100) NOT NULL,
  `isi1keterangan3` varchar(100) NOT NULL,
  `isi1tglimposisi1` text NOT NULL,
  `isi1tglimposisi2` text NOT NULL,
  `isi1tglimposisi3` text NOT NULL,
  `isi2mesin1` varchar(100) NOT NULL,
  `jumlahplateisi2` varchar(100) NOT NULL,
  `isi2plat1` int(100) NOT NULL,
  `isi2plat2` int(100) NOT NULL,
  `isi2plat3` int(100) NOT NULL,
  `isi2set1` varchar(100) NOT NULL,
  `isi2set2` varchar(100) NOT NULL,
  `isi2set3` varchar(100) NOT NULL,
  `isi2up1` varchar(100) NOT NULL,
  `isi2up2` varchar(100) NOT NULL,
  `isi2up3` varchar(100) NOT NULL,
  `isi2lbrcetak1` varchar(100) NOT NULL,
  `isi2lbrcetak2` varchar(100) NOT NULL,
  `isi2lbrcetak3` varchar(100) NOT NULL,
  `isi2warna1` varchar(100) NOT NULL,
  `isi2warna2` varchar(100) NOT NULL,
  `isi2warna3` varchar(100) NOT NULL,
  `isi2status1` varchar(100) NOT NULL,
  `isi2status2` varchar(100) NOT NULL,
  `isi2status3` varchar(100) NOT NULL,
  `isi2keterangan1` varchar(100) NOT NULL,
  `isi2keterangan2` varchar(100) NOT NULL,
  `isi2keterangan3` varchar(100) NOT NULL,
  `isi2tglimposisi1` text NOT NULL,
  `isi2tglimposisi2` text NOT NULL,
  `isi2tglimposisi3` text NOT NULL,
  `isi3mesin1` varchar(100) NOT NULL,
  `jumlahplateisi3` varchar(100) NOT NULL,
  `isi3plat1` int(100) NOT NULL,
  `isi3plat2` int(100) NOT NULL,
  `isi3plat3` int(100) NOT NULL,
  `isi3set1` varchar(100) NOT NULL,
  `isi3set2` varchar(100) NOT NULL,
  `isi3set3` varchar(100) NOT NULL,
  `isi3up1` varchar(100) NOT NULL,
  `isi3up2` varchar(100) NOT NULL,
  `isi3up3` varchar(100) NOT NULL,
  `isi3lbrcetak1` varchar(100) NOT NULL,
  `isi3lbrcetak2` varchar(100) NOT NULL,
  `isi3lbrcetak3` varchar(100) NOT NULL,
  `isi3warna1` varchar(100) NOT NULL,
  `isi3warna2` varchar(100) NOT NULL,
  `isi3warna3` varchar(100) NOT NULL,
  `isi3status1` varchar(100) NOT NULL,
  `isi3status2` varchar(100) NOT NULL,
  `isi3status3` varchar(100) NOT NULL,
  `isi3keterangan1` varchar(100) NOT NULL,
  `isi3keterangan2` varchar(100) NOT NULL,
  `isi3keterangan3` varchar(100) NOT NULL,
  `isi3tglimposisi1` text NOT NULL,
  `isi3tglimposisi2` text NOT NULL,
  `isi3tglimposisi3` text NOT NULL,
  `tanggal_imposisi_cover` text NOT NULL,
  `tanggal_imposisi_isi` text NOT NULL,
  `plate_1_gagal` varchar(100) NOT NULL,
  `plate_2_gagal` varchar(100) NOT NULL,
  `plate_3_gagal` varchar(100) NOT NULL,
  `mesin_1_gagal` varchar(100) NOT NULL,
  `mesin_2_gagal` varchar(100) NOT NULL,
  `mesin_3_gagal` varchar(100) NOT NULL,
  `catatan_imposisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imposisi`
--

INSERT INTO `imposisi` (`id_imposisi`, `id_order`, `namaoperator1`, `namaoperator2`, `total_plat_cover`, `total_plat_isi`, `imposisi_status`, `status_ctcp_cover`, `status_ctcp_isi`, `cover1mesin1`, `jumlahplatecover1`, `cover1plat1`, `cover1plat2`, `cover1plat3`, `cover1set1`, `cover1set2`, `cover1set3`, `cover1up1`, `cover1up2`, `cover1up3`, `cover1lbrcetak1`, `cover1lbrcetak2`, `cover1lbrcetak3`, `cover1warna1`, `cover1warna2`, `cover1warna3`, `cover1status1`, `cover1status2`, `cover1status3`, `cover1keterangan1`, `cover1keterangan2`, `cover1keterangan3`, `cover1tglimposisi1`, `cover1tglimposisi2`, `cover1tglimposisi3`, `cover2mesin1`, `jumlahplatecover2`, `cover2plat1`, `cover2plat2`, `cover2plat3`, `cover2set1`, `cover2set2`, `cover2set3`, `cover2up1`, `cover2up2`, `cover2up3`, `cover2lbrcetak1`, `cover2lbrcetak2`, `cover2lbrcetak3`, `cover2warna1`, `cover2warna2`, `cover2warna3`, `cover2status1`, `cover2status2`, `cover2status3`, `cover2keterangan1`, `cover2keterangan2`, `cover2keterangan3`, `cover2tglimposisi1`, `cover2tglimposisi2`, `cover2tglimposisi3`, `isi1mesin1`, `jumlahplateisi1`, `isi1plat1`, `isi1plat2`, `isi1plat3`, `isi1set1`, `isi1set2`, `isi1set3`, `isi1up1`, `isi1up2`, `isi1up3`, `isi1lbrcetak1`, `isi1lbrcetak2`, `isi1lbrcetak3`, `isi1warna1`, `isi1warna2`, `isi1warna3`, `isi1status1`, `isi1status2`, `isi1status3`, `isi1keterangan1`, `isi1keterangan2`, `isi1keterangan3`, `isi1tglimposisi1`, `isi1tglimposisi2`, `isi1tglimposisi3`, `isi2mesin1`, `jumlahplateisi2`, `isi2plat1`, `isi2plat2`, `isi2plat3`, `isi2set1`, `isi2set2`, `isi2set3`, `isi2up1`, `isi2up2`, `isi2up3`, `isi2lbrcetak1`, `isi2lbrcetak2`, `isi2lbrcetak3`, `isi2warna1`, `isi2warna2`, `isi2warna3`, `isi2status1`, `isi2status2`, `isi2status3`, `isi2keterangan1`, `isi2keterangan2`, `isi2keterangan3`, `isi2tglimposisi1`, `isi2tglimposisi2`, `isi2tglimposisi3`, `isi3mesin1`, `jumlahplateisi3`, `isi3plat1`, `isi3plat2`, `isi3plat3`, `isi3set1`, `isi3set2`, `isi3set3`, `isi3up1`, `isi3up2`, `isi3up3`, `isi3lbrcetak1`, `isi3lbrcetak2`, `isi3lbrcetak3`, `isi3warna1`, `isi3warna2`, `isi3warna3`, `isi3status1`, `isi3status2`, `isi3status3`, `isi3keterangan1`, `isi3keterangan2`, `isi3keterangan3`, `isi3tglimposisi1`, `isi3tglimposisi2`, `isi3tglimposisi3`, `tanggal_imposisi_cover`, `tanggal_imposisi_isi`, `plate_1_gagal`, `plate_2_gagal`, `plate_3_gagal`, `mesin_1_gagal`, `mesin_2_gagal`, `mesin_3_gagal`, `catatan_imposisi`) VALUES
(101, 9, 'OP1', '', '12', '0', 'imposisi cover', '', '', '74', '12', 12, 0, 0, '3', '', '', '2', '', '', '1.5', '', '', '4', '', '', '-', '-', '-', 'SINGLE', '', '', '2021-05-20', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2 UP'),
(103, 10, 'OP1', 'OP1', '4', '4', 'imposisi', '', '', '74', '4', 4, 0, 0, '1', '', '', '1', '', '', '0.5', '', '', '4', '', '', 'BLK', '-', '-', 'Ket1', '', '', '2021-05-11', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '74', '68', 64, 4, 0, '16', '1', '', '8', '8', '', '8', '0.5', '0', '4', '4', '', 'GP', 'BLK', '-', '', 'DOBEL', '', '2021-05-11', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 11, 'OP1', 'OP1', '5', '84', 'imposisi', '', '', '74', '5', 4, 1, 0, '1', '1', '', '2', '2', '', '0.5', '0.5', '0', '4', '1', '', 'GP', 'GP', '-', 'DOBEL', 'DOBEL', '', '2021-05-20', '2021-05-20', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '74', '8', 8, 0, 0, '2', '', '', '8', '', '', '1', '', '', '4', '', '', 'GP', '-', '-', '', '', '', '2021-05-20', '', '', '102', '76', 76, 0, 0, '38', '', '', '16', '', '', '19', '', '', '2', '', '', 'GP', '-', '-', '', '', '', '2021-05-20', '', '', '-', '0', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, 12, 'Tester', 'TesterOp', '3', '1', 'imposisi', '', '', '74', '3', 3, 0, 0, '3', '', '', '1', '', '', '1', '', '', '1', '', '', 'BLG', '-', '-', 'ket1', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '74', '1', 1, 0, 0, '1', '', '', '1', '', '', '1', '', '', '1', '', '', 'GP', '-', '-', 'ketisi1', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, 17, 'Tester 3', 'op', '4', '4', 'imposisi', '', '', '102', '4', 4, 0, 0, '1.3333333333333', '', '', '4', '', '', '3', '', '', '3', '', '', 'BLK', '-', '-', 'DOBEL', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '72', '4', 4, 0, 0, '2', '', '', '1', '', '', '2', '', '', '2', '', '', 'BLK', '-', '-', 'Ket2', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, 18, '', '', '', '', 'imposisi', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '-', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_finishing`
--

CREATE TABLE `jadwal_finishing` (
  `id_jadwal_finishing` int(100) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `jenis_mesin` varchar(100) NOT NULL,
  `id_rician_jadwal_finishing` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jahit`
--

CREATE TABLE `jahit` (
  `id_jahit` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_jahit` int(100) NOT NULL,
  `status_jahit` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_jahit` date NOT NULL,
  `keterangan_jadwal_jahit` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` text NOT NULL,
  `tanggal_pengerjaan_3` date NOT NULL,
  `hasil_3` int(100) NOT NULL,
  `rejek_3` int(100) NOT NULL,
  `operator_3` varchar(100) NOT NULL,
  `kru_3` varchar(100) NOT NULL,
  `keterangan_3` text NOT NULL,
  `tanggal_pengerjaan_4` date NOT NULL,
  `hasil_4` int(100) NOT NULL,
  `rejek_4` int(100) NOT NULL,
  `operator_4` varchar(100) NOT NULL,
  `kru_4` varchar(100) NOT NULL,
  `keterangan_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jahit`
--

INSERT INTO `jahit` (`id_jahit`, `id_order`, `id_jadwal_jahit`, `status_jahit`, `tanggal_pelaksanaan_jahit`, `keterangan_jadwal_jahit`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`, `tanggal_pengerjaan_3`, `hasil_3`, `rejek_3`, `operator_3`, `kru_3`, `keterangan_3`, `tanggal_pengerjaan_4`, `hasil_4`, `rejek_4`, `operator_4`, `kru_4`, `keterangan_4`) VALUES
(11, 9, 0, '', '2021-06-08', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kertas`
--

CREATE TABLE `kertas` (
  `id_kertas` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `ukuran_plano_cover_1` varchar(100) NOT NULL,
  `jenis_kertas_cover_1` varchar(100) NOT NULL,
  `jumlah_kertas_cover_1` varchar(100) NOT NULL,
  `ukuran_plano_cover_2` varchar(100) NOT NULL,
  `jenis_kertas_cover_2` varchar(100) NOT NULL,
  `jumlah_kertas_cover_2` varchar(100) NOT NULL,
  `ukuran_plano_cover_3` varchar(100) NOT NULL,
  `jenis_kertas_cover_3` varchar(100) NOT NULL,
  `jumlah_kertas_cover_3` varchar(100) NOT NULL,
  `ukuran_plano_isi_1` varchar(100) NOT NULL,
  `jenis_kertas_isi_1` varchar(100) NOT NULL,
  `jumlah_kertas_isi_1` varchar(100) NOT NULL,
  `ukuran_plano_isi_2` varchar(100) NOT NULL,
  `jenis_kertas_isi_2` varchar(100) NOT NULL,
  `jumlah_kertas_isi_2` varchar(100) NOT NULL,
  `ukuran_plano_isi_3` varchar(100) NOT NULL,
  `jenis_kertas_isi_3` varchar(100) NOT NULL,
  `jumlah_kertas_isi_3` varchar(100) NOT NULL,
  `ukuran_plano_isi_4` varchar(100) NOT NULL,
  `jenis_kertas_isi_4` varchar(100) NOT NULL,
  `jumlah_kertas_isi_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kertas`
--

INSERT INTO `kertas` (`id_kertas`, `id_order`, `ukuran_plano_cover_1`, `jenis_kertas_cover_1`, `jumlah_kertas_cover_1`, `ukuran_plano_cover_2`, `jenis_kertas_cover_2`, `jumlah_kertas_cover_2`, `ukuran_plano_cover_3`, `jenis_kertas_cover_3`, `jumlah_kertas_cover_3`, `ukuran_plano_isi_1`, `jenis_kertas_isi_1`, `jumlah_kertas_isi_1`, `ukuran_plano_isi_2`, `jenis_kertas_isi_2`, `jumlah_kertas_isi_2`, `ukuran_plano_isi_3`, `jenis_kertas_isi_3`, `jumlah_kertas_isi_3`, `ukuran_plano_isi_4`, `jenis_kertas_isi_4`, `jumlah_kertas_isi_4`) VALUES
(81, 9, '-', '-', '', '-', '-', '', '-', '-', '', '65 x 100', 'HVS 70 gr', '7725', '-', '-', '', '-', '-', '', '', '', ''),
(82, 10, '65 x 90', 'AP 90', '5225', '-', '-', '', '-', '-', '', '61 x 88', 'LWC', '85825', '-', '-', '', '-', '-', '', '', '', ''),
(83, 11, '79 x 109', 'Aster', '75', '-', '-', '', '-', '-', '', '61 x 86', 'QP 50 gr', '225', '-', '-', '', '-', '-', '', '', '', ''),
(86, 12, '65 x 90', 'AP 90', '1225', '-', '-', '', '-', '-', '', '61 x 88', 'LWC', '13100', '-', '-', '', '-', '-', '', '', '', ''),
(87, 13, '65 x 100', 'AP 90', '325', '-', '-', '', '-', '-', '', '65 x 100', 'HVS 70 gr', '17100', '65 x 100', 'BC_I_putih', '300', '-', '-', '', '', '', ''),
(88, 14, '79 x 109', 'ACCO(isi50)', '60', '-', '-', '', '-', '-', '', '61 x 86', 'HVS 70 gr', '900', '79 x 109', 'HVS 70 gr', '50', '-', '-', '', '', '', ''),
(89, 15, '65 x 100', 'ACCO(isi50)', '175', '-', '-', '', '-', '-', '', '65 x 90', 'AP 120 gr', '688', '65 x 90', 'HVS 70 gr', '1375', '-', '-', '', '', '', ''),
(90, 16, '79 x 109', 'ACCO(isi50)', '160', '-', '-', '', '-', '-', '', '79 x 109', 'MP 100 gr', '1600', '-', '-', '', '-', '-', '', '', '', ''),
(91, 17, '65 x 100', 'Aster', '228', '-', '-', '', '-', '-', '', '-', '-', '', '-', '-', '', '-', '-', '', '', '', ''),
(92, 18, '65 x 100', 'BC hijau', '3', '-', '-', '', '-', '-', '', '72 x 100', 'Aster', '2', '-', '-', '', '-', '-', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `klemseng`
--

CREATE TABLE `klemseng` (
  `id_klemseng` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_klemseng` int(100) NOT NULL,
  `status_klemseng` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_klemseng` date NOT NULL,
  `keterangan_jadwal_klemseng` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` text NOT NULL,
  `tanggal_pengerjaan_3` date NOT NULL,
  `hasil_3` int(100) NOT NULL,
  `rejek_3` int(100) NOT NULL,
  `operator_3` varchar(100) NOT NULL,
  `kru_3` varchar(100) NOT NULL,
  `keterangan_3` text NOT NULL,
  `tanggal_pengerjaan_4` date NOT NULL,
  `hasil_4` int(100) NOT NULL,
  `rejek_4` int(100) NOT NULL,
  `operator_4` varchar(100) NOT NULL,
  `kru_4` varchar(100) NOT NULL,
  `keterangan_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klemseng`
--

INSERT INTO `klemseng` (`id_klemseng`, `id_order`, `id_jadwal_klemseng`, `status_klemseng`, `tanggal_pelaksanaan_klemseng`, `keterangan_jadwal_klemseng`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`, `tanggal_pengerjaan_3`, `hasil_3`, `rejek_3`, `operator_3`, `kru_3`, `keterangan_3`, `tanggal_pengerjaan_4`, `hasil_4`, `rejek_4`, `operator_4`, `kru_4`, `keterangan_4`) VALUES
(11, 9, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laminasi`
--

CREATE TABLE `laminasi` (
  `id_laminasi` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_laminasi` int(100) NOT NULL,
  `tanggal_pelaksanaan_laminasi` date NOT NULL,
  `status_laminasi` varchar(100) NOT NULL,
  `keterangan_jadwal_fp_laminasi` text NOT NULL,
  `jenis_laminasi` varchar(100) NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laminasi`
--

INSERT INTO `laminasi` (`id_laminasi`, `id_order`, `id_jadwal_laminasi`, `tanggal_pelaksanaan_laminasi`, `status_laminasi`, `keterangan_jadwal_fp_laminasi`, `jenis_laminasi`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`) VALUES
(31, 11, 0, '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(33, 10, 0, '2021-06-15', 'laminasi', '4', 'doff', '0000-00-00', 5, 0, '', '', '', '0000-00-00', 5, 0, '', '', ''),
(34, 9, 0, '2021-06-18', 'laminasi', '5', 'glossy', '2021-06-29', 522, 5, 'andika', 'ali', '123', '2021-06-29', 50, 2, 'Ali', '23', '4123'),
(35, 9, 1, '2021-06-22', 'laminasi', '5', 'glossy', '2021-06-08', 522, 5, 'asdsad', '23', '23', '0000-00-00', 0, 0, '', '', ''),
(36, 12, 0, '2021-06-16', 'laminasi', 'ga ewae', 'doff', '2021-06-21', 12312312, 0, '', '', '', '2021-06-17', 2147483647, 0, '', '', ''),
(37, 9, 2, '2021-06-22', 'laminasi', '5', 'glossy', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(38, 9, 3, '2021-06-23', 'laminasi', '5', 'glossy', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(39, 9, 4, '2021-06-22', 'laminasi', '5', 'glossy', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(40, 9, 5, '2021-07-01', 'laminasi', '5', 'glossy', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(41, 15, 0, '2021-06-20', '', '123', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pracetak`
--

CREATE TABLE `laporan_pracetak` (
  `id_laporan_pracetak` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `status_laporan_pracetak` varchar(100) NOT NULL,
  `plate_1_keluar_cover` varchar(100) NOT NULL,
  `plate_2_keluar_cover` varchar(100) NOT NULL,
  `plate_3_keluar_cover` varchar(100) NOT NULL,
  `mesin_1_keluar_cover` varchar(100) NOT NULL,
  `mesin_2_keluar_cover` varchar(100) NOT NULL,
  `mesin_3_keluar_cover` varchar(100) NOT NULL,
  `plate_1_keluar_isi` varchar(100) NOT NULL,
  `plate_2_keluar_isi` varchar(100) NOT NULL,
  `plate_3_keluar_isi` varchar(100) NOT NULL,
  `mesin_1_keluar_isi` varchar(100) NOT NULL,
  `mesin_2_keluar_isi` varchar(100) NOT NULL,
  `mesin_3_keluar_isi` varchar(100) NOT NULL,
  `plate_gagal1` varchar(100) NOT NULL,
  `plate_gagal2` varchar(100) NOT NULL,
  `plate_gagal3` varchar(100) NOT NULL,
  `mesin_gagal1` varchar(100) NOT NULL,
  `mesin_gagal2` varchar(100) NOT NULL,
  `mesin_gagal3` varchar(100) NOT NULL,
  `tanggal_out_ctcp_cover` date NOT NULL,
  `tanggal_out_ctcp_isi_1` date NOT NULL,
  `tanggal_out_ctcp_isi_2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mbo`
--

CREATE TABLE `mbo` (
  `id_mbo` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_mbo` int(100) NOT NULL,
  `keterangan_jadwal_fp_mbo` text NOT NULL,
  `tanggal_pelaksanaan_mesin_mbo` date NOT NULL,
  `status_mbo` varchar(100) NOT NULL,
  `lipat_lembar_1` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_1` int(100) NOT NULL,
  `operator_lembar_1` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_1` date NOT NULL,
  `keterangan_lembar_1` text NOT NULL,
  `lipat_lembar_2` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_2` int(100) NOT NULL,
  `operator_lembar_2` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_2` date NOT NULL,
  `keterangan_lembar_2` text NOT NULL,
  `lipat_lembar_3` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_3` int(100) NOT NULL,
  `operator_lembar_3` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_3` date NOT NULL,
  `keterangan_lembar_3` text NOT NULL,
  `lipat_lembar_4` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_4` int(100) NOT NULL,
  `operator_lembar_4` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_4` date NOT NULL,
  `keterangan_lembar_4` text NOT NULL,
  `lipat_lembar_5` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_5` int(100) NOT NULL,
  `operator_lembar_5` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_5` date NOT NULL,
  `keterangan_lembar_5` text NOT NULL,
  `lipat_lembar_6` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_6` int(100) NOT NULL,
  `operator_lembar_6` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_6` date NOT NULL,
  `keterangan_lembar_6` text NOT NULL,
  `lipat_lembar_7` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_7` int(100) NOT NULL,
  `operator_lembar_7` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_7` date NOT NULL,
  `keterangan_lembar_7` text NOT NULL,
  `lipat_lembar_8` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_8` int(100) NOT NULL,
  `operator_lembar_8` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_8` date NOT NULL,
  `keterangan_lembar_8` text NOT NULL,
  `lipat_lembar_9` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_9` int(100) NOT NULL,
  `operator_lembar_9` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_9` date NOT NULL,
  `keterangan_lembar_9` text NOT NULL,
  `lipat_lembar_10` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_10` int(100) NOT NULL,
  `operator_lembar_10` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_10` date NOT NULL,
  `keterangan_lembar_10` text NOT NULL,
  `lipat_lembar_11` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_11` int(100) NOT NULL,
  `operator_lembar_11` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_11` date NOT NULL,
  `keterangan_lembar_11` text NOT NULL,
  `lipat_lembar_12` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_12` int(100) NOT NULL,
  `operator_lembar_12` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_12` date NOT NULL,
  `keterangan_lembar_12` text NOT NULL,
  `lipat_lembar_13` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_13` int(100) NOT NULL,
  `operator_lembar_13` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_13` date NOT NULL,
  `keterangan_lembar_13` text NOT NULL,
  `lipat_lembar_14` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_14` int(100) NOT NULL,
  `operator_lembar_14` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_14` date NOT NULL,
  `keterangan_lembar_14` text NOT NULL,
  `lipat_lembar_15` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_15` int(100) NOT NULL,
  `operator_lembar_15` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_15` date NOT NULL,
  `keterangan_lembar_15` text NOT NULL,
  `lipat_lembar_16` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_16` int(100) NOT NULL,
  `operator_lembar_16` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_16` date NOT NULL,
  `keterangan_lembar_16` text NOT NULL,
  `lipat_lembar_17` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_17` int(100) NOT NULL,
  `operator_lembar_17` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_17` date NOT NULL,
  `keterangan_lembar_17` text NOT NULL,
  `lipat_lembar_18` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_18` int(100) NOT NULL,
  `operator_lembar_18` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_18` date NOT NULL,
  `keterangan_lembar_18` text NOT NULL,
  `lipat_lembar_19` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_19` int(100) NOT NULL,
  `operator_lembar_19` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_19` date NOT NULL,
  `keterangan_lembar_19` text NOT NULL,
  `lipat_lembar_20` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_20` int(100) NOT NULL,
  `operator_lembar_20` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_20` date NOT NULL,
  `keterangan_lembar_20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mbo`
--

INSERT INTO `mbo` (`id_mbo`, `id_order`, `id_jadwal_mbo`, `keterangan_jadwal_fp_mbo`, `tanggal_pelaksanaan_mesin_mbo`, `status_mbo`, `lipat_lembar_1`, `hasil_lipatan_lembar_1`, `operator_lembar_1`, `tanggal_pengerjaan_lembar_1`, `keterangan_lembar_1`, `lipat_lembar_2`, `hasil_lipatan_lembar_2`, `operator_lembar_2`, `tanggal_pengerjaan_lembar_2`, `keterangan_lembar_2`, `lipat_lembar_3`, `hasil_lipatan_lembar_3`, `operator_lembar_3`, `tanggal_pengerjaan_lembar_3`, `keterangan_lembar_3`, `lipat_lembar_4`, `hasil_lipatan_lembar_4`, `operator_lembar_4`, `tanggal_pengerjaan_lembar_4`, `keterangan_lembar_4`, `lipat_lembar_5`, `hasil_lipatan_lembar_5`, `operator_lembar_5`, `tanggal_pengerjaan_lembar_5`, `keterangan_lembar_5`, `lipat_lembar_6`, `hasil_lipatan_lembar_6`, `operator_lembar_6`, `tanggal_pengerjaan_lembar_6`, `keterangan_lembar_6`, `lipat_lembar_7`, `hasil_lipatan_lembar_7`, `operator_lembar_7`, `tanggal_pengerjaan_lembar_7`, `keterangan_lembar_7`, `lipat_lembar_8`, `hasil_lipatan_lembar_8`, `operator_lembar_8`, `tanggal_pengerjaan_lembar_8`, `keterangan_lembar_8`, `lipat_lembar_9`, `hasil_lipatan_lembar_9`, `operator_lembar_9`, `tanggal_pengerjaan_lembar_9`, `keterangan_lembar_9`, `lipat_lembar_10`, `hasil_lipatan_lembar_10`, `operator_lembar_10`, `tanggal_pengerjaan_lembar_10`, `keterangan_lembar_10`, `lipat_lembar_11`, `hasil_lipatan_lembar_11`, `operator_lembar_11`, `tanggal_pengerjaan_lembar_11`, `keterangan_lembar_11`, `lipat_lembar_12`, `hasil_lipatan_lembar_12`, `operator_lembar_12`, `tanggal_pengerjaan_lembar_12`, `keterangan_lembar_12`, `lipat_lembar_13`, `hasil_lipatan_lembar_13`, `operator_lembar_13`, `tanggal_pengerjaan_lembar_13`, `keterangan_lembar_13`, `lipat_lembar_14`, `hasil_lipatan_lembar_14`, `operator_lembar_14`, `tanggal_pengerjaan_lembar_14`, `keterangan_lembar_14`, `lipat_lembar_15`, `hasil_lipatan_lembar_15`, `operator_lembar_15`, `tanggal_pengerjaan_lembar_15`, `keterangan_lembar_15`, `lipat_lembar_16`, `hasil_lipatan_lembar_16`, `operator_lembar_16`, `tanggal_pengerjaan_lembar_16`, `keterangan_lembar_16`, `lipat_lembar_17`, `hasil_lipatan_lembar_17`, `operator_lembar_17`, `tanggal_pengerjaan_lembar_17`, `keterangan_lembar_17`, `lipat_lembar_18`, `hasil_lipatan_lembar_18`, `operator_lembar_18`, `tanggal_pengerjaan_lembar_18`, `keterangan_lembar_18`, `lipat_lembar_19`, `hasil_lipatan_lembar_19`, `operator_lembar_19`, `tanggal_pengerjaan_lembar_19`, `keterangan_lembar_19`, `lipat_lembar_20`, `hasil_lipatan_lembar_20`, `operator_lembar_20`, `tanggal_pengerjaan_lembar_20`, `keterangan_lembar_20`) VALUES
(22, 11, 0, '', '2021-06-11', 'mbo', '', 54, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', ''),
(24, 10, 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', ''),
(25, 9, 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', ''),
(26, 12, 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', ''),
(27, 15, 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_72`
--

CREATE TABLE `mesin_72` (
  `id_mesin_72` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `tanggal_pelaksanaan` text NOT NULL,
  `operator` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `druk` varchar(100) NOT NULL,
  `total_kertas` varchar(100) NOT NULL,
  `set` int(100) NOT NULL,
  `jenis_cetakan` varchar(100) NOT NULL,
  `kru_operator_72` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesin_72`
--

INSERT INTO `mesin_72` (`id_mesin_72`, `id_order`, `tanggal_pelaksanaan`, `operator`, `target`, `nama_mesin`, `druk`, `total_kertas`, `set`, `jenis_cetakan`, `kru_operator_72`) VALUES
(31, 11, '2021-06-05', 'Yono/Bukori', '1', 'mesin72', '300', '0', 1, 'Cover', '0'),
(32, 12, '2021-06-30', 'Ariyanto', '12', 'mesin72', '55200', '0', 12, 'Cover', 'sad'),
(33, 12, '2021-06-30', 'Ariyanto', '12', 'mesin72', '55200', '0', 12, 'Isi', '12'),
(34, 17, '2021-07-20', 'Ngatiman', '12', 'mesin72', '24000', '0', 12, 'Isi', '23');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_74_a`
--

CREATE TABLE `mesin_74_a` (
  `id_mesin_74a` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `tanggal_pelaksanaan` text NOT NULL,
  `operator` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `druk` varchar(100) NOT NULL,
  `total_kertas` varchar(100) NOT NULL,
  `set` int(100) NOT NULL,
  `jenis_cetakan` varchar(100) NOT NULL,
  `kru_operator_74a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesin_74_a`
--

INSERT INTO `mesin_74_a` (`id_mesin_74a`, `id_order`, `tanggal_pelaksanaan`, `operator`, `target`, `nama_mesin`, `druk`, `total_kertas`, `set`, `jenis_cetakan`, `kru_operator_74a`) VALUES
(13, 11, '2021-06-03', 'Anam/Rois', '2', 'mesin74a', '600', '0', 2, 'Isi', ''),
(14, 9, '2021-06-12', 'Yono/Bukori', '2', 'mesin74a', '10000', '0', 2, 'Cover', '');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_74_b`
--

CREATE TABLE `mesin_74_b` (
  `id_mesin_74b` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `tanggal_pelaksanaan` text NOT NULL,
  `operator` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `druk` varchar(100) NOT NULL,
  `total_kertas` varchar(100) NOT NULL,
  `set` int(100) NOT NULL,
  `jenis_cetakan` varchar(100) NOT NULL,
  `kru_operator_74b` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesin_74_b`
--

INSERT INTO `mesin_74_b` (`id_mesin_74b`, `id_order`, `tanggal_pelaksanaan`, `operator`, `target`, `nama_mesin`, `druk`, `total_kertas`, `set`, `jenis_cetakan`, `kru_operator_74b`) VALUES
(22, 10, '2021-06-06', 'Kanang/Yoga', '1', 'mesin74b', '18900', '0', 1, 'Cover', ''),
(23, 9, '2021-06-05', 'Yono/Bukori', '2', 'mesin74b', '10000', '0', 2, 'Isi', ''),
(24, 17, '2021-07-14', 'Ferri', '2', 'mesin74b', '4000', '0', 12, 'Cover', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_102_a`
--

CREATE TABLE `mesin_102_a` (
  `id_mesin_102a` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `tanggal_pelaksanaan` text NOT NULL,
  `operator` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `druk` varchar(100) NOT NULL,
  `total_kertas` varchar(100) NOT NULL,
  `set` int(100) NOT NULL,
  `jenis_cetakan` varchar(100) NOT NULL,
  `kru_operator_102a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesin_102_a`
--

INSERT INTO `mesin_102_a` (`id_mesin_102a`, `id_order`, `tanggal_pelaksanaan`, `operator`, `target`, `nama_mesin`, `druk`, `total_kertas`, `set`, `jenis_cetakan`, `kru_operator_102a`) VALUES
(8, 12, '2021-06-05', 'Natiman/Feri (Crew Fajar)', '1', 'mesin102a', '4600', '0', 2, 'Cover', '');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_102_b`
--

CREATE TABLE `mesin_102_b` (
  `id_mesin_102b` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `tanggal_pelaksanaan` text NOT NULL,
  `operator` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `druk` varchar(100) NOT NULL,
  `total_kertas` varchar(100) NOT NULL,
  `set` int(100) NOT NULL,
  `jenis_cetakan` varchar(100) NOT NULL,
  `kru_operator_102b` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesin_102_b`
--

INSERT INTO `mesin_102_b` (`id_mesin_102b`, `id_order`, `tanggal_pelaksanaan`, `operator`, `target`, `nama_mesin`, `druk`, `total_kertas`, `set`, `jenis_cetakan`, `kru_operator_102b`) VALUES
(8, 17, '2021-06-09', 'Yono/Bukori', '2', 'mesin102b', '4000', '0', 2, 'Isi', '');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_tokko`
--

CREATE TABLE `mesin_tokko` (
  `id_mesin_tokko` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `tanggal_pelaksanaan` text NOT NULL,
  `operator` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `druk` varchar(100) NOT NULL,
  `total_kertas` varchar(100) NOT NULL,
  `set` int(100) NOT NULL,
  `jenis_cetakan` varchar(100) NOT NULL,
  `kru_operator_tokko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesin_tokko`
--

INSERT INTO `mesin_tokko` (`id_mesin_tokko`, `id_order`, `tanggal_pelaksanaan`, `operator`, `target`, `nama_mesin`, `druk`, `total_kertas`, `set`, `jenis_cetakan`, `kru_operator_tokko`) VALUES
(7, 10, '2021-06-11', 'Anam/Rois', '1', 'mesintokko', '18900', '0', 2, 'Isi', ''),
(8, 15, '2021-06-10', 'Yono/Bukori', '1', 'mesintokko', '400', '0', 2, 'Isi', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(100) NOT NULL,
  `so_status` varchar(100) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `nama_orderan` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deadline` date NOT NULL,
  `nomor_so` varchar(100) NOT NULL,
  `oplag` varchar(100) NOT NULL,
  `halaman` varchar(100) NOT NULL,
  `finishing_akhir` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `so_status`, `nama_pemesan`, `nama_orderan`, `tanggal_masuk`, `deadline`, `nomor_so`, `oplag`, `halaman`, `finishing_akhir`, `ukuran`) VALUES
(9, 'pracetak', 'SUARA MUHAMMADIYAH', 'Kalender Hijriyah 1443', '2021-05-21', '2021-05-25', '2021.5.1067', '5000', '6', '', '31*47.5'),
(10, 'quality control', 'SUARA MUHAMMADIYAH', 'Majalah SM No. 11/2021', '2021-05-11', '2021-05-25', '2021.5.1046', '18900', '68', '', '19*26'),
(11, 'pracetak', 'UM RIAU', 'Mushaf At Tanwir', '2021-05-20', '2021-05-26', '2021.5.1060', '300', '624', '', '14.5*20'),
(12, 'pracetak', 'PP AISYIYAH, SA', 'Majalaj Suara Aisyiyah Edisi 6', '2021-05-22', '2021-05-27', '2021.5.1080', '4600', '44', '', '21*27'),
(13, 'marketing', 'AT TUQO', 'Buku Sirah Nabawiyah (Ash Shaff Media)', '2021-05-25', '2021-06-15', '2021.5.1088', '1000', '496', '', '15.5*23.5'),
(14, 'marketing', 'UM PURWOREJO', 'Buku Wisuda', '2021-05-25', '2021-06-04', '2021.5.1095', '200', '78', '', '20.5*18'),
(15, 'marketing', 'SMA MUH 1 YK', 'Majalah Warta Muhi', '2021-05-24', '2021-05-27', '2021.5.1085', '400', '60', '', '21*29.7'),
(16, 'marketing', 'KEMENKO PMK', 'Majalah Bravo PMK', '2021-05-25', '2021-05-27', '2021.5.1092', '1000', '44', '', '17.5*25'),
(17, 'pracetak', 'RS PKU MUH YK', 'Form RM 33e (Formulir Pendanaan Lokasi Operasi Medis)', '2021-05-24', '2021-05-26', '2021.5.1083', '2000', '1', '', '21*29.7'),
(18, 'pracetak', 'PP', 'Majalah Coba', '2021-06-01', '2021-07-10', '2021.5.1089', '2', '44', '', '21*27');

-- --------------------------------------------------------

--
-- Table structure for table `potong`
--

CREATE TABLE `potong` (
  `id_potong` int(100) NOT NULL,
  `id_order` int(100) NOT NULL,
  `potong_cover_1` varchar(100) NOT NULL,
  `potong_cover_2` varchar(100) NOT NULL,
  `potong_cover_3` varchar(100) NOT NULL,
  `potong_isi_1` varchar(100) NOT NULL,
  `potong_isi_2` varchar(100) NOT NULL,
  `potong_isi_3` varchar(100) NOT NULL,
  `potong_isi_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potong`
--

INSERT INTO `potong` (`id_potong`, `id_order`, `potong_cover_1`, `potong_cover_2`, `potong_cover_3`, `potong_isi_1`, `potong_isi_2`, `potong_isi_3`, `potong_isi_4`) VALUES
(77, 9, '', '', '', '2', '', '', ''),
(78, 10, '2', '', '', '2', '', '', ''),
(79, 11, '4', '', '', '2', '', '', ''),
(82, 12, '2', '', '', '2', '', '', ''),
(83, 13, '2', '', '', '1', '2', '', ''),
(84, 14, '4', '', '', '2', '4', '', ''),
(85, 15, '2', '', '', '2', '', '', ''),
(86, 16, '4', '', '', '2', '', '', ''),
(87, 17, '9', '', '', '', '', '', ''),
(88, 18, '2', '', '', '2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `qc`
--

CREATE TABLE `qc` (
  `id_qc` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `hasil` int(100) NOT NULL,
  `rejek` int(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qc`
--

INSERT INTO `qc` (`id_qc`, `id_order`, `tanggal`, `status`, `hasil`, `rejek`, `keterangan`) VALUES
(1, 10, '0000-00-00', 'diterima', 1890, 10, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_jadwal_finishing`
--

CREATE TABLE `rincian_jadwal_finishing` (
  `id_rincian_jadwal_finishing` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `id_shoe` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_shoe` int(100) NOT NULL,
  `keterangan_jadwal_fp_shoe` text NOT NULL,
  `tanggal_pelaksanaan_mesin_shoe` date NOT NULL,
  `status_shoe` varchar(100) NOT NULL,
  `lipat_lembar_1` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_1` int(100) NOT NULL,
  `operator_lembar_1` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_1` date NOT NULL,
  `keterangan_lembar_1` text NOT NULL,
  `lipat_lembar_2` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_2` int(100) NOT NULL,
  `operator_lembar_2` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_2` date NOT NULL,
  `keterangan_lembar_2` text NOT NULL,
  `lipat_lembar_3` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_3` int(100) NOT NULL,
  `operator_lembar_3` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_3` date NOT NULL,
  `keterangan_lembar_3` text NOT NULL,
  `lipat_lembar_4` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_4` int(100) NOT NULL,
  `operator_lembar_4` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_4` date NOT NULL,
  `keterangan_lembar_4` text NOT NULL,
  `lipat_lembar_5` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_5` int(100) NOT NULL,
  `operator_lembar_5` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_5` date NOT NULL,
  `keterangan_lembar_5` text NOT NULL,
  `lipat_lembar_6` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_6` int(100) NOT NULL,
  `operator_lembar_6` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_6` date NOT NULL,
  `keterangan_lembar_6` text NOT NULL,
  `lipat_lembar_7` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_7` int(100) NOT NULL,
  `operator_lembar_7` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_7` date NOT NULL,
  `keterangan_lembar_7` text NOT NULL,
  `lipat_lembar_8` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_8` int(100) NOT NULL,
  `operator_lembar_8` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_8` date NOT NULL,
  `keterangan_lembar_8` text NOT NULL,
  `lipat_lembar_9` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_9` int(100) NOT NULL,
  `operator_lembar_9` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_9` date NOT NULL,
  `keterangan_lembar_9` text NOT NULL,
  `lipat_lembar_10` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_10` int(100) NOT NULL,
  `operator_lembar_10` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_10` date NOT NULL,
  `keterangan_lembar_10` text NOT NULL,
  `lipat_lembar_11` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_11` int(100) NOT NULL,
  `operator_lembar_11` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_11` date NOT NULL,
  `keterangan_lembar_11` text NOT NULL,
  `lipat_lembar_12` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_12` int(100) NOT NULL,
  `operator_lembar_12` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_12` date NOT NULL,
  `keterangan_lembar_12` text NOT NULL,
  `lipat_lembar_13` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_13` int(100) NOT NULL,
  `operator_lembar_13` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_13` date NOT NULL,
  `keterangan_lembar_13` text NOT NULL,
  `lipat_lembar_14` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_14` int(100) NOT NULL,
  `operator_lembar_14` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_14` date NOT NULL,
  `keterangan_lembar_14` text NOT NULL,
  `lipat_lembar_15` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_15` int(100) NOT NULL,
  `operator_lembar_15` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_15` date NOT NULL,
  `keterangan_lembar_15` text NOT NULL,
  `lipat_lembar_16` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_16` int(100) NOT NULL,
  `operator_lembar_16` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_16` date NOT NULL,
  `keterangan_lembar_16` text NOT NULL,
  `lipat_lembar_17` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_17` int(100) NOT NULL,
  `operator_lembar_17` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_17` date NOT NULL,
  `keterangan_lembar_17` text NOT NULL,
  `lipat_lembar_18` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_18` int(100) NOT NULL,
  `operator_lembar_18` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_18` date NOT NULL,
  `keterangan_lembar_18` text NOT NULL,
  `lipat_lembar_19` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_19` int(100) NOT NULL,
  `operator_lembar_19` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_19` date NOT NULL,
  `keterangan_lembar_19` text NOT NULL,
  `lipat_lembar_20` varchar(100) NOT NULL,
  `hasil_lipatan_lembar_20` int(100) NOT NULL,
  `operator_lembar_20` varchar(100) NOT NULL,
  `tanggal_pengerjaan_lembar_20` date NOT NULL,
  `keterangan_lembar_20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`id_shoe`, `id_order`, `id_jadwal_shoe`, `keterangan_jadwal_fp_shoe`, `tanggal_pelaksanaan_mesin_shoe`, `status_shoe`, `lipat_lembar_1`, `hasil_lipatan_lembar_1`, `operator_lembar_1`, `tanggal_pengerjaan_lembar_1`, `keterangan_lembar_1`, `lipat_lembar_2`, `hasil_lipatan_lembar_2`, `operator_lembar_2`, `tanggal_pengerjaan_lembar_2`, `keterangan_lembar_2`, `lipat_lembar_3`, `hasil_lipatan_lembar_3`, `operator_lembar_3`, `tanggal_pengerjaan_lembar_3`, `keterangan_lembar_3`, `lipat_lembar_4`, `hasil_lipatan_lembar_4`, `operator_lembar_4`, `tanggal_pengerjaan_lembar_4`, `keterangan_lembar_4`, `lipat_lembar_5`, `hasil_lipatan_lembar_5`, `operator_lembar_5`, `tanggal_pengerjaan_lembar_5`, `keterangan_lembar_5`, `lipat_lembar_6`, `hasil_lipatan_lembar_6`, `operator_lembar_6`, `tanggal_pengerjaan_lembar_6`, `keterangan_lembar_6`, `lipat_lembar_7`, `hasil_lipatan_lembar_7`, `operator_lembar_7`, `tanggal_pengerjaan_lembar_7`, `keterangan_lembar_7`, `lipat_lembar_8`, `hasil_lipatan_lembar_8`, `operator_lembar_8`, `tanggal_pengerjaan_lembar_8`, `keterangan_lembar_8`, `lipat_lembar_9`, `hasil_lipatan_lembar_9`, `operator_lembar_9`, `tanggal_pengerjaan_lembar_9`, `keterangan_lembar_9`, `lipat_lembar_10`, `hasil_lipatan_lembar_10`, `operator_lembar_10`, `tanggal_pengerjaan_lembar_10`, `keterangan_lembar_10`, `lipat_lembar_11`, `hasil_lipatan_lembar_11`, `operator_lembar_11`, `tanggal_pengerjaan_lembar_11`, `keterangan_lembar_11`, `lipat_lembar_12`, `hasil_lipatan_lembar_12`, `operator_lembar_12`, `tanggal_pengerjaan_lembar_12`, `keterangan_lembar_12`, `lipat_lembar_13`, `hasil_lipatan_lembar_13`, `operator_lembar_13`, `tanggal_pengerjaan_lembar_13`, `keterangan_lembar_13`, `lipat_lembar_14`, `hasil_lipatan_lembar_14`, `operator_lembar_14`, `tanggal_pengerjaan_lembar_14`, `keterangan_lembar_14`, `lipat_lembar_15`, `hasil_lipatan_lembar_15`, `operator_lembar_15`, `tanggal_pengerjaan_lembar_15`, `keterangan_lembar_15`, `lipat_lembar_16`, `hasil_lipatan_lembar_16`, `operator_lembar_16`, `tanggal_pengerjaan_lembar_16`, `keterangan_lembar_16`, `lipat_lembar_17`, `hasil_lipatan_lembar_17`, `operator_lembar_17`, `tanggal_pengerjaan_lembar_17`, `keterangan_lembar_17`, `lipat_lembar_18`, `hasil_lipatan_lembar_18`, `operator_lembar_18`, `tanggal_pengerjaan_lembar_18`, `keterangan_lembar_18`, `lipat_lembar_19`, `hasil_lipatan_lembar_19`, `operator_lembar_19`, `tanggal_pengerjaan_lembar_19`, `keterangan_lembar_19`, `lipat_lembar_20`, `hasil_lipatan_lembar_20`, `operator_lembar_20`, `tanggal_pengerjaan_lembar_20`, `keterangan_lembar_20`) VALUES
(12, 11, 0, '', '2021-06-28', 'shoe', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', ''),
(14, 10, 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', ''),
(15, 9, 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', '', '', 0, '', '0000-00-00', ''),
(16, 12, 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', ''),
(17, 15, 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '', '-', 0, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `spiral`
--

CREATE TABLE `spiral` (
  `id_spiral` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_spiral` int(100) NOT NULL,
  `status_spiral` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_spiral` date NOT NULL,
  `keterangan_jadwal_spiral` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `kru_1` varchar(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `kru_2` varchar(100) NOT NULL,
  `keterangan_2` text NOT NULL,
  `tanggal_pengerjaan_3` date NOT NULL,
  `hasil_3` int(100) NOT NULL,
  `rejek_3` int(100) NOT NULL,
  `operator_3` varchar(100) NOT NULL,
  `kru_3` varchar(100) NOT NULL,
  `keterangan_3` text NOT NULL,
  `tanggal_pengerjaan_4` date NOT NULL,
  `hasil_4` int(100) NOT NULL,
  `rejek_4` int(100) NOT NULL,
  `operator_4` varchar(100) NOT NULL,
  `kru_4` varchar(100) NOT NULL,
  `keterangan_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spiral`
--

INSERT INTO `spiral` (`id_spiral`, `id_order`, `id_jadwal_spiral`, `status_spiral`, `tanggal_pelaksanaan_spiral`, `keterangan_jadwal_spiral`, `tanggal_pengerjaan_1`, `hasil_1`, `rejek_1`, `operator_1`, `kru_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `rejek_2`, `operator_2`, `kru_2`, `keterangan_2`, `tanggal_pengerjaan_3`, `hasil_3`, `rejek_3`, `operator_3`, `kru_3`, `keterangan_3`, `tanggal_pengerjaan_4`, `hasil_4`, `rejek_4`, `operator_4`, `kru_4`, `keterangan_4`) VALUES
(11, 9, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, '', '0000-00-00', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `id_spk` int(100) NOT NULL,
  `tanggal_buat_spk` date NOT NULL,
  `ukuran_potong` varchar(100) NOT NULL,
  `jumlah_cetak` varchar(100) NOT NULL,
  `muka1_fc_bw_warna` varchar(100) NOT NULL,
  `muka2_fc_fc` varchar(100) NOT NULL,
  `muka2_blk` varchar(100) NOT NULL,
  `muka2_blg` varchar(100) NOT NULL,
  `keterangan_spk` varchar(100) NOT NULL,
  `id_mesin_72` int(100) DEFAULT NULL,
  `id_mesin_74a` int(100) DEFAULT NULL,
  `id_mesin_74b` int(100) DEFAULT NULL,
  `id_mesin_102a` int(100) DEFAULT NULL,
  `id_mesin_102b` int(100) DEFAULT NULL,
  `id_mesin_tokko` int(100) DEFAULT NULL,
  `id_order` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`id_spk`, `tanggal_buat_spk`, `ukuran_potong`, `jumlah_cetak`, `muka1_fc_bw_warna`, `muka2_fc_fc`, `muka2_blk`, `muka2_blg`, `keterangan_spk`, `id_mesin_72`, `id_mesin_74a`, `id_mesin_74b`, `id_mesin_102a`, `id_mesin_102b`, `id_mesin_tokko`, `id_order`) VALUES
(23, '2021-06-08', '22', '33', '', '', '', '', 'asdasd', NULL, 13, NULL, NULL, NULL, NULL, 11),
(26, '2021-07-15', '1212', '2', '1 Muka : FC / BW / WARNA', '2 Muka : FC / FC-BW / BW-BW', '2 Muka BLK (Balik Kertas)', '2 Muka BLG (Balik Graper)', 'asd22333123', 34, NULL, NULL, NULL, NULL, NULL, 17),
(27, '2021-07-15', '1212', '2', '1 Muka : FC / BW / WARNA', '2 Muka : FC / FC-BW / BW-BW', '2 Muka BLK (Balik Kertas)', '2 Muka BLG (Balik Graper)', 'asd22333123', NULL, NULL, 24, NULL, NULL, NULL, 17);

-- --------------------------------------------------------

--
-- Table structure for table `sub_finishing`
--

CREATE TABLE `sub_finishing` (
  `id_sub` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_sub` int(11) NOT NULL,
  `status_sub` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_sub` date NOT NULL,
  `keterangan_jadwal_sub` text NOT NULL,
  `jenis_sub_binding` varchar(100) NOT NULL,
  `jenis_sub_hardcover` varchar(100) NOT NULL,
  `jenis_sub_fa_potong` varchar(100) NOT NULL,
  `jenis_sub_spiral` varchar(100) NOT NULL,
  `jenis_sub_klemseng` varchar(100) NOT NULL,
  `jenis_sub_jahit` varchar(100) NOT NULL,
  `tanggal_kembali_sub` date NOT NULL,
  `hasil` int(100) NOT NULL,
  `rejek` int(100) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `kru` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_finishing`
--

INSERT INTO `sub_finishing` (`id_sub`, `id_order`, `id_jadwal_sub`, `status_sub`, `tanggal_pelaksanaan_sub`, `keterangan_jadwal_sub`, `jenis_sub_binding`, `jenis_sub_hardcover`, `jenis_sub_fa_potong`, `jenis_sub_spiral`, `jenis_sub_klemseng`, `jenis_sub_jahit`, `tanggal_kembali_sub`, `hasil`, `rejek`, `operator`, `kru`, `keterangan`) VALUES
(9, 13, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', ''),
(10, 12, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', ''),
(11, 9, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', ''),
(12, 6, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', ''),
(13, 10, 0, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_proses`
--

CREATE TABLE `sub_proses` (
  `id_sub` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_sub` int(100) NOT NULL,
  `status_sub` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_sub_proses` date NOT NULL,
  `keterangan_jadwal_sub_proses` text NOT NULL,
  `jenis_sub_lipat` varchar(100) NOT NULL,
  `jenis_sub_susun_gabung` varchar(100) NOT NULL,
  `jenis_sub_laminasi` varchar(100) NOT NULL,
  `tanggal_kembali_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `rejek_1` int(100) NOT NULL,
  `keterangan_1` text NOT NULL,
  `tanggal_kembali_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `rejek_2` int(100) NOT NULL,
  `keterangan_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_proses`
--

INSERT INTO `sub_proses` (`id_sub`, `id_order`, `id_jadwal_sub`, `status_sub`, `tanggal_pelaksanaan_sub_proses`, `keterangan_jadwal_sub_proses`, `jenis_sub_lipat`, `jenis_sub_susun_gabung`, `jenis_sub_laminasi`, `tanggal_kembali_1`, `hasil_1`, `rejek_1`, `keterangan_1`, `tanggal_kembali_2`, `hasil_2`, `rejek_2`, `keterangan_2`) VALUES
(11, 11, 0, 'sub', '2021-06-24', '', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, ''),
(13, 10, 0, '', '0000-00-00', '', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, ''),
(14, 9, 0, '', '0000-00-00', '', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, ''),
(15, 12, 0, '', '0000-00-00', '', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, ''),
(16, 15, 0, '', '0000-00-00', '', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `susun`
--

CREATE TABLE `susun` (
  `id_susun` int(100) NOT NULL,
  `id_order` int(100) DEFAULT NULL,
  `id_jadwal_susun` int(100) NOT NULL,
  `status_susun` varchar(100) NOT NULL,
  `tanggal_pelaksanaan_mesin_susun` date NOT NULL,
  `keterangan_jadwal_fp_susun` text NOT NULL,
  `tanggal_pengerjaan_1` date NOT NULL,
  `hasil_1` int(100) NOT NULL,
  `operator_1` varchar(100) NOT NULL,
  `keterangan_1` varchar(100) NOT NULL,
  `tanggal_pengerjaan_2` date NOT NULL,
  `hasil_2` int(100) NOT NULL,
  `operator_2` varchar(100) NOT NULL,
  `keterangan_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `susun`
--

INSERT INTO `susun` (`id_susun`, `id_order`, `id_jadwal_susun`, `status_susun`, `tanggal_pelaksanaan_mesin_susun`, `keterangan_jadwal_fp_susun`, `tanggal_pengerjaan_1`, `hasil_1`, `operator_1`, `keterangan_1`, `tanggal_pengerjaan_2`, `hasil_2`, `operator_2`, `keterangan_2`) VALUES
(12, 11, 0, '', '2021-06-15', '', '0000-00-00', 7, '', '', '0000-00-00', 8, '', ''),
(14, 10, 0, '', '0000-00-00', '', '0000-00-00', 0, '', '', '0000-00-00', 0, '', ''),
(15, 9, 0, '', '0000-00-00', '', '0000-00-00', 0, '', '', '0000-00-00', 0, '', ''),
(16, 12, 0, '', '0000-00-00', '', '0000-00-00', 0, '', '', '0000-00-00', 0, '', ''),
(17, 15, 0, '', '0000-00-00', '', '0000-00-00', 0, '', '', '0000-00-00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `level`) VALUES
(1, 'iwan', 'pracetak', '5b05024bdcda59202c37b697c68a85ce7e0545e7', 'iwan', '1'),
(14, 'udin', 'cetak', '5b05024bdcda59202c37b697c68a85ce7e0545e7', 'udin@gmail.com', '2'),
(15, 'iwan', 'finishing', '5b05024bdcda59202c37b697c68a85ce7e0545e7', 'iwan@gmail.com', '3'),
(16, 'Admin Imposisi', 'imposisi', '5b05024bdcda59202c37b697c68a85ce7e0545e7', 'imposisi@gmail.com', '4'),
(17, 'Admin CTCP', 'ctcp', '5b05024bdcda59202c37b697c68a85ce7e0545e7', 'adminctcp@gmail.com', '5'),
(18, 'Andrean', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'andrean64@gmail.com', '6'),
(19, 'Latief', 'direksi', '5b05024bdcda59202c37b697c68a85ce7e0545e7', 'latief@gmail.com', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binding`
--
ALTER TABLE `binding`
  ADD PRIMARY KEY (`id_binding`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `cetak`
--
ALTER TABLE `cetak`
  ADD PRIMARY KEY (`id_cetak`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `ctcp`
--
ALTER TABLE `ctcp`
  ADD PRIMARY KEY (`id_ctcp`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `data_ctcp`
--
ALTER TABLE `data_ctcp`
  ADD PRIMARY KEY (`id_data_ctcp`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_imposisi` (`id_imposisi`);

--
-- Indexes for table `display_cetak`
--
ALTER TABLE `display_cetak`
  ADD PRIMARY KEY (`id_display_cetak`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `fa_potong`
--
ALTER TABLE `fa_potong`
  ADD PRIMARY KEY (`id_fa_potong`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `finishing`
--
ALTER TABLE `finishing`
  ADD PRIMARY KEY (`id_finishing`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `hardcover`
--
ALTER TABLE `hardcover`
  ADD PRIMARY KEY (`id_hardcover`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `imposisi`
--
ALTER TABLE `imposisi`
  ADD PRIMARY KEY (`id_imposisi`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `jadwal_finishing`
--
ALTER TABLE `jadwal_finishing`
  ADD PRIMARY KEY (`id_jadwal_finishing`);

--
-- Indexes for table `jahit`
--
ALTER TABLE `jahit`
  ADD PRIMARY KEY (`id_jahit`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `kertas`
--
ALTER TABLE `kertas`
  ADD PRIMARY KEY (`id_kertas`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `klemseng`
--
ALTER TABLE `klemseng`
  ADD PRIMARY KEY (`id_klemseng`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `laminasi`
--
ALTER TABLE `laminasi`
  ADD PRIMARY KEY (`id_laminasi`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `laporan_pracetak`
--
ALTER TABLE `laporan_pracetak`
  ADD PRIMARY KEY (`id_laporan_pracetak`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `mbo`
--
ALTER TABLE `mbo`
  ADD PRIMARY KEY (`id_mbo`),
  ADD KEY `id_order` (`id_order`) USING BTREE;

--
-- Indexes for table `mesin_72`
--
ALTER TABLE `mesin_72`
  ADD PRIMARY KEY (`id_mesin_72`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `mesin_74_a`
--
ALTER TABLE `mesin_74_a`
  ADD PRIMARY KEY (`id_mesin_74a`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `mesin_74_b`
--
ALTER TABLE `mesin_74_b`
  ADD PRIMARY KEY (`id_mesin_74b`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `mesin_102_a`
--
ALTER TABLE `mesin_102_a`
  ADD PRIMARY KEY (`id_mesin_102a`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `mesin_102_b`
--
ALTER TABLE `mesin_102_b`
  ADD PRIMARY KEY (`id_mesin_102b`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `mesin_tokko`
--
ALTER TABLE `mesin_tokko`
  ADD PRIMARY KEY (`id_mesin_tokko`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `potong`
--
ALTER TABLE `potong`
  ADD PRIMARY KEY (`id_potong`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `qc`
--
ALTER TABLE `qc`
  ADD PRIMARY KEY (`id_qc`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `rincian_jadwal_finishing`
--
ALTER TABLE `rincian_jadwal_finishing`
  ADD PRIMARY KEY (`id_rincian_jadwal_finishing`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id_shoe`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `spiral`
--
ALTER TABLE `spiral`
  ADD PRIMARY KEY (`id_spiral`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`id_spk`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_mesin_72` (`id_mesin_72`),
  ADD KEY `id_mesin_74a` (`id_mesin_74a`,`id_mesin_74b`,`id_mesin_102a`,`id_mesin_102b`,`id_mesin_tokko`),
  ADD KEY `spk_ibfk_3` (`id_mesin_74b`),
  ADD KEY `spk_ibfk_4` (`id_mesin_102a`),
  ADD KEY `spk_ibfk_5` (`id_mesin_102b`);

--
-- Indexes for table `sub_finishing`
--
ALTER TABLE `sub_finishing`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `sub_proses`
--
ALTER TABLE `sub_proses`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `susun`
--
ALTER TABLE `susun`
  ADD PRIMARY KEY (`id_susun`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binding`
--
ALTER TABLE `binding`
  MODIFY `id_binding` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cetak`
--
ALTER TABLE `cetak`
  MODIFY `id_cetak` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `ctcp`
--
ALTER TABLE `ctcp`
  MODIFY `id_ctcp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `data_ctcp`
--
ALTER TABLE `data_ctcp`
  MODIFY `id_data_ctcp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `display_cetak`
--
ALTER TABLE `display_cetak`
  MODIFY `id_display_cetak` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fa_potong`
--
ALTER TABLE `fa_potong`
  MODIFY `id_fa_potong` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `finishing`
--
ALTER TABLE `finishing`
  MODIFY `id_finishing` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `hardcover`
--
ALTER TABLE `hardcover`
  MODIFY `id_hardcover` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `imposisi`
--
ALTER TABLE `imposisi`
  MODIFY `id_imposisi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `jadwal_finishing`
--
ALTER TABLE `jadwal_finishing`
  MODIFY `id_jadwal_finishing` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jahit`
--
ALTER TABLE `jahit`
  MODIFY `id_jahit` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kertas`
--
ALTER TABLE `kertas`
  MODIFY `id_kertas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `klemseng`
--
ALTER TABLE `klemseng`
  MODIFY `id_klemseng` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laminasi`
--
ALTER TABLE `laminasi`
  MODIFY `id_laminasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `laporan_pracetak`
--
ALTER TABLE `laporan_pracetak`
  MODIFY `id_laporan_pracetak` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbo`
--
ALTER TABLE `mbo`
  MODIFY `id_mbo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mesin_72`
--
ALTER TABLE `mesin_72`
  MODIFY `id_mesin_72` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mesin_74_a`
--
ALTER TABLE `mesin_74_a`
  MODIFY `id_mesin_74a` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mesin_74_b`
--
ALTER TABLE `mesin_74_b`
  MODIFY `id_mesin_74b` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mesin_102_a`
--
ALTER TABLE `mesin_102_a`
  MODIFY `id_mesin_102a` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mesin_102_b`
--
ALTER TABLE `mesin_102_b`
  MODIFY `id_mesin_102b` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mesin_tokko`
--
ALTER TABLE `mesin_tokko`
  MODIFY `id_mesin_tokko` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `potong`
--
ALTER TABLE `potong`
  MODIFY `id_potong` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `qc`
--
ALTER TABLE `qc`
  MODIFY `id_qc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id_shoe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spiral`
--
ALTER TABLE `spiral`
  MODIFY `id_spiral` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `id_spk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_finishing`
--
ALTER TABLE `sub_finishing`
  MODIFY `id_sub` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_proses`
--
ALTER TABLE `sub_proses`
  MODIFY `id_sub` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `susun`
--
ALTER TABLE `susun`
  MODIFY `id_susun` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binding`
--
ALTER TABLE `binding`
  ADD CONSTRAINT `binding_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;

--
-- Constraints for table `cetak`
--
ALTER TABLE `cetak`
  ADD CONSTRAINT `cetak_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctcp`
--
ALTER TABLE `ctcp`
  ADD CONSTRAINT `ctcp_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_ctcp`
--
ALTER TABLE `data_ctcp`
  ADD CONSTRAINT `data_ctcp_ibfk_2` FOREIGN KEY (`id_imposisi`) REFERENCES `imposisi` (`id_imposisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ctcp_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fa_potong`
--
ALTER TABLE `fa_potong`
  ADD CONSTRAINT `fa_potong_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;

--
-- Constraints for table `finishing`
--
ALTER TABLE `finishing`
  ADD CONSTRAINT `finishing_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hardcover`
--
ALTER TABLE `hardcover`
  ADD CONSTRAINT `hardcover_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;

--
-- Constraints for table `imposisi`
--
ALTER TABLE `imposisi`
  ADD CONSTRAINT `imposisi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jahit`
--
ALTER TABLE `jahit`
  ADD CONSTRAINT `jahit_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;

--
-- Constraints for table `kertas`
--
ALTER TABLE `kertas`
  ADD CONSTRAINT `kertas_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `klemseng`
--
ALTER TABLE `klemseng`
  ADD CONSTRAINT `klemseng_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;

--
-- Constraints for table `laminasi`
--
ALTER TABLE `laminasi`
  ADD CONSTRAINT `laminasi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan_pracetak`
--
ALTER TABLE `laporan_pracetak`
  ADD CONSTRAINT `laporan_pracetak_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mbo`
--
ALTER TABLE `mbo`
  ADD CONSTRAINT `mbo_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mesin_72`
--
ALTER TABLE `mesin_72`
  ADD CONSTRAINT `mesin_72_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `mesin_74_a`
--
ALTER TABLE `mesin_74_a`
  ADD CONSTRAINT `mesin_74_a_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `mesin_74_b`
--
ALTER TABLE `mesin_74_b`
  ADD CONSTRAINT `mesin_74_b_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `mesin_102_a`
--
ALTER TABLE `mesin_102_a`
  ADD CONSTRAINT `mesin_102_a_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `mesin_102_b`
--
ALTER TABLE `mesin_102_b`
  ADD CONSTRAINT `mesin_102_b_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `mesin_tokko`
--
ALTER TABLE `mesin_tokko`
  ADD CONSTRAINT `mesin_tokko_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `potong`
--
ALTER TABLE `potong`
  ADD CONSTRAINT `potong_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qc`
--
ALTER TABLE `qc`
  ADD CONSTRAINT `qc_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `shoe`
--
ALTER TABLE `shoe`
  ADD CONSTRAINT `shoe_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spiral`
--
ALTER TABLE `spiral`
  ADD CONSTRAINT `spiral_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;

--
-- Constraints for table `spk`
--
ALTER TABLE `spk`
  ADD CONSTRAINT `spk_ibfk_1` FOREIGN KEY (`id_mesin_72`) REFERENCES `mesin_72` (`id_mesin_72`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spk_ibfk_2` FOREIGN KEY (`id_mesin_74a`) REFERENCES `mesin_74_a` (`id_mesin_74a`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spk_ibfk_3` FOREIGN KEY (`id_mesin_74b`) REFERENCES `mesin_74_b` (`id_mesin_74b`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spk_ibfk_4` FOREIGN KEY (`id_mesin_102a`) REFERENCES `mesin_102_a` (`id_mesin_102a`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spk_ibfk_5` FOREIGN KEY (`id_mesin_102b`) REFERENCES `mesin_102_b` (`id_mesin_102b`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spk_ibfk_6` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_proses`
--
ALTER TABLE `sub_proses`
  ADD CONSTRAINT `sub_proses_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `susun`
--
ALTER TABLE `susun`
  ADD CONSTRAINT `susun_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
