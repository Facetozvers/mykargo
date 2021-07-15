
	<center><h3><?php sambutan(); ?></h3>
	<br>
	<img width="700" src="<?php echo $background; ?>">
	</center>
	<br>
	<?php
    $siapa = $_COOKIE['siapa'];
    if ($siapa == "admin")
    {?>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"></p>
                    <a href="../data_pengiriman/index.php?input=tambah"><p class="text-muted">Tambah Pengiriman</p></a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"></p>
					<a href="../data_pengiriman/index.php"><p class="text-muted">Lihat Pengiriman</p></a>
					
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"></p>
					<a href="../data_pengiriman/index.php"><p class="text-muted">Cek <br>Pengiriman</p></a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"></p>
					<a href="../data_pengiriman/index.php?input=cetak"><p class="text-muted">Laporan Pengiriman</p></a>
                </div>
             </div>
		     </div>
			</div>
			
			          
<?php $sql = "select table_name from information_schema.tables where table_schema='$database'"; $result = @mysql_query($sql); while($row = @mysql_fetch_array($result)) { $tabel = $row[0]; 

if (
    $tabel == "data_manifest_kurir" 
    || $tabel == "data_manifest_tujuan" 
    || $tabel == "data_manifest_asal"
    || $tabel == "data_admin"
    || $tabel == "data_berita"
    || $tabel == "data_profil"
    || $tabel == "data_buku_tamu"
    || $tabel == "data_informasi"
    || $tabel == "data_kategori"

    ) {}
else
{
?>
		
                        <div class="col-md-3 col-sm-12 col-xs-12">  
						 <div class="panel panel-primary text-center no-boder bg-color-blue">
                        <div class="panel-body">
                            <i class="fa fa-info-circle fa-5x"></i>
                            <h3><?php total($tabel,""); ?></h3>
                        </div>
                        <div class="panel-footer back-footer-blue">
                            <font color="black"><?php echo ucwords(str_replace("_"," ",$tabel));?></font>
							<br>
							<a href="../<?php echo $tabel;?>">Detail</a>
                        </div>
						</div>
						</div>   
<?php } ?>		
<?php } ?>		
<?php } ?>		