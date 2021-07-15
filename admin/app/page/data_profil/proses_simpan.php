<?php include '../../../include/all_include.php';

if (!isset($_POST['id_profil']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
}

$id_profil=id_otomatis("data_profil","id_profil","10");
$profil=xss($_POST['profil']);



$query=mysql_query("insert into data_profil values (
'$id_profil'
 ,'$profil'

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