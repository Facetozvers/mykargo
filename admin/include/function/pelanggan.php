<?php
include '../koneksi/koneksi.php';
$username = $_POST['username'];

//mencari id_kategori
$result = mysql_query("SELECT * FROM data_pelanggan WHERE username='$username'");


if (mysql_num_rows($result) > 0){
    echo json_encode(true);
}
else{
    echo json_encode(false);
}
?>
