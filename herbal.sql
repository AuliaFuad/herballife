-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2020 pada 05.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herbal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `ID_PENYAKIT` int(11) NOT NULL,
  `NAMA_PENYAKIT` varchar(50) DEFAULT NULL,
  `BAHAN` varchar(255) DEFAULT NULL,
  `PENGGUNAAN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`ID_PENYAKIT`, `NAMA_PENYAKIT`, `BAHAN`, `PENGGUNAAN`) VALUES
(1, 'Batuk Pada Anak', 'Satu sendok teh penuh adas, sepotong kulit batang pulasari berukuran 4 cm dan satu siung bawang merah dikupas', 'Semua bahan dicuci dan dilumatkan. Beri satu gelas air dan sepotong gula batu, lalu masak sampai airnya menjadi setengah gelas. Separuh diminum sebelum sarapan dan separuh lagi sebelum tidur. Ulangi beberapa hari'),
(2, 'Sakit Perut', 'Tiga sendok teh adas, lima pucuk daun jambu klutuk dan 10cm kulit batang pulasari', 'Semua bahan dicuci dan dimemarkan. Rebus dengan dua gelas air sampai tinggal satu gelas, lalu saring. Airnya separuh diminum pagi dan separuh lagi diminum malam'),
(3, 'Diare', 'Tiga sendok teh adas, lima pucuk daun jambu klutuk dan 10cm kulit batang pulasari', 'Semua bahan dicuci dan dimemarkan. Rebus dengan dua gelas air sampai tinggal satu gelas, lalu saring. Airnya separuh diminum pagi dan separuh lagi diminum malam'),
(4, 'Mual', 'Tiga sendok teh adas, lima pucuk daun jambu klutuk dan 10cm kulit batang pulasari', 'Semua bahan dicuci dan dimemarkan. Rebus dengan dua gelas air sampai tinggal satu gelas, lalu saring. Airnya separuh diminum pagi dan separuh lagi diminum malam'),
(5, 'Kembung', 'Tiga sendok teh adas, lima pucuk daun jambu klutuk dan 10cm kulit batang pulasari', 'Semua bahan dicuci dan dimemarkan. Rebus dengan dua gelas air sampai tinggal satu gelas, lalu saring. Airnya separuh diminum pagi dan separuh lagi diminum malam'),
(6, 'Wasir', 'Tiga sendok teh penuh adas, satu siung bawang merah dikupas, satu cangkir daun patikan cina, setengah cangkir daun meniran dan satu sendok teh penuh jintan putih', 'Semua bahan dicuci dan direbus dengan satu liter air sampai air tinggal setengah. Agar rasa lebih enak, dapat diberi gula batu. Ramuan disaring dan diminum 4-5 kali sehari. Ulangi selama beberapa hari'),
(7, 'Biduran', 'Dua sendok teh penuh adas, kunhyit berukuran 7cm dikupas, dan dua siung bawang merah dikupas.', 'Semua bahan dicuci, dilumakan, dan diseduh dengan satu seengah gelas air. Air seduhan dibiarkan sebentar dan disaring dengan kain. Ramuan ini diminum 3 kali sehari sebanyak setengah gelas. Ulangi dalam beberapa hari.'),
(8, 'Demam', 'Dua sendok teh penuh adas, 4 cm kulit batang pulasari, dan dua sendok makan madu.', 'Adas dan kulit batang pulasari dicuci, dimemarkan, dan direbus dengan satu gelas air sampai air tinggal setengah gelas, lalu disaring. Air rebusan tadi ditambah madu dan diminum sekaligus.'),
(9, 'Step', 'Empat sendok teh adas, 6 cm kulit batang pulasari, tujuh butir biji anyang-anyang atau rejasa.', 'Semua bahan dicuci bersih, direbus dengan dua gelas air sampai sair tinggal satu gelas, dan disaring. Ramuan diminum satu hari sebanyak satu gelas.'),
(10, 'Kencing Batu', '100 gr alang-alang, setengah genggam daun meniran, dan setengah genggam daun kumis kucing.', 'Bahan direbus dengan 5 gelas air sampai air  tinggal setengah, lalu disaring setelah dingin. Ramuan diminum 3 kali sehari, masing-masing satu gelas sampai batu keluar.'),
(11, 'Radang Paru-paru', '500 gr akar alang-alang, 5 helai daun sembung, 10 khuhntum melati kering, dan sedikit garam.', 'Bahan direbus dengan 3 gelas air sampai air tinggal setengah, lalu disaring. Ramuan diminum 2 kali sehari.'),
(12, 'Asma', '100 gr akar alang-alang, 25 gr kencur, dan 25 gr daun sirih.', 'Bahan direbus dengan 1 liter air sampai air tinggal setengah, disaring, dan diberi satu sendok madu dan satu sendok teh air jeruk nipis. Ramuan diminum sekaligus sebelum tidur.'),
(13, 'Mimisan', '200 gr akar alang-alang', 'Bahan dicuci bersih dan direbus dengan 6 gelas air sampai air tinggal 2 gelas. Disaring setelah dingin . Ramuan diminum 3 kali sehari. Ramuan ini juga dapat digunakan untuk hepatitis.'),
(14, 'Hepatitis', '200 gr akar alang-alang', 'Bahan dicuci bersih dan direbus dengan 6 gelas air sampai air tinggal 2 gelas. Disaring setelah dingin. Ramuan diminum 3 kali sehari.'),
(15, 'Prostat', '500 gr akar alang-alang', 'Bhan direbus dengan 6 gelas sampai air tinggal setengah gelas. Setelah dingin, ramuan diminum 3 kali sehari.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tumbuhan`
--

CREATE TABLE `tumbuhan` (
  `ID_TUMBUHAN` int(11) NOT NULL,
  `NAMA_TUMBUHAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI` text DEFAULT NULL,
  `GAMBAR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tumbuhan`
--

INSERT INTO `tumbuhan` (`ID_TUMBUHAN`, `NAMA_TUMBUHAN`, `DESKRIPSI`, `GAMBAR`) VALUES
(1, 'Adas', 'Adas mengandung minyak astiri, seperti limonia yang berbau harum dan flavonoid. Kandungan flavonoid adas yang berkhasiat menyembuhkan radang. Kandungan minyak astiri dapat membunuh mikroba. Kandungan adas hitam juga berkhasiat karminatif (menghilangkan masuk angin) dan diuretik (melancarkan buang air kecil)', 'adas.jpg'),
(2, 'Alang - Alang', 'Alang - alang mengandung kalium yang tinggi yang berkhasiat untuk menurunkan panas dan melancarkan buang air kecil. Selain itu dapat digunakan untuk menghentikan pendarahan', 'alang.jpg'),
(3, 'Apel', 'Apel mempunyai kandungan senyawa pektin. Selain itu, buah apel mengadnung zat-zat gizi, antara lain kalori sebesar 58 kalori, hidrat arang 14,9 gr, lemak 0,4gr, protein 0,3 gr, kalsium 6 miligram, fosfor 6 miligram, dan air 84,1% dalam setiap 100 gr.', 'apel.jpg'),
(4, 'Asam Jawa', 'Asam jawa mengandung tanin, saponin, seskuiterpen, alkaloid, dan flobatamin.', 'asam.jpg'),
(5, 'Bangle', 'Senyawa kimia yang terkandung umbi rimpang bangle terutama adalah gom, mineral, albuminoid, lemak, getah pahit, sineol, pinen, dan seskuiterpen', 'bangle.jpg'),
(6, 'Bawang Merah', 'Bawang merah mengandung flavonglikosida, saponin dan minyak astirin. Kandungan flavonglikosida berkhasiat anti radang dan antibakteri, sedangkan kandungan saponin berkhasiat ekspeoran (mengencerkan dahak). Bawang merah juga memiliki sejumlah zat lain yang berkhasiar antipertik (menurunkan panas), karminatif (menghangatkan dan memudahkan pengeluaran angin dari perut), diuretik (melanacarkan buang air kecil), mencegah penggumpalan darah, serta menurunkan kolesterol dan kadar gula dalam darahhh. Menurut penelitian terakhir bawang merah juga dapat mencegah kanker karena kandungan sulfurnya. ', 'bawangmerah.jpg'),
(7, 'Bayam', 'Daun bayam terkenal sebagai sayuran sumber zat besi. Selain itu, bayam mengandung antioksidan seperti karotenoid, polifenol, dan flavonoid. Bayam mengandung vitamin A dan C dan mineral kalsium. Setiap 100 gr bayam mengandung 36 kalori.', 'bayam.jpg'),
(8, 'Belimbing Manis', 'Buah belimbing tinggi serat sehingga mengurangi penyerapan lemak, menurunkan kadar kolestrol, dan mencegah takanan darh tinggi. Buah beliming juga dapat memperlancar pencernaan. Analisis fitokimia menunjukan adanya kandungan sapoin, tanin, alkaloid, dan flavonoid. Kandungan vitamin C tinggi sehingga baik untuk mencegah kanker. Kandungan air yang tinggi berkhasiat menurunkan panas, melancarkan buang air kecil dan meluruhkan dahak.', NULL),
(9, 'Belimbing Wuluh', 'Belimbing wuluh berkhasiat sebagai antiradang, karena mengandung flavoid. Skrining fitokimia awal menunjukan adanya kandungan flavoid, saponin dan titerpenoid. Kandungan kalium berkhasiat diuretik(melancarkan buang air kecil) sehingga dapat menurunkan tekanan darah.', NULL),
(10, 'Beluntas', 'Beluntas mengandung alkaloid dan minyak atsiri. Kandungan beluntas bersifat mendinginkan sehingga meluruhkan keringat dan menurunkan suhu tubuh. Selain itu, juga bisa dimanfaatkan untuk menambah nafsu makan pada anak.', NULL),
(11, 'Brokoli', 'Brokoli merupakan sumber vitamin(A, B dan C) dan beberapa mineral(kalsium, kalium dan zat besi). Setiap 100 gr brokoli mengandung 101 kalori.', NULL),
(12, 'Brotowali', 'Brotowali mengandung zat pahit pikroretin dan alkaloid berberin. Zat pahit pikroretin merangsang kerja susunan saraf sehingga alat pernapasan berjalan dengan baik dan menggiatkan pertukaran zat sehingga menurunkan panas. Kandungan alkaloid berberin berguna untuk membunuh bakteri pada luka. Selain itu, brotowali juga bermanfaat untuk menambah nafsu makan dan menurunkan kadar gula.', NULL),
(13, 'Buncis', 'Tanaman buncis merupakan sumber vitamin (A,C, dan B kompleks) dan mineral(Fe, K, dan P). Setiap 100 gr buncir mengandung 35 kalori.', NULL),
(14, 'Cabai Jawa', 'Buah cabai jawa mengandung minyak atsiri, damar piperin, dan piperidin. Dan berguna untuk stimulans.', NULL),
(15, 'Cabai Merah', 'Tanaman cabai merah mengandung senyawa saponin, flavoid, dan polifenol. Cabai banyak mengandung vitamin(A, C, dan B, khususnya niasin) dan mineral(P, Fe dan K). Selain itu, cabai mengandung kapsaisinoid(Kapsaisin), zat warna kapsatin, dan karotenoid', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`ID_PENYAKIT`);

--
-- Indeks untuk tabel `tumbuhan`
--
ALTER TABLE `tumbuhan`
  ADD PRIMARY KEY (`ID_TUMBUHAN`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `ID_PENYAKIT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tumbuhan`
--
ALTER TABLE `tumbuhan`
  MODIFY `ID_TUMBUHAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
