<?php include '../../../include/all_include.php';

if (!isset($_POST['id_informasi']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 

$id_informasi=xss($_POST['id_informasi']);
$judul=xss($_POST['judul']);
$tanggal=xss($_POST['tanggal']);
$isi=xss($_POST['isi']);

$foto=$_POST['foto'];

$query=mysql_query("update data_informasi set 
judul='$judul',
tanggal='$tanggal',
isi='$isi',

foto='$foto'
where id_informasi='$id_informasi' ") or die (mysql_error());

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