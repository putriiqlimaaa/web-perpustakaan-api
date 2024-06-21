-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2024 pada 21.21
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'putri', 'blangpulo', '082256774529', NULL, '2024-06-21 11:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `kode`, `gambar`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `sinopsis`, `kategori`, `stok`, `created_at`, `updated_at`) VALUES
(6, '01', 'agama1.jpg', 'Tibbul Qulub : Terapi Penyakit Hati', 'Ibnu Qayyim Al-jauziyyah', 'Anak Hebat Indonesia', '2024', 'Tibbul Qulub\" dalam konteks ini mungkin merujuk pada upaya atau proses penyembuhan atau terapi untuk \"penyakit hati\" atau gangguan emosi dan spiritual dalam Islam.', 'Agama', '10', '2024-06-09 09:51:41', '2024-06-09 09:51:41'),
(7, '02', 'agama2.jpg', 'Sudah Benarkah Shalatku?', 'Dr. Aam Amirudin, M.Si', 'Khazanah Intelektual', '2023', 'Shalat menempati posisi strategis dalam peta keimanan seorang Muslim. Namun, ternyata tak sedikit di antara kita yang masih melakukan kesalahan dalam doá dan gerakan shalat.', 'Agama', '10', '2024-06-09 10:44:39', '2024-06-09 10:44:39'),
(8, '03', 'agama3.jpg', 'Filsafat Kristen Paduan Untuk Berfilsafat Secara Kristen', 'Iswara Rintis Purwantara', 'Penerbit Andi', '2024', 'Berfilsafat adalah aktivitas yang tidak dapat dielakkan oleh siapapun. Hal itu merupakan aktivitas normal setiap orang, termasukorang - orang kristen yang sudah dewasa.', 'Agama', '15', '2024-06-09 10:46:37', '2024-06-09 10:46:37'),
(9, '04', 'agama4.jpg', 'Sukses Menurut Yesus', 'Dr. Omar Djoeyandy', 'Andi Offset', '2023', 'Sukses menurut yesus apakah hidup yang sukses itu? apa yang harus anda lakukan untuk sukses? Kita mencari sukses dalam karier, keluarga, hubungan, dan kehidupan kerohanian kita, tetapi sukses itu sukar dipahami, fana, dan memabukkan.', 'Agama', '12', '2024-06-09 10:49:44', '2024-06-09 10:49:44'),
(10, '05', 'agama5.jpg', 'Brahmana Budha Di Bali', 'C.Hooykaas', 'Udayana University Press', '2017', 'Brahmā adalah raja surgawi dalam agama Buddha. Dia diambil dari agama-agama India lainnya seperti Hinduisme yang menganggapnya sebagai pelindung ajaran (dharmapala), dan tidak pernah diceritakan dalam kitab-kitab Buddha awal sebagai dewa pencipta.', 'Agama', '5', '2024-06-09 10:52:42', '2024-06-09 10:52:42'),
(11, '06', 'agama6.png', 'Jalut tua Awan Putih : Buku ke 3', 'Thich Nhat Hanh', 'Karaniya', '2015', 'Buku ketiga dari serial buku Jalur Tua Awan Putih. Buku dengan judul Jalur Tua Awan Putih ini menyajikan kehidupan dan ajaran Buddha Gautama.', 'Agama', '10', '2024-06-09 10:53:50', '2024-06-09 10:53:50'),
(12, '07', 'agama7.jpg', 'Satwa Upakaran : Sarana Perlengkapan Upacara Agama Hindu', 'Koamang Budaarsa, DKK', 'Udayana University Press', '2017', 'Penggunaan binatang atau hewan (wewalungan) dalam upacara bukan berarti penyembelihan biasa. Penyembelihan yang dilakukan untuk kepentingan upacara, umumnya didahului dengan berbagai tahapan penyucian.', 'Agama', '10', '2024-06-09 10:55:19', '2024-06-09 10:55:19'),
(13, '08', 'agama8.jpg', 'Menjalani Hidup Salikin', 'Prof. Dr. K.H. Nasaruddin Umar, M.A.', 'Gramedia Widiasarana Indonesia', '2021', 'Buku \"Menjalani Hidup Salikin\" merupakan karya KH Nasaruddin Umar yang dipublikasikan pada 2021 dengan latar belakang pengamatan isu perlunya memberikan batasan terhadap kehidupan yang dijalani.', 'Agama', '15', '2024-06-09 10:56:41', '2024-06-09 10:56:41'),
(14, '09', 'agama9.jpg', 'Logika Keimanan', 'Ahmad Ataka, PhD', 'Turos Pustaka', '2024', 'Kehadiran sains dan teknologi kerap membuat kita merasa mampu menjawab segalanya, termasuk perkara Tuhan. Ketika kemudian agama dianggap bertentangan dengan ilmu pengetahuan, berbagai narasi ateisme baru pun bermunculan.', 'Agama', '10', '2024-06-09 20:33:16', '2024-06-09 20:33:16'),
(15, '10', 'agama10.jpg', 'Rab, Kumohon Jangan Lagi Jauh!', 'Nunung Julita', 'Elex Media Komputindo', '2021', '\'Setiap manusia, pasti pernah mengalami keadaan jauh dari Sang Pencipta. Hal ini yang membuat setiap manusia enggan untuk kembali kepada-Nya. Dengan alasan, Sudah terlanjur jauh! atau Sudah banyak dosa! Padahal, Allah hanya ingin kita terus mengingat-Nya.', 'Agama', '20', '2024-06-09 20:37:38', '2024-06-09 20:37:38'),
(16, '11', 'anak1.jpg', 'Sepeda Ontel Kinanti', 'Iwok Abqary', 'Dar! Mizan', '2009', 'Sepeda merupakan benda kesayangan Kinanti. Bagi Kinanti, sepeda dapat mengantarkannya menggapai cita-cita menuju masa depan yang lebih baik.', 'Cerita Anak', '20', '2024-06-09 20:39:48', '2024-06-09 20:39:48'),
(17, '12', 'anak2.jpg', 'Pinokio', 'Hafez Achada', 'Elex Media Komputindo', '2022', 'Kisah tentang sebuah boneka kayu yang diberi nama Pinokio buatan Kakek Gepeto. Awalnya Pinokio suka berbohong, ketika ia berbohong hidungnya akan semakin bertambah panjang dan terus memanjang.', 'Cerita Anak', '10', '2024-06-09 20:53:42', '2024-06-09 20:53:42'),
(18, '13', 'anak3.jpg', '\'Dongeng animasi 3D : putri salju', 'Kwowon cho', 'Bhuana ilmu populer', '2013', 'Sebuah dongeng tidak hanya mengisahkan tentang manusia saja, tetapi juga tentang binatang, tanaman, dan makhluk lainnya. Pada dasarnya, semua yang ada di sekitar kita ini dapat diangkat menjadi sebuah dongeng yang memiliki makna cerita tersendiri.', 'Cerita Anak', '25', '2024-06-09 20:55:28', '2024-06-09 20:55:28'),
(19, '14', 'anak4.jpg', 'Joko dan jenar jalan - jalan', 'Allegra Sastradipura', 'Saga press', '2018', 'Meski berbeda agama, Joko dan Jenar bersaudara. Mereka suka bermain dan jalan-jalan bersama. Hingga suatu hari, Jenar harus menggunakan kursi roda. Joko pun terus mencari cara agar Jenar bisa jalan-jalan dan main bersamanya lagi.', 'Cerita Anak', '15', '2024-06-09 20:56:56', '2024-06-09 20:56:56'),
(20, '15', 'anak5.jpg', 'Si Utan Dan Kawan - Kawan', 'Okta Abriyanti', 'Noktah', '2019', '\"Utan, apakah ada pemburu lagi?” tanya Rangkong dari atas pohon. Utan berhenti berlari. Dia menoleh ke arah Rangkong. “Iya, Rangkong, pemburu itu datang lagi,” jawab Utan. Apakah si Utan selamat dari kejaran pemburu?', 'Cerita Anak', '25', '2024-06-09 20:58:27', '2024-06-09 20:58:27'),
(21, '16', 'anak6.jpg', 'Malin Kundang', 'Kak Adam', 'Play Ground', '2020', 'Alkisah, ada seorang anak yang berkeinginan keras untuk menjadi saudagar kaya raya. Namun, ketika semuanya telah didapat, ia melupakan ibu yang membesarkannya sedari kecil.', 'Cerita Anak', '15', '2024-06-09 21:01:39', '2024-06-09 21:01:39'),
(22, '17', 'anak7.jpg', 'Komik kkpk : my special sister Product Design', 'Nafisa Mahdiya Rizkyaningdyah', 'Dar! Mizan', '2023', 'Naila memiliki seorang kakak perempuan, Kak Nisa. Meskipun Kak Nisa seorang tunawicara, Mama dan Papa sangat menyayanginya. Namun, Naila merasa kesal dan malu memiliki kakak yang tunawicara.', 'Cerita Anak', '25', '2024-06-09 21:03:02', '2024-06-09 21:03:02'),
(23, '18', 'anak8.jpg', 'Komik matcha : paris, here we come!', 'Sherina Salsabila', 'Noura Kids', '2023', 'Klub MATCHA pergi ke Paris! Yeay! Mereka menginap di hotel besar dan mewah, makan siang sambil belajar memasak bersama chef internasional.', 'Cerita Anak', '10', '2024-06-09 21:04:57', '2024-06-09 21:04:57'),
(24, '19', 'anak9.jpg', 'Lindungi Alam Kita', 'Ilaria Barsoti', 'M&C', '2022', 'Lindungi Alam Kita adalah buku bacaan anak yang sangat direkomendasikan untuk digunakan sebagai bahan belajar anak karangan Eleonora Barsotti. Ensiklopedia bisa jadi bantuan untuk memberikan pengetahuan dan ilmu berdasarkan fakta yang sebenarnya.', 'Cerita Anak', '10', '2024-06-09 21:07:52', '2024-06-09 21:07:52'),
(25, '20', 'anak10.jpg', 'Saat aku merasa sedih', 'Putri P., M.Psi., Psikolog', 'Bentang Pustaka', '2023', 'Pernahkah kamu merasa sedih? Kenapa ya, sedih bisa terjadi? Apa yang harus dilakukan supaya rasa sedih berkurang dan hilang? Kemudian, apa yang bisa kita lakukan kalau melihat teman sedang sedih?', 'Cerita Anak', '25', '2024-06-09 21:09:15', '2024-06-09 21:09:15'),
(26, '21', 'novel1.jpg', 'Ayat - Ayat Cinta', 'Karya Habiburrahman El Shirazy', 'Basamala Repbublika', '2004', 'Novel \"Ayat-Ayat Cinta\" mengisahkan kehidupan mahasiswa Indonesia di negara Mesir yang bernama Fahri. Dia mengambil perkuliahan di Universitas Al Azhar, Kota Kairo. Fahri dikenal sederhana, memiliki akhlak yang baik, dan taat dengan ajaran Islam.', 'Novel', '25', '2024-06-09 21:10:45', '2024-06-09 21:10:45'),
(27, '22', 'novel2.jpg', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', '1980', 'Buku ini bercerita tentang perjalanan seorang tokoh bernama Minke. Minke adalah salah satu anak pribumi yang sekolah di HBS. Pada masa itu, yang dapat masuk ke sekolah HBS adalah orang-orang keturunan Eropa.', 'Novel', '20', '2024-06-09 21:11:58', '2024-06-09 21:11:58'),
(28, '23', 'novel3.jpg', 'Cantik Itu Luka', 'Eka Kurniawan', 'Gramedia Pustaka', '2002', 'Di akhir masa kolonial, seorang perempuan dipaksa menjadi pelacur. Kehidupan itu terus dijalaninya hingga ia memiliki tiga anak gadis yang kesemuanya cantik.', 'Novel', '25', '2024-06-09 21:14:08', '2024-06-09 21:14:08'),
(29, '24', 'novel4.jpg', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005', 'Ceritanya terjadi di desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak.', 'Novel', '20', '2024-06-09 21:17:53', '2024-06-09 21:17:53'),
(30, '25', 'novel5.jpg', 'Laut Bercerita', 'Leila S.Chudori', 'Perpustakaan populer gramedia', '2017', 'Novel ini ditulis dalam sudut pandang ‘Aku’ dari kedua karakter Biru Laut Wibisono dan Asmara Jati. Biru Laut adalah seorang Mahasiswa, yang mempunyai adik bernama Asmara Jati. Baik Laut atau Asmara Jati, keduanya menjadi tokoh utama dalam Novel tersebut.', 'Novel', '25', '2024-06-09 21:19:29', '2024-06-09 21:19:29'),
(31, '26', 'novel6.jpg', 'Negri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka', '2009', 'Alif lahir di pinggir Danau Maninjau dan tidak pernah menginjak tanah di luar ranah Minangkabau. Masa kecilnya adalah berburu durian runtuh di rimba Bukit Barisan, bermain bola di sawah berlumpur dan tentu mandi berkecipak di air biru Danau Maninjau.', 'Novel', '20', '2024-06-09 21:31:04', '2024-06-09 21:31:04'),
(32, '27', 'novel7.jpg', 'Tenggelamnya kapal van der wijck', 'Buya Hamka', 'Balai Pustaka', '1998', 'Zainuddin adalah seorang yatim piatu. Ayahnya yang orang Minang meninggal di pengasingan setelah membunuh seorang kerabatnya karena warisan; ibunya yang non-Minang juga telah meninggal. Ia kini tinggal bersama teman ayahnya Mak Base di Batipuh, Sumatera .', 'Novel', '10', '2024-06-09 21:34:08', '2024-06-09 21:34:08'),
(33, '28', 'novel8.jpg', 'Hafalan Shalat Delisa', 'Tere Liye', 'Republika', '2006', 'Delisa anak perempuan yang bermata hijau, bening dan umurnya baru mencecah lima tahun. Dia hidup dalam keluarganya yang sebegitu, dia cuba menghafal bacaan dalam solat dengan bantuan ibu dan kakaknya.', 'Novel', '15', '2024-06-09 21:35:26', '2024-06-09 21:35:26'),
(34, '29', 'novel9.jpg', 'Gadis Kretek', 'Ratih Kumala', 'Gramedia Pustaka', '2012', 'Pak Raja sekarat. Dalam menanti ajal, ia memanggil satu nama perempuan yang bukan istrinya; Jeng Yah. Tiga anaknya, pewaris Kretek Djagad Raja, dimakan gundah.', 'Novel', '25', '2024-06-09 21:36:49', '2024-06-09 21:36:49'),
(35, '30', 'novel10.jpg', 'Hujan Bulan Juni', 'Sapardi Djoko Damono', 'Gramedia Pustaka Utama', '2015', 'Bagaimana mungkin seseorang memiliki keinginan untuk mengurai kembali benang yang tak terkirakan jumlahnya dalam selembar sapu tangan yang telah ditenunnya sendiri.', 'Novel', '10', '2024-06-09 21:38:30', '2024-06-09 21:38:30'),
(36, '31', 'pelajaran1.jpg', 'Mahir matematika ala bimbel', 'Annisa Eprilia Fauziah, M.Pd', 'Bmedia', '2024', 'Buku Mahir Matematika ala Bimbel SD/MI Kelas 4. 5, & 6 ini disusun dengan tujuan membantu siswa mengatasi kesulitan-kesulitan mengerjakan soal dengan cara pembahasan soal bertahap dan trik ala bimbel.', 'Pelajaran', '20', '2024-06-09 21:40:01', '2024-06-09 21:40:01'),
(37, '32', 'pelajaran2.jpg', 'Pemograman Laravel', 'Ade Rahmat Iskandar, Yono Suryadi', 'Penerbit inAformatika', '2024', 'Buku Pemrograman Laravel ini menjabarkan pembahasan yang sistematis disertai implementasi kode program untuk setiap pembahasan dari mulai tipe data, operator aritmatika, penyeleksian, perulangan pada laravel.', 'Pelajaran', '10', '2024-06-09 21:41:47', '2024-06-09 21:41:47'),
(38, '33', 'pelajaran3.jpg', 'Keanehan dan keajaiban cara kerja otak bagaimana memahami dan meningkatkan kinerjanya', 'Dean Burnet', 'Gemilang', '2024', 'Tahukah Anda bahwa otak kita bekerja dengan aneh dan ganjil? Hal tersebut juga berdampak pada apa yang kita ucapkan, lakukan, maupun alami menjadi tidak logis.', 'Pelajaran', '25', '2024-06-09 21:43:14', '2024-06-09 21:43:14'),
(39, '34', 'pelajaran4.jpg', 'Get Rich Slowly', 'Yodhia Antariksa', 'Checklist', '2023', 'Mencapai kekayaan bukanlah sesuatu yang dapat dicapai dalam semalam. Hal itu memerlukan waktu, kesabaran, dan kerja keras yang berkelanjutan. Terlebih lagi, membangun kekayaan yang berkelanjutan dan sehat melibatkan pengelolaan keuangan yang bijak.', 'Pelajaran', '10', '2024-06-09 21:45:12', '2024-06-09 21:45:12'),
(40, '35', 'pelajaran5.jpg', 'The Book of Complite English Grammar', 'Astria Sekar', 'Anak hebat indonesia', '2023', 'Bahasa Inggris susah? Siapa bilang! Bahasa Inggris justru adalah bahasa paling mudah dipelajari karena susunan katanya begitu sederhana dan nggak jauh beda dengan susunan kata bahasa Indonesia.', 'Pelajaran', '25', '2024-06-09 21:47:01', '2024-06-09 21:47:01'),
(41, '36', 'pelajaran6.jpg', 'Problem Based Learning', 'Arnita Budi Siswanti, & Prof. Richardus Eko Indrajit', 'Penerbit Andi', '2023', 'Problem Based Learning merupakan metode pembelajaran berdasarkan pada prinsip penanganan kasus sebagai titik pangkal untuk mendapatkan dan mengintegrasikan ilmu pengetahuan yang baru.', 'Pelajaran', '25', '2024-06-09 21:48:33', '2024-06-09 21:48:33'),
(42, '37', 'pelajaran7.jpg', 'Pendidikan Sebagai Formasi Jiwa Dan Lembaga', 'Odemus Bei Witono', 'Buku Kompas', '2023', 'Pendidikan sebagai Formasi Jiwa dan Lembaga merupakan buku yang mengungkapkan gagasan seputar pembentukan subjek karya edukatif.', 'Pelajaran', '15', '2024-06-09 21:50:01', '2024-06-09 21:50:01'),
(43, '38', 'pelajaran8.jpg', 'Pendidikan Jasmani Olahraga Dan Kesehatan Untuk SMP/MTs', 'Khairul Hadziq & Annisha Fathni F', 'Yrama Wida', '2024', 'Buku Pendidikan Jasmani, Olahraga, dan Kesehatan Berbasis Profil Pelajar Pancasila SMP/MTs Kelas 8 ini disusun dengan menggunakan Kurikulum Merdeka yang mengusung semangat merdeka belajar.', 'Pelajaran', '20', '2024-06-09 21:51:45', '2024-06-09 21:51:45'),
(44, '39', 'pelajaran9.jpg', 'Administrasi Bisnis', 'Cindy Nathalia, S.E., M.Ak.', 'Anak Hebat Indonesia', '2023', 'Bisnis yang bersinggungan erat dengan kehidupan masyarakat dan berdampak pada kesejahteraan masyarakat dan ekonomi terus berkembang dipacu dengan adanya kemajuan teknologi dan ilmu pengetahuan.', 'Pelajaran', '10', '2024-06-09 21:53:37', '2024-06-09 21:53:37'),
(45, '40', 'pelajaran10.jpg', 'Cara Cepat Menulis Tesis Dan Disertasi Yang Menarik & Berkualitas', 'Nyarwi Ahmad, PhD', 'Nasmedia', '2022', 'DENGAN BERBASIS PADA REFLEKSI ATAS PENGALAMAN YANG PERNAH PENULIS ALAMI DAN JUGA BERDASARKAN BACAAN PENULIS ATAS SEJUMLAH REFERENSI YANG ADA, KEMUDIAN MENYADARI PENTINGNYA SEBUAH BUKU PANDUAN.', 'Pelajaran', '20', '2024-06-09 21:55:06', '2024-06-09 21:55:06'),
(46, '41', 'sejarah1.jpg', 'Sejarah Lengkap Perang Dunia 1914-1918', 'Alfi arifin', 'Sosiality', '2020', 'Perang Dunia I (WW1) adalah kontes gladiator terbesar sepanjang sejarah umat manusia yang melibatkan para hegemon Eropa serta koloninya.', 'Sejarah', '25', '2024-06-09 22:02:49', '2024-06-09 22:02:49'),
(47, '42', 'sejarah2.jpg', 'Buku Sejarah Nusantara(Demalay Archipelago)', 'Alfred Russel Wallace', 'Anak Hebat Indonesia', '2024', 'Buku Sejarah Nusantara (The Malay Archipelago) adalah sebuah karya penjelajah dan ilmuwan terkenal, Alfred Russel Wallace, yang diterbitkan pada tahun 1869.', 'Sejarah', '20', '2024-06-09 22:04:23', '2024-06-09 22:04:23'),
(48, '43', 'sejarah3.jpg', 'Sejarah Dan Tradisi Hukum', 'Dr. Ibnu Sina Chandranegara, S.H., M.H Pfor. Dr. Syaiful Bakhri, S.H., M.H.', 'Sinar Grafika', '2023', 'Sejarah dan tradisi hukum sejak simposium Sejarah Hukum yang diselenggarakan oleh BPHN di Jakarta pada 1-3 April 1975, di berbagai kertas kerja dan literatur yang mendalami bidang sejarah hukum tergolong minim atau langka.', 'Sejarah', '15', '2024-06-09 22:06:20', '2024-06-09 22:06:20'),
(49, '44', 'sejarah4.jpg', 'Walisongo Dan Sejarahnya', 'Arif Irshartadi', 'Anak Hebat Indonesia', '2023', 'Banyak pendapat yang mengatakan tentang kapan Islam masuk ke Indonesia. Ada yang berpendapat bahwa Islam masuk ke Indonesia pada abad ke-7, tetapi ada juga yang mengatakan bahwa Islam masuk ke Indonesia pada abad ke-9 atau abad ke-11.', 'Sejarah', '20', '2024-06-09 22:08:43', '2024-06-09 22:08:43'),
(50, '45', 'sejarah5.jpg', 'Sejarah Perpolitikan Dunia', 'Jonathan Holslag', 'Elex Media Komputindo', '2022', 'Buku ini menyajikan ketertarikan besar pada dampak politik dunia kepada kehidupan rakyat biasa. Selain dampak perubahan ekonomi, sering kali peranglah yang mengakibatkan dampak buruk paling besar.', 'Sejarah', '20', '2024-06-09 22:10:04', '2024-06-09 22:10:04'),
(51, '46', 'sejarah6.jpg', 'Sejarah Dan Kisah Kudeta Majapahit', 'Kamil Hamid Baydawi', 'Arasha Publisher', '2022', 'Berbicara Majapahit, kita langsung terkenang akan kebesaran peradaban yang pernah dicapai oleh kerajaan ini. Pun, seorang patih yang masyhur dengan Sumpah Palapa-nya.', 'Sejarah', '25', '2024-06-09 22:11:24', '2024-06-09 22:11:24'),
(52, '47', 'sejarah7.jpg', 'Aceh Sejarah, Budaya, Dan Tradisi', 'Prof. Dr. Amirul Hadi, MA', 'Yayasan Pustaka Ibor Indonesia', '2010', 'Karya ini merupakan sebuah upaya untuk mengkaji sejarah dan budaya Aceh akademis.', 'Sejarah', '20', '2024-06-09 22:13:35', '2024-06-09 22:13:35'),
(53, '48', 'sejarah8.jpg', 'Sepotong Kisah Dibalik 98', 'Erisca Febriani', 'Falcon Publishing', '2024', 'Tema 98 menurut Erisca Febriani sangat menarik, terutama kalau dibaca oleh generasi sekarang. Karena terlahir sebagai generasi Z yang tidak merasakan langsung peristiwa 98, Erisca ingin melihat sudut pandang lain.', 'Sejarah', '20', '2024-06-09 22:15:52', '2024-06-09 22:15:52'),
(54, '49', 'sejarah9.jpg', 'Sejarah Utama Mesjid Al-aqsha & Al-quds', 'Mahdy Saedi Rezk Kerisem', 'Pustaka Alkautsar', '2021', 'Buku Sejarah dan Keutamaan Masjid Al-Aqsha dan Al-Quds ini adalah ringkasan lengkap yang membahas tentang Palestina, Baitul Maqdis, dan Masjid Al-Aqsha dari tinjauan sejarah, agama, politik, dan keutamaan-keutamaannya.', 'Sejarah', '25', '2024-06-09 22:17:08', '2024-06-09 22:17:08'),
(55, '50', 'sejarah10.jpg', 'Sejarah Agama Manusia', 'Mohammad Zazuli', 'Narasi', '2019', 'Setiap manusia pada hakikatnya secara alamiah mampu menyadari, merasakan, dan merindukan keberadaan Sang Sumber Kehidupan yang meliputi segalanya atau disebut Tuhan.', 'Sejarah', '25', '2024-06-09 22:18:35', '2024-06-09 22:18:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_25_175250_create_anggotas_table', 1),
(6, '2024_04_25_175638_create_peminjamen_table', 1),
(7, '2024_04_25_175751_create_pengembalians_table', 1),
(8, '2024_04_25_175916_create_penguruses_table', 1),
(9, '2024_04_25_180033_create_sign_ups_table', 1),
(10, '2024_04_25_180151_create_user_sign_ups_table', 1),
(11, '2024_05_27_073616_create_bukus_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama_peminjam`, `judul_buku`, `tgl_pinjam`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(13, 'putri', 'Bumi Manusia', '2024-06-10', '2024-06-17', '2024-06-09 22:31:53', '2024-06-09 22:31:53'),
(14, 'putri', 'Ayat - Ayat Cinta', '2024-06-10', '2024-06-10', '2024-06-09 23:54:51', '2024-06-09 23:54:51'),
(18, 'tia', 'Tibbul Qulub : Terapi Penyakit Hati', '2024-06-27', '2024-07-02', '2024-06-21 11:03:51', '2024-06-21 11:46:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama_peminjam`, `judul_buku`, `tgl_kembali`, `denda`, `created_at`, `updated_at`) VALUES
(7, 'putri', 'Brahmana Budha Di Bali', '2024-06-10', '0', '2024-06-09 22:22:16', '2024-06-09 22:22:16'),
(8, 'putri', '\'Dongeng animasi 3D : putri salju', '2024-06-17', '0', '2024-06-09 22:28:00', '2024-06-09 22:28:00'),
(9, 'putri', 'Brahmana Budha Di Bali', '2024-06-11', '0', '2024-06-09 22:32:20', '2024-06-09 22:32:20'),
(10, 'raya', 'Administrasi Bisnis', '2024-06-13', '0', '2024-06-12 13:54:49', '2024-06-12 13:54:49'),
(11, 'tia', 'Tibbul Qulub : Terapi Penyakit Hati', '2024-06-27', '0', '2024-06-21 10:28:44', '2024-06-21 10:28:44'),
(12, 'tia', 'Sudah Benarkah Shalatku?', '2024-06-12', '18000', '2024-06-21 10:29:03', '2024-06-21 10:29:03'),
(13, 'tia', 'Jalut tua Awan Putih : Buku ke 3', '2024-07-03', '0', '2024-06-21 11:32:37', '2024-06-21 11:53:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama`, `jabatan`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'elin', 'admin', 'blangpulo', '082238448932', '2024-06-13 07:11:36', '2024-06-21 11:38:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sign_up`
--

CREATE TABLE `sign_up` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$12$Y.MFUOAalD7AeBihaMkWUO8uwyv1Mu9xdX668qBOoFTShM9YXxCh2', '2024-06-06 13:11:13', '2024-06-06 13:11:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sign_up`
--

CREATE TABLE `user_sign_up` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_sign_up`
--

INSERT INTO `user_sign_up` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'putri', 'putri@gmail.com', '$2y$12$1FdzBi0XHqg9HBPm3ETHvuXp8jhLCQ3EJ.PNmH7gHcMvJvl.BS3dK', '2024-06-15 23:42:31', '2024-06-15 23:42:31'),
(2, 'tia', 'tia@gmail.com', '$2y$12$WDYP8gIUJ8TOvL2g1SKf.ehc7ikgmybFy8fg9Njjfl31b12MqDoia', '2024-06-21 10:20:46', '2024-06-21 10:20:46'),
(3, 'lili', 'lili@gmail.com', '$2y$12$WLKrX/TU1ESzOJLIR9jDAuUU13jocqIvRLqYmR.9mWFHdm320m2mK', '2024-06-21 11:34:42', '2024-06-21 11:34:42'),
(4, 'aulia', 'aulia@gmail.com', '$2y$12$DdjgCHSPqZbYZrQLiGDhFel14JEvHuXfZ5QgyEs6fez1NXdE7tHCy', '2024-06-21 11:37:04', '2024-06-21 11:37:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sign_up_email_unique` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_sign_up`
--
ALTER TABLE `user_sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_sign_up_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_sign_up`
--
ALTER TABLE `user_sign_up`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
