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


$id_informasi=id_otomatis("data_informasi","id_informasi","10");
$judul=xss($_POST['judul']);
$tanggal=xss($_POST['tanggal']);
$isi=xss($_POST['isi']);
$foto= upload('foto');



$query=mysql_query("insert into data_informasi values (
'$id_informasi'
 ,'$judul'
 ,'$tanggal'
 ,'$isi'
 ,'$foto'

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