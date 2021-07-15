<!-- <script src="../../../data/js/jquery.js"></script> -->
<script>

    function ajax_wilayah_tujuan() {

        var dari = $("#wilayah_pengiriman").val();
        var input = $("#wilayah_tujuan").val();
        var id_kategori = $("#kategori").val();

        $.ajax({
            url: '../../../include/function/ajax.php',
            type: 'POST',
            dataType: 'json',
            data: {'dari': dari, 'tujuan': input,'id_kategori': id_kategori, 'tabel': 'data_tarif', 'field': 'tujuan'},
            success: function (proses) {
                var jenis_layanan = $('#jenis_layanan');
                $("#tarif").val(proses['tarif_biasa']);

                if (jenis_layanan.val() == 'cepat') {

                    $("#tarif").val(proses['tarif_cepat']);
                }

                if (jenis_layanan.val() == 'Cargo') {

                    $("#tarif").val(proses['tarif_cargo'] / 10);
                }

                var tarif = $("#tarif").val();
                var berat = $("#berat").val();
                var asuransi_admin = $("#asuransi_admin").val();
                var total = (parseInt(tarif) * parseInt(berat)) + parseInt(asuransi_admin);
                $("#total_bayar").val(total);
            }
        });
    }


    function asss()
    {
       
        var tarif = $("#tarif").val();
        var ass = $("#asuransi").val();
        //alert(ass);


        if (ass == "ya")
        {
            $("#asuransi_admin").val(tarif * 5/100);
        }
        else
        {
            $("#asuransi_admin").val("0");
        }
       
        ajax_wilayah_tujuan();
    }

</script>


<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">

    <form action="proses_simpan.php" enctype="multipart/form-data" method="post">
        <div class="content-box-content">
            <div id="postcustom">
                <table <?php tabel_in(100, '%', 0, 'center'); ?>>
                    <tbody>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>nomor&nbsp;resi <span class="highlight">*</span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input
                                    value="<?php echo rand(10,99).date('isdmY');; ?>"
                                    name="nomor_resi" placeholder="nomor_resi" id="nomor_resi" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Tanggal&nbsp;Pengiriman <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"value="<?php echo tanggal_otomatis(); ?>" type="date"
                                   name="tanggal_pengiriman" id="tanggal_pengiriman"
                                   placeholder="Tanggal&nbsp;Pengiriman" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Pengirim <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"type="text" name="pengirim" id="pengirim" placeholder="Pengirim"
                                   required="required">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>No&nbsp;Telepon&nbsp;Pengirim <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input onkeypress='return a(event)' class="form-control"type="text" name="no_telepon_pengirim"
                                   id="no_telepon_pengirim" placeholder="No&nbsp;Telepon&nbsp;Pengirim"
                                   required="required">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Wilayah&nbsp;Pengiriman <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>

                            <select onchange="ajax_wilayah_tujuan()" class=' selectpicker' data-live-search='true'
                                    type="text" name="wilayah_pengiriman" id="wilayah_pengiriman"
                                    placeholder="Wilayah&nbsp;Pengiriman" required="required">
                                <option></option><?php combo_database('data_tarif', 'dari', 'select distinct(dari) from data_tarif order by dari'); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Alamat&nbsp;Lengkap&nbsp;Pengiriman <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
				<textarea class="form-control"type="text" name="alamat_lengkap_pengiriman" id="alamat_lengkap_pengiriman"
                          placeholder="Alamat&nbsp;Lengkap&nbsp;Pengiriman" required="required">

</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Penerima <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"type="text" name="penerima" id="penerima" placeholder="Penerima"
                                   required="required">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>No&nbsp;Telepon&nbsp;Penerima <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input onkeypress='return a(event)' class="form-control"type="text" name="no_telepon_penerima"
                                   id="no_telepon_penerima" placeholder="No&nbsp;Telepon&nbsp;Penerima"
                                   required="required">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Wilayah&nbsp;Tujuan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>

                            <select onchange="ajax_wilayah_tujuan()" class=' selectpicker' data-live-search='true'
                                    type="text" name="wilayah_tujuan" id="wilayah_tujuan"
                                    placeholder="Wilayah&nbsp;Tujuan" required="required">
                                <option></option><?php combo_database('data_tarif', 'tujuan', 'select * from data_tarif group by tujuan'); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Alamat&nbsp;Lengkap&nbsp;Tujuan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
				<textarea class="form-control"type="text" name="alamat_lengkap_tujuan" id="alamat_lengkap_tujuan"
                          placeholder="Alamat&nbsp;Lengkap&nbsp;Tujuan" required="required">

</textarea>
                        </td>
                    </tr>
					<tr>
                        <td width="25%" class="leftrowcms">
                            <label>Kode Kota Tujuan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"type="text" name="kode_kota_tujuan" id="kode_kota_tujuan"
                                   placeholder="Kode Kota Tujuan" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Kategori <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>


                            <select onchange="ajax_wilayah_tujuan()" class=' selectpicker' data-live-search='true'
                                    type="text" name="kategori" id="kategori" placeholder="kategori"
                                    required="required">
                                <option></option><?php combo_database_v2('data_kategori', 'id_kategori','kategori', ''); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Berat <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input onkeyup="ajax_wilayah_tujuan()"  class="form-control"type="text"
                                   name="berat" id="berat" placeholder="Berat" required="required">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Jenis Layanan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <select onchange="ajax_wilayah_tujuan()" id="jenis_layanan" class="selectpicker"
                                    name="jenis_layanan">
                                <option value="cepat">cepat</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Cargo">Cargo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Tarif <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"type="text" name="tarif" id="tarif" placeholder="Tarif" required="required">


                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Keterangan&nbsp;Isi&nbsp;Paket <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td><textarea class="form-control"type="text" name="keterangan_isi_paket" id="keterangan_isi_paket"
                                      placeholder="Keterangan&nbsp;Isi&nbsp;Paket" required="required"></textarea>
                        </td>
                    </tr>

                    <!--                    <tr>-->
                    <!--                        <td width="25%" class="leftrowcms">-->
                    <!--                            <label>Status <span class="highlight"></span></label>-->
                    <!--                        </td>-->
                    <!--                        <td width="2%">:</td>-->
                    <!--                        <td>-->
                    <!---->
                    <!--                           <input class="form-control"type="text" name="status" id="status" placeholder="Status" required="required">-->
                    <!--                        </td>-->
                    <!--                    </tr>-->

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Keterangan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td><textarea class="form-control"type="text" name="keterangan" id="keterangan" placeholder="Keterangan"
                                      required="required"></textarea>
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Asuransi / Admin <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>

                        <select onchange="asss()"  name="asuransi" id="asuransi">
                        <option  value="tidak">Tidak</option>
                        <option  value="ya">Ya</option>
                        
                        </select>
                            <input class="form-control" onkeyup="ajax_wilayah_tujuan()" type="hidden" name="asuransi_admin"
                                   id="asuransi_admin"
                                   value="0"
                                   placeholder="Asuransi Admin" required="required">
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Harga Barang <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"type="text" name="nilai_declare_value" id="nilai_declare_value"
                                   placeholder="Nilai Declare Value" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Total&nbsp;Bayar <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input class="form-control"type="text" name="total_bayar" id="total_bayar"
                                   placeholder="Total&nbsp;Bayar" required="required">


                        </td>
                    </tr>


                    </tbody>
                </table>
                <div class="content-box-content">
                    <center>
                        <?php btn_simpan(' SIMPAN DAN CETAK NOTA '); ?>
                    </center>
                </div>
            </div>
        </div>
    </form>
