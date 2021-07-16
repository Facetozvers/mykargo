<?php include 'admin/include/koneksi/koneksi.php';


$id_pelanggan=$_COOKIE['kodene'];
$nama=$_POST['nama'];
$no_telepon=$_POST['no_telepon'];

$alamat_lengkap=$_POST['alamat_lengkap'];

$query=mysql_query("update data_pelanggan set 
nama='$nama',
no_telepon='$no_telepon',

alamat_lengkap='$alamat_lengkap'
where id_pelanggan='$id_pelanggan' ") or die (mysql_error());

if($query){
    setcookie('nama', $nama, time() + (6000 * 6000), '/' );
    ?>
    <script>
    alert('Profile berhasil diubah!');
    location.href = "index.php?p=edit_profile"</script>
    <?php
}
else
{
	echo "GAGAL DIPROSES";
}
?>