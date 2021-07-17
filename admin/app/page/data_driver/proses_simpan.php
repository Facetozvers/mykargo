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


$id_driver = id_otomatis("data_driver", "id_driver", "10");
$nama=xss($_POST['nama']);
$alamat=xss($_POST['alamat']);
$no_telepon=xss($_POST['no_telepon']);
$no_ktp=xss($_POST['no_ktp']);
$detail_informasi_driver=xss($_POST['detail_informasi_driver']);
$username=xss($_POST['username']);
$password=md5($_POST['password']);

$query = mysql_query("insert into data_driver values (
'$id_driver'
 ,'$nama'
 ,'$alamat'
 ,'$no_telepon'
 ,'$no_ktp'
 ,'$detail_informasi_driver'
 ,'$username'
 ,'$password'
)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
