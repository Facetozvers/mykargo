<?php 
function location() { return "home"; }
include 'admin/include/all_include.php';


$nomor_resi = rand(10,99).date('isdmY');
$tanggal_pengiriman = xss($_POST['tanggal_pengiriman']);
$pengirim = xss($_POST['pengirim']);
$no_telepon_pengirim = xss($_POST['no_telepon_pengirim']);
$wilayah_pengiriman = xss($_POST['wilayah_pengiriman']);
$alamat_lengkap_pengiriman = xss($_POST['alamat_lengkap_pengiriman']);
$penerima = xss($_POST['penerima']);
$no_telepon_penerima = xss($_POST['no_telepon_penerima']);
$wilayah_tujuan = xss($_POST['wilayah_tujuan']);
$alamat_lengkap_tujuan = xss($_POST['alamat_lengkap_tujuan']);
$kategori = xss($_POST['kategori']);
$berat = xss($_POST['berat']);
$tarif = xss($_POST['tarif']);
$keterangan_isi_paket = ($_POST['keterangan_isi_paket']);
$status = "menunggu pickup barang";
$keterangan = ($_POST['keterangan']);
$total_bayar = xss($_POST['total_bayar']);
$cabang_agen = xss($_POST['cabang_agen']);
$asal_origin = $_POST['asal_origin'];
$tujuan_destination = $_POST['tujuan_destination'];
$kepada_consigne = $_POST['kepada_consigne'];
$telp_hp = $_POST['telp_hp'];
$dari_shipper = $_POST['dari_shipper'];
$jumlah_pieces = $_POST['jumlah_pieces'];
$berat_weight = $_POST['berat_weight'];
$isi_kiriman_description = $_POST['isi_kiriman_description'];
$jumlah = $_POST['jumlah'];
$asuransi_admin = $_POST['asuransi_admin'];
$nilai_declare_value = $_POST['nilai_declare_value'];
$biaya_kiriman_chargers = $_POST['biaya_kiriman_chargers'];
$kode_kota_tujuan = $_POST['kode_kota_tujuan'];
$jenis_layanan = $_POST['jenis_layanan'];

$query = mysql_query("insert into data_pengiriman

(
 `nomor_resi`, 
 `tanggal_pengiriman`, 
 `pengirim`, 
 `no_telepon_pengirim`, 
 `wilayah_pengiriman`, 
 `alamat_lengkap_pengiriman`, 
 `penerima`, 
 `no_telepon_penerima`, 
 `wilayah_tujuan`, 
 `alamat_lengkap_tujuan`, 
 `kategori`,
 `berat`, 
 `tarif`, 
 `keterangan_isi_paket`, 
 `status`, 
 `keterangan`, 
 `total_bayar`, 
 `cabang_agen`, 
 `asal_origin`, 
 `tujuan_destination`, 
 `kepada_consigne`, 
 `telp_hp`, 
 `dari_shipper`, 
 `jumlah_pieces`, 
 `berat_weight`, 
 `isi_kiriman_description`, 
 `catatan_instruction`, 
 `biaya_kiriman_chargers`, 
 `jumlah`, 
 `asuransi_admin`, 
 `nilai_declare_value`,
 `kode_kota_tujuan`,
 `jenis_layanan`
 )

values (
'$nomor_resi'
 ,'$tanggal_pengiriman'
 ,'$pengirim'
 ,'$no_telepon_pengirim'
 ,'$wilayah_pengiriman'
 ,'$alamat_lengkap_pengiriman'
 ,'$penerima'
 ,'$no_telepon_penerima'
 ,'$wilayah_tujuan'
 ,'$alamat_lengkap_tujuan'
 ,'$kategori'
 
 ,'$berat'
 ,'$tarif'
 ,'$keterangan_isi_paket'
 ,'$status'
 ,'$keterangan'
 ,'$total_bayar'
 ,'$cabang_agen'
 ,'$asal_origin'
 ,'$tujuan_destination'
 ,'$kepada_consigne'
 ,'$telp_hp'
 ,'$dari_shipper'
 ,'$jumlah_pieces'
 ,'$berat_weight'
 ,'$isi_kiriman_description'
 ,'$catatan_instruction'
 ,'$biaya_kiriman_chargers'
 ,'$jumlah'
 ,'$asuransi_admin'
 ,'$nilai_declare_value' 
 ,'$kode_kota_tujuan' 
 ,'$jenis_layanan' 

)");

if (isset($_POST['nomor_resi'])) {

    $linkHref = http_build_query($_POST);
}

if ($query) {
    ?>
    <script>
    </script>
    <?php
} else {
    die ("GAGAL DIPROSES: " . mysql_error());
}

?>



<script>
    alert('Data berhasil Diproses.');
    window.location.href = 'index.php?p=pengiriman'

</script>