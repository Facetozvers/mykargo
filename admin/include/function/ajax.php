<?php
include '../koneksi/koneksi.php';
$tabel = $_POST['tabel'];
$field = $_POST['field'];
$dari = $_POST['dari'];
$tujuan = $_POST['tujuan'];
$kategori = $_POST['kategori'];

//mencari id_kategori
$result = mysql_query("SELECT * FROM data_kategori WHERE kategori='$kategori'");

while ($row = mysql_fetch_array($result)) {
    $id_kategori = $row['id_kategori'];
    $harga_kategori = $row['harga'];
}

$querytabel="SELECT * FROM $tabel WHERE tujuan='$tujuan' and dari='$dari' and id_kategori='$id_kategori'";
$proses = mysql_query($querytabel);
$data = mysql_fetch_array($proses);
$data['harga_kategori'] = $harga_kategori;
echo json_encode($data);
?>
