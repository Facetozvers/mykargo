<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-header" style="height: 39px">Edit<h3></h3></div>
    <form action="proses_update.php" enctype="multipart/form-data" method="post">
        <div class="content-box-content">
            <div id="postcustom">
                <table <?php tabel_in(100, '%', 0, 'center'); ?>>
                    <tbody>
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
                    $sql = mysql_query("SELECT * FROM data_manifest_asal where id_manifest_asal = '$proses'");
                    $data = mysql_fetch_array($sql);
                    ?>



                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Id&nbsp;Manifest asal <font color="red">*</font></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input type="text" name="id_manifest_asal" value="<?php echo $data['id_manifest_asal']; ?>"
                                   readonly id="id_manifest_asal" required="required">
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Tambah Awb <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <select class="combosearch selectpicker" data-live-search="true" id="tambah-awb">
                                <?php combo_database2('data_pengiriman', 'nomor_resi', 'pengirim', 'select pengirim, nomor_resi from data_pengiriman limit 500') ?>
                            </select>
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>List Awb <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <textarea id="awb" name="awb" rows="10" cols="40"><?= $data['awb'] ?></textarea>
                        </td>
                    </tr>


                    <script>
                        $(document).ready(function () {
                            $('#tambah-awb').change(function (e) {
                                var awb = $('#awb');

                                awb.val(awb.val() + '\n' + $('#tambah-awb option:selected').val())
                            })
                        })
                    </script>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Qty <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' required="required" type="text" name="qty"
                                   id="qty" placeholder="Qty" value="<?php echo($data['qty']); ?>">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Kg <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' required="required" type="number" name="kg" id="kg" placeholder="Kg"
                                   value="<?php echo($data['kg']); ?>">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Isi Paketan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input onkeypress='return a(event)' class='' required="required" type="text"
                                   name="isi_paketan" id="isi_paketan" placeholder="Isi Paketan"
                                   value="<?php echo($data['isi_paketan']); ?>">
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Status<span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' required="required" type="text"
                                   name="status" id="status" placeholder="Status"
                                   value="<?php echo($data['status']); ?>">
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Alasan Status<span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' required="required" type="text"
                                   name="alasan_status" id="alasan_status" placeholder="Alasan Status"
                                   value="<?php echo($data['alasan_status']); ?>">
                        </td>
                    </tr>

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
