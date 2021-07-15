<?php 
if (isset($_GET['input']))
{   
	echo "<h3> Cetak Laporan "; tabelnomin(); echo "</h3>";
	?>
	<link rel="stylesheet" type="text/css" href="../../../data/cssjs/cetak/style_new.css">
	<link rel="stylesheet" type="text/css" href="../../../data/cssjs/cetak/style_new2.css">
	<?php
	action_cetak("data_pengiriman"); 
}
else
{
	function location() { return "cetak"; }
	include '../../../include/all_include.php';
	proses_action_cetak("data_pengiriman");
?>
	<link rel="stylesheet" type="text/css" href="../../../data/cssjs/cetak/style_new.css">
	<link rel="stylesheet" type="text/css" href="../../../data/cssjs/cetak/style_new2.css">
	

<!-- HEADER -->
<table border="0" style="width: 100%">
	<?php if (isset($_GET['export']))
	{
	}
	else
	{	
	?>
    <tr>
        <td class="auto-style1" rowspan="3" width="101">
            <img alt="" height="100" src="<?php echo $logo_laporan1; ?>" width="100"></td>

        <td class="auto-style1">
            <center>
                <h2 class="auto-style1"><?php echo $judul; ?></h2>
            </center>
        </td>

        <td class="auto-style1" rowspan="3" width="101">
            <img alt="" height="100" src="<?php echo $logo_laporan2; ?>" width="100"></td>
    </tr>
	<?php } ?>

    <tr>
        <td class="auto-style2">
            <center>
                <strong>LAPORAN

                    <?php
			$tabelnya = "data_pengiriman";
			$tabelnya = str_replace("_"," ",$tabelnya);
			$tabelnya = str_replace("data","",$tabelnya);
			$tabelnya = strtoupper($tabelnya);
			echo $tabelnya; ?>

                </strong>
            </center>
        </td>
    </tr>

    <tr>
        <td class="auto-style2"><?php echo $alamat ; ?></td>
    </tr>
</table>
<!-- HEADER -->

<!-- BODY -->
<table width="100%"  class="tblcms2">
    <tr>
        <th class="th_border cell">No</th>
        <th class="th_border cell">nomor&nbsp;resi</th>
        <th class="th_border cell"  >tanggal&nbsp;pengiriman</th>
<th class="th_border cell"  >pengirim</th>
<th class="th_border cell"  >no&nbsp;telepon&nbsp;pengirim</th>
<th class="th_border cell"  >wilayah&nbsp;pengiriman</th>
<th class="th_border cell"  >alamat&nbsp;lengkap&nbsp;pengiriman</th>
<th class="th_border cell"  >penerima</th>
<th class="th_border cell"  >no&nbsp;telepon&nbsp;penerima</th>
<th class="th_border cell"  >wilayah&nbsp;tujuan</th>
<th class="th_border cell"  >alamat&nbsp;lengkap&nbsp;tujuan</th>
<th class="th_border cell"  >kategori</th>
<th class="th_border cell"  >berat</th>
<th class="th_border cell"  >Jenis Layanan</th>
<th class="th_border cell"  >tarif</th>
<th class="th_border cell"  >keterangan&nbsp;isi&nbsp;paket</th>
<th class="th_border cell"  >status</th>
<th class="th_border cell"  >keterangan</th>
<th class="th_border cell"  >total&nbsp;bayar</th>

    </tr>

    <tbody>
    <?php
				$no = 0;
				if (isset($_GET['isi']) && !empty($_GET['isi']))
				{
					//BERDASARKAN
					$Berdasarkan = mysql_real_escape_string($_GET['Berdasarkan']);
					$isi =  mysql_real_escape_string($_GET['isi']);
					echo '<center> Cetak berdasarkan <b>'.$Berdasarkan.'</b> : <b>'.$isi.'</b></center>';
					$querytabel="SELECT * FROM data_pengiriman where $Berdasarkan like '%$isi%'";
				}
				else if (isset($_GET['tanggal1']) && !empty($_GET['tanggal1']))
				{
					//PERIODE
					$Berdasarkan =  mysql_real_escape_string($_GET['Berdasarkan']);
					$tanggal1 =  mysql_real_escape_string($_GET['tanggal1']);
					$tanggal2 =  mysql_real_escape_string($_GET['tanggal2']);
					$tanggal1_indo = format_indo($tanggal1);
					$tanggal2_indo = format_indo($tanggal2);
					echo '<center> Cetak Berdasarkan <b>'.$Berdasarkan.'</b> Dari Tanggal <b>'.$tanggal1_indo.'</b> s/d <b>'.$tanggal2_indo.'</b></center>';
					$querytabel="SELECT * FROM data_pengiriman where ($Berdasarkan BETWEEN '$tanggal1' AND '$tanggal2')";
				
				}
				else
				{
					//SEMUA
					$querytabel="SELECT * FROM data_pengiriman";
				}
				$proses = mysql_query($querytabel);
				while ($data = mysql_fetch_array($proses)) 
			{
			?>
        <tr class="event2">
            <td align="center" width="50"><?php $no = $no +1; echo $no; ?></td>
            <td align="center"><?php echo $data['nomor_resi']; ?></td>

            <td align="center"><?php echo (format_indo($data['tanggal_pengiriman'])); ?></td>
<td align="center"><?php echo ($data['pengirim']); ?></td>
<td align="center"><?php echo ($data['no_telepon_pengirim']); ?></td>
<td align="center"><?php echo ($data['wilayah_pengiriman']); ?></td>
<td align="center"><?php echo ($data['alamat_lengkap_pengiriman']); ?></td>
<td align="center"><?php echo ($data['penerima']); ?></td>
<td align="center"><?php echo ($data['no_telepon_penerima']); ?></td>
<td align="center"><?php echo ($data['wilayah_tujuan']); ?></td>
<td align="center"><?php echo ($data['alamat_lengkap_tujuan']); ?></td>
<td align="center"><?php echo ($data['kategori']); ?></td>
<td align="center"><?php echo ($data['berat']); ?></td>
<td align="center"><?php echo ($data['jenis_layanan']); ?></td>
<td align="center"><?php echo ($data['tarif']); ?></td>
<td align="center"><?php echo (substr($data['keterangan_isi_paket'],0,100)); ?></td>
<td align="center"><?php echo ($data['status']); ?></td>
<td align="center"><?php echo (substr($data['keterangan'],0,100)); ?></td>
<td align="center"><?php echo (rupiah($data['total_bayar'])); ?></td>

        </tr>
        <?php } ?>
    </tbody>
</table>
<!-- BODY -->

<!-- FOOTER -->
<p class="auto-style3"><?php echo $formatwaktu; ?>
</p>
<p class="auto-style3"><?php echo $ttd; ?></p>
<p class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
<p class="auto-style3"><?php echo $siapa ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
<p class="auto-style3"></p>

<?php } ?>