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


$id_tracking_pengiriman = id_otomatis("data_tracking_pengiriman", "id_tracking_pengiriman", "10");
              $nomor_resi=xss($_POST['nomor_resi']);
              $id_driver=xss($_POST['id_driver']);
              $lat=xss($_POST['lat']);
              $lng=xss($_POST['lng']);
              $keterangan=xss($_POST['keterangan']);


$query = mysql_query("insert into data_tracking_pengiriman values (
'$id_tracking_pengiriman'
 ,'$nomor_resi'
 ,'$id_driver'
 ,'$lat'
 ,'$lng'
 ,'$keterangan'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?no_resi=<?php echo encrypt($nomor_resi);?>";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
