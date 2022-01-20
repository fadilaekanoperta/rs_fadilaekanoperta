-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2022 pada 02.56
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
-- Database: `rs_fadilaekanoperta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `no_rm` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`no_rm`, `nama`, `alamat`, `ttl`, `jenis_kelamin`, `pekerjaan`) VALUES
(41, 'Budi', 'Lampung', 'Lampung, 12-09-2009', 'Laki-Laki', 'Pelajar'),
(42, 'Dian', 'Lampung', 'Lampung, 04-12-1998', 'Perempuan', 'Mahasiswa'),
(44, 'Ciandra', 'Wonodadi, Gadingrejo', 'Lampung, 23-02-2002', 'Laki-Laki', 'Pelajar'),
(45, 'Dona', 'Pagelaran, Lampung', 'Pagelaran, 20-07-1977', 'Perempuan', 'IRT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_perawat`
--

CREATE TABLE `tabel_perawat` (
  `id_perawat` int(11) NOT NULL,
  `id_poliklinik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_perawat`
--

INSERT INTO `tabel_perawat` (`id_perawat`, `id_poliklinik`, `nama`, `alamat`, `tgl_lahir`) VALUES
(11, 21, 'Fadila', 'Pringsewu Barat', '11-11-1997'),
(12, 22, 'Eka', 'Lampung', '12-03-1999'),
(13, 23, 'Noperta', 'Pringsewu, Lampung', '11-11-1999'),
(16, 0, 'Fadila Eka', 'Gadingrejo, Lampung', '23-12-1989');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tindakan`
--

CREATE TABLE `tabel_tindakan` (
  `no_registrasi` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `nama_pasien` int(11) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `tindakan_keperawatan` varchar(100) NOT NULL,
  `no_ruang` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_tindakan`
--

INSERT INTO `tabel_tindakan` (`no_registrasi`, `id_perawat`, `nama_pasien`, `jam`, `diagnosa`, `tindakan_keperawatan`, `no_ruang`, `keterangan`) VALUES
(31, 11, 41, '12:00', 'Mag', 'Memberikan obat pereda mual', 9, 'Tidak ada keterangan'),
(32, 13, 42, '10:30', 'Demam', 'Pemeriksaan tekanan darah', 110, 'Tidak ada keterangan'),
(33, 12, 44, '00:45', 'Kurang Asupan Vitamin', 'Tidak ada penangan khusus', 20, 'Tidak ada'),
(34, 16, 45, '20:07', 'Batuk Berdahak', 'Tidak ada penangan khusus', 8, 'Tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `tabel_perawat`
--
ALTER TABLE `tabel_perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `tabel_tindakan`
--
ALTER TABLE `tabel_tindakan`
  ADD PRIMARY KEY (`no_registrasi`),
  ADD UNIQUE KEY `id_perawat` (`id_perawat`),
  ADD UNIQUE KEY `nama_pasien` (`nama_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `no_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tabel_perawat`
--
ALTER TABLE `tabel_perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tabel_tindakan`
--
ALTER TABLE `tabel_tindakan`
  MODIFY `no_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_tindakan`
--
ALTER TABLE `tabel_tindakan`
  ADD CONSTRAINT `tabel_tindakan_ibfk_1` FOREIGN KEY (`id_perawat`) REFERENCES `tabel_perawat` (`id_perawat`),
  ADD CONSTRAINT `tabel_tindakan_ibfk_2` FOREIGN KEY (`nama_pasien`) REFERENCES `tabel_pasien` (`no_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
