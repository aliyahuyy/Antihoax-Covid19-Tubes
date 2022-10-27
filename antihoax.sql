-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 05:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antihoax`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritafakta`
--

CREATE TABLE `beritafakta` (
  `id` int(11) NOT NULL,
  `namafkt` varchar(255) NOT NULL,
  `emailfkt` varchar(255) NOT NULL,
  `judulfkt` varchar(255) NOT NULL,
  `cpytxtfkt` varchar(2555) NOT NULL,
  `cpylinkfkt` varchar(255) NOT NULL,
  `alasanfkt` varchar(255) NOT NULL,
  `imglinkfkt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beritafakta`
--

INSERT INTO `beritafakta` (`id`, `namafkt`, `emailfkt`, `judulfkt`, `cpytxtfkt`, `cpylinkfkt`, `alasanfkt`, `imglinkfkt`) VALUES
(18, 'danda', 'danda@yahoo.com', '[FAKTA] COVID 19 ADA VARIAN BARU', 'Varian “Omicron” hasil mutasi Covid-19, kini tengah menjadi perhatian serius Organisasi Kesehatan Dunia (WHO). Karena WHO pun masih belum bisa menjelaskan secara detail apakah Omicron memiliki tingkat penularan yang lebih besar ketimbang varian lain.\n\nVarian Omicron ini juga lebih dikenal sebagai varian B.1.1.529. Varian ini pertama kali dilaporkan di Afrika Selatan pada 24 November 2021 dan kini Organisasi Kesehatan Dunia sudah mengklasifikasi Omicron sebagai Varian of Concern (VOC) yang merupakan varian yang harus diwaspadai.\n\n“Keputusan ini didasarkan pada bukti yang diberikan kepada TAG-VE bahwa Omicron memiliki beberapa mutasi yang mungkin berdampak pada perilakunya, misalnya, seberapa mudah menyebar atau tingkat keparahan penyakit yang ditimbulkannya,” demikian penjelasan WHO dikutip dari website covid19.go.id.\n\nTAG-VE merujuk pada The Advice of WHO’s Technical Advisory Group on Virus Evolution atau Kelompok Penasihat Teknis WHO tentang Evolusi Virus. WHO menjelaskan saat ini para peneliti di seluruh dunia sedang melakukan penelitian untuk lebih memahami seluk beluk varian Omicron.\n\nMerangkum dari laman resmi covid19.go.id, berikut tujuh fakta yang perlu diketahui dari varian Omicron yang mulai meresahkan ini, yakni:\n\nVarian baru virus penyebab Covid-19 (SARS-CoV-2) yang dikenal juga sebagai varian B.1.1.529.\nDilaporkan pertama kali dari Afrika Selatan pada 24 November 2021.\nKlasifikasi WHO: Varian yang diwaspadai.\nBukti awal tunjukkan adanya peningkatan risiko infeksi berulang.\nBelum ada bukti varian ini dapat menular lebih cepat atau lebih parah dibandingkan varian lain.\nTes PCR masih bisa mendeteksi varian ini.\nBelum ada bukti kasus di Asia Tenggara, tapi kemungkinan penularan di kawasan ini tinggi.\nVarian Omicron ini juga lebih dikenal sebagai varian B.1.1.529. Varian ini pertama kali dilaporkan di Afrika Selatan pada 24 November 2021 dan kini Organisasi Kesehatan Dunia sudah mengklasifikasi Omicron sebagai Varian of Concern (VOC) yang merupakan varian yang harus diwaspadai.\n\n“Keputusan ini didasarkan pada bukti yang diberikan kepada TAG-VE bahwa Omicron memiliki beberapa mutasi yang mungkin berdampak pada perilakunya, misalnya, seberapa mudah menyebar atau tingkat keparahan penyakit yang ditimbulkannya,” demikian penjelasan WHO dikutip dari website covid19.go.id.\n\nTAG-VE merujuk pada The Advice of WHO’s Technical Advisory Group on Virus Evolution atau Kelompok Penasihat Teknis WHO tentang Evolusi Virus. WHO menjelaskan saat ini para peneliti di seluruh dunia sedang melakukan penelitian untuk lebih m', 'https://dinkes.kalbarprov.go.id/omicron-varian-baru-penyebab-covid-19-yang-dikategorikan-who-sebagai-variant-of-concern-voc/', 'seusai dengan data', 'https://akcdn.detik.net.id/community/media/visual/2020/05/20/78e971b7-d1e8-41cb-9197-5b0eac76fa19_169.jpeg?w=700&q=90'),
(19, 'ggg', 'ggg@yahoo.com', '[FAKTA] Jakarta Tertinggi Kasus Positif Covid-19 Harian per 1 Januari 2022', ' Kasus konfirmasi positif Covid-19 di Indonesia bertambah 274 pada Sabtu (1/1/2022). Sehingga total kumulatif positif Covid-19 menjadi 4.262.994.\n\nBerdasarkan data dari Kementerian Kesehatan yang disampaikan Satgas Covid-19, ada 23 provinsi yang menyumbang kasus Corona hari ini. Sementara 11 provinsi tidak berkontribusi dalam penambahan kasus.Tiga provinsi mencatat penambahan kasus Covid-19 tertinggi, yakni DKI Jakarta 118, Kepulauan Riau 52, dan Jawa Barat 18.\n\nSelain kasus positif, pasien sembuh dari Covid-19 juga bertambah, yakni 165. Dengan demikian, ada 4.114.499 orang yang sudah sembuh dari Covid-19.\n\nKemudian, kasus kematian akibat Covid-19 juga bertambah 2 orang. Sehingga totalnya menjadi 144.096. orang', 'https://www.liputan6.com/news/read/4849054/jakarta-tertinggi-kasus-positif-covid-19-harian-per-1-januari-2022', 'seusai dengan data', 'https://asset.kompas.com/crops/o3Y1Gir6OF97oaPmMaU-k8o_oxA=/36x0:694x439/750x500/data/photo/2020/05/17/5ec1059d974b6.jpg'),
(21, 'ikaaa', 'ppp@rocket.mail', '[FAKTA] Kalimantan Zona Merah', 'Kasus COVID-19 di luar Pulau Jawa dan Bali terus naik. Berdasarkan data Satgas COVID-19 per 9 Agustus 2021 misal, terdapat dua provinsi di luar Jawa-Bali yang masuk 5 penyumbang kasus harian terbanyak, yaitu Kalimantan Timur (1.070 kasus baru) dan Sumatera Utara (1.035 kasus). Selain penambahan kasus harian yang terus naik, jumlah daerah dengan kategori zona merah atau risiko tinggi juga naik. Di Pulau Kalimantan misalnya, terdapat 29 kabupaten/kota yang masuk kategori zona merah berdasarkan data Satgas COVID-19 per 1 Agustus 2021.\n\nBaca selengkapnya di artikel \"Sebaran Zona Merah COVID di Kalimantan: 29 Daerah Berisiko Tinggi\", ', 'https://tirto.id/sebaran-zona-merah-covid-di-kalimantan-29-daerah-berisiko-tinggi-givQ', 'seusai dengan data', 'https://mmc.tirto.id/image/otf/700x0/2020/06/24/antarafoto-tes-usap-covid-19-drive-thru-240620-bay-1_ratio-16x9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `beritahoax`
--

CREATE TABLE `beritahoax` (
  `id` int(11) NOT NULL,
  `namahx` varchar(255) NOT NULL,
  `emailhx` varchar(255) NOT NULL,
  `judulhx` varchar(255) NOT NULL,
  `cpytxthx` varchar(2555) NOT NULL,
  `cpylinkhx` varchar(255) NOT NULL,
  `alasanhx` varchar(255) NOT NULL,
  `imglinkhx` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beritahoax`
--

INSERT INTO `beritahoax` (`id`, `namahx`, `emailhx`, `judulhx`, `cpytxthx`, `cpylinkhx`, `alasanhx`, `imglinkhx`) VALUES
(22, 'hahahahah', 'dandakomang@yahoo.co.id', '[HOAX] Gagal Jantung hingga Strok adalah Gejala Omicron', 'Beredar informasi di media sosial yang menyebut gagal jantung hingga strok adalah gejala  COVID-19 varian Omicron.\n\nFaktanya informasi tersebut hoaks\n\nOrganisasi Kesehatan Dunia (WHO) menyebutkan bahwa gejala COVID-19 varian Omicron di antaranya adalah demam, kelelahan, batuk kering dan keringat malam. Sampai saat ini, tidak ditemukan adanya gejala seperti gagal jantung hingga stroke.', 'https://covid19.go.id/p/hoax-buster/awas-hoaks-gagal-jantung-hingga-strok-adalah-gejala-omicron', 'tidak ada di data', 'https://covid19.go.id/storage/app/uploads/public/61d/053/0e5/61d0530e54d6c726309081.jpeg'),
(23, 'i komang danda', 'formaturrpl@gmail.com', '[HOAX] Pemesanan Online Vaksin Covid-19 Sinopharm Melalui E-Commerce', 'Beredar sebuah tangkapan layar sebuah E-Commerce yang menampilkan pemesanan slot untuk vaksinasi COVID-19 Gotong Royong Sinopharm. Dalam tangkapan layar tersebut disebutkan bahwa pemesanan vaksin Sinopharm ditawarkan dengan deposit sebesar Rp10 ribu untuk reservasi atau membayar penuh sebesar Rp700 ribu.\n\nBerdasarkan penelusuran, melansir dari Jalahoaks yang berkoordinasi dengan Kementerian Kesehatan Republik Indonesia bahwa informasi terkait cara untuk mendapatkan vaksin Sinopharm di salah satu toko online melalui reservasi dengan deposit Rp10 ribu dan mengisi link https://forms.gle/JsF73mynTJgz2LUb8 atau langsung mendaftar dengan pembayaran penuh dengan harga Rp700 ribu adalah tidak benar.\n\nKementerian Kesehatan juga menegaskan bahwa penyelenggaraan vaksinasi COVID-19 hanya ada 2 jalur, yaitu vaksinasi program penanggungjawab Kementerian Kesehatan (jenis vaksin yg digunakan Sinovac, Coronavac, Astrazeneca, dan Pfizer) dan vaksinasi gotong royong penanggungjawab Kementerian BUMN bekerja sama dengan Kadin (vaksin Sinopharm).\n\nVaksinasi Covid-19 tidak diperjualbelikan secara bebas. Bila ada yg pihak menjual bebas, sebaiknya kita bisa membantu dengan melaporkan (report) ke marketplace tempat ditemukan, dan dapat berkoordinasi juga dengan Badan POM selaku pengawas peredaran obat (termasuk vaksin).', 'https://covid19.go.id/p/hoax-buster/salah-pemesanan-online-vaksin-covid-19-sinopharm-melalui-e-commerce', 'tidak ada di data', 'https://covid19.go.id/storage/app/uploads/public/61c/fc0/7b2/61cfc07b235d1749687588.png'),
(24, 'AYAm ihsan', 'mmm@yahoo.com', '[HOAX] Vaksin mRNA pada Pfizer dan Moderna Berbahaya Bagi Anak-Anak', 'Beredar sebuah informasi di internet yang mengklaim bahwa vaksin yang berasal dari teknologi mRNA seperti Vaksin Pfizer dan Moderna berbahaya bagi anak-anak. Informasi yang beredar melalui Rumble.com tersebut menampilkan video seorang peneliti vaksin mRNA, Dr. Robert Malone, menyatakan bahwa vaksin mRNA berbahaya bagi organ tubuh anak-anak yang disebabkan dari lonjakan protein beracun.\n\nSetelah ditelusuri, klaim tersebut salah. Faktanya, pernyataan tersebut dibantah oleh sejumlah dokter ahli lainnya karena tidak mendasar dan tidak ada bukti lonjakan protein yang dihasilkan vaksin mRNA beracun. Melalui AFP, Paul Offit, dokter penyakit menular yang juga Director of the Vaccine Education Center di Rumah Sakit Anak Philadelphia menyatakan bahwa lonjakan protein beracun tersebut salah, tidak ada buktinya pada percobaan hewan dan manusia. Kemudian Peter Murray, Profesor Imunologi Biokimia Institute Max Planck menyatakan bahwa lonjakan protein yang dihasilkan tersebut tidak membahayakan karena hanya bertahan pada otot seseorang beberapa saat setelah disuntikan.\n\nVaksin berbasis mRNA yang digunakan Pfizer dan Moderna ini merupakan teknologi termutakhir. Vaksin ini bekerja dengan memperkenalkan “blueprint” lonjakan protein Virus Corona buatan sehingga dapat dikenali oleh tubuh tanpa memasukkan virus asli yang sudah dilemahkan seperti kebanyakan vaksin tradisional pada umumnya. Terkait klaim tersebut Daborah dari American Academy of Pediatrics mengatakan kepada AFP bahwa video tersebut menyesatkan dan membahayakan orang lain yang tidak ingin divaksin termasuk anak-anak.\n\nDengan demikian klaim Vaksin mRNA pada Pfizer dan Moderna Berbahaya Bagi Anak-Anak merupakan informasi yang tidak benar dan termasuk ke dalam kategori Konten yang Menyesatkan.', 'https://covid19.go.id/p/hoax-buster/salah-vaksin-mrna-pada-pfizer-dan-moderna-berbahaya-bagi-anak-anak', 'tidak ada di data', 'https://covid19.go.id/storage/app/uploads/public/61c/f01/347/61cf013474ada561446719.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `laporhoax`
--

CREATE TABLE `laporhoax` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `cpytxt` text NOT NULL,
  `cpylink` varchar(150) NOT NULL,
  `alasan` text NOT NULL,
  `imglink` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `fullname`, `level`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritafakta`
--
ALTER TABLE `beritafakta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritahoax`
--
ALTER TABLE `beritahoax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporhoax`
--
ALTER TABLE `laporhoax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritafakta`
--
ALTER TABLE `beritafakta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `beritahoax`
--
ALTER TABLE `beritahoax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `laporhoax`
--
ALTER TABLE `laporhoax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
