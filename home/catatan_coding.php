<?php 
//BERITA
berita($tabel,$id,$tanggal,$judul,$foto,$isi);

//DETAIL BERITA
detail_berita($tabel,$id,$tanggal,$judul,$foto,$isi,$proses);

//PRODUK
produk($tabel,$id,$nama,$foto,$kategori,$harga,$stok,$namatombol);

//KATEGORI
kategori($tabel,$id,$nama,$foto,$kategori,$harga,$stok,$namatombol);

//DETAIL PRODUK
detail($tabel,$id,$nama,$foto,$kategori,$harga,$stok,$keterangan,$proses,$namatombol);

//SLIDESHOW
slideshow();

//GALERY
galery($tabel,$id,$judul,$foto,$keterangan);

//KONTAK
kontak($nama_perusahaan,$no_telepon,$alamat,$longitude,$latitude);

?>