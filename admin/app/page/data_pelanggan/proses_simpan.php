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


$id_pelanggan=id_otomatis("data_pelanggan","id_pelanggan","10");
$nama=xss($_POST['nama']);
$no_telepon=xss($_POST['no_telepon']);
$alamat_lengkap=xss($_POST['alamat_lengkap']);



$query=mysql_query("insert into data_pelanggan values (
'$id_pelanggan'
 ,'$nama'
 ,'$no_telepon'
 ,'$alamat_lengkap'

)");

if($query){
?>
<script>location.href = "<?php index(); ?>?input=popup_tambah"; </script>
<?php
}
else
{
	echo "GAGAL DIPROSES";
}
?>