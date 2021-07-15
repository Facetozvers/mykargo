<?php include '../../../include/all_include.php';

if (!isset($_POST['id_pelanggan']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 

$id_pelanggan=xss($_POST['id_pelanggan']);
$nama=xss($_POST['nama']);
$no_telepon=xss($_POST['no_telepon']);

$alamat_lengkap=$_POST['alamat_lengkap'];

$query=mysql_query("update data_pelanggan set 
nama='$nama',
no_telepon='$no_telepon',

alamat_lengkap='$alamat_lengkap'
where id_pelanggan='$id_pelanggan' ") or die (mysql_error());

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