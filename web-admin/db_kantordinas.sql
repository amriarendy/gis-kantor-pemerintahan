-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2018 pada 17.00
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantordinas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(35) NOT NULL,
  `password_admin` varchar(35) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'Admin Kantor Dinas 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `gambar_depan` varchar(100) NOT NULL,
  `isi1` text NOT NULL,
  `gambar1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi`, `gambar_depan`, `isi1`, `gambar1`) VALUES
(1, 'FOTO-FOTO: Mengintip Kegiatan Ramadan di Sudut Kota Muara Bulian, Menarik Sekali', 'Beragam cara masyarakat Batanghari untuk memaknai bulan suci Ramadan 1439 H. Satu di antaranya melakukan kegiatan lomba bagi anak anak jelang mengisi waktu berbuka puasa, Selasa (29/5).\r\n\r\nSeperti kegiatan yang dilakukan pemuda remaja Masjid Al- Muttahidin, di Jalan Jendral Sudirman Kilometer I Muara Bulian.\r\n\r\nDengan mengadakan kegiatan lomba keagamaan tingkat anak-anak sekolah dasar hingga sekolah menengah pertama.\r\n\r\n\"Kegiatan bertema Semarak Ramadan di Masjid Al-Mutahidin merupakan agenda rutin setiap tahun dan berbeda dengan tahun sebelumnnya. Selain lebih ramai dengan tujuan memakmurkan masjid terutama dari kalangan anak anak,\" ujar Mukholid, Ketua Pemuda Remaja Masjid Al- Muttahidin.', 'http://192.168.43.47/kantor_dinas/gambarimg/bocah_santri1.jpg', 'Dia mengatakan tahun berbeda dengan tahun sebelumnnya, karena untuk Ramadan tahun ini ragam kegiatan remaja masjid tidak hanya terfokus pada satu kegiatan saja.\r\n\r\n\"Kalau tahu lalu hanya sebatas memperingati Nuzul Quran dan buka bersama rutin, namun kali ini lebih meriah dengan ditambah beragam lomba tingkat remaja dan anak anak dari bermacam jenis. Mulai lomba salat berjamaah, adzan, hingga kaligrafi. Dengan harapan para generasi muda dapat lebih memahami dan memiliki jiwa religius sejak dini,\" ujarnya kepada tribunjambi.com\r\n\r\nKegiatan dalam rangka mengisi bulan Ramadan dan menyambut malam Nuzul Quran ini sudah berlangsung sejak awal hingga akhir Ramadan, terutama untuk kegiatan hadroh dan juga kegiatan buka bersama akbar setiap hari.\r\n\r\nNamun, untuk kegiatan lomba anak anak dan remaja diselenggarakan beberapa hari jelang Nuzul Quran saja.\r\n', 'http://192.168.43.47/kantor_dinas/gambarimg/bocah_santri2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `idgambar` int(11) NOT NULL,
  `idlokasi` int(11) NOT NULL,
  `nmgambar` char(30) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`idgambar`, `idlokasi`, `nmgambar`, `url`) VALUES
(1, 1, 'capil1', 'http://192.168.43.47/kantor_dinas/gambarimg/capil1.jpg'),
(2, 1, 'capil2', 'http://192.168.43.47/kantor_dinas/gambarimg/capil2.jpg'),
(3, 1, 'capil3', 'http://192.168.43.47/kantor_dinas/gambarimg/capil3.jpg'),
(4, 2, 'likhup1', 'http://192.168.43.47/kantor_dinas/gambarimg/lingkunganhidup1.jpg'),
(5, 2, 'likhup2', 'http://192.168.43.47/kantor_dinas/gambarimg/lingkunganhidup2.jpg'),
(6, 2, 'likhup3', 'http://192.168.43.47/kantor_dinas/gambarimg/lingkunganhidup3.jpg'),
(7, 2, 'likhup4', 'http://192.168.43.47/kantor_dinas/gambarimg/lingkunganhidup4.jpg'),
(8, 3, 'kasbangpol1', 'http://192.168.43.47/kantor_dinas/gambarimg/kasbangpol1.jpg'),
(9, 3, 'kaspol2', 'http://192.168.43.47/kantor_dinas/gambarimg/kasbangpol2.jpg'),
(10, 3, 'kaspol3', 'http://192.168.43.47/kantor_dinas/gambarimg/kasbangpol3.jpg'),
(11, 3, 'kaspol4', 'http://192.168.43.47/kantor_dinas/gambarimg/kasbangpol4.jpg'),
(12, 3, 'kaspol5', 'http://192.168.43.47/kantor_dinas/gambarimg/kasbangpol5.jpg'),
(13, 4, 'dimas1', 'http://192.168.43.47/kantor_dinas/gambarimg/dimas1.jpg'),
(14, 4, 'dimas2', 'http://192.168.43.47/kantor_dinas/gambarimg/dimas2.jpg'),
(15, 4, 'dimas3', 'http://192.168.43.47/kantor_dinas/gambarimg/dimas3.jpg'),
(16, 4, 'dimas4', 'http://192.168.43.47/kantor_dinas/gambarimg/dimas4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `idks` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idlokasi` int(11) NOT NULL,
  `judul` char(30) NOT NULL,
  `isi` text NOT NULL,
  `rating` int(11) NOT NULL,
  `tanggal` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`idks`, `id`, `idlokasi`, `judul`, `isi`, `rating`, `tanggal`) VALUES
(28, 1, 1, 'kami', 'apa yang terhadi pada ssbuah kantor tersebut', 4, '30-05-2018'),
(29, 1, 1, '', '', 5, '30-05-2018'),
(30, 1, 1, '', '', 5, '30-05-2018'),
(31, 1, 1, '', '', 5, '30-05-2018'),
(32, 1, 1, '', '', 4, '30-05-2018'),
(33, 1, 1, '', '', 3, '30-05-2018'),
(34, 1, 1, 'dgh', 'xdgfd', 4, '04-06-2018'),
(35, 1, 1, 'xoba', 'coba', 5, '04-06-2018'),
(36, 1, 1, 'beritq', 'berita', 4, '06-06-2018'),
(39, 1, 3, 'apa', 'apo', 5, '07-06-2018'),
(40, 1, 4, 'sj', 'shsh', 0, '07-06-2018'),
(41, 1, 2, 'ccd', 'hde', 4, '07-06-2018'),
(42, 1, 0, 'sbhs', 'bshs', 0, '07-06-2018'),
(43, 1, 4, '', '', 5, '07-06-2018'),
(44, 1, 4, '', '', 5, '07-06-2018'),
(45, 1, 4, '', '', 5, '07-06-2018'),
(46, 1, 4, '', '', 5, '07-06-2018'),
(47, 1, 4, '', '', 5, '07-06-2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen_berita`
--

CREATE TABLE `komen_berita` (
  `idkb` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `judul_komber` char(30) NOT NULL,
  `isi_komber` text NOT NULL,
  `rating_komber` int(11) NOT NULL,
  `tanggal_komber` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `idlokasi` int(11) NOT NULL,
  `namalokasi` char(40) NOT NULL,
  `desk` text NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `img_header` varchar(100) NOT NULL,
  `rating_avg` double DEFAULT NULL,
  `rating_sum` int(11) DEFAULT NULL,
  `rating_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `namalokasi`, `desk`, `alamat`, `lat`, `lng`, `img_header`, `rating_avg`, `rating_sum`, `rating_count`) VALUES
(1, 'DINAS KEPENDUDUKAN DAN CATATAN SIPIL', 'Melaksanakan kewenangan otonomi daerah dalam bidang urusan kependudukan dalam rangka pelaksanaan tugas desentralisasi.', 'Jl. Prof. Dr. Sri Sudewi Sh No.75, Rengas Condong, Muara Bulian, Kabupaten Batang Hari, Jambi 36612', -1.702159, 103.264989, 'http://192.168.43.47/kantor_dinas/gambarimg/capil2.jpg', 0, 0, 0),
(2, 'DINAS LINGKUNGAN HIDUP', 'Berdasarkan Peraturan Daerah Nomor 10 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Daerah, Dinas Lingkungan Hidup menyelenggarakan urusan pemerintahan bidang lingkungan hidup dan persampahan yang dipimpin oleh seorang Kepala Dinas.\r\nKepala Dinas Lingkungan Hidup mempunyai tugas pokok memimpin, mengatur, merumuskan, membina, mengendalikan, mengkoordinasikan dan mempertanggungjawabkan kebijakan teknis pelaksanaan urusan pemerintahan daerah berdasarkan asas otonomi dan tugas pembantuan di bidang lingkungan hidup daerah sesuai dengan kewenangannya.\r\n', 'Jl. Prof. Dr. Sri Sudewi Sh, Rengas Condong, Muara Bulian, Kabupaten Batang Hari, Jambi 36612', -1.701673, 103.264542, 'http://192.168.43.47/kantor_dinas/gambarimg/lingkunganhidup2.jpg', 0, 0, 0),
(3, 'KANTOR KESATUAN BANGSA DAN POLITIK', 'feasf', 'Jl. Kol. Pol. M. Thaher Kelurahan Rengas Condong Kecamatan Muara Bulian', -1.710929, 103.260341, 'http://192.168.43.47/kantor_dinas/gambarimg/kasbangpol4.jpg', 0, 0, 0),
(4, 'PEMBERDAYAAN MASYARAKAT DAN DESA', 'Melaksanakan penyiapan koordinasi, fasilitasi perumusan dan pelaksanaan kebijakan, serta evaluasi, monitoring dan pelaporan di bidang pemberdayaan lembaga kemasyarakatan dan adat yang bergerak di bidang pemberdayaan Desa, lembaga adat tingkat kabupaten, pemberdayaan masyarakat hukum adat dalam daerah kabupaten, serta layanan fasilitasi kerjasama perencanaan pembangunan masyarakat kawasan perdesaan.', 'Jl. Sultan Thaha, Rengas Condong, Muara Bulian, Kabupaten Batang Hari, Jambi 36612', -1.702426, 103.265539, 'http://192.168.43.47/kantor_dinas/gambarimg/dimas3.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `idlokasi` int(11) NOT NULL,
  `pelayanan` varchar(250) NOT NULL,
  `sub_pelayanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `idlokasi`, `pelayanan`, `sub_pelayanan`) VALUES
(1, 1, 'BIODATA PENDUDUK', '1. Penduduk WNI wajib melaporan Kepada Instansi Pelaksana melalui Lurah dan Camat untuk dicatatkan Biodatanya\r\n2. Pencatatan Biodata Penduduk WNI dilakukan setelah memenuhi syarat :\r\n  -Surat Pengantar dari RT dan RW\r\n  -Kutipan Akta Kelahiran\r\n  -Ijazah atau Surat Tanda Tamat Belajar\r\n  -Kartu Keluarga\r\n  -Kartu Tanda Penduduk\r\n  -Kutipan Akta Perkawinan/Kutipan Akta Nikah atau\r\n  -Kutipan Akta Perceraian\r\n'),
(2, 1, 'KARTU KELUARGA ( KK )', '1. Penduduk WNI wajib melaporkan susunan Keluarganya kepada Instansi pelaksana melalui Lurah dan Camat\r\n2. Penerbitan KK dilakukan setelah memenuhi syarat :\r\n  -Surat Pengantar RT dan RW\r\n  -Ijin tinggal tetap bagi orang asing\r\n  -Foto copi Kutipan Akta\r\n   Nikah/Kutipan Akta Perkawinan\r\n  -Surat Keterangan Pindah/Surat\r\n   Keterangan Pindah Datang dalam\r\n   wilayah NKRI\r\n  -Surat Keterangan datang dari Luar\r\n   Negeri bagi WNI yang datang dari \r\n   luar negeri karena pindah\r\n  -Kartu Keluarga (KK) lama karena\r\n   penambahan/pengurangan anggota \r\n   Keluarga\r\n'),
(3, 1, 'KARTU TANDA PENDUDUK (KTP)', '1. Penerbitan KTP baru bagi penduduk WNI,dilakukan setelah memenuhi syarat berupa :\r\n  -Telah berusia 17 (tujuh belas)\r\n   tahun atau sudah kawin atau pernah\r\n   kawin\r\n  -Surat pengantar RT/RW dan Kepala\r\n   desa/lurah\r\n  -Poto copy Kartu Keluarga\r\n  -Kutipan Akta Nikah/Akta Kawin bagi\r\n   Penduduk yang belum berusia 17\r\n   tahun\r\n  -Kutipan Akta Kelahiran\r\n  -Surat keterangan datang dari luar \r\n   negeri yang diterbitkan oleh\r\n   Instansi pelaksana bagi WNI yang\r\n   datang dari luar  negeri Karena \r\n   pindah\r\n\r\n2. Penerbitan KTP baru bagi orang asing yang memiliki izin tinggal tetap,dilakukan setelah memenuhi syarat berupa :\r\n  -Telah berusia 17 (tujuh belas)\r\n   tahun atau sudah kawin atau pernah\r\n   kawin\r\n  -Foto kopi Kartu Keluarga\r\n  -Kutipan Akta Nikah/Akta Kawin bagi\r\n   penduduk yang belum berusia 17\r\n   tahun\r\n  -Kutipan Akta Kelahiran\r\n  -Paspor dan Izin Tinggal Tetap ,dan\r\n  -Surat Keterangan Catatan\r\n   Kepolisian .\r\n\r\n3. Penerbitan KTP karena hilang atau rusak bagi penduduk WNI atau orang asing yang memiliki izin tinggal tetap ,dilakukan setelah  memenuhi syarat berupa :\r\n  -Surat keterangan kehilangan dari\r\n   kepolisian atau KTP yang rusak\r\n  -Fotokopi KK ,dan\r\n  -Paspor dan izin Tinggal Tetap bagi\r\n   Orang Asing.\r\n\r\n4. Penerbitan KTP karena pindah datang bagi penduduk WNI atau orang asing yang memiliki izin tinggal tetap dilakukan setelah memenuhi syarat berupa :\r\n  -Surat Keterangan Pindah/Surat\r\n   Keterangan Pindah datang\r\n  -Surat Keterangan Datang dari Luar\r\n   Negeri bagi Warga Negara Indonesia\r\n   yang datang dari luar negeri\r\n   karena pindah.\r\n\r\n5. Penerbitan KTP di dilaksanakan di tingkat kelurahan dengan tata cara :\r\n  -Petugas Registrasi melakukan\r\n   verifikasi dan validasi data \r\n   kependudukan\r\n  -Petugas registrasi melakukan\r\n   perekaman data kedalam database\r\n   kependudukan\r\n  -Instansi Pelaksana mencetak dan\r\n   menerbitkan KTP\r\n'),
(4, 1, 'SURAT KETERANGAN PINDAH', '1. Pelaporan pendaftaran perpindahan penduduk WNI dilakukan dengan memenuhi syarat :\r\n  -Surat Pengantar RT dan RW\r\n  -Kartu Keluarga\r\n  -Kartu Tanda Penduduk\r\n\r\n2. Penduduk WNI mengisi dan menandatangani formulir permohonan pindah\r\n\r\n3. Lurah menanda tangani surat pengantar pindah antar Kabupaten/Kota dan antar Propinsi dan meneruskan berkas formulir pindah kepada Camat.\r\n\r\n4. Camat menanda tangani surat pengantar pindah antar Kabupaten/Kota dan antar Propinsi dan meneruskan Surat pengantar pindah kepada Instansi Pelaksana untuk di terbitkan Surat Keterangan Pindah.\r\n'),
(5, 1, 'SURAT KETERANGAN PINDAH DATANG', '1. Penduduk WNI melaporkan kedatangannya kepada RT/RW dan Lurah ditempat tujuan dengan menunjukan surat keterangan pindah datang\r\n\r\n2. Penduduk mengisi dan menandatangani formulir permohonan pindah datang\r\n\r\n3. Lurah menanda tangani dan meneruskan Lurah menanda tangani dan meneruskan formulir permohonan pindah datang kepada camat.\r\n\r\n4. Camat menandatangani formulir permohonan pindah datang dan menyampaikan kepada Instansi pelaksana sebagai dasar penerbitan surat keterangan pindah datang\r\n\r\n5. Surat Keterangan pindah datang digunakan sebagai dasar proses penerbitan KK dan KTP serta kependudukan\r\n\r\n6. perekaman ke dalam database.\r\n'),
(6, 1, 'PENCATATAN KELAHIRAN', '1. Setiap peristiwa kelahiran dicatatkan pada Instansi Pelaksana di tempat domisili penduduk ( azas Domisili ).\r\n\r\n2. Pencatatan kelahiran penduduk WNI dilakukan setelah memenuhi syarat :\r\n  -Surat Pengantar RT/RW\r\nb.   Surat Keterangan kelahiran dari dokter/ bidan/penolong kelahiran\r\nc.   Nama dan identitas saksi kelahiran\r\nd.   Kartu Keluarga orang tua\r\ne.   Kartu Tanda Penduduk orang tua\r\nf.   Kutipan Akta Nikah/Akta Perkawinan orang tua ( legalisir )\r\n\r\n3. Mengisi Formulir Dengan Lengkap ( Formulir dapat diambil di Disdukcapil materai 6000 )\r\n4. Dalam hal pelaporan kelahiran tidak disertai Kutipan Akta Nikah/Akta Perkawinan orang tua, pencatatan kelahiran tetap dilaksanakan\r\n'),
(7, 1, 'PENCATATAN KEMATIAN', '1. Pencatatan kematian WNI dilakukan pada Instansi Pelaksana di tempat terjadinya kematian setelah memenuhi syarat berupa :\r\na.  Surat pengantar dari RT dan RW untuk mendapatkan surat keterangan dari Lurah\r\nb.  Keterangan Kematian dari dokter/paramedis (jika meninggal di Rumah sakit)\r\n\r\n2. Pencatatan kematian bagi orang asing dilakukan pada instansi pelaksana setelah memenuhi syarat :\r\na.   Keterangan kematian dari dokter/paramedis\r\nb.   Poto kopi KK dan KTP bagi orang asing yang memeiliki ijin tinggal tetap\r\nc.   Potokopi Surat Keterangan Tempat Tinggal\r\nd.   Potokopi paspor\r\n'),
(8, 1, 'PENCATATAN PERKAWINAN ', '1. Pencatatan perkawinan dilakukan di Instansi Pelaksana tempat terjadinya perkawinan\r\n2. Pencatatan perkawinan dilakukan setelah memenuhi syarat berupa :\r\na.   Surat keterangan telah terjadinya perkawinan dari pemuka agama/pendeta atau surat perkawinan penghayat kepercayaan-\r\nb.   KTP suami dan isteri\r\nc.   Pas foto suami dan isteri\r\nd.   Kutipan Akta Kelahiran suami dan isteri\r\ne.   Paspor bagi suami atau isteri Orang Asing\r\n3. Pejabat pencatatan sipil pada instansi pelaksana mencatat pada register akta perkawinan dan menerbitkan kutipan akta perkawinan\r\n'),
(9, 1, 'PENCATATAN PERCERAIAN', '1.   Pencatatan perceraian dilakukan di Instansi Pelaksana tempat terjadinya perceraian.\r\n2.   Pencatatan perceraian dilakukan dengan menyerahkan salinan putusan pengadilan yang telah memperoleh kekuatan hukum tetap\r\ndan kutipan Akta Perkawinan.\r\n3. Pejabat pencatatan sipil mencatat pada register akta perceraian, memberikan catatan pinggir pada register akta perkawinan\r\n'),
(10, 1, 'PENCATATAN PENGAKUAN ANAK', '1. Pencatatan pelaporan pengakuan anak dilakukan pada Instansi Pelaksana yang menerbitkan Kutipan Akta Kelahiran .\r\n2. Pencatatan pengakuan anak dilakukan setelah memenuhi syarat berupa :\r\na.   Surat Pengantar dari RT/RW dan diketahui kepala Desa/Lurah\r\nb.   Surat Pengakuan Anak dari ayah biologis yang disetujui oleh ibu kandung\r\nc.   Kutipan Akta kelahiran ,dan\r\nd.   Fotokopi KK dan KTP ayah biologis dan ibu kandung.\r\ne.   Pejabat Pencatatan Sipil pada Instansi Pelaksanaan mencatat dalam register Akta Pengakuan Anak dan menerbitkan Kutipan Akte Kelahiran.\r\n'),
(11, 1, 'PENCATATAN PENGESAHAN ANAK', '1. Pencatatan pengesahan anak dilakukan pada instansi pelaksana tempat tinggal pemohon.\r\n2. Pencatatan pengesahan anak dilakukan setelah memenuhi syarat :\r\na.   Surat Pengantar dari RT/RW dan diketahui Lurah\r\nb.   Kutipan Akta Kelahiran\r\n\r\nc.   Potokopi kutipan Akta Perkawinan\r\nd.    Potokopi Kartu Keluarga\r\ne.    Potokopi Kartu Tanda Penduduk Pemohon\r\n3. Pejabat pencatatan sipil pada instansi pelaksana mencatat pada register Akta perkawinan dan membuat catatan pinggir pada register Akta kelahiran dan kutipan Akta Kelahiran.\r\n'),
(12, 1, 'PENCATATAN PENGANGKATAN ANAK', '1. Pencatatan pengangkatan anak dilakukan pada Instansi pelaksana yang menerbitkan Akta Kelahiran.\r\n2. Pencatatan pengangkatan anak dilakukan setelah memenuhi syarat :\r\na.   Penetapan pengadilan tentang pengangkatan anak\r\nb.   Kutipan Akta Kelahiran\r\nc.   Kartu Tanda Penduduk Pemohon\r\nd.   Kartu Keluarga Pemohon\r\n\r\n\r\n3. Pejabat Pencatatan sipil pada Instansi pelaksana memberikan catatan pinggir pada register Akta Kelahiran dan kutipan Akta Kelahiran.\r\n'),
(13, 1, 'PENCATATAN PERUBAHAN NAMA', '1. Pencatatan perubahan nama dilakukan pada Instansi pelaksana yang menerbitkan Akta Pencatatan sipil\r\n2. Pencatatan perubahan nama dilakukan setelah memenuhi syarat :\r\na.   Salinan Penetapan Pengadilan Negeri tentang perubahan nama\r\nb.   Kutipan Akta Catatan Sipil\r\nc.   Kutipan Akta Perkawinan bagi yang sudah kawin\r\nd.   Potokopi Kartu Keluarga\r\ne.   Potokopi Kartu Tanda Penduduk\r\n3. Pejabat pencatatan sipil membuat catatan pinggir pada register akta catatan sipil dan kutipan Akta catatan sipil.\r\n'),
(16, 2, 'STANDAR PELAYANAN REKOMENDASI IZIN PEMBUANGAN AIR LIMBAH', 'PERSYARATAN\r\nADMINISTRASI\r\n-Mengajukan surat permohonan izin pembuangan air limbah kepada pemerintahan setempat  dengan tembusan dinas lingkungan hidup;\r\n-isian formulir permohonan izin (blangko disediakan oleh dinas lingkungan hidup)\r\n-Fotocopy izin yang berkaitan dengan usaha dan atau kegiatan (izin usaha, izin mendirikan bangunan, izin HO, SIUP, KTP pemohon, Sertifikat Tanah)\r\n-Dokumen AMDAL dan UKL UPL atau dokumen lain yang dipersamakan.\r\n\r\nTEKNIS\r\n  -memiliki instalasi pengolahan air limbah (IPAL), saluran pembungan air limbah dan dilengkapi dengan flow meter\r\n-Lay out IPAL\r\n-Hasil uji laboratorium 3 bulan terakhir tidak melebihi baku mutu\r\nPROSEDUR\r\n-Pemohon mengajukan rekomendasi teknis izin pembuangan air limbah disertai persyarakatn administrasi\r\n-Dinas lingkungan hidup melakukan verifikasi administrasi paling lama 7(tujuh) hari kerja sejak permohonan diterima\r\n-Jika memenuhi akan dilakukan verifikasi teknis lapangan dan apabila tidak memenuhi akan dikembalikan kepada pemohon disertai surat pengembalian permohonan\r\n-Setelah dilakukan verifikasi surat rekomendasi teknis izin pembuagan air limbah bisa dikeluarkan paling lambat 14(empat belas) hari kerja\r\n'),
(17, 2, 'STANDAR PELAYANAN REKOMENDASI TEKNIS IZIN TPS B3\r\nADMINISTRASI', 'ADMINISTRASI\r\n-Mengajukan surat permohonan izin TPS B3 kepada pemerintahan setempat dengan tembusan dinas lingkungan hidup.\r\n-Mengisi   formulir permohonan izin TPS B3\r\n-Melampirkan fotocopy izin yang berkaitan dengan usaha dan atau kegiatan (Izin HO, IMB, SIUP, KTP pemohon, Sertifikat Tanah, jenis limbah yang dikelola, karakteristik limbah B3 yang dikelola, jumlah limbah B3 yang dikelola)\r\n-Melampirkan fotocopy rekomendasi AMDAL/UKL-UPL\r\n\r\nTEKNIS\r\n-Site Plan\r\n-Spesifikasi dan Desain konstruksi TPS Limbah B3\r\nPROSEDUR\r\n-pemohon mengajukan izin tertulis kepada pemerintahan. Kepala dinas lingkungan hidup, dengan mengisi  formulir yang telah ditetapkan dan disediakan dan melampirkan persyaratan lengkap dan dikirim kepada dinas lingkungan hidup.\r\n-Permohonan dianggap diterima setelah memenuhi syarat yang telah ditentukan selanjutnya diadakan pembahasan oleh tim teknis, peninjauan lapangan kepada masing-masing pemohon.\r\n'),
(18, 2, 'STANDAR PELAYANAN REKOMENDASI SPPL', 'PERSYARATAN\r\n-Formulir Permohonan\r\n-Rekomendasi\r\n\r\nPROSEDUR\r\n-Pemohon mengisi formulir \r\n-memeriksa kelengkapan berkas pemohon\r\n-Tim teknis memverifikasi berkas permohonan dan melakukan kunjuagan lepangan\r\n-Penandatanganan rekomendasi oleh kepala dinas lingkugan hidup\r\n-peomhon mengambil rekomendasi\r\n-apabila terjadi penolakan permohonan dalam pemrosesan pemberitahuan penolakan ke pemohon.\r\n'),
(19, 2, 'STANDAR PELAYANAN REKOMENDASI UKL UPL', 'PERSYARATAN\r\n-Formulir permohonan\r\n-Rekomendasi\r\n\r\nPROSEDUR\r\n-Pemohon mengisi formulir\r\n-Memeriksa kelengkapan berkas pemohon\r\n-Tim teknis memverifikasi berkas permohonan dan melakukan kunjuangan lapangan\r\n-penandatanganan rekomendasi oleh kepala dinas lingkungan hidup\r\n-Pemohon mengambil rekomendasi\r\n-Apabila terjadi penolakan permohonan dalam pemrosesan pemberitahuan penolakan ke pemohon\r\n'),
(20, 2, 'STANDAR PELAYANAN REKOMENDASI AMDAL', 'PERSYARATAN\r\n-Formulir permohonan\r\n-Rekomendasi\r\n\r\nPROSEDUR\r\n-Pemohon mengisi formulir\r\n-Memeriksa kelengkapan berkas pemohon\r\n-Tim     teknis     memverifikasi     berkas pennohonan	dan melakukan  kunjungn lapangan\r\n-Penandatanganan rekomendasi oleh Kepala Dinas Lingkungan Hidup\r\n-Pemohon memgambil rekomendasi\r\n-Apabila  terjadi   penolakan  pennohonan dalam  pemrosesan pemberitahuan penolakan ke pemohonStandar pelayanan rekomendasi  Penganduan akibat dugaan pencemaran dan atau perusakan lingkungan hidup\r\n'),
(21, 2, 'STANDAR PELAYANAN PENGANGKUTAN SAMPAH', 'PERSYARATAN\r\n-Laporan\r\n-Hasil laporan\r\n\r\nPROSEDUR\r\n-Pemohon mengisi formulir (secara tertulis),\r\nsurat, email,  faksmile,  SMS dan/ atau cara lain  sesuai dengan perkembangan ilmu pengetahuan  dan teknologi yang disertai identitas pelapor jelas\r\n-Penelaahan jenis pengaduan\r\n-Verifikasi\r\n-Rekomendasi  tindak   lanjut  verifikasi dan penyampaian	perkembangan dan   hasil tindak lanjut verifikasi pengaduan  kepada pengadu\r\n'),
(22, 2, 'STANDAR PELAYANAN RETRIBUSI KEBERSIHAN', 'PERSYARATAN\r\n-Surat Permohonan / telepon\r\n-Warga masyarakat yang  melaksanakan kerja bakti\r\n\r\nPROSEDUR\r\n-Pernohon dapat  menghubungi Dinas Lingkungan Hidup untuk meminta bantuan mengangkut sampah apabila ada kegiatan kerja bakti di lingkungannya\r\n-Petugas dari  Dinas  Lingkungan Hidup mengangkut sampah hasil  kerja  baktimasyarakat ke Tempat Pembuangan Akhir(TPA)\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'rendy', '12345'),
(2, 'gori', 'goro'),
(3, 'goro', 'gori');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`idgambar`),
  ADD KEY `idlokasi_gambar` (`idlokasi`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`idks`),
  ADD KEY `id` (`id`),
  ADD KEY `idlokasi` (`idlokasi`);

--
-- Indeks untuk tabel `komen_berita`
--
ALTER TABLE `komen_berita`
  ADD PRIMARY KEY (`idkb`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `idlokasi` (`idlokasi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `idgambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `idks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `komen_berita`
--
ALTER TABLE `komen_berita`
  MODIFY `idkb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idlokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
