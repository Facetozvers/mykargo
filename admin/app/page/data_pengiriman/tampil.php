<body>

<a href="<?php index(); ?>?input=tambah">
    <!-- <?php btn_tambah('Tambah'); ?> -->
</a>

<a target="blank"
   href="cetak.php?berdasarkan=data_pengiriman&jenis=xls&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
    <?php btn_export('Export Excel'); ?>
</a>

<a target="blank"
   href="cetak.php?berdasarkan=data_pengiriman&jenis=print&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
    <?php btn_cetak('Cetak'); ?>
</a>

<a href="<?php index(); ?>">
    <!-- <?php btn_refresh('Refresh'); ?> -->
</a>
<h3>Lihat Data Perstatus Pengiriman</h3>
<a class="btn btn-info" href="<?php index(); ?>">
    Lihat Semua Data
</a>

<a class="btn btn-info" href="index.php?Berdasarkan=status&isi=menunggu_persetujuan">
    Status menunggu Persetujuan
</a>

<a class="btn btn-info" href="index.php?Berdasarkan=status&isi=pengiriman">
    Status Pengiriman
</a>

<a class="btn btn-info" href="index.php?Berdasarkan=status&isi=sampai tujuan">
    Sampai Selesai
</a>

<br><br>

<form name="formcari" id="formcari" action="" method="get">
    <fieldset>
        <table>
            <tbody>
            <tr>
                <td>Berdasarkan</td>
                <td>:</td>
                <td>
                    <!-- <input value="" name="Berdasarkan" id="Berdasarkan" > --> <select
                            class="form-control selectpicker" data-live-search="true" name="Berdasarkan"
                            id="Berdasarkan">
                        <?php
                        $sql = "desc data_pengiriman";
                        $result = @mysql_query($sql);
                        while ($row = @mysql_fetch_array($result)) {
                            echo "<option name='berdasarkan' value=$row[0]>$row[0]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Pencarian</td>
                <td>:</td>
                <td>
                    <!--<input class="form-control" type="text" name="isi" value="" >--> <input type="text" name="isi"
                                                                                                value="">
                    <?php btn_cari('Cari'); ?>
                </td>
            </tr>
            </tbody>
        </table>
    </fieldset>
</form>

<div style="overflow-x:auto;">
    <table <?php tabel(100, '%', 1, 'left'); ?> >
        <tr>
            <th style="vertical-align:middle">Action</th>
            <th style="vertical-align:middle">No</th>
            <th style="vertical-align:middle">Nomor&nbsp;resi</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Tanggal&nbsp;pengiriman</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Pengirim</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Username</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">No&nbsp;telepon&nbsp;pengirim</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Wilayah&nbsp;pengiriman</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Alamat&nbsp;lengkap&nbsp;pengiriman</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Penerima</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">No&nbsp;telepon&nbsp;penerima</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Wilayah&nbsp;tujuan</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Alamat&nbsp;lengkap&nbsp;tujuan</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Kategori</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Berat</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Jenis Layanan</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Tarif</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Keterangan&nbsp;isi&nbsp;paket</th>
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Status</th>-->
            <th style="vertical-align:middle" valign="center" class="th_border cell">Keterangan</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Total&nbsp;bayar</th>
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Cabang Agen</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Asal Origin</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Tujuan Destination</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Kepada Consigne</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Telp / Hp</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Dari Shipper</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Jumlah Pieces</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Berat Weight</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Isi Kiriman Description</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Catatan Instruction</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Biaya Kiriman / Chargers</th>-->
<!--            <th style="vertical-align:middle" valign="center" class="th_border cell">Jumlah</th>-->
            <th style="vertical-align:middle" valign="center" class="th_border cell">Asuransi Admin</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Nilai Declare / Value</th>
            <th style="vertical-align:middle" valign="center" class="th_border cell">Admin</th>
        </tr>

        <tbody>
        <?php
        $no = 0;
        $startRow = ($page - 1) * $dataPerPage;
        $no = $startRow;

        if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
            $berdasarkan = mysql_real_escape_string($_GET['Berdasarkan']);
            $isi = mysql_real_escape_string($_GET['isi']);
            $querytabel = "SELECT * FROM data_pengiriman where $berdasarkan like '%$isi%'  LIMIT $startRow ,$dataPerPage";
            $querypagination = "SELECT COUNT(*) AS total FROM data_pengiriman where $berdasarkan like '%$isi%'";
        } else {
            $querytabel = "SELECT * FROM data_pengiriman  LIMIT $startRow ,$dataPerPage";
            $querypagination = "SELECT COUNT(*) AS total FROM data_pengiriman";
        }
        $proses = mysql_query($querytabel);
        while ($data = mysql_fetch_array($proses)) { ?>
            <tr class="event2">
                <td class="th_border cell" align="center" width="200">
                    <table border="0">
                        <tr>
                            <td style="vertical-align:middle">
                                <a href="<?php index(); ?>?input=detail&proses=<?= encrypt($data['nomor_resi']); ?>">
                                    <?php btn_detail('Detail'); ?></a>
                            </td>
                            <td style="vertical-align:middle">
                                <a href="<?php index(); ?>?input=edit&proses=<?= encrypt($data['nomor_resi']); ?>">
                                    <?php btn_edit('Update Status'); ?></a>
                            </td>

                            <?php
                            $siapa = $_COOKIE['siapa'];
                            if ($siapa == "admin")
                            {
                                ?>
                            <td style="vertical-align:middle">
                                <a href="<?php index(); ?>?input=hapus&proses=<?= encrypt($data['nomor_resi']); ?>">
                                    <?php btn_hapus('Hapus');?></a>
                            </td>

                            <td style="vertical-align:middle">
                                <a href="cetak_resi_ulang.php?<?= http_build_query($data); ?>" class="btn btn-success btn-xs">
                                    Cetak Resi</a>
                            </td>
                            <?php }?>
                            <td style="vertical-align:middle">
                                <a href="../data_tracking_pengiriman/index.php?no_resi=<?php echo encrypt($data['nomor_resi']); ?>" class="btn btn-primary btn-xs">
                                    Tracking Pengiriman</a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="vertical-align:middle" align="center" width="50"><?php $no = (($no + 1));
                    echo $no; ?></td>
                <td style="vertical-align:middle" align=""><?php echo $data['nomor_resi']; ?>
                <br>
               <font color='orange'>Status : <?php echo $data['status']; ?></font> 
                </td>

                <td style="vertical-align:middle" align="center"><?php echo(format_indo($data['tanggal_pengiriman'])); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['pengirim']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['username']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['no_telepon_pengirim']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['wilayah_pengiriman']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['alamat_lengkap_pengiriman']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['penerima']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['no_telepon_penerima']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['wilayah_tujuan']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['alamat_lengkap_tujuan']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['kategori']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['berat']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo($data['jenis_layanan']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo rupiah($data['tarif']); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo(($data['keterangan_isi_paket'])); ?></td>
<!--                <td style="vertical-align:middle" align="center">--><?php //echo($data['status']); ?><!--</td>-->
                <td style="vertical-align:middle" align="center"><?php echo(($data['keterangan'])); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo(rupiah($data['total_bayar'])); ?></td>
            <!--    <td style="vertical-align:middle" align="center"><?php echo(($data['total_bayar'])); ?></td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['cabang_agen'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['asal_origin'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['tujuan_destination'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['kepada_consigne'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['telp_hp'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['dari_shipper'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['jumlah_pieces'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['berat_weight'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['isi_kiriman_description'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['catatan_instruction'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['biaya_kiriman_chargers'])); ?><!--</td>-->
<!--                <td style="vertical-align:middle" align="center">--><?php //echo(($data['jumlah'])); ?><!--</td>-->
                <td style="vertical-align:middle" align="center"><?php echo(($data['asuransi_admin'])); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo(($data['nilai_declare_value'])); ?></td>
                <td style="vertical-align:middle" align="center"><?php echo(($data['admin'])); ?></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php Pagination($page, $dataPerPage, $querypagination); ?>

</body>