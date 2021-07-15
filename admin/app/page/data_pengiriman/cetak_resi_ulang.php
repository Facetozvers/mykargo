<?php

include '../../../include/all_include.php';

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

<script>
    window.location.href = './cetak_resi.docx'

    setTimeout(function() {

            window.location.href = './index.php'
    }, 3000);

</script>


