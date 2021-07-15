<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-header" style="height: 39px">Tambah<h3></h3></div>
    <form action="proses_simpan.php" enctype="multipart/form-data" method="post">
        <div class="content-box-content">
            <div id="postcustom">
                <table <?php tabel_in(100, '%', 0, 'center'); ?>>
                    <tbody>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>id&nbsp;manifest asal <span class="highlight">*</span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <select class="combosearch selectpicker" data-live-search="true" id="ambil-data-pengiriman">
                                <option>--Pilih Manifest--</option>
                                <?php combo_database2('data_manifest_tujuan', 'id_manifest_tujuan', 'isi_paketan', 'select * from data_manifest_tujuan limit 500') ?>
                            </select>
                        </td>
                    </tr>
                    
                    <script>
                        $(document).ready(function (e) {
                            $('#ambil-data-pengiriman').change(function () {
                                location.href = 'index.php?input=tambah&id_manifest_tujuan=' + $('#ambil-data-pengiriman option:selected').val()
                             })
                        })
                    </script>


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
                            <textarea id="awb" name="awb" rows="10" cols="40"><?= baca_database('data_manifest_tujuan', 'awb', "select * from data_manifest_tujuan where id_manifest_tujuan='$_GET[id_manifest_tujuan]'") ?></textarea>
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
                            <input class='' type="text" name="qty" id="qty"
                                   placeholder="Qty" required="required">
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Kg <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' type="text" name="kg" id="kg"
                                   placeholder="Kg" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Isi Paketan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' type="text" name="isi_paketan" id="isi_paketan"
                                   placeholder="Isi Paketan" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Status<span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' type="text" name="status" id="status"
                                   placeholder="Status" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Alasan Status<span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class='' type="text" name="alasan_status" id="alasan_status"
                                   placeholder="Alasan Status" required="required">
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

    
    