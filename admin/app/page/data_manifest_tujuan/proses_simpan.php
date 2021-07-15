<?php include '../../../include/all_include.php';

if (!isset($_POST['id_manifest_tujuan']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 


$id_manifest_tujuan=id_otomatis("data_manifest_tujuan","id_manifest_tujuan","10");
$awb=xss($_POST['awb']);
$qty=xss($_POST['qty']);
$kg=xss($_POST['kg']);
$isi_paketan=xss($_POST['isi_paketan']);
$status=xss($_POST['status']);
$alasan_status=xss($_POST['alasan_status']);

$query=mysql_query("insert into data_manifest_tujuan values (
'$id_manifest_tujuan'
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