-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2024 pada 02.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukkperpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `buku_id` int(11) NOT NULL,
  `sampul_buku` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`buku_id`, `sampul_buku`, `kategori_id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `deskripsi`) VALUES
(12, 'dilan 1990.jpg', 5, 'Dilan: Dia adalah Dilanku Tahun 1990     ', 'Pidi Baiq      ', 'Pastel Books, PT Mizan Pustaka  ', '2016', '10', 'Bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.'),
(13, 'si kancil yang cerdik.jpg', 2, 'Si Kancil Yang Cerdik          ', 'Angga           ', 'Gramedia Pustaka Utama', '2012', '4', 'menceritakan tentang kesombongan kancil sebagai binatang hutan. Kisah bermula dari Kancil yang merasa jika dirinya adalah hewan paling cerdik dan pandai di hutan. Saking yakinnya, si kancil sampai menyombongkan hal tersebut di hadapan binatang lainnya dengan cara yang licik'),
(14, 'cantik itu luka.jpg', 5, 'Cantik Itu Luka ', 'Eka Kurniawan ', 'Gramedia Pustaka Utama', '2002', '5', 'Kisah Cantik Itu Luka berlatar belakang pada masa penjajahan dan mengisahkan kehidupan kompleks tokoh utama Dewi Ayu, seorang perempuan cantik dan eksotis. Dewi Ayu adalah seorang pelacur dengan paras yang rupawan. Ia dibesarkan oleh kakek neneknya setelah ayah dan ibunya diusir karena pernikahan sedarah.'),
(15, 'bumi.jpg', 5, 'Bumi ', 'Tere Liye ', 'Gramedia Pustaka Utama', '2014', '4', 'Bumi, merupakan rangkaian awal dari kisah sekelompok anak remaja berkemampuan istimewa. Mereka yang istimewa, mampu pergi ke dunia parallel bumi, bertemu dengan klan lain dan berhadapan dengan Tamus yang memiliki ambisi membebaskan si Tanpa Mahkota dan kemudian, menguasai bumi'),
(16, 'dinasaurus.jpg', 10, 'Ensiklopedia Dinosaurus dan Kehidupan Pra Sejarah ', 'Steve Parker ', ' Elex Media Komputindo', '2020', '3', 'Menceritakan bagaimana awal mula kehidupan di Bumi dan perkembangannya, dari tumbuhan awal hingga amfibi pertama, serta kedatangan reptil dan Zaman Dinosaurus. Perkembangan dari dinosaurus menjadi burung dijelaskan dengan detail yang menarik, di samping itu ada pula penjelasan mengenai mamalia dan kemunculan manusia pertama. '),
(17, 'bulan.jpg', 5, 'Bulan ', 'Tere Liye ', 'Sabak Grip', '2022', '5', 'Petualangan Raib, Seli, dan Ali berlanjut.Beberapa bulan setelah peristiwa klan bulan, Miss Selena akhirnya muncul di sekolah. Ia membawa kabar menggembirakan untuk anak-anak yang berjiwa petualang seperti Raib, Seli, dan Ali. Miss Selena bersama dengan Av akan mengajak mereka untuk mengunjungi klan matahari selama dua minggu. Av berencana akan bertemu dengan ketua konsil klan matahari, yang menguasai klan matahari sepenuhnya untuk mencari sekutu dalam menghadapi Tamus yang diperkirakan akan bebas dan juga membebaskan raja tanpa mahkota.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_buku`
--

CREATE TABLE `tb_kategori_buku` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori_buku`
--

INSERT INTO `tb_kategori_buku` (`kategori_id`, `nama_kategori`) VALUES
(2, 'Cerpen'),
(5, 'Novel'),
(6, 'Sejarah'),
(10, 'Ensiklopedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `kode_pinjam` char(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jumlah` char(10) NOT NULL,
  `status_peminjaman` enum('dipinjam','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`peminjaman_id`, `kode_pinjam`, `user_id`, `buku_id`, `tanggal_peminjaman`, `tanggal_pengembalian`, `jumlah`, `status_peminjaman`) VALUES
(12, 'AP001', 2, 12, '2024-02-01', '2024-02-02', '1', 'dikembalikan'),
(13, 'AP002', 10, 14, '2024-02-01', '2024-02-03', '1', 'dikembalikan'),
(15, 'AP003', 10, 16, '2024-02-01', '2024-02-02', '1', 'dikembalikan'),
(16, 'AP004', 2, 15, '2024-02-02', '2024-02-05', '1', 'dikembalikan'),
(17, 'AP005', 2, 14, '2024-02-03', '2024-02-05', '2', 'dikembalikan'),
(43, 'AP006', 2, 12, '2024-02-15', '2024-02-22', '1', 'dikembalikan');

--
-- Trigger `tb_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `kembali_buku` AFTER UPDATE ON `tb_peminjaman` FOR EACH ROW begin 
update tb_buku set stok = stok + old.jumlah
WHERE buku_id = old.buku_id;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pinjam_hapus` AFTER DELETE ON `tb_peminjaman` FOR EACH ROW BEGIN
    UPDATE tb_bukubuku
    SET stok = stok + OLD.jumlah
    WHERE id = OLD.buku_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_buku` AFTER INSERT ON `tb_peminjaman` FOR EACH ROW BEGIN
UPDATE tb_buku set stok = stok-new.jumlah
WHERE buku_id = new.buku_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ulasan_buku`
--

CREATE TABLE `tb_ulasan_buku` (
  `ulasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ulasan_buku`
--

INSERT INTO `tb_ulasan_buku` (`ulasan_id`, `user_id`, `buku_id`, `ulasan`, `rating`) VALUES
(3, 2, 13, 'Kerenn cuy', 7),
(4, 10, 16, 'Buku yang sangat di rekomendasikan untuk dibaca!!!', 10),
(5, 10, 15, 'Favorit!', 10),
(6, 11, 17, 'Buku nya keren banget', 9),
(7, 2, 16, 'Sangat menambah wawasan', 10),
(8, 14, 15, 'Kerennn', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','peminjam','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `nama`, `password`, `email`, `alamat`, `level`) VALUES
(2, 'akhdalna', 'Akhda Layalia Nur Azka', '93f6040a66ba4819e9ba19f1597d7fba', 'akhdalayalia6@gmail.com', 'Pesona Prima Citapen', 'peminjam'),
(7, 'petugas', 'petugas ', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas2@gmail.com', 'Bandung', 'petugas'),
(8, 'admin ', 'Admin Perpustakaan ', '21232f297a57a5a743894a0e4a801fc3', 'adminperpus@gmail.com', 'Bandung', 'admin'),
(10, 'andini', 'Andini Regina Utami', 'b3e0d57ba78cbdc6fcba9c7a467e8fad', 'andiniregina@gmail.com', 'Cigintung', 'peminjam'),
(11, 'Sitikomrh_', 'Siti Komariah', '121a8b582fac5d6112b01bddb4d26624', 'sitykomariah935@gmail.com', 'jl. raya batujajar ', 'peminjam'),
(14, 'dada', 'Akhdaeu', 'd95780e6934e92ea7638ec9952dd024d', 'akhdalayalia6@gmail.com', 'Bandung', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `tb_kategori_buku`
--
ALTER TABLE `tb_kategori_buku`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- Indeks untuk tabel `tb_ulasan_buku`
--
ALTER TABLE `tb_ulasan_buku`
  ADD PRIMARY KEY (`ulasan_id`),
  ADD KEY `buku_id` (`buku_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_buku`
--
ALTER TABLE `tb_kategori_buku`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_ulasan_buku`
--
ALTER TABLE `tb_ulasan_buku`
  MODIFY `ulasan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori_buku` (`kategori_id`);

--
-- Ketidakleluasaan untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`),
  ADD CONSTRAINT `tb_peminjaman_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `tb_buku` (`buku_id`);

--
-- Ketidakleluasaan untuk tabel `tb_ulasan_buku`
--
ALTER TABLE `tb_ulasan_buku`
  ADD CONSTRAINT `tb_ulasan_buku_ibfk_1` FOREIGN KEY (`buku_id`) REFERENCES `tb_buku` (`buku_id`),
  ADD CONSTRAINT `tb_ulasan_buku_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
