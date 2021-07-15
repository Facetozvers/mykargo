<?php 
function location() { return "admin"; }
include 'include/all_include.php'; 
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR']; 
$useragent = $_SERVER['HTTP_USER_AGENT'];
$token = sha1($ip.$useragent.$key);
$token = crypt($token, $key);


if (empty($_COOKIE['jenenge']))
{
	?>
	<script>location.href = "login/<?php index();?>";</script>
	<?php
	die();
}
else
{
	?>
	<script>location.href = "<?php admin();?>/index.php";</script>
	<?php
}
?>

<!--<a></a>-->
