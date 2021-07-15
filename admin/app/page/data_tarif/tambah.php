<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-header" style="height: 39px">Tambah<h3></h3>
    </div>
    <form action="proses_simpan.php" enctype="multipart/form-data" method="post">
        <div class="content-box-content">
            <div id="postcustom">
                <table <?php tabel_in(100, '%', 0, 'center'); ?>>
                    <tbody>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>id&nbsp;tarif
                                    <span class="highlight">*</span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input
                                    type="readonly"
                                    readonly="readonly"
                                    value="<?php echo id_otomatis("data_tarif", "id_tarif", "10"); ?>"
                                    name="id_tarif"
                                    placeholder="id_tarif"
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

                                <select
                                    class=' selectpicker'
                                    data-live-search='true'
                                    type="text"
                                    name="dari"
                                    id="dari"
                                    placeholder="Dari"
                                    required="required">
                                    <option></option><?php combo_database('data_wilayah', 'wilayah', ''); ?>
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

                                <select
                                    class=' selectpicker'
                                    data-live-search='true'
                                    type="text"
                                    name="tujuan"
                                    id="tujuan"
                                    placeholder="Tujuan"
                                    required="required">
                                    <option></option><?php combo_database('data_wilayah', 'wilayah', ''); ?>
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

                                <select
                                    class=' selectpicker'
                                    data-live-search='true'
                                    type="text"
                                    name="id_kategori"
                                    id="id_kategori"
                                    placeholder="Kategori"
                                    required="required">
                                    <option></option><?php combo_database_v2('data_kategori', 'id_kategori','kategori', ''); ?>
                                </select>
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
                                    type="text"
                                    name="tarif_cepat"
                                    id="tarif_cepat"
                                    placeholder="tarif cepat"
                                    required="required">

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
                                    type="text"
                                    name="estimasi_waktu_pengiriman_cepat"
                                    id="estimasi_waktu_pengiriman_cepat"
                                    placeholder="Estimasi&nbsp;Waktu&nbsp;Pengiriman Cepat"
                                    required="required">

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
                                    type="text"
                                    name="tarif_biasa"
                                    id="tarif_biasa"
                                    placeholder="Tarif&nbsp;biasa"
                                    required="required">
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
                                    type="text"
                                    name="estimasi_waktu_pengiriman_biasa"
                                    id="estimasi_waktu_pengiriman"
                                    placeholder="Estimasi&nbsp;Waktu&nbsp;Pengiriman Biasa"
                                    required="required">

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
                                    type="text"
                                    name="tarif_cargo"
                                    id="tarif_cargo"
                                    placeholder="tarif cargo"
                                    required="required">
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
                                    type="text"
                                    name="estimasi_waktu_pengiriman_cargo"
                                    id="estimasi_waktu_pengiriman_cargo"
                                    placeholder="Estimasi&nbsp;Waktu&nbsp;Pengiriman Cargo"
                                    required="required">
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="content-box-content">
                    <center>
                        <?php btn_simpan(' SIMPAN'); ?>
                    </center>
                </div>
            </div>
        </div>
    </form>