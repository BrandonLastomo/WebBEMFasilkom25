-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 08:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemoriginal`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `nama`, `bulan`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'Keputrian', 'Juni 2022', '2022-06-17', '2022-06-14 07:29:02', '2022-06-14 07:29:02'),
(4, 'Inaugurasi', 'November', '2022-11-11', '2022-08-28 21:10:22', '2022-08-28 21:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_proposal` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `id_user`, `id_proposal`, `nama`, `npm`, `prodi`, `tahun_masuk`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 0, 'fenny', '19081', 'Teknik Informatika', '2019', 'Anggota', '2021-07-09 16:13:00', '2021-07-09 16:13:00'),
(2, 6, 1, 'fenny', '19081', 'S1 Teknik Informatika', '2019', 'Anggota', '2021-07-14 13:03:43', '2021-07-14 13:03:43'),
(3, 4, 2, 'bijan', '1910631170099', 'S1 Teknik Informatika', '2019', 'Ketua Kelompok', '2021-07-14 16:44:08', '2021-07-14 16:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `bemitory`
--

CREATE TABLE `bemitory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_barang` enum('Tersedia','Kosong') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tersedia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bemitory`
--

INSERT INTO `bemitory` (`id`, `kode_barang`, `barang`, `jumlah`, `status_barang`, `created_at`, `updated_at`) VALUES
(17, 'LPTP01', 'Laptop ACER Core i101', 5, 'Kosong', '2022-08-19 13:59:02', '2022-08-19 14:13:47'),
(19, 'tm09', 'Laptop ACER Core i111', 4, 'Kosong', '2022-08-23 04:37:05', '2022-08-23 04:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `path`, `konten`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Klaster Unsika, Kampus Ditutup dan Istri-Anak Dosen Tertular', 'klaster-unsika-kampus-ditutup-dan-istri-anak-dosen-tertular', 'uploads/berita/images/klaster-unsika-kampus-ditutup-dan-istri-anak-dosen-tertular_1625772951.jpeg', '<p><strong>Karawang</strong> - Penularan COVID-19 di Universitas \r\nSingaperbangsa Karawang (Unsika) merembet ke keluarga dosen. Salah satu \r\ndosen Unsika terindikasi menularkan virus tersebut kepada istri dan \r\nanaknya di rumah setelah ikut rapat kerja rektorat di Bali.</p><p>\"Istri\r\n dan anak saya dinyatakan positif karena tertular oleh saya setelah saya\r\n pulang dari raker di Bali. Dalam raker itu terjadi penularan Corona,\" \r\nkata Eka Yusup, dosen Unsika, saat dihubungi melalui telepon, Kamis \r\n(24/12/2020).</p><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/berita-jawa-barat/d-5308195/pria-kencani-artis-ta-sudah-diperiksa-polisi-siapa-dia\">Pria Kencani Artis TA Sudah Diperiksa Polisi, Siapa Dia?</a></div></td></tr></tbody></table>\r\n\r\n<div class=\"parallax_detail parallaxB\" style=\"margin:0px auto 20px auto;position: relative;\">\r\n<div class=\"parallax_abs\" style=\"width:430px;\">\r\n<div class=\"parallax_fix\" style=\"width:430px;\">\r\n<div class=\"parallax_ads\" style=\"width:430px;\">\r\n\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>Saat ini, Eka dan keluarganya tengah menjalani isolasi mandiri di \r\nrumahnya. \"Tidak ada opsi raker secara daring. Rektorat memutuskan ke \r\nBali. Awalnya raker direncanakan ke Malang, tapi karena Malang masuk \r\nzona merah jadi dialihkan ke Bali,\" tutur Eka.</p><p>Juru Bicara Satgas \r\nPenanggulangan COVID-19 Karawang Fitra Hergyana mengungkapkan penularan \r\nCorona terjadi pada sejumlah pejabat Unsika. Fitra menuturkan penularan \r\nterjadi di empat acara.</p><p>\"Setelah\r\n dilacak, penularan terjadi dalam kegiatan raker di Bali, Bandung, \r\npelantikan jabatan fungsional dan Penutupan KKN mahasiswa di Hotel \r\nResinda,\" kata Fitra.</p><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/berita-jawa-barat/d-5307990/wisatawan-antre-tes-rapid-antigen-di-rest-area-km-57-tol-cikampek\">Wisatawan Antre Tes Rapid Antigen di Rest Area Km 57 Tol Cikampek</a></div></td></tr></tbody></table><p>Menurut\r\n dia, saat ini kampus Unsika telah ditutup. Sebab, ditemukan pasien \r\npositif. Rinciannya, 7 pejabat Unsika termasuk Rektor dan sejumlah \r\ndekan, dan 18 orang dosen.</p><p>\"Kami masih melakukan <em>tracking</em> dan melacak orang-orang terkait,\" kata Fitra. </p>', '2021-05-30', '2021-07-07 15:11:52', '2021-07-08 19:35:51'),
(2, 'Diprotes Mahasiswa, Unsika Bolehkan Uang Pangkal Dicicil', 'diprotes-mahasiswa-unsika-bolehkan-uang-pangkal-dicicil', 'uploads/berita/images/diprotes-mahasiswa-unsika-bolehkan-uang-pangkal-dicicil_1625772930.jpeg', '<p><strong>Karawang</strong> - Ratusan mahasiswa Universitas \r\nSingaperbangsa Karawang (Unsika) berunjuk rasa menuntut kebijakan kampus\r\n soal Uang Kuliah Tunggal (UKT). Berdemo di depan kampus, mahasiswa \r\naktif ini meminta relaksasi di tengah pandemi.</p><p>\"Mahasiswa \r\ndiwajibkan membayar UKT semester berjalan. Kalau tidak membayar tak bisa\r\n ikut kuliah semester berjalan,\" kata Presiden Mahasiswa Unsika Teguh \r\nFebriyana kepada wartawan, Jumat (11/9/2020).</p><p>Teguh menuturkan, \r\nPresma juga menyoroti soal Iuran Pengembangan Institusi (IPI) kepada \r\ncalon mahasiswa yang mendaftar lewat jalur mandiri. Menurut Teguh, iuran\r\n pengembangan yang dipatok Unsika terlalu tinggi.</p>\r\n\r\n<div class=\"parallax_detail parallaxB\" style=\"margin:0px auto 20px auto;position: relative;\">\r\n<div class=\"parallax_abs\" style=\"width:430px;\">\r\n<div class=\"parallax_fix\" style=\"width:430px;\">\r\n<div class=\"parallax_ads\" style=\"width:430px;\">\r\n\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>\"Itu dinilai memberatkan karena ada banyak calon mahasiswa yang sampai batal mendaftar,\" kata Teguh.</p><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/berita-jawa-barat/d-5167702/unsikakenapasih-sempat-puncaki-twitter-ada-apa\">#UNSIKAKENAPASIH Sempat Puncaki Twitter, Ada Apa?</a></div></td></tr></tbody></table><p>Rektor\r\n Unsika, Sri Mulyani menuturkan, kebijakan IPI telah melalui telaah yang\r\n ketat. Sebab, Unsika mengukur kemampuan orang tua calon mahasiswa yang \r\nmendaftar lewat jalur mandiri.</p><div class=\"bb_iawr\" id=\"bb-iawr-detik_instream_playout-1625125761299446\" style=\"position: relative; display: block; overflow: hidden; font-family: arial, helvetica, sans-serif; width: 100%; height: 0px; opacity: 0.01;\"><div class=\"bb-media bb_wrapper bb-muted bb-pendingplay bb-phase-pre bb-mode-commercial bb-state-loading\" id=\"bb-wr-detik_instream_playout-1625125761299446\" style=\"position: relative; background-color: rgb(255, 255, 255); width: 100%; cursor: default; margin: 0px auto; height: 291px;\" itemscope=\"\" itemprop=\"video\" itemtype=\"https://schema.org/VideoObject\" data-sid=\"ItDNkjFx4GxL\" data-currenttime=\"0\" data-duration=\"124.737596\" data-isready=\"true\" data-autoplaynextremainingtime=\"0\"><div class=\"bb-layer bb-content-layer\"><div class=\"bb-fitme bb-head-layer\" style=\"z-index: 0; width: 518px; height: 292px; position: absolute; left: 0px; top: -1px;\"><div class=\"bb-head bb-head-html5-video\" style=\"position:absolute; width:100%; height:100%; top:0; left:0;\" data-usemediamanager=\"true\" data-retryonplayfailed=\"false\" data-shouldplayinline=\"false\"><video muted=\"muted\" preload=\"metadata\" aria-hidden=\"true\" style=\"max-width: none; max-height: none; display: block; top: 0px; left: 0px; position: absolute; background-color: rgb(255, 255, 255); object-fit: fill; visibility: hidden; transform: scale(1); transform-origin: 0px 0px 0px; height: 100%; width: 100%;\" src=\"https://d1e5i7r5tru8zd.cloudfront.net/adsparc/media/2021/07/01/asset-4333443-1625125468623714.mp4\" controls=\"\"></video></div></div><div class=\"bb-layer bb-subtitle-layer\" style=\"z-index:0;\"><div class=\"bb-subtitledisplay\" style=\"position: absolute; pointer-events: none !important; left: 10%; bottom: 5px; width: 80%; text-align: center; font-family: Helvetica, sans-serif; font-weight: bold; color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) -1.5px -1.5px 0px, rgb(0, 0, 0) 0px -1.5px 0px, rgb(0, 0, 0) 1.5px -1.5px 0px, rgb(0, 0, 0) 1.5px 0px 0px, rgb(0, 0, 0) 1.5px 1.5px 0px, rgb(0, 0, 0) 0px 1.5px 0px, rgb(0, 0, 0) -1.5px 1.5px 0px, rgb(0, 0, 0) -1.5px 0px 0px; transition: bottom 0.25s ease 0s; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; line-height: initial; display: inline-block; font-size: 11.64px;\" aria-hidden=\"true\"><span style=\"color: rgb(255, 255, 255); background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; margin: 5px auto 0px; padding: 0px 5px; display: inline-block;\"></span>  </div></div></div><div class=\"bb-layer bb-skin-layer bb-muted bb-pendingplay bb-phase-pre bb-mode-commercial bb-state-loading\"><div id=\"bb-skin-h460glgls6\" class=\"bb-container\">   </div></div></div></div><div class=\"bb_iawr\" id=\"bb-iawr-detik_instream_playout-1625125761299446\" style=\"position: relative; display: block; overflow: hidden; font-family: arial, helvetica, sans-serif; width: 100%; height: 0px; opacity: 0.01;\"><img src=\"https://sps.springserve.com/i?clid=spm&paid=sps&dvid=v&avid=Adsparc_Player&plid={{DEMAND_TAG_ID}}&caid=detik.com_AdSparc&kv1={{SIZE}}&kv2=detik.com&publisherId=detik.com_AdSparc&kv4={{IP}}&siteId={{SUPPLY_TAG_ID}}&priceBid={{BID_PRICE}}&kv3={{UUID}}&kv9={{DURATION}}&kv11={{CACHEBUSTER}}&kv13={{CONTENT_ID}}&kv15={{COUNTRY}}&kv16={{LAT}}&kv17={{LON}}&kv18={{APP_BUNDLE}}&kv19={{DEVICE_ID}}&kv25={{APP_NAME}}&kv27={{USER_AGENT}}&kv28={{DEVICE_MODEL}}_{{DEVICE_MAKE}}&kv29=[ERRORCODE]&kv30=[CONTENTPLAYHEAD]_[ADPLAYHEAD]&kv33=[ASSETURI]&kv34=[VASTVERSIONS]&kv35=[ifa_type]&kv36=[IFA]&kv37=[CLIENTUA]&kv38=[SERVERUA]&kv39=[DEVICEUA]&kv40=[DEVICEIP]&kv41=[LATLONG]&kv42=[DOMAIN]&kv43=[PAGEURL]&kv44=[PLAYERSTATE]&kv45=[PLAYERSIZE]&kv46=[REGULATIONS]&kv47=[ADTYPE]&kv48=[TRANSACTIONID]&kv49=[BREAKPOSITION]&kv50=[APPNAME]&kv51=[PLACEMENTTYPE]&kv54=[LAT]&kv24=Desktop_Video\"></div><p>\"Kita\r\n telaah rekening koran, slip gaji dan dokumen lainnya. Alhasil kemampuan\r\n ekonomi orang tua calon mahasiswa bisa kita ukur,\" ungkap Sri saat \r\njumpa pers.</p>', '2021-06-08', '2021-07-07 15:24:36', '2021-07-08 19:35:30'),
(3, '#UNSIKAKENAPASIH Sempat Puncaki Twitter, Ada Apa?', 'unsikakenapasih-sempat-puncaki-twitter-ada-apa', 'uploads/berita/images/unsikakenapasih-sempat-puncaki-twitter-ada-apa_1625772841.jpeg', '<p><strong>Karawang</strong> - Universitas Singaperbangsa Karawang mendapat sorotan pengguna twitter. Pantauan <strong>detikcom</strong>,\r\n hingga Kamis siang (10/9). Tagar #UNSIKAKENAPASIH menggema. Hingga \r\npukul 15.20 WIB, ada 7.659 cuitan warganet yang menggunakan tagar \r\n#UNSIKAKENAPASIH.</p><p>Protes di jagat maya itu tak lepas dari \r\npersoalan uang pangkal kuliah. Diketahui, Unsika membuka jalur mandiri \r\npada penerimaan mahasiswa baru 2020. Di jalur itu, Unsika mematok biaya \r\npengembangan institusi mulai dari belasan hingga puluhan juta rupiah, \r\ntergantung jurusannya.</p><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/berita-jawa-barat/d-5167682/penampakan-gerobak-dan-motor-yang-tertabrak-tergilas-tank-tni\">Penampakan Gerobak dan Motor yang Tertabrak-Tergilas Tank TNI</a></div></td></tr></tbody></table><p>Namun\r\n dalam prosesnya, banyak calon mahasiswa yang mencabut berkas \r\npendaftaran di jalur mandiri. Seperti yang dilakukan Disya Nurul Ariza \r\n(19). Gadis asal Kabupaten Bekasi itu harus mengubur keinginannya masuk \r\nke jurusan Agroteknologi, Fakultas Pertanian Unsika. Sebab, ia \r\nmembatalkan diri daftar melalui jalur mandiri.</p><div style=\"width: 100%; margin: 0px auto; max-width: 640px; position: relative;\"><div id=\"aniBox\" style=\"overflow: hidden; transition: height 1s ease 0s; opacity: 0; width: 518px; height: 1px;\"><div id=\"aniplayer_selectJS43782685\" style=\"bottom: 0px; left: 0px; transform-origin: left bottom 0px; z-index: 10000001; position: fixed; transform: scale(0.65); visibility: hidden;\"><div id=\"aniplayer_selectJS43782685gui\"><div id=\"av-container\" class=\" av-desktop hide-controls\" style=\"width: 518px; height: 291px;\"><div id=\"av-inner\"><div id=\"slot\"><div id=\"videoslot\" class=\"loaded\" style=\"width: 518px; height: 291px;\"><div id=\"AVplayer0\" style=\"position: absolute; z-index: 1; width: 518px; height: 291px;\"><div style=\"width: 100%; height: 100%;\"><video style=\"display: block; width: 100%; height: 100% !important; object-fit: contain; position: absolute; top: 0px;\" controls=\"\"></video></div></div></div></div></div></div></div></div></div></div>\r\n\r\n<div class=\"parallax_detail parallaxB\" style=\"margin:0px auto 20px auto;position: relative;\">\r\n<div class=\"parallax_abs\" style=\"width:430px;\">\r\n<div class=\"parallax_fix\" style=\"width:430px;\">\r\n<div class=\"parallax_ads\" style=\"width:430px;\">\r\n\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>\"Karena terlalu mahal dan orang tua saya tak sanggup membayar uang \r\npengembangan institusi,\" kata Disya saat dihubungi detikcom via telepon,\r\n Kamis (10/9/2020).</p><p>Disya mengatakan sebetulnya orang tuanya tahu \r\njika mendaftar lewat jalur mandiri, harus membayarkan uang minimal Rp 35\r\n juta. Namun, kata Disya, ia dan orang tuanya mencoba bertanya ke \r\nkampus, barangkali ada kebijakan membayar uang pangkal secara dicicil \r\natau meminta keringanan.</p><p>\"Namun pihak kampus bilang tak ada keringanan biaya, bahkan uang Rp35 juta itu minimal,\" kata Disya.</p><p>Mendengar\r\n kabar itu, Disya dan dua orang tuanya pulang ke rumah dengan kecewa. \r\nSaat ini, Disya mengaku sedang mencari kampus lain yang biaya kuliahnya \r\nterjangkau. \"Saya mendaftar ke Unsika karena tak ada kampus negeri di \r\nKabupaten Bekasi,\" kata Disya yang menggemari ilmu eksak.</p><p>Hal yang\r\n sama dialami oleh Wahid Supriyanto (34), ia mengurusi adik iparnya yang\r\n mendaftar ke jurusan Teknik Lingkungan, Fakultas Teknik Unsika melalui \r\njalur mandiri. Untuk masuk di jalur itu, calon mahasiswa harus membayar \r\nminimal Rp 20 juta.</p><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/berita-jawa-barat/d-5167561/jakarta-tarik-rem-darurat-dprd-jabar-full-psbb-di-bodebek-belum-perlu\">Jakarta Tarik Rem Darurat, DPRD Jabar: Full PSBB di Bodebek Belum Perlu</a></div></td></tr></tbody></table><p>Mendengar\r\n hal itu, Wahid mendatangi kampus untuk mencoba bernegosiasi soal uang \r\npengembangan institusi. \"Kami meminta opsi untuk mencicil uang \r\npengembangan institusi. Kami usul supaya bisa mencicil setiap usai panen\r\n karena orang tua kami petani,\" kata Wahid saat ditemui <strong>detikcom</strong>, Kamis (10/9/2020).</p><p>Namun\r\n rupanya, usulan Wahid belum direspons pihak kampus. Ia pun sedang \r\nberfikir untuk mencabut berkas pendaftaran jika tak bisa dicicil. \"Kalau\r\n tidak bisa dicicil, kami mungkin mencabut berkas pendaftaran dan \r\nmemilih kampus lain. Karena sebagai petani, penghasilan orang tua kami \r\nsetiap panen atau enam bulan sekali,\" kata Wahid.</p>', '2021-06-27', '2021-07-07 15:27:08', '2021-07-08 19:34:01'),
(4, 'Kesaksian Horor Mahasiswa Unsika yang Selamat dari Gua Lele', 'kesaksian-horor-mahasiswa-unsika-yang-selamat-dari-gua-lele', 'uploads/berita/images/kesaksian-horor-mahasiswa-unsika-yang-selamat-dari-gua-lele_1625772909.jpeg', '<p><strong>Karawang</strong> - Nur Ali (20), mahasiswa Universitas \r\nSingaperbangsa Karawang (Unsika), menjadi salahsatu korban selamat \r\nbanjir bandang Gua Lele. Ia menceritakan detik-detik mencekam disapu air\r\n dari segala penjuru saat berada dalam gua.<br><br>Saat musibah terjadi \r\nMinggu (22/12/2019) lalu, Ali dan tujuh temannya masuk dalam gua. \r\nSementara tujuh teman lainnya berada di luar gua.<br><br>Ali dan dua \r\nkawannya ditunjuk sebagai penghubung antara tim darat dengan tim yang \r\nturun ke dasar gua. \"Saya standby di pitch satu, kedalaman 15 meter. \r\nBertugas menghubungkan informasi antara tim darat dengan tim eksplor \r\nyang turun jauh ke bawah. Makanya saya pegang radio HT,\" kata Ali.<br><br></p>\r\n\r\n<div class=\"parallax_detail parallaxB\" style=\"margin:0px auto 20px auto;position: relative;\">\r\n<div class=\"parallax_abs\" style=\"width:430px;\">\r\n<div class=\"parallax_fix\" style=\"width:430px;\">\r\n<div class=\"parallax_ads\" style=\"width:430px;\">\r\n\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\nSementara itu, lima temannya sesama mahasiswa Unsika turun ke gua dengan\r\n kedalaman 30 meter. Kelimanya hendak menuju ruangan besar disebut aula \r\ngua. Di aula itu mengalir sungai bawah tanah. Untuk menuju ke sana, \r\nperlu melewati lorong kecil dan menyelam melewati cekungan dangkal.<br><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/read/2019/12/24/153558/4834560/486/gua-tempat-3-mahasiswa-unsika-tewas-habitat-lele-berjalan\">Gua Tempat 3 Mahasiswa Unsika Tewas Habitat Lele Berjalan</a></div></td></tr></tbody></table><br>Namun\r\n baru sekira setengah jam mereka sampai, gerimis turun. \"Saya harus \r\nsegera mengabari lima kawan yang turun ke dasar gua,\" kata Ali \r\nmenceritakan apa yang ada di pikirannya saat itu.<br><br>Namun gerimis \r\nseketika berubah menjadi hujan lebat. Ali memegang tali dengan erat. Air\r\n deras muncul dari atas. Dari bawah terdengar suara air deras. Amukan \r\nair sungai bawah tanah. Lubang gua yang gelap dan lembab seperti berubah\r\n menjadi penuh air.<br> <br>\"Airnya deras sekali dari atas kepala. Kita seperti berada di dalam pipa air,\" kata mahasiswa asal Bekasi itu.<br><br>Setelah itu, kejadiannya serba cepat. Ali yang sudah memberi kabar bahaya pada lima kawannya sangat khawatir. <br>Ali\r\n mengaku tegang tak bisa membayangkan nasib lima rekannya di bawah sana.\r\n Saking derasnya hantaman air, Ali mengaku hanya bisa diam tak beranjak \r\ndari posisinya.<br><br>\"Ke atas susah, ke bawah susah. Jadi saya putuskan menunggu saja sampai reda,\" tutur dia.<br><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/read/2019/12/23/094840/4832844/486/detik-detik-mencekam-saat-tiga-mahasiswa-unsika-tewas-dalam-gua-lele\">Detik-detik Mencekam Saat Tiga Mahasiswa Unsika Tewas Dalam Gua Lele</a></div></td></tr></tbody></table><br>Setelah\r\n tiga puluh menit dihantam air, suara air pun perlahan reda. Sadar jika \r\nbanjir mulai surut, ia memutuskan turun ke bawah untuk mengecek kondisi \r\nlima rekannya.<br><br>Di kedalaman 20 meter, ia menemukan Evo Rahmat \r\nYulistiadi (21) mahasiswa Unsika asal Solok, Sumatera Barat. Tak lama \r\nkemudian disusul Dimas Rizki kurniawan (18) mahasiswa Unsika Karawang \r\nasal Jakarta. <br><br>\"Mereka nampak kelelahan dan kepayahan,\" kenang Ali. <br><br>Adapun\r\n Erisya Rifania (20) mahasiswi Unsika asal Bogor, Alief Rindu Arrafah \r\n(18) mahasiswa Unsika asal Kabupaten Bogor, dan Ainan Fatmatuzzaroh (19)\r\n mahasiswa Unsika asal Kabupaten Banjarnegara tak terlihat. <br><br>\"Saat\r\n dihantam gelombang besar dari sungai bawah tanah, kelimanya berpegangan\r\n tangan namun derasnya air membuat tangan mereka terlepas. Alhasil lima \r\norang tercerai berai.<br>Erisya, Alief dan Ainan hilang entah ke mana,\" ungkap Ali. <br><table class=\"linksisip\"><tbody><tr><td><div class=\"lihatjg\"><strong>Baca juga: </strong><a data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\" href=\"https://news.detik.com/read/2019/12/23/123243/4833124/486/kisah-lubang-jarum-di-gua-lele-tempat-3-mahasiswa-unsika-tewas\">Kisah \'Lubang Jarum\' di Gua Lele Tempat 3 Mahasiswa Unsika Tewas</a></div></td></tr></tbody></table><br>Anggota\r\n tim yang selamat kemudian berpencar. Dimas bergegas naik ke atas untuk \r\nmelaporkan situasi ke tim darat sekaligus mencari bantuan.<br><br>Sementara\r\n Ali turun ke bawah ikut mencari yang terjebak. \"Saya menemukan Erisa \r\nsudah terkapar di sudut gua. Helmnya terlepas,\" ungkap Ali. <br><br>Ia \r\nkemudian memeriksa denyut nadi mahasiswi tersebut. Lantaran tak juga \r\nsadar, Ali memberikan nafas buatan dan oksigen. \"Saya terus berusaha \r\nmemacu denyut jantungnya,\" kata Ali. <br><br>Beberapa saat kemudian, tim\r\n darat turun memberi pertolongan. Tak lama kemudian, tubuh Alief dan \r\nAinan terlihat terkapar. Helm mereka terlepas. \"Denyut nadi mereka tak \r\nterasa,\" ujar Ali. <br><br>Jenazah Erisa, Alief dan Ainan berhasil \r\ndievakuasi keesokan harinya oleh tim SAR gabungan. Celah gua yang kecil \r\nmengakibatkan ketiga jenazah baru berhasil dievakuasi setelah 12 jam.', '2021-05-31', '2021-07-07 15:27:53', '2021-07-08 19:35:09'),
(5, 'Keluarga Gelar Tahlilan di Rumah Duka Korban Tewas di Gua Lele Karawang', 'keluarga-gelar-tahlilan-di-rumah-duka-korban-tewas-di-gua-lele-karawang', 'uploads/berita/images/keluarga-gelar-tahlilan-di-rumah-duka-korban-tewas-di-gua-lele-karawang_1625772882.jpeg', '<p><strong>Jakarta</strong> -  Salah satu mahasiswa <a href=\"https://www.detik.com/tag/mahasiswa-universitas-singaperbangsa-terjebak-di-gua-lele/?tag_from=tag_detail&_ga=2.90319130.1863561900.1577067516-1910920623.1501322263\">Universitas Singaperbangsa Karawang (Unsika), Arif Rindu Arrafah</a> yang tewas saat di dalam <a href=\"https://news.detik.com/berita/d-4833901/keluarga-gelar-tahlilan-di-rumah-duka-korban-tewas-di-gua-lele-karawang\">Gua Lele Karawang</a>,\r\n Kampung Tanah Bereum, Desa Tamansari Kecamatan Pangkalan, sudah \r\ndimakamkan sore tadi di Bogor. Malam ini, tahlilan digelar di rumah \r\nduka. <br><br>Pantauan detikcom di rumah duka di perumahan Griya \r\nParungpanjang, Kecamatan Parungpanjang, Kabupaten Bogor, tahlilan \r\ndilakukan sekitar pukul 20.00 WIB. Senin (23/12/2019). Terlihat, puluhan\r\n orang yang terdiri dari kerabat, tetangga, dan saudara korban ikut \r\ndalam tahlilan tersebut.<br><br>Tahlilan dilakukan di depan rumah duka. Dengan menggelar terpal sebagai alas duduk di depan jalan, acara tahlilan ini dilakukan.<br><br></p>\r\n\r\n<div class=\"parallax_detail parallaxB\" style=\"margin:0px auto 20px auto;position: relative;\">\r\n<div class=\"parallax_abs\" style=\"width:430px;\">\r\n<div class=\"parallax_fix\" style=\"width:430px;\">\r\n<div class=\"parallax_ads\" style=\"width:430px;\">\r\n\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\nSemua orang yang mengikuti kegiatan tahlilan ini tampak khusyuk. \r\nSebagian orang pun terlihat membawa Al Qur\'an untuk ikut mendoakan \r\nalmarhum.<br><br>Terpantau, saking banyaknya yang ikut tahlilan, \r\nbeberapa orang yang ada sampai duduk di permukaan jalan, atau tanpa \r\nberalaskan terpal.', '2021-06-16', '2021-07-07 15:28:33', '2021-07-08 19:34:42'),
(6, 'Tips Mendapatkan Sponsor Untuk Event', 'tips-mendapatkan-sponsor-untuk-event', 'uploads/berita/images/tips-mendapatkan-sponsor-untuk-event_1638555609.jpeg', '<p class=\"MsoNormal\">Apa sih sponsor itu? Sponsor adalah bentuk dukungan atas\r\nperistiwa, kegiatan, atau pihak. Biasanya bentuk dukungan ini diberikan dalam\r\nbentuk uang, tapi bisa juga dalam bentuk hibah atau peminjaman aset.</p>\r\n\r\n<p class=\"MsoNormal\">Fungsi dan tujuan sponsor adalah sebagai penyokong keuangan\r\nsebuah kegiatan atau acara. Layanan yang diberikan diharapkan dapat menunjang\r\naktivitas yang akan diselenggarakan.</p>\r\n\r\n<p class=\"MsoNormal\">Lalu, apa aja sih tips mendapatkan sponsor untuk event? Mari\r\nkita simak!</p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Memilih sponsor yang sesuai dengan target\r\npengunjung<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Pertama, jangan asal-asalan dalam\r\nmemilih calon sponsor yang kita incar. Ingat, tidak selamanya itu sesuai dengan\r\nsiapa target pengunjung yang akan datang pada event yang kita selenggarakan.\r\nMisalnya, jika kita ingin menyelenggarakan konser musik, tentukan terlebih\r\ndahulu segmentasi dan demografis calon pengunjung, seperti jenis kelamin,\r\nrentang usia, pekerjaan, pendidikan, dsb. sebelum memilih sponsor yang\r\nkira-kira berhubungan dengan para pengunjung, contohnya makanan dan minuman\r\nringan.&nbsp;</p><p class=\"MsoNormal\" style=\"text-indent:18.0pt\"><br></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Menggolongkan sesuai dengan jenis sponsor\r\n<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Langkah selanjutnya, golongkan\r\njenis sponsor yang diinginkan. Misalnya, kita ingin sponsor untuk menyediakan\r\nperlengkapan, promosi dan publikasi, serta sponsor untuk bantuan dana. Setelah\r\nmenggolongkan jenis sponsor tersebut, masukkan siapa saja sponsor yang bisa\r\ndisasar sesuai dengan jenis sponsor yang sudah dirancang. Namun, ini bersifat\r\ntentatif karena bisa saja sponsor yang kita incar untuk menyediakan\r\nperlengkapan justru malah ingin menyumbangkan dalam bentuk uang, dan begitu\r\npula sebaliknya.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Membuat jadwal dengan sponsor<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Ini perlu dilakukan karena\r\nterkadang calon sponsor membutuhkan waktu yang tidak sebentar dalam mengambil\r\nkeputusan, terutama apabila mereka yang berbentuk perusahaan (ada birokrasi\r\nuntuk pengambilan keputusan yang berbeda-beda). Umumnya, rentang waktu yang\r\npaling tepat untuk mendapatkan sponsor adalah mulai dari 3 – 6 bulan sebelum\r\nacara terselenggara. Dengan demikian, kita memiliki waktu untuk mencari\r\nalternatif, sementara calon sponsor pun memiliki waktu untuk mengambil\r\nkeputusan. Yang jelas, jangan pernah menunggu keputusan dari sponsor.\r\nManfaatkan deadline tersebut untuk mencari beragam alternatif sponsor lainnya\r\nyang bisa dikejar.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Menentukan strategi pendekatan kepada\r\nsponsor<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Selanjunya, kita harus menentukan\r\nsrategi pendekatan apa yang akan diterapkan kepada calon sponsor supaya mereka\r\ntertarik akan konsep acara yang kita tawarkan. Artinya, bagaimana cara kita\r\nmenghubungi calon sponsor, apakah melalui telepon, mengirimkan proposal\r\nlangsung, atau bisa juga membuat janji dan langsung bertemu dengan mereka. Ini\r\ntentunya akan berbeda-beda, tergantung pada siapa calon sponsor yang Anda\r\nsasar, apakah individu, organisasi, institusi, atau pun perusahaan. Karena itu,\r\nhal semacam ini perlu menyesuaikan dengan kondisi di lapangan.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Mencari tahu kontak sponsor tersebut<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Sebelum mendapatkan sponsor ,\r\nalangkah baiknya kita memahami terlebih dulu bagaimana seluk beluk dari\r\nperusahaan atau organisasi yang akan dituju. Maka dari itu, penting untuk\r\nmembuat <i>break down</i> calon sponsor. Jika event yang akan diselenggarakan\r\ntahunan, maka kamu bisa menghubungi sponsor yang telah bekerjasama sebelumnya.\r\nSebaliknya, jika ingin mencari sponsor baru, maka beberapa perusahaan yang\r\nsebaiknya dijadikan target adalah perusahaan operator seluler, merk kendaraan\r\nbermotor, hingga perusahaan minuman. Beberapa perusahaan – perusahaan tersebut\r\nberpotensi menjadi sponsor utama. Selain itu, pastikan proposal yang kamu buat\r\nuntuk sponsor memiliki relevansi dengan calon sponsor. Setelah kamu bertemu\r\nsponsor dan memberikan proposal, jangan lupa untuk meminta nomor kontak yang\r\nbisa dihubungi. Ini akan berguna, terlebih jika proposal kamu masuk dalam\r\ndaftar waiting list di resepsionis. Umumnya, pihak perusahaan yang tertarik\r\ndengan proposal event kamu, akan menghubungi kamu setelahnya. Namun,\r\nmasalahnya, perusahaan terkait mungkin bukan saja menerima proposal sponsor\r\ndari kampu kamu saja. Mereka bisa melupakan mengenai tawaran kerja sama sponsor\r\nkamu. Solusinya, kita perlu meminta kontak nomor telepon yang bisa dihubungi\r\nsewaktu kita melakukan <i>follow-up</i> nanti.</p><p class=\"MsoNormal\" style=\"text-indent:18.0pt\"><br></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Merancang proposal guna menarik minat\r\nsponsor<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Dalam membuat proposal untuk\r\nsponsor tentunya kreativitas sangat dibutuhkan. Proposal dengan perpaduan warna\r\ndan konsep yang bagus akan menarik perhatian tim sponsorship untuk mereview\r\nproposalmu. Jika kamu lihai menggunakan photoshop atau corel maka akan lebih\r\nmenguntungkan. Namun jika kamu tidak bisa, saat ini banyak alteratif aplikasi\r\npembuatan proposal <i>online</i> yang bisa diakses secara gratis. Contohnya canva.\r\nKamu juga bisa mencetak proposal yang menggambarkan konsep acara kamu.\r\nKemudian, isi dengan kalimat yang singkat, jelas, dan <i>to-the-point</i>\r\nsehingga mereka lebih memahami maksud dan tujuan acara tersebut.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Mendatangi lokasi tujuan sesuai jadwal\r\ndengan formal<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Utamakan untuk mendatangi tempat\r\nsponsor/temui pemasarannya dengan menggunakan pakaian rapih jika tidak\r\nmemungkinkan untuk datang kirim pesan melalui email sekitar jam 08.30 - 12.00\r\ndan dilanjut besok. Pada era modern seperti sekarang tentunya kita dipermudah\r\ndengan teknologi yang sudah ada. Manfaatkanlah kemudahan tersebut untuk\r\nmengurangi biaya yang seharusnya tidak kamu keluarkan, misalnya mengirimkan\r\nproposal lewat email tentunya akan lebih efektif dan tidak mengeluarkan banyak\r\nbiaya. Pastikan ukuran proposalmu tidak terlalu besar ya, sebaiknya tidak lebih\r\ndari 5 MB. Jangan lupa perkenalkan dirimu dahulu dan sertakan di bagian <i>body</i>\r\nemail. Pastikan waktu yang kamu kirimkan kepada brand atau perusahaan adalah\r\npada saat waktu jam kerja, bukan tengah malam atau saat tanggal merah. Tidak\r\nsemua perusahaan media memiliki pelayanan 24/7. Apalagi jika sebenarnya media\r\nyang kamu tuju tidak sepenuhnya bergerak di bidang media saja, tapi mereka\r\nmemiliki ruang bagi komunitas yang memerlukan publikasi.kamu perlu\r\nmempertimbangkan waktu dan hari saat ingin <i>follow-up</i> penawaranmu,\r\nusahakan melakukan komunikasi bisnis di luar akhir pekan, kecuali ada keperluan\r\nyang sangat genting. Mengantar proposal langsung ke perusahaan tanpa membuat\r\njanji terlebih dahulu tentunya tidak menjamin kamu akan bertemu langsung dengan\r\norang yang berhubungan langsung dengan sponsorship, karena mereka tidak selalu\r\nada di kantor. Tak jarang proposal yang kamu bawa harus melewati beberapa pihak\r\ndahulu, mulai dari menitipkannya ke sekretaris, resepsionis hingga tak jarang\r\nkamu dialihkan ke bagian <i>mailing room</i>.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>8.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Mempresentasikan isi dari proposal<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:18.0pt\">Setelah berhasil membuat janji\r\ndengan calon sponsor, langkah selanjutnya untuk meyakinkan calon sponsor adalah\r\nmempresentasikan proposal yang Anda buat. Pada tahapan ini, akan ada banyak hal\r\nyang harus Anda perhatikan, mulai dari busana yang Anda kenakan, pembawaan,\r\npemilihan bahasa, dan banyak hal lainnya yang akan berbeda-beda tergantung dari\r\nsiapa calon sponsor tersebut. Usahakan untuk tetap rileks, tetapi tidak\r\nterkesan ogah-ogahan atau malas. Pastikan semangat dan motivasi, serta\r\npengetahuan Anda terkait event tersebut dapat terlihat dan dimengerti dengan\r\njelas oleh calon sponsor. Selain itu, kamu dapat melakukan pendalaman terhadap\r\nmateri presentasi, agar nanti bisa menjawab pertanyaan seputar event kampus\r\nyang akan dilaksanakan.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoListParagraph\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b>9.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></b><!--[endif]--><b>Jangan Putus Asa dan Jangan Menyerah<o:p></o:p></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-indent:36.0pt\">Jika mereka menolak atau tidak\r\njuga memberi keputusan, jangan berkecil hati dan segera fokuskan pikiran kepada\r\ncalon sponsor lainnya yang masih memiliki peluang untuk bekerja sama. Intinya,\r\njangan terlalu berkutat pada calon sponsor yang tidak bisa memberi kepastian. Jangan\r\nterlena dengan list sponsor yang ada. Kamu bisa mencari, bertanya pada rekan\r\ndan pantau kondisi sekitarmu. Cari terus target sponsor sampai dapat. Selain\r\nitu, proposal yang sudah kamu kirim jangan ditinggal begitu saja, karena\r\nperusahaan akan sibuk dengan aktivitasnya. Jadi kewajibanmu adalah mem<i>follow-up</i>.\r\nCatat juga perkembangan atau progresnya. Laporkan kepada tim agar semua\r\nmengetahui kondisinya. Kita tidak akan pernah tahu siapa calon sponsor yang\r\nakan berminat mensponsori event yang kita selenggarakan, dan terkadang\r\nkeputusan baru mereka berikan saat acara akan mulai, misalnya sebulan sebelum\r\nacara atau bahkan seminggu sebelum acara. Oleh karena itu, tentukan deadline\r\nuntuk mem<i>follow-up</i> calon sponsor, misalnya seminggu setelah proposal\r\nAnda kirimkan, atau dua minggu setelah presentasi, atau tanyakan kepada mereka\r\nkapan sekiranya mereka bisa mengambil keputusan.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">Demikianlah tips-tips untuk mencari sponsor yang bisa kita\r\npraktekan untuk memperlancar sebuah kegiatan atau event <o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Semoga bermanfaat dan tetap semangat!!!<o:p></o:p></p>', '2021-12-03', '2021-12-03 17:15:12', '2021-12-03 18:20:09'),
(15, 'OPEN RECRUITMENT UKF SENI BUDAYA', 'open-recruitment-ukf-seni-budaya', 'uploads/berita/images/open-recruitment-ukf-seni-budaya_1647314930.webp', '<p></p><p>Karawang -&nbsp;<span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">UKF Seni Budaya sedang melakukan Open Recruitment loh!&nbsp;</span><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">Untuk kalian yang belum tahu, UKF Seni Budaya merupakan wadah yang dirancang untuk menyalurkan dan mengembangkan minat dan bakat mahasiswa Fasilkom Unsika khususnya di bidang seni dan budaya.</span></p><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">Untuk UKF Seni Budaya ada 3 bidang diantaranya :</span><br style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">1. UKF Seni Tari</span><br style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">2. UKF Seni Musik Fakustik</span><br style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">3. UKF Seni dan Sastra</span><p></p><p><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">Untuk teman-teman yang mempunyai bakat dari 3 bidang tersebut, bisa banget untuk langsung mendaftarkan dirinya di link berikut :</span><br style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><a href=\"https://forms.gle/B1iMnMckFVYcTFuj7\" target=\"_blank\">Daftar UKF Seni Budaya</a></p><p><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">Jangan sampai ketinggalan yah!</span><br style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">Untuk informasi lebih lanjut, bisa langsung menghubungi contact person dibawah ini</span></p><p><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">-UKF Seni dan Sastra&nbsp;</span><a href=\"https://wa.me/6281293803075\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\">081293803075</a>&nbsp;<font color=\"#262626\" face=\"-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif\">(Devi)</font></p><p><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">-UKF Tari&nbsp;</span><a href=\"https://wa.me/6289510753205\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\">089510753205</a>&nbsp;<font color=\"#262626\" face=\"-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif\">(Nuri)</font></p><p><span style=\"color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">-UKF Fakustik&nbsp;</span><a href=\"https://wa.me/6289637004158\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\">089637004158</a><font color=\"#262626\" face=\"-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif\">&nbsp;(Kris)</font></p><p><br></p>', '2022-03-15', '2022-03-15 03:28:51', '2022-03-15 03:32:11'),
(16, 'AI - TALENT HUNT', 'ai-talent-hunt', 'uploads/berita/images/ai-talent-hunt_1647318470.png', '<p></p><p><b>Accord Innovations Indonesia are Hiring for IT and Tech Geek on UNSIKA!</b></p><p>Requirements :</p><p>- Any Major of IT and Related Fields. Have an Professional Experience is Preferred.</p><p>- Have a Strong, Passionate, and High Curiousity.</p><p>- Open for Alumni and Active Student.</p><p>- Have an Active WhatsApp Number</p><p><br></p><p>Kindly Send your CV by filling this form below :</p><p><a href=\"https://bit.ly/AITA_2022\" target=\"_blank\">https://bit.ly/AITA_2022 </a><br></p><p>Or you can send your CV Via Email to whisnu@accordinnovations.com</p><p>Looking forward for you to join us!</p><p><br></p><p>#hiring #recruitment #cv #jobseeker #tech #it</p>', '2022-03-15', '2022-03-15 04:23:36', '2022-03-15 04:27:50'),
(17, 'Perbaikan dan Pengisian Data KTM Gelombang 2', 'perbaikan-dan-pengisian-data-ktm-gelombang-2', 'uploads/berita/images/perbaikan-dan-pengisian-data-ktm-gelombang-2_1647868266.png', '<p>Pemberitahuan kepada mahasiswa dan mahasiswi Fasilkom UNSIKA yang menggunakan KTM BTN dan memiliki kendala dalam pengisian data maupun yang belum melakukan pengisian data KTM BTN, dapat langsung mengisi formulir yang telah disiapkan.</p><p><br></p><p>Link perbaikan data :</p><p><a href=\"https://bit.ly/DataMahasiswaUnsika\" target=\"_blank\">https://bit.ly/DataMahasiswaUnsika</a><br></p><p>Link pengisian data gelombang ke-2 :</p><p><a href=\"https://bit.ly/KTMCloterKedua\" target=\"_blank\">https://bit.ly/KTMCloterKedua</a><br></p>', '2022-03-21', '2022-03-21 12:53:22', '2022-03-21 13:11:06'),
(18, 'INFORMASI KARTU TANDA MAHASISWA BTN', 'informasi-kartu-tanda-mahasiswa-btn', 'uploads/berita/images/informasi-kartu-tanda-mahasiswa-btn_1648113947.png', '<p style=\"text-align: justify; \"><font color=\"#000000\">Beberapa hal terkait dengan pelaksanaan pendistribusian Kartu Tanda Mahasiswa (KTM)<br></font></p><ol><li style=\"text-align: justify; \"><font color=\"#000000\">Untuk Pendistribusian KTM Fakultas Ilmu Komputer akan dilaksanakan pada tanggal 27 Maret 2022 mulai pukul 08.00 s/d 13.00, bertempat di Bank BTN Karawang, Jln. Galuh Mas Raya, Sukaharja,Kec. Teluk Jambe timur, Kabupaten Karawang.</font></li><li style=\"text-align: justify; \"><font color=\"#000000\">Membawa KTP asli, Foto copy KTP dan uang pembukaan rekening sebesar Rp. 50.000&nbsp; (Lima Puluh Ribu Rupiah). </font></li><li style=\"text-align: justify; \"><font color=\"#000000\">Mengingat aktivasi harus dilakukan oleh masing masing mahasiswa yang bersangkutan mohon untuk bisa hadir sesuai jadwal yang sudah ditentukan. </font></li><li style=\"text-align: justify; \"><font color=\"#000000\">Harap mengisi form pembukaan rekening yang sudah disediakan di Fakultas sebelum&nbsp; ke Bank BTN untuk mempercepat proses pendistribusian KTM. </font></li><li style=\"text-align: justify; \"><font color=\"#000000\">Jadwal pendistribusian Kartu Tanda Mahasiswa bagi masing masing mahasiswa Fakultas Ilmu Komputer Universitas Singaperbangsa angkatan 2020-2021 disertakan sebagai lampiran,</font></li></ol><p></p><div style=\"text-align: justify;\"><font color=\"#000000\"><br></font></div><div style=\"text-align: justify;\"><font color=\"#000000\">Selanjutnya, informasi mengenai nama-nama mahasiswa yang datanya masih harus diperbaiki tercantum di dalam surat edaran. Mahasiswa dan mahasiswi yang namanya tercantum di dalam surat tersebut dapat melakukan <b>perbaikan data</b> melalui link berikut. (Keterangan : Link yang tertera di bawah ini sama saja dengan link yg ada pada berita Advocacy Progress Report sebelumnya).</font></div><div style=\"text-align: justify;\"><a href=\"https://bit.ly/DataMahasiswaUnsika\" target=\"_blank\"><font color=\"#ff9c00\" style=\"\">https://bit.ly/DataMahasiswaUnsika</font></a></div><div style=\"text-align: justify;\"><a href=\"https://bit.ly/DataMahasiswaUnsika\" target=\"_blank\"><font color=\"#ff9c00\">https://bit.ly/DataMahasiswaUnsika</font></a><a href=\"https://bit.ly/DataMahasiswaUnsika\" target=\"_blank\" style=\"\"><font color=\"#ff9c00\" style=\"\"></font></a></div><div style=\"text-align: justify;\"><a href=\"https://bit.ly/DataMahasiswaUnsika\" target=\"_blank\" style=\"\"><font color=\"#ff9c00\" style=\"\"><br></font></a><span style=\"color: rgb(0, 0, 0);\">Selain link perbaikan data, bagi mahasiswa dan mahasiswi yang belum mengisi link pengisian data pada gelombang satu, dapat melakukan </span><b style=\"color: rgb(0, 0, 0);\">pengisian data pada link gelombang dua</b><span style=\"color: rgb(0, 0, 0);\"> berikut. (Keterangan : Link yang tertera di bawah ini sama saja dengan link yg ada pada berita Advocacy Progress Report sebelumnya).</span></div><div style=\"text-align: justify;\"><font color=\"#ff9c00\"><a href=\"https://bit.ly/KTMCloterKedua\" target=\"_blank\" style=\"\"><font color=\"#ff9c00\" style=\"\">https://bit.ly/KTMCloterKedua</font></a><br></font></div><div style=\"text-align: justify;\"><a href=\"https://bit.ly/KTMCloterKedua\" target=\"_blank\"><font color=\"#ff9c00\">https://bit.ly/KTMCloterKedua</font></a><a href=\"https://bit.ly/KTMCloterKedua\" target=\"_blank\" style=\"\"><font color=\"#ff9c00\" style=\"\"></font></a></div><div style=\"text-align: justify;\"><a href=\"https://bit.ly/KTMCloterKedua\" target=\"_blank\" style=\"\"><font color=\"#ff9c00\" style=\"\"><br></font></a><span style=\"color: rgb(0, 0, 0);\">Data mahasiswa yang <b>sudah melakukan pengisian data</b> pada gelombang satu tercantum di dalam link berikut.</span></div><div style=\"text-align: justify;\"><a href=\"https://s.id/DataKTM31Jan\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\"><font color=\"#ff9c00\">https://s.id/DataKTM31Jan</font></a><br></div><div style=\"text-align: justify;\"><a href=\"https://s.id/DataKTM31Jan\" target=\"_blank\"><font color=\"#ff9c00\">https://s.id/DataKTM31Jan</font></a><a href=\"https://s.id/DataKTM31Jan\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\"><font color=\"#ff9c00\"></font></a></div><div style=\"text-align: justify;\"><a href=\"https://s.id/DataKTM31Jan\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\"><font color=\"#ff9c00\"><br></font></a></div><p style=\"text-align: justify;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: justify;\"><font color=\"#000000\">Surat edaran mengenai informasi terkait dapat dilihat pada lama berikut. (Buka dengan menggunakan akun UNSIKA)</font></p><p style=\"text-align: justify; \"><a href=\"http://shorturl.at/moDPT\" target=\"_blank\"><font color=\"#ff9c00\">Surat Edaran KTM Bank BTN</font></a></p><p style=\"text-align: justify; \"><br></p><span style=\"color: rgb(0, 0, 0); text-align: justify; font-weight: bolder;\">Baca juga :&nbsp;</span><a href=\"https://bem.cs.unsika.ac.id/fasilkom-news/detail/perbaikan-dan-pengisian-data-ktm-gelombang-2\" target=\"_blank\" style=\"text-align: justify;\"><font color=\"#ff9c00\" style=\"\">Perbaikan dan Pengisian Data KTM Gelombang 2</font></a>', '2022-03-24', '2022-03-24 08:27:01', '2022-03-24 09:25:47'),
(19, 'INFORMASI KEBIJAKAN BARU EMAIL UNSIKA', 'informasi-kebijakan-baru-email-unsika', 'uploads/berita/images/informasi-kebijakan-baru-email-unsika_1648984054.png', '<p><a href=\"https://drive.google.com/file/d/1lT-ubTlmmnouSKGyXKQHI8CqG8l_mf9j/view?usp=sharing\" target=\"_blank\">Surat Edaran Email</a><br></p><p>Beberapa point penting yang harus diketahui dalam isi surat di atas adalah :</p><p>1. Pembatasan penyimpanan dalam akun google for education yang semula tidak terbata, menjadi 100TB (100.000 GB) untuk seluruh <i>user</i>&nbsp;atau pengguna (mencakup mahasiswa, staff, dosen, dan tata usaha) per bulan Juni 2022.</p><p>2. Akun yang melebihi kapasitas penyimpanan lebih dari 2 GB akan dihapus.</p><p>3. Pembatasan penyimpanan bagi mahasiswa aktif hanya menggunakan penyimpanan sebesar 2 GB.</p><p>4. Untuk mahasiswa angkatan 2018 sampai dengan angkatan 2014, akan dilakukan penghapusan akun secara otomatis.</p><p>5. Sedangkan untuk mahasiswa angkatan 2015 sampai dengan 2021, penghapusan akun akan dilakukan apabila akun tersebut telah aktif selama 7 tahu masa studi. Terhitung semenjak <i>user</i>&nbsp;atau pengguna mendapatkan email tersebut.</p><p>6. Surat edaran ini hanya berlaku pada akun google for education saja, bukan pada akun pribadi.</p><p><br></p><p>Adapun hal-hal yang perlu dilakukan sebelum berlakunya penghapusan akun ini adalah :</p><p>1. Mengecek penyimpanan akun google for education. Memastikan bahwa penyimpanan akun tidak lebih dari 2 GB.</p><p>2. Jika penyimpanan melebihi aturan baru yang akan diberlakukan, maka akun akan dihapuskan.</p><p>3. Memindahkan file yang berada pada Google Photos, Google Drive, Google Mail.</p><p>4. Penambahan kapasitas penyimpanan bisa dilakukan satu bulan setelah kebijakan baru ini berlaku.</p>', '2022-04-03', '2022-04-03 11:05:49', '2022-04-03 11:07:34');
INSERT INTO `berita` (`id`, `judul`, `slug`, `path`, `konten`, `tanggal`, `created_at`, `updated_at`) VALUES
(21, 'INFORMASI KTM UNTUK MAHASISWA ANGKATAN 2017-2019', 'informasi-ktm-untuk-mahasiswa-angkatan-2017-2019', 'uploads/berita/images/informasi-ktm-untuk-mahasiswa-angkatan-2017-2019_1651210001.png', '<p>Pemberitahuan kepada mahasiswa dan mahasiswi Fasilkom Unsika angkatan 2017-2019. Apabila KTM yang dimiliki rusak, hilang ataupun belum memiliki KTM, dapat mengajukan pembuatan dengan melengkapi surat pernyataan dan mengisi link pengajuan di bawah ini.</p><p><br></p><p>Link surat pernyataan : <br><a href=\"https://bit.ly/SuratDanFormatPernyataan\" target=\"_blank\">https://bit.ly/SuratDanFormatPernyataan</a></p><p>Link pengajuan : </p><p>https://bit.ly/KTM2017-2019</p><p><br></p><p>Adapun batas pengisian link tersebut mulai dari tanggal 27 April - 10 Mei 2022.</p>', '2022-04-29', '2022-04-29 05:26:41', '2022-04-29 05:26:41'),
(22, 'VIRTUAL ITB INTEGRATED DAYS MAY 2022', 'virtual-itb-integrated-days-may-2022', 'uploads/berita/images/virtual-itb-integrated-days-may-2022_1652700537.jpg', '<p>Virtual ITB Integrated Career Days May 2022 akan dilaksanakan pada tanggal 19 Mei-21 Mei 2022 dan bisa diakses melalui&nbsp;<a href=\"https://virtualfair.itb.ac.id\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\">https://virtualfair.itb.ac.id</a>.<br></p><p>Acara ini dilaksanakan secara gratis dan untuk umum, lho! Akan tersedia banyak agenda seru dan akan banyak lowongan pekerjaan yang tersedia pada jobfair ini.</p><p>Yuk, ikuti acara ini, karena tentunya akan banyak hal positif dan menarik yang akan diselenggarakan. Ingat tanggal pelaksaan dan jangan lupa hadir, yaa!!</p>', '2022-05-16', '2022-05-16 11:28:57', '2022-05-16 11:28:57'),
(23, 'Advocacy Progress Report - Informasi Pendistribusian KTM Mahasiswa Angkatan 2020 s.d. 2021', 'advocacy-progress-report-informasi-pendistribusian-ktm-mahasiswa-angkatan-2020-sd-2021', 'uploads/berita/images/advocacy-progress-report-informasi-pendistribusian-ktm-mahasiswa-angkatan-2020-sd-2021_1654407619.jpg', '<p>Halo Fasilkomers!!<br>Sehubungan dengan surat pemberitahuan yang telah dikeluarkan oleh pihak universitas mengenai pendistribusian Kartu Tanda Mahasiswa. Berikut beberapa hal yang ada di dalam surat pemberitahuan tersebut :<br>1. Untuk Pendistribusian KTM Fakultas ilmu komputer akan di laksanakan pada tanggal 9 Juni 2022, bertempat di Bank BTN Karawang, Jln. Galuh Mas Raya, Sukaharja, Kec. Teluk Jambe timur, Kabupaten Karawang.</p><p>2. Membawa KTP asli, Foto copy KTP dan uang pembukaan rekening sebesar Rp. 50.000 (Lima Puluh Ribu Rupiah).</p><p>3. Mengingat aktivasi harus dilakukan oleh masing masing mahasiswa yang bersangkutan mohon untuk bisa hadir sesuai jadwal yang sudah di tentukan.</p><p>4. Jadwal pendistribusian Kartu Tanda Mahasiswa bagi masing masing mahasiswa Fakultas Ilmu Komputer Universitas Singaperbangsa angkatan 2020-2021 kami sertakan sebagai lampiran,<br></p><p>Untuk daftar nama yang bisa mengambil KTM tersebut sudah dilampirkan di dalam surat pemberitahuan yang tertera di bagian bawah artikel ini. Silahkan diunduh untuk melihat siapa saja yang dapat mengambil KTM BTN di tanggal tersebut.</p><p>Jika ada yang ingin ditanyakan dapat langsung menghubungi contact person yang tertera di bio instagram BEM FASILKOM UNSIKA atau langsung mengirim pesan ke instagram ataupun facebook BEM FASILKOM UNSIKA.</p><p><br><a href=\"https://drive.google.com/file/d/1QUrYd1Zy1DLKBHTPiNgkTJBmW20vtQPG/view?usp=sharing\" target=\"_blank\">Surat pemberitahuan dapat diunduh di sini</a></p><p><a href=\"https://drive.google.com/file/d/1QUrYd1Zy1DLKBHTPiNgkTJBmW20vtQPG/view?usp=sharing\" target=\"_blank\">Surat pemberitahuan dapat diunduh di sini</a><br><br></p>', '2022-06-05', '2022-06-05 05:40:19', '2022-06-05 05:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pengembangan Sumber Daya Manusia', 'pengembangan-sumber-daya-manusia', '2021-07-08 19:26:22', '2021-07-08 19:26:22'),
(2, 'Minat dan Bakat', 'minat-dan-bakat', '2021-07-08 19:26:30', '2021-07-08 19:26:30'),
(3, 'Sosial Politik', 'sosial-politik', '2021-07-08 19:26:37', '2021-07-08 19:26:37'),
(4, 'Komunikasi dan Informasi', 'komunikasi-dan-informasi', '2021-07-08 19:26:44', '2021-07-08 19:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bidang` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `nama`, `slug`, `id_bidang`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Kaderisasi', 'kaderisasi', 1, '<p>-</p>', '2021-07-08 19:27:00', '2021-07-08 19:27:00'),
(2, 'Pengembangan dan Pengawasan', 'pengembangan-dan-pengawasan', 1, '<p>-</p>', '2021-07-08 19:27:11', '2021-07-08 19:27:11'),
(3, 'Keilmuan', 'keilmuan', 2, '<p>-</p>', '2021-07-08 19:27:22', '2021-07-08 19:27:22'),
(4, 'Olahraga', 'olahraga', 2, '<p>-</p>', '2021-07-08 19:27:31', '2021-07-08 19:27:31'),
(5, 'Seni Budaya', 'seni-budaya', 2, '<p>-</p>', '2021-07-08 19:27:39', '2021-07-08 19:27:39'),
(6, 'Advokasi Kesejahteraan Mahasiswa', 'advokasi-kesejahteraan-mahasiswa', 3, '<p>-</p>', '2021-07-08 19:27:50', '2021-07-08 19:27:50'),
(7, 'Kajian dan Aksi Strategis', 'kajian-dan-aksi-strategis', 3, '<p>-</p>', '2021-07-08 19:28:00', '2021-07-08 19:28:00'),
(8, 'Pengabdian Masyarakat', 'pengabdian-masyarakat', 3, '<p>-</p>', '2021-07-08 19:28:10', '2021-07-08 19:28:10'),
(9, 'Bisnis dan Kemitraan', 'bisnis-dan-kemitraan', 4, '<p>-</p>', '2021-07-08 19:28:18', '2021-07-08 19:28:18'),
(10, 'Media', 'media', 4, '<p>-</p>', '2021-07-08 19:28:27', '2021-07-08 19:28:27'),
(11, 'Pengembangan Teknologi Informasi', 'pengembangan-teknologi-informasi', 4, '<p>-</p>', '2021-07-08 19:28:37', '2021-07-08 19:28:37'),
(12, 'Hubungan Masyarakat', 'hubungan-masyarakat', 4, '<p>-</p>', '2021-07-08 19:28:48', '2021-07-08 19:28:48'),
(13, '-', '', 1, '<p>-</p>', '2021-07-08 19:28:58', '2021-07-08 19:28:58'),
(14, '-', '', 2, '<p>-</p>', '2021-07-08 19:29:05', '2021-07-08 19:29:05'),
(15, '-', '', 3, '<p>-</p>', '2021-07-08 19:29:09', '2021-07-08 19:29:09'),
(16, '-', '', 4, '<p>-</p>', '2021-07-08 19:29:15', '2021-07-08 19:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul`, `slug`, `path`, `konten`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00'),
(1, 'event evenan', 'event-evenan', 'uploads/event/images/event-evenan_1656071580.png', '<p>isi aja enak jidat lu</p>', '2022-06-24', '2022-06-24 02:22:50', '2022-06-24 11:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `slug`, `deskripsi`, `path`, `created_at`, `updated_at`) VALUES
(2, 'PRA PKKMB FASILKOM UNSIKA 2021', 'pra-pkkmb-fasilkom-unsika-2021', '<p>WAKTU&nbsp;<br>Hari : Rabu, 1 September 2021<br>Jam : 08.00 - 10.30 WIB<br>Tempat : Google Meet<br><br>AGENDA<br>- Pembukaan<br>- Laporan Ketua Pelaksana<br>- Penjelasan pelaksanaan PKKMB Fasilkom<br>- Pembacaan penugasan PKKMB<br>- Penjelasan penggunaan Website PKKMB<br>- Penjelasan Eka Sunya<br>- Tanya jawab seputar PKKMB<br>- Pengenalan mentor dan pembagian kelompok<br>- Penutup<br><br></p>', 'uploads/pkkmb/informasi/PRA PKKMB FASILKOM UNSIKA 2021_1630425204.jpeg', '2021-08-31 15:53:24', '2021-08-31 17:59:19'),
(3, 'CONTOH MIND MAPPING', 'contoh-mind-mapping', '-', 'uploads/pkkmb/informasi/CONTOH MIND MAPPING_1630425531.jpeg', '2021-08-31 15:58:51', '2021-08-31 15:58:51'),
(4, 'PENDAFTARAN EKA & SUNYA', 'pendaftaran-eka-sunya', '<div>[PENDAFTARAN CALON EKA SUNYA 2021]</div><div>&nbsp;</div><div>Hallo, CAHAYA MUDA✨</div><div>Semoga kita semua diberikan kesehatan dan dijauhkan dari segala macam penyakit. Aamiin</div><div><br></div><div>Sehubungan akan diadakannya pemilihan Calon Eka Sunya maka diberitahukan kepada seluruh mahasiswa baru yang ingin mencalonkan diri sebagai kandidat Eka Sunya Fasilkom 2021 untuk segera mendaftar kan diri.</div><div><br></div><div>Eka Sunya adalah program BEM Fasilkom Unsika dalam rangka menggali potensi kepemimpinan Maba Fasilkom.</div><div><br></div><div>Tugas Eka Sunya yaitu, sebagai perantara antara BEM dengan Maba Fasilkom selama PKKMB berlangsung.</div><div>Kesempatan besar buat kalian menambah relasi dan melatih jiwa kepemimpinan kalian kan.</div><div><br></div><div>Yuk daftarkan diri anda sekarang pada link dibawah ini 👇🏻</div><div>http://bit.ly/EkaSunya2021</div><div><br></div><div>Ketentuan pendaftaran Eka Sunya :</div><div><br></div><div>📌Pendaftaran dibuka pada : 2 - 6 September 2021</div><div>📌Membuat video visi dan misi</div><div><br></div><div>Warm Regards,</div><div>ARUNIKA 2021</div><div>Terbit Bersama, Sinari Bangsa !</div><div><br></div><div>FASILKOM ❗ TOGETHER MOVING FORWARD</div><div><br></div><div>#pkkmbfasilkom2021</div><div>#terbitbersamasinaribangsa</div><div>#FasilkomUnsika</div><div>#TogetherMovingForward</div>', 'uploads/pkkmb/informasi/PENDAFTARAN EKA & SUNYA_1630583544.jpg', '2021-09-02 11:52:25', '2021-09-02 11:52:25'),
(5, 'MENITI TEMA PKKMB 2021 \"DIGITALISASI KERAKYATAN\"', 'meniti-tema-pkkmb-2021-digitalisasi-kerakyatan', '<div>Sebagai para mahasiswa yang menekuni dan bergelut pada disiplin keilmuan sains-teknologi.</div><div>Kita semua harus sadar bahwa capaian sains-teknologi tidak bisa diukur dari seberapa jauh kita meniru dan menyaingi negara atau bangsa lain.</div><div><br></div><div>&nbsp;Bukan pula untuk menunjukkan betapa hebat dan unggulnya diri kita. (Kalaupun bisa itu cuma cermin ambisi megalomania). Capaian saintek yang sesungguhnya diukur dari apakah itu mampu menyelesaikan problem yang kita hadapi (unsur kebermanfaatan).&nbsp;</div><div><br></div><div>Namun, yang terus menjadi permasalahan fundamental adalah kurangnya pemerataan sains-teknologi di beberapa daerah 3T(Terdepan, Terpencil, dan Tertinggal). Di sini lah peran kita dalam menggaungkan digitalisasi kerakyatan.</div><div><br></div><div>Digitalisasi Kerakyatan adalah sebuah era dimana sains-teknologi sebagai basis kemajuan peradaban tidak hanya bisa dipetik dan dinikmati buahnya oleh para ningrat, borjuis, serta masyarakat high class lainnya tetapi juga bisa dirasakan oleh kaum menengah dan kaum menengah bawah.&nbsp;</div><div><br></div><div>Penghidupan Masyarakat yang baik, bisa dilakukan dengan memberikan akses pendidikan hingga ke ruang-ruang aktualisasi diri dengan di motori oleh pemerataan digitalisasi</div><div>ke seluruh penjuru negeri</div><div><br></div><div>Tanpa pemerataan digitalisasi, banyak ketimpangan akan terjadi</div><div>Digitalisasi tidak pandang bulu, memiliki potensi besar untuk melibas dan merangkul berbagai sektor penghidupan masyarakat.</div><div><br></div><div>Seperti yang sudah dilakukan sebelumnya oleh VOC.&nbsp;</div><div>Mereka mensentralisasi digitalisasi untuk kepentingan bisnis maupun industrinya sendiri. Hingga pada akhirnya para pribumi nusantara hanya menjadi pekerja dan tidak memiliki kekuatan dengan basis massa digitalisasi</div><div><br></div><div>Digitalisasi bisa melahirkan pusat perdagangan dalam wilayah-wilayah kehidupan, mulai dari hulu hingga hilir, jika digitalisasi dimeratakan kepada seluruh masyarakat.&nbsp;</div><div><br></div><div>Mereka tidak perlu jauh-jauh pergi ke kota dengan takdir yang masih belum jelas. Mereka cukup berdayakan sumber daya alam yang mereka punya, memproduksi dan mengkonsumsi milik satu sama lain didalam wilayah yang kecil maupun besar.</div><div><br></div><div>Penyadaran masif perlu diarahkan kepada para pelaku pemilik gelar sebagai akademisi saintek itu sendiri. Pada acara PKKMB 2021, dan dengan mengusung tema \"Terciptanya Mahasiswa Fasilkom Yang Berwawasan Global, Berlandaskan Moralitas dan Kepedulian Sosial Sebagai Pilar Pembangunan Digitalisasi Kerakyatan\". Maka dari itu segala harapan tentang pemerataan digitalisasi ke masyarakat desa bisa dilakukan oleh kita, Arunika #TerbitBersamaSinariBangsa!</div>', 'uploads/pkkmb/informasi/MENITI TEMA PKKMB 2021 \"DIGITALISASI KERAKYATAN\"_1630584544.jpeg', '2021-09-02 12:09:04', '2021-09-02 12:09:04'),
(6, 'TIMELINE PKKMB 2021', 'timeline-pkkmb-2021', '<div><div>Hallo, CAHAYA MUDA✨</div><div><br></div><div>Untuk TIMELINE Mahasiswa Baru dapat dilihat pada postingan instagram @pkkmb.fasilkomunsika&nbsp; &nbsp;https://www.instagram.com/p/CTEHxJ2Fx9qFrf5e8tXt9UQ3-ianTKkn-K9TaE0/?utm_medium=copy_link&nbsp;</div><div><br></div><div>Bagi kalian yang kepo pelaksanaan pra PKKMB dan PKKMB itu kapan, yuk ! Segera catat dan persiapkan diri kalian.</div><div>Tetap semangat dan selalu menjaga kesehatan. Don\'t forget stay tuned !!!</div><div><br></div><div>📲Contact person:</div><div>Anissa Aidha Zulyani</div><div>Wa : 089603535088</div><div>M. Akbar</div><div>Wa : 089669258725</div><div><br></div><div>Warm Regards,</div><div>ARUNIKA 2021</div><div>Terbit Bersama, Sinari Bangsa !</div><div><br></div><div>FASILKOM ❗ TOGETHER MOVING FORWARD</div><div><br></div><div>#pkkmbfasilkom2021</div><div>#terbitbersamasinaribangsa</div><div>#FasilkomUnsika</div><div>#TogetherMovingForward</div></div><div><br></div><div><br></div>', 'uploads/pkkmb/informasi/TIMELINE PKKMB 2021_1630743710.jpg', '2021-09-04 08:21:50', '2021-09-04 08:21:50'),
(7, '-', '', '-', 'uploads/pkkmb/informasi/-_1630743756.jpg', '2021-09-04 08:22:36', '2021-09-04 08:22:36'),
(8, 'TWIBBON PKKMB FASILKOM UNSIKA 2021', 'twibbon-pkkmb-fasilkom-unsika-2021', '<div>Hallo, CAHAYA MUDA✨</div><div><br></div><div>Telah Launching twibbon untuk mahasiswa baru Fakultas Ilmu Komputer Unsika 2021 🎉</div><div><br></div><div>Yuk, kita semarakan agenda PKKMB FASILKOM UNSIKA 2021 dengan memakai Twibbon FASILKOM UNSIKA🔥</div><div><br></div><div>Berikut ini ketentuan Twibbon PKKMB FASILKOM UNSIKA 2021 :</div><div>1) Twibon Wajib di upload di Instagram oleh semua Mahasiswa Baru FASILKOM UNSIKA 2021&nbsp;</div><div>2) Wajib follow akun Instagram @pkkmb.fasilkomunsika</div><div>3) Tag akun Instagram @pkkmb.fasilkomunsika</div><div>4) Ketentuan Foto&nbsp;</div><div>&nbsp;&nbsp;&nbsp;&nbsp;*) Mengenakan pakaian bebas asal sopan</div><div>&nbsp;&nbsp;&nbsp;&nbsp;*) Membuat tujuan dan motivasi selama menjadi mahasiswa Fasilkom menggunakan tulisan tangan dan gambar-gambar khas IT di kertas A4</div><div>5) Waktu Maba untuk mengupload twibon dari tanggal 28 Agustus 2021 - 05 September 2021</div><div>__</div><div>Berikut Ketentuan Caption nya 👇🏻</div><div><br></div><div>[Arunika Fasilkom UNSIKA 2021]</div><div><br></div><div>(Contoh* quote bebas)</div><div>\"The Computer wae born to solve problems that did not exist before\" - Bill Gates&nbsp;</div><div><br></div><div>(Contoh* paragraf bebas)</div><div>Python merupakan bahasa pemrograman tingkat tinggi yang diracik oleh Guido van Rossum. Python banyak digunakan untuk membuat berbagai macam program, seperti: program CLI, Program GUI (desktop), Aplikasi Mobile, Web, IoT, Game, Program untuk Hacking, dsb</div><div><br></div><div>(Wajib)</div><div>Hallo, Saya (nama lengkap) dari prodi (prodi kamu) siap dan bangga menjadi bagian dari keluarga besar Arunika 2021, Fakultas Ilmu Komputer, Universitas Singaperbangsa Karawang</div><div><br></div><div>#SalamKampusMaroon</div><div>#Arunika2021</div><div>#TerbitBersamaSinariBangsa</div><div>#pkkmbfasilkomunsika2021</div><div>#FasilkomUnsika</div><div>#TogetherMovingForward</div><div><br></div><div>__</div><div>Twibon dapat diunduh disini :</div><div>https://twb.nz/twibbonpkkmbfasilkom2021 atau klik link di bio</div><div><br></div><div>Warm Regards,</div><div>ARUNIKA 2021</div><div>Terbit Bersama Sinari Bangsa!</div><div><br></div><div>FASILKOM ❗ TOGETHER MOVING FORWARD</div><div><br></div><div>Note: (Slide 1 Twibbon, Slide 2 gambar mind mapping desain kalian)</div><div><br></div><div>#pkkmbfasilkom2021</div><div>#TerbitBersamaSinariBangsa</div><div>#FasilkomUnsika</div><div>#TogetherMovingForward</div>', 'uploads/pkkmb/informasi/TWIBBON PKKMB FASILKOM UNSIKA 2021_1630744976.jpg', '2021-09-04 08:42:56', '2021-09-05 10:20:10'),
(9, 'MIND & MAPPING PKKMB FASILKOM UNSIKA 2021', 'mind-mapping-pkkmb-fasilkom-unsika-2021', '<div>Hallo, CAHAYA MUDA✨</div><div><br></div><div>Yuk, kita semarakan agenda PKKMB FASILKOM UNSIKA 2021 dengan Mengupload Mine Mapping Mahasiswa🔥</div><div><br></div><div>Berikut ini beberapa ketentuan Mind Mapping PKKMB FASILKOM UNSIKA 2021 :</div><div>1) Mind Mapping Wajib di upload di Instagram oleh semua Mahasiswa Baru FASILKOM UNSIKA 2021</div><div>2) Wajib follow akun Instagram @pkkmb.fasilkomunsika @fasilkomunsika @bemfasilkomunsika @blmfasilkomunsika @himtika_unsika dan @himsika</div><div>3) Tag akun Instagram @pkkmb.fasilkomunsika @fasilkomunsika @bemfasilkomunsika @blmfasilkomunsika @himtika_unsika dan @himsika</div><div>4) Ketentuan Mind Mapping</div><div>&nbsp;&nbsp;&nbsp;&nbsp;*) Membuat tujuan dan motivasi selama menjadi mahasiswa Fasilkom menggunakan tulisan tangan dan gambar-gambar khas IT di kertas A4</div><div>5) Waktu Maba untuk mengupload Mind Mapping dari tanggal 28 Agustus 2021 - 05 September 2021</div><div>____</div><div>Berikut Ketentuan Caption nya 👇🏻</div><div><br></div><div>[Arunika Fasilkom UNSIKA 2021]</div><div><br></div><div>(Contoh* quote bebas)</div><div>\"The Computer wae born to solve problems that did not exist before\" - Bill Gates</div><div><br></div><div>(Contoh* paragraf bebas)</div><div>Python merupakan bahasa pemrograman tingkat tinggi yang diracik oleh Guido van Rossum. Python banyak digunakan untuk membuat berbagai macam program, seperti: program CLI, Program GUI (desktop), Aplikasi Mobile, Web, IoT, Game, Program untuk Hacking, dsb</div><div><br></div><div>(Wajib)</div><div>Hallo, Saya (nama lengkap) dari prodi (prodi kamu) siap dan bangga menjadi bagian dari keluarga besar Arunika 2021, Fakultas Ilmu Komputer, Universitas Singaperbangsa Karawang</div><div><br></div><div>#SalamKampusMaroon</div><div>#Arunika2021</div><div>#TerbitBersamaSinariBangsa</div><div>#pkkmbfasilkomunsika2021</div><div>#FasilkomUnsika</div><div>#TogetherMovingForward</div><div><br></div><div>____</div><div><br></div><div>Warm Regards,</div><div>ARUNIKA 2021</div><div>Terbit Bersama Sinari Bangsa!</div>', 'uploads/pkkmb/informasi/MIND & MAPPING PKKMB FASILKOM UNSIKA 2021_1630745093.jpg', '2021-09-04 08:44:53', '2021-09-05 10:19:23'),
(10, 'PENDAFTARAN EKA SUNYA 2021', 'pendaftaran-eka-sunya-2021', '<div>Hallo, CAHAYA MUDA✨</div><div><br></div><div>Introducing our leadership program called \"Eka Sunya\".</div><div>Eka Sunya adalah program BEM Fasilkom Unsika dalam rangka menggali potensi kepemimpinan Maba Fasilkom.</div><div><br></div><div>Tugas Eka Sunya yaitu, sebagai perantara antara BEM dengan Maba Fasilkom selama PKKMB berlangsung.</div><div>Kesempatan besar buat kalian menambah relasi dan melatih jiwa kepemimpinan kalian kan.</div><div><br></div><div>Are you ready to be the next Eka Sunya 2021&nbsp;</div><div>Ketentuannya dapat dilihat di bawah ini 👇🏻</div><div>http://bit.ly/EkaSunya2021</div><div><br></div><div>Warm Regards,</div><div>ARUNIKA 2021</div><div>Terbit Bersama, Sinari Bangsa !</div><div><br></div><div>FASILKOM ❗ TOGETHER MOVING FORWARD</div><div><br></div><div>#pkkmbfasilkom2021</div><div>#terbitbersamasinaribangsa</div><div>#FasilkomUnsika</div><div>#TogetherMovingForward</div>', 'uploads/pkkmb/informasi/PENDAFTARAN EKA SUNYA 2021_1630929161.jpeg', '2021-09-06 11:52:41', '2021-09-06 11:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id`, `judul`, `slug`, `path`, `deskripsi`, `nama`, `kelas`, `prodi`, `created_at`, `updated_at`) VALUES
(1, 'Peran IoT dalam Revolusi Industri 4.0', 'peran-iot-dalam-revolusi-industri-40', 'uploads/karya/images/poster_1625772726.jpg', '<p>Revolusi Industri 4.0<br></p>', 'RIZAL VAHLEVI', '6F', 'Teknik Informatika', '2021-07-07 16:52:14', '2021-07-08 19:44:23'),
(2, '5G To Transform Lives', '5g-to-transform-lives', 'uploads/karya/images/poster-5g_1625772712.png', '-<br>', 'RIZAL VAHLEVI', '6F', 'Teknik Informatika', '2021-07-07 16:54:21', '2021-07-08 19:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keteragan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maba`
--

CREATE TABLE `maba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `absen_hari_pertama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_hari_pertama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `absen_hari_kedua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_hari_kedua` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maba`
--

INSERT INTO `maba` (`id`, `nama`, `email`, `password`, `prodi`, `nama_kelompok`, `absen_hari_pertama`, `foto_hari_pertama`, `absen_hari_kedua`, `foto_hari_kedua`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin.cs@gmail.com', '$2y$10$GW4iSTcauHmHdlPkpeTgMO65Q8TubEr5mkCzIsz4Zhs9lpjFkDYB.', 'S1 Teknik Informatika', 'tes', '2021-09-08 09:40', 'uploads/pkkmb/maba/absen-1/Admin_1631068837.png', NULL, NULL, NULL, '2021-08-31 09:54:48', '2021-09-08 02:40:37'),
(2, 'M. Huannur Asyary Muryanto', 'huannurasyary@gmail.com', '$2y$10$ZiIjVztvt9Rf2QiwgC7E6OUPprZFdfijEaFZEm8FB3n7NXT3w6HXq', 'S1 Sistem Informasi', 'Cilik Riwut', '2021-09-08 07:41', 'uploads/pkkmb/maba/absen-1/M. Huannur Asyary Muryanto_1631061791.jpeg', '2021-09-09 08:13', 'uploads/pkkmb/maba/absen-2/M. Huannur Asyary Muryanto_1631150001.jpg', NULL, '2021-09-01 02:54:41', '2021-09-09 01:13:21'),
(3, 'Laila Puspita Sari', 'lailaaapspta@gmail.com', '$2y$10$BWWSKA5Qe24a608QamNeK.oNeBcBRwa2D/c.hwGtm3vNJogMdkgn6', 'S1 Sistem Informasi', 'Fatmawati', '2021-09-08 06:58', 'uploads/pkkmb/maba/absen-1/Laila Puspita Sari_1631059466.webp', '2021-09-09 06:55', 'uploads/pkkmb/maba/absen-2/Laila Puspita Sari_1631146324.png', NULL, '2021-09-01 02:55:25', '2021-09-09 00:12:04'),
(4, 'Ferdy Setiawan Eka Saputra', 'ferdysetiawanekasaputra@gmail.com', '$2y$10$1Y11RYg2lO7QVc2zaRGydedai4x7dTEvuQPhUinILYV8Z8WBVGFM.', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:57', 'uploads/pkkmb/maba/absen-1/Ferdy Setiawan Eka Saputra_1631062869.jpeg', '2021-09-09 08:02', 'uploads/pkkmb/maba/absen-2/Ferdy Setiawan Eka Saputra_1631149443.jpeg', NULL, '2021-09-01 02:56:25', '2021-09-09 01:04:03'),
(5, 'Ramadhan Islami Pasha', 'ramadhanislamipasha@gmail.com', '$2y$10$NNr8SLYs6v8jIEs5Nf5hpuKwy9F5M02tmmY.vvXZcnatAQRN5lZP6', 'S1 Teknik Informatika', '7. Ciptomangunkusumo', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Ramadhan Islami Pasha_1631059539.jpg', '2021-09-09 07:31', 'uploads/pkkmb/maba/absen-2/Ramadhan Islami Pasha_1631147539.jpg', NULL, '2021-09-01 02:56:30', '2021-09-09 00:32:19'),
(6, 'Hilal mahdi prasidatama', 'hilalmahdi11@gmail.com', '$2y$10$MbbQdjMXAl3kWbKZ9H8JaOiTCZXhT8i5/XhNncfHEh6e1U2fj7.52', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 07:29', 'uploads/pkkmb/maba/absen-1/Hilal mahdi prasidatama_1631061463.jpg', '2021-09-09 07:31', 'uploads/pkkmb/maba/absen-2/Hilal mahdi prasidatama_1631147530.jpeg', NULL, '2021-09-01 02:58:41', '2021-09-09 00:32:10'),
(7, 'Muhammad Brillian Syifa Qolbi', 'brillian354@gmail.com', '$2y$10$8O3KeoldYTemiNIi8n4KCuR15ijCKkwpW4pY/7gal7N7xoo.Jg.6y', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:13', 'uploads/pkkmb/maba/absen-1/Muhammad Brillian Syifa Qolbi_1631060236.jpg', '2021-09-09 07:56', 'uploads/pkkmb/maba/absen-2/Muhammad Brillian Syifa Qolbi_1631149006.png', NULL, '2021-09-01 03:00:22', '2021-09-09 00:56:46'),
(8, 'Bayu Unggul Sejati', 'bayuunggul19@gmail.com', '$2y$10$KvYSL0HuJU3K4TlyV67gC.iLGZ.sn1hp9BIta5IggaTgK6EwDqeu2', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 07:07', 'uploads/pkkmb/maba/absen-1/Bayu Unggul Sejati_1631059698.jpg', '2021-09-09 07:20', 'uploads/pkkmb/maba/absen-2/Bayu Unggul Sejati_1631146887.jpg', NULL, '2021-09-01 03:00:30', '2021-09-09 00:21:27'),
(9, 'Chandra Christian', 'chandrademam@gmail.com', '$2y$10$sen4PGmagpdtLzIe5Wbfa.8KeArNb2uGUu33jM2KojaOL2lUzHQK6', 'S1 Sistem Informasi', 'Cokroaminoto', '2021-09-08 07:13', 'uploads/pkkmb/maba/absen-1/Chandra Christian_1631060144.jpg', '2021-09-09 07:13', 'uploads/pkkmb/maba/absen-2/Chandra Christian_1631146555.jpg', NULL, '2021-09-01 03:01:26', '2021-09-09 00:15:55'),
(10, 'Muhammad Fernandes', 'muhammadfernandes05@gmail.com', '$2y$10$SwLgOLXdMdTZrQudPgVSyOPxv9u9VxgySIgX/TWUXjl6q7flOku8m', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 08:30', 'uploads/pkkmb/maba/absen-1/Muhammad Fernandes_1631064786.jpg', '2021-09-09 08:07', 'uploads/pkkmb/maba/absen-2/Muhammad Fernandes_1631149731.jpg', NULL, '2021-09-01 03:01:31', '2021-09-09 01:08:51'),
(11, 'Ilham Yusuf Abidin', 'ilhamyusuf6412@gmail.com', '$2y$10$FAn14EqN3tWtM3h22dS8euvtrXjVUXcylH8MJRIenoY.wY7D.DopW', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Ilham Yusuf Abidin_1631061817.jpeg', '2021-09-09 07:44', 'uploads/pkkmb/maba/absen-2/Ilham Yusuf Abidin_1631148336.jpeg', NULL, '2021-09-01 03:02:16', '2021-09-09 00:45:36'),
(12, 'YUSMA CANTIKA PARHATI', 'yusmac16@gmail.com', '$2y$10$aekXW1Mkx7ZaR0mHOX1O7ehyEENpR9w1JWxp7G8OKK6iNe9.EIRVe', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/YUSMA CANTIKA PARHATI_1631059469.jpg', '2021-09-09 06:21', 'uploads/pkkmb/maba/absen-2/YUSMA CANTIKA PARHATI_1631146005.jpg', NULL, '2021-09-01 03:02:45', '2021-09-09 00:06:45'),
(13, 'Muhammad Zidan Fahreza', 'mzidanfahreza16@gmail.com', '$2y$10$sjO0rct0TVVSqXhEDEG95.PdW6sCFlax5ESmI.uRZgQ1C9vBJ5BjK', 'S1 Teknik Informatika', 'Kelompok 5 - Cokroaminoto', '2021-09-08 07:24', 'uploads/pkkmb/maba/absen-1/Muhammad Zidan Fahreza_1631060843.jpeg', '2021-09-09 07:07', 'uploads/pkkmb/maba/absen-2/Muhammad Zidan Fahreza_1631146114.jpeg', NULL, '2021-09-01 03:02:51', '2021-09-09 00:08:34'),
(14, 'MUHAMMAD DAFFA RACHMAN', 'daffarachman654321@gmail.com', '$2y$10$tgxD3Ly6h6DZpWjQU2Mwcu1XgZUHHhKCf9u1An49NZkK.M8Spsq.W', 'S1 Sistem Informasi', 'Cilik Riwut', '2021-09-08 07:45', 'uploads/pkkmb/maba/absen-1/MUHAMMAD DAFFA RACHMAN_1631061958.jpg', '2021-09-09 07:50', 'uploads/pkkmb/maba/absen-2/MUHAMMAD DAFFA RACHMAN_1631148669.jpg', NULL, '2021-09-01 03:03:27', '2021-09-09 00:51:09'),
(15, 'Azel Fabian Azmi', 'azelfa65@gmail.com', '$2y$10$fAs4YAyDwkaO3YhVQsiY9OH43WotArUP12rcAKNU7MvGLd1yyTuuy', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 07:18', 'uploads/pkkmb/maba/absen-1/Azel Fabian Azmi_1631060366.jpeg', '2021-09-09 07:22', 'uploads/pkkmb/maba/absen-2/Azel Fabian Azmi_1631146953.jpeg', NULL, '2021-09-01 03:05:52', '2021-09-09 00:22:33'),
(16, 'Rafi Fayyaz Reswara', 'fayyaz2606@gmail.com', '$2y$10$QFuMFiWDvvIagzie3DKzv.Aa1K5Eaz5JJBUhEDBjE/J07NyS8AIfy', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 08:30', 'uploads/pkkmb/maba/absen-1/Rafi Fayyaz Reswara_1631064645.jpg', '2021-09-09 08:42', 'uploads/pkkmb/maba/absen-2/Rafi Fayyaz Reswara_1631151831.jpg', NULL, '2021-09-01 03:07:20', '2021-09-09 01:43:51'),
(17, 'Radja Ravine Salfriandry', 'ravinesalf@gmail.com', '$2y$10$CiuC3VHvH.JpxsMrP0pBwuIvDzAz0DyGeAgbG.pYoMxMelGNNTRvy', 'S1 Teknik Informatika', 'ahmad yani', '2021-09-08 07:06', 'uploads/pkkmb/maba/absen-1/Radja Ravine Salfriandry_1631059655.jpg', '2021-09-09 07:51', 'uploads/pkkmb/maba/absen-2/Radja Ravine Salfriandry_1631148920.jpeg', NULL, '2021-09-01 03:07:43', '2021-09-09 00:55:20'),
(18, 'Risfandhiani Triara Putri', 'risfandhiani@gmail.com', '$2y$10$xKUcCOglnm1iHV83N2gqCOlrDwrW0HCrUPARiqGGcduQVcEhUpch6', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Risfandhiani Triara Putri_1631059400.jpg', '2021-09-09 06:49', 'uploads/pkkmb/maba/absen-2/Risfandhiani Triara Putri_1631147938.jpg', NULL, '2021-09-01 03:08:45', '2021-09-09 00:38:58'),
(19, 'Septian Dwirawana', 'septiannn149@gmail.com', '$2y$10$XtpG0Awx2ifKEYLqgcsureKzebBFOcmZNstDlAVYYAUntgDpw3dkO', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 06:44', 'uploads/pkkmb/maba/absen-1/Septian Dwirawana_1631058356.jpg', '2021-09-09 07:13', 'uploads/pkkmb/maba/absen-2/Septian Dwirawana_1631146448.jpg', NULL, '2021-09-01 03:08:52', '2021-09-09 00:14:08'),
(20, 'Haidar Rizqi Alamsyah', 'Haidarizlam@gmail.com', '$2y$10$GhNUlyESg23aIPTBV0wqLOMuyD0jVwEAAWV9wIBZLE1c6A90OrJ8G', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 07:26', 'uploads/pkkmb/maba/absen-1/Haidar Rizqi Alamsyah_1631060935.png', '2021-09-09 07:28', 'uploads/pkkmb/maba/absen-2/Haidar Rizqi Alamsyah_1631147489.png', NULL, '2021-09-01 03:09:12', '2021-09-09 00:31:29'),
(21, 'Fikri Maulana Setiawan', 'maulamafikri@gmail.com', '$2y$10$NS.DG/6L6PTQdKrzks/86ue2KDWsoLeUXh1p3sxnVnU/xSB1YBqS.', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 06:32', 'uploads/pkkmb/maba/absen-1/Fikri Maulana Setiawan_1631060046.jpeg', '2021-09-09 06:54', 'uploads/pkkmb/maba/absen-2/Fikri Maulana Setiawan_1631146389.jpeg', NULL, '2021-09-01 03:09:23', '2021-09-09 00:13:09'),
(22, 'Hengky Triyo', 'hengkyhorixon21@gmail.com', '$2y$10$Q7MUS/KhBJfgL9i.IO38l.bAtMLe4vlD5R2rip1FRgETISLn4eQXu', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:38', 'uploads/pkkmb/maba/absen-1/Hengky Triyo_1631061634.jpg', '2021-09-09 07:42', 'uploads/pkkmb/maba/absen-2/Hengky Triyo_1631148245.jpg', NULL, '2021-09-01 03:09:38', '2021-09-09 00:44:05'),
(23, 'Said Abdulloh', 'saidabdulloh935@gmail.com', '$2y$10$nzP.vVKKMJj/sgz0gfXpzODaK9ufnwSifM3ScsMqFFGb36I9e.972', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 06:57', 'uploads/pkkmb/maba/absen-1/Said Abdulloh_1631059243.jpg', '2021-09-09 08:07', 'uploads/pkkmb/maba/absen-2/Said Abdulloh_1631149692.jpg', NULL, '2021-09-01 03:09:49', '2021-09-09 01:08:12'),
(24, 'Wisnu Yogi Pamungkas', 'wisnuyogipamungkas@gmail.com', '$2y$10$mhr5av1MFxxbZ3avW7lXxOeGjg4G1lwnutBj.H3X3fVXnM2K.77v.', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:03', 'uploads/pkkmb/maba/absen-1/Wisnu Yogi Pamungkas_1631059470.jpeg', '2021-09-09 07:14', 'uploads/pkkmb/maba/absen-2/Wisnu Yogi Pamungkas_1631146629.jpeg', NULL, '2021-09-01 03:10:56', '2021-09-09 00:17:09'),
(25, 'Rivandi', 'rivandi29@gmail.com', '$2y$10$x8HT5l.qMxt9Mbl0jHMkQ.wpzk0uHcRm92RVtzj23uOTZ9UX8.sZu', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 06:35', 'uploads/pkkmb/maba/absen-1/Rivandi_1631059230.jpg', '2021-09-09 07:45', 'uploads/pkkmb/maba/absen-2/Rivandi_1631148384.jpg', NULL, '2021-09-01 03:11:08', '2021-09-09 00:46:24'),
(26, 'Reza Hakim', 'rezahakimalzami03@gmail.com', '$2y$10$BYyjEDAnzEiMzN1fi2DTXOAdqIyN8jVtqkL9bytAWhef5MlfaA5X6', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 07:03', 'uploads/pkkmb/maba/absen-1/Reza Hakim_1631059472.jpg', '2021-09-09 07:19', 'uploads/pkkmb/maba/absen-2/Reza Hakim_1631146817.jpeg', NULL, '2021-09-01 03:12:09', '2021-09-09 00:20:17'),
(27, 'Kevin Zefanya Sarotona Mendrofa', 'kevinmendrofa03@gmail.com', '$2y$10$bGPh6N0xrfNzyGcrrBz3bOGZW.iWYgarktdjDD5mHZQdAAfbWWC1.', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 07:14', 'uploads/pkkmb/maba/absen-1/Kevin Zefanya Sarotona Mendrofa_1631061264.jpeg', '2021-09-09 07:09', 'uploads/pkkmb/maba/absen-2/Kevin Zefanya Sarotona Mendrofa_1631146361.jpeg', NULL, '2021-09-01 03:12:21', '2021-09-09 00:12:41'),
(28, 'Virgiawan sanria', 'virgiawansanria15@gmail.com', '$2y$10$szsQrGVo3sOsJjcAunP72uh21goP0ylUunFdC3gD3QMrzHizNI4wK', 'S1 Teknik Informatika', 'Cipto mangunkusumo', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Virgiawan sanria_1631059793.jpeg', '2021-09-09 07:24', 'uploads/pkkmb/maba/absen-2/Virgiawan sanria_1631147070.jpg', NULL, '2021-09-01 03:12:30', '2021-09-09 00:24:30'),
(29, 'NOVI ANTHIKA SUCI NURHIDAYAH', 'novianthikasuci@gmail.com', '$2y$10$/goD4xe19oM1VoTwRcT73eoMZtGYvwpHerDUJyIKK6JiJoxRqtcHW', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 07:31', 'uploads/pkkmb/maba/absen-1/NOVI ANTHIKA SUCI NURHIDAYAH_1631061156.jpeg', '2021-09-09 07:15', 'uploads/pkkmb/maba/absen-2/NOVI ANTHIKA SUCI NURHIDAYAH_1631146556.jpeg', NULL, '2021-09-01 03:13:21', '2021-09-09 00:15:56'),
(30, 'Alvito Kurnia Fahrio', 'alvitokurnia@gmail.com', '$2y$10$oOvucWFCfDG/ANZgWA/2.uvDiR.aK6PUdTsNj7B1j8.nGdptZSylS', 'S1 Teknik Informatika', 'Cut Nyak dhien', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Alvito Kurnia Fahrio_1631059903.jpeg', '2021-09-09 07:35', 'uploads/pkkmb/maba/absen-2/Alvito Kurnia Fahrio_1631147888.jpg', NULL, '2021-09-01 03:13:54', '2021-09-09 00:38:08'),
(31, 'Muhammad Fitra Fajar', 'fitra6751@gmail.com', '$2y$10$q13tB3dVfMzqorzl4evHBOzWzHM8beLf5h3CH3qv/U3kwv5vSI21a', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 06:44', 'uploads/pkkmb/maba/absen-1/Muhammad Fitra Fajar_1631059411.jpg', '2021-09-09 06:39', 'uploads/pkkmb/maba/absen-2/Muhammad Fitra Fajar_1631146650.jpg', NULL, '2021-09-01 03:14:23', '2021-09-09 00:17:30'),
(32, 'Nagaryanto Suryamas', 'nagarsurya76@gmail.com', '$2y$10$z5lJ7IeoweRrZ0wubJfarO5Z7sh32rCelA3PYodczU2WUASYHtCQ.', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:23', 'uploads/pkkmb/maba/absen-1/Nagaryanto Suryamas_1631063382.jpeg', '2021-09-09 07:59', 'uploads/pkkmb/maba/absen-2/Nagaryanto Suryamas_1631149429.jpeg', NULL, '2021-09-01 03:15:12', '2021-09-09 01:03:49'),
(33, 'Gizwa Budi Nugraha', 'gizwabn21@gmail.com', '$2y$10$jmIhsDFvlPTF3tyGuAFEhe8BL1DDDTZwh7Z5Ce1SQvniIj3./nqkm', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:47', 'uploads/pkkmb/maba/absen-1/Gizwa Budi Nugraha_1631062044.jpg', '2021-09-09 06:44', 'uploads/pkkmb/maba/absen-2/Gizwa Budi Nugraha_1631146607.jpg', NULL, '2021-09-01 03:15:22', '2021-09-09 00:16:47'),
(34, 'Joice Margaretha', 'joicemargaretha933@gmail.com', '$2y$10$7Mqh1EBtvgdYZuY/NQkaEu0ym1M.uz3hsjksQCEnDBre4PIT2tHr.', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 06:17', 'uploads/pkkmb/maba/absen-1/Joice Margaretha_1631060926.jpeg', '2021-09-09 06:51', 'uploads/pkkmb/maba/absen-2/Joice Margaretha_1631146221.jpeg', NULL, '2021-09-01 03:15:28', '2021-09-09 00:10:21'),
(35, 'Alif Al Farizi', 'alifalfarizi152@gmail.com', '$2y$10$Gy8VgpyLHVfbbxbJvm0rLeUP8zzEzlLPVR3CoH.1s1vIOFujzE5Xe', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 06:34', 'uploads/pkkmb/maba/absen-1/Alif Al Farizi_1631062830.jpg', '2021-09-09 07:43', 'uploads/pkkmb/maba/absen-2/Alif Al Farizi_1631148201.jpg', NULL, '2021-09-01 03:15:42', '2021-09-09 00:43:21'),
(36, 'Muhammad Dzaki Al Fatih', 'dzakialfateeh@gmail.com', '$2y$10$ekuGTtximqV8Ocnf/I6KD.Co608xvpfxlREnGHjrTbMRaECm2jOwi', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 07:19', 'uploads/pkkmb/maba/absen-1/Muhammad Dzaki Al Fatih_1631060424.jpg', '2021-09-09 07:33', 'uploads/pkkmb/maba/absen-2/Muhammad Dzaki Al Fatih_1631147660.jpg', NULL, '2021-09-01 03:16:32', '2021-09-09 00:34:20'),
(37, 'Aqmarina Shabihah', 'aqmarinashab@gmail.com', '$2y$10$7uc8FkeQWsKv6XunzicPKOtIbzkjtbqrUZkAvS8/ypKR2fSKuOq9u', 'S1 Sistem Informasi', 'Ahmad Yani', '2021-09-08 08:13', 'uploads/pkkmb/maba/absen-1/Aqmarina Shabihah_1631063658.jpg', '2021-09-09 07:53', 'uploads/pkkmb/maba/absen-2/Aqmarina Shabihah_1631148860.jpg', NULL, '2021-09-01 03:16:46', '2021-09-09 00:54:20'),
(38, 'Hana Suci Aninda Geofani', 'hanasucianindageofani@gmail.com', '$2y$10$WuogitBSzmjni8bDrIviZ.QI4hDvQ.yoK4Os54aF4MdiRnedleIFi', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 06:49', 'uploads/pkkmb/maba/absen-1/Hana Suci Aninda Geofani_1631059340.jpg', '2021-09-09 07:01', 'uploads/pkkmb/maba/absen-2/Hana Suci Aninda Geofani_1631145911.jpg', NULL, '2021-09-01 03:17:02', '2021-09-09 00:05:11'),
(39, 'Tohadi', 'toadiasley243@gmail.com', '$2y$10$aMCHUGMQv7GZW98.leNFsepF/GieoiV60xnfIvnaHB8RqRqA4Zy02', 'S1 Teknik Informatika', '7. Cipto Mangunkusumo', '2021-09-08 07:34', 'uploads/pkkmb/maba/absen-1/Tohadi_1631061613.jpg', '2021-09-09 07:54', 'uploads/pkkmb/maba/absen-2/Tohadi_1631148913.jpg', NULL, '2021-09-01 03:17:56', '2021-09-09 00:55:13'),
(40, 'nona alya windyani', 'alyaok34@gmail.com', '$2y$10$dZDbUKZdBYPpFyXUx4MhVerL308XiL9OYl2akv9vgBHz.0IyUXlpu', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 07:29', 'uploads/pkkmb/maba/absen-1/nona alya windyani_1631061117.jpeg', '2021-09-09 07:39', 'uploads/pkkmb/maba/absen-2/nona alya windyani_1631148077.png', NULL, '2021-09-01 03:18:15', '2021-09-09 00:41:17'),
(41, 'Darma Fauzan Wibowo', 'darmafauzanwibowo42@gmail.com', '$2y$10$raGyFT6Jz8wXHCaitJv23uuAbrVKTEIijlfBDHIqbM9tHd8rCAA6K', 'S1 Teknik Informatika', '08_Al-Ghazali', '2021-09-08 08:00', 'uploads/pkkmb/maba/absen-1/Darma Fauzan Wibowo_1631062869.jpg', '2021-09-09 07:50', 'uploads/pkkmb/maba/absen-2/Darma Fauzan Wibowo_1631148788.jpg', NULL, '2021-09-01 03:18:17', '2021-09-09 00:53:08'),
(42, 'Raihan Fahlevi', 'raihanf2701@gmail.com', '$2y$10$VaqjcDLzkRfo8tnQCKNFlOdXf5ulBoW5xD7jyOp9jG1XY0X092y9y', 'S1 Teknik Informatika', 'Ahmad dahlan', '2021-09-08 07:39', 'uploads/pkkmb/maba/absen-1/Raihan Fahlevi_1631062040.jpg', '2021-09-09 07:55', 'uploads/pkkmb/maba/absen-2/Raihan Fahlevi_1631148979.jpg', NULL, '2021-09-01 03:19:21', '2021-09-09 00:56:19'),
(43, 'PHILIPS LYIONICK CORINT', 'philips.lyonick2003@gmail.com', '$2y$10$xejGE2VFuMSZwX04Iag2/O7ydGQ7MkKcSJSkFWsBAxGxrnAt6iPgu', 'S1 Sistem Informasi', 'Cut nyak dhien', '2021-09-08 07:51', 'uploads/pkkmb/maba/absen-1/PHILIPS LYIONICK CORINT_1631062330.jpg', '2021-09-09 07:01', 'uploads/pkkmb/maba/absen-2/PHILIPS LYIONICK CORINT_1631145737.jpg', NULL, '2021-09-01 03:19:24', '2021-09-09 00:02:17'),
(44, 'Salwa Salsabila', 'salwa.ss906@gmail.com', '$2y$10$53jeip4mP06sJwAzYRu7HOEnMKGGuALX0nRELdpDS33HEHp6GO1D2', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/Salwa Salsabila_1631059323.png', '2021-09-09 07:04', 'uploads/pkkmb/maba/absen-2/Salwa Salsabila_1631146199.png', NULL, '2021-09-01 03:19:25', '2021-09-09 00:09:59'),
(45, 'Rama wijaya', 'ramaopleng123@gmail.com', '$2y$10$3dOgP1RoSObqEcVFuBFp1exL6P39IRPcTXtvGbFAr8L6jhdlo3xuW', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:32', 'uploads/pkkmb/maba/absen-1/Rama wijaya_1631061203.jpg', '2021-09-09 07:41', 'uploads/pkkmb/maba/absen-2/Rama wijaya_1631148141.jpg', NULL, '2021-09-01 03:19:37', '2021-09-09 00:42:21'),
(46, 'FAUZI RAHMAT RAMADHAN', 'fauzirahmat89@gmail.com', '$2y$10$KnSSXNmbNJ/e.OFrvC.XnOfaGS1R41M8EZolDhonf07i2jrT651E6', 'S1 Teknik Informatika', 'Ahmad yani', '2021-09-08 06:12', 'uploads/pkkmb/maba/absen-1/FAUZI RAHMAT RAMADHAN_1631058392.png', '2021-09-09 06:15', 'uploads/pkkmb/maba/absen-2/FAUZI RAHMAT RAMADHAN_1631142927.png', NULL, '2021-09-01 03:19:43', '2021-09-08 23:15:28'),
(47, 'Ahmad Dylan Fachrezy', 'dylanahmad07.ad@gmail.com', '$2y$10$b2WpsushPJwai0QzK5rKr.zVbLKqsOBKvjpPTfCPbOlv5qB4kDTJ.', 'S1 Teknik Informatika', 'Ki hajar dewantara', '2021-09-08 07:04', 'uploads/pkkmb/maba/absen-1/Ahmad Dylan Fachrezy_1631059515.png', '2021-09-09 07:33', 'uploads/pkkmb/maba/absen-2/Ahmad Dylan Fachrezy_1631147637.jpg', NULL, '2021-09-01 03:20:31', '2021-09-09 00:33:57'),
(48, 'alfian nursahbani', 'nursahbanialfian7@gmail.com', '$2y$10$FgsQFUQUCbnUNqacuJd4QOSdUiz3dvL/dp4eyZxm92P5eq283MhBW', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/alfian nursahbani_1631059925.jpg', '2021-09-09 07:28', 'uploads/pkkmb/maba/absen-2/alfian nursahbani_1631147381.jpg', NULL, '2021-09-01 03:20:46', '2021-09-09 00:29:41'),
(49, 'Muhammad Tristan Putra Sisma Eka Prasetyo', 'mtristan565@gmail.com', '$2y$10$fSafvJuQxlDZAB5HTnfw9OekePPWFW73itkoVpAVXbhGEXVKD/h.a', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 07:48', 'uploads/pkkmb/maba/absen-1/Muhammad Tristan Putra Sisma Eka Prasetyo_1631062213.jpeg', '2021-09-09 07:59', 'uploads/pkkmb/maba/absen-2/Muhammad Tristan Putra Sisma Eka Prasetyo_1631149190.jpeg', NULL, '2021-09-01 03:21:01', '2021-09-09 00:59:50'),
(50, 'Daffa Farrelian', 'daffafarrelian05@gmail.com', '$2y$10$IhUZhfds/IMIh7Gnb9QFhuriRwLn8UwEVeK1Ma19fneulciXID0lm', 'S1 Teknik Informatika', 'Cut Nyak Dhien', '2021-09-08 07:26', 'uploads/pkkmb/maba/absen-1/Daffa Farrelian_1631060923.jpg', '2021-09-09 07:35', 'uploads/pkkmb/maba/absen-2/Daffa Farrelian_1631147739.jpg', NULL, '2021-09-01 03:21:34', '2021-09-09 00:35:39'),
(51, 'Clarissa Dwi Apriani', 'clarissauzumaki@gmail.com', '$2y$10$gPtNgD7r9xCZEBIZjlkl1eLyl6JsP2bO5g0MQPDHVH3PTfEpGN6xO', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 07:45', 'uploads/pkkmb/maba/absen-1/Clarissa Dwi Apriani_1631062135.jpg', '2021-09-09 06:59', 'uploads/pkkmb/maba/absen-2/Clarissa Dwi Apriani_1631145621.jpg', NULL, '2021-09-01 03:22:07', '2021-09-09 00:00:21'),
(52, 'Ihsan Fauzi', 'ihsanfauzi200.if47@gmail.com', '$2y$10$SyLUTqYhGSVUDfOISa9OpOu0MoQ9YxVtqLLMqPJyesedAaRLrIaKm', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 07:13', 'uploads/pkkmb/maba/absen-1/Ihsan Fauzi_1631060013.jpg', '2021-09-09 06:25', 'uploads/pkkmb/maba/absen-2/Ihsan Fauzi_1631145488.jpeg', NULL, '2021-09-01 03:22:24', '2021-09-08 23:58:08'),
(53, 'Deri Gilang Sumudra', 'derigilangs017@gmail.com', '$2y$10$ZxDY/XAOS9j/uh09kLbADuVm/.d35k.1DIm9eoIXUjdjvtKLY6muS', 'S1 Teknik Informatika', 'Sukarno', '2021-09-08 06:53', 'uploads/pkkmb/maba/absen-1/Deri Gilang Sumudra_1631058909.jpg', '2021-09-09 06:57', 'uploads/pkkmb/maba/absen-2/Deri Gilang Sumudra_1631145507.jpg', NULL, '2021-09-01 03:22:24', '2021-09-08 23:58:27'),
(54, 'Setyo Dwiki Prastomo', 'setyo.prastomo@gmail.com', '$2y$10$YwfBVT4rrW1Cmlui6m8DSuOF2BHHIevYOEcWcJEbOyKJkxzdNCN5i', 'S1 Sistem Informasi', 'CILIK RIWUT', '2021-09-08 06:32', 'uploads/pkkmb/maba/absen-1/Setyo Dwiki Prastomo_1631057658.jpeg', '2021-09-09 07:46', 'uploads/pkkmb/maba/absen-2/Setyo Dwiki Prastomo_1631148400.jpg', NULL, '2021-09-01 03:22:27', '2021-09-09 00:46:40'),
(55, 'CINTA RENITA', 'Cintarenita123@gmail.com', '$2y$10$cjIV319zsati/ge8jsoJi.ai1XRlBjfITeHnL2WrcGjAQI4SSmuU2', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 06:55', 'uploads/pkkmb/maba/absen-1/CINTA RENITA_1631059395.jpg', '2021-09-09 06:58', 'uploads/pkkmb/maba/absen-2/CINTA RENITA_1631146125.jpg', NULL, '2021-09-01 03:22:30', '2021-09-09 00:08:45'),
(56, 'Muhammad Samsul Ma\'arif', 'mhmmdsamsul35@gmail.com', '$2y$10$pnUtOwZz2HyAm8orTFupiu9iPeuH1WixX2yia/mr0agN446Dz.sgi', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 03:22:30', '2021-09-01 03:22:30'),
(57, 'Agung Ramadhan Gojali', 'agung.ramadhan827@gmail.com', '$2y$10$MdQBoNlSC..wKIzTzerZ0ewQBz7dLtSGpPxNx1Ibm6WB0fIYCf0tq', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 06:45', 'uploads/pkkmb/maba/absen-1/Agung Ramadhan Gojali_1631058887.jpg', '2021-09-09 07:01', 'uploads/pkkmb/maba/absen-2/Agung Ramadhan Gojali_1631146545.jpg', NULL, '2021-09-01 03:22:32', '2021-09-09 00:15:45'),
(58, 'MUHAMMAD IDZHAR SURYA PRATAMA', 'kevinchocs15@gmail.com', '$2y$10$XQXnDBwRjQibZT8j3q2c0OJZ.x.r9SAk5zEyb6/e2iQFZ1s2sP.2m', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 07:05', 'uploads/pkkmb/maba/absen-1/MUHAMMAD IDZHAR SURYA PRATAMA_1631059659.jpg', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/MUHAMMAD IDZHAR SURYA PRATAMA_1631145656.jpg', NULL, '2021-09-01 03:22:43', '2021-09-09 00:00:56'),
(59, 'Yudistio Izza Al-Farisi', 'yudistioizza@gmail.com', '$2y$10$B33Z.XGR5kL.hBTq0EGeA.g33kXBXkQqP8H3FbDO/29SnE3g9CVq.', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 14:19', 'uploads/pkkmb/maba/absen-1/Yudistio Izza Al-Farisi_1631085771.jpg', '2021-09-09 06:20', 'uploads/pkkmb/maba/absen-2/Yudistio Izza Al-Farisi_1631147288.jpeg', NULL, '2021-09-01 03:22:57', '2021-09-09 00:28:08'),
(60, 'Muhammad Aliffigo Yogatura', 'aliffigoyogatura@gmail.com', '$2y$10$Dl2tGYNEky3o5x6UjYb7gOYAEZ6TTUuXXDF6xc4dwXyHcFm8SshxW', 'S1 Sistem Informasi', 'Adam Malik', '2021-09-08 07:37', 'uploads/pkkmb/maba/absen-1/Muhammad Aliffigo Yogatura_1631061555.jpeg', '2021-09-09 07:14', 'uploads/pkkmb/maba/absen-2/Muhammad Aliffigo Yogatura_1631146509.jpeg', NULL, '2021-09-01 03:22:58', '2021-09-09 00:15:09'),
(61, 'Enen arienda ramdayani', 'enenarienda02@gmail.com', '$2y$10$pMo39GNiDwYslfpjXnZ.6OPGtQ585BwZU/Mp8RYcOKHNLY12RpuDi', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 07:23', 'uploads/pkkmb/maba/absen-1/Enen arienda ramdayani_1631060689.jpeg', '2021-09-09 07:27', 'uploads/pkkmb/maba/absen-2/Enen arienda ramdayani_1631147699.jpeg', NULL, '2021-09-01 03:23:08', '2021-09-09 00:34:59'),
(62, 'Muhammad ghazi al ghifari', 'alghiarim@gmail.com', '$2y$10$IbgTQxQ1S7cxgqFqGp0E.ehNKHWNy/iIVXjbHHgqOvvx0bGWkmru2', 'S1 Teknik Informatika', 'cipto mangunkusumo', '2021-09-08 07:39', 'uploads/pkkmb/maba/absen-1/Muhammad ghazi al ghifari_1631061611.jfif', '2021-09-09 08:15', 'uploads/pkkmb/maba/absen-2/Muhammad ghazi al ghifari_1631150207.jfif', NULL, '2021-09-01 03:23:22', '2021-09-09 01:16:47'),
(63, 'Rafli Pasya', 'raflipasya.rp@gmail.com', '$2y$10$3Z9Jy4Pu.mwoNe9v6VnBW.rjBIGVH75SWQ8cx8IlTg5corWIR1XGC', 'S1 Teknik Informatika', 'Soekarno', '2021-09-08 07:03', 'uploads/pkkmb/maba/absen-1/Rafli Pasya_1631059615.jpg', '2021-09-09 07:30', 'uploads/pkkmb/maba/absen-2/Rafli Pasya_1631147522.jpg', NULL, '2021-09-01 03:23:48', '2021-09-09 00:32:02'),
(64, 'ELANG DENNYS DHAMARA', 'elangdennys21@gmail.com', '$2y$10$KJuKzP3L62qM.YRf/RVGR.7b.WJbrbV7RqQh8JmC0WJJekNVLQzUW', 'S1 Sistem Informasi', '12 Fatmawati', '2021-09-08 07:27', 'uploads/pkkmb/maba/absen-1/ELANG DENNYS DHAMARA_1631060947.jpeg', '2021-09-09 07:44', 'uploads/pkkmb/maba/absen-2/ELANG DENNYS DHAMARA_1631148319.jpg', NULL, '2021-09-01 03:23:51', '2021-09-09 00:45:20'),
(65, 'Agisni Biidnilahi Muhamad Sahlan', 'giisni123@gmail.com', '$2y$10$Y5wk0IPtUUqGCTFJVKYPz.NTBGkiSaB7ptlPwbvwYoP/Gtu5cCACK', 'S1 Sistem Informasi', 'Soekarno', '2021-09-08 07:33', 'uploads/pkkmb/maba/absen-1/Agisni Biidnilahi Muhamad Sahlan_1631061484.jpg', '2021-09-09 07:38', 'uploads/pkkmb/maba/absen-2/Agisni Biidnilahi Muhamad Sahlan_1631148028.jpeg', NULL, '2021-09-01 03:24:48', '2021-09-09 00:40:28'),
(66, 'Muh. Yoga Fauzan', 'myoga.fauzan@gmail.com', '$2y$10$9fmsV60p/tTlGgQUYZYkOuqx2YBAvx6Qfwy35BPMgpcgEbrSX7ngS', 'S1 Teknik Informatika', 'Dipenogoro', '2021-09-08 06:58', 'uploads/pkkmb/maba/absen-1/Muh. Yoga Fauzan_1631059270.png', '2021-09-09 06:24', 'uploads/pkkmb/maba/absen-2/Muh. Yoga Fauzan_1631143916.jpeg', NULL, '2021-09-01 03:24:53', '2021-09-08 23:31:56'),
(67, 'Ridho Alamsyah', 'ridhoalamsyah3@gmail.com', '$2y$10$Jm4CnhvpaaSa//aMNf7XcOeaBsQJCLzMeQ0LBQEnDx15kSofmeqky', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Ridho Alamsyah_1631059955.jpg', '2021-09-09 07:06', 'uploads/pkkmb/maba/absen-2/Ridho Alamsyah_1631147912.jpg', NULL, '2021-09-01 03:25:06', '2021-09-09 00:38:32'),
(68, 'Hilman Fatoni', 'hilmanfatoni8@gmail.com', '$2y$10$8CGj8ptmSX0lunPn2DRVrePMpD5z.BUHuYRSoKa2Rhw.VbuHFjLWi', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 07:54', 'uploads/pkkmb/maba/absen-1/Hilman Fatoni_1631062531.jpg', '2021-09-09 07:29', 'uploads/pkkmb/maba/absen-2/Hilman Fatoni_1631147414.jpg', NULL, '2021-09-01 03:28:52', '2021-09-09 00:30:14'),
(69, 'Aulia Septiana', 'aullsptna313@gmail.com', '$2y$10$XSQyPqKP7O6x6pN0fq3cjeVWEfDzW/C9u34lsteWQIGH9n/JU5KbS', 'S1 Sistem Informasi', 'Dewi sartika', '2021-09-08 06:30', 'uploads/pkkmb/maba/absen-1/Aulia Septiana_1631059977.jpg', '2021-09-09 06:28', 'uploads/pkkmb/maba/absen-2/Aulia Septiana_1631146123.jpg', NULL, '2021-09-01 03:29:56', '2021-09-09 00:08:43'),
(70, 'HILMY SUKMA NURMAKARIM', 'Hilmysukma12@gmail.com', '$2y$10$u4UbqRQVPPUKvkvle4nAOe520kht/1OKBUqxCCsdvgVfYIcH.8foW', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 07:52', 'uploads/pkkmb/maba/absen-1/HILMY SUKMA NURMAKARIM_1631063063.jpg', '2021-09-09 07:58', 'uploads/pkkmb/maba/absen-2/HILMY SUKMA NURMAKARIM_1631149140.jpeg', NULL, '2021-09-01 03:30:01', '2021-09-09 00:59:00'),
(71, 'Zikri Pawa Agisna', 'zikryfawa@gmail.com', '$2y$10$rAbg6tJ0AcE1k3nC6riopuw5GsNlOk86b4o1hMrqjW9ELDNYjY7ou', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 03:30:12', '2021-09-01 03:30:12'),
(72, 'Nauval Dwi Rivalfakhri', 'novalrivakh31@gmail.com', '$2y$10$UWfSTlX5gIOQTSp.gW.iGu2nzWWsbzHqOJdsAcGPm.Lu0Q/O5FrHC', 'S1 Sistem Informasi', 'Ibnu Sina', '2021-09-08 07:09', 'uploads/pkkmb/maba/absen-1/Nauval Dwi Rivalfakhri_1631060582.jpeg', '2021-09-09 07:09', 'uploads/pkkmb/maba/absen-2/Nauval Dwi Rivalfakhri_1631146328.jpeg', NULL, '2021-09-01 03:30:49', '2021-09-09 00:12:08'),
(73, 'Eddy Ryansyah', 'eddyryansyah1612@gmail.com', '$2y$10$prFpui2lvDFLfh5y29uG8On98PJqvLDnCpo/OzIRSaKYpS7EkzDuC', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 07:06', 'uploads/pkkmb/maba/absen-1/Eddy Ryansyah_1631059791.jpg', '2021-09-09 06:48', 'uploads/pkkmb/maba/absen-2/Eddy Ryansyah_1631145101.jpg', NULL, '2021-09-01 03:31:23', '2021-09-08 23:51:41'),
(74, 'Tarida Grace Wahyuni Margaretha', 'taridagrace96.tg@gmail.com', '$2y$10$Bq2l1KQRHXLhM1X.mS1mAO6OQACmBI5OLwinsvy.ba9rzXWCeM0nK', 'S1 Teknik Informatika', 'Tarida Grace_Kelompok 12 Fatmawati', '2021-09-08 07:52', 'uploads/pkkmb/maba/absen-1/Tarida Grace Wahyuni Margaretha_1631062667.jpeg', '2021-09-09 07:15', 'uploads/pkkmb/maba/absen-2/Tarida Grace Wahyuni Margaretha_1631147055.jpeg', NULL, '2021-09-01 03:32:01', '2021-09-09 00:24:15'),
(75, 'MUHAMMAD ANDIKA ANJAS SYAPUTRA', 'andikasyaputra818@gmail.com', '$2y$10$XZuASVX81s/FdzWXG0FT1eCsC.dS6S7/LfBjL/3Afh9x8QM2sb3lO', 'S1 Sistem Informasi', 'Ki hajar dewantara', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/MUHAMMAD ANDIKA ANJAS SYAPUTRA_1631059313.jpg', '2021-09-09 06:55', 'uploads/pkkmb/maba/absen-2/MUHAMMAD ANDIKA ANJAS SYAPUTRA_1631146298.jpg', NULL, '2021-09-01 03:32:36', '2021-09-09 00:11:38'),
(76, 'LILY', 'changlily1002@gmail.com', '$2y$10$h4G2XO7UFhH.PQ7I8fdkduXKKHmZHtgAJ6h6gOgG6sHjY4zYSlXt6', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 03:34:17', '2021-09-01 03:34:17'),
(77, 'Alviany Adzany Febriyanti', 'tsunaliuz1818@gmail.com', '$2y$10$mNn.hxZXdSGCV.hNhCr8ZuPrdOnkzwSpsLBdUaizzWna3CG2AL6IK', 'S1 Teknik Informatika', 'Soekarno', '2021-09-08 06:43', 'uploads/pkkmb/maba/absen-1/Alviany Adzany Febriyanti_1631058355.jpeg', '2021-09-09 06:51', 'uploads/pkkmb/maba/absen-2/Alviany Adzany Febriyanti_1631145107.jpeg', NULL, '2021-09-01 03:38:20', '2021-09-08 23:51:47'),
(78, 'Muhammad Dandy Tadzikira S.A', 'danoytadjikira@gmail.com', '$2y$10$RpwGrGl2iCy/W17LgRiiSOJMGmxMkDshpaUE3JTTGnl57eWeNeykC', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Muhammad Dandy Tadzikira S.A_1631061066.jpeg', '2021-09-09 06:41', 'uploads/pkkmb/maba/absen-2/Muhammad Dandy Tadzikira S.A_1631145732.jpg', NULL, '2021-09-01 03:44:03', '2021-09-09 00:02:12'),
(79, 'Firda Ayu Hassanah', 'firda.hassanah@gmail.com', '$2y$10$aaa3Lmc8gSfEb1dX4kUDQujdGASF8STR0PvvrQ2CrNNeahwXLf04S', 'S1 Teknik Informatika', 'fatmawati', '2021-09-08 06:46', 'uploads/pkkmb/maba/absen-1/Firda Ayu Hassanah_1631059340.png', '2021-09-09 07:20', 'uploads/pkkmb/maba/absen-2/Firda Ayu Hassanah_1631146893.png', NULL, '2021-09-01 03:44:38', '2021-09-09 00:21:33'),
(80, 'Annastia Reza Dzulhaj', '230203annastia@gmail.com', '$2y$10$BZGq8rjdZJsKr2XT0.ZGyuNCb1/FlLWVnSOU2B2KTEiocuPo46qcm', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 06:56', 'uploads/pkkmb/maba/absen-1/Annastia Reza Dzulhaj_1631059190.jpg', '2021-09-09 06:40', 'uploads/pkkmb/maba/absen-2/Annastia Reza Dzulhaj_1631144497.jpeg', NULL, '2021-09-01 03:46:14', '2021-09-08 23:41:37'),
(81, 'Rosa Salsa Saida', 'rosalsaida82@gmail.com', '$2y$10$f.4D9Z9qHDTjQ/xaMQhTYOcY/Eysbbmpt8t4Da43AgPrG9vUF.6Si', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:16', 'uploads/pkkmb/maba/absen-1/Rosa Salsa Saida_1631060261.jpg', '2021-09-09 06:49', 'uploads/pkkmb/maba/absen-2/Rosa Salsa Saida_1631145007.jpg', NULL, '2021-09-01 03:46:37', '2021-09-08 23:50:07'),
(82, 'Immanuel Santosa Lumban Siantar', 'santosa07immanuel@gmail.com', '$2y$10$YHLSBSyPgaXYrtTOv3b6XOFkMuM/WVmSyadCKzVf7TAcnVwe6H7r6', 'S1 Sistem Informasi', 'Cilik Riwut', '2021-09-08 07:27', 'uploads/pkkmb/maba/absen-1/Immanuel Santosa Lumban Siantar_1631060929.jpg', '2021-09-09 06:53', 'uploads/pkkmb/maba/absen-2/Immanuel Santosa Lumban Siantar_1631145728.jpg', NULL, '2021-09-01 03:46:57', '2021-09-09 00:02:09'),
(83, 'Gabrielle ahmad wicaksono', 'wicaksonogabrielle@gmail.com', '$2y$10$5hSDrH7Vuj.r1jDBlqkfJ.HnsXtqxKxplLcBrZNK/fwFkISgYFuOS', 'S1 Sistem Informasi', 'Cipto Mangunkusumo', '2021-09-08 06:52', 'uploads/pkkmb/maba/absen-1/Gabrielle ahmad wicaksono_1631059287.jpg', '2021-09-09 07:13', 'uploads/pkkmb/maba/absen-2/Gabrielle ahmad wicaksono_1631146413.jpg', NULL, '2021-09-01 03:47:30', '2021-09-09 00:13:33'),
(84, 'Rossiatul Azizah', 'ochiprans29@gmail.com', '$2y$10$wJxpfMw.k.DTyRba9XYgk.BmA4SZ5.i9WMRVYqi.hhBd8pJHlVGrS', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 03:47:51', '2021-09-01 03:47:51'),
(85, 'Annisa Intan Nuraini', 'annisaintanuraini@gmail.com', '$2y$10$KhaDDCPqPItFQMZgR7WhfO7fY8loDuqop.SZalorKfljSKLULkJgm', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 07:21', 'uploads/pkkmb/maba/absen-1/Annisa Intan Nuraini_1631060557.jpeg', '2021-09-09 06:51', 'uploads/pkkmb/maba/absen-2/Annisa Intan Nuraini_1631146017.jpg', NULL, '2021-09-01 03:50:01', '2021-09-09 00:06:57'),
(86, 'Shafly Firmansyah', 'shaflyfirmansyah109@gmail.com', '$2y$10$Mpymj9qtn3Pth1qftmi8qefmqKIiFL75oQzA/DijJnyUlSpiVwNfy', 'S1 Sistem Informasi', 'Adam Malik', '2021-09-08 07:29', 'uploads/pkkmb/maba/absen-1/Shafly Firmansyah_1631061188.jpg', '2021-09-09 07:11', 'uploads/pkkmb/maba/absen-2/Shafly Firmansyah_1631146852.jpg', NULL, '2021-09-01 03:51:00', '2021-09-09 00:20:52'),
(87, 'HERU TRIANA', 'herutriana44@gmail.com', '$2y$10$TrAStEYYYp9ZDKpXq2YXW.Ypp75jnWjcDapLQj4z8XkDd9iLSFi7W', 'S1 Teknik Informatika', 'ADAM MALIK', '2021-09-08 07:20', 'uploads/pkkmb/maba/absen-1/HERU TRIANA_1631060523.jpg', '2021-09-09 07:28', 'uploads/pkkmb/maba/absen-2/HERU TRIANA_1631147355.jpg', NULL, '2021-09-01 03:52:14', '2021-09-09 00:29:15'),
(88, 'Idshal Setyo Nugroho', 'ishalnugroho@gmail.com', '$2y$10$DXvNm29LluRn3kSrTbtn2O4IF2ZNjuMwNbYDQqRSB2SVLfMwFHojW', 'S1 Sistem Informasi', 'Gatot subroto', '2021-09-08 06:50', 'uploads/pkkmb/maba/absen-1/Idshal Setyo Nugroho_1631060666.jpeg', '2021-09-09 06:59', 'uploads/pkkmb/maba/absen-2/Idshal Setyo Nugroho_1631146062.jpeg', NULL, '2021-09-01 03:52:17', '2021-09-09 00:07:42'),
(89, 'Khalidah Rossa Amaliah', 'khalidahrossaam06@gmail.com', '$2y$10$JQlepjre/AlcjR66C0IPYOnaX6MiUCau4hOrpvAHG9Yqfm80CIk8e', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 07:09', 'uploads/pkkmb/maba/absen-1/Khalidah Rossa Amaliah_1631059818.jpg', '2021-09-09 07:03', 'uploads/pkkmb/maba/absen-2/Khalidah Rossa Amaliah_1631146257.jpg', NULL, '2021-09-01 03:54:00', '2021-09-09 00:10:57'),
(90, 'muhammad furqon huwaidy', 'm.huwaidy23@gmail.com', '$2y$10$pQC2c20pI1MTkgzzy4FKe.QEbH/Vh5AKyoyodHCYjYVLKvD47OnEC', 'S1 Sistem Informasi', 'fatmawati', '2021-09-08 06:47', 'uploads/pkkmb/maba/absen-1/muhammad furqon huwaidy_1631059385.jpg', '2021-09-09 07:03', 'uploads/pkkmb/maba/absen-2/muhammad furqon huwaidy_1631145901.jpg', NULL, '2021-09-01 03:54:47', '2021-09-09 00:05:01'),
(91, 'Pradika Rizky Pangestu', 'pradikarizky5@gmail.com', '$2y$10$f48TR4yxvPys/Df5UFyTKeGNzABvAVHu4Sd20SiD16Pn2gsB5YfVa', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 03:55:27', '2021-09-01 03:55:27'),
(92, 'Wanda Putra Ramadhan', 'wandaputrar@gmail.com', '$2y$10$Lg5uw5Mb4uzH4Re13AORV.1iJp9FcxNnbM1ok46LWsoiRPTbE1XwC', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/Wanda Putra Ramadhan_1631060018.jpg', '2021-09-09 07:50', 'uploads/pkkmb/maba/absen-2/Wanda Putra Ramadhan_1631149081.jpg', NULL, '2021-09-01 04:00:01', '2021-09-09 00:58:01'),
(93, 'Pradika Rizky Pangestu', 'dika05059@gmail.com', '$2y$10$20DvL9oMWsyyDLlY97iFUeX5B8fJAgL3NNLxwYsnjTrQM83C8M.zy', 'S1 Sistem Informasi', 'Cipto Mangunkusumo', '2021-09-08 07:12', 'uploads/pkkmb/maba/absen-1/Pradika Rizky Pangestu_1631060058.jpeg', '2021-09-09 08:04', 'uploads/pkkmb/maba/absen-2/Pradika Rizky Pangestu_1631149516.jpeg', NULL, '2021-09-01 04:00:32', '2021-09-09 01:05:16'),
(94, 'Nana Casmana Ade Wikarta', 'awnana123@gmail.com', '$2y$10$JNnTc8s9XK0VPXD1HqZol.xB7q9qdDzZSRiqaoV.6j01P6ssUyHtS', 'S1 Teknik Informatika', 'Cut Nyak Dhien', '2021-09-08 07:24', 'uploads/pkkmb/maba/absen-1/Nana Casmana Ade Wikarta_1631060797.jpeg', '2021-09-09 07:46', 'uploads/pkkmb/maba/absen-2/Nana Casmana Ade Wikarta_1631148417.jpg', NULL, '2021-09-01 04:03:10', '2021-09-09 00:46:57'),
(95, 'Aluthfi Fadilah', 'aluthfifadilah90@gmail.com', '$2y$10$3nFr0CxF0Ct92FoMEgZma.3xWuZRihl3mONJ1D7Vo1GSUp/eMpOhS', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 07:00', 'uploads/pkkmb/maba/absen-1/Aluthfi Fadilah_1631059512.jpg', '2021-09-09 07:07', 'uploads/pkkmb/maba/absen-2/Aluthfi Fadilah_1631146219.jpg', NULL, '2021-09-01 04:05:29', '2021-09-09 00:10:19'),
(96, 'Nurmala Dewi', 'nd81041@gmail.com', '$2y$10$DXbSGJkKGcFPwEhxVg2k/eIVmlvgU5NvNxZWD2AL6jCTDM4VnvAeO', 'S1 Teknik Informatika', 'Geoffrey Chaucer', '2021-09-08 06:44', 'uploads/pkkmb/maba/absen-1/Nurmala Dewi_1631058552.jpg', '2021-09-09 06:23', 'uploads/pkkmb/maba/absen-2/Nurmala Dewi_1631143423.jpg', NULL, '2021-09-01 04:05:47', '2021-09-08 23:23:43'),
(97, 'Rosyid Eko Nugroho', 'rosyid123.ren@gmail.com', '$2y$10$aqqn8A/a6JM7UgPs6HsAYeEyBFwXUzZ7pw2FJeaaMODQxiZm5nYCS', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Rosyid Eko Nugroho_1631059342.jpg', '2021-09-09 06:52', 'uploads/pkkmb/maba/absen-2/Rosyid Eko Nugroho_1631145270.jpg', NULL, '2021-09-01 04:09:40', '2021-09-08 23:54:30'),
(98, 'Fitria Aryani', 'fitriaaryani281103@gmail.com', '$2y$10$GXzkeYpQXY9XbOWJf4tJquJJ9GB4AlaY2k/qSw24ozXf56eJpqgw2', 'S1 Sistem Informasi', 'Soekarno', '2021-09-08 06:42', 'uploads/pkkmb/maba/absen-1/Fitria Aryani_1631058278.jpg', '2021-09-09 06:53', 'uploads/pkkmb/maba/absen-2/Fitria Aryani_1631145210.jpg', NULL, '2021-09-01 04:10:04', '2021-09-08 23:53:30'),
(99, 'Tristan Rafik Yusdi', 'rookies.aniya08@gmail.com', '$2y$10$rxs8UGInPD2R7LRItJ6Zh.WLixi0SW90aHv6DV0JLoGp1C7Q8Ae56', 'S1 Teknik Informatika', 'Cut Nyak Dhien', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Tristan Rafik Yusdi_1631059535.jpg', '2021-09-09 07:12', 'uploads/pkkmb/maba/absen-2/Tristan Rafik Yusdi_1631146449.jpg', NULL, '2021-09-01 04:23:22', '2021-09-09 00:14:09'),
(100, 'Najwa Nurshadrina', 'najwanurshadrina0909@gmail.com', '$2y$10$G5Ht21eet1/Wr/1Q9Sp3Qer/IbhBMZbYWgcqNRaYRzfBVVdiYUVkq', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:05', 'uploads/pkkmb/maba/absen-1/Najwa Nurshadrina_1631059719.png', '2021-09-09 07:11', 'uploads/pkkmb/maba/absen-2/Najwa Nurshadrina_1631146337.png', NULL, '2021-09-01 04:25:19', '2021-09-09 00:12:17'),
(101, 'Alifia Nurhasanah', 'alifianurhasanah1@gmail.com', '$2y$10$fW6QPRAcMR38vdY5gkMaauj5KiwtOv4omVJh/3gBoIBA./4vUYYNm', 'S1 Teknik Informatika', 'Kelompok 1 Soekarno', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/Alifia Nurhasanah_1631059333.jpg', '2021-09-09 07:20', 'uploads/pkkmb/maba/absen-2/Alifia Nurhasanah_1631146904.jpg', NULL, '2021-09-01 04:25:44', '2021-09-09 00:21:44'),
(102, 'Muhammad Hafizh Ihsan', 'mhafiiizh@gmail.com', '$2y$10$fvHog0CEimk0FzS5I1GoUusQ5HsOVQbuQYQwdk8mxGKi5HorC5eGa', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:11', 'uploads/pkkmb/maba/absen-1/Muhammad Hafizh Ihsan_1631060054.jpg', '2021-09-09 07:19', 'uploads/pkkmb/maba/absen-2/Muhammad Hafizh Ihsan_1631146834.jpg', NULL, '2021-09-01 04:25:55', '2021-09-09 00:20:34'),
(103, 'Taufik Faturokhman', 'taufikfaturokhmann@gmail.com', '$2y$10$4ICXzT/XnaD641I6reL3V.n1lCiHl3Ak20Me90gRhwyu8qT7ywRKm', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/Taufik Faturokhman_1631059772.jpg', '2021-09-09 07:26', 'uploads/pkkmb/maba/absen-2/Taufik Faturokhman_1631147241.jpg', NULL, '2021-09-01 04:33:04', '2021-09-09 00:27:21'),
(104, 'Bayu Ragil Pangestu', 'bayuragilpangestu8677@gmail.com', '$2y$10$WiEL56ou0b2nF/75J/bOd..E0Xv2Rr30BY5nsQpkmU6NhQzhIG5Qa', 'S1 Sistem Informasi', 'Bayu Ragil_Cokroaminoto', '2021-09-08 07:05', 'uploads/pkkmb/maba/absen-1/Bayu Ragil Pangestu_1631059678.jpg', '2021-09-09 07:08', 'uploads/pkkmb/maba/absen-2/Bayu Ragil Pangestu_1631146116.jpg', NULL, '2021-09-01 04:33:33', '2021-09-09 00:08:36'),
(105, 'Raihan Fikri', 'raihanfikri79@gmail.com', '$2y$10$HXdgTDyARJ0gSA40bC7rL.Rk2waemzw0q0PK5iiOVfFO7XLiTbJYm', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:06', 'uploads/pkkmb/maba/absen-1/Raihan Fikri_1631059708.jpg', '2021-09-09 07:38', 'uploads/pkkmb/maba/absen-2/Raihan Fikri_1631147961.jpg', NULL, '2021-09-01 04:34:46', '2021-09-09 00:39:21'),
(106, 'Muhammad hafidz nur Rachman', 'hafidzbrocalito92@gmail.com', '$2y$10$epyqW.P0rFO3BKv0QAoX5OCnkBoUEzaok1qQoNoC/8c5QU3LPSDzO', 'S1 Teknik Informatika', 'Dewi sartika', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Muhammad hafidz nur Rachman_1631059341.jpg', '2021-09-09 06:58', 'uploads/pkkmb/maba/absen-2/Muhammad hafidz nur Rachman_1631146243.jpg', NULL, '2021-09-01 04:36:11', '2021-09-09 00:10:43'),
(107, 'Ilham Yudiatmoko', 'yudiatmokoilham@gmail.com', '$2y$10$fLva8gD6ug3PiqgyB5c2tuhP/lWrM9NXjY7r5YPV0Tj/D0H5X67fK', 'S1 Sistem Informasi', 'Cokroaminoto', '2021-09-08 07:39', 'uploads/pkkmb/maba/absen-1/Ilham Yudiatmoko_1631061568.jpg', '2021-09-09 07:51', 'uploads/pkkmb/maba/absen-2/Ilham Yudiatmoko_1631148811.jpg', NULL, '2021-09-01 04:38:20', '2021-09-09 00:53:31'),
(108, 'Aditya Fian Sugiarto', 'adityafian24@gmail.com', '$2y$10$yu1n3jr5BqceaHZPIgjZ5Oc/fEJ5c0JqK2y89n3BCOfLx0kcy/yjK', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 07:04', 'uploads/pkkmb/maba/absen-1/Aditya Fian Sugiarto_1631059651.jpg', '2021-09-09 07:32', 'uploads/pkkmb/maba/absen-2/Aditya Fian Sugiarto_1631147594.jpg', NULL, '2021-09-01 04:39:17', '2021-09-09 00:33:14'),
(109, 'Candra purnama aji', 'candrapurnamaaji7@gmail.com', '$2y$10$AYT3nWd.njCQGn2hMhov/OxTaWpKghSfw7LthiJZ4BVsnNEqG8vxK', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:10', 'uploads/pkkmb/maba/absen-1/Candra purnama aji_1631059894.jpg', '2021-09-09 07:35', 'uploads/pkkmb/maba/absen-2/Candra purnama aji_1631147790.jpg', NULL, '2021-09-01 04:41:04', '2021-09-09 00:36:30'),
(110, 'MUFTI ARKHAN HARSONO', 'arkanpjr923@gmail.com', '$2y$10$VFWwIpNTnjn4XmvhEJCzYu1lc0KnMaLVQs/m8AtMC5g5pPDG.mVLG', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 06:18', 'uploads/pkkmb/maba/absen-1/MUFTI ARKHAN HARSONO_1631056788.jpg', '2021-09-09 07:01', 'uploads/pkkmb/maba/absen-2/MUFTI ARKHAN HARSONO_1631145908.jpg', NULL, '2021-09-01 04:43:00', '2021-09-09 00:05:08'),
(111, 'Eka Nazar Fajriansyah', 'ekanazarfajriansyah@gmail.com', '$2y$10$/RrXehmUrV3KBsAFUh3oHueuGFJMXSeSQekkC/lpgdTKnTPP5BcoG', 'S1 Sistem Informasi', 'Adam Malik', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Eka Nazar Fajriansyah_1631060857.jpg', '2021-09-09 07:28', 'uploads/pkkmb/maba/absen-2/Eka Nazar Fajriansyah_1631147390.jpg', NULL, '2021-09-01 04:46:14', '2021-09-09 00:29:50'),
(112, 'Akbar Nugraha Dimyati', '031119akbar@gmail.com', '$2y$10$WvZHKwz/VkKdnD9m4ZHohO.OprLFUc0rRJRvrsDFEobsvC1O2Nlx6', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:00', 'uploads/pkkmb/maba/absen-1/Akbar Nugraha Dimyati_1631059301.jpg', '2021-09-09 06:55', 'uploads/pkkmb/maba/absen-2/Akbar Nugraha Dimyati_1631145726.jpg', NULL, '2021-09-01 04:47:05', '2021-09-09 00:02:06'),
(113, 'ASHIFA HALIMATUS SADIAH', 'shifahalsa@gmail.com', '$2y$10$ovCpAx0.agieYE0YCgqng.FOKtiDDjksVKnNIsPeZdB8kAFZGNpGi', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 07:07', 'uploads/pkkmb/maba/absen-1/ASHIFA HALIMATUS SADIAH_1631059690.jpg', '2021-09-09 07:52', 'uploads/pkkmb/maba/absen-2/ASHIFA HALIMATUS SADIAH_1631148777.jpg', NULL, '2021-09-01 04:49:04', '2021-09-09 00:52:57'),
(114, 'Divasetya Pratama Putri', 'divasetya123@gmail.com', '$2y$10$FYWaxgNmvUzT29DoUP.gh.mYkQJZkpzVdKTWIiEmgVqDtL0W.3V/O', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Divasetya Pratama Putri_1631059388.jpg', '2021-09-09 07:07', 'uploads/pkkmb/maba/absen-2/Divasetya Pratama Putri_1631146240.jpg', NULL, '2021-09-01 04:49:55', '2021-09-09 00:10:40'),
(115, 'Farhan Naufal Sukmana', 'farnausuk@gmail.com', '$2y$10$78IlO9lBcQp2KwK89s06d.a7tAyUhWywKt6mGMiuqaP/P74er.Jxi', 'S1 Teknik Informatika', 'Soekarno', '2021-09-08 07:05', 'uploads/pkkmb/maba/absen-1/Farhan Naufal Sukmana_1631059643.jpg', '2021-09-09 07:09', 'uploads/pkkmb/maba/absen-2/Farhan Naufal Sukmana_1631146212.jpeg', NULL, '2021-09-01 04:51:46', '2021-09-09 00:10:12'),
(116, 'Muhammad Rafi', 'mrafi0603@gmail.com', '$2y$10$/cf7GqZvXWXPQwiNian0LOvHLfWy9sMrdfAXCac5TjyELO11h2cIq', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 07:24', 'uploads/pkkmb/maba/absen-1/Muhammad Rafi_1631061945.jpg', '2021-09-09 08:10', 'uploads/pkkmb/maba/absen-2/Muhammad Rafi_1631149876.jpeg', NULL, '2021-09-01 04:53:40', '2021-09-09 01:11:16'),
(117, 'Anggriawan Sifa Wahyusesa', 'awannnnnnnn19@gmail.com', '$2y$10$qOBGoF3QWYWNdE1At5mHmOKCyvNDfO62ccFKZM/MNC8UNZSRhqNZ2', 'S1 Teknik Informatika', 'Cilik riwut', '2021-09-08 07:16', 'uploads/pkkmb/maba/absen-1/Anggriawan Sifa Wahyusesa_1631060355.jpg', '2021-09-09 07:59', 'uploads/pkkmb/maba/absen-2/Anggriawan Sifa Wahyusesa_1631149237.jpg', NULL, '2021-09-01 04:55:37', '2021-09-09 01:00:37'),
(118, 'Cahyo Tri Atmojo', 'cahyotriatmojo906@gmail.com', '$2y$10$E1/kuanAcCieJpA81IbGlOG7hLNXkU.m2VKP1CcSaPU1w.kzEIf.m', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 06:58', 'uploads/pkkmb/maba/absen-1/Cahyo Tri Atmojo_1631059277.jpeg', '2021-09-09 07:03', 'uploads/pkkmb/maba/absen-2/Cahyo Tri Atmojo_1631146072.jpeg', NULL, '2021-09-01 05:05:21', '2021-09-09 00:07:52'),
(119, 'Melanie Putri', 'melanieputri4501@gmail.com', '$2y$10$uo8MF/iqci9NsxgaNQkGy.9Foud/Tr70wBSilXz4S3q53euCI6KZi', 'S1 Sistem Informasi', 'Diponegoro', '2021-09-08 08:09', 'uploads/pkkmb/maba/absen-1/Melanie Putri_1631063434.jpg', '2021-09-09 07:47', 'uploads/pkkmb/maba/absen-2/Melanie Putri_1631148470.jpg', NULL, '2021-09-01 05:12:43', '2021-09-09 00:47:50'),
(120, 'Melanie Putri', 'melanieputri0173@gmail.com', '$2y$10$eksr6O0ANqdpS6/.H68G9uSHJaaNL.nFRM.HnnXQQvva3CU2uZyne', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 05:13:15', '2021-09-01 05:13:15'),
(121, 'Roy Bagus Sanjaya', 'Roybagussanjaya127@gmail.com', '$2y$10$8VxbMk/XmiDZc.PdeVn.PeUg7qmcsHfiKYsCF/oYq9HxsL1NPbOO.', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 07:07', 'uploads/pkkmb/maba/absen-1/Roy Bagus Sanjaya_1631059789.jpg', '2021-09-09 07:12', 'uploads/pkkmb/maba/absen-2/Roy Bagus Sanjaya_1631146887.jpg', NULL, '2021-09-01 05:15:34', '2021-09-09 00:21:27'),
(122, 'Muhammad Ibrah Bayuara', 'Bayuara168@gmail.com', '$2y$10$2kFrKivlK/8Wo188zfxBQOTULWu9.xP8.AooUh9rkryiG39.Q1YkK', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Muhammad Ibrah Bayuara_1631059339.jpg', '2021-09-09 07:05', 'uploads/pkkmb/maba/absen-2/Muhammad Ibrah Bayuara_1631145973.jpg', NULL, '2021-09-01 05:16:10', '2021-09-09 00:06:13'),
(123, 'Dimas Aryansyah', 'dimasaryansyah02560@gmail.com', '$2y$10$JnDACdugIzZXwworQVr9y.IbmU5EXUwiqXTvhSOQOPnDSlrxmEvfa', 'S1 Teknik Informatika', '4. Ahmad Dahlan', '2021-09-08 07:31', 'uploads/pkkmb/maba/absen-1/Dimas Aryansyah_1631061231.jpg', '2021-09-09 07:33', 'uploads/pkkmb/maba/absen-2/Dimas Aryansyah_1631147667.jpg', NULL, '2021-09-01 05:24:26', '2021-09-09 00:34:27'),
(124, 'Galuh Rangga Wahyudi', 'galuhrangga6@gmail.com', '$2y$10$r3Y3bVZzdhxZxxb7i1Asi.lM4n7TesqqikzkrNa8ssaiHW17BlNiG', 'S1 Sistem Informasi', 'Diponegoro', '2021-09-08 08:32', 'uploads/pkkmb/maba/absen-1/Galuh Rangga Wahyudi_1631064892.jpg', '2021-09-09 08:29', 'uploads/pkkmb/maba/absen-2/Galuh Rangga Wahyudi_1631151050.jpg', NULL, '2021-09-01 05:33:47', '2021-09-09 01:30:50'),
(125, 'Rahma Herawati', 'rahmaherawati55@gmail.com', '$2y$10$M7zsQdfGY0WrRdlDQIR9h.9bLoguW1cXHF3YZ8qmdlWQSikTW0v/e', 'S1 Sistem Informasi', 'cokroaminoto', '2021-09-08 07:21', 'uploads/pkkmb/maba/absen-1/Rahma Herawati_1631060534.jpeg', '2021-09-09 07:10', 'uploads/pkkmb/maba/absen-2/Rahma Herawati_1631146299.jpeg', NULL, '2021-09-01 05:37:38', '2021-09-09 00:11:39'),
(126, 'Nurmeirasari', 'nurmeirasari29@gmail.com', '$2y$10$4COIMuv8hDqf/MI4TI/JBedm3ZQnZ11WURGy9REq2YbRckJVspXX.', 'S1 Sistem Informasi', 'CUT NYAK DHIEN', '2021-09-08 06:25', 'uploads/pkkmb/maba/absen-1/Nurmeirasari_1631059691.jpeg', '2021-09-09 06:16', 'uploads/pkkmb/maba/absen-2/Nurmeirasari_1631145651.jpeg', NULL, '2021-09-01 05:41:15', '2021-09-09 00:00:51'),
(127, 'Rizki Furgana Haigis', 'rizki.furgana14@gmail.com', '$2y$10$wZP3d8zBt1SxrIwK1yui4ufBiJeyGsiKggZnebctNWv9LTTL3kHbG', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:36', 'uploads/pkkmb/maba/absen-1/Rizki Furgana Haigis_1631061667.jpeg', '2021-09-09 07:50', 'uploads/pkkmb/maba/absen-2/Rizki Furgana Haigis_1631148673.jpeg', NULL, '2021-09-01 05:43:55', '2021-09-09 00:51:13'),
(128, 'GIYAN HERIANDRA SAPUTRA', 'giyanhs40@gmail.com', '$2y$10$4D7Oo5DJZCLuGbur2AP0Ge2tqwaV1Xm9gKXSm4QgJZJQ9fd0N4Gcy', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/GIYAN HERIANDRA SAPUTRA_1631060230.jpeg', '2021-09-09 06:48', 'uploads/pkkmb/maba/absen-2/GIYAN HERIANDRA SAPUTRA_1631145851.jpeg', NULL, '2021-09-01 05:53:45', '2021-09-09 00:04:11'),
(129, 'AMELIA RAHAYU', 'ar067883@gmail.com', '$2y$10$iEwvu2GtHwNYpIo1SI9./ezqJd4bf9giSKWu3WAFMqwVjN0sN5ff2', 'S1 Sistem Informasi', 'Ir. Soekarno', '2021-09-08 06:57', 'uploads/pkkmb/maba/absen-1/AMELIA RAHAYU_1631059232.jpg', '2021-09-09 07:02', 'uploads/pkkmb/maba/absen-2/AMELIA RAHAYU_1631145789.png', NULL, '2021-09-01 06:00:31', '2021-09-09 00:03:09'),
(130, 'Melati Nour Esa', 'melatijbg@gmail.com', '$2y$10$TWE1d.57Fa3koAI4zrvKheSlZvGv5CG6uy5vzjLvEz8iJzcM8KQ.2', 'S1 Sistem Informasi', 'Cipto mangunkusumo', '2021-09-08 07:44', 'uploads/pkkmb/maba/absen-1/Melati Nour Esa_1631061889.jpg', '2021-09-09 07:03', 'uploads/pkkmb/maba/absen-2/Melati Nour Esa_1631145871.jpg', NULL, '2021-09-01 06:00:55', '2021-09-09 00:04:31'),
(131, 'Muhammad Akhbar Rizkhullah', 'akhbarrizkhullah13@gmail.com', '$2y$10$vW/8JQUU4coLL2jq39O5qO4BqoYSHSb2MkdwzCaY8/gUvngdAGMYu', 'S1 Sistem Informasi', 'Ahmad Yani', '2021-09-08 06:58', 'uploads/pkkmb/maba/absen-1/Muhammad Akhbar Rizkhullah_1631059280.jpg', '2021-09-09 07:01', 'uploads/pkkmb/maba/absen-2/Muhammad Akhbar Rizkhullah_1631145738.jpg', NULL, '2021-09-01 06:01:08', '2021-09-09 00:02:18'),
(132, 'Dimas Alip Faturrohim', 'jasinga1933@gmail.com', '$2y$10$1OquERsdc1a9QonsHbJbWOt2xx.OGDYkGFRYDHx5u3kj8rsxiQcJK', 'S1 Sistem Informasi', 'Gatot Subroto', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Dimas Alip Faturrohim_1631059434.png', '2021-09-09 07:18', 'uploads/pkkmb/maba/absen-2/Dimas Alip Faturrohim_1631146766.png', NULL, '2021-09-01 06:01:29', '2021-09-09 00:19:26');
INSERT INTO `maba` (`id`, `nama`, `email`, `password`, `prodi`, `nama_kelompok`, `absen_hari_pertama`, `foto_hari_pertama`, `absen_hari_kedua`, `foto_hari_kedua`, `remember_token`, `created_at`, `updated_at`) VALUES
(133, 'Rizky Alfito Hadi', 'ikyalf21@gmail.com', '$2y$10$/h27Pv1MXZJaowOnxZomR.DmYFw94enBNQ6tgxTe9GicsXb0hpE0y', 'S1 Sistem Informasi', '7. Ciptomangunkusumo', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/Rizky Alfito Hadi_1631059736.jpg', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/Rizky Alfito Hadi_1631145681.jpg', NULL, '2021-09-01 06:02:01', '2021-09-09 00:01:21'),
(134, 'Affan Abdillah', 'affanfatan33@gmail.com', '$2y$10$RdrwHugwN0PO1b1iZEu63.tsZtM4rnobH24P6AMR9TXkMrEzLkBY.', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 06:02:10', '2021-09-01 06:02:10'),
(135, 'Ayutia Yasmin', 'ayutiayasmin03@gmail.com', '$2y$10$AbaIy02y2AAlE/3bzP4os.xy.a3PC30.hiT2BGY3UR2HzFRmErkYO', 'S1 Sistem Informasi', 'cokroaminoto', '2021-09-08 07:46', 'uploads/pkkmb/maba/absen-1/Ayutia Yasmin_1631062015.jpeg', '2021-09-09 07:29', 'uploads/pkkmb/maba/absen-2/Ayutia Yasmin_1631147392.jpeg', NULL, '2021-09-01 06:06:35', '2021-09-09 00:29:52'),
(136, 'Muhammad Rizqi Septianto', 'septianto20030903rizqi@gmail.com', '$2y$10$1OMisPLFYuDw1VYjkDNCYODaBtdC1irT4beVj0u7pZrYr1IViGyGa', 'S1 Sistem Informasi', 'Soekarno', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Muhammad Rizqi Septianto_1631059445.jpg', '2021-09-09 07:02', 'uploads/pkkmb/maba/absen-2/Muhammad Rizqi Septianto_1631145772.jpg', NULL, '2021-09-01 06:11:28', '2021-09-09 00:02:52'),
(137, 'Radi Alpiyanto', 'radialfianto@gmail.com', '$2y$10$NxNNNwekjC1e68M0uKtARuLoVIAiODaouH.0pmaKVnS9aGy7VDN1e', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 07:33', 'uploads/pkkmb/maba/absen-1/Radi Alpiyanto_1631061411.jpg', '2021-09-09 07:06', 'uploads/pkkmb/maba/absen-2/Radi Alpiyanto_1631146482.jpg', NULL, '2021-09-01 06:17:01', '2021-09-09 00:14:42'),
(138, 'Pradana Wahyu Hidayanto', 'ilhamalfal@gmail.com', '$2y$10$Ybmx.1u4EGF5eUxWqZzSIeuKyeM69IHT4ZeRQmRZSrTl9CLVOU.zK', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 07:05', 'uploads/pkkmb/maba/absen-1/Pradana Wahyu Hidayanto_1631059555.jpg', '2021-09-09 07:43', 'uploads/pkkmb/maba/absen-2/Pradana Wahyu Hidayanto_1631148235.jpg', NULL, '2021-09-01 06:35:21', '2021-09-09 00:43:55'),
(139, 'Nur Halizah Alfajr', 'nurhlzh2403@gmail.com', '$2y$10$QJGsbi311..y3sc1QvsFiuUc67qbQa..gGXPKTBzVA2Ef/FUoY84u', 'S1 Teknik Informatika', '12_FATMAWATI', '2021-09-08 06:52', 'uploads/pkkmb/maba/absen-1/Nur Halizah Alfajr_1631059290.jpeg', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/Nur Halizah Alfajr_1631145677.jpeg', NULL, '2021-09-01 06:46:20', '2021-09-09 00:01:17'),
(140, 'Harits Ardhya Pratama', 'haritsardhyap@gmail.com', '$2y$10$ZT6YG6Jg424YwCvwW8DBLu77P0gDxf2kmNHiNyk3ztOM1S/pJFzja', 'S1 Sistem Informasi', 'Cilik Riwut', '2021-09-08 06:13', 'uploads/pkkmb/maba/absen-1/Harits Ardhya Pratama_1631060562.jpeg', '2021-09-09 07:07', 'uploads/pkkmb/maba/absen-2/Harits Ardhya Pratama_1631146036.jpeg', NULL, '2021-09-01 07:07:30', '2021-09-09 00:07:16'),
(141, 'Muhammad Naufal Apriandi', 'muhammadnaufal02881@gmail.com', '$2y$10$72m.VIy3gEj/qonu104rZeDz/DDCM0CATWTFVs88qe5yZ3bLuWRmu', 'S1 Teknik Informatika', 'diponegoro', '2021-09-08 07:13', 'uploads/pkkmb/maba/absen-1/Muhammad Naufal Apriandi_1631060177.jpeg', '2021-09-09 08:23', 'uploads/pkkmb/maba/absen-2/Muhammad Naufal Apriandi_1631150622.jpeg', NULL, '2021-09-01 07:12:08', '2021-09-09 01:23:42'),
(142, 'Muhammad Farrel Allard', 'farrelallard203@gmail.com', '$2y$10$jQrW8IRNp.SI4UgjQ5tg1OY29QQuw/Lwx/fWstTWDQjbKKSVnF0CS', 'S1 Sistem Informasi', 'Ahmad Yani', '2021-09-08 07:30', 'uploads/pkkmb/maba/absen-1/Muhammad Farrel Allard_1631063389.jpg', '2021-09-09 08:02', 'uploads/pkkmb/maba/absen-2/Muhammad Farrel Allard_1631149391.jpg', NULL, '2021-09-01 07:20:39', '2021-09-09 01:03:11'),
(143, 'Elis', 'elis14759@gmail.com', '$2y$10$aBl1ea5PTMgRyU5qbg9xG.VkPGTSzMsMX9qGbSxfc5Vo1Hj8SnL5a', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:37', 'uploads/pkkmb/maba/absen-1/Elis_1631061499.jpg', '2021-09-09 07:51', 'uploads/pkkmb/maba/absen-2/Elis_1631148720.jpg', NULL, '2021-09-01 07:22:56', '2021-09-09 00:52:00'),
(144, 'Nadia Nurfadhilah Syarif', 'nanadsyarif@gmail.com', '$2y$10$aV29m/0aoEh2IdSkKHLdTeNIlOP/LnXnkyyguFuhLR2lfAkGFr/j.', 'S1 Sistem Informasi', 'Cokroaminoto', '2021-09-08 07:24', 'uploads/pkkmb/maba/absen-1/Nadia Nurfadhilah Syarif_1631060782.jpeg', '2021-09-09 07:16', 'uploads/pkkmb/maba/absen-2/Nadia Nurfadhilah Syarif_1631146587.jpeg', NULL, '2021-09-01 07:26:48', '2021-09-09 00:16:27'),
(145, 'Sefanya Yemima Sinaga', 'sefanyasinagaff@gmail.com', '$2y$10$108kZ3zk3sVfDtVzdaFpJOKwn0G0MXheiz6RL42qtjRdPVX.s9XOu', 'S1 Sistem Informasi', 'Fatmawati', '2021-09-08 08:45', 'uploads/pkkmb/maba/absen-1/Sefanya Yemima Sinaga_1631065604.jpg', '2021-09-09 08:01', 'uploads/pkkmb/maba/absen-2/Sefanya Yemima Sinaga_1631149536.jpg', NULL, '2021-09-01 07:51:15', '2021-09-09 01:05:36'),
(146, 'Ika Miftahul Rohmah', 'ikamr91@gmail.com', '$2y$10$3mfoqs6av89xTmMClT3VauS7RtEhHIdkBZhD/X5ezEUtmF/iJSw8.', 'S1 Sistem Informasi', 'Ciptu Mangunkusumo', '2021-09-08 07:35', 'uploads/pkkmb/maba/absen-1/Ika Miftahul Rohmah_1631061823.jpeg', '2021-09-09 07:18', 'uploads/pkkmb/maba/absen-2/Ika Miftahul Rohmah_1631146879.jpeg', NULL, '2021-09-01 08:04:27', '2021-09-09 00:21:19'),
(147, 'Titto Nugraha', 'tittonugrahaa@gmail.com', '$2y$10$QJqW.TUlYkkUoaP/DOLcae8yW6ariSabgYUcuDYXEE1WSxh9HEDee', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:15', 'uploads/pkkmb/maba/absen-1/Titto Nugraha_1631060331.jpg', '2021-09-09 06:49', 'uploads/pkkmb/maba/absen-2/Titto Nugraha_1631150337.jpg', NULL, '2021-09-01 08:18:45', '2021-09-09 01:18:57'),
(148, 'Tazkia Damayanti', 'tazkiad27@gmail.com', '$2y$10$cHrjRBKOjISsbTKSox86H.p1bbHznMTes58kd5ZRULpYMcqBlGY4C', 'S1 Sistem Informasi', 'Diponegoro', '2021-09-08 06:25', 'uploads/pkkmb/maba/absen-1/Tazkia Damayanti_1631059360.jpg', '2021-09-09 06:34', 'uploads/pkkmb/maba/absen-2/Tazkia Damayanti_1631145689.jpeg', NULL, '2021-09-01 08:29:46', '2021-09-09 00:01:29'),
(149, 'Diva Ahmad Maulana', 'divaahmad27@gmail.com', '$2y$10$PlZD6vkSCLk7Y8dKHb4rFeiuIjHBOAEq9XOAGLv8bY.N9QPg/cIPy', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:32', 'uploads/pkkmb/maba/absen-1/Diva Ahmad Maulana_1631061209.jpg', '2021-09-09 07:39', 'uploads/pkkmb/maba/absen-2/Diva Ahmad Maulana_1631147979.jpg', NULL, '2021-09-01 09:02:14', '2021-09-09 00:39:39'),
(150, 'Meliana Endang Nyimas Lisna', 'melianaendang25@gmail.com', '$2y$10$KZjPHttpVB3S1eKPD/o9Iecqlm4JBekWv5kelw8FGlZYT8Nwpco/.', 'S1 Sistem Informasi', 'Dewi Sartika', '2021-09-08 07:56', 'uploads/pkkmb/maba/absen-1/Meliana Endang Nyimas Lisna_1631062729.jpg', '2021-09-09 07:15', 'uploads/pkkmb/maba/absen-2/Meliana Endang Nyimas Lisna_1631146578.jpg', NULL, '2021-09-01 09:03:27', '2021-09-09 00:16:18'),
(151, 'Diah Novianti', 'diahnovianti264@gmail.com', '$2y$10$RRDUas92n/hNKxZlASYlAOGEdYBxqouaOHmK2XoxKKKn4NOSmAimq', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 09:03:46', '2021-09-01 09:03:46'),
(152, 'Devaro Brahmansyah Putra Irawan', 'dbrahmansyah@gmail.com', '$2y$10$eAjcb5//F2SLSo8e8I6BLeOS5z2aXv8DJtuVZ7DvlUos0nO8HW2Ry', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:26', 'uploads/pkkmb/maba/absen-1/Devaro Brahmansyah Putra Irawan_1631062198.jpg', '2021-09-09 07:05', 'uploads/pkkmb/maba/absen-2/Devaro Brahmansyah Putra Irawan_1631148277.jpg', NULL, '2021-09-01 09:26:17', '2021-09-09 00:44:37'),
(153, 'Oliver Gunawan Martua Sihaloho', 'oliversihaloho250603@gmail.com', '$2y$10$HiMuFE6L1R6T1JRx3k04OOrf.azRP.nXO3BAsDgEG/xfxTBt6jnsG', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:14', 'uploads/pkkmb/maba/absen-1/Oliver Gunawan Martua Sihaloho_1631060231.jpg', '2021-09-09 07:21', 'uploads/pkkmb/maba/absen-2/Oliver Gunawan Martua Sihaloho_1631146998.jpg', NULL, '2021-09-01 09:40:46', '2021-09-09 00:23:18'),
(154, 'Reymen Maulana', 'reymen222222@gmail.com', '$2y$10$NN1cqycZqPSL5WiURhGafuCtOmQTSPsn6Nnh/2ZR7OuTdYCGdx1Ay', 'S1 Teknik Informatika', 'kelompok 1 soekarno', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Reymen Maulana_1631061369.jpeg', '2021-09-09 07:35', 'uploads/pkkmb/maba/absen-2/Reymen Maulana_1631147765.jpg', NULL, '2021-09-01 09:50:27', '2021-09-09 00:36:05'),
(155, 'Hulwa salsabila', 'hulwaslsbl11@gmail.com', '$2y$10$7h7CtoHJokXHyw0gpw0mwOL3VbfcXNPKJ6Hc2Tu19VOwI9ZyrFE12', 'S1 Teknik Informatika', 'Soekarno', '2021-09-08 07:56', 'uploads/pkkmb/maba/absen-1/Hulwa salsabila_1631062634.jpg', '2021-09-09 07:57', 'uploads/pkkmb/maba/absen-2/Hulwa salsabila_1631149095.jpg', NULL, '2021-09-01 10:03:26', '2021-09-09 00:58:15'),
(156, 'ZAHRA AURIRA HANIFAH', 'zahraaurira@gmail.com', '$2y$10$X2u/PaxfE.9e9vdiW51fo.Wjhp5DTJ7XDngjXcFEh/sMiyRoHUzGi', 'S1 Teknik Informatika', 'Adam malik', '2021-09-08 07:09', 'uploads/pkkmb/maba/absen-1/ZAHRA AURIRA HANIFAH_1631059991.jpg', '2021-09-09 07:21', 'uploads/pkkmb/maba/absen-2/ZAHRA AURIRA HANIFAH_1631146985.jpg', NULL, '2021-09-01 10:09:13', '2021-09-09 00:23:05'),
(157, 'Amira Amani Bestari', 'amiraamani20@gmail.com', '$2y$10$Hxzbw6OGifkZ1RVBcD85uuJgLaMyloz50lfMU3K6ffhOoiqxe5Rta', 'S1 Sistem Informasi', 'Cokroaminoto', '2021-09-08 07:36', 'uploads/pkkmb/maba/absen-1/Amira Amani Bestari_1631061471.jpeg', '2021-09-09 07:25', 'uploads/pkkmb/maba/absen-2/Amira Amani Bestari_1631147212.jpeg', NULL, '2021-09-01 10:09:30', '2021-09-09 00:26:52'),
(158, 'Syifa Novianti Putri', 'Syifaaaaaaaa02@gmail.com', '$2y$10$RsjpWu.8iDco3SUvH52G3eI.48BkBFXcNGz93CV29vnB7kTdyI.3O', 'S1 Sistem Informasi', 'Wilbur Olin Atwater', '2021-09-08 07:33', 'uploads/pkkmb/maba/absen-1/Syifa Novianti Putri_1631062957.jpg', '2021-09-09 07:46', 'uploads/pkkmb/maba/absen-2/Syifa Novianti Putri_1631148543.jpg', NULL, '2021-09-01 10:11:44', '2021-09-09 00:49:03'),
(159, 'Raka Fazah Fithra', 'rakafazahfithra@gmail.com', '$2y$10$7vnvwVaRBNy/UrLx6PAdOO9NPQYwL32yxQhbn5TmcbYLmrDpLpNA2', 'S1 Teknik Informatika', 'Cut Nyak Dhien', '2021-09-08 08:03', 'uploads/pkkmb/maba/absen-1/Raka Fazah Fithra_1631063593.jpeg', '2021-09-09 07:28', 'uploads/pkkmb/maba/absen-2/Raka Fazah Fithra_1631147458.jpeg', NULL, '2021-09-01 10:15:46', '2021-09-09 00:30:58'),
(160, 'Bagas Aqmal Febrianto', 'bagasaqmal70@gmail.com', '$2y$10$mJ8IKOGNm6ZjgZijYU7Zz.4j08SOk5kJN5qfHyVvDDp8DzJlKGMZS', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Bagas Aqmal Febrianto_1631060765.png', '2021-09-09 07:17', 'uploads/pkkmb/maba/absen-2/Bagas Aqmal Febrianto_1631146681.png', NULL, '2021-09-01 10:26:38', '2021-09-09 00:18:01'),
(161, 'Annisa utami dewi', 'annisaude@gmail.com', '$2y$10$LigfkL0L6tpjcBrM60/HkOk9oQezo0wS.vWmRdUz.91nX0CYGbzxu', 'S1 Sistem Informasi', 'Ahmad yani', '2021-09-08 07:01', 'uploads/pkkmb/maba/absen-1/Annisa utami dewi_1631059369.jpg', '2021-09-09 07:29', 'uploads/pkkmb/maba/absen-2/Annisa utami dewi_1631147384.jpg', NULL, '2021-09-01 10:41:25', '2021-09-09 00:29:44'),
(162, 'Muhammad Fajar Nadillah', 'muhammadfajarnadillah973@gmail.com', '$2y$10$A2Ni.qFypqYqWDAojsZg8.g8o0Yjxj9MEwU2GExHDQtBcyM6uonzq', 'S1 Sistem Informasi', 'Adam Malik', '2021-09-08 07:10', 'uploads/pkkmb/maba/absen-1/Muhammad Fajar Nadillah_1631059864.jpg', '2021-09-09 07:10', 'uploads/pkkmb/maba/absen-2/Muhammad Fajar Nadillah_1631146247.jpg', NULL, '2021-09-01 10:41:51', '2021-09-09 00:10:47'),
(163, 'Rizky Risafiandika Miftahulana', 'rizkyrm0205@gmail.com', '$2y$10$Z0NLzcUtiUkeNRIRpNkpWu/uX1xj0qugp6A7CF5yHhApyeDW00CmG', 'S1 Teknik Informatika', 'Rizky rm_TI_Cilik Riwut', '2021-09-08 08:23', 'uploads/pkkmb/maba/absen-1/Rizky Risafiandika Miftahulana_1631064271.jpg', '2021-09-09 07:19', 'uploads/pkkmb/maba/absen-2/Rizky Risafiandika Miftahulana_1631147196.jpg', NULL, '2021-09-01 10:45:39', '2021-09-09 00:26:36'),
(164, 'Malvin Valerian Gultom', 'malvinval09@gmail.com', '$2y$10$B7g0q8IGJTg2QzoN4Q0g9usNoaSRvmY2iVcOePybfg3j2WFoxrcum', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/Malvin Valerian Gultom_1631059812.png', '2021-09-09 07:39', 'uploads/pkkmb/maba/absen-2/Malvin Valerian Gultom_1631148043.jpg', NULL, '2021-09-01 10:51:07', '2021-09-09 00:40:43'),
(165, 'NURUL ATIZAH', 'nurulatizah41@gmail.com', '$2y$10$NjqftB7o/1A9nIu2eatPx.W8e8q27sOlJm27Q6lFUzxD/yfq2X6kW', 'S1 Sistem Informasi', 'Dewi sartika', '2021-09-08 14:25', 'uploads/pkkmb/maba/absen-1/NURUL ATIZAH_1631086114.jpg', '2021-09-09 07:11', 'uploads/pkkmb/maba/absen-2/NURUL ATIZAH_1631146353.jpg', NULL, '2021-09-01 11:20:57', '2021-09-09 00:12:33'),
(166, 'Unsa Ahdannia Susilo', 'unsahdannia@gmail.com', '$2y$10$HBwVa0iGxT3iWlW9evW3TeGZCN6srYye7jGnybBQ7k5A5vqBpnQ4e', 'S1 Teknik Informatika', 'Soekarno', '2021-09-08 07:07', 'uploads/pkkmb/maba/absen-1/Unsa Ahdannia Susilo_1631059742.jpg', '2021-09-09 07:04', 'uploads/pkkmb/maba/absen-2/Unsa Ahdannia Susilo_1631145924.jpg', NULL, '2021-09-01 11:26:12', '2021-09-09 00:05:24'),
(167, 'Rifina Dwi Pebrianti', 'rifinadwp@gmail.com', '$2y$10$kgIRtFPhQx4UDAmjB10h1upDRYAMuFce3PkplOYdfeYJKlH819t9O', 'S1 Sistem Informasi', 'Gatot Subroto', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Rifina Dwi Pebrianti_1631060846.jpeg', '2021-09-09 07:41', 'uploads/pkkmb/maba/absen-2/Rifina Dwi Pebrianti_1631148310.jpeg', NULL, '2021-09-01 11:49:48', '2021-09-09 00:45:10'),
(168, 'Muhamad Dimas Farid', 'dimasfarid2002@gmail.com', '$2y$10$P3bcofy6pTpOSGdJ617LVuyfAe3cSIw3i159Cphrvp/Gtmo3lGgKO', 'S1 Teknik Informatika', 'Ibnu sina', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/Muhamad Dimas Farid_1631059414.jpeg', '2021-09-09 07:02', 'uploads/pkkmb/maba/absen-2/Muhamad Dimas Farid_1631146673.jpeg', NULL, '2021-09-01 11:59:56', '2021-09-09 00:17:53'),
(169, 'SOPHIA MARATU SOLIHAT', 'sophiamaratusoliha@gmail.com', '$2y$10$hbjLLd/MXC4kjAia7X1JYuG0S3LLFb3SMbpGLCDA3ih4cIKrTMa2q', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 06:14', 'uploads/pkkmb/maba/absen-1/SOPHIA MARATU SOLIHAT_1631059853.jpg', '2021-09-09 07:06', 'uploads/pkkmb/maba/absen-2/SOPHIA MARATU SOLIHAT_1631147710.jpg', NULL, '2021-09-01 12:15:36', '2021-09-09 00:35:10'),
(170, 'Tedi Alamsyah', 'tedialamsyah@gmail.com', '$2y$10$DUaJfMygEq9k7EWDkF/tWeKC2.oDZC7h5iLph3WMGHE97sWXV7Squ', 'S1 Sistem Informasi', 'Soekarno', '2021-09-08 07:22', 'uploads/pkkmb/maba/absen-1/Tedi Alamsyah_1631060623.jpg', '2021-09-09 07:27', 'uploads/pkkmb/maba/absen-2/Tedi Alamsyah_1631147277.jpg', NULL, '2021-09-01 12:17:01', '2021-09-09 00:27:57'),
(171, 'Pramudityo Agung Nafianto', 'pramdity@gmail.com', '$2y$10$/4z8VORqQAZl0Ghnnp1cFOqa7G0zWsyXETvSHutCn6asFa5WS40BS', 'S1 Teknik Informatika', 'Pramudityo agung_Soekarno', '2021-09-08 06:37', 'uploads/pkkmb/maba/absen-1/Pramudityo Agung Nafianto_1631057896.jpeg', '2021-09-09 08:18', 'uploads/pkkmb/maba/absen-2/Pramudityo Agung Nafianto_1631150330.jpeg', NULL, '2021-09-01 12:41:09', '2021-09-09 01:18:50'),
(172, 'Aulia fahmi', 'auliafahmioke8@gmail.com', '$2y$10$yxoGS6aCR6UEEXKMcUxQ/OX8yR9P2C7TNSctn0CiLmEsLv3PeIIPm', 'S1 Teknik Informatika', 'ahmad dahlan', '2021-09-08 11:16', 'uploads/pkkmb/maba/absen-1/Aulia fahmi_1631075792.png', '2021-09-09 06:50', 'uploads/pkkmb/maba/absen-2/Aulia fahmi_1631145116.png', NULL, '2021-09-01 12:54:43', '2021-09-08 23:51:56'),
(173, 'Muhammad Rizky Febriansyah', 'rizkyfebriansyah747@gmail.com', '$2y$10$N/ooyvP3XFcf6SM95r4uS.hQpMD8cHoi0lNdRr4snyIOZwTEsuNL2', 'S1 Sistem Informasi', 'Soekarno', '2021-09-08 07:28', 'uploads/pkkmb/maba/absen-1/Muhammad Rizky Febriansyah_1631060983.jpg', '2021-09-09 07:36', 'uploads/pkkmb/maba/absen-2/Muhammad Rizky Febriansyah_1631147829.jpg', NULL, '2021-09-01 13:00:52', '2021-09-09 00:37:09'),
(174, 'Muhammad Rizky Fauzan', 'mrfauzan48@gmail.com', '$2y$10$K7htvX2dIZ9FMOJiypY2J.T7H8h.9OZLSC3aKAVh8eM7UhRomXI3m', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 07:41', 'uploads/pkkmb/maba/absen-1/Muhammad Rizky Fauzan_1631062240.jpeg', '2021-09-09 08:31', 'uploads/pkkmb/maba/absen-2/Muhammad Rizky Fauzan_1631151091.jpeg', NULL, '2021-09-01 13:26:11', '2021-09-09 01:31:31'),
(175, 'Gina Khairunnisa', 'ginakhairunnisa02@gmail.com', '$2y$10$KeoGWGLd3wX5AC4Xrx/xa.Gxv/sgihSFJ6FgMBx0NanLpJn9GTUl.', 'S1 Sistem Informasi', 'Diponegoro', '2021-09-08 07:28', 'uploads/pkkmb/maba/absen-1/Gina Khairunnisa_1631061082.jpg', '2021-09-09 07:24', 'uploads/pkkmb/maba/absen-2/Gina Khairunnisa_1631148218.jpg', NULL, '2021-09-01 13:47:14', '2021-09-09 00:43:38'),
(176, 'Fadya Angelina Raharjo', 'fadyaangelina@gmail.com', '$2y$10$6SoXX5aN.4sSr6Od0/7mN.snWFWjRoVa5HtTBOEYB5bD.xvj75xD2', 'S1 Teknik Informatika', '12 Fatmawati', '2021-09-08 07:33', 'uploads/pkkmb/maba/absen-1/Fadya Angelina Raharjo_1631061276.jpg', '2021-09-09 06:37', 'uploads/pkkmb/maba/absen-2/Fadya Angelina Raharjo_1631144322.jpeg', NULL, '2021-09-01 13:49:52', '2021-09-08 23:38:42'),
(177, 'Farhan Al Rafi', 'masfarhan510@gmail.com', '$2y$10$oweB7EolrIlW9/qSa6k67eG3XSa5hM1KPfwywO67z1T7yrmleR1OC', 'S1 Teknik Informatika', 'Kelompok 1 (Soekarno)', '2021-09-08 06:37', 'uploads/pkkmb/maba/absen-1/Farhan Al Rafi_1631060367.jpg', '2021-09-09 08:06', 'uploads/pkkmb/maba/absen-2/Farhan Al Rafi_1631149614.jpg', NULL, '2021-09-01 13:49:59', '2021-09-09 01:06:54'),
(178, 'Muhammad Hadi Royan Firdaus', 'hadiroyan3@gmail.com', '$2y$10$3qK/BuuRP23NQ27IIWfQ2ezWLYfrQPAssfZTa5zO0jd0Le7Xh2SWq', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 06:50', 'uploads/pkkmb/maba/absen-1/Muhammad Hadi Royan Firdaus_1631058953.jpeg', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/Muhammad Hadi Royan Firdaus_1631145663.png', NULL, '2021-09-01 13:50:24', '2021-09-09 00:01:03'),
(179, 'Muhammad Al Farizi', 'rendezvousw3@gmail.com', '$2y$10$.8QiRM4I14xq9TsQdBv90.7Rk1XvaWA2oMcitFCWe89Pt8eQky5BW', 'S1 Sistem Informasi', 'Ahmad Yani', '2021-09-08 06:41', 'uploads/pkkmb/maba/absen-1/Muhammad Al Farizi_1631060554.Al Farizi_Alexander G B', '2021-09-09 07:20', 'uploads/pkkmb/maba/absen-2/Muhammad Al Farizi_1631146925.png', NULL, '2021-09-01 14:33:14', '2021-09-09 00:22:05'),
(180, 'Salsih Cahyani', 'salsihcahyani@gmail.com', '$2y$10$uzWUCJhGEtzAgaytC2FGo.6has.88eJfzm1QuICN6vcw7WA5aMKUG', 'S1 Sistem Informasi', 'Gatot Subroto', '2021-09-08 06:14', 'uploads/pkkmb/maba/absen-1/Salsih Cahyani_1631056517.png', '2021-09-09 07:14', 'uploads/pkkmb/maba/absen-2/Salsih Cahyani_1631146525.png', NULL, '2021-09-01 14:46:20', '2021-09-09 00:15:25'),
(181, 'Riezky Fauji  Setiawan', 'riezkyfaujisetiawan@gmail.com', '$2y$10$3FRkP8ehnX0EwVr97j18pOo5Yru5kJcnMm65IL9Qz9/gnnpBxPm32', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 06:21', 'uploads/pkkmb/maba/absen-1/Riezky Fauji  Setiawan_1631059292.jpg', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/Riezky Fauji  Setiawan_1631145674.jpg', NULL, '2021-09-01 14:47:48', '2021-09-09 00:01:14'),
(182, 'Nurmala Arita', 'nurmalaarita12@gmail.com', '$2y$10$2QogBjEygdj4SQMb/iZtNuD80WHP.GqhwQOpYg13h9dQ9hjIYMOsS', 'S1 Sistem Informasi', 'Cokroaminoto', '2021-09-08 08:28', 'uploads/pkkmb/maba/absen-1/Nurmala Arita_1631064550.jpg', '2021-09-09 08:00', 'uploads/pkkmb/maba/absen-2/Nurmala Arita_1631149243.jpg', NULL, '2021-09-01 14:59:58', '2021-09-09 01:00:43'),
(183, 'Riezky Fauji  Setiawan', 'riezkysetiawan08@gmail.com', '$2y$10$jFcGSWA39sDnLrlnMrx3QOQbIzPTD0Q9jo9QWE6WxVnO9Z8wUcSyO', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 15:00:47', '2021-09-01 15:00:47'),
(184, 'Khairunnisa Fitriani', 'khanisaaf@gmail.com', '$2y$10$tKXkBY2.q7RmL3l5oxA7Ceek86bdtlJoUdSup7k7Zaguq4xKq/8ly', 'S1 Sistem Informasi', 'Kelompok Cut Nyak Dhien', '2021-09-08 07:13', 'uploads/pkkmb/maba/absen-1/Khairunnisa Fitriani_1631060425.jpg', '2021-09-09 07:08', 'uploads/pkkmb/maba/absen-2/Khairunnisa Fitriani_1631146155.jpg', NULL, '2021-09-01 15:10:15', '2021-09-09 00:09:15'),
(185, 'Oktavia rahmadani', 'oktaasyala12@gmail.com', '$2y$10$hm4tm9Xf09gFpDRlJLj4CuxPbtj/4DJcsTFKYtSUA9V2mxck5TmJe', 'S1 Teknik Informatika', 'ahmad yani', '2021-09-08 07:14', 'uploads/pkkmb/maba/absen-1/Oktavia rahmadani_1631060145.jpg', '2021-09-09 07:30', 'uploads/pkkmb/maba/absen-2/Oktavia rahmadani_1631147484.jpg', NULL, '2021-09-01 15:46:50', '2021-09-09 00:31:24'),
(186, 'Calista Salsabila Citra Putri Winanto', 'calistasalsa.cpw@gmail.com', '$2y$10$r.89WWXkbKIOKTlf3WsTXuWhJC5AuxTxMge6X7G5HJYoRAfipJJRm', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:04', 'uploads/pkkmb/maba/absen-1/Calista Salsabila Citra Putri Winanto_1631059874.png', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/Calista Salsabila Citra Putri Winanto_1631145672.png', NULL, '2021-09-01 15:55:22', '2021-09-09 00:01:12'),
(187, 'Iis Permatasari', 'iispermatasari7123@gmail.com', '$2y$10$QyBNvCE0aZQhPN6OMgsC2uSc9vKG2bJI25WzXIObR93np4xl9ynZG', 'S1 Sistem Informasi', 'Diponegoro', '2021-09-08 07:30', 'uploads/pkkmb/maba/absen-1/Iis Permatasari_1631061111.jpeg', '2021-09-09 07:38', 'uploads/pkkmb/maba/absen-2/Iis Permatasari_1631147996.jpg', NULL, '2021-09-01 16:52:59', '2021-09-09 00:39:56'),
(188, 'Zidan Faizi', 'zidankato7@gmail.com', '$2y$10$uEaaUmbECE1rCL68X1WK6.OkS57w1dizawnLCDBhssjB0ElFpM9MG', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 17:50:09', '2021-09-01 17:50:09'),
(189, 'Muhammad ikbar zaidan', 'muhammadikbar03@gmail.com', '$2y$10$ezIqmqKCdDxnlp/K51ziQOu.tI8fVOCFi2FRMTu/OFLgsxoJdZodi', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-01 22:25:27', '2021-09-01 22:25:27'),
(190, 'Muhammad Naufal Firdaus', 'nnaufal792@gmail.com', '$2y$10$7kzppo1tMNzDTniaO73zGOqg.JM9nYupIPaeXQiUAEa.v.urav6U2', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:03', 'uploads/pkkmb/maba/absen-1/Muhammad Naufal Firdaus_1631060008.png', '2021-09-09 07:46', 'uploads/pkkmb/maba/absen-2/Muhammad Naufal Firdaus_1631148420.png', NULL, '2021-09-01 22:52:37', '2021-09-09 00:47:00'),
(191, 'Fadhil Ismail Siddiq', 'fadhilismailsiddiq@gmail.com', '$2y$10$t2sVeFNfnDF6kq8jX4DzVuyiXzeK1lOPH1pQQ4jp13qpl/RTB1do6', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 07:19', 'uploads/pkkmb/maba/absen-1/Fadhil Ismail Siddiq_1631060448.jpg', '2021-09-09 06:57', 'uploads/pkkmb/maba/absen-2/Fadhil Ismail Siddiq_1631146331.jpg', NULL, '2021-09-01 23:05:36', '2021-09-09 00:12:11'),
(192, 'Teuku Nurmansyah Puteh', 'teukunurman.26@gmail.com', '$2y$10$gQqrKKaCj5PbVmusSffy.OyHz91De13./GvF0Kmc1MTmvqLWjW1h2', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 07:09', 'uploads/pkkmb/maba/absen-1/Teuku Nurmansyah Puteh_1631059806.jpg', '2021-09-09 07:29', 'uploads/pkkmb/maba/absen-2/Teuku Nurmansyah Puteh_1631147372.jpeg', NULL, '2021-09-01 23:07:04', '2021-09-09 00:29:32'),
(193, 'Muflih Roid Zuhdi', 'muflihroid123@gmail.com', '$2y$10$BT9oWPWYJjbeTFkji1Nsv.HOX1rZkYlPEdMyuqnv1xbQQz0Ws4.QC', 'S1 Teknik Informatika', 'Cokroaminoto', '2021-09-08 07:42', 'uploads/pkkmb/maba/absen-1/Muflih Roid Zuhdi_1631061767.jpg', '2021-09-09 07:48', 'uploads/pkkmb/maba/absen-2/Muflih Roid Zuhdi_1631148518.jpg', NULL, '2021-09-01 23:36:50', '2021-09-09 00:48:38'),
(194, 'Maesha Ayu Syaharani', 'maesyaayu62@gmail.com', '$2y$10$A/iaEEtv5njiTAyqb2jIOO2/YgaN9jsSVkiG15caQsCAReZ/4v25K', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 07:11', 'uploads/pkkmb/maba/absen-1/Maesha Ayu Syaharani_1631059919.jpg', '2021-09-09 06:57', 'uploads/pkkmb/maba/absen-2/Maesha Ayu Syaharani_1631145486.jpg', NULL, '2021-09-01 23:42:55', '2021-09-08 23:58:06'),
(195, 'Theresia Aurelly Claudia Budianto', 'theresiaaurelly@gmail.com', '$2y$10$O.AsBqk4P45VLn6v856Bsu2SLVt9FNLidiCOEzMbKcM1D25/u.vBG', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:12', 'uploads/pkkmb/maba/absen-1/Theresia Aurelly Claudia Budianto_1631060156.jpg', '2021-09-09 06:57', 'uploads/pkkmb/maba/absen-2/Theresia Aurelly Claudia Budianto_1631145505.jpg', NULL, '2021-09-01 23:46:16', '2021-09-08 23:58:25'),
(196, 'Damang Maulana Wirapraja', 'rajadamang13@gmail.com', '$2y$10$vdRCp7xFLq14wR.ZfUQimO9cWCi.HvHst3nf5MpyLDU5aN9LUKNxe', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Damang Maulana Wirapraja_1631059818.jpg', '2021-09-09 06:55', 'uploads/pkkmb/maba/absen-2/Damang Maulana Wirapraja_1631146560.jpg', NULL, '2021-09-01 23:49:22', '2021-09-09 00:16:00'),
(197, 'Yuri Saputri', 'yurisaputri511@gmail.com', '$2y$10$xFThAqvHIvLgz51g727VfO0VCVkbar0j3WHUMvETy/Cm/eZ5gkSeS', 'S1 Teknik Informatika', 'Dewi sartika', '2021-09-08 07:17', 'uploads/pkkmb/maba/absen-1/Yuri Saputri_1631060332.jpeg', '2021-09-09 07:33', 'uploads/pkkmb/maba/absen-2/Yuri Saputri_1631147603.jpeg', NULL, '2021-09-02 00:52:24', '2021-09-09 00:33:23'),
(198, 'ANDARI YASINTA PERMANA', 'andariyasinta@gmail.com', '$2y$10$qL1V331fA6yATIdNSqdcj.QtgLsDxG6kEwj9Wlm/dmpN70giuArOi', 'S1 Teknik Informatika', 'AHMAD YANI', '2021-09-08 06:48', 'uploads/pkkmb/maba/absen-1/ANDARI YASINTA PERMANA_1631059040.jpeg', '2021-09-09 06:57', 'uploads/pkkmb/maba/absen-2/ANDARI YASINTA PERMANA_1631145481.jpeg', NULL, '2021-09-02 02:05:17', '2021-09-08 23:58:01'),
(199, 'Rafi Albar Kurniawan', 'rafialbar81@gmail.com', '$2y$10$OSmUUu/NH.r2jSgyOmizxO3WuHj4.z.J.zvulJkVB0PY/ywGpSIkK', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Rafi Albar Kurniawan_1631059852.jpg', '2021-09-09 07:06', 'uploads/pkkmb/maba/absen-2/Rafi Albar Kurniawan_1631146033.jpg', NULL, '2021-09-02 02:13:47', '2021-09-09 00:07:13'),
(200, 'Jerry Anggara', 'jerryagg01@gmail.com', '$2y$10$c8hszh5edZju0xCrqFBi0u2puDHUmfyy/2rOcSRohtV/Wszg3q8h.', 'S1 Teknik Informatika', 'Adam Malik', '2021-09-08 07:47', 'uploads/pkkmb/maba/absen-1/Jerry Anggara_1631062146.jpg', '2021-09-09 07:32', 'uploads/pkkmb/maba/absen-2/Jerry Anggara_1631147585.jpg', NULL, '2021-09-02 03:31:45', '2021-09-09 00:33:05'),
(201, 'SILVIANA ANGGELLICA', 'silvianaangellica@gmail.com', '$2y$10$CFtxt2omN.Qyi.SE8cSKc.xttQsbltU9BpDfOAv9m.7E3LxgEKatq', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:03', 'uploads/pkkmb/maba/absen-1/SILVIANA ANGGELLICA_1631059646.jpg', '2021-09-09 06:56', 'uploads/pkkmb/maba/absen-2/SILVIANA ANGGELLICA_1631145750.jpg', NULL, '2021-09-02 04:38:26', '2021-09-09 00:02:30'),
(202, 'RIZKI ALVAN JOSE', 'rizkialvanjose@gmail.com', '$2y$10$tQhkcAm2mKReLX1j296T6.3EkEUdpb5nWoK1Gh8rdvl72DOU5tXKO', 'S1 Teknik Informatika', 'Rizki Alvan Jose_Cut Nyak Dhien', '2021-09-08 06:39', 'uploads/pkkmb/maba/absen-1/RIZKI ALVAN JOSE_1631059252.jpg', '2021-09-09 07:22', 'uploads/pkkmb/maba/absen-2/RIZKI ALVAN JOSE_1631146940.jpg', NULL, '2021-09-02 05:11:07', '2021-09-09 00:22:20'),
(203, 'Muhamad Sidqih Arhinza Juliantara', 'sidqihjuliantara@gmail.com', '$2y$10$vypgNCIXFIHyJWdFwFIEyubZlZ7zI7AwIz2ZcjjNvc2x1baJU56d.', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-02 05:11:20', '2021-09-02 05:11:20'),
(204, 'Inez Zahra', 'inezzahra46@gmail.com', '$2y$10$XihtC8itK0l5yT2EBKm.Iek/Do2gPAez7ZpVkjD7hzbya3I2gHAka', 'S1 Sistem Informasi', 'Gatot Subroto', '2021-09-08 06:19', 'uploads/pkkmb/maba/absen-1/Inez Zahra_1631058903.jpeg', '2021-09-09 07:07', 'uploads/pkkmb/maba/absen-2/Inez Zahra_1631146225.jpeg', NULL, '2021-09-02 05:37:42', '2021-09-09 00:10:25'),
(205, 'MUHAMMAD SURYA RUSFAUZI', 'muhammadsurya2812@gmail.com', '$2y$10$zEMkGIufoffC3htPV32TJ.FxkvLo2XW99zGcQ51t5lIj/UB7hGzkW', 'S1 Teknik Informatika', 'Gatot subroto', '2021-09-08 08:58', 'uploads/pkkmb/maba/absen-1/MUHAMMAD SURYA RUSFAUZI_1631066747.jpg', '2021-09-09 08:31', 'uploads/pkkmb/maba/absen-2/MUHAMMAD SURYA RUSFAUZI_1631151162.png', NULL, '2021-09-02 08:19:07', '2021-09-09 01:32:42'),
(206, 'Anissa Aidha Zulyani', 'anissaidha@gmail.com', '$2y$10$us6jd/4jcYX6qIgHA4gpFu.P1eY01s.10j7WpkDGNMSrE6RGq.pxe', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-02 12:12:57', '2021-09-02 12:12:57'),
(207, 'Fattan Abhista', 'f2f.abhista11@gmail.com', '$2y$10$xG1h.9wq3BY07f0ZC4GD8O54e8XGb8SEbHMAh6sxZg1GUHZhWHNmG', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 07:03', 'uploads/pkkmb/maba/absen-1/Fattan Abhista_1631059813.jpg', '2021-09-09 07:23', 'uploads/pkkmb/maba/absen-2/Fattan Abhista_1631147052.jpg', NULL, '2021-09-02 13:36:47', '2021-09-09 00:24:12'),
(208, 'Bintang Ilhan', 'bintangajhla@gmail.com', '$2y$10$sdfZxLHERh1kh5MIn73g1.RjaLVUxftCF3o/DfpROp9CxA5VdwtzO', 'S1 Teknik Informatika', 'Cut Nyak Dhien', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/Bintang Ilhan_1631061328.jpg', '2021-09-09 07:19', 'uploads/pkkmb/maba/absen-2/Bintang Ilhan_1631147185.jpg', NULL, '2021-09-02 14:39:05', '2021-09-09 00:26:25'),
(209, 'Aria Bintang', 'ariabintang24@gmail.com', '$2y$10$zhN01WW4FoTMDjxqbwcvY.LlzbTXZV1DcJA/EGm4HwWlyIyHLH5Fq', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Aria Bintang_1631060817.jpg', '2021-09-09 07:48', 'uploads/pkkmb/maba/absen-2/Aria Bintang_1631148585.jpg', NULL, '2021-09-02 15:15:44', '2021-09-09 00:49:45'),
(210, 'Zadan Fairuz Mahitala', 'zadanfaidelta@gmail.com', '$2y$10$cdWMrll0bhtr2ActmR3cKeNo2wVgCP7mMxVyJAHSmX1Sdf9bKya/.', 'S1 Teknik Informatika', 'Ahmad Dahlan', '2021-09-08 06:55', 'uploads/pkkmb/maba/absen-1/Zadan Fairuz Mahitala_1631060603.jpg', '2021-09-09 07:30', 'uploads/pkkmb/maba/absen-2/Zadan Fairuz Mahitala_1631149680.png', NULL, '2021-09-02 16:30:51', '2021-09-09 01:08:00'),
(211, 'Alhafidz William Adzanta', 'alhafidzwilliam@gmail.com', '$2y$10$x96bqZLhtCxJ1EZyuP.3HuSHmgEzBRXWZOETNZ0ibKArlpl1V7mi.', 'S1 Teknik Informatika', 'cut nyak dien', '2021-09-08 06:57', 'uploads/pkkmb/maba/absen-1/Alhafidz William Adzanta_1631059512.jpg', '2021-09-09 06:45', 'uploads/pkkmb/maba/absen-2/Alhafidz William Adzanta_1631144782.JPG', NULL, '2021-09-02 18:15:43', '2021-09-08 23:46:22'),
(212, 'Achmad Fikri Syofian', 'syofian.fikri@gmail.com', '$2y$10$NouT7P0xnpzWAQo19/4.8uvv9vzI96TGbKCiOCG64Ru2zeATmOCMK', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 06:48', 'uploads/pkkmb/maba/absen-1/Achmad Fikri Syofian_1631058538.jpg', '2021-09-09 06:32', 'uploads/pkkmb/maba/absen-2/Achmad Fikri Syofian_1631147777.jpg', NULL, '2021-09-02 23:26:27', '2021-09-09 00:36:17'),
(213, 'MUHAMMAD TEGAR PAMUNGKAS', 'mtegarpamungkas111@gmail.com', '$2y$10$h6Gi8vKNfUnvB8Lq8G6.uOrjU5M5IK5Q0t2ADm5fuADK/KPLKA7om', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:26', 'uploads/pkkmb/maba/absen-1/MUHAMMAD TEGAR PAMUNGKAS_1631061046.jpg', '2021-09-09 07:36', 'uploads/pkkmb/maba/absen-2/MUHAMMAD TEGAR PAMUNGKAS_1631147811.jpg', NULL, '2021-09-03 01:19:42', '2021-09-09 00:36:51'),
(214, 'Tiara nurul hidayah', 'tiarranurul127@gmail.com', '$2y$10$GZFh78OgJ.Gyw3Aw8REn2e.Tew5dQ4leEk32k8GHZAaUxz.g186M.', 'S1 Sistem Informasi', '7.cipto mangunkusumo', '2021-09-08 07:48', 'uploads/pkkmb/maba/absen-1/Tiara nurul hidayah_1631062276.jpg', NULL, NULL, NULL, '2021-09-03 17:14:22', '2021-09-08 00:51:16'),
(215, 'Frisca Dwi Imroatus Solihah', 'friscadwii1@yahoo.com', '$2y$10$LsB2Me3nc/Ihb1KTXiqt1.qtD6vQ3ztNGUHuI8gqbXLK8aSd25Sta', 'S1 Sistem Informasi', 'Dewi sartika', '2021-09-08 07:16', 'uploads/pkkmb/maba/absen-1/Frisca Dwi Imroatus Solihah_1631060225.jpeg', '2021-09-09 07:45', 'uploads/pkkmb/maba/absen-2/Frisca Dwi Imroatus Solihah_1631148408.jpeg', NULL, '2021-09-03 18:17:40', '2021-09-09 00:46:48'),
(216, 'Zaima Syarifa Asshafa', 'zaimaasshafa@gmail.com', '$2y$10$OitH..F1kL.B1ewBVRzMdu7cFivr8anr2hmAg5RpRni80O.gA668y', 'S1 Sistem Informasi', 'Cipto Mangunkusumo', '2021-09-08 07:19', 'uploads/pkkmb/maba/absen-1/Zaima Syarifa Asshafa_1631060455.jpg', '2021-09-09 07:19', 'uploads/pkkmb/maba/absen-2/Zaima Syarifa Asshafa_1631146841.jpg', NULL, '2021-09-03 23:38:08', '2021-09-09 00:20:41'),
(217, 'Feila Sufah', 'sufahfeila0854@gmail.com', '$2y$10$7j/ahueKE3F57wg3JiVo1eHThYZcTC/K9FdrT/Csd.fURoS9LUhBq', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:22', 'uploads/pkkmb/maba/absen-1/Feila Sufah_1631060635.png', '2021-09-09 07:00', 'uploads/pkkmb/maba/absen-2/Feila Sufah_1631145683.jpeg', NULL, '2021-09-04 02:21:02', '2021-09-09 00:01:23'),
(218, 'Muhammad Wildan Fauzi', 'wildanibnu20@gmail.com', '$2y$10$.PG0Lm.LO7/O81EiLsKRj.QXg25VxYH05GRKbMKQkYqUfqejPL0Ay', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 06:15', 'uploads/pkkmb/maba/absen-1/Muhammad Wildan Fauzi_1631060732.jpg', '2021-09-09 07:27', 'uploads/pkkmb/maba/absen-2/Muhammad Wildan Fauzi_1631147335.jpg', NULL, '2021-09-04 02:21:58', '2021-09-09 00:28:55'),
(219, 'FEILA SUFAH', 'feilasufah974@gmail.com', '$2y$10$PmhFaH/1CP5s0P0jngQuyOZ6QXv6yq4v3kwoddsAZsDLK/jpuSMgm', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-04 02:22:15', '2021-09-04 02:22:15'),
(220, 'Kaleb Firdaus', 'firdauskaleb193@gmail.com', '$2y$10$lGWqpasvish9i2PeGcj7R.2782S6o1dcvRFLGtFoeU.W3LwZ9IZRS', 'S1 Sistem Informasi', 'Gatot Subroto', '2021-09-08 07:02', 'uploads/pkkmb/maba/absen-1/Kaleb Firdaus_1631059426.jpg', '2021-09-09 07:02', 'uploads/pkkmb/maba/absen-2/Kaleb Firdaus_1631145812.jpg', NULL, '2021-09-04 03:32:14', '2021-09-09 00:03:32'),
(221, 'way', 'waydarajat@gmail.com', '$2y$10$jrkujtHQtb/ASEGXlgqHIO2tuZPUUEu.uS.fjVPKOr/Kuj.UPTS/O', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-04 10:52:58', '2021-09-04 10:52:58'),
(222, 'Rahayu Widhiyanti', 'rahayudhyn29@gmail.com', '$2y$10$n/Cts6NXLRxW7ZSAidFD7.xpc4YwJQ3/3JGRheETeli1eT6YTvD1W', 'S1 Sistem Informasi', 'Cilik Riwut', '2021-09-08 07:44', 'uploads/pkkmb/maba/absen-1/Rahayu Widhiyanti_1631061888.JPG', '2021-09-09 07:38', 'uploads/pkkmb/maba/absen-2/Rahayu Widhiyanti_1631148107.jpg', NULL, '2021-09-04 18:14:04', '2021-09-09 00:41:47'),
(223, 'Reza Aditya Saputra', 'rezaadityasaputra50@gmail.com', '$2y$10$tPGr1aHE8iP2.BqtYrQ.0.jUrCpz3t97oI4mpXCrGd6TNUf8NL76u', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 07:53', 'uploads/pkkmb/maba/absen-1/Reza Aditya Saputra_1631062428.jpg', '2021-09-09 07:46', 'uploads/pkkmb/maba/absen-2/Reza Aditya Saputra_1631148437.jpg', NULL, '2021-09-05 01:29:48', '2021-09-09 00:47:17'),
(224, 'Cahya Kamila Wilujeng', 'cahyakamila820@gmail.com', '$2y$10$v4TviedK2KWots10FqYqheTgfDzLLGg26fsBgn4FqszKaJaBDxgj6', 'S1 Sistem Informasi', 'Ahmad Dahlan', '2021-09-08 06:57', 'uploads/pkkmb/maba/absen-1/Cahya Kamila Wilujeng_1631060044.png', '2021-09-09 07:11', 'uploads/pkkmb/maba/absen-2/Cahya Kamila Wilujeng_1631146465.jpeg', NULL, '2021-09-05 06:12:07', '2021-09-09 00:14:25'),
(225, 'Arfian Haris Prayoga', 'arfianharis7@gmail.com', '$2y$10$OReNoqr4K8nSi2ss35C0n.AMTHV6mZxLfby3jbTnD8hmnMq5Mbmje', 'S1 Sistem Informasi', 'Cut nyak dhien', '2021-09-08 09:24', 'uploads/pkkmb/maba/absen-1/Arfian Haris Prayoga_1631068233.jpg', '2021-09-09 08:37', 'uploads/pkkmb/maba/absen-2/Arfian Haris Prayoga_1631151639.jpg', NULL, '2021-09-05 10:21:10', '2021-09-09 01:40:39'),
(226, 'Apriansa Arwandi Panjaitan', 'etahreggin99@gmail.com', '$2y$10$5JxJG8SJuq1yFMdwo9GFQODXRaMVzugZh3MTWBeNtV21L5eK3oZ2C', 'S1 Teknik Informatika', 'Cilik Riwut', '2021-09-08 07:30', 'uploads/pkkmb/maba/absen-1/Apriansa Arwandi Panjaitan_1631061255.jpg', '2021-09-09 07:33', 'uploads/pkkmb/maba/absen-2/Apriansa Arwandi Panjaitan_1631147668.jpg', NULL, '2021-09-05 12:54:10', '2021-09-09 00:34:28'),
(227, 'Risa Nur Fitriyani', 'risanur.fitriyani2720@gmail.com', '$2y$10$iTS80O8b3I5ElcgPDfc1BO4NgZetD69EQP6RaenEm.hcxQAjBqzZS', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:20', 'uploads/pkkmb/maba/absen-1/Risa Nur Fitriyani_1631061047.jpeg', '2021-09-09 07:21', 'uploads/pkkmb/maba/absen-2/Risa Nur Fitriyani_1631147159.jpeg', NULL, '2021-09-05 13:15:00', '2021-09-09 00:25:59'),
(228, 'FAJAR SYAHRUL HIDAYAT', 'syahrulfajar046@gmail.com', '$2y$10$zdRjWU0RQmmwWkw4KJ3kqeZ9Zt0./vVPYqlQzCSPVWoUwsj3Rzism', 'S1 Sistem Informasi', 'Cilik Riwut', '2021-09-08 07:28', 'uploads/pkkmb/maba/absen-1/FAJAR SYAHRUL HIDAYAT_1631060941.jpg', '2021-09-09 07:49', 'uploads/pkkmb/maba/absen-2/FAJAR SYAHRUL HIDAYAT_1631148995.jpg', NULL, '2021-09-06 09:51:04', '2021-09-09 00:56:35'),
(229, 'Reinald Zharrif Fathan Hami', 'rfathanhami@gmail.com', '$2y$10$1jeQbyEaLKA2z9/qj484UOg5U/X/V6TU6YmIA9ydGTqoOPryhpi66', 'S1 Teknik Informatika', 'Soekarno', '2021-09-08 07:32', 'uploads/pkkmb/maba/absen-1/Reinald Zharrif Fathan Hami_1631061187.jpg', '2021-09-09 07:44', 'uploads/pkkmb/maba/absen-2/Reinald Zharrif Fathan Hami_1631148470.jpg', NULL, '2021-09-06 09:59:32', '2021-09-09 00:47:50'),
(230, 'Angga Permana', 'anggapermana38711@gmail.com', '$2y$10$sjePM.MvVe8Rz0brCWaVKetKSxXjmqojCU.7O3QRCVcIJWMwu9fw.', 'S1 Teknik Informatika', 'Kelompok 10 Diponegoro', '2021-09-08 06:59', 'uploads/pkkmb/maba/absen-1/Angga Permana_1631059252.jpg', '2021-09-09 06:55', 'uploads/pkkmb/maba/absen-2/Angga Permana_1631145635.jpg', NULL, '2021-09-06 22:41:59', '2021-09-09 00:00:35'),
(231, 'Ihsan Budhi Nugroho', 'jalak832@gmail.com', '$2y$10$bkWnEUs3a8550.0/qPPWgO9eRWutoiNy1VMFtLTfeFkXxZg2jtoA.', 'S1 Sistem Informasi', 'Fatmawati', '2021-09-08 06:20', 'uploads/pkkmb/maba/absen-1/Ihsan Budhi Nugroho_1631057200.jpg', '2021-09-09 06:30', 'uploads/pkkmb/maba/absen-2/Ihsan Budhi Nugroho_1631144570.jpg', NULL, '2021-09-07 00:11:12', '2021-09-08 23:42:50'),
(232, 'Haykal Zufar Rizki Gunawan', 'haykalzr1221@gmail.com', '$2y$10$EcREZTM3GwfL13S1gF.tR.OuuS7eENJpheiVtLuonf7qFj6XFmYPa', 'S1 Sistem Informasi', 'Adam Malik', '2021-09-08 07:21', 'uploads/pkkmb/maba/absen-1/Haykal Zufar Rizki Gunawan_1631060692.jpeg', '2021-09-09 07:07', 'uploads/pkkmb/maba/absen-2/Haykal Zufar Rizki Gunawan_1631146696.jpeg', NULL, '2021-09-07 10:26:35', '2021-09-09 00:18:16'),
(233, 'Dwi Miftahussalamah', 'dwimiftahussalamahsalamah@gmail.com', '$2y$10$lDIJVx0VJkbC9YvekYeApOha9WwKtqa/qzNZzJL3KaSPMzWgHLmbW', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 06:46', 'uploads/pkkmb/maba/absen-1/Dwi Miftahussalamah_1631059318.jpeg', '2021-09-09 07:09', 'uploads/pkkmb/maba/absen-2/Dwi Miftahussalamah_1631146239.png', NULL, '2021-09-07 12:21:30', '2021-09-09 00:10:39'),
(234, 'Fajar', 'fajarnursidik273@gmail.com', '$2y$10$lVlIdvKPJfSqq08PqbYzb.S0xySfMCdghsYiQXgwT2MSQb4VYXuy.', 'S1 Teknik Informatika', 'Fatmawati', '2021-09-08 07:11', 'uploads/pkkmb/maba/absen-1/Fajar_1631060399.jpg', '2021-09-09 07:21', 'uploads/pkkmb/maba/absen-2/Fajar_1631146957.png', NULL, '2021-09-07 12:27:24', '2021-09-09 00:22:37'),
(235, 'Muhammad Hardiansyah', 'mhardiansyah2810@gmail.com', '$2y$10$p0hTKv1jPcQuk0HVTIlRYOSHitAuBY1AznSoCCd949vBtNfNZbntm', 'S1 Teknik Informatika', 'Cilik riwut', '2021-09-08 08:30', 'uploads/pkkmb/maba/absen-1/Muhammad Hardiansyah_1631065242.jpeg', '2021-09-09 08:21', 'uploads/pkkmb/maba/absen-2/Muhammad Hardiansyah_1631150756.jpeg', NULL, '2021-09-07 12:35:48', '2021-09-09 01:25:56'),
(236, 'Siti Fatimah Isny Nur Alvivi', 'fatimah.isny98@gmail.com', '$2y$10$ns5eVn0ZLTTFGqc1zgIPEOEUlCBB/7FyJMJIk9vzpo3spPeRSB18O', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-07 13:35:41', '2021-09-07 13:35:41'),
(237, 'Siti Fatimah Isny Nur Alvivi', 'isny.nuralvivi@gmail.com', '$2y$10$.GeZ7KQNOFKmO9kWdscKIONmM5tU4IUdWrr/whmoawhHrGuur.x9S', 'S1 Sistem Informasi', 'Diponegoro', '2021-09-08 07:34', 'uploads/pkkmb/maba/absen-1/Siti Fatimah Isny Nur Alvivi_1631061498.jpeg', '2021-09-09 07:51', 'uploads/pkkmb/maba/absen-2/Siti Fatimah Isny Nur Alvivi_1631148726.jpeg', NULL, '2021-09-07 13:37:34', '2021-09-09 00:52:06'),
(238, 'Muhammad Erlangga Prasetya', 'perlangga589@gmail.com', '$2y$10$FmqPyK7.K4J1.NlNtFztLuqbftfBikGD9zJO.mcATfCxUNF9o1Z7G', 'S1 Teknik Informatika', 'Dewi Sartika', '2021-09-08 07:43', 'uploads/pkkmb/maba/absen-1/Muhammad Erlangga Prasetya_1631061898.png', '2021-09-09 09:54', 'uploads/pkkmb/maba/absen-2/Muhammad Erlangga Prasetya_1631157019.jpg', NULL, '2021-09-07 14:16:08', '2021-09-09 03:10:19'),
(239, 'Ananda Fikri Amrizal', 'a.fikriamrizal@gmail.com', '$2y$10$h0B4r8F78D.Qzj.kZqP8Ku6mrNS8SQZtAJqc6tK4t4LmPqU7T8yxm', 'S1 Sistem Informasi', 'Ahmad Yani', '2021-09-08 07:55', 'uploads/pkkmb/maba/absen-1/Ananda Fikri Amrizal_1631062550.jpg', '2021-09-09 07:29', 'uploads/pkkmb/maba/absen-2/Ananda Fikri Amrizal_1631147402.jpg', NULL, '2021-09-07 14:27:30', '2021-09-09 00:30:02'),
(240, 'Muhammad Erlangga Prasetya', 'perlangga588@gmail.com', '$2y$10$nbLGTJBtW.bLe.nYhYn2jODTczR6PBYxSiFCdavDKZ7K8dX7nToLG', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-07 15:05:04', '2021-09-07 15:05:04'),
(241, 'Harfa Sabri Ubaid', 'sabriharfa@gmail.com', '$2y$10$lG2cXVhThtvgxZjM36WGKOg8h7mYw7ZP0r0.AaU2LDfbA6bEdPbQe', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 07:07', 'uploads/pkkmb/maba/absen-1/Harfa Sabri Ubaid_1631059774.jpg', '2021-09-09 07:21', 'uploads/pkkmb/maba/absen-2/Harfa Sabri Ubaid_1631146951.jpg', NULL, '2021-09-07 15:14:57', '2021-09-09 00:22:31'),
(242, 'Asep Nugraha', 'asepbilqis713@gmail.com', '$2y$10$3zW7vqKAFtK2TQwKUPUXI.zoaI0Jmi0QrzWznjg9FrEqTpKNeZ.r6', 'S1 Teknik Informatika', 'Diponegoro', '2021-09-08 07:09', 'uploads/pkkmb/maba/absen-1/Asep Nugraha_1631059837.jpg', '2021-09-09 06:43', 'uploads/pkkmb/maba/absen-2/Asep Nugraha_1631146057.jpg', NULL, '2021-09-07 16:27:46', '2021-09-09 00:07:37'),
(243, 'Zalfa Ramadhan', 'zr.zalfaramadhan@gmail.com', '$2y$10$4R/fs8h.E3cLW6TisoVDweUPDJfXWdXLwMYN97F8UNCH9kouuCd8.', 'S1 Sistem Informasi', 'wilbur olin atwater', '2021-09-08 07:32', 'uploads/pkkmb/maba/absen-1/Zalfa Ramadhan_1631062291.jpg', '2021-09-09 07:40', 'uploads/pkkmb/maba/absen-2/Zalfa Ramadhan_1631148083.jpg', NULL, '2021-09-07 17:43:22', '2021-09-09 00:41:23'),
(244, 'Resi Surya Agustian', 'resisurya723@gmail.com', '$2y$10$mnPUlCGC7xAJUvlEUy5K8OVK7fIZQjwzrbXi63tlAkZb6AbwjmyZa', 'S1 Teknik Informatika', 'Ki Hajar Dewantara', '2021-09-08 06:58', 'uploads/pkkmb/maba/absen-1/Resi Surya Agustian_1631059889.jpg', '2021-09-09 06:47', 'uploads/pkkmb/maba/absen-2/Resi Surya Agustian_1631147833.jpg', NULL, '2021-09-07 23:06:03', '2021-09-09 00:37:13'),
(245, 'Ghani Abassyah Helar', 'ghanigamers03@gmail.com', '$2y$10$LJeMjinUHzhsj3WRZ/X0v.ZBwtGakmRqRSU5NUDPteRWf96W8d3va', 'S1 Teknik Informatika', 'Cipto Mangunkusumo', '2021-09-08 06:53', 'uploads/pkkmb/maba/absen-1/Ghani Abassyah Helar_1631059343.jpeg', '2021-09-09 07:51', 'uploads/pkkmb/maba/absen-2/Ghani Abassyah Helar_1631148718.jpg', NULL, '2021-09-07 23:21:39', '2021-09-09 00:51:58'),
(246, 'Selviana Putri Nabilah', 'nandaspn30@gmail.com', '$2y$10$4ltJD0UIp5HWEqqvRd0evulKymNEcOAhpHKVays.aE1wVmzeozf7i', 'S1 Teknik Informatika', 'Gatot Subroto', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/Selviana Putri Nabilah_1631060796.jpg', '2021-09-09 08:11', 'uploads/pkkmb/maba/absen-2/Selviana Putri Nabilah_1631150043.png', NULL, '2021-09-07 23:26:20', '2021-09-09 01:14:03'),
(247, 'Toto Abdulpatah', 'totoabdulpatah45@gmail.com', '$2y$10$9YhJifFyC18g3zlOTgsmKejuwdNebEbKgaXMCoJjlsdnkmB0HrHLm', 'S1 Teknik Informatika', 'Dewi sartika', '2021-09-08 07:08', 'uploads/pkkmb/maba/absen-1/Toto Abdulpatah_1631059851.jpg', '2021-09-09 07:14', 'uploads/pkkmb/maba/absen-2/Toto Abdulpatah_1631146642.jpg', NULL, '2021-09-07 23:45:49', '2021-09-09 00:17:22'),
(248, 'Reynaldi Dianputra Manik', 'reynaldi19072003@gmail.com', '$2y$10$6DlRwA.Aq0qM8kp/PXf/0e2xk6OtOhRc9dWghR0Y8jkdkPTMVHP3W', 'S1 Teknik Informatika', 'Ahmad Yani', '2021-09-08 06:53', 'uploads/pkkmb/maba/absen-1/Reynaldi Dianputra Manik_1631060060.jpg', '2021-09-09 07:46', 'uploads/pkkmb/maba/absen-2/Reynaldi Dianputra Manik_1631148616.jpg', NULL, '2021-09-07 23:49:39', '2021-09-09 00:50:16'),
(249, 'Diah Novianti', 'noviantidiah163@gmail.com', '$2y$10$JsSaMurdxkVOFnS7RMEope9.t7/9oOKbQH0O8Q9qdUMiBn4gmVDUm', 'S1 Sistem Informasi', 'ALFRED NOBEL', '2021-09-08 07:21', 'uploads/pkkmb/maba/absen-1/Diah Novianti_1631060762.jpg', '2021-09-09 07:11', 'uploads/pkkmb/maba/absen-2/Diah Novianti_1631146363.jpg', NULL, '2021-09-07 23:50:15', '2021-09-09 00:12:43'),
(250, 'Affan Abdillah', 'real.ad4pt@gmail.com', '$2y$10$J2921C.4KfiNonOhIpNm.e9zpMmCVgsp3voEdhILymZho6O0oq0.2', 'S1 Sistem Informasi', 'Ki Hajar Dewantara', '2021-09-08 07:25', 'uploads/pkkmb/maba/absen-1/Affan Abdillah_1631060810.jpg', '2021-09-09 07:53', 'uploads/pkkmb/maba/absen-2/Affan Abdillah_1631148899.jpg', NULL, '2021-09-07 23:57:21', '2021-09-09 00:54:59'),
(251, 'Habil Rabani Herdiansyah', 'habilrabani17@gmail.com', '$2y$10$7NtQ9QHnurh2b4MKiCxwHeveQgcn5b5A2XPZLzjJ6rywBCC7ugK3G', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-07 23:59:28', '2021-09-07 23:59:28'),
(252, 'Habil Rabani Herdiansyah', 'habilrabani12@gmail.com', '$2y$10$DW1FdZeiUeb4WqzG4rNkuOpHEXKwR42i7E9zT8.gMggNar9ZqJAoK', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-08 00:04:12', '2021-09-08 00:04:12'),
(253, 'Habil Rabani Herdiansyah', 'habilrabani03@gmail.com', '$2y$10$XCzdMAyCraD0QxWBDN111OjcUKQlNtTqcMvKtUxIu5WoYMzkAJG2.', 'S1 Sistem Informasi', 'Adam Malik', '2021-09-08 07:41', 'uploads/pkkmb/maba/absen-1/Habil Rabani Herdiansyah_1631061727.jpg', '2021-09-09 08:08', 'uploads/pkkmb/maba/absen-2/Habil Rabani Herdiansyah_1631149790.jpg', NULL, '2021-09-08 00:05:12', '2021-09-09 01:09:50'),
(254, 'Muhammad ikbar zaidan', 'ikzada37@gmail.com', '$2y$10$3iNvw.ZLSgEF5PQItYXUju4a9b51tJIHU0Cscpd5ChEARz6CYkQsy', 'S1 Sistem Informasi', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-08 00:34:12', '2021-09-08 00:34:12'),
(255, 'Shadam Alfareza', 'shadamalfareza79@gmail.com', '$2y$10$1Fl46wvPZVzUM65cMgeyRuodqJDtHuM617.YY6vz/IhKVqKbkwX0K', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-08 00:37:35', '2021-09-08 00:37:35'),
(256, 'Berliana', 'berliana9211@gmail.com', '$2y$10$AtdD04xP1enrFWgWMFIpIeOmNQBZnIp1ddkANmsUeP1NZ8nsZsWEe', 'S1 Sistem Informasi', 'Soekarno', '2021-09-08 08:15', 'uploads/pkkmb/maba/absen-1/Berliana_1631063785.', '2021-09-09 08:22', 'uploads/pkkmb/maba/absen-2/Berliana_1631150667.', NULL, '2021-09-08 01:13:33', '2021-09-09 01:24:27'),
(257, 'Muhammad ikbar zaidan', 'zaidanMi03@gmail.com', '$2y$10$aQPB0U4ZKb9IAFbZ9GZ0YebIhlhJcvpIWoQ72REjCvEFkEiuMQ3eK', 'S1 Sistem Informasi', NULL, NULL, NULL, '2021-09-09 08:07', 'uploads/pkkmb/maba/absen-2/Muhammad ikbar zaidan_1631149905.jpg', NULL, '2021-09-09 00:33:35', '2021-09-09 01:11:45'),
(258, 'Rina Novela Eramury', 'rinanovelaeramury@gmail.com', '$2y$10$y42tZR5JqImIVaRbtXQQUOOus7oqilFNmf3a0jOk7l5zu78veKjFq', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-09 05:14:58', '2021-09-09 05:14:58'),
(259, 'Rina Novela Eramury', 'rinanevelaeramury@gmail.com', '$2y$10$.ce5VhtFhRDT8pBVD57BT.jn/p0osTRa99R930BdYAWq.TTT0mKQu', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-09 05:17:54', '2021-09-09 05:17:54'),
(260, 'Muhammad Sabiq bil khoirot', 'khoirotsabiq26@gmail.com', '$2y$10$2.0nmhl846Dl7b6m0H6sfe2TkuoBODHoWlfdS.btfuRuWE5/o/uC2', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-09 09:51:49', '2021-09-09 09:51:49'),
(261, 'Bahij Darwisy Farras', 'darwisyf04@gmail.com', '$2y$10$pxZjmELw4W5UqgyJT/6zDuUcZypihDSCYB8ZMsXG69CN9Z7I2dMge', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-09 10:41:56', '2021-09-09 10:41:56'),
(262, 'dito', 'dito@gmail.com', '$2y$10$pFW5cO5NaUyzeUQh0nchmud1hLAd8TWlvv3aHRY9hd011dYxmhLwC', 'S1 Teknik Informatika', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-23 15:21:26', '2022-08-23 15:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_06_17_221536_create_permission_tables', 1),
(6, '2021_06_18_124738_create_bidang_table', 1),
(7, '2021_06_18_124753_create_departemen_table', 1),
(8, '2021_06_18_125306_create_pengurus_table', 1),
(9, '2021_06_19_222128_create_berita_table', 1),
(10, '2021_06_20_054550_create_acara_table', 1),
(11, '2021_07_05_170312_create_program_table', 1),
(12, '2021_07_05_170457_create_pengumuman_table', 1),
(13, '2021_07_06_174858_create_karya_table', 1),
(14, '2021_07_06_213047_create_proker_table', 1),
(15, '2021_07_09_162857_create_report_table', 1),
(16, '2021_07_10_171550_create_proposal_table', 1),
(17, '2021_07_11_023313_create_anggota_table', 1),
(18, '2021_07_16_142015_create_skor_games_table', 1),
(19, '2021_07_16_144529_create_user_game_table', 1),
(20, '2021_07_30_232942_create_turnamen_table', 1),
(21, '2021_08_04_125152_create_tim_ml_umum_table', 1),
(22, '2021_08_04_125223_create_peserta_ml_umum_table', 1),
(23, '2021_08_04_125238_create_peserta_cadangan_ml_umum_table', 1),
(24, '2021_08_06_000306_create_tim_pubg_table', 1),
(25, '2021_08_06_000327_create_peserta_pubg_table', 1),
(26, '2021_08_06_000342_create_peserta_cadangan_pubg_table', 1),
(27, '2021_08_06_005753_create_tim_dota_table', 1),
(28, '2021_08_06_005802_create_peserta_dota_table', 1),
(29, '2021_08_06_005810_create_peserta_cadangan_dota_table', 1),
(30, '2021_08_06_191858_create_peserta_catur_putra_table', 1),
(31, '2021_08_07_012038_create_tim_valorant_table', 1),
(32, '2021_08_07_012047_create_peserta_valorant_table', 1),
(33, '2021_08_07_012117_create_peserta_cadangan_valorant_table', 1),
(34, '2021_08_07_062217_create_tim_ml_putri_table', 1),
(35, '2021_08_07_062241_create_peserta_ml_putri_table', 1),
(36, '2021_08_07_062250_create_peserta_cadangan_ml_putri_table', 1),
(37, '2021_08_07_115125_create_peserta_catur_putri', 1),
(38, '2021_08_07_120703_create_peserta_mc', 1),
(39, '2021_08_09_213912_create_tim_pb', 1),
(40, '2021_08_09_214425_create_perserta_pb', 1),
(41, '2021_08_09_214602_create_perserta_cadangan_pb', 1),
(42, '2021_08_10_030257_create_maba_table', 1),
(43, '2021_08_10_172741_create_informasi_table', 1),
(44, '2021_08_10_172810_create_rundown_table', 1),
(45, '2021_08_23_235629_create_tugas_individu_maba_table', 1),
(46, '2021_08_24_000351_create_tugas_kelompok_maba_table', 1),
(47, '2022_04_01_230046_create_laporan_table', 2),
(48, '2022_06_14_220450_create_event_table', 3),
(120, '2014_10_12_000000_create_users_table', 1),
(121, '2014_10_12_100000_create_password_resets_table', 1),
(122, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(123, '2019_08_19_000000_create_failed_jobs_table', 1),
(124, '2021_06_17_221536_create_permission_tables', 1),
(125, '2021_06_18_124738_create_bidang_table', 1),
(126, '2021_06_18_124753_create_departemen_table', 1),
(127, '2021_06_18_125306_create_pengurus_table', 1),
(128, '2021_06_19_222128_create_berita_table', 1),
(129, '2021_06_20_054550_create_acara_table', 1),
(130, '2021_07_05_170312_create_program_table', 1),
(131, '2021_07_05_170457_create_pengumuman_table', 1),
(132, '2021_07_06_174858_create_karya_table', 1),
(133, '2021_07_06_213047_create_proker_table', 1),
(134, '2021_07_09_162857_create_report_table', 1),
(135, '2021_07_10_171550_create_proposal_table', 1),
(136, '2021_07_11_023313_create_anggota_table', 1),
(137, '2022_08_09_155814_create_pengaduan_table', 4),
(138, '2022_08_19_155325_create_bemitory_table', 5),
(139, '2022_08_23_205655_create_userpeminjam_table', 6),
(140, '2022_08_23_210538_create_userpeminjam_table', 7),
(141, '2022_08_23_210857_create_userpeminjam_table', 8),
(142, '2022_08_23_211155_create_userpeminjam_table', 9),
(143, '2022_08_23_211425_create_userpeminjam_table', 10),
(144, '2022_08_24_171341_create_peminjam_table', 11),
(146, '2022_08_25_155429_create_peminjaman_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 2),
(6, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 2),
(10, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 1),
(12, 'App\\Models\\User', 1),
(13, 'App\\Models\\User', 1),
(13, 'App\\Models\\User', 2),
(14, 'App\\Models\\User', 1),
(15, 'App\\Models\\User', 1),
(16, 'App\\Models\\User', 1),
(17, 'App\\Models\\User', 1),
(17, 'App\\Models\\User', 2),
(17, 'App\\Models\\User', 10),
(18, 'App\\Models\\User', 1),
(19, 'App\\Models\\User', 1),
(19, 'App\\Models\\User', 2),
(20, 'App\\Models\\User', 1),
(21, 'App\\Models\\User', 1),
(21, 'App\\Models\\User', 2),
(21, 'App\\Models\\User', 10),
(22, 'App\\Models\\User', 1),
(22, 'App\\Models\\User', 2),
(23, 'App\\Models\\User', 1),
(23, 'App\\Models\\User', 2),
(24, 'App\\Models\\User', 1),
(24, 'App\\Models\\User', 2),
(25, 'App\\Models\\User', 1),
(25, 'App\\Models\\User', 2),
(25, 'App\\Models\\User', 10),
(26, 'App\\Models\\User', 1),
(26, 'App\\Models\\User', 2),
(27, 'App\\Models\\User', 1),
(27, 'App\\Models\\User', 2),
(28, 'App\\Models\\User', 1),
(28, 'App\\Models\\User', 2),
(29, 'App\\Models\\User', 1),
(29, 'App\\Models\\User', 2),
(29, 'App\\Models\\User', 10),
(30, 'App\\Models\\User', 1),
(30, 'App\\Models\\User', 2),
(31, 'App\\Models\\User', 1),
(31, 'App\\Models\\User', 2),
(32, 'App\\Models\\User', 1),
(32, 'App\\Models\\User', 2),
(33, 'App\\Models\\User', 1),
(33, 'App\\Models\\User', 2),
(33, 'App\\Models\\User', 10),
(34, 'App\\Models\\User', 1),
(34, 'App\\Models\\User', 2),
(34, 'App\\Models\\User', 10),
(35, 'App\\Models\\User', 1),
(35, 'App\\Models\\User', 2),
(35, 'App\\Models\\User', 10),
(36, 'App\\Models\\User', 1),
(36, 'App\\Models\\User', 2),
(36, 'App\\Models\\User', 10),
(37, 'App\\Models\\User', 1),
(37, 'App\\Models\\User', 2),
(38, 'App\\Models\\User', 1),
(38, 'App\\Models\\User', 2),
(39, 'App\\Models\\User', 1),
(39, 'App\\Models\\User', 2),
(40, 'App\\Models\\User', 1),
(40, 'App\\Models\\User', 2),
(41, 'App\\Models\\User', 1),
(41, 'App\\Models\\User', 2),
(42, 'App\\Models\\User', 1),
(43, 'App\\Models\\User', 1),
(44, 'App\\Models\\User', 1),
(45, 'App\\Models\\User', 1),
(45, 'App\\Models\\User', 2),
(46, 'App\\Models\\User', 1),
(47, 'App\\Models\\User', 1),
(48, 'App\\Models\\User', 1),
(49, 'App\\Models\\User', 1),
(49, 'App\\Models\\User', 2),
(50, 'App\\Models\\User', 1),
(51, 'App\\Models\\User', 1),
(52, 'App\\Models\\User', 1),
(53, 'App\\Models\\User', 1),
(53, 'App\\Models\\User', 2),
(54, 'App\\Models\\User', 1),
(55, 'App\\Models\\User', 1),
(56, 'App\\Models\\User', 1),
(57, 'App\\Models\\User', 1),
(57, 'App\\Models\\User', 2),
(57, 'App\\Models\\User', 10),
(58, 'App\\Models\\User', 1),
(58, 'App\\Models\\User', 10),
(59, 'App\\Models\\User', 1),
(59, 'App\\Models\\User', 10),
(60, 'App\\Models\\User', 1),
(60, 'App\\Models\\User', 10),
(61, 'App\\Models\\User', 1),
(61, 'App\\Models\\User', 2),
(62, 'App\\Models\\User', 1),
(63, 'App\\Models\\User', 1),
(64, 'App\\Models\\User', 1),
(65, 'App\\Models\\User', 1),
(65, 'App\\Models\\User', 2),
(66, 'App\\Models\\User', 1),
(67, 'App\\Models\\User', 1),
(68, 'App\\Models\\User', 1),
(69, 'App\\Models\\User', 1),
(69, 'App\\Models\\User', 2),
(70, 'App\\Models\\User', 1),
(71, 'App\\Models\\User', 1),
(72, 'App\\Models\\User', 1),
(73, 'App\\Models\\User', 1),
(73, 'App\\Models\\User', 2),
(74, 'App\\Models\\User', 1),
(75, 'App\\Models\\User', 1),
(76, 'App\\Models\\User', 1),
(77, 'App\\Models\\User', 1),
(77, 'App\\Models\\User', 2),
(77, 'App\\Models\\User', 10),
(78, 'App\\Models\\User', 1),
(78, 'App\\Models\\User', 2),
(78, 'App\\Models\\User', 10),
(79, 'App\\Models\\User', 1),
(79, 'App\\Models\\User', 2),
(79, 'App\\Models\\User', 10),
(80, 'App\\Models\\User', 1),
(80, 'App\\Models\\User', 2),
(80, 'App\\Models\\User', 10),
(81, 'App\\Models\\User', 1),
(81, 'App\\Models\\User', 2),
(81, 'App\\Models\\User', 10),
(82, 'App\\Models\\User', 1),
(82, 'App\\Models\\User', 2),
(82, 'App\\Models\\User', 10),
(83, 'App\\Models\\User', 1),
(83, 'App\\Models\\User', 2),
(83, 'App\\Models\\User', 10),
(84, 'App\\Models\\User', 1),
(84, 'App\\Models\\User', 2),
(85, 'App\\Models\\User', 1),
(85, 'App\\Models\\User', 2),
(85, 'App\\Models\\User', 10),
(86, 'App\\Models\\User', 1),
(86, 'App\\Models\\User', 2),
(86, 'App\\Models\\User', 10),
(87, 'App\\Models\\User', 1),
(87, 'App\\Models\\User', 2),
(87, 'App\\Models\\User', 10),
(88, 'App\\Models\\User', 1),
(88, 'App\\Models\\User', 2),
(88, 'App\\Models\\User', 10),
(90, 'App\\Models\\User', 1),
(90, 'App\\Models\\User', 2),
(90, 'App\\Models\\User', 10),
(91, 'App\\Models\\User', 1),
(91, 'App\\Models\\User', 2),
(91, 'App\\Models\\User', 10),
(92, 'App\\Models\\User', 1),
(92, 'App\\Models\\User', 2),
(92, 'App\\Models\\User', 10),
(93, 'App\\Models\\User', 1),
(93, 'App\\Models\\User', 2),
(93, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id`, `nama`, `npm`, `no_hp`, `email`, `password`, `prodi`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dito', '2010631170071', '08123456789', 'zidan@gmail.com', '$2y$10$nVdDvLMx0Pf3zVBbMe2nHOXaqskuFrB7EUI7DX8DIlQJLprK9XfGS', 'Teknik Informatika', NULL, '2022-08-24 12:48:37', '2022-08-24 12:48:37'),
(5, 'kizuto', '2010631170072', '08123456784', 'kizuto@gmail.com', '$2y$10$ZLq3A2XuIcdfBMkimarJlOal1Gk5QYpS/cj3/PxXdmoI8dKYz/wA6', 'Teknik Informatika', NULL, '2022-08-27 21:00:54', '2022-08-27 21:03:19'),
(6, 'Fathan Pebrilliestyo Ridwan', '2010631170073', '08123456781', '201063117007@student.unsika.ac.id', '$2y$10$.PLH1GggDQUjlzYng95iR.0rF0UArT2pWsjRVDZiaSNkGvQR9kCiG', 'Teknik Informatika', NULL, '2022-08-28 15:35:40', '2022-08-28 15:35:40'),
(7, 'Kang Pinjam', '2010631170044', '08987335266', 'kangpinjam@gmail.com', '$2y$10$vxT7pgGksCUp5xyTLCNNyO6r6B5eWFV3T07ymu.ASAf6LBSYtfGnu', 'Teknik Mesin', NULL, '2022-08-28 18:44:51', '2022-08-28 18:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `status` enum('proses pengajuan','ditolak','disetujui','dibatalkan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses pengajuan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `username`, `barang`, `jumlah`, `tanggal_pinjam`, `durasi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dito', 'Laptop ACER Core i101', 1, '2022-08-06', 5, 'dibatalkan', '2022-08-31 15:04:00', '2022-08-31 15:04:07'),
(2, 'dito', 'Laptop ACER Core i101', 3, '2022-08-19', 3, 'dibatalkan', '2022-08-31 15:07:13', '2022-08-31 15:08:07'),
(3, 'dito', 'Laptop ACER Core i111', 3, '2022-09-10', 3, 'ditolak', '2022-08-31 15:10:49', '2022-09-01 10:35:58'),
(4, 'dito', 'Laptop ACER Core i101', 2, '2022-09-10', 5, 'disetujui', '2022-08-31 15:11:25', '2022-09-01 10:34:09'),
(5, 'dito', 'Laptop ACER Core i101', 2, '2022-09-03', 5, 'dibatalkan', '2022-09-01 10:40:23', '2022-09-01 10:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Anonim',
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_pengaduan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `pengadu`, `kategori`, `judul`, `isi_pengaduan`, `created_at`, `updated_at`) VALUES
(8, 'Mahasiswa yang Didzolimi', 'perkuliahan dan akademis', 'UNSIKA KOK BELUM PERNAH KULIAH OFFLINE ?', 'Kuliah kok online terus, padahal kampus lain udah offline loh, minta tolong di report aja ke bagian sana nya, Apakah ada yang salah dengan rektorat kita atau bagaimana ???', '2022-08-27 23:37:31', '2022-08-27 23:37:31'),
(9, 'Anonimus', 'rektorat', 'IPI KOK GEDE BANGET ? DIPAKE APA AJA TUH ?', 'IPI UNSIKA kok gede banget ya, padahal kita bisa liat kualitas infrastruktur tidak terlalu bagus di unsika.', '2022-08-28 03:28:52', '2022-08-28 03:28:52'),
(10, 'Anonimus', 'ormawa', 'ORMAWA TAK SEJALAN ADRT', 'Kenapa ormawa sekarang kaya tukang dagang, apa-apa harus paid promot', '2022-08-28 03:53:42', '2022-08-28 03:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_bidang` bigint(20) UNSIGNED DEFAULT NULL,
  `id_departemen` bigint(20) UNSIGNED DEFAULT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama`, `jabatan`, `id_bidang`, `id_departemen`, `npm`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Mohamad Alda', 'Ketua Umum', NULL, NULL, '1910631170206', '085814404967', '2021-06-30 17:15:59', '2022-03-05 08:46:33'),
(2, 'Abidzard Lintang Adhiasta', 'Wakil Ketua', NULL, NULL, '1910631170149', '089686437793', '2021-06-30 17:16:50', '2022-03-07 12:20:53'),
(3, 'Nur Rizqi Alfiah', 'Sekretaris Umum', NULL, NULL, '1910631170112', '085694978264', '2021-06-30 17:17:11', '2022-03-07 12:21:56'),
(4, 'Puput Silva Rosiana', 'Wakil Sekretaris', NULL, NULL, '2010631250071', '08988893488', '2021-06-30 17:17:30', '2022-03-07 12:23:36'),
(5, 'Syams Sulaeman', 'Bendahara Umum', NULL, NULL, '1910631170236', '082123915612', '2021-06-30 17:17:50', '2022-03-07 12:24:56'),
(6, 'Aida Muflihah', 'Wakil Bendahara', NULL, NULL, '2010631250028', '085711331917', '2021-06-30 17:18:09', '2022-03-07 12:26:31'),
(7, 'Syafina Haviyola', 'Koordinator Bidang', 1, 13, '1910631170049', '089531713810', '2021-06-30 17:18:40', '2022-03-07 12:28:35'),
(8, 'Agnia Virli Rosdianty', 'Koordinator Departemen', 1, 1, '1910631170003', '0895359612965', '2021-06-30 17:19:37', '2022-03-07 12:36:44'),
(9, 'Alvi Yuniar', 'Anggota', 1, 1, '2010631170050', '088214233021', '2021-06-30 17:20:11', '2022-03-07 12:37:40'),
(10, 'Muhamad Sidqih Arhinza Juliantara', 'Anggota', 1, 1, '2010631170094', '085810618417', '2021-06-30 17:20:46', '2022-03-07 12:38:57'),
(11, 'Wildan Mukholad Fauzi', 'Koordinator Departemen', 1, 2, '1910631170145', '085921986896', '2021-06-30 17:21:22', '2022-03-07 12:48:37'),
(12, 'Amanda Febrianti', 'Anggota', 1, 2, '2010631170039', '083815617704', '2021-06-30 17:21:39', '2022-03-07 12:54:05'),
(13, 'Salma Haya Amalia', 'Anggota', 1, 2, '2010631170117', '08977922923', '2021-06-30 17:21:53', '2022-03-07 12:55:45'),
(14, 'Fenny Rahmayani', 'Koordinator Bidang', 2, 14, '1910631170020', '089692448380', '2021-06-30 17:22:45', '2022-03-07 13:12:19'),
(15, 'Dimas Fathu Ramdhani', 'Koordinator Departemen', 2, 3, '1910631170176', '085841937950', '2021-06-30 17:23:09', '2022-03-07 13:16:48'),
(16, 'Gebby Dwi Putri Haryanto', 'Anggota', 2, 3, '1910631250044', '089639722164', '2021-06-30 17:23:33', '2022-03-07 13:19:27'),
(17, 'Anisa Septiani', 'Anggota', 2, 3, '2010631250088', '083816093435', '2021-06-30 17:23:50', '2022-03-07 13:21:08'),
(18, 'Stefanus Deo Agape', 'Koordinator Departemen', 2, 4, '1910631170233', '081285408297', '2021-06-30 17:24:35', '2022-03-07 13:22:17'),
(19, 'Anisa Nur Hasanah', 'Anggota', 2, 4, '2010631170052', '081295502632', '2021-06-30 17:24:50', '2022-03-07 13:23:20'),
(20, 'Arfan Ryo Darmawan', 'Anggota', 2, 4, '2010631170057', '081293833378', '2021-06-30 17:25:13', '2022-03-07 13:24:02'),
(22, 'Giovanny Maria Rosari Dwi C. A.', 'Koordinator Departemen', 2, 5, '1910631170188', '085697539810', '2021-06-30 17:25:46', '2022-03-07 13:26:33'),
(23, 'Kris Adiwinata', 'Anggota', 2, 5, '2010631250057', '089637004158', '2021-06-30 17:25:59', '2022-03-07 13:27:22'),
(24, 'Devi Fitriani Maulana', 'Anggota', 2, 5, '2010631250037', '081293803075', '2021-06-30 17:26:15', '2022-03-07 13:28:26'),
(25, 'Sultan Tira Al Farizi', 'Koordinator Bidang', 3, 15, '1910631170234', '082128649265', '2021-06-30 17:26:43', '2022-03-07 13:30:49'),
(26, 'Naufal Arib Fadhlurrohman', 'Koordinator Departemen', 3, 6, '2010631170105', '089506547697', '2021-06-30 17:27:11', '2022-03-07 13:36:33'),
(27, 'Fithra Bayu Satria Erman', 'Anggota', 3, 6, '2010631250013', '085720467830', '2021-06-30 17:28:27', '2022-03-07 13:37:26'),
(28, 'Dede Fitriyani', 'Anggota', 3, 6, '2010631170007', '081314763687', '2021-06-30 17:28:46', '2022-03-07 13:39:51'),
(29, 'Wahyu Darajat', 'Koordinator Departemen', 3, 8, '1910631170239', '081517438359', '2021-06-30 17:29:07', '2022-03-07 13:42:20'),
(30, 'Rangga Nur Baehaqi Ramadhan', 'Anggota', 3, 8, '1910631170224', '0895424486433', '2021-06-30 17:29:27', '2022-03-07 13:43:05'),
(31, 'Ghani Noer Rafi', 'Anggota', 3, 8, '2010631250050', '08561204297', '2021-06-30 17:29:43', '2022-03-07 13:47:24'),
(32, 'Adrian Aufarrizq', 'Anggota', 3, 8, '2010631170042', '085591494936', '2021-06-30 17:30:09', '2022-03-07 13:48:13'),
(33, 'Gilang Mahardhika Pratama', 'Koordinator Departemen', 3, 7, '1910631170187', '089631159600', '2021-06-30 17:30:30', '2022-03-07 13:49:45'),
(34, 'Muhammad Rangga Aditya', 'Anggota', 3, 7, '2010631250094', '081286971910', '2021-06-30 17:30:43', '2022-03-07 13:54:21'),
(35, 'Fauzan Arista Alamsyah', 'Anggota', 3, 7, '2010631170143', '082249857174', '2021-06-30 17:31:00', '2022-03-07 13:55:15'),
(36, 'Salim Puad', 'Koordinator Bidang', 4, 16, '1910631170043', '083195662826', '2021-06-30 17:31:33', '2022-03-07 13:56:27'),
(37, 'Septian Bimo Hartanto', 'Koordinator Departemen', 4, 9, '1910631170231', '087886107447', '2021-06-30 17:31:49', '2022-03-07 13:57:58'),
(38, 'Fanny Suyantoputri', 'Anggota', 4, 9, '2010631170070', '085884044342', '2021-06-30 17:32:11', '2022-03-07 13:59:03'),
(39, 'Ray Rizky Fawzy', 'Anggota', 4, 9, '2010631170027', '089699754015', '2021-06-30 17:32:25', '2022-03-07 13:59:46'),
(40, 'Novanto Ramadhan', 'Koordinator Departemen', 4, 10, '1910631250025', '087701346690', '2021-06-30 17:32:50', '2022-03-07 14:02:10'),
(41, 'Aditya Pramudya', 'Anggota', 4, 10, '1910631170153', '089643818352', '2021-06-30 17:33:10', '2022-03-07 14:02:54'),
(42, 'Naufaldi Mahardika', 'Anggota', 4, 10, '1910631170035', '0895391100636', '2021-06-30 17:33:40', '2022-03-07 14:03:43'),
(43, 'Irna Purnahasanah', 'Anggota', 4, 10, '2010631170014', '081328696076', '2021-06-30 17:33:54', '2022-03-07 14:04:30'),
(44, 'Ahmad Nursidik Dinar', 'Koordinator Departemen', 4, 11, '1910631170157', '081410856221', '2021-06-30 17:34:27', '2022-03-07 14:05:32'),
(45, 'Fathan Pebrilliestyo Ridwan', 'Anggota', 4, 11, '2010631170072', '08987335266', '2021-06-30 17:34:46', '2022-03-07 14:06:34'),
(46, 'Anandito Rafi Putra', 'Anggota', 4, 11, '2010631170137', '081296265144', '2021-06-30 17:35:12', '2022-03-07 14:07:26'),
(47, 'Najmil Hayah', 'Koordinator Departemen', 4, 12, '2010631170102', '085156445121', '2021-06-30 17:35:56', '2022-03-07 14:08:22'),
(48, 'Ilhan Firaldi', 'Anggota', 4, 12, '2010631170082', '081934185276', '2021-06-30 17:36:11', '2022-03-07 14:16:06'),
(49, 'Annabella Dian Dameria Sinambela', 'Anggota', 4, 12, '2010631170054', '081311554059', '2021-06-30 17:36:26', '2022-03-07 14:10:01'),
(50, 'Alpin Apriliansyah Mohsa', 'Anggota', 1, 1, '2010631250003', '0895398506686', '2022-03-07 12:45:38', '2022-03-07 12:45:38'),
(51, 'Adrian Ramadhani Pri Haryoga', 'Anggota', 1, 2, '2010631170135', '087823041621', '2022-03-07 12:56:44', '2022-03-07 12:56:44'),
(52, 'Andriani Nurian', 'Anggota', 2, 5, '2010631170002', '089510753205', '2022-03-07 13:29:37', '2022-03-07 13:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Lihat_User', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(2, 'Tambah_User', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(3, 'Edit_User', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(4, 'Hapus_User', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(5, 'Lihat_Role', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(6, 'Tambah_Role', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(7, 'Edit_Role', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(8, 'Hapus_Role', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(9, 'Lihat_Bidang', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(10, 'Tambah_Bidang', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(11, 'Edit_Bidang', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(12, 'Hapus_Bidang', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(13, 'Lihat_Departemen', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(14, 'Tambah_Departemen', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(15, 'Edit_Departemen', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(16, 'Hapus_Departemen', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(17, 'Lihat_Pengurus', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(18, 'Tambah_Pengurus', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(19, 'Edit_Pengurus', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(20, 'Hapus_Pengurus', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(21, 'Lihat_Proker', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(22, 'Tambah_Proker', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(23, 'Edit_Proker', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(24, 'Hapus_Proker', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(25, 'Lihat_Berita', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(26, 'Tambah_Berita', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(27, 'Edit_Berita', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(28, 'Hapus_Berita', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(29, 'Lihat_Acara', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(30, 'Tambah_Acara', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(31, 'Edit_Acara', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(32, 'Hapus_Acara', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(33, 'Lihat_Karya', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(34, 'Tambah_Karya', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(35, 'Edit_Karya', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(36, 'Hapus_Karya', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(37, 'Lihat_Apr', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(38, 'Tambah_Apr', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(39, 'Edit_Apr', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(40, 'Hapus_Apr', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(41, 'Lihat_Keputrian', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(42, 'Tambah_Keputrian', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(43, 'Edit_Keputrian', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(44, 'Hapus_Keputrian', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(45, 'Lihat_Fcup', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(46, 'Tambah_Fcup', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(47, 'Edit_Fcup', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(48, 'Hapus_Fcup', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(49, 'Lihat_Mading', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(50, 'Tambah_Mading', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(51, 'Edit_Mading', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(52, 'Hapus_Mading', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(53, 'Lihat_Info', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(54, 'Tambah_Info', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(55, 'Edit_Info', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(56, 'Hapus_Info', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(57, 'Lihat_Elearning', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(58, 'Tambah_Elearning', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(59, 'Edit_Elearning', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(60, 'Hapus_Elearning', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(61, 'Lihat_Foto', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(62, 'Tambah_Foto', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(63, 'Edit_Foto', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(64, 'Hapus_Foto', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(65, 'Lihat_Lpj', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(66, 'Tambah_Lpj', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(67, 'Edit_Lpj', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(68, 'Hapus_Lpj', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(69, 'Lihat_Pinjam', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(70, 'Tambah_Pinjam', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(71, 'Edit_Pinjam', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(72, 'Hapus_Pinjam', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(73, 'Lihat_Merchandise', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(74, 'Tambah_Merchandise', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(75, 'Edit_Merchandise', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(76, 'Hapus_Merchandise', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(77, 'Lihat_Program', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(78, 'Tambah_Program', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(79, 'Edit_Program', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(80, 'Hapus_Program', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(81, 'Lihat_Pengumuman', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(82, 'Tambah_Pengumuman', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(83, 'Edit_Pengumuman', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(84, 'Hapus_Pengumuman', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(85, 'Lihat_Pengusul', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(86, 'Tambah_Pengusul', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(87, 'Edit_Pengusul', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(88, 'Hapus_Pengusul', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(89, 'User', 'web', '2021-07-14 08:23:13', '2021-07-14 08:23:13'),
(90, 'Lihat_Event', 'web', '2022-06-24 04:11:39', '2022-06-24 04:11:39'),
(91, 'Tambah_Event', 'web', '2022-06-24 04:12:49', '2022-06-24 04:12:49'),
(92, 'Edit_Event', 'web', '2022-06-24 04:13:22', '2022-06-24 04:13:22'),
(93, 'Hapus_Event', 'web', '2022-06-24 04:13:59', '2022-06-24 04:13:59'),
(94, 'Lihat_Bemitory', 'web', '2022-08-07 05:12:06', '2022-08-07 05:12:06'),
(95, 'Tambah_Bemitory', 'web', '2022-08-07 05:12:06', '2022-08-07 05:12:06'),
(96, 'Edit_Bemitory', 'web', '2022-08-07 05:14:23', '2022-08-07 05:14:23'),
(97, 'Hapus_Bemitory', 'web', '2022-08-07 05:14:23', '2022-08-07 05:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_cadangan_dota`
--

CREATE TABLE `peserta_cadangan_dota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_steam_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto_peserta_cadangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_cadangan_ml_putri`
--

CREATE TABLE `peserta_cadangan_ml_putri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto_peserta_cadangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_cadangan_ml_umum`
--

CREATE TABLE `peserta_cadangan_ml_umum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto_peserta_cadangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_cadangan_pb`
--

CREATE TABLE `peserta_cadangan_pb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto_peserta_cadangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_cadangan_pubg`
--

CREATE TABLE `peserta_cadangan_pubg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto_peserta_cadangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_cadangan_pubg`
--

INSERT INTO `peserta_cadangan_pubg` (`id`, `id_tim`, `nama_peserta_cadangan`, `nickname_peserta_cadangan`, `id_game_peserta_cadangan`, `no_hp_peserta_cadangan`, `path_foto_peserta_cadangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'tes', 'tes', '1231411', '08121312131213', 'uploads/fcup/foto/tes_1629989706.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_cadangan_valorant`
--

CREATE TABLE `peserta_cadangan_valorant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto_peserta_cadangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_catur_putra`
--

CREATE TABLE `peserta_catur_putra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_catur_putra`
--

INSERT INTO `peserta_catur_putra` (`id`, `id_turnamen`, `nama_peserta`, `npm`, `nickname`, `kelas`, `angkatan`, `prodi`, `no_hp_peserta`, `path_foto`, `created_at`, `updated_at`) VALUES
(1, 5, 'tes', '191099913', 'tes', '3d', '2018', 'Teknik Informatika', '081111111111', 'uploads/fcup/foto/tes_1630564339.jpg', '2021-09-02 06:32:19', '2021-09-02 06:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_catur_putri`
--

CREATE TABLE `peserta_catur_putri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_dota`
--

CREATE TABLE `peserta_dota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_steam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_mc`
--

CREATE TABLE `peserta_mc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_ml_putri`
--

CREATE TABLE `peserta_ml_putri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_ml_umum`
--

CREATE TABLE `peserta_ml_umum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pb`
--

CREATE TABLE `peserta_pb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pubg`
--

CREATE TABLE `peserta_pubg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_pubg`
--

INSERT INTO `peserta_pubg` (`id`, `id_tim`, `nama_peserta`, `nickname`, `id_game`, `no_hp_peserta`, `path_foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'testes', 'testes', '1231221', '0811111111111', 'uploads/fcup/foto/testes.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06'),
(2, 1, 'Tes', 'teslkljlkh', '1231231', '081211111111', 'uploads/fcup/foto/Tes.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06'),
(3, 1, 'testest', 'tesets', '121312', '0811111111111', 'uploads/fcup/foto/testest.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06'),
(4, 1, 'tesklhkl', 'teslhkhklj', '1231213', '080796979989', 'uploads/fcup/foto/tesklhkl.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06'),
(5, 1, 'teslhkhk', 'tesjklhlkg', '123121', '080686867889', 'uploads/fcup/foto/teslhkhk.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_valorant`
--

CREATE TABLE `peserta_valorant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_game` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_departemen` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_proker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `triwulan` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `id_departemen`, `nama_proker`, `slug`, `deskripsi`, `penanggung_jawab`, `anggaran`, `status`, `triwulan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Welcoming Maba', 'welcoming-maba', '<p> Welcoming maba merupakan sebuah kegiatan yang diperuntukan untuk menyambut mahasiswa tahun ajaran baru, serta sebagai acara sambutan dari BEM Fasilkom kepada Mahasiswa Baru </p>', 'Alvi Yuniar', '0', 0, '3', '2021-07-07 15:38:13', '2022-08-28 20:39:46'),
(2, 1, 'Kenali', 'kenali', '<p>Kenali merupakan masa perkenalan antar mahasiswa baru , yang mana program ini diharapkan dapat memperluas koneksi mahasiswa baik pada teman seangkatannya maupun pada Kakak tingkat mereka.</p>', 'Muhamad Sidqih Arhinza Juliantara', '0', 0, '3', '2021-07-07 15:38:40', '2022-06-23 13:31:53'),
(3, 1, 'Inaugurasi', 'inaugurasi', '<p>Inaugurasi merupakan sebuah program dalam upaya meningkatkan tali persaudaraan antar sesama mahasiswa baru, biasanya dilaksanakan diluar kampus dan memiliki berbagai rangkaian kegiatan yang bersifat non formal.</p>', 'Agnia Virli Rosdianty', '0', 0, '4', '2021-07-07 15:39:07', '2022-06-23 13:31:53'),
(4, 1, 'BEM FASILKOM Academy', 'bem-fasilkom-academy', '<p>Kegiatan ini bertujuan untuk menciptakan eksekutif muda dari para mahasiswa baru dan memberikan gambaran mengenai tugas dan peranan BEM Fakultas. </p>', 'Muhamad Sidqih Arhinza Juliantara', '0', 1, '3', '2021-07-07 15:39:33', '2022-06-23 13:31:53'),
(6, 2, 'Evaluasi Triwulan', 'evaluasi-triwulan', '<p> Bentuk evaluasi terhadap seluruh kinerja setiap pengurus maupun departemen BEM FASILKOM UNSIKA yang dilaksanakan setiap tiga bulan sekali dalam masa\r\nkepengurusan.</p>', 'Amanda Febrianti', '150000', 1, '2', '2021-07-07 15:40:29', '2022-06-23 13:31:53'),
(7, 2, 'Keputrian', 'keputrian', '<p>Keputrian adalah suatu kegiatan yang menjadi sarana untuk menambah\r\nwawasan ilmu pengetahuan dan keterampilan bagi mahasiswi\r\nFASILKOM UNSIKA berupa pelatihan untuk menghasilkan sebuah\r\nkarya. Kegiatan keputrian juga dapat dijadikan sebagai wadah\r\npembentukan karakter.</p>', 'Salma Haya Amalia', '450000', 2, '2', '2021-07-07 15:40:50', '2022-06-23 13:31:53'),
(9, 2, 'Executive Training', 'executive-training', '<p>Kegiatan pelatihan yang mengarahkan kemampuan pengurus BEM FASILKOM\r\nUNSIKA untuk memperluas wawasan dan pengetahuan sebagai pengurus BEM\r\nFASILKOM UNSIKA 2022.</p>', 'Adrian Ramadhani Pri Haryoga', '600000', 1, '1', '2021-07-07 15:41:56', '2022-06-23 13:31:53'),
(10, 3, 'COMPFAIR', 'compfair', '<p> COMPFAIR merupakan sebuah program kerja BEM FASILKOM UNSIKA dengan isi kegiatan tentang seputar ilmu komputer. Isi kegiatan tersebut ada Seminar, Pameran Ilmu Komputer, dan perlombaan dibidang Ilmu Komputer.</p>', 'Anisa Septiani', '0', 0, '4', '2021-07-07 15:42:52', '2022-06-23 13:31:53'),
(11, 3, 'EIC (Event Information Center)', 'eic-event-information-center', '<p>EIC merupakan wadah informasi berbagai event tingkat mahasiswa baik\r\ndari dalam lingkup kampus maupun luar kampus seperti event kompetisi,\r\nseminar, workshop, dan lainnya.</p>', 'Dimas Fathu Ramdhani', '250000', 2, '1', '2021-07-07 15:43:37', '2022-08-28 21:16:35'),
(12, 3, 'PKM Center', 'pkm-center', '<p>PKM Centre membuka layanan informasi, konsultasi, dan sosialisasi guna memfasilitasi Mahasiswa/i FASILKOM UNSIKA yang memiliki minat lebih dalam PKM.</p>', 'Gebby Dwi Putri Haryanto', '0', 0, '1', '2021-07-07 15:44:03', '2022-06-23 13:31:53'),
(13, 4, 'UKF Olahraga', 'ukf-olahraga', '<p>UKF Olahraga atau unit kegiatan olahraga ini merupakan suatu wadah\r\nuntuk mengembangkan minat dan bakat dibidang olahraga, untuk\r\nmempererat kekeluargaan mahasiswa FASILKOM UNSIKA dan\r\nmenjalin silaturahmi antar elemen-elemen mahasiswa FASILKOM\r\nUNSIKA di masa pandemik COVID-19.</p>', 'Stefanus Deo Agape', '0', 0, '1', '2021-07-07 15:44:32', '2022-06-23 13:31:53'),
(14, 4, 'FASILKOM CUP', 'fasilkom-cup', '<p> FASILKOM Cup merupakan event olahraga terbesar di tingkat Fakultas\r\nyang diikuti oleh mahasiswa FASILKOM. Event ini mempertandingkan beberapa E-Sport. Harapannya dengan adanya proker ini bisa mencetak atlet yang berkompeten dan mencetak prestasi di setiap cabang olahraga serta dapat meningkatkan solidaritas dan kekeluargaan antar mahasiswa FASILKOM.</p>', 'Arfan Ryo Darmawan', '5670000', 1, '2', '2021-07-07 15:45:03', '2022-06-23 13:31:53'),
(15, 5, 'Cultures Day', 'cultures-day', '<p>Culture day merupakan sebuah kegiatan dimana dalam hari tersebut memperkenalkan dan menampilkan kebudayaan-kebudayaan asli Indonesia.</p>', 'Giovanny Maria Rosari Dwi C. A.d', '0', 0, '3', '2021-07-07 15:45:33', '2022-06-23 13:31:53'),
(16, 5, 'UKF Seni Rupa “FASILKOM Art”', 'ukf-seni-rupa-fasilkom-art', '<p>Mewadahi minat dan bakat mahasiswa Fasilkom di bidang seni rupa, baik gambar,desain maupun lukisan.</p>', 'Devi Fitriani Maulana', '0', 0, '3', '2021-07-07 15:46:10', '2022-06-23 13:31:53'),
(17, 5, 'UKF Seni Musik “FAKUSTIK”', 'ukf-seni-musik-fakustik', '<p>Mewadahi minat dan bakat mahasiswa/i Fasilkom dibidang seni musik dan tarik suara.</p>', 'Kris Adiwinata', '0', 0, '3', '2021-07-07 15:47:21', '2022-06-23 13:31:53'),
(18, 5, 'UKF Seni Tari “FASILKOM Dance Crew”', 'ukf-seni-tari-fasilkom-dance-crew', '<p>Unit kegiatan fakultas yang mewadahi dan memfasilitasi minat bakat\r\nmahasiswa FASILKOM UNSIKA di bidang seni tari melalu pengadaan\r\npelatihan dan pertunjukan.\r\n</p>', 'Andriani Nurian', '0', 0, '3', '2021-07-07 15:48:31', '2022-06-23 13:31:53'),
(20, 5, 'Dies Natalis FASILKOM', 'dies-natalis-fasilkom', '<p>Dies Natalis FASILKOM merupakan salah satu program kerja dimana berisi tentang\r\nperayaan hari jadi FASILKOM yang ke-14 tahun.</p>', 'Giovanny Maria Rosari Dwi C. A.', '0', 0, '4', '2021-07-07 15:49:35', '2022-06-23 13:31:53'),
(21, 6, 'Advocacy Progress Report', 'advocacy-progress-report', '<p> Kegiatan ini untuk memberitahukan perkembangan mengenai semua permasalahan\r\nMahasiswa/i FASILKOM UNSIKA, dimana ADKESMA akan membantu proses berjalannya semua permasalahan yang telah disampaikan dan kemudian akan ditindaklanjuti dengan informasi kepada Mahasiswa/i.</p>', 'Naufal Arib Fadhlurrohman', '0', 1, '1', '2021-07-07 15:51:05', '2022-06-23 13:31:53'),
(22, 6, 'Forum Silaturahmi', 'forum-silaturahmi', '<p>Kegiatan yang menjadi tempat diskusi dan bersilaturahmi antar elemen FASILKOM UNSIKA. Kegiatan ini merupakan sarana untuk membentuk rasa kekeluargaan dan kebersamaan di lingkungan FASILKOM UNSIKA.</p>', 'Fithra Bayu Satria Erman', '800000', 1, '1', '2021-07-07 15:51:37', '2022-06-23 13:31:53'),
(23, 7, 'Kajian General', 'kajian-general', '<p>Kajian General merupakan program kerja yang mengkaji segala\r\npermasalahan atau isu yang ada di lingkungan pengurus, FASILKOM\r\nUNSIKA, UNSIKA, dan Kabupaten Karawang dan dibagi menjadi dua,\r\nyaitu: isu kampus dan luar kampus (isu daerah dan nasional).</p>', 'Muhammad Rangga Aditya', '880000', 0, '1', '2021-07-07 15:52:16', '2022-06-23 13:31:53'),
(24, 7, 'Kasthread', 'kasthread', '<p>Untuk bahan propaganda dan edukasi terkait permasalahan yang sedang di\r\nhadapi dan menjadikan tempat untuk ouput dari kajian yang dilakukan.\r\n</p>', 'Fauzan Arista Alamsyah', '0', 0, '1', '2021-07-07 15:52:55', '2022-06-23 13:31:53'),
(26, 8, 'Doraa Kuliah (Donor Darah Abis Kuliah)', 'doraa-kuliah-donor-darah-abis-kuliah', '<p>Menyelenggarakan donor darah yang bekerjasama dengan PMI, dan juga\r\ndiselenggarakan cek kesehatan yaitu cek mata gratis, cek golongan darah dan cek\r\ntekanan darah untuk seluruh FASILKOM UNSIKA khususnya maupun masyarakat\r\nsekitar UNSIKA.</p>', 'Adrian Aufarrizqi', '0', 0, '2', '2021-07-07 15:54:00', '2022-06-23 13:31:53'),
(27, 8, 'HAI DESA 3.0', 'hai-desa-30', '<p>Memberikan pembinaan serta pelatihan kepada berbagai golongan masyarakat di\r\ndesa-desa Kabupaten Karawang, adapun pembinaan dan pelatihan tersebut yaitu : Calistung, Pelatihan MsOffice,Workshop dan Kerja Bakti. </p>', 'Rangga Nur Baehaqi Ramadhan', '0', 0, '3', '2021-07-07 15:54:27', '2022-06-23 13:31:53'),
(28, 8, 'Social Project', 'social-project', '<p>Melakukan penggalangan dana yang bekerja sama dengan lembaga lain\r\nuntuk membantu korban bencana alam/keluarga berduka baik dari luar\r\nmaupun dari internal elemen Fasilkom Unsika.</p><p>Membagikan sembako meriah kepada masyarakat di lingkungan sekitar\r\nUNSIKA guna meringankan beban ekonomi.</p><p>Sembako meriah merupakan hasil kolaborasi dengan Mahasiswa Baru\r\nFASILKOM UNSIKA dalam menanamkan jiwa sosial akan peduli kepada\r\nmasyarakat sekitar.</p><p>Mengadakan serangkaian kegiatan bersama Anak Yatim dan Lansia</p><p>Memberikan santunan kepada Anak Yatim dan Lansia</p><p>Santunan terdiri dari 2 kegiatan, yaitu Santunan Anak Yatim dan Santunan\r\nLansia di Panti Jompo</p><p>Diadakannnya “Street Education” yaitu proses pengajaran bagi para anak\r\njalanan. Adapun maateri yang diajarkan akan bersifat kondisional, sesuai\r\nkebutuhan dengan para anak jalanan tersebut. Kegiatan ini bekerjasama\r\ndengan komunitas yang ada di Karawang. <br></p>', 'Ghani Noer Rafi', '0', 2, '3', '2021-07-07 15:54:55', '2022-08-28 21:14:09'),
(29, 9, 'Partnership', 'partnership', '<p>Partnership merupakan program kerja jangka panjang dalam satu periode yang\r\ndinamis sehingga bertujuan untuk mencari dukungan atau relasi baik internal maupun\r\neksternal untuk menunjang kegiatan yang ada di BEM FASILKOM UNSIKA.\r\n</p>', 'Septian Bimo Hartanto', '300000', 1, '1', '2021-07-07 15:57:38', '2022-06-23 13:31:53'),
(31, 10, 'Company Profile', 'company-profile', '<p> Diperlukan media yang kreatif untuk mengenalkan struktur, visi, misi, dan berbagai program kerja yang ada di BEM FASILKOM UNSIKA periode tahun 2022 ke\r\nmasyarakat luas. Oleh karena itu maka kami membuat sebuah video yang berisi konten\r\nkreatif yang mengenalkannya.</p>', 'Novanto Ramadhan', '0', 1, '2', '2021-07-07 15:58:23', '2022-06-23 13:31:53'),
(33, 10, 'Berbincang Asik', 'berbincang-asik', '<p>Berbincang Asik merupakan sebuah program kerja yang berupa diskusi dengan\r\ninstansi maupun dengan luar instansi di FASILKOM UNSIKA tentang suatu topik\r\ntertentu dan disebarkan dalam bentuk video</p>', 'Irna Purnahasanah', '900000', 1, '1', '2021-07-07 15:59:22', '2022-06-23 13:31:53'),
(34, 10, 'BEM Rewind', 'bem-rewind', '<p>Pengumpulan dokumentasi seluruh Program Kerja BEM FASILKOM\r\nUNSIKA 2021 di akhir masa kepengurusan yang menghasilkan dua\r\nproduk, yaitu Artikel dan Video.</p>', 'Naufaldi Mahardika', '0', 0, '4', '2021-07-07 15:59:41', '2022-06-23 13:31:53'),
(35, 11, 'Pemeliharaan Website', 'pemeliharaan-website', '<p>Pemeliharaan website merupakan proker IT Support yang menangani tentang\r\nkeamanan data dan melakukan peningkatan serta pengembangan terhadap sistem\r\nwebsite.</p>', 'Anandito Rafi Putra', '700000', 2, '1', '2021-07-07 16:00:10', '2022-06-23 13:31:53'),
(36, 11, 'Open Project', 'open-project', '<p>Open project merupakan program kerja dari dept.PTI yang bertujuan merealisasikan platform hasil request dari berbagai departemen pada Internal BEM Fasilkom.</p>', 'Ahmad Nursidik Dinar', '2', 2, '1', '2021-07-07 16:00:27', '2022-08-28 21:18:25'),
(37, 11, 'LPJ Online', 'lpj-online', '<p>LPJ Online merupakan sebuah media alternatif dari Laporan Pertanggung Jawaban yang berbentuk hardfile (kertas) yang diringkas dan dicantumkan kedalam website BEM Fasilkom Unsika. </p> ', 'Fathan Pebrilliestyo Ridwan', '100000', 2, '2', '2021-07-07 16:00:43', '2022-06-23 13:31:53'),
(39, 12, 'Make It Connect', 'make-it-connect', '<p>MIC merupakan sebuah kegiatan study banding antar BEM Fakultas di UNSIKA, Kegiatan ini bertujuan untuk berbagi pengetahuan dan pengalaman satu sama lain, dan meningkatkan tali silaturahmi BEM antar Fakultas </p>', 'Najmil Hayah', '0', 1, '2', '2021-07-07 16:01:39', '2022-06-23 13:31:53'),
(40, 12, 'E-Publication', 'e-publication', '<p>Sebagai alat pengelolaan informasi (sosialisasi, apresiasi, dan publikasi) dari BEM FASILKOM UNSIKA, serta Menjaga ritme perkembangan informasi melalui media sosial, pengelolaan dibutuhkan\r\nuntuk seluruh akun sosial media BEM FASILKOM UNSIKA meliputi Line@, Instagram, dan Facebook. </p>', 'Ilhan Firaldi', '0', 2, '1', '2021-07-07 16:01:58', '2022-06-23 13:31:53'),
(41, 1, 'LKMM (Latihan Keterampilan Manajemen Mahasiswa)', 'lkmm-latihan-keterampilan-manajemen-mahasiswa', '<p>LKMM merupakan sebuah program kerja dengan pemberian bekal pengetahuan, keterampilan, dan sikap dalam manajemen organisasi mahasiswa.</p>', 'Alpin Apriliansyah Mohsa', '0', 0, '4', '2021-07-07 15:38:41', '2022-06-23 13:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `judul`, `slug`, `jenis`, `id_user`, `path`, `created_at`, `updated_at`) VALUES
(1, 'KAJIAN KUALITAS AIR PADA TAMBAK TRADISIONAL PLUS YANG DIBERI BAKTERI ANAEROB DI DESA MANAKKU KECAMATAN LABAKKANG KABUPATEN PANGKAJENE DAN KEPULAUAN', 'kajian-kualitas-air-pada-tambak-tradisional-plus-yang-diberi-bakteri-anaerob-di-desa-manakku-kecamatan-labakkang-kabupaten-pangkajene-dan-kepulauan', 'PKM-PI', 6, 'uploads/pdf/1626267868-11596-40105-1-SM.pdf', '2021-07-14 12:40:28', '2021-07-14 13:04:29'),
(2, 'KAJIAN KUALITAS AIR PADA TAMBAK TRADISIONAL PLUS YANG DIBERI BAKTERI ANAEROB DI DESA MANAKKU KECAMATAN LABAKKANG KABUPATEN PANGKAJENE DAN KEPULAUAN', 'kajian-kualitas-air-pada-tambak-tradisional-plus-yang-diberi-bakteri-anaerob-di-desa-manakku-kecamatan-labakkang-kabupaten-pangkajene-dan-kepulauan', 'PKM-PI', 4, 'uploads/pdf/1626279608-Panduan Magang Teknik Informatika_BetaVersion.pdf', '2021-07-14 13:19:27', '2021-07-14 16:20:08'),
(3, 'Alarm Pengingat Social Distancing Pada Kursi Penumpang Bus Antar Kota Untuk Meringankan Tugas Satgas Covid-19', 'alarm-pengingat-social-distancing-pada-kursi-penumpang-bus-antar-kota-untuk-meringankan-tugas-satgas-covid-19', 'PKM-KC', 8, 'uploads/pdf/1659776800-ahmadnursidikdinar_singaperbangsakarawang_PKM-KC.pdf', '2022-08-06 05:26:11', '2022-08-06 09:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `nama`, `slug`, `deskripsi`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(7, 'KULIAH OFFLINE', 'kuliah-offline', 'Kuliah kok online terus, padahal kampus lain udah offline loh, minta tolong di report aja ke bagian sana nya', 'Infrastruktur', 0, '2022-08-27 22:47:09', '2022-08-27 22:47:09'),
(8, 'UNSIKA KOK BELUM PERNAH KULIAH OFFLINE ?', 'unsika-kok-belum-pernah-kuliah-offline', 'Kuliah kok online terus, padahal kampus lain udah offline loh, minta tolong di report aja ke bagian sana nya, Apakah ada yang salah dengan rektorat kita atau bagaimana ???', 'perkuliahan dan akademis', 0, '2022-08-28 00:24:09', '2022-08-28 00:24:09'),
(9, 'IPI KOK GEDE BANGET ? DIPAKE APA AJA TUH ?', 'ipi-kok-gede-banget-dipake-apa-aja-tuh', 'IPI UNSIKA kok gede banget ya, padahal kita bisa liat kualitas infrastruktur tidak terlalu bagus di unsika.', 'rektorat', 0, '2022-08-28 03:42:40', '2022-08-28 03:42:40'),
(10, 'ORMAWA TAK SEJALAN ADRT', 'ormawa-tak-sejalan-adrt', '<p>Ormawa sekarang apa-apa harus paid promot, kek cari duit, bukan cari yg lain&nbsp;<a href=\"https://www.w3schools.com/jsref/met_win_alert.asp\" target=\"_blank\"><b>Apa iya?</b></a></p>', 'ormawa', 1, '2022-08-28 03:54:47', '2022-09-01 11:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-07-14 08:23:20', '2021-07-14 08:23:20'),
(2, 'Humas', 'web', '2021-07-14 08:23:21', '2022-06-24 12:56:17'),
(3, 'Operator', 'web', '2021-07-14 08:23:21', '2021-07-14 08:24:15'),
(4, 'User', 'web', '2021-07-14 08:28:16', '2021-07-14 08:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(25, 3),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(29, 3),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(33, 3),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 2),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 2),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 2),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 2),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 2),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 2),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 2),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 2),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 2),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 2),
(77, 3),
(78, 1),
(78, 2),
(78, 3),
(79, 1),
(79, 2),
(79, 3),
(80, 1),
(80, 2),
(80, 3),
(81, 1),
(81, 2),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 2),
(85, 3),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(89, 4),
(90, 2),
(91, 2),
(92, 2),
(93, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rundown`
--

CREATE TABLE `rundown` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rundown`
--

INSERT INTO `rundown` (`id`, `jam`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '07:30', 'Peserta Bergabung di Zoom dan Pembacaan Tertib Peserta', '2021-09-01 00:39:56', '2021-09-01 00:39:56'),
(2, '08:00', 'Pembukaan Acara hari ke 2 oleh Pembawa Acara', '2021-09-01 00:40:27', '2021-09-08 14:28:38'),
(5, '08:10', '<p><b>Materi 5</b> : Persiapan Penyesuaian Diri di Era Perguruan Tinggi</p><p><b>&nbsp;Pemateri </b>:&nbsp;Ahmad Khusaeri, S.Kom</p>', '2021-09-01 00:45:54', '2021-09-08 14:31:28'),
(6, '09:15', 'Safari Kampus', '2021-09-01 00:49:55', '2021-09-08 14:32:22'),
(8, '09:40', '<p><b>Materi 6</b> : Kepemimpinan<br><br><b>Pemateri </b>:&nbsp;Imam Najmudin S.Kom</p>', '2021-09-01 00:51:12', '2021-09-08 14:33:43'),
(9, '10:45', 'Penampilan Fakustik', '2021-09-01 00:55:26', '2021-09-08 14:34:38'),
(10, '11:00', '<p><b>Materi 7</b> : Pengenalan HIMSIKA</p><p><b>Pemateri </b>: HIMSIKA</p>', '2021-09-01 00:57:46', '2021-09-08 14:36:48'),
(11, '11:40', 'Penampilan Video Karya Digitalisasi Kerakyatan', '2021-09-01 00:58:22', '2021-09-08 14:38:19'),
(12, '11:55', '<b>Istirahat sholat Makan ( ISHOMA )</b>', '2021-09-01 00:59:22', '2021-09-08 14:39:50'),
(13, '12:50', '<b>Materi 8</b> : Pengenalan HIMTIKA<br><br><b>Pemateri </b>: HINMTIKA', '2021-09-01 00:59:46', '2021-09-08 14:41:32'),
(14, '13:40', '<p><b>Materi 9</b> : Pengenalan BEM Fasilkom<br><b>Pemateri</b> :&nbsp; BEM Fasilkom</p>', '2021-09-01 01:00:10', '2021-09-08 14:42:43'),
(17, '14:30', '<b>Materi 10</b> : Pengenalan BLM Fasilkom<br><br><b>Pemateri </b>: BLM Fasilkom', '2021-09-01 01:02:04', '2021-09-08 14:44:55'),
(18, '15:20', '<b>Istirahat Sholat</b>', '2021-09-08 14:45:46', '2021-09-08 14:45:46'),
(19, '15:35', '<b><i>Quiz Time</i></b>', '2021-09-08 14:46:15', '2021-09-08 14:46:15'),
(20, '15:55', 'Pengumuman dan Pengukuhan Eka Sunya', '2021-09-08 14:50:25', '2021-09-08 14:50:25'),
(21, '16:05', 'Penutupan Acara hari ke 2', '2021-09-08 14:54:38', '2021-09-08 14:54:38'),
(22, '16:10', '<p><b><i>Closing Ceremony</i></b></p><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"315\" style=\"width: 236pt;\">\r\n <colgroup><col width=\"315\" style=\"mso-width-source:userset;mso-width-alt:11520;width:236pt\">\r\n </colgroup><tbody><tr height=\"20\" style=\"height:15.0pt\">\r\n  <td height=\"20\" class=\"xl64\" width=\"315\" style=\"height:15.0pt;width:236pt\">Pembukaan<font class=\"font5\"> Closing Ceremony</font></td>\r\n </tr>\r\n <tr height=\"19\" style=\"mso-height-source:userset;height:14.25pt\">\r\n  <td height=\"19\" class=\"xl64\" width=\"315\" style=\"height:14.25pt;border-top:none;\r\n  width:236pt\">Prakata Eka Sunya Terpilih</td>\r\n </tr>\r\n <tr height=\"22\" style=\"mso-height-source:userset;height:16.5pt\">\r\n  <td height=\"22\" class=\"xl64\" width=\"315\" style=\"height:16.5pt;border-top:none;\r\n  width:236pt\">Prakata Ketua Pelaksana</td>\r\n </tr>\r\n <tr height=\"17\" style=\"mso-height-source:userset;height:12.75pt\">\r\n  <td height=\"17\" class=\"xl64\" width=\"315\" style=\"height:12.75pt;border-top:none;\r\n  width:236pt\">Prakata Ketua BEM Fasilkom</td>\r\n </tr>\r\n <tr height=\"39\" style=\"mso-height-source:userset;height:29.25pt\">\r\n  <td height=\"39\" class=\"xl64\" width=\"315\" style=\"height:29.25pt;border-top:none;\r\n  width:236pt\">Prakata Dekan Fakultas Ilmu Komputer sekaligus Penutupan Acara</td>\r\n </tr>\r\n <tr height=\"19\" style=\"mso-height-source:userset;height:14.25pt\">\r\n  <td height=\"19\" class=\"xl64\" width=\"315\" style=\"height:14.25pt;border-top:none;\r\n  width:236pt\">Doa</td>\r\n </tr>\r\n <tr height=\"19\" style=\"mso-height-source:userset;height:14.25pt\">\r\n  <td height=\"19\" class=\"xl64\" width=\"315\" style=\"height:14.25pt;border-top:none;\r\n  width:236pt\">Penutupan<font class=\"font5\"> Closing Ceremony</font></td>\r\n </tr></tbody></table>', '2021-09-08 14:56:27', '2021-09-08 14:56:27'),
(23, '16:50', 'Info - Info &amp; Sesi Foto Bersama', '2021-09-08 14:56:55', '2021-09-08 14:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `tim_dota`
--

CREATE TABLE `tim_dota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_ml_putri`
--

CREATE TABLE `tim_ml_putri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_ml_umum`
--

CREATE TABLE `tim_ml_umum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_bukti_pembayaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_pb`
--

CREATE TABLE `tim_pb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_pubg`
--

CREATE TABLE `tim_pubg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_bukti_pembayaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim_pubg`
--

INSERT INTO `tim_pubg` (`id`, `id_turnamen`, `nama_tim`, `nama_ketua_tim`, `no_hp`, `path_bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 2, 'tes', 'tes', '081111111111', 'uploads/fcup/bukti_pembayaran/tes_1629989706.png', '2021-08-26 14:55:06', '2021-08-26 14:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `tim_valorant`
--

CREATE TABLE `tim_valorant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_turnamen` bigint(20) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_bukti_pembayaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_individu_maba`
--

CREATE TABLE `tugas_individu_maba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kelompok_individu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_video_individu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_maba` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_kelompok_maba`
--

CREATE TABLE `tugas_kelompok_maba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_anggota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_maba` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_kelompok_maba`
--

INSERT INTO `tugas_kelompok_maba` (`id`, `nama_kelompok`, `link_video`, `nama_anggota`, `id_maba`, `created_at`, `updated_at`) VALUES
(1, 'CILIK RIWUT', 'https://drive.google.com/file/d/1zIMN7AJ3BsU9b4gTRixPpLU9FNC5HrXv/view?usp=sharing', 'Huannur_Si\r\nAnggriawan _Ti\r\nEnen _Ti\r\nFajar _Si\r\nHaidar _Ti\r\nHarits _Si\r\nRizky Fuzan_Ti\r\nRahayu _Si\r\nRiezky Fauji _Ti\r\nRizky Risafiandika-Ti\r\nSetyo_Si\r\nSyifa _Si\r\nApriansa _Ti\r\nYudistio_Ti\r\nImmanuel_Si\r\nKevin_Ti\r\nM.daffa_Si\r\nrafi_Ti\r\nhardiansyah_Ti', 54, '2021-09-07 09:54:04', '2021-09-07 09:54:04'),
(2, 'Soekarno', 'https://drive.google.com/folderview?id=1dC1jdN17rfDS8LHC4XMYMCVyK5KQLOUb', 'Tedi. A-SI\r\nBerliana-SI\r\nAlifia. N-TI\r\nFarhan. A-TI\r\nAgisni. B-SI\r\nHulwa. S-TI\r\nAmelia. R-SI\r\nDeri. G-TI\r\nM.Rizqi. S-SI\r\nFarhan. N-TI\r\nM. Ikbar-SI\r\nAlviany. A-TI\r\nRafly. P-TI\r\nFitria. A-SI\r\nUnsa. A-TI\r\nM.Rizky. F-SI\r\nReymen. M-TI\r\nReinald. Z-TI\r\nPramudityo. A-TI', 136, '2021-09-07 16:27:17', '2021-09-07 16:27:17'),
(3, 'Arunika', 'ini link nya', 'Dias Raihan Azhari - Sistem Informasi\r\nIr. Soekarno - Bapak Proklamator\r\nNanda Soekarno Muda - Teknik Informatika \r\nDias Raihan Azhari - Sistem Informasi\r\nIr. Soekarno - Bapak Proklamator\r\nNanda Soekarno Muda - Teknik Informatika \r\nDias Raihan Azhari - Sistem Informasi\r\nIr. Soekarno - Bapak Proklamator\r\nNanda Soekarno Muda - Teknik Informatika \r\nDias Raihan Azhari - Sistem Informasi\r\nIr. Soekarno - Bapak Proklamator\r\nNanda Soekarno Muda - Teknik Informatika', 1, '2021-09-07 16:33:05', '2021-09-07 16:33:05'),
(4, 'Soekarno', 'https://drive.google.com/folderview?id=1dC1jdN17rfDS8LHC4XMYMCVyK5KQLOUb', 'Tedi Alamsyah - Sistem Informasi\r\nBerliana - Sistem Informasi\r\nAlifia Nurhasanah -  Teknik Informatika\r\nFarhan Al-Rafi - Teknik Informatika\r\nAgisni Biidnilahi - Sistem Informasi\r\nHulwa Salsabila - Teknik Informatika\r\nAmelia Rahayu - Sistem Informasi\r\nDeri Gilang - Teknik Informatika\r\nMuhammad Rizqi Septianto - Sistem Informasi\r\nFarhan Naufal - Teknik Informatika\r\nMuhammad Ikbar - Sistem Informasi\r\nAlviany Adzany - Teknik Informatika\r\nRafly Pasya - Teknik Informatika\r\nFitria Aryani - Sistem Informasi\r\nUnsa Ahdannia - Teknik Informatika\r\nM. Rizky Febriansyah - Sistem Informasi\r\nReymen Maulana - Teknik Informatika\r\nReinald Zharrif - Teknik Informatika\r\nPramudityo Agung - Teknik Informatika', 136, '2021-09-07 17:34:29', '2021-09-07 17:34:29'),
(5, 'Adam Malik', 'https://www.instagram.com/tv/CThlkOZnBAL/?utm_medium=copy_link', '1. Muhammad Dzaki Al - Teknik informatika\r\n2. Eddy Ryansyah - Teknik Informatika\r\n3. Muhammad Ibrah Bayuara - Teknik Informatika\r\n4. Shafly Firmansyah - Sistem Informasi\r\n5. Eka Nazar Fajriansyah - Sistem Informasi\r\n6. Zahra Aurira Hanifah -Teknik Informatika \r\n7. Habil Rabani Herdiansyah - Sistem Informasi\r\n8. Jerry Anggara - Teknik Informatika\r\n9. Haykal Zufar Rizki - Sistem Informasi\r\n10. Shadam Alfareza - Teknik Informatika\r\n11. Muhammad Fajar Nadillah - Sistem Informasi\r\n12.M.idzhar Surya P-Teknik Informatika\r\n13. Muhammad Dandy T.S.A - Teknik Informatika\r\n14. Sophia Maratu Solihat-Teknik informatika \r\n15. Muhammad Aliffigo Yogatura - Sistem informasi\r\n16. Heru Triana - Teknik Informatika', 36, '2021-09-07 23:04:22', '2021-09-07 23:04:22'),
(6, 'Dewi Sartika', 'https://drive.google.com/file/d/1tUYHH3uHgq8szjN5tWfKKQG9yCLDZah3/view?usp=drivesdk', '1. Ilham Yusuf Abidin - TI\r\n2. Muhammad Erlangga Prasetya - TI \r\n3. Muhammad Hafizh Ihsan - TI\r\n4. Bagas Aqmal Febrianto - TI\r\n5. Theresia Aurelly Claudia Budianto - TI\r\n6. Gizwa Budi Nugraha - TI\r\n7. Aulia Septiana - SI\r\n8. Meliana Endang Nyimas Lisna - SI\r\n9. Taufik Faturokhman - TI\r\n10. Yuri Saputri - TI\r\n11. Rossiatul Azizah - SI\r\n12. Muhammad Hafidz Nur Rachman - TI\r\n13. Hengky Triyo - TI\r\n14. Rama Wijaya - TI \r\n15. Nurul atizah - SI\r\n16. Dwi Miftahussalamah - TI\r\n17. Frisca Dwi Imroatus Solihah - SI\r\n18. Toto Abdulpatah - TI', 238, '2021-09-07 23:24:14', '2021-09-07 23:24:14'),
(7, 'Diponegoro', 'https://drive.google.com/folderview?id=1WmI32OvPlQt68eZvfGQEadw_P2JeT1QN', '1. Muhammad Naufal Firdaus - Teknik Informatika\r\n2. Hana Suci Aninda Geofani - Teknik Informatika\r\n3. Gina Khairunnisa - Sistem Informasi\r\n4. Melanie Putri - Sistem Informasi\r\n5. Muh. Yoga Fauzan - Teknik Informatika\r\n6. Aria Bintang - Teknik Informatika\r\n7. Elis - Teknik informatika\r\n8. Ferdy Setiawan Eka Saputra - Teknik Informatika\r\n9. Silviana  Anggellica-Teknik Informatika\r\n10. Galuh Rangga Wahyudi - Sistem Informasi\r\n11. Angga Permana - Teknik Informatika\r\n12. Rosa Salsa Saida - Teknik Informatika\r\n13. Tazkia Damayanti - Sistem Informasi\r\n14. Muhammad Naufal Apriandi - Teknik Informatika\r\n15. Oliver Gunawan Martua Sihaloho - Teknik Informatika\r\n16. Siti Fatimah Isny Nur Alvivi - Sistem Informasi\r\n17. Iis Permatasari - Sistem Informasi\r\n18. Muhammad Brillian Syifa QOlbi - Teknik Informatika\r\n19. Vitto taufiiqul hakim - sistem informasi\r\n20 Asep Nugraha - teknik informatika', 143, '2021-09-07 23:56:10', '2021-09-07 23:56:10'),
(8, 'Gatot Subroto', 'https://drive.google.com/drive/u/0/folders/1oH1yfnYdA034mxgP4aT9fmtgZHGp5m9r', '1. Wisnu Yogi Pamungkas - TI\r\n2. Malvin Valerian Gultom - TI\r\n3. Ridho Alamsyah - TI\r\n4. Rifina Dwi Pebrianti - SI\r\n5. Dimas Alip Faturrohim - SI\r\n6. Selviana Putri Nabilah - TI\r\n7. Salwa Salsabila - TI\r\n8. Titto Nugraha - TI\r\n9. Feila Sufah - TI\r\n10. Salsih Cahyani - SI\r\n11. Risa Nur Fitriyani - SI\r\n12. Najwa Nurshadrina - TI\r\n13. Inez Zahra - SI\r\n14. Fikri Maulana Setiawan - TI\r\n15. Said Abdulloh - TI\r\n16. Kaleb Firdaus - SI\r\n17. Idshal Setyo Nugroho -  SI\r\n18. Muhammad Wildan Fauzi - TI\r\n19. Muhammad Tegar Pamungkas - TI\r\n20. Muhammad Surya - TI', 24, '2021-09-08 00:00:21', '2021-09-08 00:00:21'),
(9, 'Adam Malik', 'https://www.instagram.com/tv/CThlkOZnBAL/?utm_medium=copy_link', '1. Muhammad Dzaki Al - Teknik informatika\r\n2. Eddy Ryansyah - Teknik Informatika\r\n3. Muhammad Ibrah Bayuara - Teknik Informatika\r\n4. Shafly Firmansyah - Sistem Informasi\r\n5. Eka Nazar Fajriansyah - Sistem Informasi\r\n6. Zahra Aurira Hanifah -Teknik Informatika \r\n7. Habil Rabani Herdiansyah - Sistem Informasi\r\n8. Jerry Anggara - Teknik Informatika\r\n9. Haykal Zufar Rizki - Sistem Informasi\r\n10. Shadam Alfareza - Teknik Informatika\r\n11. Muhammad Fajar Nadillah - Sistem Informasi\r\n12.M.idzhar Surya P-Teknik Informatika\r\n13. Muhammad Dandy T.S.A - Teknik Informatika\r\n14. Sophia Maratu Solihat-Teknik informatika \r\n15. Muhammad Aliffigo Yogatura - Sistem informasi\r\n16. Heru Triana - Teknik Informatika', 36, '2021-09-08 00:03:39', '2021-09-08 00:03:39'),
(10, 'Cilik Riwut', 'https://drive.google.com/file/d/1iIC5uNa-EnU2CPSYDPUmKB0A9mRNsUX2/view?usp=sharing', 'M. Huannur A-Si\r\nAnggriawan W-Ti\r\nEnen A-Ti\r\nFajar S-Si\r\nHaidar R-Ti\r\nHarits A-Si\r\nMuhammad Rizky Fauzan-Ti\r\nRahayu W-Si\r\nRiezky Fauji S-Ti\r\nRizky R-Ti\r\nSetyo D-Si\r\nSyifa N-Si\r\nApriansa A-Ti\r\nYudistio I-Ti\r\nImmanuel S-Si\r\nKevin Zefanya S-Ti\r\nMuhammad Daffa R-Si\r\nMuhammad Rafi-Ti\r\nMuhammad Hardiansyah-Ti', 2, '2021-09-08 01:38:46', '2021-09-08 01:38:46'),
(11, 'Cokroaminoto', 'https://drive.google.com/file/d/1GVJYc4nn-3CCfuteYSfbAzSAtp1nJuYX/view?usp=sharing', '1. Akbar Nugraha Dimyati - Teknik Informatika\r\n2. Alfian Nursahbani - Teknik Informatika\r\n3. Amira Amani Bestari - Sistem Informasi\r\n4. Ayutia Yasmin - Sistem Informasi\r\n5. Bayu Ragil Pangestu - Sistem Informasi\r\n6. Calista Salsabila Citra Putri Winanto - Teknik Informatika\r\n7. Candra Purnama Aji - Teknik Informatika\r\n8. Chandra Christian - Sistem Informasi\r\n9. Devaro Brahmansyah Putra Irawan - Teknik Informatika\r\n10. Diva Ahmad Maulana - Teknik Informatika\r\n11. Ilham Yudiatmoko - Sistem Informasi\r\n12. M Zidan Fahreza - Teknik Informatika\r\n13. Muflih Roid Zuhdi - Teknik Informatika\r\n14. Nadia Nurfadhilah Syarif - Sistem Informasi\r\n15. Nagaryanto Suryamas - Teknik Informatika\r\n16. Nurmala Arita - Sistem Informasi\r\n17. Rahma Herawati - Sistem Informasi\r\n18. Raihan Fikri - Teknik Informatika\r\n19. Rizki Furgana Haigis - Teknik Informatika', 32, '2021-09-08 08:54:51', '2021-09-08 08:54:51'),
(12, 'Ki hajar dewantara', 'https://drive.google.com/file/d/1Bm2PWKrzTBvoPoY1y509ETyZFV8AVmq2/view?usp=drivesdk', 'nama anggota kelompok - prodi \r\n\r\n1. M. Andika Anjas syaputra - Sistem Informasi\r\n2. Achmad Fikri Syofian - Teknik Informatika\r\n3. Hilman Fatoni - Teknik Informatika\r\n4. Giyan Heriandra Saputra - Sistem Informasi\r\n5. Rafi Albar Kurniawan - Teknik Informatika\r\n6. Zalfa Ramdhan - sistem informasi\r\n7. Aluthfi Fadilah - Sistem Informasi\r\n8. Mufti Arkhan H - Sistem Informasi\r\n9. Resi Surya Agustian - Teknik Informatika\r\n10. Yusma Cantika Parhati - Teknik Informatika\r\n11. Affan Abdillah - Sistem Informasi\r\n12. Joice Margaretha - Teknik Informatika\r\n13. Fadhil Ismail Siddiq - Teknik Informatika\r\n14. Ahmad Dylan - Teknik Informatika\r\n15. Aditya Fian Sugiarto - Sistem Informasi\r\n16. Muhammad Fernandes- Sistem Informasi\r\n17. Fattan abhista - Teknik Informatika\r\n18. Rafi fayyaz - Teknik Informatika\r\n19. Radi Alpiyanto - Teknik informatika\r\n20. Ashifa halimatus sadiah - Sistem Informasi', 75, '2021-09-08 09:17:08', '2021-09-08 09:17:08'),
(13, 'Cipto Mangunkusumo', 'https://www.instagram.com/tv/CTjnG2lp_hY/?utm_medium=copy_link', '(Nama_Prodi)\r\n1. Ghani Abassyah Helar_TI\r\n2. Divasetya Pratama Putri_TI\r\n3. Ihsan Fauzi_TI\r\n4. Rizky Alfito Hadi_SI\r\n5. Zaima Syarifa Asshafa_SI\r\n6. Septian Dwirawana_TI\r\n7. Tiara nurul hidayah_SI\r\n8. Gabrielle ahmad W_SI\r\n9. Pradika Rizky Pangestu\r\n10. Ika Miftahul Rohmah_SI\r\n11.Muhammad Ghazi Al ghifari_Ti\r\n12. Muhammad Hadi Royan Firdaus_TI\r\n13. Melati Nour Esa_SI\r\n14. Harfa Sabri_TI\r\n15.Virgiawan Sanria_TI\r\n16. Tohadi_TI\r\n17. Wanda Putra Ramadhan_TI\r\n18. Ramadhan Islami Pasha_TI', 245, '2021-09-08 10:23:36', '2021-09-08 10:23:36'),
(14, 'Ahmad Dahlan', 'https://drive.google.com/file/d/1x3Fj0euz7OlF9chkBuFmV24zMOs2APtX/view?usp=drivesdk', '1. Rosyid Eko Nugroho - Teknik Informatika\r\n2. Novi Anthika S. - Sistem Informasi\r\n3. Muhammad Tristan P. - Sistem Informasi\r\n4. Raihan Fahlevi - Teknik Informatika\r\n5. Cahya Kamila W - Sistem Informasi\r\n6. Dimas Aryansyah - Teknik Informatika\r\n7. Darma Fauzan Wibowo - Teknik Informatika\r\n8. Bayu Unggul Sejati - Teknik Informatika\r\n9. Alif Al Farizi - Sistem Informasi\r\n10. Clarissa D. A.- Sistem Informasi\r\n11. Azel Fabian Azmi - Sistem informasi\r\n12. Cahyo Tri Atmojo - Teknik Informatika\r\n13. Roy Bagus Sanjaya - Sistem Informasi\r\n14.Damang Maulana Wirapraja - Teknik Informatika\r\n15.Zadan Fairuz Mahitala-Teknik Informatika\r\n16. Reza Hakim-Teknik Informatika\r\n17. Aulia fahmi-teknik informatika\r\n18. Mohammad Fitrafajar Rusamsi - Teknik Informatika\r\n19. Ikbal Dwi Nulhakim', 51, '2021-09-08 11:26:54', '2021-09-08 11:26:54'),
(15, 'Cut Nyak Dhien', 'https://drive.google.com/drive/folders/17wRhWA2JHDz-bTxnlHucupOJjVkN4zm8?usp=sharing', '1. Daffa Farrelian (Teknik Informatika)\r\n2. Nurmala Dewi (Teknik Informatika)\r\n3. Nurmeirasari (Sistem Informasi)\r\n4. Khairunnisa Fitriani (Sistem Informasi)\r\n5. Raka Fazah Fithra (Teknik Informatika)\r\n6. Alvito Kurnia Fahrio (Teknik Informatika)\r\n7. Bintang Ilhan (Teknik Informatika)\r\n8. Alhafidz William Adzanta (Teknik Informatika)\r\n9. philips lyionick corint (Sistem Informasi)\r\n10. Diah Novianti (Sistem Informasi)\r\n11. Nana Casmana Ade Wikarta (Teknik Informatika) (Perwakilan pengirim)\r\n12. Rizki Alvan Jose (Teknik Informatika)\r\n13. Nauval Dwi Rivalfakhri (Sistem Informasi)\r\n14. Muhamad Dimas Farid (Teknik Informatika)\r\n15. Arfian haris prayoga (Sistem Informasi)\r\n16. Tristan Rafik Yusdi (Teknik Informatika)', 94, '2021-09-08 12:33:10', '2021-09-08 12:33:10'),
(16, 'Ahmad Yani', 'https://drive.google.com/file/d/19ruybEghj8JEAUb7r21gNNvM9aaDKtsK/view?usp=drivesdk', '1. Muhammad Akhbar Rizkhullah- SI\r\n2. Teuku Nurmansyah Puteh - TI\r\n3. Fauzi Rahmat Ramadhan-TI\r\n4. Maesha Ayu Syaharani - TI\r\n5. Pradana Wahyu Hidayanto - TI\r\n6. Cinta Renita - TI\r\n7. Agung Ramadhan Gojali -TI\r\n8. Radja Ravine Salfriandry -TI\r\n9. Andari Yasinta Permana - TI\r\n10. Oktavia rahmadani -TI\r\n11. Muhammad Al Farizi - SI\r\n12. Risfandhiani Triara Putri -TI\r\n13. Aqmarina Shabihah -SI\r\n14. Annisa Utami Dewi -SI\r\n15. Muhammad Farrel Allard- SI\r\n16. Ananda Fikri Amrizal-SI\r\n17. Reynaldi Dianputra Manik -TI\r\n18. Hilal Mahdi Prasidatama - TI\r\n19. Hilmy sukma Nurmakarim -TI', 6, '2021-09-08 12:40:59', '2021-09-08 12:40:59'),
(17, 'Fatmawati (12)', 'https://www.instagram.com/tv/CTkCJplJvqF/?utm_medium=copy_link', '1. Rivandi \r\n(Teknik Informatika)\r\n\r\n2. Annastia Reza Dzulhaj \r\n(Teknik Informatika)\r\n \r\n3.Fajar Nur \r\n(Teknik informatika)\r\n\r\n4. Khalidah Rossa Amaliah \r\n(Teknik Informatika)\r\n\r\n5. Sefanya yemima sinaga\r\n(Sistem informasi)\r\n\r\n6. Firda ayu hassanah\r\n(Teknik informatika)\r\n\r\n7. Fadya Angelina R\r\n(Teknik Informatika)\r\n\r\n8. Nur Halizah Alfajr\r\n(Teknik Informatika )\r\n\r\n9. Annisa Intan Nuraini\r\n(Teknik Informatika)\r\n\r\n10. Ihsan Budhi Nugroho \r\n(Sistem Informasi)\r\n\r\n11. Nona Alya Windyani \r\n(Teknik Informatika)\r\n\r\n12. Elang Dennys Dhamara \r\n(Sistem Informasi)\r\n\r\n13. Reza Aditya Saputra \r\n(Teknik Informatika)\r\n \r\n14. Laila Puspita Sari\r\n(Sistem Informasi)\r\n\r\n15. Muhammad Furqon Huwaidy\r\n(Sistem informasi)\r\n\r\n16. Tarida Grace Wahyuni Margaretha Sidabutar\r\n(Teknik Informatika)\r\n\r\n17. Fahmi Aufa Fadhil (Teknik informatika)', 79, '2021-09-08 15:18:11', '2021-09-08 15:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `turnamen`
--

CREATE TABLE `turnamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turnamen`
--

INSERT INTO `turnamen` (`id`, `nama`, `slug`, `deskripsi`, `path`, `created_at`, `updated_at`) VALUES
(1, 'Mobile Legend', 'mobile-legend', 'Terbuka untuk umum', 'uploads/fcup/images/mobile-legend_1628611093.png', '2021-08-10 15:58:13', '2021-08-10 15:58:13'),
(2, 'PUBG', 'pubg', 'Terbuka untuk umum', 'uploads/fcup/images/pubg_1628611127.png', '2021-08-10 15:58:47', '2021-08-10 15:58:47'),
(3, 'Mobile Legend (P)', 'mobile-legend-p', 'Terbuka untuk mahasiswi Fasilkom', 'uploads/fcup/images/mobile-legend-p_1628611150.png', '2021-08-10 15:59:10', '2021-08-10 15:59:10'),
(4, 'Magic Chess', 'magic-chess', 'Terbuka untuk mahasiswa/i Fasilkom', 'uploads/fcup/images/magic-chess_1628611182.png', '2021-08-10 15:59:42', '2021-08-10 15:59:42'),
(5, 'Catur Putra', 'catur-putra', 'Terbuka untuk mahasiswa Fasilkom', 'uploads/fcup/images/catur-putra_1628611203.png', '2021-08-10 16:00:03', '2021-08-10 16:00:03'),
(6, 'Catur Putri', 'catur-putri', 'Terbuka untuk mahasiswi Fasilkom', 'uploads/fcup/images/catur-putri_1628611225.png', '2021-08-10 16:00:26', '2021-08-10 16:00:26'),
(7, 'Valorant', 'valorant', 'Terbuka untuk mahasiswa/i Fasilkom', 'uploads/fcup/images/valorant_1628611299.png', '2021-08-10 16:01:39', '2021-08-10 16:01:39'),
(8, 'Point Blank', 'point-blank', 'Terbuka untuk mahasiswa/i Fasilkom', 'uploads/fcup/images/point-blank_1628611321.png', '2021-08-10 16:02:01', '2021-08-10 16:02:01'),
(9, 'Dota 2', 'dota-2', 'Terbuka untuk mahasiwa/i Fasilkom', 'uploads/fcup/images/dota-2_1628611341.png', '2021-08-10 16:02:21', '2021-08-10 16:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `npm`, `prodi`, `tahun_masuk`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin.cs@unsika.ac.id', '2021-07-14 08:23:21', '$2y$10$IzKw5B/PKAOB1NmZOvqzzOOQmVR3g26Txio4tjIUxFx26fn9Fi7Qi', NULL, NULL, NULL, NULL, NULL, 'pLUcXlkN3ckqaXXMT3eaZXiCZIvD7JPzuOSqzLPfCTM4QYULV6Kb3JgOsDGC', '2021-07-14 08:23:21', '2022-06-24 11:52:21'),
(2, 'Humas', 'humas.cs@unsika.ac.id', '2021-07-14 08:23:21', '$2y$10$nh3vRCr4ekSiJyOlUiLBZ.ye1hoZ/m1zVD81ur16Yff/92qqZhrHS', NULL, NULL, NULL, NULL, NULL, 'CP2TXcmK82ouTCufoZiSYc19yANT0ioUVJ08hY85eUf8pe0gg9U8MOy9Hx7K', '2021-07-14 08:23:21', '2022-08-06 05:04:40'),
(3, 'Operator', 'operator.cs@unsika.ac.id', '2021-07-14 08:23:21', '$2y$10$1X5lfQexqFN1YJP5J33qLeiVdCo5WO.ITx0Is/7PhJAjLwKcJr4ja', NULL, NULL, NULL, NULL, NULL, 'HH3cEBTPnjZ4MeNzxmq18OefOHPOruuwSxQFeo55o39UWrMQ5F5jnoGIaFMO', '2021-07-14 08:23:21', '2021-07-14 10:57:42'),
(4, 'Hilman Fatoni', 'hilmanfatoni8@gmail.com', NULL, '$2y$10$ZOBTfSpSGSiEmI.KJzUvveuUt1IZ49HjpTaD1KpWJfSEY/pqwnzzS', NULL, NULL, '2110631170068', 'S1 Teknik Informatika', '2021', NULL, '2021-11-11 12:26:57', '2021-11-11 12:26:57'),
(5, 'FENNY RAHMAYANI', '1910631170020@student.unsika.ac.id', '2022-08-06 04:49:38', '$2y$10$kzq9yeIrpiBIMgBCzh7En.jeOTF0j4HZwmXhvDozOvARC0RacYM56', NULL, NULL, '1910631170020', 'S1 Teknik Informatika', '2019', NULL, '2022-05-23 12:38:25', '2022-05-23 12:38:25'),
(6, 'halo', 'hahah@gmail.com', '2022-08-06 04:49:15', '$2y$10$tSzfGMQb7In7Ebo0qvxcwe8c6VzydFaoIA9lj1joiFyjDvUeiorxi', NULL, NULL, '191976554321', 'S1 Hubungan Internasional', '2015', NULL, '2022-06-03 09:11:11', '2022-06-03 09:11:11'),
(7, 'Gebby Dwi Putri Haryanto', 'gebby.dwi19044@student.unsika.ac.id', '2022-08-06 04:49:26', '$2y$10$xLCHmHZII6gqvRR8.MCSDuoOQT.WNh2RKM5SczFwa5Rs67F7orSSS', NULL, NULL, '1910631250044', 'S1 Sistem Informasi', '2019', NULL, '2022-06-14 06:02:11', '2022-06-14 06:02:11'),
(8, 'AHMAD NURSIDIK DINAR', 'Dinardevil@gmail.com', '2022-08-06 04:49:49', '$2y$10$IzKw5B/PKAOB1NmZOvqzzOOQmVR3g26Txio4tjIUxFx26fn9Fi7Qi', NULL, NULL, '1910631170157', 'S1 Teknik Informatika', '2019', NULL, '2022-06-14 06:04:46', '2022-06-14 06:04:46'),
(10, 'minbat', 'minbat.cs@unsika.ac.id', '2022-08-06 04:50:22', '$2y$10$CuKt7a62lLlaRb3rAdIF3OwUTC0IPztUmraZJMwGvu/gObZyggOtC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-14 06:52:04', '2022-08-06 05:00:12'),
(11, 'Dimas', '2010631250040@student.unsika.ac.id', '2022-08-06 04:50:04', '$2y$10$Hc5JD08URsDhZvUe/1BNTuoldSlNDFkhXgIe.Il15bNLxiJs2dC1e', NULL, NULL, '2010631250040', 'S1 Sistem Informasi', '2020', NULL, '2022-07-05 07:10:53', '2022-07-05 07:10:53'),
(12, 'SOSPOL', 'sospol.cs@unsika.ac.id', NULL, '$2y$10$AAn9yxS/2Yt.V1v4KRAyk.vzWFvpETmNWO8vkRyJW1vFo3ml/CiJ6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-09 15:11:33', '2022-08-09 15:11:33'),
(13, 'dito', 'dito@gmail.com', '2022-08-16 14:32:25', '$2y$10$nVdDvLMx0Pf3zVBbMe2nHOXaqskuFrB7EUI7DX8DIlQJLprK9XfGS', NULL, NULL, '1212', 'S1 Teknik Informatika', '2020', NULL, '2022-08-23 13:21:27', '2022-08-23 13:21:27'),
(14, 'dito', 'dito22@gmail.com', NULL, '$2y$10$jbFqH2zCbwa4VzKrLT0v4./Upzwsj29x2rJ0s/BHe/l9atsnLWlTC', NULL, NULL, '20106311', 'S1 Teknik Informatika', '2015', NULL, '2022-08-23 13:34:38', '2022-08-23 13:34:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_id_user_foreign` (`id_user`),
  ADD KEY `anggota_id_proposal_foreign` (`id_proposal`);

--
-- Indexes for table `bemitory`
--
ALTER TABLE `bemitory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departemen_id_bidang_foreign` (`id_bidang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maba_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peminjam_email_unique` (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengurus_id_bidang_foreign` (`id_bidang`),
  ADD KEY `pengurus_id_departemen_foreign` (`id_departemen`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `peserta_cadangan_dota`
--
ALTER TABLE `peserta_cadangan_dota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_cadangan_dota_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_cadangan_ml_putri`
--
ALTER TABLE `peserta_cadangan_ml_putri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_cadangan_ml_putri_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_cadangan_ml_umum`
--
ALTER TABLE `peserta_cadangan_ml_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_cadangan_ml_umum_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_cadangan_pb`
--
ALTER TABLE `peserta_cadangan_pb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_cadangan_pubg`
--
ALTER TABLE `peserta_cadangan_pubg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_cadangan_pubg_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_cadangan_valorant`
--
ALTER TABLE `peserta_cadangan_valorant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_cadangan_valorant_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_catur_putra`
--
ALTER TABLE `peserta_catur_putra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_catur_putra_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `peserta_catur_putri`
--
ALTER TABLE `peserta_catur_putri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_catur_putri_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `peserta_dota`
--
ALTER TABLE `peserta_dota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_dota_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_mc`
--
ALTER TABLE `peserta_mc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_ml_putri`
--
ALTER TABLE `peserta_ml_putri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_ml_putri_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_ml_umum`
--
ALTER TABLE `peserta_ml_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_ml_umum_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_pb`
--
ALTER TABLE `peserta_pb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_pubg`
--
ALTER TABLE `peserta_pubg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_pubg_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `peserta_valorant`
--
ALTER TABLE `peserta_valorant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_valorant_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proker_id_departemen_foreign` (`id_departemen`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposal_id_user_foreign` (`id_user`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rundown`
--
ALTER TABLE `rundown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim_dota`
--
ALTER TABLE `tim_dota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_dota_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `tim_ml_putri`
--
ALTER TABLE `tim_ml_putri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_ml_putri_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `tim_ml_umum`
--
ALTER TABLE `tim_ml_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_ml_umum_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `tim_pb`
--
ALTER TABLE `tim_pb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_pb_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `tim_pubg`
--
ALTER TABLE `tim_pubg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_pubg_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `tim_valorant`
--
ALTER TABLE `tim_valorant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_valorant_id_turnamen_foreign` (`id_turnamen`);

--
-- Indexes for table `tugas_individu_maba`
--
ALTER TABLE `tugas_individu_maba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_individu_maba_id_maba_foreign` (`id_maba`);

--
-- Indexes for table `tugas_kelompok_maba`
--
ALTER TABLE `tugas_kelompok_maba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_kelompok_maba_id_maba_foreign` (`id_maba`);

--
-- Indexes for table `turnamen`
--
ALTER TABLE `turnamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bemitory`
--
ALTER TABLE `bemitory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maba`
--
ALTER TABLE `maba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `peserta_cadangan_dota`
--
ALTER TABLE `peserta_cadangan_dota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_cadangan_ml_putri`
--
ALTER TABLE `peserta_cadangan_ml_putri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_cadangan_ml_umum`
--
ALTER TABLE `peserta_cadangan_ml_umum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_cadangan_pb`
--
ALTER TABLE `peserta_cadangan_pb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_cadangan_pubg`
--
ALTER TABLE `peserta_cadangan_pubg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peserta_cadangan_valorant`
--
ALTER TABLE `peserta_cadangan_valorant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_catur_putra`
--
ALTER TABLE `peserta_catur_putra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peserta_catur_putri`
--
ALTER TABLE `peserta_catur_putri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_dota`
--
ALTER TABLE `peserta_dota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_mc`
--
ALTER TABLE `peserta_mc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_ml_putri`
--
ALTER TABLE `peserta_ml_putri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_ml_umum`
--
ALTER TABLE `peserta_ml_umum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_pb`
--
ALTER TABLE `peserta_pb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_pubg`
--
ALTER TABLE `peserta_pubg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peserta_valorant`
--
ALTER TABLE `peserta_valorant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rundown`
--
ALTER TABLE `rundown`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tim_dota`
--
ALTER TABLE `tim_dota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim_ml_putri`
--
ALTER TABLE `tim_ml_putri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim_ml_umum`
--
ALTER TABLE `tim_ml_umum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim_pb`
--
ALTER TABLE `tim_pb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim_pubg`
--
ALTER TABLE `tim_pubg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tim_valorant`
--
ALTER TABLE `tim_valorant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas_individu_maba`
--
ALTER TABLE `tugas_individu_maba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas_kelompok_maba`
--
ALTER TABLE `tugas_kelompok_maba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `turnamen`
--
ALTER TABLE `turnamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departemen`
--
ALTER TABLE `departemen`
  ADD CONSTRAINT `departemen_id_bidang_foreign` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
