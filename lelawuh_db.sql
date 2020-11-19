-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Jul 2020 pada 15.15
-- Versi server: 10.4.12-MariaDB-log
-- Versi PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelawuh_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `nama_admin` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'simen', 'simen290996', 'arie Umarellaa'),
(2, 'Defaulta', 'default', 'Default Adminsq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(25) NOT NULL,
  `id_kategori` int(25) NOT NULL,
  `slug_barang` text NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(400) NOT NULL,
  `stok` int(15) NOT NULL,
  `gambar_utama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `slug_barang`, `nama_barang`, `keterangan`, `harga`, `stok`, `gambar_utama`) VALUES
(41, 4, 'steak-sapi-wagyu-fgfgxfcb', 'Steak Sapi Wagyu fgfgxfcb', '<p>Ini adalah steak yang sangat luar biasa yaak kali ga skuy coba ae dulu pasti deh aah yah kan yaak yuuk.</p>', '45000', -2, 'steak11.jpg'),
(44, 4, 'steak-us-tenderloin', 'Steak US Tenderloin', '<p>Ini adalah steak yang sangat luar biasa yaak kali ga skuy</p>\r\n', '2300', 2325, 'ateak_yaak1.jpg'),
(46, 6, 'yakult-syeger', 'Yakult Syeger', '<p>sdsfdsf fdsf wedasd</p><p>sdsfdsf fdsf wedasd</p>\r\n<p>sdsfdsf fdsf wedasd</p>\r\n<p>sdsfdsf fdsf wedasd</p>\r\n<p>sdsfdsf fdsf wedasd</p>\r\n\r\n', '3000', 2, 'yakult1.jpg'),
(47, 6, 'coffe-late-ice', 'Coffe Late Ice', '<p>dfgdsg sef iabsdciua ujbnsadiu ubnsduib uibasdi ibsadb ubsdi</p>\r\n', '50000', 223, 'minuman1.jpg'),
(48, 3, 'sayur-asam', 'Sayur Asam', '<p>shsf sfgs sg</p>\r\n', '73500', 233, 'sayur_asam1.jpg'),
(49, 3, 'sayur-kangkung', 'Sayur Kangkung', '<p>zfhxgfh srygts setgs setg</p>\r\n', '100000', 3232, 'sayurkangkung1.jpg'),
(51, 5, 'roti-mariam', 'Roti Mariam', '<p>zdvbzxbgxfbg</p>\r\n', '34000', 234, 'snack121.jpg'),
(52, 5, 'paket-snack-complite', 'Paket Snack Complite', '<p>adfa adsf</p>\r\n', '2000', 266, 'snack1.jpg'),
(53, 8, 'paket-nasi-gudeg-komplite', 'Paket Nasi Gudeg Komplite', '<p>adsfcasd aef asfd asfd</p>\r\n', '50000', 454, 'komplit2.jpg'),
(54, 8, 'paket-ayam-goreng-komplit', 'Paket Ayam Goreng Komplit', '<p>ascf sd sda</p>\r\n', '30000', 23, '1kom1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_toko`
--

CREATE TABLE `data_toko` (
  `id_toko` int(25) NOT NULL,
  `link_facebook` text NOT NULL,
  `link_instagram` text NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telfon` text NOT NULL,
  `no_wa` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `jam_buka` text NOT NULL,
  `banner_header` text NOT NULL,
  `banner_kiri` text NOT NULL,
  `banner_kanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_toko`
--

INSERT INTO `data_toko` (`id_toko`, `link_facebook`, `link_instagram`, `rekening`, `alamat`, `no_telfon`, `no_wa`, `email`, `jam_buka`, `banner_header`, `banner_kiri`, `banner_kanan`) VALUES
(1, 'https://facebook.com', 'instagram.com', 'A.N-Amung-BCA-1324-17326-123789', 'jl.jembatan merah', '087851484752', '0812345678', 'al.razli@gmail.com', 'buka 09.00 sd 12.00 WIb', 'steak.jpg', 'default.jpg', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_transaksi`
--

CREATE TABLE `dt_transaksi` (
  `id_dt_transaki` int(25) NOT NULL,
  `id_transaksi` int(25) NOT NULL,
  `id_barang` int(25) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah_pembelian` int(15) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_transaksi`
--

INSERT INTO `dt_transaksi` (`id_dt_transaki`, `id_transaksi`, `id_barang`, `nama_barang`, `jumlah_pembelian`, `harga_satuan`, `total_harga`) VALUES
(101, 109, 44, 'Steak US Tenderloin', 10, '2300', '23000'),
(102, 109, 46, 'Yakult Syeger', 1, '3000', '3000'),
(103, 109, 49, 'Sayur Kangkung', 1, '100000', '100000'),
(104, 110, 41, 'Steak Sapi Wagyu fgfgxfcb', 40, '45000', '1800000'),
(105, 111, 41, 'Steak Sapi Wagyu fgfgxfcb', 1, '45000', '45000'),
(106, 112, 41, 'Steak Sapi Wagyu fgfgxfcb', 10, '45000', '450000'),
(107, 113, 44, 'Steak US Tenderloin', 19, '2300', '43700');

--
-- Trigger `dt_transaksi`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `dt_transaksi` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-NEW.jumlah_pembelian
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(25) NOT NULL,
  `id_barang` int(25) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_barang`, `gambar`) VALUES
(61, 44, '1.jpg'),
(62, 44, 'tos.jpg'),
(63, 44, 'IMG_20170929_165953.jpg'),
(64, 44, 'IMG_20171031_124526.jpg'),
(65, 44, 'IMG_20171125_234733_HDR.jpg'),
(72, 41, 'IMG_20180206_050750_HDR.jpg'),
(73, 41, 'IMG_20181215_135732.jpg'),
(74, 41, 'IMG_20190204_141547.jpg'),
(75, 41, 'IMG_20190204_141556.jpg'),
(76, 47, 'VID_20170929_164734.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(25) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `slug_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(3, 'Aneka Sayur - Mayur', 'aneka-sayur-mayur'),
(4, 'Aneka Lauk - Pauk', 'aneka-lauk-pauk'),
(5, 'Aneka Snack And Shake', 'aneka-snack-and-shake'),
(6, 'Aneka Minuman', 'aneka-minuman'),
(7, 'Aneka Takjil', 'aneka-takjil'),
(8, 'Paket Komplit', 'paket-komplit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(255) NOT NULL,
  `id_user` int(25) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `nama_custemer` varchar(40) NOT NULL,
  `no_telfon_custemer` varchar(25) NOT NULL,
  `email_custemer` varchar(40) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `notes` text NOT NULL,
  `tanggal_transaksi` varchar(40) NOT NULL,
  `tanggal_batas_bayar` varchar(40) NOT NULL,
  `tanggal_pengambilan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `kode_transaksi`, `total_bayar`, `nama_custemer`, `no_telfon_custemer`, `email_custemer`, `alamat_pengiriman`, `notes`, `tanggal_transaksi`, `tanggal_batas_bayar`, `tanggal_pengambilan`) VALUES
(109, 12, '0707202020209BODB', '126000', 'Oks aja Deh', '2323', 'Arie@gamail.com', 'jl.klender dah yaak', 'ZCSXVxzB vczbz', '07-07-2020', '08-07-2020', '23-July-2020'),
(110, 12, '070720202020NZ5K6', '1800000', 'Oks aja Deh', '2323', 'Arie@gamail.com', 'jl.klender dah yaak', 'asfasfasf', '07-07-2020', '08-07-2020', '16-July-2020'),
(111, 12, '070720202020GLK68', '45000', 'Oks aja Deh', '2323', 'Arie@gamail.com', 'jl.klender dah yaak', 'SXcxvczxv', '07-07-2020', '08-07-2020', '09-July-2020'),
(112, 12, '0707202020201HDFV', '450000', 'Oks aja Deh', '2323', 'Arie@gamail.com', 'jl.klender dah yaak', 'jnjsdna', '07-07-2020', '08-07-2020', '09-July-2020'),
(113, 29, '070720202020WHXTM', '43700', 'arie umarell', '087851484752', 'Al.razli.umarella.15111020@gmail.com', 'Jl.cangkringan, Kalasan, Sleman, Yogyakarta', 'asdasd sdfcasd sdfcas sdfcac sdcsadc', '07-07-2020', '08-07-2020', '15-July-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `no_telfon` char(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `no_telfon`, `alamat`, `email`) VALUES
(12, 'Oks aja Deh', 'simen', '2d5b54ae33650083f4cd74fda556268f', '2323', 'jl.klender dah yaak', 'Arie@gamail.com'),
(29, 'arie umarell', 'simen', 'ba1e2bb2decb1c5355cd8c1828c5e523', '087851484752', 'Jl.cangkringan, Kalasan, Sleman, Yogyakarta', 'Al.razli.umarella.15111020@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `data_toko`
--
ALTER TABLE `data_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `dt_transaksi`
--
ALTER TABLE `dt_transaksi`
  ADD PRIMARY KEY (`id_dt_transaki`),
  ADD KEY `id_dt_transaki` (`id_dt_transaki`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_gambar` (`id_gambar`),
  ADD KEY `id_gambar_2` (`id_gambar`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_transaki` (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `data_toko`
--
ALTER TABLE `data_toko`
  MODIFY `id_toko` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_transaksi`
--
ALTER TABLE `dt_transaksi`
  MODIFY `id_dt_transaki` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `dt_transaksi`
--
ALTER TABLE `dt_transaksi`
  ADD CONSTRAINT `dt_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `dt_transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
