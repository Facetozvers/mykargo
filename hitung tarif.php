<?php if (empty($p)) {
    header("Location: index.php?p=home");
    die();
} ?>
<br>
<center>
    <h2>
        HITUNG TARIF
    </h2>
</center>
<br>

<div class="container">
    <div class="col-md-12">

        <form method="get" action="">

            <table style="width: 100%" align="center" class="auto-style1">

                <tr>
                    <td style="width: 152px; height: 23px;">
                        <span lang="id">
                            Wilayah Pengirim</span></td>
                    <td style="width: 23px; height: 23px;">
                        <span lang="id">:</span></td>
                    <td style="height: 23px">
                        <select name="dari" style="width: 200px">
                            <?php combo_database("data_tarif", "dari", "select  dari as dari from data_tarif group by dari"); ?>
                        </select>
                        <input
                            value="cek"
                            type="hidden"
                            readonly="readonly"
                            name="Berdasarkan"
                            style="width: 200px">
                        <input
                            value="cek"
                            type="hidden"
                            readonly="readonly"
                            name="isi"
                            style="width: 200px">

                        <input
                            value="hitung tarif"
                            type="hidden"
                            readonly="readonly"
                            name="p"
                            style="width: 200px">
                    </td>
                </tr>

                <tr>
                    <td style="width: 152px">
                        <span lang="id">
                            Wilayah Penerima</span></td>
                    <td style="width: 23px">
                        <span lang="id">:</span></td>
                    <td>
                        <select name="ke" style="width: 200px">
                            <?php combo_database("data_tarif", "tujuan", "select * from data_tarif group by tujuan"); ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td style="height: 23px; width: 152px">
                        <span lang="id">Kategori</span></td>
                    <td style="height: 23px; width: 23px">
                        <span lang="id">:</span></td>
                    <td style="height: 23px">
                    <select   
                                    type="text" name="kategori" id="kategori" placeholder="kategori"
                                    required="required">
                                <option></option><?php combo_database_v2('data_kategori', 'id_kategori','kategori', ''); ?>
                            </select>
                </tr>

                <tr>
                    <td style="height: 23px; width: 152px">
                        <span lang="id">Estimasi Berat / Kg</span></td>
                    <td style="height: 23px; width: 23px">
                        <span lang="id">:</span></td>
                    <td style="height: 23px">
                        <input name="berat" style="width: 200px" type="number"></td>
                </tr>

                <tr>
                    <td style="width: 152px">&nbsp;</td>
                    <td style="width: 23px">&nbsp;</td>
                    <td>
                        <input type="submit" value="Hitung"></td>
                </tr>

            </table>
        </form>
        <br>

        <?php

        if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
            ?>
        <div style="overflow-x:auto;">
            <table <?php tabel(100, '%', 1, 'left'); ?>>

                <span>
                <?php
            $no = 0;
            $startRow = ($page - 1) * $dataPerPage;
            $no = $startRow;

            if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
                $dari = mysql_real_escape_string($_GET['dari']);
                $ke = mysql_real_escape_string($_GET['ke']);
                $berat = mysql_real_escape_string($_GET['berat']);
                $id_katgori = mysql_real_escape_string($_GET['kategori']);
                $querytabel = "SELECT * FROM data_tarif where dari='$dari' and tujuan='$ke' and id_kategori='$id_katgori'";
                $querypagination = "SELECT COUNT(*) AS total FROM data_tarif where $berdasarkan like '%$isi%'";
            } else {
                $querytabel = "SELECT * FROM data_tarif  LIMIT $startRow ,$dataPerPage";
                $querypagination = "SELECT COUNT(*) AS total FROM data_tarif";
            }
            $proses = mysql_query($querytabel);
            while ($data = mysql_fetch_array($proses))
            { ?>
                <tr>
                    <th>Wilayah Pengirim</th>
                    <th>Wilayah Penerima</th>
                    <th>Kategori</th>
                    <th>Berat</th>
                    <th>Tarif Pengiriman</th>
                    <th>Estimasi Waktu Pengiriman</th>
                </tr>
                <tr>
                    <td><?php echo $dari ?></td>
                    <td><?php echo $ke ?></td>
                    <td>Biasa</td>
                    <td><?php echo $berat ?> Kg</td>
                    <td><?php echo rupiah($data['tarif_biasa'] * ($berat == $berat < 1 ? 1 : $berat) / 1); ?></td>
                    <td><?php echo(substr($data['estimasi_waktu_pengiriman_biasa'], 0, 100)); ?></td>
                </tr>
                <tr>
                    <td><?php echo $dari ?></td>
                    <td><?php echo $ke ?></td>
                    <td>Cepat</td>
                    <td><?php echo $berat ?> Kg</td>
                    <td><?php echo rupiah(($data['tarif_cepat']) * ($berat == $berat < 1 ? 1 : $berat) / 1); ?></td>
                    <td><?php echo(substr($data['estimasi_waktu_pengiriman_cepat'], 0, 100)); ?></td>
                </tr>
                <tr>
                    <td><?php echo $dari ?></td>
                    <td><?php echo $ke ?></td>
                    <td>Cargo</td>
                    <td><?php echo $berat ?> Kg</td>
                    <td><?php echo rupiah(($data['tarif_cargo']) * ($berat == $berat < 1 ? 1 : $berat) / 1); ?></td>
                    <td> <?php echo(substr($data['estimasi_waktu_pengiriman_cargo'], 0, 100)); ?></td>
                </tr>
            
                <?php } ?>
                            
                            
                    </table>
                </div>

                <?php //Pagination_font_end($page,$dataPerPage,$querypagination);
            ?>
                <?php } ?>
            </div>
        </div>