<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDGH2-gK8IJP_A7CQ0-1WwOGQHExEozjE&callback=initMap">
</script>
    <style type="text/css">
      #map {
        width: 1340px; height: 400px; border: 3px dotted orange; padding: 10px;
      }
    </style>
    <script>
      let map;

      function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 20.5937, lng: 78.9629 },
          zoom: 6,
        });

      addMarker({lat:22.5735,lng:88.4331})
      addMarker({lat:20.2961,lng:85.8245})
      addMarker({lat:18.5204,lng:73.8567})
      addMarker({lat:19.0760,lng:72.8777})
      addMarker({lat:17.3850,lng:78.4867})

      function addMarker(coords){
        var marker= new google.maps.Marker({
            position:coords,
            map:map,
        });
      }
        


      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>