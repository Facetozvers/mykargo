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

$id_profil=xss($_POST['id_profil']);

$home= preg_replace("/\<pre\>|\<\/pre\>/", "", $_POST['home']);
$profil= preg_replace("/\<pre\>|\<\/pre\>/", "", $_POST['profil']);

$query=mysql_query("update data_profil set 

profil='$profil',
home='$home'

where id_profil='$id_profil' ") or die (mysql_error());

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