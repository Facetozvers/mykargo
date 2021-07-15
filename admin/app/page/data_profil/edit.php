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
                    $sql = mysql_query("SELECT * FROM data_profil where id_profil = '$proses'");
                    $data = mysql_fetch_array($sql);
                    ?>
                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>id&nbsp;profil <font color="red">*</font></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                            <input type="%typepertama%" name="id_profil" value="<?php echo $data['id_profil']; ?>"
                                   readonly id="id_profil" required="required">
                        </td>
                    </tr>


                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Home <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
				<textarea class='ckeditor' required="required" type="text" name="home" id="home" placeholder="Home"
                          value="<?php echo($data['home']); ?>">
<?php echo $data['home'] ?>
</textarea>

                        </td>

                    <tr>
                        <td width="25%" class="leftrowcms">
                            <label>Profil <span class="highlight"></span></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
				<textarea class='ckeditor' required="required" type="text" name="profil" id="profil"
                          placeholder="Profil" value="<?php echo($data['profil']); ?>">
<?php echo $data['profil'] ?>
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
