<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
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
                    $sql = mysql_query("SELECT * FROM data_pengiriman where nomor_resi = '$proses'");
                    $data = mysql_fetch_array($sql);

                    ?>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Nomor&nbsp;resi <font color="red">*</font></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input type="%typepertama%" name="nomor_resi" value="<?php echo $data['nomor_resi']; ?>"
                                   readonly id="nomor_resi" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Status <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <select class=' selectpicker' data-live-search='true' required="required" type="enum"
                                    name="status" id="status" placeholder="Status"
                                    value="<?php echo($data['status']); ?>">
                                <option value='<?php echo $data[status]; ?>'>- <?php echo $data[status]; ?>-
                                </option>
                                <option value='pengiriman'>- Setujui dan proses pengiriman -
                                </option>

                                <option>penjemputan
                                </option>

                                <option>dibatalkan
                                </option>

                                <option>pengantaran ketujuan
                                </option>

                                <option>sampai tujuan
                                </option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Keterangan <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
				<textarea class='ckeditor' required="required" type="text" name="keterangan" id="keterangan"
                          placeholder="Keterangan" value="<?php echo($data['keterangan']); ?>">
<?php echo $data['keterangan'] ?>
</textarea>
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
