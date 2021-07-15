<?php include '../../../include/all_include.php';

$id_manifest_asal=id_otomatis("data_manifest_asal","id_manifest_asal","10");
$awb=xss($_POST['awb']);
$qty=xss($_POST['qty']);
$kg=xss($_POST['kg']);
$isi_paketan=xss($_POST['isi_paketan']);
$status=xss($_POST['status']);
$alasan_status=xss($_POST['alasan_status']);

$query=mysql_query("insert into data_manifest_asal values (
'$id_manifest_asal'
 ,'$awb'
 ,'$qty'
 ,'$kg'
 ,'$isi_paketan'
 ,'$status'
 ,'$alasan_status'

)");

if($query){
?>
<script>location.href = "<?php index(); ?>?input=popup_tambah"; </script>
<?php
}
else
{
	echo "GAGAL DIPROSES" . mysql_error();
}
?>