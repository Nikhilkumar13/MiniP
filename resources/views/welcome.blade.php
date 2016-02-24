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


  <!-- <ul id="slide-out" class="side-nav fixed ">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
  </ul> -->


  <div   style="width:15%;float:left;overflow:hidden;height:20%;overflow-x:hidden ">
 
        <!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> -->

  <ul  id= "menu" class="collapsible" data-collapsible="accordion" style=" margin-top:-1%;margin-right:-8%;">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dengue </div>
      <div class="collapsible-body">
        <ul>
          <li class="collapsible-header" style="margin-left:40px"><a type="button"  id ="reloadMap"><i class="material-icons">places</i>Show Map</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Graphs</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Heat Maps</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="register"><i class="material-icons">trending_up</i>Register</a></li>
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

  <div id ="registerform" class="row" style="display:none">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="location" id="location" type="text" class="validate">
          <label for="location">Location</label>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select id="type">
            <!-- <option value="" disabled selected>Choose your option</option> -->
            <option value="mosquito">Mosquito Bite</option>
            <option value="dog">Dog Bite</option>
        </select>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="radius" id="radius" type="text" class="validate">
          <label for="radius">Radius</label>
        </div>
        
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input placeholder="lat" id="lat" type="text" class="validate">
          <label for="lat">Lat</label>
        </div>
        
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input placeholder="lng" id="lng" type="text" class="validate">
          <label for="lng">Long</label>
        </div>
        
      </div>
      <div class="row">
        <button type="button" onclick="saveData(); return false;" class="waves-effect waves-light btn">Save</button>
      </div>

      <!-- <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div> -->
    </form>
  </div>
        

  </div>  
      

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
        // console.log('cbekvbhwv');
        getData('mosquito');
    
   



});

      $("#register").on('click',function()
      {
        register();

      });


});
  </script>
    
  <script src="{{asset('/js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>
<script src="{{asset('js/locationpicker.jquery.js')}}"></script>

<script language="javascript" type="text/javascript">
  function getData(type) {
      $.ajax({
        url: '/data/',
  type: 'GET',
  data: 'type='+type,
  success: function(data) {
  console.log(data);
  setData(data);
  },
  error: function(e) {
  //called when there is an error
  console.log(e.message);
  }

   });
  }

  function setData(locations) {
     console.log(locations);

     for(var i=0; i<locations.length;i++)
     {
      markers.push(new google.maps.Marker({ position: locations[i],
                                            map: map,
                                            title: 'New Cases',
                                            draggable: true,
                                          }));
     }

    
  }
  function setMapOnAll(map)
  {
     for(var i=0; i <markers.length;i++)
     {
      markers[i].setMap(map);
     }

  }
$(document).ready(function() {
    $('select').material_select();
  });



  function register()
  {

    setMapOnAll(null);

    document.getElementById("menu").style.display = "none";
    document.getElementById("registerform").style.display = "";
 $('#map').locationpicker({
  location: {latitude: 28.549013499998987, longitude: 77.18317139999999}, 
  radius: 10,
  inputBinding: {
        latitudeInput: $('#lat'),
        longitudeInput: $('#lng'),
        radiusInput: $('#radius'),
        locationNameInput: $('#location')
    }
  });

  }
  function saveData() {

      // event.preventDefault();
    var formData={
                'type' : $('#type').val(),
                'lat':$('#lat').val(),
                'lng':$('#lng').val(),
                'radius':$('#radius').val()
                };
                console.log(formData);
  $.ajax({
  url: '/savedata/',
  type: 'POST',
  data: formData,
  success: function(data) {
  // console.log(data);
    // addData(data);
    alert('data added');

  },
  error: function(e) {
  //called when there is an error
  console.log(e.message);
  alert('data not added, !!');
  }

   });
  }
 
   </script>
  

