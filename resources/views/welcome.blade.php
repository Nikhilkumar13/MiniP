<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Minip</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://code.highcharts.com"></script>
    <!-- <link href="{{asset('/css/extras/nouislider.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> -->
    <!-- <link href="{{asset('/css/nouislider.tooltips.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> -->
    <!-- <link href="{{asset('/css/nouislider.pips.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> -->


</head>
<body style="overflow:hidden">



  <div   style="width:15%;float:left;overflow:hidden;height:20%;overflow-x:hidden ">
 

   <ul  id= "menu" class="collapsible" data-collapsible="accordion" style=" margin-top:-1%;margin-right:-8%; ">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dengue </div>
      <div class="collapsible-body">
        <ul>
          <li class="collapsible-header" style="margin-left:40px"><a type="button"  id ="reloadMap"><i class="material-icons">places</i>Show Map</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadGraph"><i class="material-icons">trending_up</i>Graphs</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Heat Maps</a></li>
        </ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Dog Bites</div>
      <div class="collapsible-body"><ul>
          <li class="collapsible-header" style="margin-left:40px"><a type="button"  id ="reloadMap"><i class="material-icons">places</i>Show Map</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Graphs</a></li>
          <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadMap"><i class="material-icons">trending_up</i>Heat Maps</a></li>
        </ul>
      </div>
    </li>
     <li>
      <div class="collapsible-header"><a style="color:black"   onclick="register(); return false;" ><i style="color:black" class="material-icons">receipt</i>Report Incident</a></div>
    </li>

  </ul>


 <!--  <div id="showmapfilter" class="row" >
    <div id="slider" class="row s12 pading" style="margin-top:40px">

    </div>
  </div> -->


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
      <!-- <div class="row">
        <div class="input-field col s12">
          <input placeholder="radius" id="radius" type="text" class="validate">
          <label for="radius">Radius</label>
        </div>
        
      </div> -->
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
        <button type="button" onclick="back(); return false;" class="waves-effect waves-light btn">Back</button>

      </div>

    </form>
  </div>
        

  </div>  
  <!-- signup Modal Structure -->
  <div id="signup" class="modal modal-fixed-footer" style="width: 40%;height: 61%;">
    <div class="modal-content" style="height: 100%;">
      <form role="form " class="col s12">
        <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>">
        <h3>Sign Up</h3>
        <div class="row">
          <div class="input-field col s6">
            <input  id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>
           <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
     
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input id="confirmpassword" type="password" class="validate">
          <label for="confirm password">Confirm Password</label>
        </div>
      </div>
      <div class="modal-footer" style="position:inherit;">
          <div class="input-field">
              <button type= "button" class="modal-action waves-effect waves-light btn" onclick="signUp(); return false;">SignUP</button>
              <button class="waves-effect waves-light btn-flat" value="Reset" type="reset">Reset</button>
            <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a> -->
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- login Modal Structure -->
  <div id="login" class="modal modal-fixed-footer" style="height: 61%;width: 40%;">
    <div class="modal-content">
      <form class="col s12">
        <h3>Login</h3>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="modal-footer" style="position:inherit;">
          <div class="input-field">
              <button class="modal-action modal-close waves-effect waves-light btn" onclick="">Login</button>
              <button class="waves-effect waves-light btn-flat" value="Reset" type="reset">Reset</button>
            <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a> -->
        </div>
      </div>
      </form>
    </div>
  </div>
  <div id="graph" style="height: 400px; min-width: 310px; display:none"></div>

      

  <div  style="width: 1100px; height: 550px; float:right; margin-right:0px; margin-bottom:0px; " class="container" id ="map" >
      
      <script>


var map = null;
var marker=null;
var markers=[];
var image= "{{asset('/images/marker.png')}}";

function initMap() {
  var myLatLng = {lat: 28.54539, lng: 77.188181};
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    disableDefaultUI:true,
    center:myLatLng,
    zoomControl:true,
    rotateControl:true,
  });
  // map.setTilt(45);
  // map.setHeading(map.getHeading()||0+45);

   marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'IIT Delhi',
    draggable: true,
    icon:image 
  });
  // getLocation();
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
        $("#reloadGraph").on('click', function() {
        // console.log('cbekvbhwv');
        showGraph();
    



});

      // $("#register").on('click',function()
      // {
      //   register();

      // });


});
  </script>
    
  <script src="{{asset('/js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>
<script src="{{asset('js/locationpicker.jquery.js')}}"></script>
<script src="{{asset('js/nouislider.min.js')}}"></script>



<script language="javascript" type="text/javascript">




var range = document.getElementById('slider');

noUiSlider.create(range, {
  start: [ 20, 80 ], // Handle start position
  step: 10, // Slider moves in increments of '10'
  margin: 20, // Handles must be more than '20' apart
  connect: true, // Display a colored bar between the handles
  direction: 'rtl', // Put '0' at the bottom of the slider
  orientation: 'horizontal', // Orient the slider vertically
  behaviour: 'tap-drag', // Move handle on tap, bar is draggable
  range: { // Slider can select '0' to '100'
    'min': 0,
    'max': 100
  },
  pips: { // Show a scale with the slider
    mode: 'steps',
    density: 2
  }
});

function showGraph()
{
        document.getElementById("map").style.display = "none";
        document.getElementById("graph").style.display = "";


}


  function getData(type) {
      $.ajax({
        url: '/data/',
  type: 'GET',
  data: 'type='+type,
  success: function(data) {
  console.log(data);
  setData(data);
  // setMapOnAll(map);
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


function back()
{
      document.getElementById("registerform").style.display = "none";
      document.getElementById("menu").style.display = "";

}

  function register()
  {

    // setMapOnAll(null);
     for(var i=0; i <markers.length;i++)
     {
      markers[i].setMap(null);
     }

    document.getElementById("menu").style.display = "none";
    document.getElementById("registerform").style.display = "";

 // $('#map').locationpicker({
 //  location: {latitude: 28.549013499998987, longitude: 77.18317139999999}, 
 //  radius: 10,
 //  inputBinding: {
 //        latitudeInput: $('#lat'),
 //        longitudeInput: $('#lng'),
 //        radiusInput: $('#radius'),
 //        locationNameInput: $('#location')
 //    }
 //  });
  google.maps.event.addListener(map, 'click', function(event) {                
        //Get the location that the user clicked.
        var clickedLocation = event.latLng;
        console.log(event);
        //If the marker hasn't been added.
        if(marker === false){
            //Create the marker.
            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true //make it draggable
            });
            //Listen for drag events!
            google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
            });
        } else{
            //Marker has already been added, so just change its location.
            console.log("yo");
            marker.setPosition(clickedLocation);
        }


//         var circle = new google.maps.Circle({
//   map: map,
//   radius: 5,    // 10 miles in metres
//   fillColor: '#AA0000'
// });
// circle.bindTo('center', marker, 'position');


        //Get the marker's location.
        markerLocation();
    });
}

function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    document.getElementById('lat').value = currentLocation.lat(); //latitude
    document.getElementById('lng').value = currentLocation.lng(); //longitude
    // document.getElementById('location').value = marker.getPlace.name; //longitude

    var geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    latLng: currentLocation
  }, function(responses) {
    if (responses && responses.length > 0) {
      document.getElementById('location').value=responses[0].formatted_address;
      console.log(responses);

    } else {
     document.getElementById('location').value='Unknown location.';
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

  function signUp()
  {

      var formData={
                'name' : $('#name').val(),
                'email':$('#email').val(),
                'password':$('#password').val(),
                'password_confirmation':$('#confirmpassword').val(),
                '_token':$('#token').val()
                };


                 $.ajax({
  url: '/register/',
  type: 'POST',
  data: formData,
  success: function(data) {

    Materialize.toast('Signed In Succesfully', 4000,'rounded')
    $('#signup').closeModal();

  },
  error: function(e) {
  //called when there is an error
  console.log(e);
  alert('data not added, !!');
  }

   });


    console.log(formData);


  };
 
   </script>
  
<script>
        $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $(".button-collapse").sideNav();
    // $('.collapsible').collapsible();
  });

</script>
