<?php include '../../../include/all_include.php';

if (!isset($_POST['id_wilayah']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 

$id_wilayah=xss($_POST['id_wilayah']);

$wilayah=$_POST['wilayah'];
$wilayah_lama = baca_database("data_tarif", "wilayah", "select wilayah from data_wilayah where id_wilayah = '$id_wilayah'");

$query=mysql_query("update data_wilayah set 

wilayah='$wilayah'
where id_wilayah='$id_wilayah' ") or die (mysql_error());

$query2 = mysql_query("update data_tarif set 
dari='$wilayah'
where dari='$wilayah_lama' ") or die (mysql_error());


if(!$query2) {
    die(mysql_error());
}

$query3 = mysql_query("update data_tarif set 

tujuan='$wilayah'
where tujuan='$wilayah_lama'") or die (mysql_error());

if(!$query3) {
    die(mysql_error());
}

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