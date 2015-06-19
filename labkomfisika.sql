-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2015 pada 09.12
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `labkomfisika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_asisten`
--

CREATE TABLE IF NOT EXISTS `absen_asisten` (
  `Id_Praktikum` varchar(32) NOT NULL,
  `Id_Asisten` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `Keterangan` text NOT NULL,
  PRIMARY KEY (`Id_Praktikum`,`Id_Asisten`),
  KEY `Id_Praktikum` (`Id_Praktikum`),
  KEY `Id_Asisten` (`Id_Asisten`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen_asisten`
--

INSERT INTO `absen_asisten` (`Id_Praktikum`, `Id_Asisten`, `Status`, `Keterangan`) VALUES
('praktikum 1', '1210963002', 'Hadir', ''),
('praktikum 1', '1234567891', 'hadir', ''),
('praktikum 2', '1234567891', 'hadir', ''),
('praktikum 2', '1234567892', 'hadir', ''),
('praktikum 3', '1210963011', 'Tidak Hadir', ''),
('praktikum 3', '1234567892', 'Hadir', ''),
('Praktikum 4', '1210963002', 'Hadir', ''),
('Praktikum 6', '1234567891', 'Hadir', ''),
('Praktikum 6', '1234567892', 'Hadir', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_praktikan`
--

CREATE TABLE IF NOT EXISTS `absen_praktikan` (
  `Nim` varchar(10) NOT NULL,
  `Id_Praktikum` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `Keterangan` text NOT NULL,
  PRIMARY KEY (`Nim`,`Id_Praktikum`),
  KEY `Nim` (`Nim`),
  KEY `Id_Praktikum` (`Id_Praktikum`),
  KEY `Nim_2` (`Nim`),
  KEY `Id_Praktikum_2` (`Id_Praktikum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen_praktikan`
--

INSERT INTO `absen_praktikan` (`Nim`, `Id_Praktikum`, `Status`, `Keterangan`) VALUES
('1210961001', 'praktikum 1', 'Hadir', 'keterangan1'),
('1210961002', 'praktikum 1', 'Tidak Hadir', 'keterangan2'),
('1210961003', 'praktikum 1', 'Hadir', 'keterangan3'),
('1210961004', 'praktikum 1', 'Hadir', 'keterangan4'),
('1210961019', 'Praktikum 6', 'Hadir', 'keterangan1'),
('1210962025', 'praktikum 1', 'Hadir', 'keterangan5'),
('1210963003', 'Praktikum 4', 'Hadir', 'keterangan1'),
('1210963014', 'Praktikum 4', 'Tidak Hadir', 'keterangan2'),
('1311522025', 'praktikum 1', 'Hadir', 'keterangan6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE IF NOT EXISTS `asisten` (
  `Id_Asisten` varchar(32) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  PRIMARY KEY (`Id_Asisten`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`Id_Asisten`, `Nama`) VALUES
('1210963002', 'Ulfa Fithriyyah F'),
('1210963011', 'Redha Rahmanita R'),
('1234567891', 'Kuntum A'),
('1234567892', 'Hidayat Rivai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `Hari` varchar(32) NOT NULL,
  `Mulai` time NOT NULL,
  `Selesai` time NOT NULL,
  PRIMARY KEY (`Id_Jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`Id_Jadwal`, `Hari`, `Mulai`, `Selesai`) VALUES
(1, 'Rabu', '00:00:00', '15:00:00'),
(2, 'Selasa', '13:00:00', '14:35:00'),
(3, 'Senin', '13:00:00', '14:00:00'),
(4, 'Jumat', '14:00:00', '16:00:00'),
(5, 'Selasa', '10:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_praktikum`
--

CREATE TABLE IF NOT EXISTS `jenis_praktikum` (
  `Id_Jenis` varchar(32) NOT NULL,
  `mata_kuliah` varchar(32) NOT NULL,
  PRIMARY KEY (`Id_Jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_praktikum`
--

INSERT INTO `jenis_praktikum` (`Id_Jenis`, `mata_kuliah`) VALUES
('Ganjil', 'Pemrograman'),
('Genap', 'Fisika Komputasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`Username`, `Password`, `Status`) VALUES
('Admin', '123456', 'Admin'),
('Asisten', '123456', 'Asisten'),
('PJ', '123456', 'PJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikan`
--

CREATE TABLE IF NOT EXISTS `praktikan` (
  `Nim` varchar(10) NOT NULL,
  `Nama` varchar(64) NOT NULL,
  `Kelompok` varchar(2) NOT NULL,
  PRIMARY KEY (`Nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikan`
--

INSERT INTO `praktikan` (`Nim`, `Nama`, `Kelompok`) VALUES
('1210961001', 'Audiah', '1'),
('1210961002', 'Redha', '1'),
('1210961003', 'Annisa', '1'),
('1210961004', 'Fitri', '1'),
('1210961018', 'Nindy', '2'),
('1210961019', 'Aseny Iyang', '4'),
('1210962001', '', '3'),
('1210962008', 'Ade', '3'),
('1210962025', 'H Rivai', '1'),
('1210962111', 'a', '6'),
('1210962112', 'b', '6'),
('1210963002', 'Ulfa', '2'),
('1210963003', 'trysno', '5'),
('1210963006', 'Kuntum', '2'),
('1210963014', 'yossi', '5'),
('1311522025', 'A Lestari', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum`
--

CREATE TABLE IF NOT EXISTS `praktikum` (
  `Id_Praktikum` varchar(32) NOT NULL,
  `Id_Jenis` varchar(32) NOT NULL,
  `Modul` int(11) NOT NULL,
  `Id_Jadwal` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Keterangan` text NOT NULL,
  PRIMARY KEY (`Id_Praktikum`),
  KEY `Id_Jadwal` (`Id_Jadwal`),
  KEY `Id_Jadwal_2` (`Id_Jadwal`),
  KEY `Jenis` (`Id_Jenis`),
  KEY `Id_Jenis` (`Id_Jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikum`
--

INSERT INTO `praktikum` (`Id_Praktikum`, `Id_Jenis`, `Modul`, `Id_Jadwal`, `Tanggal`, `Keterangan`) VALUES
('praktikum 1', 'Ganjil', 1, 1, '2015-06-04', ''),
('praktikum 2', 'Ganjil', 1, 2, '2015-06-08', ''),
('praktikum 3', 'Ganjil', 1, 3, '2015-06-07', ''),
('Praktikum 4', 'Ganjil', 1, 5, '2015-06-08', ''),
('Praktikum 6', 'Ganjil', 3, 4, '2015-06-02', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_praktikum`
--

CREATE TABLE IF NOT EXISTS `tugas_praktikum` (
  `Nim` varchar(10) NOT NULL,
  `Id_Praktikum` varchar(32) NOT NULL,
  `no` int(11) NOT NULL,
  `Nilai` int(11) NOT NULL,
  `Status` varchar(32) NOT NULL,
  PRIMARY KEY (`Nim`,`Id_Praktikum`,`no`),
  KEY `Nim` (`Nim`),
  KEY `Id_Praktikum` (`Id_Praktikum`),
  KEY `Id_Praktikum_2` (`Id_Praktikum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas_praktikum`
--

INSERT INTO `tugas_praktikum` (`Nim`, `Id_Praktikum`, `no`, `Nilai`, `Status`) VALUES
('1210962001', 'praktikum 3', 1, 87, 'belum disetujui'),
('1210962008', 'praktikum 3', 1, 80, 'belum disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_rumah`
--

CREATE TABLE IF NOT EXISTS `tugas_rumah` (
  `Nim` varchar(10) NOT NULL,
  `Id_Praktikum` varchar(32) NOT NULL,
  `no` int(11) NOT NULL,
  `Nilai` int(11) NOT NULL,
  `status` varchar(32) NOT NULL,
  PRIMARY KEY (`Nim`,`Id_Praktikum`,`no`),
  KEY `Nim` (`Nim`),
  KEY `Id_Praktikum` (`Id_Praktikum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas_rumah`
--

INSERT INTO `tugas_rumah` (`Nim`, `Id_Praktikum`, `no`, `Nilai`, `status`) VALUES
('1210961018', 'praktikum 2', 1, 76, 'belum disetujui'),
('1210961019', 'Praktikum 6', 1, 100, 'belum disetujui'),
('1210962001', 'praktikum 3', 1, 90, 'belum disetujui'),
('1210962008', 'praktikum 3', 1, 100, 'belum disetujui'),
('1210963002', 'praktikum 2', 1, 57, 'belum disetujui'),
('1210963003', 'Praktikum 4', 1, 90, 'belum disetujui'),
('1210963006', 'praktikum 2', 1, 87, 'belum disetujui'),
('1210963014', 'Praktikum 4', 1, 54, 'belum disetujui');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen_asisten`
--
ALTER TABLE `absen_asisten`
  ADD CONSTRAINT `absen_asisten_ibfk_1` FOREIGN KEY (`Id_Praktikum`) REFERENCES `praktikum` (`Id_Praktikum`) ON DELETE NO ACTION,
  ADD CONSTRAINT `absen_asisten_ibfk_2` FOREIGN KEY (`Id_Asisten`) REFERENCES `asisten` (`Id_Asisten`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `absen_praktikan`
--
ALTER TABLE `absen_praktikan`
  ADD CONSTRAINT `absen_praktikan_ibfk_2` FOREIGN KEY (`Id_Praktikum`) REFERENCES `praktikum` (`Id_Praktikum`) ON DELETE NO ACTION,
  ADD CONSTRAINT `absen_praktikan_ibfk_3` FOREIGN KEY (`Nim`) REFERENCES `praktikan` (`Nim`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  ADD CONSTRAINT `praktikum_ibfk_1` FOREIGN KEY (`Id_Jadwal`) REFERENCES `jadwal` (`Id_Jadwal`) ON DELETE NO ACTION,
  ADD CONSTRAINT `praktikum_ibfk_2` FOREIGN KEY (`Id_Jenis`) REFERENCES `jenis_praktikum` (`Id_Jenis`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tugas_praktikum`
--
ALTER TABLE `tugas_praktikum`
  ADD CONSTRAINT `tugas_praktikum_ibfk_1` FOREIGN KEY (`Id_Praktikum`) REFERENCES `praktikum` (`Id_Praktikum`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tugas_praktikum_ibfk_2` FOREIGN KEY (`Nim`) REFERENCES `praktikan` (`Nim`) ON DELETE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tugas_rumah`
--
ALTER TABLE `tugas_rumah`
  ADD CONSTRAINT `tugas_rumah_ibfk_1` FOREIGN KEY (`Nim`) REFERENCES `praktikan` (`Nim`),
  ADD CONSTRAINT `tugas_rumah_ibfk_2` FOREIGN KEY (`Id_Praktikum`) REFERENCES `praktikum` (`Id_Praktikum`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
