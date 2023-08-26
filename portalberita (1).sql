-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 16.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalberita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(5, 'Android'),
(6, 'Apple'),
(7, 'Populer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `comment` text NOT NULL,
  `date_created` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `id_news`, `name`, `email`, `comment`, `date_created`) VALUES
(3, 3, 'Restu Prayudha', 'yudariau1@gmail.com', 'Sejauh ini, dengan ada nya website ini sangat bermanfaat bagi saya dalam mendalami ilmu pengetahun teknologi\r\n', '1688742948'),
(4, 3, 'Genta Sihera', 'gentasihera@gmail.com', 'sebelumnya saya sangat ragu untuk membeli hp ini, tapi setelah saya meliha content dari web techno yang membahasa tentang hp ini saya jadi tidak ragu lagi untuk membelinya, karena saya sudah sepenuhnya percaya dengan web techno yang selalu memberikan content/berita yang jujur', '1688744782'),
(5, 3, 'Genta Sihera', 'admin@dcreator.com', 'tes\r\n', '1688809546');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_activity`
--

CREATE TABLE `log_activity` (
  `log_user` int(11) NOT NULL,
  `log_ip` varchar(20) NOT NULL,
  `log_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_activity`
--

INSERT INTO `log_activity` (`log_user`, `log_ip`, `log_time`) VALUES
(1, '::1', 1688324815),
(1, '::1', 1688348902),
(1, '::1', 1688403125),
(1, '::1', 1688406722),
(1, '::1', 1688508064),
(1, '::1', 1688540801),
(1, '::1', 1688556346),
(1, '::1', 1688745534),
(1, '::1', 1688824834);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `id_category`, `id_user`, `title`, `description`, `image`, `date_created`) VALUES
(3, 7, 1, 'Samsung Galaxy A12', '<h2><strong>Upgrade fotografi ponsel Anda dengan Quad Camera</strong></h2><p>Abadikan momen berkesan berdetail jernih dengan 48MP Main Camera. Perluas sudut pandang dengan Ultra Wide Camera. Atur fokus dengan Depth Camera, atau sorot dari dekat dengan Macro Camera.</p><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><th>NETWORK</th><td><a href=\"https://www.gsmarena.com/network-bands.php3\">Technology</a></td><td><a href=\"https://www.gsmarena.com/samsung_galaxy_a12-10604.php#\">GSM / HSPA / LTE</a></td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td rowspan=\"2\">LAUNCH</td><td><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Announced</a></td><td>2020, November 24</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Status</a></td><td>Available. Released 2020, December 21</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td rowspan=\"4\">BODY</td><td><a href=\"https://www.gsmarena.com/samsung_galaxy_a12-10604.php#\">Dimensions</a></td><td>164 x 75.8 x 8.9 mm (6.46 x 2.98 x 0.35 in)</td></tr><tr><td><a href=\"https://www.gsmarena.com/samsung_galaxy_a12-10604.php#\">Weight</a></td><td>205 g (7.23 oz)</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=build\">Build</a></td><td>Glass front, plastic back, plastic frame</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=sim\">SIM</a></td><td>Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td rowspan=\"3\">DISPLAY</td><td><a href=\"https://www.gsmarena.com/glossary.php3?term=display-type\">Type</a></td><td>PLS LCD</td></tr><tr><td><a href=\"https://www.gsmarena.com/samsung_galaxy_a12-10604.php#\">Size</a></td><td>6.5 inches, 102.0 cm2 (~82.1% screen-to-body ratio)</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=resolution\">Resolution</a></td><td>720 x 1600 pixels, 20:9 ratio (~270 ppi density)</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td rowspan=\"4\">PLATFORM</td><td><a href=\"https://www.gsmarena.com/glossary.php3?term=os\">OS</a></td><td>Android 10, upgradable to Android 11, One UI 3.1</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=chipset\">Chipset</a></td><td>Mediatek MT6765 Helio P35 (12nm)</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=cpu\">CPU</a></td><td>Octa-core (4x2.35 GHz Cortex-A53 &amp; 4x1.8 GHz Cortex-A53)</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=gpu\">GPU</a></td><td>PowerVR GE8320</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td rowspan=\"3\">MEMORY</td><td><a href=\"https://www.gsmarena.com/glossary.php3?term=memory-card-slot\">Card slot</a></td><td>microSDXC (dedicated slot)</td></tr><tr><td><a href=\"https://www.gsmarena.com/glossary.php3?term=dynamic-memory\">Internal</a></td><td>32GB 2GB RAM, 32GB 3GB RAM, 64GB 4GB RAM, 128GB 3GB RAM, 128GB 4GB RAM, 128GB 6GB RAM</td></tr><tr><td>&nbsp;</td><td>eMMC 5.1</td></tr></tbody></table></figure>', 'samsung.jpeg', '1688540937');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `is_active`, `date_created`) VALUES
(1, 'administrator', 'admin', '$2y$10$k2WOBY8/JiwExb9pdpIJk.kREz6b49a627TlKelq1q1JNXHzNIoR6', 1, '1111111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
