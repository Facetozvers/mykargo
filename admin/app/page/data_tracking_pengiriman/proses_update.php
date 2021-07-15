<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_tracking_pengiriman'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}

$id_tracking_pengiriman = xss($_POST['id_tracking_pengiriman']);
$nomor_resi = xss($_POST['nomor_resi']);
$id_driver = xss($_POST['id_driver']);
$lat = xss($_POST['lat']);
$lng = xss($_POST['lng']);
$keterangan = xss($_POST['keterangan']);


$query = mysql_query("update data_tracking_pengiriman set 
nomor_resi='$nomor_resi',
id_driver='$id_driver',
lat='$lat',
lng='$lng',
keterangan='$keterangan'

where id_tracking_pengiriman='$id_tracking_pengiriman' ") or die(mysql_error());

if ($query) {
    ?>
        <script>location.href = "<?php index(); ?>?no_resi=<?php echo encrypt($nomor_resi);?>";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
