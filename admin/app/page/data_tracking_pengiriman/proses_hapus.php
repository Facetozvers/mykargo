<?php include '../../../include/all_include.php';

if (!isset($_GET['proses']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 
$proses =  (mysql_real_escape_string($_GET['proses']));
$nomor_resi = baca_database("","nomor_resi","select * from data_tracking_pengiriman where id_tracking_pengiriman='$proses'");

$query=mysql_query("delete from data_tracking_pengiriman where id_tracking_pengiriman='$proses'");


if($query){
?>
    <script>location.href = "<?php index(); ?>?no_resi=<?php echo encrypt($nomor_resi);?>";</script>
<?php
}
else
{
	echo "GAGAL DIPROSES";
}
?>
