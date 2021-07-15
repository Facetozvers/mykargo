<body>
<br>
<a href="<?php index(); ?>?p=tambah">
    <?php btn_tambah('Input Pengiriman'); ?> 
</a>

<a target="blank"
   href="cetak.php?berdasarkan=data_pengiriman&jenis=xls&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
    <?php btn_export('Export Excel'); ?>
</a>

<a target="blank"
   href="cetak.php?berdasarkan=data_pengiriman&jenis=print&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
    <?php btn_cetak('Cetak'); ?>
</a>

<a href="<?php index(); ?>?p=pengiriman">
  <?php btn_refresh('Refresh'); ?> 
</a>
<br>
<br>

<div style="overflow-x:auto;">
    <table <?php tabel(100, '%', 1, 'left'); ?> >
        <tr>
            <th>Action</th>
            <th>No</th>
            <th>Nomor&nbsp;resi</th>
            <th align="center" class="th_border cell">Tanggal&nbsp;pengiriman</th>
            <th align="center" class="th_border cell">Pengirim</th>
            <th align="center" class="th_border cell">No&nbsp;telepon&nbsp;pengirim</th>
            <th align="center" class="th_border cell">Wilayah&nbsp;pengiriman</th>
            <th align="center" class="th_border cell">Alamat&nbsp;lengkap&nbsp;pengiriman</th>
            <th align="center" class="th_border cell">Penerima</th>
            <th align="center" class="th_border cell">No&nbsp;telepon&nbsp;penerima</th>
            <th align="center" class="th_border cell">Wilayah&nbsp;tujuan</th>
            <th align="center" class="th_border cell">Alamat&nbsp;lengkap&nbsp;tujuan</th>
            <th align="center" class="th_border cell">Kategori</th>
            <th align="center" class="th_border cell">Berat</th>
            <th align="center" class="th_border cell">Jenis Layanan</th>
            <th align="center" class="th_border cell">Tarif</th>
            <th align="center" class="th_border cell">Keterangan&nbsp;isi&nbsp;paket</th>
            <th align="center" class="th_border cell">Keterangan</th>
            <th align="center" class="th_border cell">Total&nbsp;bayar</th>
            <th align="center" class="th_border cell">Asuransi Admin</th>
            <th align="center" class="th_border cell">Nilai Declare / Value</th>
        </tr>

        <tbody>
        <?php
        $no = 0;
        $startRow = ($page - 1) * $dataPerPage;
        $no = $startRow;

        $id_pelanggan = $_COOKIE['kodene'];
        $nama = baca_database("","nama","select * from data_pelanggan where id_pelanggan = '$id_pelanggan'");

        if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
            $berdasarkan = mysql_real_escape_string($_GET['Berdasarkan']);
            $isi = mysql_real_escape_string($_GET['isi']);
            $querytabel = "SELECT * FROM data_pengiriman where $berdasarkan like '%$isi%' and pengirim='$nama' LIMIT $startRow ,$dataPerPage";
            $querypagination = "SELECT COUNT(*) AS total FROM data_pengiriman where $berdasarkan like '%$isi%'  and pengirim='$nama'";
        } else {
            $querytabel = "SELECT * FROM data_pengiriman  where pengirim='$nama' LIMIT $startRow ,$dataPerPage";
            $querypagination = "SELECT COUNT(*) AS total FROM data_pengiriman  where pengirim='$nama'";
        }
        $proses = mysql_query($querytabel);
        while ($data = mysql_fetch_array($proses)) { ?>
            <tr class="event2">
                <td class="th_border cell" align="center" width="200">
                    <table border="0">
                        <tr>
                            <!-- <td>
                                <a href="<?php index(); ?>?input=detail&proses=<?= encrypt($data['nomor_resi']); ?>">
                                    <?php btn_detail('Detail'); ?></a>
                            </td>
                            <td>
                                <a href="<?php index(); ?>?input=edit&proses=<?= encrypt($data['nomor_resi']); ?>">
                                    <?php btn_edit('Update Status'); ?></a>
                            </td>
                            <td>
                                <a href="<?php index(); ?>?input=hapus&proses=<?= encrypt($data['nomor_resi']); ?>">
                                    <?php btn_hapus('Hapus');?></a>
                            </td> -->
<!-- 
                            <td>
                                <a href="cetak_resi_ulang.php?<?= http_build_query($data); ?>" class="btn btn-success btn-xs">
                                    Cetak Resi</a>
                            </td> -->

                            <td>
                                <a href="?p=tracking&no_resi=<?php echo encrypt($data['nomor_resi']); ?>" class="btn btn-primary btn-xs">
                                    Tracking Pengiriman</a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td align="center" width="50"><?php $no = (($no + 1));
                    echo $no; ?></td>
                <td align="left"><?php echo $data['nomor_resi']; ?>
                <br>
               <font color='orange'>Status : <?php echo $data['status']; ?></font> 
                
                </td>

                <td align="center"><?php echo(format_indo($data['tanggal_pengiriman'])); ?></td>
                <td align="center"><?php echo($data['pengirim']); ?></td>
                <td align="center"><?php echo($data['no_telepon_pengirim']); ?></td>
                <td align="center"><?php echo($data['wilayah_pengiriman']); ?></td>
                <td align="center"><?php echo($data['alamat_lengkap_pengiriman']); ?></td>
                <td align="center"><?php echo($data['penerima']); ?></td>
                <td align="center"><?php echo($data['no_telepon_penerima']); ?></td>
                <td align="center"><?php echo($data['wilayah_tujuan']); ?></td>
                <td align="center"><?php echo($data['alamat_lengkap_tujuan']); ?></td>
                <td align="center"><?php echo($data['kategori']); ?></td>
                <td align="center"><?php echo($data['berat']); ?></td>
                <td align="center"><?php echo($data['jenis_layanan']); ?></td>
                <td align="center"><?php echo rupiah($data['tarif']); ?></td>
                <td align="center"><?php echo(($data['keterangan_isi_paket'])); ?></td>
                <td align="center"><?php echo(($data['keterangan'])); ?></td>
                <td align="center"><?php echo(rupiah($data['total_bayar'])); ?></td>
                <td align="center"><?php echo(($data['asuransi_admin'])); ?></td>
                <td align="center"><?php echo(($data['nilai_declare_value'])); ?></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php Pagination($page, $dataPerPage, $querypagination); ?>

</body>