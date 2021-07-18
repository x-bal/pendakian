-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2021 pada 16.58
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendakian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`, `no_hp`, `tgl_lahir`, `gambar`, `created`, `modified`) VALUES
(1, 'Safry Pasau T.', 'Admin', '$2y$10$dosli7o5vJd5QvuCijZa3uU58gkxIalYWrAmJ.FKyd9Coqkj7Bsa.', 'safrypasau@gmail.com', '081327675386', '1998-06-04', '1.bmp', '2020-05-04 11:16:10', '2020-05-04 11:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `created`, `modified`) VALUES
(6, 'Jawa Timur', '2021-06-23 15:43:23', '2021-06-23 15:43:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ks`
--

CREATE TABLE `tb_ks` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ks` varchar(1000) NOT NULL,
  `created` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ks`
--

INSERT INTO `tb_ks` (`id`, `nama`, `email`, `ks`, `created`, `modified`) VALUES
(1, 'Kinancy Indah', 'sirupangkinancy11@gmail.com', 'asd', '2021-07-02 23:42:36', '2021-07-02 23:42:36'),
(2, 'Desi N', 'desi@gmail.com', 'sangat bagus', '2021-07-17', '2021-07-17'),
(3, 'asdad', 'wilson@gmail.com', 'asdsafa', '2021-07-17', '2021-07-17'),
(4, 'soiafp;ldlkf', 'jesica@gmail.com', 'bc.zxnm,dvsbkcx', '2021-07-17', '2021-07-17'),
(5, 'ahgfskjdls', 'admin@gmail.com', 'gvhajdksl', '2021-07-17', '2021-07-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perlengkapan`
--

CREATE TABLE `tb_perlengkapan` (
  `id_perlengkapan` int(11) NOT NULL,
  `nama_perlengkapan` varchar(100) NOT NULL,
  `ket_singkat` text NOT NULL,
  `gambar` varchar(180) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_perlengkapan`
--

INSERT INTO `tb_perlengkapan` (`id_perlengkapan`, `nama_perlengkapan`, `ket_singkat`, `gambar`, `created`, `modified`) VALUES
(1, 'Matrasss', 'Selain sleeping bag, matras juga jadi salah satu perlengkapan yang harus dibawa untuk menghindari hipotermia. Matras dapat digunakan sebagai alas duduk hingga alas tidur sehingga dapat melindungi pendaki dari dinginnya tanah pegunungan yang dingin.', 'ed0609bb31af2166642a242473bd6a44.jpg', '2021-06-24 16:39:39', '2021-07-02 22:26:38'),
(2, 'Sepatu', '* Melindungi kaki dari bahaya \r\n* memberikan kenyamanan saat mendaki gunung\r\n', '9188179630a7ca0105efaa82118a63ff.jpg', '2021-06-24 00:00:00', '2021-07-02 22:21:55'),
(3, 'Kompor dan Gas', 'Kompor sangat berperan penting karena fungsi utama adalah untuk memasak logistik yang kita bawah saat mendaki.', '6455fa68222890e3973bfbf92c88f3df.jpg', '2021-06-24 16:39:39', '2021-07-02 22:17:00'),
(4, 'Sleeping Bag', 'Sleeping bag (SB) berfungsi untuk melindungi diri dari udara dingin ketika kan tidur dalam suatu pendakian, sehingga meminimalisir resiko hipotermia.', '06100f8b00b2eed30c43d386d9c19081.jpg', '2021-06-24 16:39:39', '2021-07-02 22:17:17'),
(6, 'Jaket', 'Jacket berfungsi sebagai penghangat kulit dari dinginnya udara di gunung juga melindungi dari terik matahari di siang hari.', 'acffcb9ce209d8122113a813a5d32b76.jpg', '2021-06-24 16:39:39', '2021-07-02 22:18:46'),
(7, 'Tenda', 'Ada beberap hal yang perlu diperhatikan dalam memilih tenda, yaitu model, daya tampung,lapisan (waterproof atau tidak), kemudahan dipacking dan berat tenda.', '7211c4ad8ca5f9f44e23e3b9769b2649.jpg', '2021-06-24 16:39:39', '2021-07-02 22:19:00'),
(8, 'Carrier', 'Dalam dunia pendakian fungsi dan manfaat Tas gunung sangat vital, karena tanpa Tas gunung kita tidk bisa membawah peralatan pendakian yang kita punya.', '3a76fbea4b04b83da55cb30649e3f807.jpg', '2021-06-24 16:39:39', '2021-07-02 22:19:09'),
(10, 'Headlamp', 'penerangan saat dibutuhlan ketika berada dalam kegelapan alam bebas untuk memudahkan aktivitas pendakian maupun aktivitas lainnya', '62967ac203eaeec08d66632feb703209.jpg', '2021-06-25 00:00:00', '2021-07-02 22:19:53'),
(14, 'Jas Hujan', 'Hujan atau tidak, jas hujan memang perlu dibawah. selain berguna saat musim hujan, jas hujan juga berfngsi sebagai penghangat layaknya jaket waterproof.', 'f8b306d83a3d4d5cf3948140f0363966.jpg', '2021-06-25 00:00:00', '2021-07-02 22:20:06'),
(15, 'P3K Standar', 'P3K Standar seperti :\r\n*Tabung Oksigen\r\n*kapas *tisu\r\n*betadine *Alkohol\r\n*Obat diare *Parasetamol\r\n*Obat Alergi *Obat Mata\r\n*Kain kassa *Plester\r\n*Oralit *Sunblock\r\n*Minyak Kayu Putih ', '117b9f6df21593067c5979dc16e1b4db.jpg', '2021-06-27 00:00:00', '2021-07-02 22:26:04'),
(16, 'Alat Makan', 'Alat Makan seperti :\r\n*Sendok\r\n*Piring\r\n*Cangkir\r\nDiutamakan yang berbahan aluminium atau plastik.', '6ce6bb201848b2f05aa797a3a4185d0d.jpg', '2021-06-27 00:00:00', '2021-07-02 22:26:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rute`
--

CREATE TABLE `tb_rute` (
  `id_rute` int(11) NOT NULL,
  `nama_rute` varchar(100) NOT NULL,
  `ket_singkat` text NOT NULL,
  `gambar` varchar(180) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_rute`
--

INSERT INTO `tb_rute` (`id_rute`, `nama_rute`, `ket_singkat`, `gambar`, `created`, `modified`) VALUES
(1, 'Rute Gunung Argopuro', 'Estimasi pendakian  via Bremi :\r\n*Polsek Krucil (Bermi) - Danau Taman Hidup (4jam)\r\n*Danau Taman Hidup - Hutan Lumut (30menit)\r\n*Hutan Lumut - Cemara Lima (2jam)\r\n*Cemara Lima - Angkene (3jam)\r\n*Angkene - Cisentor (2jam)\r\n*Cisentor - Rawa Embik (2jam)\r\n*Rawa Embik - Puncak (1jam)\r\n*TOTAL = 14 jam 30 menit (belum dengan perjalanan turun)', '96edaa5b3ac30295caa452aeead4d280.jpg', '2021-06-24 16:39:39', '2021-07-02 21:33:08'),
(8, 'Rute Gunung Arjuno', 'Estimasi waktu pendakian : \r\n*Basecamp-pos 1 Pet bocor (30 menit)\r\n*Pos 1-Pos II Kokopan (3 jam)\r\n*Pos II-Pos III Pondokan (5 jam)\r\n*Pos III-Lembah kidang-lali jiwo (30 menit)\r\n*lali jiwo - Puncak Arjuno Ogal-Agil (4jam)', '52847db625b5f0410f0bea0a04aa5284.jpg', '2021-06-27 00:00:00', '2021-07-02 21:34:27'),
(12, 'salawu geng', 'Jawa Timur', 'db1af455773b44fb082fc0af1fe196dd.jpg', '2021-07-17 15:31:10', '2021-07-17 15:31:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gambar` varchar(250) DEFAULT 'coretan.png',
  `status` enum('0','1') DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `no_hp`, `tgl_lahir`, `gambar`, `status`, `created`, `modified`) VALUES
(18, 'User', 'user', '$2y$10$dosli7o5vJd5QvuCijZa3uU58gkxIalYWrAmJ.FKyd9Coqkj7Bsa.', 'user@hmail.com', '123456', '1999-03-12', '5.bmp', '0', '2021-02-19 03:20:19', '2021-02-19 03:20:19'),
(19, 'coba', 'coba', '$2y$10$DOVCDM.cG0qqJgq8A48jIOUzA.qr014NH9vEp7CanDt47woKCzati', 'coba@gmail.com', '123456', '1998-04-12', 'wpp.jpg', '0', '2021-02-19 15:08:48', '2021-02-19 15:08:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ket_singkat` longtext NOT NULL,
  `ket_lengkap` longtext NOT NULL,
  `gambar` varchar(280) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `alamat`, `ket_singkat`, `ket_lengkap`, `gambar`, `kategori`, `created`, `modified`) VALUES
(16, 'Gunung Arjuno', 'Jawa Timur indonesia', 'Gunung Indah Sekali', 'Gunung Indah SekaliGunung Indah SekaliGunung Indah SekaliGunung Indah SekaliGunung Indah SekaliGunung Indah SekaliGunung Indah Sekali', '6e0fdad1be22844d4b205a2f12046304.jpg', 'Jawa Timur', '2021-07-17 20:01:48', '2021-07-17 20:01:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_ks`
--
ALTER TABLE `tb_ks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perlengkapan`
--
ALTER TABLE `tb_perlengkapan`
  ADD PRIMARY KEY (`id_perlengkapan`);

--
-- Indeks untuk tabel `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ks`
--
ALTER TABLE `tb_ks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_perlengkapan`
--
ALTER TABLE `tb_perlengkapan`
  MODIFY `id_perlengkapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_rute`
--
ALTER TABLE `tb_rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
