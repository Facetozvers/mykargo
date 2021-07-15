<?php include '../../../include/all_include.php';

if (!isset($_POST['id_buku_tamu']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 

$id_buku_tamu=xss($_POST['id_buku_tamu']);
$tanggal=xss($_POST['tanggal']);
$nama=xss($_POST['nama']);
$email=xss($_POST['email']);
$no_telepon=xss($_POST['no_telepon']);

$komentar_dan_saran=$_POST['komentar_dan_saran'];

$query=mysql_query("update data_buku_tamu set 
tanggal='$tanggal',
nama='$nama',
email='$email',
no_telepon='$no_telepon',

komentar_dan_saran='$komentar_dan_saran'
where id_buku_tamu='$id_buku_tamu' ") or die (mysql_error());

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