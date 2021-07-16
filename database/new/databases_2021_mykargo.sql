-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 08:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databases_2021_mykargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`) VALUES
('ID2020062105580433', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('ADM20210524175717749', 'leo', '4cef18d6beae2ffc2a51b30f9e1e0b97'),
('', 'rafi', '26ba3e670c56526b34eec2e980a2cf57');

-- --------------------------------------------------------

--
-- Table structure for table `data_berita`
--

CREATE TABLE `data_berita` (
  `id_berita` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_berita`
--

INSERT INTO `data_berita` (`id_berita`, `tanggal`, `judul`, `foto`, `isi`) VALUES
('BER009231', '2020-08-17', 'Perayaan 17 Agustus Hari Kemerdekaan', 'IMG_2238.jpg', '23 Desember 2020 – Peringatan Hari Ibu yang jatuh pada tanggal 22 Desember menjadi spesial kali ini untuk para pelanggan setia Pertamina. Tepat di hari itu, PT Pertamina (Persero) melalui Regional Sulawesi menggelar program reward bagi para pelanggan Pertamax Turbo khususnya wilayah Sulawesi Selatan dan Tenggara.\r\n\r\nUnit Manager Comm, Rel & CSR MOR VII, Laode Syarifuddin Mursali mengatakan setiap pelanggan khususnya perempuan yang membeli Pertamax Turbo minimal Rp200.000,- mendapatkan secara cuma-cuma Bright Gas 5.5 kg. \r\n\r\n“Melalui program ini, kami memberikan apresiasi kepada pelanggan setia untuk terus menggunakan produk-produk ungulan kami, baik BBM berkualitas maupun LPG non-subsidi. Spesial pada hari ini, mereka mendapatkan keuntungan berlipat, tidak hanya mendapatkan manfaat dari produk unggulan yang mereka beli untuk kendaraannya, mereka pun khususnya perempuan mendapatkan juga Bright Gas secara gratis yang bisa digunakan untuk memasak di rumah,” tambahnya.\r\n\r\nPemberian reward ini oleh Pertamina Regional Sulawesi diselenggarakan di 6 SPBU yaitu SPBU 7490236 – Makassar, SPBU 7490616 – Pangkep, SPBU 7491160 - Pare Pare, SPBU 7491802 - Toraja Utara, SPBU 7493109 – Kendari dan SPBU 7493510 – Kolaka. “Pertamina terus mengajak masyarakat menggunakan produk-produk berkualitas yang dimiliki Pertamina. Diharapkan masyarakat yang belum beralih, tergerak untuk beralih dengan beragam manfaat yang kami tawarkan baik itu untuk manfaat untuk mesin kendaraannya maupun promosi lainnya yang bisa didapatkan masyarakat,” pungkasnya.'),
('BER2006001', '2020-06-18', 'Jelang Natal dan Tahun Baru, Pertamina Optimalkan ', '20201223021950547_64acc7d0cde64d9e90295a2032f719f9.jpg', 'Jakarta, 23 Desember 2020 – Pertamina memastikan ketersediaan LPG Jelang Natal dan Tahun Baru dengan memberikan penambahan fakultatif untuk LPG hingga 14% atau setara dengan tambahan 251,480 tabung  untuk LPG Subsidi dan 2% untuk LPG Non Subsidi di wilayah Kabupaten Serang, Kota Serang dan Kabupaten Cilegon.\r\n\r\n“Antisipasi kenaikan konsumsi LPG, Pertamina akan memberikan extra dropping di bulan Desember secara keseluruhan (Bright Gas, Elpiji 12kg dan LPG subsidi 3kg) di wilayah Serang dan Cilegon sekaligus mengaktifkan 122 pangkalan siaga yang siap memberikan pelayanan di hari libur,” ujar Eko Kristiawan, Unit Manager Communication, Relations & CSR Pertamina Regional Jawa Bagian Barat.\r\n\r\n“Khusus untuk LPG 3 Kg, rata-rata harian konsumsi untuk Serang & Cilegon adalah 69.800 tabung/hari. Selama Periode Desember, kami siapkan “extra dropping” 251.480 tabung atau setara dengan kenaikan 14%,” tambah Eko.\r\n\r\nPertamina juga terus melakukan pemantauan kebutuhan LPG 3 Kg di sejumlah wilayah yang menjadi tujuan mudik serta sejumlah lokasi tujuan wisata yang sering kali dimanfaatkan oleh usaha mikro untuk mengolah dan menjajakan produknya.\r\n\r\nPeraturan Presiden Republik Indonesia Nomor 104 Tahun 2007 tentang Penyediaan, Pendistribusian dan Penetapan Harga LPG Tabung 3 Kg, LPG 3 Kg bersubsidi diperuntukkan hanya bagi rumah tangga pra sejahtera dan usaha mikro. \"Usaha mikro adalah usaha dengan aset maksimal 50 juta dan omset maksimal 300 juta per tahun\", tambah Eko.\r\n\r\nBagi masyarakat dari kalangan mampu, usaha kecil dan menengah ke atas, Pertamina menyediakan tabung Bright Gas yang saat ini tersedia dalam kemasan 5.5 Kg dan 12 Kg Bright Gas, dilengkapi segel hologram yang berfungsi untuk menjamin isi tabung dan konsumen bisa mengetahui rusak tidaknya tabung Elpiji. Ditambah dengan safety valve yang berfungsi untuk mengeluarkan tekanan gas secara perlahan bila tekanan dalam tabung terlalu tinggi, serta Bright Gas dilengkapi dengan QR Code yang dapat dipindai oleh aplikasi QR Code smartphone untuk mendapatkan informasi lokasi pengisian.'),
('BER2006002', '2020-06-18', 'Pastikan Keselamatan Kerja, Direktur Operasi PDC L', '20201222062004359_1b8355f07aa24957a15179b235605f68.jpg', 'Pertamina melalui Patra Drilling Contractor (PDC) yang merupakan anak usaha Pertamina Drilling Service Indonesia (PDSI) melakukan kunjungan Management Walk Through (MWT) di beberapa titik kegiatan operasi project Rokan, Riau, pada Rabu, 16 Desember 2020. MWT tersebut dilakukan oleh Direktur Operasi PDC Jusup Budiarto.\r\n\r\nPada kunjungan kali ini, menurutnya untuk memastikan keselamatan kerja seluruh pekerja yang berada di wilayah tersebut. Hal itu sejalan dengan komitmen manajemen agar dalam setiap proyek yang dilaksanakan harus dapat meminimalisir insiden dengan memitigasi bahaya kerja.\r\n\r\n“Keselamatan dan kesehatan kerja menjadi hal yang harus diprioritaskan. Target pekerjaan yang tercapai akan menjadi sia-sia jika terdapat kecelakaan kerja,” ucap Jusup.\r\n\r\nDia juga menyampaikan agar semua personil jangan lengah sedikitpun terhadap aspek-aspek keselamatan kerja. “Patuh terhadap Standard Operational Procedure (SOP) dan ketentuan lainnya yang berlaku, juga aktif melakukan intervensi jika ditemukan adanya kondisi berbahaya ataupun tindakan berbahaya, serta peduli terhadap sesama rekan kerja, terlebih jika ada potensi bahaya yang mengancam,” ujarnya.\r\n\r\nKunjungan MWT Jusup sekaligus mewakili Manajemen Konsorsium PDC–PGSOL, anak perusahaan PGN, didampingi oleh Corporate Secretary PDC Budhi Kristianto, perwakilan Managemen PT Pertagas, team PGASOL, Project Manager, dan Deputi guna mengupayakan dan memastikan tahapan project berjalan dengan baik.'),
('ber291030990', '2020-08-10', 'Tekan Penyebaran COVID-19, PDC Ciptakan Klaster Se', '20201222065614784_48a0dbcfbbfa47d9af90db3e42ae8bbb.jpg', 'JAKARTA - Penyebaran COVID-19 yang terus meningkat, baik peningkatan jumlah kasus terkonfirmasi maupun korban meninggal di Indonesia menjadi kekhawatiran semua pihak. Berbagi upaya dilakukan dalam pencegahan guna menekan bertambahnya korban.\r\n\r\nMelihat hal itu, Direktur Utama PT Patra Drilling Contractor (PDC) Teddyanus Rozarius mengajak seluruh Perwira PDC menciptakan \"Klaster Sehat\" di lingkungan keluarga masing-masing. \"Kita terus berupaya penuh agar COVID-19 tidak terus berkembang khususnya di lingkungan PDC. Dengan menciptakan Kluster Sehat baik di lingkungan kerja, keluarga dan lingkungan sekitar kita berada, diharapkan dapat menekan penyebaran virus tersebut,” ujarnya pada saat rapat daring, di Jakarta, Pada Senin, 7 Desember 2020.\r\n\r\nLebih lanjut Teddy mengatakan, di lingkungan kantor PDC sendiri telah dilaksanakan penyemprotan disinfektan secara rutin. Selain itu, sosialisasi dari fungsi HSSE juga gencar dilakukan.\r\n\r\n“Penerapan protokol kesehatan di lingkungan kantor juga diterapkan, antara lain dengan memberlakukan pembagian pekerja yang bekerja di rumah dan di kantor, serta pelaporan status kesehatan pekerja dan keluarga secara rutin setiap harinya,” tutur Teddy. *IK/PDC/HM');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku_tamu`
--

CREATE TABLE `data_buku_tamu` (
  `id_buku_tamu` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL DEFAULT '',
  `komentar_dan_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku_tamu`
--

INSERT INTO `data_buku_tamu` (`id_buku_tamu`, `tanggal`, `nama`, `email`, `no_telepon`, `komentar_dan_saran`) VALUES
('BUK001', '2021-04-08', 'Imam zamrud', 'Imamzamrud4@gmail.com', '082129088250', 'Bagus setuju'),
('BUK002', '2021-06-13', '123', '123', '123', '123'),
('BUK003', '2021-06-14', 'andi', 'andi@gmail.com', '082342364', 'Packing tolong dirapikan');

-- --------------------------------------------------------

--
-- Table structure for table `data_driver`
--

CREATE TABLE `data_driver` (
  `id_driver` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(50) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `detail_informasi_driver` text DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_driver`
--

INSERT INTO `data_driver` (`id_driver`, `nama`, `alamat`, `no_telepon`, `no_ktp`, `detail_informasi_driver`, `username`, `password`) VALUES
('DRI20210613015749868', 'Budi Doremi', 'Jakarta', '085369236798', '9457238974', 'tasikmalaya', 'driver', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data_informasi`
--

CREATE TABLE `data_informasi` (
  `id_informasi` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori`
--

CREATE TABLE `data_kategori` (
  `id_kategori` varchar(50) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kategori`
--

INSERT INTO `data_kategori` (`id_kategori`, `kategori`, `harga`) VALUES
('KAT20210401', 'Alumunium', 34000),
('KAT20210402', 'Besi', 20000),
('KAT20210715074916633', 'Perunggu', 34000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id_pelanggan` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL DEFAULT '',
  `alamat_lengkap` text NOT NULL,
  `username` varchar(100) DEFAULT '',
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id_pelanggan`, `nama`, `no_telepon`, `alamat_lengkap`, `username`, `password`) VALUES
('PEL001', 'leo', '0853692378865', 'jakarta', 'leo', '24bc50d85ad8fa9cda686145cf1f8aca');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengiriman`
--

CREATE TABLE `data_pengiriman` (
  `nomor_resi` varchar(50) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `username` varchar(252) DEFAULT NULL,
  `no_telepon_pengirim` varchar(50) NOT NULL DEFAULT '',
  `wilayah_pengiriman` varchar(50) NOT NULL,
  `alamat_lengkap_pengiriman` text NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `no_telepon_penerima` varchar(50) NOT NULL DEFAULT '',
  `wilayah_tujuan` varchar(50) NOT NULL,
  `alamat_lengkap_tujuan` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `berat` int(10) NOT NULL,
  `tarif` int(20) NOT NULL,
  `keterangan_isi_paket` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '',
  `keterangan` text NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `cabang_agen` varchar(50) DEFAULT NULL,
  `asal_origin` varchar(50) DEFAULT NULL,
  `tujuan_destination` varchar(50) DEFAULT NULL,
  `kepada_consigne` varchar(50) DEFAULT NULL,
  `telp_hp` varchar(50) DEFAULT NULL,
  `dari_shipper` varchar(50) DEFAULT NULL,
  `jumlah_pieces` varchar(50) DEFAULT NULL,
  `berat_weight` varchar(50) DEFAULT NULL,
  `isi_kiriman_description` varchar(50) DEFAULT NULL,
  `catatan_instruction` varchar(50) DEFAULT NULL,
  `biaya_kiriman_chargers` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `asuransi_admin` varchar(50) DEFAULT NULL,
  `nilai_declare_value` varchar(50) DEFAULT NULL,
  `kode_kota_tujuan` varchar(50) NOT NULL,
  `jenis_layanan` varchar(50) DEFAULT NULL,
  `admin` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengiriman`
--

INSERT INTO `data_pengiriman` (`nomor_resi`, `tanggal_pengiriman`, `pengirim`, `username`, `no_telepon_pengirim`, `wilayah_pengiriman`, `alamat_lengkap_pengiriman`, `penerima`, `no_telepon_penerima`, `wilayah_tujuan`, `alamat_lengkap_tujuan`, `kategori`, `berat`, `tarif`, `keterangan_isi_paket`, `status`, `keterangan`, `total_bayar`, `cabang_agen`, `asal_origin`, `tujuan_destination`, `kepada_consigne`, `telp_hp`, `dari_shipper`, `jumlah_pieces`, `berat_weight`, `isi_kiriman_description`, `catatan_instruction`, `biaya_kiriman_chargers`, `jumlah`, `asuransi_admin`, `nilai_declare_value`, `kode_kota_tujuan`, `jenis_layanan`, `admin`) VALUES
('PEN20210612004139872', '2021-06-12', 'leo', NULL, '423414', 'Jakarta Barat', '34', '234', '234', 'Pangkal Pinang', '234', 'Besi', 34, 20000, '234', 'sampai tujuan', '<p>234</p>\r\n', 680234, '', '', '', '', '', '', '', '', '', '', '', '', '234', '3', '3', 'cepat', NULL),
('PEN20210613233630472', '2021-06-13', 'leo', NULL, '0853692378865', 'Jakarta Barat', 'Palmerah', '34', '234', 'Bangka Barat', '34', 'Besi', 34, 20000, '234', 'pengiriman', '<p>Note</p>\r\n', 680234, '', '', '', '', '', '', '', '', '', '', '', '', '234', '234', '234', 'cepat', NULL),
('PEN20210614001107827', '2021-06-14', 'leo', NULL, '0853692378865', 'Jakarta Barat', 'Kemanggisan', 'rido', '0857446444', 'Bangka Selatan', 'Bangka Selatan', 'Barang', 1, 20000, 'barang', 'menunggu_persetujuan', 'barang', 21000, '', '', '', '', '', '', '', '', '', '', '', '', '1000', '2000', '36365', 'cepat', NULL),
('25034812072021', '2021-07-12', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'asdf', '087878770097', 'Pangkal Pinang', '\r\nasdfasdf', 'Alumunium', 12, 0, 'asdasd', 'menunggu pickup barang', 'asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0', '200000', 'asdf', 'Cargo', NULL),
('20523212072021', '2021-07-12', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'asdf', '087878770097', 'Pangkal Pinang', '\r\nasd', 'Alumunium', 12, 0, 'asdf', 'menunggu pickup barang', 'asdf', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0', '200000', 'asdf', 'Cargo', NULL),
('16093312072021', '2021-07-12', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'jatiwaringin', 'asdf', '087878770097', 'Pangkal Pinang', '\r\n', 'Alumunium', 3, 0, 'a asd fasdf', 'menunggu pickup barang', ' zxcv asf', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0', '200000', 'asdf', 'Biasa', NULL),
('30453414072021', '2021-07-14', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'asdf', '087878770097', 'Pangkal Pinang', 'testing', 'Alumunium', 3, 20000, 'painasdflkj', 'menunggu pickup barang', 'aiwjfiwjalkj lajwlasdfwwf', 61000, '', '', '', '', '', '', '', '', '', '', '', '', '1000', '200000', 'Bali', 'cepat', NULL),
('56050114072021', '2021-07-14', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'Joko', '1029830129312', 'Pangkal Pinang', '\r\nasdfasdf', 'Alumunium', 12, 30000, 'asdfasf', 'menunggu pickup barang', 'asdfasdf', 372500, '', '', '', '', '', '', '', '', '', '', '', '', '12500', '250000', 'asdf', 'Biasa', NULL),
('PEN20210715062944561', '2021-07-15', 'Nabil', NULL, '0982093812', 'Jakarta Barat', 'jatiwaringin\r\n', 'Joko', '087878770097', 'Pangkal Pinang', 'pangkalan pinang\r\n', 'KAT20210401', 5, 30000, 'asdf', 'pengiriman', 'asdf', 1123123, '', '', '', '', '', '', '', '', '', '', '', '', '1500', '200000', '12312', 'Cargo', 'admin'),
('PEN20210715073531131', '2021-07-15', 'Nabilah', NULL, '087878770097', 'Jakarta Barat', 'jl. kebon jeruk\r\n', 'Febian', '087878770097', 'Pangkal Pinang', 'pangkalan\r\n', 'KAT20210402', 5, 30000, ' buku belajar', 'pengiriman', '-', 372500, '', '', '', '', '', '', '', '', '', '', '', '', '1500', '250000', 'ABks92', 'cepat', 'rafi'),
('PEN20210715090050230', '2021-07-15', 'Nabil', NULL, '087878770097', 'Jakarta Barat', '\r\nasdasd', 'Joko', '087878770097', 'Pangkal Pinang', 'asdfasdf\r\n', 'KAT20210715074916633', 40, 30000, 'asdfasdf', 'pengiriman', 'asdfasdf', 61000, '', '', '', '', '', '', '', '', '', '', '', '', '1500', '200000', '12312', 'Biasa', 'admin'),
('85032515072021', '2021-07-15', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'asdf', '087878770097', 'Pangkal Pinang', '\r\nasdf', 'Besi', 3, 40000, 'asdfasdf', 'menunggu pickup barang', 'asdfasdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'asdf', 'Biasa', NULL),
('PEN20210715090925896', '2021-07-15', 'Nabilah', NULL, '087878770097', 'Jakarta Barat', 'asdf\r\n', 'Joko', '087878770097', 'Pangkal Pinang', '\r\nasdfasdf', 'Alumunium', 40, 20000, 'asdfasdf', 'pengiriman', 'asdfasdf', 213123, '', '', '', '', '', '', '', '', '', '', '', '', '1000', '12341234', '12312', 'Cargo', 'admin'),
('PEN20210715091710661', '2021-07-15', 'Haris', NULL, '091283901823', 'Jakarta Barat', 'asdfasdfasdf', 'Febian', '087878770097', 'Pangkal Pinang', '\r\nasdfasdfasdf', 'Alumunium', 12, 4000, 'bakmi', 'pengiriman', 'askldfjkasd', 1632010000, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', '12312', 'Cargo', 'admin'),
('PEN20210715091842675', '2021-07-15', 'Nabil', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'asdfasdf', '087878770097', 'Pangkal Pinang', '\r\nasdfasdf', 'Alumunium', 12, 30000, 'asdfasdf', 'pengiriman', 'asdfasdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', '12312', 'Biasa', 'admin'),
('PEN20210715095247724', '2021-07-15', 'nando', NULL, '087878770097', 'Jakarta Barat', 'asdf', 'Vira', '087878770097', 'Pangkal Pinang', '\r\nasdfasdf', 'Alumunium', 3, 40000, 'asdfasdf', 'pengiriman', 'asdfasdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '12500', '250000', '12312', 'Cargo', 'admin'),
('PEN20210715095846763', '2021-07-15', 'nansdo', NULL, '087878770097', 'Jakarta Barat', 'asdfasdf', 'Vira', '087878770097', 'Pangkal Pinang', '\r\nasdf', 'Besi', 3, 20000, 'asdf', 'pengiriman', 'asdf', 1200012500, '', '', '', '', '', '', '', '', '', '', '', '', '12500', '250000', 'asdf', 'cepat', 'admin'),
('PEN20210716050423833', '2021-07-16', 'harry potter', NULL, '1203091283', 'Jakarta Barat', 'jatibening\r\n\r\n', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Besi', 12, 20000, 'asdf', 'pengiriman', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '617061.7', '12341234', '12312', 'cepat', 'admin'),
('13165216072021', '2021-07-16', 'nando', '', '087878770097', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '087878770097', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 30000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'Bali', 'Biasa', NULL),
('90251416072021', '2021-07-16', 'nando', '', '087878770097', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '087878770097', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 30000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'Biasa', NULL),
('74264416072021', '2021-07-16', 'nando', '', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('44274716072021', '2021-07-16', 'nando', '', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('86304416072021', '2021-07-16', 'nando', '', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('34313316072021', '2021-07-16', 'nando', '', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('97315016072021', '2021-07-16', 'nando', '', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('12353016072021', '2021-07-16', 'nando', 'nando', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('99355416072021', '2021-07-16', 'nando', 'nando', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('77360616072021', '2021-07-16', 'nando', 'nando', '1203091283', 'Jakarta Barat', 'Jatiwaringin', 'Joko', '1203091283', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 20000, 'asdf', 'menunggu pickup barang', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'ABks92', 'cepat', NULL),
('PEN20210716174008469', '2021-07-16', 'Rafi Chandra', 'hpotter', '087878770097', 'Jakarta Barat', 'laskjdlajsd', 'Joko', '087878770097', 'Pangkal Pinang', 'laskjdlajsd', 'Besi', 3, 40000, 'asdf', 'pengiriman', 'asdf', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'Bali', 'Biasa', 'admin'),
('32585416072021', '2021-07-16', 'H. Potter', 'hpotter', '087878770097', 'Jakarta Barat', 'jatibening\r\n\r\n', 'Joko', '087878770097', 'Pangkal Pinang', 'laskjdlajsd', 'Alumunium', 12, 30000, 'asd', 'menunggu pickup barang', 'asd', 2147483647, '', '', '', '', '', '', '', '', '', '', '', '', '10000', '200000', 'asdf', 'Biasa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_profil`
--

CREATE TABLE `data_profil` (
  `id_profil` varchar(100) DEFAULT NULL,
  `home` text DEFAULT NULL,
  `profil` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_profil`
--

INSERT INTO `data_profil` (`id_profil`, `home`, `profil`) VALUES
('PRO20210408102200953', '<p><strong>LAYANAN </strong>MY KARGO EXPRESS</p>\r\n\r\n<p>Saat ini MY KARGO EXPRESS melayani kiriman Paket &amp; Dokumen lebih dari 36 Kantor Cabang Utama yang tersebar di Pulau Jawa &amp; Bali sebagai Kota-Kota Utama melayani beberapa macam Layanan yang sesuai dengan kebutuhan para Pelanggan</p>\r\n\r\n<p><strong>1. CEPAT</strong><br />\r\n&nbsp; &nbsp; Cepat adalah layanan pengiriman Paket &amp; Dokumen Peka Waktu ke seluruh wilayah Jawa &amp; Bali, dengan perkiraan estimasi&nbsp;waktu penyampaian kiriman 1-3 hari kerja dengan menggunakan transportasi jalur darat tergantung pada daerah&nbsp;yang menjadi tujuan pengiriman.</p>\r\n\r\n<p><strong>2. BIASA</strong><br />\r\n&nbsp; &nbsp; Biasa adalah layanan pengiriman Paket &amp; Dokumen ke seluruh wilayah Jawa &amp; Bali, dengan perkiraan estmasi waktu&nbsp;penyampaian kiriman 1-5&nbsp;hari kerja dengan menggunakan transportasi jalur darat tergantung pada daerah yang&nbsp;menjadi tujuan pengiriman.</p>\r\n\r\n<p><strong>3. CARGO</strong><br />\r\n&nbsp; Cargo adalah layanan pengiriman Paket lebih dari 10 kg ke seluruh wilayah Jawa &amp; Bali, dengan perkiraan esmasi&nbsp; waktu penyampaian kiriman 1-7&nbsp;hari kerja dengan menggunakan transportasi jalur darat tergantung pada daerah&nbsp;yang&nbsp;menjadi tujuan pengiriman.</p>\r\n\r\n<p><strong>4. INTERNASIONAL </strong><br />\r\n&nbsp; Internasional adalah layanan pengiriman Paket &amp; Dokumen ke Luar Negeri bekerjasama dengan Perusahaan lain khusus Internasional</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>VISI &amp; MISI PERUSAHAAN</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Visi&nbsp; &nbsp; &nbsp;:</strong> Memberikan pelayanan cepat &amp; tepat untuk menjadikan perusahaan jasa pengiriman&nbsp;yang terpercaya</li>\r\n	<li><strong>Misi&nbsp; &nbsp; :</strong> Membuat jaringan agar efesien &amp; efektif serta melatih tenaga yang terampil guna memberikan&nbsp;pelayanan yang baik</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `data_tarif`
--

CREATE TABLE `data_tarif` (
  `id_tarif` varchar(50) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `id_kategori` varchar(50) NOT NULL,
  `tarif_biasa` int(20) NOT NULL,
  `estimasi_waktu_pengiriman_biasa` varchar(100) NOT NULL,
  `tarif_cepat` int(11) DEFAULT NULL,
  `estimasi_waktu_pengiriman_cepat` varchar(100) NOT NULL,
  `tarif_cargo` int(11) DEFAULT NULL,
  `estimasi_waktu_pengiriman_cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tarif`
--

INSERT INTO `data_tarif` (`id_tarif`, `dari`, `tujuan`, `id_kategori`, `tarif_biasa`, `estimasi_waktu_pengiriman_biasa`, `tarif_cepat`, `estimasi_waktu_pengiriman_cepat`, `tarif_cargo`, `estimasi_waktu_pengiriman_cargo`) VALUES
('TAR20210612003540136', 'Jakarta Barat', 'Pangkal Pinang', 'KAT20210401', 30000, '3 hari', 20000, '2 Hari', 40000, '4 hari'),
('TAR20210713081127146', 'Jakarta Barat', 'Pangkal Pinang', 'KAT20210402', 40000, '5', 20000, '3', 60000, '10');

-- --------------------------------------------------------

--
-- Table structure for table `data_tracking_pengiriman`
--

CREATE TABLE `data_tracking_pengiriman` (
  `id_tracking_pengiriman` varchar(50) DEFAULT NULL,
  `nomor_resi` varchar(50) DEFAULT NULL,
  `id_driver` varchar(50) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_tracking_pengiriman`
--

INSERT INTO `data_tracking_pengiriman` (`id_tracking_pengiriman`, `nomor_resi`, `id_driver`, `lat`, `lng`, `keterangan`) VALUES
('TRA20210613022709300', 'PEN20210612004139872', 'DRI20210613015749868', '-8.639184258807283', '116.31203128457132', '123'),
('TRA20210614001757929', 'PEN20210613233630472', 'DRI20210613015749868', '-6.240883389712091', '106.82156547207973', 'dalam proses pengiriman'),
('TRA20210614001820465', 'PEN20210613233630472', 'DRI20210613015749868', '-3.0291751001822154', '104.73500874082087', 'pengantaran palembang macet'),
('TRA20210716122956219', 'PEN20210613233630472', 'DRI20210613015749868', '-6.208635260865742', '106.84809838970943', 'Sampai'),
('TRA20210716123107130', 'PEN20210613233630472', 'DRI20210613015749868', '-6.209162285948648', '106.86225414276123', 'macet'),
('TRA20210716123201929', 'PEN20210715090050230', 'DRI20210613015749868', '-6.187093245220451', '106.92623387877951', 'pickup');

-- --------------------------------------------------------

--
-- Table structure for table `data_wilayah`
--

CREATE TABLE `data_wilayah` (
  `id_wilayah` varchar(50) DEFAULT NULL,
  `wilayah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_wilayah`
--

INSERT INTO `data_wilayah` (`id_wilayah`, `wilayah`) VALUES
('WIL20210612001819575', 'Jakarta Barat'),
('WIL20210612001827867', 'Pangkal Pinang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_berita`
--
ALTER TABLE `data_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
