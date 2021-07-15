
<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI KEHALAMAN SEBELUMNYA'); ?>
</a>	

    <div class="col-sm-12" style="margin-bottom: 20px; margin-top: 20px;">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <strong>Tambah Data Tracking Pengiriman </strong>
        <hr class="message-inner-separator">
            <p>Silahkan input Data Tracking Pengiriman  dibawah ini.</p>
        </div>
    </div>

<div class="content-box">
    <form action="proses_simpan.php" enctype="multipart/form-data"  method="post">
        <div class="content-box-content">
            <div id="postcustom">	
                <table <?php tabel_in(100, '%', 0, 'center'); ?>>		
                    <tbody>
                        <!--h
                        <tr>
                            <td width="25%" class="leftrowcms">					
                                <label >Id Tracking Pengiriman  <span class="highlight">*</span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                              <?php echo id_otomatis("data_tracking_pengiriman", "id_tracking_pengiriman", "10"); ?>  		
                            </td>
                        </tr>
                        h-->
                        <input type="hidden" class="form-control" readonly value="<?php echo id_otomatis("data_tracking_pengiriman", "id_tracking_pengiriman", "10"); ?>" name="id_tracking_pengiriman" placeholder="Id Tracking Pengiriman " id="id_tracking_pengiriman" required="required">

                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Nomor Resi  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input readonly value="<?php echo decrypt($_GET['no_resi']) ;?>" class="form-control" style="width:50%" type="varchar" name="nomor_resi" id="nomor_resi" placeholder="Nomor Resi " required="required">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Nama Driver <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <select class="form-control" style="width:50%" type="text" name="id_driver" id="id_driver" placeholder="Id Driver " required="required">
                                <option></option><?php combo_database_v2('data_driver','id_driver','nama',''); ?>
                                </select>
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Maps  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                         
                         
<!-- MAPS INPUT -->
<script src="http://maps.google.com/maps?file=api&v=2&key=Kode-APIKEY-Anda" type="text/javascript"></script>
<style type="text/css">
.main {
    text-align: center;
    font: 12pt Arial;
    width: 100%;
    height: auto;
}
.eventtext {
    width: 100%;
    margin-top: 20px;
    font: 10pt Arial;
    text-align: left;
    line-height: 25px;
    background-color: #EDF4F8;
    padding: 5px;
    border: 1px dashed #C2DAE7;
}
#mapa {
    width: 100%;
    height: 340px;
    border: 5px solid #DEEBF2;
}
ul {
    font: 10pt arial;
    margin-left: 0;
    padding: 5px;
}
li {
    margin-left: 0;
    padding: 5px;
    list-style-type: decimal;
}
.code {
    border: 1px dashed #cecece;
    background-color: #F7F7F7;
    padding: 5px;
}
.small {
    font: 9pt arial;
    color: gray;
    padding: 2px;
}
.jimi {
    margin: 0;
}
</style>

<div class="main">
    <div style="width:100%; margin:0px auto;">
        <div id="mapa"></div>
        <div class="eventtext">
            <div>Lattitude:
                <span id="latspan"></span>
            </div>
            <div>Longitude:
                <span id="lngspan"></span>
            </div>
            <div>Lat Lng:
                <span id="latlong"></span>
            </div>
            <div>Lat Lng on click:
                <input
                    type="text"
                    id="latlongclicked"
                    style="width:300px; border:1px inset gray;"></span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
if (GBrowserIsCompatible())
{
map = new GMap2(document.getElementById("mapa"));
map.addControl(new GLargeMapControl());
map.addControl(new GMapTypeControl(3));
map.setCenter( new GLatLng(-6.17, 107.09), 7,0);

GEvent.addListener(map,'mousemove',function(point)
{
document.getElementById('latspan').innerHTML = point.lat()
document.getElementById('lngspan').innerHTML = point.lng()
document.getElementById('latlong').innerHTML = point.lat() + ', ' + point.lng()
});

GEvent.addListener(map,'click',function(overlay,point)
{
document.getElementById('latlongclicked').value = point.lat() + ', ' + point.lng()
document.getElementById('lat').value = point.lat()
document.getElementById('lng').value = point.lng()
});
}
</script>
<br/>
<div style="width:70%; margin:0 auto;">
<!-- MAPS INPUT -->




                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Lat  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="lat" id="lat" placeholder="Lat " required="required">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Lng  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="lng" id="lng" placeholder="Lng " required="required">
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Keterangan  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                            <textarea  class="form-control" style="width:50%" type="varchar" name="keterangan" id="keterangan" placeholder="Keterangan " required="required"></textarea>
                            </td>
                        </tr>
                        
                
                        
                    </tbody>
                </table>
                <div class="content-box-content">
                    <center>
                        <?php btn_simpan(' PROSES SIMPAN DATA'); ?>
                    </center>
                </div>		
            </div>
        </div>
    </form>


   

