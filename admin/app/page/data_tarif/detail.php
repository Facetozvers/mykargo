
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
			Detail data&nbsp;tarif
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
			$sql=mysql_query("SELECT * FROM data_tarif where id_tarif = '$proses'");
			$data=mysql_fetch_array($sql);
			?>
			   <tr>
				<td class="clleft" width="25%">id&nbsp;tarif</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['id_tarif']; ?></td>	
			   </tr>
			   
			   <tr>
				<td class="clleft" width="25%">Dari</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['dari']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Tujuan</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['tujuan']; ?></td>	
			   </tr>
<tr>
				<td class="clleft" width="25%">Tarif&nbsp;biasa</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['tarif_biasa']; ?></td>
			   </tr>
<tr>
				<td class="clleft" width="25%">Estimasi&nbsp;waktu&nbsp;pengiriman</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['estimasi_waktu_pengiriman']; ?></td>	
			   </tr>

    <tr>
				<td class="clleft" width="25%">tarif cepat</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['tarif_cepat']; ?></td>
			   </tr>

    <tr>
				<td class="clleft" width="25%">Estimasi&nbsp;waktu&nbsp;pengiriman Biasa</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['estimasi_waktu_pengiriman_biasa']; ?></td>
			   </tr>

    <tr>
				<td class="clleft" width="25%">tarif cargo</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['tarif_cargo']; ?></td>
			   </tr>

    <tr>
				<td class="clleft" width="25%">Estimasi&nbsp;waktu&nbsp;pengiriman Cargo</td>
				<td class="clleft" width="2%">:</td>
				<td class="clleft"><?php echo $data['estimasi_waktu_pengiriman_cargo']; ?></td>
			   </tr>

				
	
</tbody>
</table>
</div>
</div>