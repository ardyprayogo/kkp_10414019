-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 05:15 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkp_10414019`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ulang`
--

CREATE TABLE IF NOT EXISTS `daftar_ulang` (
  `kd_dftrulg` int(5) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `id_opt` varchar(30) NOT NULL,
  `akte` varchar(100) NOT NULL,
  `ktp_ayah` varchar(100) NOT NULL,
  `ktp_ibu` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL,
  `bkt_pemb` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ulang`
--

INSERT INTO `daftar_ulang` (`kd_dftrulg`, `nisn`, `id_opt`, `akte`, `ktp_ayah`, `ktp_ibu`, `ijazah`, `skhun`, `bkt_pemb`, `status`) VALUES
(19, 9934567890, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses'),
(20, 1122334455, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses'),
(23, 1013131215, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses'),
(25, 1234567880, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/bukti-pembayaran.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses'),
(26, 1234567881, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses'),
(27, 1234567882, 'operator', '../upload/akte/07.jpg', '../upload/ktp-ayah/07.jpg', '../upload/ktp-ibu/07.jpg', '../upload/ijazah/07.jpg', '../upload/skhun/07.jpg', '../upload/bukti-pembayaran/07.jpg', 'gagal'),
(29, 1041401900, 'operator', '../upload/akte/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', '../upload/ktp-ayah/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', '../upload/ktp-ibu/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', '../upload/ijazah/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', '../upload/skhun/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', '../upload/bukti-pembayaran/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', 'gagal'),
(30, 1231234561, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses'),
(31, 1013131214, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'kosong'),
(32, 1234567896, 'operator', '../upload/akte/akte.jpg', '../upload/ktp-ayah/ktp-ayah.jpg', '../upload/ktp-ibu/ktp-ibu.jpg', '../upload/ijazah/ijazah.jpg', '../upload/skhun/skhun.jpg', '../upload/bukti-pembayaran/bukti-pembayaran.jpg', 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kd_jur` varchar(5) NOT NULL,
  `nama_jur` varchar(30) NOT NULL,
  `kapasitas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kd_jur`, `nama_jur`, `kapasitas`) VALUES
('ak', 'Akuntansi', 40),
('ap', 'Administrasi Perkantoran', 40),
('pm', 'Pemasaran', 40);

-- --------------------------------------------------------

--
-- Table structure for table `kelola`
--

CREATE TABLE IF NOT EXISTS `kelola` (
  `kd_kel` int(5) NOT NULL,
  `id_opt` varchar(30) NOT NULL,
  `kd_peng` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelola`
--

INSERT INTO `kelola` (`kd_kel`, `id_opt`, `kd_peng`) VALUES
(1, 'operator', 31110),
(2, 'operator', 12189),
(4, 'operator', 24463),
(7, 'operator', 52572);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `kd_nilai` int(5) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `id_opt` varchar(30) NOT NULL,
  `n_bind` int(3) NOT NULL,
  `n_bing` int(3) NOT NULL,
  `n_mat` int(3) NOT NULL,
  `n_ipa` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kd_nilai`, `nisn`, `id_opt`, `n_bind`, `n_bing`, `n_mat`, `n_ipa`) VALUES
(32, 9934567890, 'operator', 78, 77, 90, 88),
(33, 1122334455, 'operator', 85, 75, 65, 70),
(35, 1013131215, 'operator', 91, 92, 77, 87),
(37, 1041401900, 'operator', 88, 88, 88, 77),
(38, 1234567880, 'operator', 78, 89, 77, 76),
(39, 1234567881, 'operator', 77, 89, 98, 78),
(40, 1234567882, 'operator', 88, 89, 78, 77),
(41, 1234567891, 'operator', 77, 88, 66, 89),
(42, 1234567784, 'operator', 78, 70, 70, 85),
(43, 1231321458, 'operator', 86, 75, 74, 90),
(44, 1013131214, 'operator', 77, 76, 88, 76),
(45, 1231234561, 'operator', 78, 88, 77, 75),
(46, 1234567896, 'operator', 75, 89, 70, 70);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_opt` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_opt` varchar(50) NOT NULL,
  `almt_opt` varchar(100) NOT NULL,
  `telp_opt` varchar(15) NOT NULL,
  `foto_opt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_opt`, `password`, `nama_opt`, `almt_opt`, `telp_opt`, `foto_opt`) VALUES
('operator', 'operator', 'operator satu', 'jl. operator, kel. operator, kec. operator, kota operator', '7777777', ''),
('opt', 'opt', 'opt', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `kd_peng` int(5) NOT NULL,
  `tgl_peng` date NOT NULL,
  `isi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`kd_peng`, `tgl_peng`, `isi`) VALUES
(12189, '2017-11-02', 'Pendaftaran dibuka, secara online dan offline.'),
(24463, '2017-11-04', 'Kegiatan ujian masuk diselenggarakan di sekolah.'),
(31110, '2017-11-15', 'Seleksi masuk dimulai.'),
(52572, '2017-11-19', 'Proses daftar ulang dibuka.');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `nisn` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `sklh_asal` varchar(30) NOT NULL,
  `nama_orgtua` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `telp_ot` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nisn`, `password`, `nama`, `tmpt_lhr`, `tgl_lhr`, `alamat`, `jk`, `foto`, `telp`, `agama`, `sklh_asal`, `nama_orgtua`, `pekerjaan`, `telp_ot`) VALUES
(1013131214, 'asdasd', 'Boy', 'jakarta', '2017-11-01', 'jakarta', 'l', '../upload/foto-siswa/print.PNG', '123', 'islam', 'SMPN 12', '1', '2', '3'),
(1013131215, '123123', 'Anto Gunawan', 'jakarta', '2017-12-28', 'jakarta', 'p', '../upload/foto-siswa/12313.PNG', '123', 'islam', 'smp 11', 's', 'a', 'c'),
(1041401900, '123456', 'Ardy Prayogo', 'Jakarta', '1995-08-09', 'Kebayoran Lama, Jakarta Selatan', 'l', '../upload/foto-peserta/09.JPG', '123456', 'islam', 'SMPN 29 Jakarta', 'P', 'Karyawan Swasta', '123'),
(1041401901, '123456', 'Somat', 'asdas', '2018-01-20', 'asdad', 'l', '../upload/foto-siswa/01.jpg', '123', 'islam', 'asd', 'asd', 'asd', '123'),
(1041401910, '123123', 'ardy Prayogo1', 'jakarta', '2017-11-09', 'jakarta selatan', 'l', 'print.PNG', '123123', 'islam', 'SMPN 29 Jakarta', 'ard', 'v', '123'),
(1041401911, '123123', 'ardy Prayogo', 'jakarta', '2017-11-09', 'jawkarta', 'l', '../upload/foto-siswa/print.PNG', '123123', 'islam', 'SMPN 29 Jakarta', 'ard', 'v', '123'),
(1122334455, '123456', 'Kemal', 'Jakarta', '2002-12-31', 'Jl. Palang Merah Indonesia, No. 39, RT 001/009, Kemanggisan', 'l', '../upload/foto-peserta/07.jpg', '123', 'islam', 'SMPN 13 Jakarta', 'Somat', 'Guru Honorer', '112'),
(1231234561, '1234', 'Agus', 'jakarta', '2018-01-10', 'Jakarta', 'l', '../upload/foto-siswa/39976071_96690826-b022-481b-b873-52e20d2ea03d_1500_1500.jpg', '123', 'islam', 'smp 29 jakarta', 'asd', 'asd', '123'),
(1231321457, '123123', 'Yono', 'jakarta', '2017-11-01', 'tangerang', 'p', 'print.PNG', '123', 'islam', 'smp 29', 'a', 'b', 'c'),
(1231321458, '123123123', 'Reza Maolana', 'jakarta', '2017-12-06', 'jkt', 'l', '../upload/foto-siswa/12313.PNG', '123123', 'budha', 'SMPN 12', 'asd', 'das', '123'),
(1231321459, '123123', 'Suparno', 'jakarta', '2017-12-06', 'jkt', 'l', '../upload/foto-siswa/12313.PNG', '123123', 'budha', 'SMPN 12', 'asd', 'das', '123'),
(1234567784, '123', 'Muhamad Nur', 'jakarta', '2017-11-03', 'jhkaarta', 'l', '../upload/foto-siswa/print.PNG', '123', 'islam', '123', 'as', 'as', '123'),
(1234567880, '123456', 'Ery Irawan', 'Jakarta', '2002-06-04', 'Jl. Kebagusan', 'l', '../upload/foto-peserta/07.jpg', '111', 'islam', 'SMPN 23 Jakarta', 'Sri', 'PNS', '123'),
(1234567881, '123', 'Indra Gunawan', 'Jakarta', '2018-01-02', 'Jl. Seskoal, Kebayoran Lama', 'l', '../upload/foto-peserta/07.jpg', '111', 'islam', 'MTsN 99 Jakarta', 'Budi', 'Polisi', '1234'),
(1234567882, '123', 'Faisal Akbar', 'Jakarta', '2018-01-03', 'Jl. Kebon Jeruk', 'l', '../upload/foto-peserta/08.jpg', '112', 'islam', 'SMP Al Azhar 01 Jakarta', 'Anto', 'Karyawan Swasta', '123'),
(1234567891, '123456', 'Nazwa', 'jakarta', '2002-06-04', 'Jl. Pasar Baru', 'p', '../upload/foto-peserta/03.jpg', '123', 'islam', 'SMPN 12 Jakarta', 'Budi', 'PNS', '123'),
(1234567896, '123456', 'Wati', 'jkt', '2018-02-15', 'abcd', 'l', '../upload/foto-siswa/07.jpg', '123', 'islam', 'smp abc', 'a', 'b', '123'),
(2147483647, '123123', 'Inem', 'Jakarta', '2017-12-12', 'Jakarta', 'p', '../upload/foto-peserta/02.jpg', '123', 'islam', 'SMPN 46 Jakarta', 'Budi', 'PNS', '111'),
(9934567890, '123456', 'Ahmad', 'Jakarta', '2002-08-09', 'Jl. Jatayu No. 9 RT 005/003, Kebayoran Lama Selatan, Jakarta Selatan', 'l', '../upload/foto-siswa/akte.jpg', '089625566281', 'islam', 'SMPN 29 Jakarta', 'Testerer', 'Testering', '123'),
(9992363434, '123123', 'Ardy Prayogo1', 'jakarta', '1995-08-09', 'Jakarta', 'l', '../upload/foto-peserta/03.jpg', '1112', 'islam', 'SMPN 32 Jakarta', 's', '123', '112');

-- --------------------------------------------------------

--
-- Table structure for table `pilih`
--

CREATE TABLE IF NOT EXISTS `pilih` (
  `kd_pil` int(5) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `kd_jur` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilih`
--

INSERT INTO `pilih` (`kd_pil`, `nisn`, `kd_jur`) VALUES
(12, 1013131214, 'ap'),
(25, 1234567784, 'pm'),
(30, 1231321457, 'ak'),
(31, 1041401910, 'pm'),
(32, 1041401911, 'pm'),
(33, 1231321459, 'pm'),
(34, 1231321458, 'pm'),
(35, 1013131215, 'pm'),
(37, 1234567891, 'ak'),
(38, 9934567890, 'pm'),
(39, 1122334455, 'pm'),
(40, 2147483647, 'pm'),
(41, 9992363434, 'pm'),
(42, 1041401900, 'ak'),
(43, 1234567880, 'ak'),
(44, 1234567881, 'ak'),
(45, 1234567882, 'ak'),
(46, 1041401901, 'ak'),
(47, 1231234561, 'ap'),
(48, 1234567896, 'ap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_ulang`
--
ALTER TABLE `daftar_ulang`
  ADD PRIMARY KEY (`kd_dftrulg`),
  ADD KEY `id_daftar` (`nisn`),
  ADD KEY `id_opt` (`id_opt`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jur`);

--
-- Indexes for table `kelola`
--
ALTER TABLE `kelola`
  ADD PRIMARY KEY (`kd_kel`),
  ADD KEY `id_opt` (`id_opt`),
  ADD KEY `kd_peng` (`kd_peng`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD KEY `id_peserta` (`nisn`),
  ADD KEY `id_opt` (`id_opt`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_opt`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`kd_peng`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `pilih`
--
ALTER TABLE `pilih`
  ADD PRIMARY KEY (`kd_pil`),
  ADD KEY `id_daftar` (`nisn`),
  ADD KEY `kd_jur` (`kd_jur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_ulang`
--
ALTER TABLE `daftar_ulang`
  MODIFY `kd_dftrulg` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kelola`
--
ALTER TABLE `kelola`
  MODIFY `kd_kel` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `kd_nilai` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `pilih`
--
ALTER TABLE `pilih`
  MODIFY `kd_pil` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_ulang`
--
ALTER TABLE `daftar_ulang`
  ADD CONSTRAINT `daftar_ulang_ibfk_2` FOREIGN KEY (`id_opt`) REFERENCES `operator` (`id_opt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_ulang_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `peserta` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelola`
--
ALTER TABLE `kelola`
  ADD CONSTRAINT `kelola_ibfk_1` FOREIGN KEY (`id_opt`) REFERENCES `operator` (`id_opt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelola_ibfk_2` FOREIGN KEY (`kd_peng`) REFERENCES `pengumuman` (`kd_peng`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_opt`) REFERENCES `operator` (`id_opt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `peserta` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pilih`
--
ALTER TABLE `pilih`
  ADD CONSTRAINT `pilih_ibfk_2` FOREIGN KEY (`kd_jur`) REFERENCES `jurusan` (`kd_jur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pilih_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `peserta` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
