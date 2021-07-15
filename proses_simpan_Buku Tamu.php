<?php 

function location() { return "home"; }
include 'admin/include/all_include.php';


$id_buku_tamu=xss($_POST['id_buku_tamu']);
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
<script>
alert("Berhasil Terkirim");
location.href = "<?php index(); ?>?p=home"; </script>
<?php
}
else
{
	echo "GAGAL DIPROSES";
}
?>