
<a href="<?php index(); ?>">
<?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
<div class="content-box-header" style="height: 39px">Detail
<h3 style="cursor: s-resize;"></h3></div>
<div class="content-box-content">
<table <?php tabel_in(100,'%',0,'center');  ?>>		
	<tbody>
	<tr class="event3">
		<td class="clleft" colspan="3">
			Detail data&nbsp;pengiriman
		</td>
	</tr>	
			<?php

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
			$proses = decrypt(mysql_real_escape_string($_GET['proses']));
			$sql=mysql_query("SELECT * FROM data_pengiriman where nomor_resi = '$proses'");
			$data=mysql_fetch_array($sql);
			?>
			   <tr>
				<td class="clleft" width="25%">nomor&nbsp;resi</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['nomor_resi']; ?></td>	
			   </tr>
			   
			   <tr>
				<td class="clleft" width="25%">Tanggal&nbsp;pengiriman</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo (format_indo($data['tanggal_pengiriman'])); ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Pengirim</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['pengirim']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">No&nbsp;telepon&nbsp;pengirim</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['no_telepon_pengirim']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Wilayah&nbsp;pengiriman</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['wilayah_pengiriman']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Alamat&nbsp;lengkap&nbsp;pengiriman</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['alamat_lengkap_pengiriman']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Penerima</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['penerima']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">No&nbsp;telepon&nbsp;penerima</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['no_telepon_penerima']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Wilayah&nbsp;tujuan</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['wilayah_tujuan']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Alamat&nbsp;lengkap&nbsp;tujuan</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['alamat_lengkap_tujuan']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Kategori</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['kategori']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Berat</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['berat']; ?></td>	
			   </tr>

<tr>
				<td class="clleft" width="25%">Jenis Layanan</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['jenis_layanan']; ?></td>
			   </tr>
<tr>
				<td class="clleft" width="25%">Tarif</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['tarif']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Keterangan&nbsp;isi&nbsp;paket</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo (substr($data['keterangan_isi_paket'],0,100)); ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Status</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['status']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Keterangan</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo (substr($data['keterangan'],0,100)); ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Total&nbsp;bayar</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo (rupiah($data['total_bayar'])); ?></td>	
			   </tr>

				
	
</tbody>
</table>
</div>
</div>