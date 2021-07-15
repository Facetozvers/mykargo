<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-header" style="height: 39px">Edit<h3></h3>
    </div>
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
                    $sql = mysql_query("SELECT * FROM data_tarif where id_tarif = '$proses'");
                    $data = mysql_fetch_array($sql);
                    ?>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>id&nbsp;tarif
                                    <font color="red">*</font>
                                </label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    type="%typepertama%"
                                    name="id_tarif"
                                    value="<?php echo $data['id_tarif']; ?>"
                                    readonly="readonly"
                                    id="id_tarif"
                                    required="required">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Dari
                                    <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <!-- -->
                                <select
                                    class=' selectpicker'
                                    data-live-search='true'
                                    required="required"
                                    type="text"
                                    name="dari"
                                    id="dari"
                                    placeholder="Dari"
                                    value="<?php echo($data['dari']); ?>">
                                    <option value='<?php echo $data[dari]; ?>'>-
                                        <?php echo $data[dari]; ?>-
                                    </option><?php combo_database('data_wilayah', 'wilayah', ''); ?>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Tujuan
                                    <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <!-- -->
                                <select
                                    class=' selectpicker'
                                    data-live-search='true'
                                    required="required"
                                    type="text"
                                    name="tujuan"
                                    id="tujuan"
                                    placeholder="Tujuan"
                                    value="<?php echo($data['tujuan']); ?>">
                                    <option value='<?php echo $data[tujuan]; ?>'>-
                                        <?php echo $data[tujuan]; ?>-
                                    </option><?php combo_database('data_wilayah', 'wilayah', ''); ?>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Kategori
                                    <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <!-- -->
                                <select
                                    class=' selectpicker'
                                    data-live-search='true'
                                    required="required"
                                    type="text"
                                    name="id_kategori"
                                    id="id_kategori"
                                    placeholder="Kategori"
                                    value="<?php echo($data['id_kategori']); ?>">
                                    <option value='<?php echo $data[id_kategori]; ?>'>-
                                        <?php echo $data[id_kategori]; ?>-
                                    </option>
                                    
                                    <?php combo_database_v2('data_kategori', 'id_kategori','kategori', ''); ?>
                              
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Tarif&nbsp;biasa
                                    <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    class=''
                                    required="required"
                                    type="number"
                                    name="tarif_biasa"
                                    id="tarif_biasa"
                                    placeholder="Tarif&nbsp;biasa"
                                    value="<?php echo($data['tarif_biasa']); ?>">

                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Estimasi&nbsp;Waktu&nbsp;Pengiriman Biasa<span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    class=''
                                    required="required"
                                    type="text"
                                    name="estimasi_waktu_pengiriman_biasa"
                                    id="estimasi_waktu_pengiriman_biasa"
                                    placeholder="Estimasi&nbsp;Waktu&nbsp;Pengiriman Biasa"
                                    value="<?php echo($data['estimasi_waktu_pengiriman_biasa']); ?>">

                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>tarif cepat
                                    <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    class=''
                                    required="required"
                                    type="text"
                                    name="tarif_cepat"
                                    id="tarif_cepat"
                                    placeholder="tarif cepat"
                                    value="<?php echo($data['tarif_cepat']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Estimasi&nbsp;Waktu&nbsp;Pengiriman Cepat<span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    class=''
                                    required="required"
                                    type="text"
                                    name="estimasi_waktu_pengiriman_cepat"
                                    id="estimasi_waktu_pengiriman_biasa"
                                    placeholder="Estimasi&nbsp;Waktu&nbsp;Pengiriman Biasa"
                                    value="<?php echo($data['estimasi_waktu_pengiriman_biasa']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>tarif cargo
                                    <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    class=''
                                    required="required"
                                    type="text"
                                    name="tarif_cargo"
                                    id="tarif_cepat"
                                    placeholder="tarif cargo"
                                    value="<?php echo($data['tarif_cargo']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Estimasi&nbsp;Waktu&nbsp;Pengiriman Cargo<span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    class=''
                                    required="required"
                                    type="text"
                                    name="estimasi_waktu_pengiriman_cargo"
                                    id="estimasi_waktu_pengiriman_cargo"
                                    placeholder="Estimasi&nbsp;Waktu&nbsp;Pengiriman Cargo"
                                    value="<?php echo($data['estimasi_waktu_pengiriman_cargo']); ?>">
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