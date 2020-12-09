<?php    
    $mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
    }
    
    $result = $mysqli->query("SELECT * FROM locations");

    $result2 = $mysqli->query("SELECT * FROM locations");

?>

    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title></title>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 350px; height: 300px; border: 0px; padding: 0px; }
        </style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDGH2-gK8IJP_A7CQ0-1WwOGQHExEozjE"></script>
<script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId:  'HYBRID'
    };
                    
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(50);
        
    var markers = [
        <?php if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '["'.$row['name'].'", '.$row['latit'].', '.$row['longi'].'],';
            }
        }
        ?>
    ];

    var infoWindowContent = [
        <?php if($result2->num_rows > 0){
            while($row = $result2->fetch_assoc()){ ?>
                ['<div class="info_content">' +
                '<h3><?php echo $row['name']; ?></h3>' + '</div>'],
        <?php }
        }
        ?>
    ];
        

    var infoWindow = new google.maps.InfoWindow(), marker, i;
  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>

        
     </head>
     <body style="margin:0px; border:0px; padding:0px;">
     <div id="mapCanvas" onclick="initmap()"></div>
     </body>
     </html>