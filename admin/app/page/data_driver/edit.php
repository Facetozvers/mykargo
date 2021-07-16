<?php 
    if($_COOKIE['siapa'] == 'driver'){
        ?>
        <a href="../home/index.php">
        <?php btn_kembali(' KEMBALI KE HALAMAN SEBELUMNYA'); ?>
        </a>
        <?php
    }
    else{ ?>
        <a href="<?php index(); ?>">
        <?php btn_kembali(' KEMBALI KE HALAMAN SEBELUMNYA'); ?>
        </a>
    <?php
    }
?>


    <div class="col-sm-12" style="margin-bottom: 20px; margin-top: 20px;">
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <strong>Edit Data Driver </strong>
        <hr class="message-inner-separator">
            <p>Silahkan Update Data Driver  dibawah ini.</p>
        </div>
    </div>


<div class="content-box">
    <form action="proses_update.php"  enctype="multipart/form-data"  method="post">
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
                    $sql = mysql_query("SELECT * FROM data_driver where id_driver = '$proses'");
                    $data = mysql_fetch_array($sql);
                    ?>
                    <!--h
                    <tr>
                        <td width="25%" class="leftrowcms">					
                            <label >Id Driver  <font color="red">*</font></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                           <?php echo $data['id_driver']; ?>	
                        </td>
                    </tr>
                    h-->
                    <input type="hidden" class="form-control" name="id_driver" value="<?php echo $data['id_driver']; ?>" readonly  id="id_driver" required="required">

                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Nama  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="nama" id="nama" placeholder="Nama " required="required" value="<?php echo ($data['nama']); ?>">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Alamat  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="alamat" id="alamat" placeholder="Alamat " required="required" value="<?php echo ($data['alamat']); ?>">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >No Telepon  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="no_telepon" id="no_telepon" placeholder="No Telepon " required="required" value="<?php echo ($data['no_telepon']); ?>">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >No Ktp  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="no_ktp" id="no_ktp" placeholder="No Ktp " required="required" value="<?php echo ($data['no_ktp']); ?>">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Detail Informasi Driver  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <textarea class="form-control" style="width:50%" type="text" name="detail_informasi_driver" id="detail_informasi_driver" placeholder="Detail Informasi Driver " required="required"><?php echo ($data['detail_informasi_driver']); ?></textarea>
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="content-box-content">
                    <center>
                        <?php btn_update(' PROSES UPDATE DATA'); ?>
                    </center>
                </div>		
            </div>
        </div>
    </form>
