
<head>
<style type="text/css">
.auto-style1 {
	text-align: center;
	background-color: #B0B0A0;
}
.auto-style2 {
	text-align: center;
}
.auto-style3 {
	text-align: center;
	background-color: #CCCCA0;
}
.auto-style4 {
	text-align: center;
	background-color: #B8BEB8;
}
.auto-style5 {
	text-align: center;
	background-color: #A3E3A3;
}
</style>
</head>

<?php if(empty($p)) { header("Location: index.php?p=home"); die(); } ?>


<?php 

echo baca_database("data_profil","profil","");

?>
	