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


$id_buku_tamu=id_otomatis("data_buku_tamu","id_buku_tamu","10");
$tanggal=xss($_POST['tanggal']);
$nama=xss($_POST['nama']);
$email=xss($_POST['email']);
$no_telepon=xss($_POST['no_telepon']);
$komentar_dan_saran=xss($_POST['komentar_dan_saran']);



$query=mysql_query("insert into data_buku_tamu values (
'$id_buku_tamu'
 ,'$tanggal'
 ,'$nama'
 ,'$email'
 ,'$no_telepon'
 ,'$komentar_dan_saran'

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