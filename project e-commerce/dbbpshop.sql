-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 19.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbpshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Apparel'),
(2, 'Music'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(3, '2023-02-24', 'Laura', 'BSD, Tangerang, Jakarta Selatan', '082189589028', 'lauracantik@gmail.com', 1, 'Black Size L', 2),
(4, '2023-02-28', 'Rio', 'Rumah Milenial, PIK 2, Jakarta Utara ', '081392768398', 'Rioadriansyah23@gmail.com', 2, 'with packaging box', 18),
(5, '2023-03-09', 'Mira', 'Jl Kelapa Dua, Depok, Jawa Barat', '082798179305', 'miramyra@gmail.com', 4, 'With Packaging box', 9),
(6, '2023-03-20', 'Nadya', 'Jl. Perumahan Pesona Kayangan Estate No.34 Ke', '085734829108', 'nadyamutias@gmail.com', 2, 'Black Size XL', 1),
(7, '2023-04-21', 'Hani', 'Jl. Kopassus SukataniSukatani, Kec. Tapos, Ko', '081385739278', 'Hanihaho@gmail.com', 10, 'Packaging box anti pecah', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `foto`, `kategori_produk_id`) VALUES
(1, 'AP101', 'Blackpink 2023 Hoodie', 1200000, 1000000, 30, 3, 'Size:S,M,L,XL,2XL Details:Puff Print screenprinted graphic8oz., 50/50 Preshrunk cotton/polyester', '', 1),
(2, 'AP102', 'Blackpink Athletic Sweatpants', 750000, 600000, 26, 4, 'Size:S,M,L,XL,2XLPuff Print screenprinted graphic  Details:  8.5oz., 80/20 cotton/polyester blend fleece, ring spun cotton with 100% cotton face', '', 1),
(3, 'AP103', 'Lovesick Girls Sweatpants', 870000, 700000, 70, 10, 'Size:S,M,L,XL,2XL Black unisex sweatpants featuring Lovesick Girls graphics. ', '', 1),
(4, 'AP104', 'Shut Down Cropped Hoodie', 650000, 500000, 80, 6, 'Size:S,M,L,XL,2XL  SHUT DOWN LOGO CROPPED HOODIE $75.00      1 Ships on or around May 18, 2023 SCREENPRINT FRONT GRAPHIC', '', 1),
(5, 'AP105', 'Born Pink Sweat', 870000, 800000, 55, 2, 'Size:S,M,L,XL,2XL Details:Puff Print screenprinted graphic8oz., 50/50 Preshrunk cotton/polyester', '', 1),
(6, 'AP106', 'Pink Venom T-Shirt', 523000, 460000, 100, 13, 'Size:S,M,L,XL,2XL Details:Puff Print screenprinted graphic8oz., 50/50 Preshrunk cotton/polyester', '', 1),
(7, 'Mg01', 'Born Pink CD', 250000, 200000, 160, 10, 'Tracklist:  1. How You Like That  2. Ice Cream (feat. Selena Gomez)  3. Pretty Savage  4. Bet You Wanna (feat. Cardi B)  5. Lovesick Girls  6. Crazy Over You  7. Love To Hate Me  8. You Never Know  Limited to 4 per customer', '', 2),
(8, 'Mg02', 'Born Pink Vinyl', 564000, 480000, 69, 12, 'gold metal', '', 2),
(9, 'Mg03', 'The Album (Version 1)', 445000, 400000, 200, 20, '\"THE ALBUM\" Includes: a Package Box (4 different versions), Hardcover Photobook (96 pages), CD, Postcard Set (4 unique cards), Credits Sheet, Photocards (2 of 20, random), Postcards (2 of 20, random), Sticker (1 of 4, random), Mounted Photocard.  Limited to 4 per customer', '', 2),
(10, 'Mg04', 'The Album (Version 2)', 445000, 400000, 180, 21, '\"THE ALBUM\" Includes: a Package Box (4 different versions), Hardcover Photobook (96 pages), CD, Postcard Set (4 unique cards), Credits Sheet, Photocards (2 of 20, random), Postcards (2 of 20, random), Sticker (1 of 4, random), Mounted Photocard.  Limited to 4 per customer', '', 2),
(11, 'Mg05', 'The Album (Version 3)', 445000, 400000, 268, 10, '\"THE ALBUM\" Includes: a Package Box (4 different versions), Hardcover Photobook (96 pages), CD, Postcard Set (4 unique cards), Credits Sheet, Photocards (2 of 20, random), Postcards (2 of 20, random), Sticker (1 of 4, random), Mounted Photocard.  Limited to 4 per customer', '', 2),
(12, 'Mg06', 'Born Pink Exclusive Box Set', 740000, 700000, 100, 5, 'Includes: Package Box CD Photobook (80p) Envelope 1 of 4 Random Large Photocards 1 of 4 Random Postcards 2 of 8 Random Instant Films 1 of 8 Random Selfie Photocards Sticker (First Press Only) Folded Poster (First Press Only) 1 of 4 Exclusive Random Large Postcards (Not Pictured)  Dimensions: 6.34\" x 8.46\" x 1.3\"  Limited to 4 per customer', '', 2),
(13, 'AC101', 'Blackpink Bucket Hat', 250000, 219000, 30, 4, 'Embroidered BLACKPINK bucket hat', '', 3),
(14, 'AC102', 'Shut Down Necklace', 379000, 300000, 50, 4, 'Custom silver with enamel necklace', '', 3),
(15, 'AC103', 'Flower Heart Keychain', 110000, 90000, 170, 2, 'White metallic alloy', '', 3),
(16, 'AC104', 'The Album Tote Bag', 200000, 170000, 207, 22, 'Black tote featuring The Album graphic and tracklist.', '', 3),
(17, 'AC105', 'Blackpink Lightstick Keyring', 150000, 100000, 100, 13, 'Lightstick keyring mini', '', 3),
(18, 'AC106', 'Shut Down Hat', 230000, 200000, 298, 10, 'Embroidered dad hat', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_kategori_produk_idx` (`kategori_produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
