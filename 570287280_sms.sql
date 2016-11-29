
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2016 at 03:30 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u570287280_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE IF NOT EXISTS `tbl_absensi` (
  `id_absensi` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_absensi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_absensi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `nip`, `nis`, `kode_mapel`, `status`, `tgl_absensi`) VALUES
(6, '0712345', '130403020059', 'BI', 'Hadir', '2016-11-07 06:31:46'),
(7, '0712345', '130403020033', 'AG', 'Hadir', '2016-11-07 06:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_jadwal` (
  `id_jadwal` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `img_jadwal` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_detail_jadwal`
--

INSERT INTO `tbl_detail_jadwal` (`id_jadwal`, `nip`, `nis`, `kode_kelas`, `kode_mapel`, `hari`, `img_jadwal`) VALUES
(1, '0712345', '130403020059', 'K01A', 'BIO', 'Senin', 'ic_jadwal.png'),
(2, '0', '130403020059', 'K01A', 'IST', 'Senin', 'ic_jadwal.png'),
(3, '0712344', '130403020059', 'K01A', 'IPA', 'Senin', 'ic_jadwal.png'),
(4, '0712347', '130403020059', 'K01A', 'AG', 'Selasa', 'ic_jadwal.png'),
(5, '0', '130403020059', 'K01A', 'IST', 'Selasa', 'ic_jadwal.png'),
(6, '0712348', '130403020059', 'K01A', 'IPS', 'Selasa', 'ic_jadwal.png'),
(7, '0712348', '130403020059', 'K01A', 'PKN', 'Rabu', 'ic_jadwal.png'),
(8, '0', '130403020059', 'K01A', 'IST', 'Rabu', 'ic_jadwal.png'),
(9, '0712349', '130403020059', 'K01A', 'MTK', 'Rabu', 'ic_jadwal.png'),
(10, '0712347', '130403020059', 'K01A', 'TIK', 'Kamis', 'ic_jadwal.png'),
(11, '0', '130403020059', 'K01A', 'IST', 'Kamis', 'ic_jadwal.png'),
(12, '0712348', '130403020059', 'K01A', 'BI', 'Kamis', 'ic_jadwal.png'),
(13, '0712354', '130403020059', 'K01A', 'BG', 'Jumat', 'ic_jadwal.png'),
(14, '0', '130403020059', 'K01A', 'IST', 'Jumat', 'ic_jadwal.png'),
(15, '0712349', '130403020059', 'K01A', 'MTK', 'Jumat', 'ic_jadwal.png'),
(16, '0712347', '130403020059', 'K01A', 'BIO', 'Saptu', 'ic_jadwal.png'),
(17, '0', '130403020059', 'K01A', 'IST', 'Saptu', 'ic_jadwal.png'),
(18, '0712352', '130403020059', 'K01A', 'BI', 'Saptu', 'ic_jadwal.png'),
(19, '0712345', '130403020035', 'K01A', 'BIO', 'Senin', 'ic_jadwal.png'),
(20, '0', '130403020035', 'K01A', 'IST', 'Senin', 'ic_jadwal.png'),
(21, '0712344', '130403020035', 'K01A', 'IPA', 'Senin', 'ic_jadwal.png'),
(22, '0712347', '130403020035', 'K01A', 'AG', 'Selasa', 'ic_jadwal.png'),
(23, '0', '130403020035', 'K01A', 'IST', 'Selasa', 'ic_jadwal.png'),
(24, '0712348', '130403020035', 'K01A', 'IPS', 'Selasa', 'ic_jadwal.png'),
(25, '0712348', '130403020035', 'K01A', 'PKN', 'Rabu', 'ic_jadwal.png'),
(26, '0', '130403020035', 'K01B', 'IST', 'Rabu', 'ic_jadwal.png'),
(27, '0712349', '130403020035', 'K01A', 'MTK', 'Rabu', 'ic_jadwal.png'),
(28, '0712347', '130403020035', 'K01A', 'TIK', 'Kamis', 'ic_jadwal.png'),
(29, '0', '130403020035', 'K01B', 'IST', 'Kamis', 'ic_jadwal.png'),
(30, '0712348', '130403020035', 'K01A', 'BI', 'Kamis', 'ic_jadwal.png'),
(31, '0712354', '130403020035', 'K01A', 'BG', 'Jumat', 'ic_jadwal.png'),
(32, '0', '130403020035', 'K01B', 'IST', 'Jumat', 'ic_jadwal.png'),
(33, '0712349', '130403020035', 'K01A', 'MTK', 'Jumat', 'ic_jadwal.png'),
(34, '0712347', '130403020035', 'K01A', 'BIO', 'Saptu', 'ic_jadwal.png'),
(35, '0', '130403020035', 'K01B', 'IST', 'Saptu', 'ic_jadwal.png'),
(36, '0712352', '130403020035', 'K01A', 'BI', 'Saptu', 'ic_jadwal.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_nilai` (
  `id_nilai` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `nilai_uh` varchar(100) NOT NULL,
  `nilai_tugas` varchar(100) NOT NULL,
  `nilai_uts` varchar(100) NOT NULL,
  `nilai_uas` varchar(100) NOT NULL,
  `nilai_akhir` varchar(100) NOT NULL,
  `img_nilai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_detail_nilai`
--

INSERT INTO `tbl_detail_nilai` (`id_nilai`, `nip`, `nis`, `kode_mapel`, `nilai_uh`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`, `img_nilai`) VALUES
(1, '0712345', '130403020059', 'BI', '100', '100', '100', '100', '100', 'ic_nilai.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_ujian`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_ujian` (
  `id_ujian` int(225) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `tgl_ujian` varchar(100) NOT NULL,
  `jam_mulai` varchar(100) NOT NULL,
  `jam_selesai` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `img_ujian` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ujian`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_detail_ujian`
--

INSERT INTO `tbl_detail_ujian` (`id_ujian`, `kode_kelas`, `kode_mapel`, `tgl_ujian`, `jam_mulai`, `jam_selesai`, `ket`, `img_ujian`) VALUES
(1, 'K01A', 'BI', '19-12-2016', '07.00', '09.00', 'Ujian Tengah Semester', 'ic_ujian.png'),
(2, 'K01A', 'AG', '19-12-2016', '09.30', '10.20', 'Ujian Tengah Semester', 'ic_ujian.png'),
(3, 'K01A', 'TIK', '20-12-2016', '07.00', '09.00', 'Ujian Tengah Semester', 'ic_ujian.png'),
(4, 'K01A', 'MTK', '20-12-2016', '09.30', '10.20', 'Ujian Tengah Semester', 'ic_ujian.png'),
(5, 'K01A', 'FSK', '20-12-2016', '07.00', '09.00', 'Ujian Tengah Semester', 'ic_ujian.png'),
(6, 'K01A', 'BG', '20-12-2016', '09.30', '10.20', 'Ujian Tengah Semester', 'ic_ujian.png'),
(7, 'K01A', 'KM', '21-12-2016', '07.00', '09.00', 'Ujian Tengah Semester', 'ic_ujian.png'),
(8, 'K01A', 'IPA', '21-12-2016', '09.30', '10.20', 'Ujian Tengah Semester', 'ic_ujian.png'),
(9, 'K01A', 'IPS', '22-12-2016', '07.00', '09.00', 'Ujian Tengah Semester', 'ic_ujian.png'),
(10, 'K01A', 'PKN', '22-12-2016', '09.30', '10.20', 'Ujian Tengah Semester', 'ic_ujian.png'),
(11, 'K01A', 'BIO', '23-12-2016', '07.00', '09.00', 'Ujian Tengah Semester', 'ic_ujian.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `id_guru` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `alamat`, `no_telp`, `password`) VALUES
(1, '0712345', 'Sukarno Samri S.kom', 'Kediri Ringinrejo', '0897654555544', 'suka'),
(2, '0712344', 'Sulis Wati', 'Malang Sukun', '0897654555544', 'suli'),
(3, '0712346', 'Bandriyo S.kom', 'Kepanjen Malang', '08977766234', 'band'),
(4, '0712347', 'Budi Susanto', 'Trengalek ', '085678335123', 'budi'),
(5, '0712348', 'Imam Hambali', 'Kediri Ringinrejo', '0897654555544', 'imam'),
(6, '0712349', 'Sholihin Saleh', 'Malang Sukun', '0897654555544', 'shol'),
(7, '0712350', 'Yusril Ardian', 'Kepanjen Malang', '08977766234', 'yusr'),
(8, '0712351', 'Ahsan ', 'Trengalek ', '085678335123', 'ahsa'),
(9, '0712352', 'Amak Yunus', 'Malang Sukun', '0897654555544', 'amak'),
(10, '0712353', 'Arum Sulis', 'Kepanjen Malang', '08977766234', 'arum'),
(11, '0712354', 'Rahman Hadi', 'Trengalek ', '085678335123', 'rahm'),
(12, '0', 'Istirahat', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `id_kelas` int(225) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `sub_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kode_kelas`, `kelas`, `sub_kelas`) VALUES
(1, 'K01A', '1', 'A'),
(2, 'K01B', '1', 'B'),
(3, 'K02A', '2', 'A'),
(4, 'K02B', '2', 'B'),
(5, 'K03A', '3', 'A'),
(6, 'K03B', '3', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE IF NOT EXISTS `tbl_mapel` (
  `id_mapel` int(225) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `jam_mulai` varchar(100) NOT NULL,
  `jam_selesai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `kode_mapel`, `mapel`, `jam_mulai`, `jam_selesai`) VALUES
(1, 'BI', 'Bahasa Indonesia', '10.30', '12.00'),
(2, 'AG', 'Agama Islam', '07.00', '09.30'),
(3, 'TIK', 'Teknik Komputer', '07.00', '09.30'),
(4, 'MTK', 'Matematika', '10.00', '12.00'),
(5, 'FSK', 'Fisika', '10.00', '12.00'),
(6, 'BG', 'Bahasa Inggris', '07.00', '09.30'),
(7, 'KM', 'Kimia', '07.00', '09.30'),
(8, 'IPA', 'Ilmu Pengetahuan Alam', '10.00', '12.00'),
(9, 'IPS', 'Ilmu Pengetahuan Sosial', '10.00', '12.00'),
(10, 'PKN', 'Pendidikan Kewarga Negaraan', '07.00', '09.30'),
(11, 'BIO', 'Biologi', '07.00', '09.30'),
(12, 'IST', 'Istirahat', '09.30', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orangtua`
--

CREATE TABLE IF NOT EXISTS `tbl_orangtua` (
  `nio` int(225) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`nio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orangtua`
--

INSERT INTO `tbl_orangtua` (`nio`, `nama_ortu`, `alamat`, `no_telp`, `nis`, `password`) VALUES
(412345, 'Bambang Santosa', 'Malang Sukun Jawa timur', '085674555287', '130403020059', 'ortu'),
(412346, 'Sukirno', 'Malang Kota', '086765444324', '130403020033', 'suki'),
(412347, 'Mustam', 'Malang Sukun Jawa timur', '085674555287', '130403020034', 'must'),
(412348, 'Sumanto', 'Malang Kota', '086765444324', '130403020035', 'suma');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id_p` int(225) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `img_p` varchar(100) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_p`, `judul`, `detail`, `tgl`, `img_p`) VALUES
(1, 'Lomba Sekolah', 'Perlombaan Sekolahan yang akan di gelar di sekolahan ,setiap siswa wajib ikut', '20-12-2016', 'ic_pengumuman.png'),
(2, 'Seminar UAN', 'Untuk menghadapi UAN sekalohan mengadakan seminar UAN ,setiap siswa kelas 3 wajib ikut', '19-03-2017', 'ic_pengumuman.png'),
(3, 'Bazar Buku', 'Pameran bazar buku di sekolahan dan buku dapat di beli sesui harga', '17-11-2016', 'ic_pengumuman.png'),
(4, 'Organisasi', 'Di beritahukan semua angota OSIS berkumpul di sekolahan hari minggu untuk rapat penerimaan siswa baru', '12-12-2016', 'ic_pengumuman.png'),
(5, 'Liburan UTS', 'Libur uts di laksanakan pada tgl 18-3-2017 sampai 22-3-2017', '18-03-2016', 'ic_pengumuman.png'),
(6, 'Pembagian Raport', 'Pembagian raport akan di bagikan setelah ujian selesai', '20-12-2016', 'ic_pengumuman.png'),
(7, 'Cerdas Cermat', 'Sekolahan akan mengadakan cerdas cermat ,yang akan di lombakan di kota malang', '19-03-2017', 'ic_pengumuman.png'),
(8, 'Tour', 'Sekolah akan mengadakan piknik untuk kelas 1 dan 2 ke jogja', '17-11-2016', 'ic_pengumuman.png'),
(9, 'Organisasi', 'Di beritahukan semua angota OSIS berkumpul di sekolahan hari minggu untuk rapat penerimaan siswa baru', '12-12-2016', 'ic_pengumuman.png'),
(10, 'Liburan UTS', 'Libur uts di laksanakan pada tgl 18-3-2017 sampai 22-3-2017', '18-03-2016', 'ic_pengumuman.png'),
(11, 'Lomba Sekolah', 'Perlombaan Sekolahan yang akan di gelar di sekolahan ,setiap siswa wajib ikut', '20-12-2016', 'ic_pengumuman.png'),
(12, 'Seminar UAN', 'Untuk menghadapi UAN sekalohan mengadakan seminar UAN ,setiap siswa kelas 3 wajib ikut', '19-03-2017', 'ic_pengumuman.png'),
(13, 'Bazar Buku', 'Pameran bazar buku di sekolahan dan buku dapat di beli sesui harga', '17-11-2016', 'ic_pengumuman.png'),
(14, 'Organisasi', 'Di beritahukan semua angota OSIS berkumpul di sekolahan hari minggu untuk rapat penerimaan siswa baru', '12-12-2016', 'ic_pengumuman.png'),
(15, 'Liburan UTS', 'Libur uts di laksanakan pada tgl 18-3-2017 sampai 22-3-2017', '18-03-2016', 'ic_pengumuman.png'),
(16, 'Pembagian Raport', 'Pembagian raport akan di bagikan setelah ujian selesai', '20-12-2016', 'ic_pengumuman.png'),
(17, 'Cerdas Cermat', 'Sekolahan akan mengadakan cerdas cermat ,yang akan di lombakan di kota malang', '19-03-2017', 'ic_pengumuman.png'),
(18, 'Tour', 'Sekolah akan mengadakan piknik untuk kelas 1 dan 2 ke jogja', '17-11-2016', 'ic_pengumuman.png'),
(19, 'Organisasi', 'Di beritahukan semua angota OSIS berkumpul di sekolahan hari minggu untuk rapat penerimaan siswa baru', '12-12-2016', 'ic_pengumuman.png'),
(20, 'Liburan UTS', 'Libur uts di laksanakan pada tgl 18-3-2017 sampai 22-3-2017', '18-03-2016', 'ic_pengumuman.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id_siswa` int(225) NOT NULL AUTO_INCREMENT,
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_siswa` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `kode_kelas`, `no_telp`, `alamat`, `nip`, `tgl_lahir`, `password`, `img_siswa`) VALUES
(1, '130403020059', 'Tito Purbantara SP', 'K01A', '081615731024', 'Batuaji Ringin Rejo Kediri', '0712345', '18-03-1995', 'tito', 'tito.png'),
(2, '130403020033', 'Vino Bastian', 'K01B', '0856463145134', 'Malang', '0712345', '12-02-1998', 'qwerty', 'vino.png'),
(3, '130403020034', 'Windi Putri', 'K02B', '086776432123', 'Pakisaji Malang', '0712344', '12-12-1996', 'wind', 'windi.png'),
(4, '130403020035', 'Masduki Zen', 'K01A', '085788676443', 'Kebonagung Malang', '0712345', '12-4-1997', 'masd', 'masduki.png'),
(5, '130403020036', 'Brigita Putri', 'K01A', '085778976345', 'Malang Kota', '0712345', '13-7-1997', 'brig', 'brigita.png'),
(6, '130403020037', 'Alfian Ambali', 'K01A', '08876457887', 'Malang Kota', '0712345', '18-03-1995', 'tito', 'alfian.png'),
(7, '130403020038', 'Eka Arisandi', 'K01A', '0856463145134', 'Malang Kota', '0712345', '12-02-1998', 'ekaa', 'eka.png'),
(8, '130403020039', 'Putri Lestari', 'K01A', '086776432123', 'Pakisaji Malang', '0712345', '12-12-1996', 'putr', 'putri.png'),
(9, '130403020040', 'Eko Budi', 'K01A', '085788676443', 'Kebonagung Malang', '0712345', '12-4-1997', 'ekob', 'eko.png'),
(10, '130403020041', 'Nurma Lestari', 'K01A', '085778976345', 'Dampit Malang', '0712345', '13-7-1997', 'nurm', 'nurma.png'),
(11, '130403020042', 'Hendi Prasetyo', 'K01B', '081615731024', 'Malang Sukun', '0712344', '18-03-1995', 'hend', 'hendi.png'),
(12, '130403020043', 'Ivan Andika', 'K01B', '0856463145134', 'Malang Kota', '0712344', '12-02-1998', 'ivan', 'ivan.png'),
(13, '130403020044', 'Rico Putra', 'K01B', '086776432123', 'Banyuwangi', '0712344', '12-12-1996', 'rico', 'rico.png'),
(14, '130403020045', 'Anaswati', 'K01B', '085788676443', 'Kebonagung Malang', '0712344', '12-4-1997', 'anas', 'anaswati.png'),
(15, '130403020046', 'Jefri Albukori', 'K01B', '085778976345', 'Malang Kota', '0712344', '13-7-1997', 'jefr', 'jefri.png'),
(16, '130403020047', 'Diyo Tresna', 'K01B', '08876457887', 'Malang Kota', '0712344', '18-03-1995', 'diyo', 'diyo.png'),
(17, '130403020048', 'Bagus Darmawan', 'K01B', '0856463145134', 'Malang Kota', '0712344', '12-02-1998', 'bagu', 'bagus.png'),
(18, '130403020049', 'Harjo Dwi', 'K01B', '086776432123', 'Pakisaji Malang', '0712344', '12-12-1996', 'hanj', 'harjo.png'),
(19, '130403020050', 'Fiil Anam', 'K01B', '085788676443', 'Kebonagung Malang', '0712344', '12-4-1997', 'fiil', 'fiil.png'),
(20, '130403020051', 'Ida Wati', 'K01B', '085778976345', 'Dampit Malang', '0712344', '13-7-1997', 'idaw', 'ida.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
