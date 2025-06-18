-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2025 pada 14.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nagari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `foto`, `username`, `password`) VALUES
(7, 'admin.png', 'admin', '1zxa54'),
(10, 'admin.png', 'anggra', '122703');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `id_golongan` int(20) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `laki_laki` int(100) NOT NULL,
  `perempuan` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`id_golongan`, `kelompok`, `laki_laki`, `perempuan`, `jumlah`) VALUES
(2, 'sma', 56, 56, 112);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wilayah`
--

CREATE TABLE `data_wilayah` (
  `id_jorong` int(20) NOT NULL,
  `wilayah_jorong` varchar(50) NOT NULL,
  `kk` int(100) NOT NULL,
  `l` int(100) NOT NULL,
  `p` int(100) NOT NULL,
  `l_p` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_wilayah`
--

INSERT INTO `data_wilayah` (`id_jorong`, `wilayah_jorong`, `kk`, `l`, `p`, `l_p`) VALUES
(1, 'Jorong Talang Timur , Ketua HENDRA HARYENDI', 666, 8, 8, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `penceramah` varchar(30) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `kajian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `id_jamaah` int(2) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `Organisasi` varchar(255) DEFAULT NULL,
  `Jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `nama_jamaah`, `foto`, `Organisasi`, `Jabatan`) VALUES
(0, 'Gusmal', 'j silanjai.JPG', 'silanjai', 'jl.harapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian`
--

CREATE TABLE `kajian` (
  `id_kajian` int(11) NOT NULL,
  `nm_kajian` varchar(30) DEFAULT NULL,
  `nm_ustad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kajian`
--

INSERT INTO `kajian` (`id_kajian`, `nm_kajian`, `nm_ustad`) VALUES
(34, 'shubuh', 'Ustad Abdul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id_kaskeluar` int(11) NOT NULL,
  `keterangan_k` varchar(30) NOT NULL,
  `tanggal_k` date NOT NULL,
  `keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kas_keluar`
--

INSERT INTO `kas_keluar` (`id_kaskeluar`, `keterangan_k`, `tanggal_k`, `keluar`) VALUES
(11, 'Pembangunan Mesjid', '2025-06-02', 25000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id_kasmasuk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kas_masuk`
--

INSERT INTO `kas_masuk` (`id_kasmasuk`, `nama`, `keterangan`, `tanggal`, `masuk`) VALUES
(22, 'Ahmad', 'Untuk Pembangunan Nagari', '2025-06-02', 50000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi_pengumuman`, `tgl`, `foto`) VALUES
(18, 'PEMERINTAH NAGARI TALANG BABUNGO LAKUKAN KOORDINASI KE INSPEKTORAT PROVINSI DALAM RANGKA PERSIAPAN KUNJUNGAN PENILAIAN KPK', 'Padang, 8 November 2024. Inspektorat Daerah Provinsi Sumatera Barat melaksanakan koordinasi secara daring melalui zoom meeting dengan KPK RI terhadap kegiatan penilaian Desa Calon Percontohan Desa Antikorupsi Tahun 2024 Tingkat Provinsi Sumatera Barat.\r\n\r\nKegiatan ini dihadiri oleh Irban V, Bapak Ahda Yanuar, dan ibu Megah Vivyawati, bersama-sama dengan Pemerintah Kabupaten Solok yang terdiri dari Inspektorat, Dinas Kominfo dan Dinas Pemberdayaan Masyarakat dan Desa (DPMD) Kabupaten Solok serta perangkat Nagari Talang Babungo, dalam rangka persiapan penilaian tingkat nasional oleh KPK RI, dengan narasumber Plh. Direktur Pembinaan Peran Serta Masyarakat Komisi Pemberantasan Korupsi (KPK) RI, Friesmount Wongso. Bertempat di Ruang Rapat Sekda Kantor Gubernur Provinsi , dan menjadi langkah penting dalam mengembangkan serta membina calon desa percontohan antikorupsi.\r\n\r\nDiharapkan, kegiatan ini dapat memberikan panutan dalam meningkatkan kesadaran masyarakat akan pentingnya integritas dan transparansi di lingkungan pemerintahan desa untuk membangun budaya anti korupsi. (Sumber : Instagram Inspektorat Provinsi Sumatera Barat)', '2024-11-08', 'kpk2.jpg'),
(19, 'PEMERINTAH NAGARI TALANG BABUNGO LAKUKAN STUDI BANDING KE- NAGARI BUKIK LIMBUKU KAB. 50 KOTA', 'alang Babungo, 22 November 2024 (Rayhan Fadillah) – Dalam rangka peningkatan kapasitas perangkat desa/ nagari dan kelembagaan, Pemerintah Nagari Talang Babungo lakukan studi banding ke Nagari Bukik Limbuku, Kecamatan Harau, Kabupaten 50 Kota. \r\n\r\nKegiatan Studi Banding ini diikuti oleh Perangkat Nagari, dan kelembagaan Nagari seperti BPN, PKK, KAN, LPMN, serta Pendamping Lokal Desa/Nagari.  Studi Banding  ini dimaksudkan untuk menjalin silaturahmi  dan berbagi informasi serta meningkatkan kapasitas pemerintah nagari. \r\n\r\nWali Nagari Talang Babungo, Hafizur Rahman mengatakan tujuan kegiatan studi banding ini adalah agar pemerintah Nagari Talang Babungo dan Pemerintah Nagari Bukik Limbuku bisa saling berbagi informasi dan bersilaturahmi. \r\n\r\nKemudian beliau juga mengatakan dengan adanya studi banding ini diharapkan bisa menambah pengetahuan dan wawasan salah satunya mengenai pengembangan ecoprint yang ada di Nagari Bukik Limbuku. “Kami berharap Nagari kita menjadi sebuah satu kesatuan bersama serta saling berbagi informasi dan kami juga berharap nagari Limbuku juga menjadi nagari percontohan,” tuturnya. \r\n\r\nWali Nagari Bukik Limbuku, Dodi  dalam sambutannya menyampaikan apresiasi atas kunjungan Pemerintah Nagari Talang Babungo berserta rombongan ke Nagari Bukik Limbuku. Ia mengatakan dengan adanya kegiatan studi banding ini bisa membangun silaturahmi berlanjut. \r\n\r\n“Semoga kedepannya silaturahmi tetap terjaga, kita bisa saling berbagi informasi mengenai keadaan nagari, seperti tradisi, kearifan lokal, dan budaya,” harapnya.\r\n\r\nWali Nagari Bukik Limbuku, Dodi  dalam sambutannya menyampaikan apresiasi atas kunjungan pemerintah nagari Talang Babungo berserta rombongan ke Nagari Bukik Limbuku. Ia mengatakan dengan adanya kegiatan studi banding ini silaturahmi bisa berlanjut kedepannya. \r\n\r\n“Semoga kedepannya silaturahmi tetap terjaga, kita bisa saling berbagi informasi mengenai keadaan nagari, seperti tradisi, kearifan lokal, dan budaya,” harapnya.', '2024-11-21', 'study.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` varchar(11) NOT NULL,
  `foto` blob NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_sapra` int(11) NOT NULL,
  `nama_sapra` varchar(255) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_sapra`, `nama_sapra`, `foto`) VALUES
(3, 'Desa Wisata Tabek Talang Babungo', 'tabek.jpeg'),
(4, 'Giliang Tabu', 'tabu.jpg'),
(5, 'Tari Piring', 'tari.jpg'),
(6, 'Pemandangan Pincuran', 'pincuran.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `data_wilayah`
--
ALTER TABLE `data_wilayah`
  ADD PRIMARY KEY (`id_jorong`);

--
-- Indeks untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id_kaskeluar`);

--
-- Indeks untuk tabel `kas_masuk`
--
ALTER TABLE `kas_masuk`
  ADD PRIMARY KEY (`id_kasmasuk`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_sapra`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id_golongan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_wilayah`
--
ALTER TABLE `data_wilayah`
  MODIFY `id_jorong` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  MODIFY `id_kaskeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kas_masuk`
--
ALTER TABLE `kas_masuk`
  MODIFY `id_kasmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_sapra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
