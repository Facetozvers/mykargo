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


$id_tarif=id_otomatis("data_tarif","id_tarif","10");
$dari=xss($_POST['dari']);
$tujuan=xss($_POST['tujuan']);
$id_kategori=xss($_POST['id_kategori']);
$tarif_biasa=xss($_POST['tarif_biasa']);
$estimasi_waktu_pengiriman_biasa=xss($_POST['estimasi_waktu_pengiriman_biasa']);
$tarif_cepat=xss($_POST['tarif_cepat']);
$estimasi_waktu_pengiriman_cepat=xss($_POST['estimasi_waktu_pengiriman_cepat']);
$tarif_cargo=xss($_POST['tarif_cargo']);
$estimasi_waktu_pengiriman_cargo=xss($_POST['estimasi_waktu_pengiriman_cargo']);



$query=mysql_query("insert into data_tarif values (
'$id_tarif'
 ,'$dari'
 ,'$tujuan'
 ,'$id_kategori'
 ,'$tarif_biasa'
 ,'$estimasi_waktu_pengiriman_biasa'
 ,'$tarif_cepat'
 ,'$estimasi_waktu_pengiriman_cepat'
 ,'$tarif_cargo'
 ,'$estimasi_waktu_pengiriman_cargo'

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