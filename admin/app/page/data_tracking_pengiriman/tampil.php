<?php  
if (isset($_GET['no_resi']))
{
$resi = decrypt($_GET['no_resi']);


}
else
{
    die();
}
?>
<body>
    <a href="<?php index(); ?>?input=tambah&no_resi=<?php echo encrypt($resi);?>">
        <?php btn_tambah('Tambah Data'); ?>
    </a>

    <a target="blank" href="cetak.php?berdasarkan=data_tracking_pengiriman&jenis=xls&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
        <?php btn_export('Export Excel'); ?>
    </a>

    <a target="blank" href="cetak.php?berdasarkan=data_tracking_pengiriman&jenis=print&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
        <?php btn_cetak('Cetak'); ?>
    </a>

    <a href="<?php index(); ?>?no_resi=<?php echo encrypt($resi);?>">
        <?php btn_refresh('Refresh Data'); ?>
    </a>

    <br><br>

    <!-- <form name="formcari" id="formcari" action="" method="get">
        <fieldset> 
            <table>
                <tbody>
                    <tr>
                        <td>Berdasarkan</td>	
                        <td>:</td>	
                        <td>
                           
                            <select class="form-control selectpicker" data-live-search="true" name="Berdasarkan" id="Berdasarkan">
                                <?php
                                $sql = "desc data_tracking_pengiriman";
                                $result = @mysql_query($sql);
                                while ($row = @mysql_fetch_array($result)) {
                                    echo "<option name='berdasarkan' value=$row[0]>$row[0]</option>";
                                }
                                ?>
                            </select>							
                        </td>
                    </tr>

                    <tr>
                        <td>Pencarian</td>	
                        <td>:</td>	
                        <td>							
                                
                            <?php btn_cari('Cari'); ?>
                        </td>
                    </tr>
                </tbody>
            </table>									
        </fieldset>
    </form> -->

    <div style="overflow-x:auto;">
        <table <?php tabel(100, '%', 1, 'left'); ?> >
            <tr>								  
                <th>Action</th>
                <th>No</th>
                <!--h <th>Id Tracking Pengiriman </th> h-->
                <th align="center" class="th_border cell"  >Nomor Resi </th>
                <th align="center" class="th_border cell"  >Nama </th>
                <th align="center" class="th_border cell"  >Koordinat </th>
                
                <th align="center" class="th_border cell"  >Keterangan </th>

            </tr>

            <tbody>
                <?php
                $no = 0;
                $startRow = ($page - 1) * $dataPerPage;
                $no = $startRow;

                if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
                    $berdasarkan = mysql_real_escape_string($_GET['Berdasarkan']);
                    $isi = mysql_real_escape_string($_GET['isi']);
                    $querytabel = "SELECT * FROM data_tracking_pengiriman where $berdasarkan like '%$isi%'  LIMIT $startRow ,$dataPerPage";
                    $querypagination = "SELECT COUNT(*) AS total FROM data_tracking_pengiriman where $berdasarkan like '%$isi%'";
                } else {
                    $querytabel = "SELECT * FROM data_tracking_pengiriman where nomor_resi = '$resi '";
                    $querypagination = "SELECT COUNT(*) AS total FROM data_tracking_pengiriman";
                }
                $proses = mysql_query($querytabel);
                while ($data = mysql_fetch_array($proses)) {
                    ?>
                    <tr class="event2">	
                        
                        <td class="th_border cell" align="center" width="200">
                            <table border="0">
                                <tr>
                                    <!-- <td>
                                        <a href="<?php index(); ?>?input=detail&proses=<?= encrypt($data['id_tracking_pengiriman']); ?>">
                                        <?php btn_detail('Detail'); ?>
                                        </a>
                                    </td> -->
                                    <td>
                                        <a href="<?php index(); ?>?input=edit&proses=<?= encrypt($data['id_tracking_pengiriman']); ?>">
                                        <?php btn_edit('Edit'); ?>
                                        </a>
                                    </td>

                                    <?php
                            $siapa = $_COOKIE['siapa'];
                            if ($siapa == "admin")
                            {
                                ?>
                                    <td>
                                        <a href="proses_hapus.php?proses=<?= ($data['id_tracking_pengiriman']); ?>">
                                        <?php btn_hapus('Hapus'); ?>
                                        </a>
                                    </td>
                                    <?php } ?>
                                </tr>
                            </table>
                        </td>
                        
                        <td align="center" width="50"><?php $no = (($no + 1) ); echo $no; ?></td>
                        <!--h <td align="center"><?php echo $data['id_tracking_pengiriman']; ?></td> h-->
                        <td align="center"><?php echo $data['nomor_resi']; ?></td>
                        <td align="center"><?php echo baca_database("","nama","select * from data_driver where id_driver='$data[id_driver]'")  ?></td>
                        <td align="center">
                        <a href="https://maps.google.com/?q=<?php echo $data['lat']; ?>,<?php echo $data['lng']; ?>" target ="blank"><?php echo $data['lat']; ?>,<?php echo $data['lng']; ?></a></td>
                        <td align="center"><?php echo $data['keterangan']; ?></td>

                    
                    </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

   <?php Pagination($page, $dataPerPage, $querypagination); ?>

</body>
