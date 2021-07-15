<?php include '../../../include/all_include.php';

if (!isset($_POST['nomor_resi']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 

$nomor_resi=xss($_POST['nomor_resi']);
$status=xss($_POST['status']);
$keterangan=xss($_POST['keterangan']);



$query=mysql_query("update data_pengiriman set 
status='$status',
keterangan='$keterangan'
where nomor_resi='$nomor_resi' ") or die (mysql_error());

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