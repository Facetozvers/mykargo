<?php if (empty($p)) {
    header("Location: index.php?p=home");
    die();
} ?>
<br>
<center><h2> CEK RESI </h2></center>
<br>

<div class="container">
    <div class="col-md-12">
        <center>
            <form name="formcari" id="formcari" action="" method="get">
                <fieldset>
                    <table>
                        <tbody>

                        <input type="hidden" value="nomor_resi" class="form-control selectpicker"
                               data-live-search="true" name="Berdasarkan" id="Berdasarkan">
                        <input type="hidden" value="cek resi" class="form-control selectpicker" data-live-search="true"
                               name="p" id="p">


                        <tr>
                            <td>Nomor Resi</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="isi" value="">
                                <?php btn_cari('Cari'); ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </center>

        <?php
        if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {


            ?>


            <?php
            $no = 0;
            $startRow = ($page - 1) * $dataPerPage;
            $no = $startRow;

            if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
                $berdasarkan = mysql_real_escape_string($_GET['Berdasarkan']);
                $isi = mysql_real_escape_string($_GET['isi']);
                $querytabel = "SELECT * FROM data_pengiriman where $berdasarkan = '$isi'  LIMIT $startRow ,$dataPerPage";
                $querypagination = "SELECT COUNT(*) AS total FROM data_pengiriman where $berdasarkan like '%$isi%'";
            } else {
                $querytabel = "SELECT * FROM data_pengiriman  LIMIT $startRow ,$dataPerPage";
                $querypagination = "SELECT COUNT(*) AS total FROM data_pengiriman";
            }



            $proses = mysql_query($querytabel);
            while ($data = mysql_fetch_array($proses)) {


                ?>
                <br>
                <table <?php tabel(100, '%', 1, 'left'); ?>>
                    <tr>
                        <th>Nomor Resi</th>
                        <th>Tanggal Pengiriman</th>
                        <th>Status Pengiriman Barang</th>
                        <th>Keterangan Tambahan</th>
                    </tr>
                    <tr>
                        <td><?php echo(format_indo($data['nomor_resi'])); ?></td>
                        <td><?php echo(format_indo($data['tanggal_pengiriman'])); ?></td>
                        <td><?php echo(substr($data['status'], 0, 100)); ?></td>
                        <td><?php echo(substr($data['keterangan'], 0, 100)); ?></td>
                    </tr>
                </table>

            <?php } ?>
        <?php } ?>

        <?php

            if((mysql_num_rows($proses) < 1) && (isset($isi))) {
                echo "<h1 style='text-align:center'>Data tidak ditemukan</h1>";
            }

        ?>
    </div>
</div>