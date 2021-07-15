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
   <br>
   <br>
    <div style="overflow-x:auto;">
        <table <?php tabel(100, '%', 1, 'left'); ?> >
            <tr>								  
               
                <th>No</th>
                <!--h <th>Id Tracking Pengiriman </th> h-->
                <th align="center" class="th_border cell"  >Nomor Resi </th>
                <th align="center" class="th_border cell"  >Nama Driver</th>
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
