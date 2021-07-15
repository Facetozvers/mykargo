<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_driver'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}

$id_driver = xss($_POST['id_driver']);
$nama = xss($_POST['nama']);
$alamat = xss($_POST['alamat']);
$no_telepon = xss($_POST['no_telepon']);
$no_ktp = xss($_POST['no_ktp']);
$detail_informasi_driver = xss($_POST['detail_informasi_driver']);


$query = mysql_query("update data_driver set 
nama='$nama',
alamat='$alamat',
no_telepon='$no_telepon',
no_ktp='$no_ktp',
detail_informasi_driver='$detail_informasi_driver'

where id_driver='$id_driver' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
