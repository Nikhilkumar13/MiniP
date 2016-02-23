<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Minip</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<!--   <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 --></head>
<body style="overflow:hidden">
  <nav class="light-blue lighten-1" role="navigation">
<!--     <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
 -->     
       <ul class="right hide-on-med-and-down">
        <li><a href="#">Sign Up</a></li>
        <li><a href="#">Sign In</a></li>

      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div style=>
  <div style="width:15%;float:left;overflow:hidden;height:20%;overflow-x:hidden ">
 
      
  <ul class="collapsible" data-collapsible="accordion" style=" margin-top:-1%;margin-right:-8%;">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dengue </div>
      <div class="collapsible-body">
        <ul>
          <li class="collapsible-header" style="margin-left:40px"><a type="button"  id ="reloadMap"><i class="material-icons">places</i>Show Map</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Graphs</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Heat Maps</a></li>
        </ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Dog Bites</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>

  </ul>
  </div>
    <!-- <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a> -->
  
      

  <div  style="width: 1100px; height: 550px; float:right; margin-right:0px; margin-bottom:0px; " class="container" id ="map" >
      
      <script>

var map = null;
var marker=null;
var markers=[];
var image= "{{asset('/images/marker.png')}}";

function initMap() {
  var myLatLng = {lat: -34.397, lng: 150.644};
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng,
    rotateControl:true,
  });

   marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'IIT Delhi',
    draggable: true,
    icon:image 
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
    

  </div>
</div>


 

  <footer style="margin-bottom:0px;bottom:0px; position:fixed; width:100%" >
    <div class="page-footer orange footer-copyright ">
      <div class="container" style="text-align:right">
      Made by <a class="orange-text text-lighten-4" >Nikhil Kumar</a>
      </div>
    </div>
  </footer>





  </body>
</html>

<!--  Scripts-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY','null')}}&signed_in=true&callback=initMap"></script> </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script >


$(document).ready(function()
{
      $("#reloadMap").on('click', function() {
   
     var myLatLng = {lat: 28.5407847, lng: 77.1678353};
     var locations=[{lat:28.5407847, lng: 77.1678353},
     {lat:28.540723324, lng: 77.1678678},
     {lat:28.5493235, lng: 77.1835272}
     ];

     for(var i=0; i<locations.length;i++)
     {
      markers.push(new google.maps.Marker({ position: locations[i],
                                            map: map,
                                            title: 'New Cases',
                                            draggable: true,
                                          }));
     }

     for(var i=0; i <markers.length;i++)
     {
      markers[i].setMap(map);
     }


});

});
  </script>
  <script src="{{asset('/js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>
     


