
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body {
        margin: 0;
        padding: 0;
        height: 100%
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

var map = null;
var marker=null;

function initMap() {
  var myLatLng = {lat:{{$lat}}, lng:{{$lon}}};
  console.log(myLatLng);
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng,
  });

   marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'IIT Delhi',
    draggable: true
  });
  getLocation();
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      console.log({lat: position.coords.latitude, lng: position.coords.longitude});
      map.setCenter({lat: position.coords.latitude, lng: position.coords.longitude});
      marker.setPosition({lat: position.coords.latitude, lng: position.coords.longitude});
 
    } , error,options);
}
}

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};

var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};





    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY','null')}}&signed_in=true&callback=initMap"></script>
  </body>
</html>