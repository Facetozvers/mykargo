<?php
if(isset($_POST["login"])){ 
include 'admin/include/koneksi/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$username = mysql_real_escape_string($username);
$password = md5(mysql_real_escape_string($password));
$r = mysql_query("select * from data_pelanggan where password='$password' and username='$username'");
$data = mysql_fetch_array ($r);
if (empty($username) && empty($password)) {
	echo "<script>alert('Gagal');</script>";	
	?><script>location.href = "<?php index();?>";</script><?php
} else if (empty($username)) {
	echo "<script>alert('Gagal');</script>";	
	?><script>location.href = "<?php index();?>";</script><?php
} else if (empty($password)) {
	echo "<script>alert('Gagal');</script>";	
	?><script>location.href = "<?php index();?>";</script><?php
}else
if (mysql_num_rows($r) == 1) 
{

	
		$kodene=($data['id_pelanggan']);
		setcookie('kodene', $kodene, time() + (6000 * 6000), '/');
		setcookie('nama', $data['nama'], time() + (6000 * 6000), '/' );
		$ip = $_SERVER['REMOTE_ADDR']; 
		$useragent = $_SERVER['HTTP_USER_AGENT'];
	
		
		echo "<script> window.location = 'index.php?p=home'</script>";		
} 
else 
{
	
	echo "<script>alert('Gagal Login');</script>";	
	?><script>location.href = "index.php?p=login";</script><?php
}
}

if (isset($_GET['action']))
{
	$action = $_GET['action'];
	 if ($action=="logout")
    {
        error_reporting();
        setcookie('kodene', '', 0, '/');
		setcookie('token_user', '', 0, '/');
        ?>
        <script>location.href = "index.php?p=login";</script>
        <?php
    }  
}
 ?>