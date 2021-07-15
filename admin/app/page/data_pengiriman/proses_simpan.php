<?php 

include '../../../include/all_include.php';

//
// echo "<pre>";
// print_r($_POST); die;

$nomor_resi = id_otomatis("data_pengiriman", "nomor_resi", "10");
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
$status = "pengiriman";
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
$admin = $_COOKIE['name'];

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
 `jenis_layanan`,
 `admin`
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
 ,'$admin' 

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

extract($_GET);

//dd($_GET);
// -- START PRESET -- //
$template_document = new \PhpOffice\PhpWord\TemplateProcessor('cetak_resi_format.docx');

// atur header nya gann
$template_document->setValue('tujuan_destination', $wilayah_tujuan);
$template_document->setValue('asal', $wilayah_pengiriman);
$template_document->setValue('nomor_resi', $nomor_resi);
$template_document->setValue('kepada_consigne', $penerima);
$template_document->setValue('dari_shipper', $pengirim);
$template_document->setValue('kota', $wilayah_pengiriman);
$template_document->setValue('no_telepon_penerima', $no_telepon_penerima);
$template_document->setValue('no_telepon_pengirim', $no_telepon_pengirim);
$template_document->setValue('berat_weight', $berat);
$template_document->setValue('penerima', $penerima);
$template_document->setValue('jam_time', $jam_time);
$template_document->setValue('pengirim', $pengirim);
$template_document->setValue('tanggal_date', date('d/m/Y', strtotime($tanggal_pengiriman)));
$template_document->setValue('isi_kiriman_description', $keterangan_isi_paket);
$template_document->setValue('jumlah_pieces', "$jumlah_pieces");
$template_document->setValue('cabang_agen', $cabang_agen);
//dd($wilayah_tujuan);
$template_document->setValue('wilayah_tujuan', $wilayah_tujuan);
$template_document->setValue('jumlah_pieces', $jumlah_pieces);
$template_document->setValue('tarif', $tarif);
$template_document->setValue('asuransi_admin', $asuransi_admin);
$template_document->setValue('jumlah', $total_bayar);
$template_document->setValue('kode_kota_tujuan', $kode_kota_tujuan);
$template_document->setValue('nilai_declare_value', $nilai_declare_value);

if(request()->jenis_layanan == 'Biasa') {

    $template_document->setValue('is_biasa', "x");
    $template_document->setValue('is_cepat', "");
    $template_document->setValue('is_cargo', "");
}

if(request()->jenis_layanan == 'cepat') {

    $template_document->setValue('is_biasa', "");
    $template_document->setValue('is_cepat', "x");
    $template_document->setValue('is_cargo', "");
}


if(request()->jenis_layanan == 'Cargo') {

    $template_document->setValue('is_biasa', "");
    $template_document->setValue('is_cepat', "");
    $template_document->setValue('is_cargo', "x");
}

file_put_contents("barcode.png", file_get_contents("https://bwipjs-api.metafloor.com/?bcid=code128&text=$nomor_resi"));
$template_document->setImageValue('barcode', array('path' => "barcode.png", 'width' => 145, 'height' => 65, 'ratio' => false));
//save template with table
$template_document->saveAs("cetak_resi.docx");

unlink("barcode.png");

?>



<!--<frameset rows="*,39" border=0 frameborder=no framespacing=0>-->
<!--    <frame src="UNTUK%20JENUS_files/sheet003.php?--><?//= $linkHref; ?><!--" name="frSheet">-->
<!--    <noframes>-->
<!--        <body>-->
<!--        <p>This page uses frames, but your browser doesn't support them.</p>-->
<!--        </body>-->
<!--    </noframes>-->
<!--</frameset>-->
<!--</html>-->

<script>
    window.location.href = './cetak_resi.docx'

    setTimeout(function() {

            window.location.href = './index.php'
    }, 3000);

</script>