
<br><br>

<div class="content-box">
<center>
    <h2>
        EDIT PROFILE
    </h2>
</center>
<form action="proses_edit_profile.php"  enctype="multipart/form-data"  method="post">
<div class="content-box-content">
<div id="postcustom">	
<table <?php tabel_in(100,'%',0,'center');  ?>>	
	<tbody>
	<?php
            $kodene = $_COOKIE["kodene"];
			$sql=mysql_query("SELECT * FROM data_pelanggan where id_pelanggan = '$kodene'");
			$data=mysql_fetch_array($sql);
			?>
			   
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Nama <span class="highlight"></span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input onkeypress='return h(event)' class=''   required="required" type="text" name="nama" id="nama" placeholder="Nama" value="<?php echo ($data['nama']); ?>">


		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >No&nbsp;Telepon <span class="highlight"></span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input onkeypress='return a(event)' class=''   required="required" type="text" name="no_telepon" id="no_telepon" placeholder="No&nbsp;Telepon" value="<?php echo ($data['no_telepon']); ?>">


		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Alamat&nbsp;Lengkap <span class="highlight"></span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<textarea class=''    required="required" type="text" name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat&nbsp;Lengkap" value="<?php echo ($data['alamat_lengkap']); ?>">
<?php echo $data['alamat_lengkap']?>
</textarea>
		
				</td>
			   </tr>
			   
	</tbody>
</table>
<div class="content-box-content">
<center>
<?php btn_update(' UPDATE'); ?>
</center>
</div>		
</div>
</div>
</form>
