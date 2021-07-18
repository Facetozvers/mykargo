
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
                                <?php if($_COOKIE['siapa'] == 'driver') { ?>
                                    <input readonly class="form-control" style="width:50%" type="hidden" name="id_driver" id="id_driver" placeholder="Id Driver" value="<?php echo $_COOKIE['id']?>" required="required"></input>
                                    <input readonly class="form-control" style="width:50%" type="text" name="nama_driver" id="nama_driver" placeholder="Nama Driver" value="<?php echo $_COOKIE['name']?>" required="required"></input>
                                    <?php } 
                                else {?>
                                <select class="form-control" style="width:50%" type="text" name="id_driver" id="id_driver" placeholder="Id Driver " required="required">
                                <option></option><?php combo_database_v2('data_driver','id_driver','nama',''); ?>
                                </select>
                                <?php } ?>
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeRK32JN_ZeJMRxa-iZGycriUxxxY3WZg&callback=initMap&libraries=places">
</script>
<script>
    function initMap() {
        const myLatlng = { lat: -6.210376270240721, lng: 106.84804992887346 };
        const mapDiv = document.getElementById("map");
        const map = new google.maps.Map(mapDiv, {
            zoom: 15,
            center: myLatlng,
        });
        // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
              const places = searchBox.getPlaces();

              if (places.length == 0) {
                return;
              }
              // Clear out the old markers.
              markers.forEach((marker) => {
                marker.setMap(null);
              });
              markers = [];
              // For each place, get the icon, name and location.
              const bounds = new google.maps.LatLngBounds();
              places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                  console.log("Returned place contains no geometry");
                  return;
                }
                const icon = {
                  url: place.icon,
                  size: new google.maps.Size(71, 71),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(17, 34),
                  scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                markers.push(
                  new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                  })
                );

                if (place.geometry.viewport) {
                  // Only geocodes have viewport.
                  bounds.union(place.geometry.viewport);
                } else {
                  bounds.extend(place.geometry.location);
                }

                $('#latlongclicked').val(place.geometry.location);
                $('#latspan').html(place.geometry.location.lat());
                $('#lngspan').html(place.geometry.location.lng());
                $('#lat').val(place.geometry.location.lat());
                $('#lng').val(place.geometry.location.lng());
              });
              map.fitBounds(bounds);
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
#description {
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
}

#infowindow-content .title {
  font-weight: bold;
}

#infowindow-content {
  display: none;
}

#map #infowindow-content {
  display: inline;
}

.pac-card {
  margin: 10px 10px 0 0;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  background-color: #fff;
  font-family: Roboto;
}

#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
}

.pac-controls {
  display: inline-block;
  padding: 5px 11px;
}

.pac-controls label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 400px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

#title {
  color: #fff;
  background-color: #4d90fe;
  font-size: 25px;
  font-weight: 500;
  padding: 6px 12px;
}

#target {
  width: 345px;
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
            <input
            id="pac-input"
            class="controls"
            type="text"
            placeholder="Cari Lokasi..."
            />
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


   

