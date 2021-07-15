<?php include '../../../include/all_include.php';

if (!isset($_POST['id_tarif']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 

$id_tarif=xss($_POST['id_tarif']);
$dari=xss($_POST['dari']);
$tujuan=xss($_POST['tujuan']);
$id_kategori=xss($_POST['id_kategori']);
$tarif_biasa=xss($_POST['tarif_biasa']);

$estimasi_waktu_pengiriman_biasa=$_POST['estimasi_waktu_pengiriman_biasa'];
$tarif_cepat=$_POST['tarif_cepat'];
$estimasi_waktu_pengiriman_cepat=$_POST['estimasi_waktu_pengiriman_cepat'];
$tarif_cargo=$_POST['tarif_cargo'];
$estimasi_waktu_pengiriman_cargo=$_POST['estimasi_waktu_pengiriman_cargo'];

$query=mysql_query("update data_tarif set 
dari='$dari',
tujuan='$tujuan',
id_kategori='$id_kategori',
tarif_biasa='$tarif_biasa',
tarif_cepat='$tarif_cepat',
tarif_cargo='$tarif_cargo',

estimasi_waktu_pengiriman_biasa='$estimasi_waktu_pengiriman_biasa',
estimasi_waktu_pengiriman_cepat='$estimasi_waktu_pengiriman_cepat',
estimasi_waktu_pengiriman_cargo='$estimasi_waktu_pengiriman_cargo'
                      
where id_tarif='$id_tarif' ") or die (mysql_error());

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