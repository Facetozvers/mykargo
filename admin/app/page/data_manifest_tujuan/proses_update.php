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

$id_manifest_tujuan=$_POST['id_manifest_tujuan'];
$awb=xss($_POST['awb']);
$qty=xss($_POST['qty']);
$kg=xss($_POST['kg']);
$isi_paketan=xss($_POST['isi_paketan']);
$status=xss($_POST['status']);
$alasan_status=xss($_POST['alasan_status']);

$query=mysql_query("update data_manifest_tujuan set 
awb='$awb',
qty='$qty',
kg='$kg',
isi_paketan='$isi_paketan',
status='$status',
alasan_status='$alasan_status'

where id_manifest_tujuan='$id_manifest_tujuan' ") or die (mysql_error());

if($query){
?>
<script>location.href = "<?php index(); ?>?input=popup_edit"; </script>
<?php
}
else
{
	echo "GAGAL DIPROSES";
}
?>