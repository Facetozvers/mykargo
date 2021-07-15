<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-header" style="height: 39px">Detail
        <h3 style="cursor: s-resize;"></h3></div>
    <div class="content-box-content">
        <table <?php tabel_in(100, '%', 0, 'center'); ?>>
            <tbody>
            <tr class="event3">
                <td class="clleft" colspan="3">
                    Detail data&nbsp;buku&nbsp;tamu
                </td>
            </tr>
            <?php

            if (!isset($_GET['proses'])) {
                     ?>
                <script>
                    alert("AKSES DITOLAK");
                    location.href = "index.php";
                </script>
                <?php
                die();
            }
            $proses = decrypt(mysql_real_escape_string($_GET['proses']));
            $sql = mysql_query("SELECT * FROM data_manifest_tujuan where id_manifest_tujuan = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
            <tr>
                <td class="clleft" width="25%">id&nbsp;Manifest Tujuan</td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_manifest_tujuan']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">Awb</td>
                <td class="clleft" width="2%">:</td>
                <td align="center"><?php echo substr( $data['awb'], 0, 25); ?>...</td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Qty</td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['qty']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Kg</td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['kg']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Isi Paketan</td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['isi_paketan']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Status</td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo(substr($data['status'], 0, 100)); ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Alasan Status</td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo(substr($data['alasan_status'], 0, 100)); ?></td>
            </tr>


            </tbody>
        </table>
    </div>
</div>