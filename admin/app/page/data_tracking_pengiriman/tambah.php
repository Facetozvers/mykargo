
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
                                <input readonly class="form-control" style="width:50%" type="hidden" name="id_driver" id="id_driver" placeholder="Id Driver" value="<?php echo $_COOKIE['id']?>" required="required"></input>
                                <input readonly class="form-control" style="width:50%" type="text" name="nama_driver" id="nama_driver" placeholder="Nama Driver" value="<?php echo $_COOKIE['name']?>" required="required"></input>
                            </td>
                        </tr>
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >Maps  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                         
                         
<!-- MAPS INPUT -->
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeRK32JN_ZeJMRxa-iZGycriUxxxY3WZg&callback=initMap">
</script>
<script>
    function initMap() {
        const myLatlng = { lat: -6.210376270240721, lng: 106.84804992887346 };
        const mapDiv = document.getElementById("map");
        const map = new google.maps.Map(mapDiv, {
            zoom: 15,
            center: myLatlng,
        });
       // Create the initial InfoWindow.
            let infoWindow = new google.maps.InfoWindow({
                content: "Click the map to get Lat/Lng!",
                position: myLatlng,
            });
            infoWindow.open(map);
            // Configure the click listener.
            map.addListener("click", (mapsMouseEvent) => {
                // Close the current InfoWindow.
                infoWindow.close();
                // Create a new InfoWindow.
                infoWindow = new google.maps.InfoWindow({
                position: mapsMouseEvent.latLng,
                });
                infoWindow.setContent(
                JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                );
                infoWindow.open(map);

                $('#latlongclicked').val(mapsMouseEvent.latLng);
                $('#latspan').html(mapsMouseEvent.latLng.lat());
                $('#lngspan').html(mapsMouseEvent.latLng.lng());
                $('#lat').val(mapsMouseEvent.latLng.lat());
                $('#lng').val(mapsMouseEvent.latLng.lng());
            });
    }
</script>
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
#map {
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
        <div id="map"></div>
        <div class="eventtext">
            <div>Lattitude:
                <span id="latspan"></span>
            </div>
            <div>Longitude:
                <span id="lngspan"></span>
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

<br/>
<div style="width:70%; margin:0 auto;">
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


   

