    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Minip</title>

      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="{{asset('/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="{{asset('/css/pikaday.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

      <script src="https://code.highcharts.com"></script>
      <!-- <link href="{{asset('/css/bootstrap-slider.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> -->
        <!-- <link href="{{asset('/css/nouislider.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{asset('/css/nouislider.tooltips.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{asset('/css/nouislider.pips.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> -->


      </head>
      <body style="">



        <div  class"left" style="width:15%; height:615px;border:1px solid black;float:left">
          <div style='height:100%;overflow-x:hidden;float:left' >

           <ul  id= "menu" class="collapsible" data-collapsible="accordion" style=" margin-top:-1%;margin-right:-8%; ">
            <li>
              <div class="collapsible-header"><i class="material-icons">filter_drama</i>Dengue </div>
              <div class="collapsible-body">
                <ul>
                  <li class="collapsible-header" style="margin-left:40px"><a type="button"  id ="reloadMap1"><i class="material-icons">places</i>Show Map</a></li>
                  <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadGraph1"><i class="material-icons">trending_up</i>Graphs</a></li>
                  <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadHeatMap1"><i class="material-icons">trending_up</i>Heat Maps</a></li>
                </ul>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">place</i>Dog Bites</div>
              <div class="collapsible-body"><ul>
                <li class="collapsible-header" style="margin-left:40px"><a type="button"  id ="reloadMap2"><i class="material-icons">places</i>Show Map</a></li>
                <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadGraph2"><i class="material-icons">trending_up</i>Graphs</a></li>
                <li class="collapsible-header" style="margin-left:35px" ><a type="button"  id ="reloadHeatMap2"><i class="material-icons">trending_up</i>Heat Maps</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><a style="color:black"   onclick="register(); return false;" ><i style="color:black" class="material-icons">receipt</i>Report Incident</a></div>
          </li>

        </ul>




        <div id ="registerform" class="container" style="display:none;">
          <form >
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Location" id="location" type="text" class="validate">
                <!-- <label for="location">Location</label> -->
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
                <input placeholder="lat" id="lat" type="text" class="validate">
                <!-- <label for="lat">Lat</label> -->
              </div>

            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="lng" id="lng" type="text" class="validate">
                <!-- <label for="lng">Long</label> -->
              </div>

            </div>
            <div class="col  l5 blue-text text-darken-2 ">
              <input type="date" class="datepicker center-align" value="<?php echo date("d-M-Y"); ?>" id="idate" placeholder="Date" style="margin:5px;">
            </div>
            <div class="row">

              <button type="button" onclick="saveData(); return false;" class="waves-effect waves-light btn">Save</button>
              <button type="button" onclick="back(); return false;" class="waves-effect waves-light btn">Back</button>

            </div>

          </form>
        </div>

      </div>

    </div>  




    <!-- signup Modal Structure -->

    <div  class="container" id="graphContainer" style="height: 400px; width: 1100px;display:none">

    </div>



    <div  style="width: 84%;height: 78%; float:right; margin-right:0px; margin-bottom:0px; margin-top:0px; margin-right:2px; ">

      <div class="row no-padding left" style="position:relative;z-index:1;padding-left:px;">
        <!-- <div class="row"> -->
        <div class="col l7 m7 no-padding " >
          <div class="row card-panel hoverable  no-padding">
            <div class="col l5 blue-text  text-darken-2 ">
              <input type="date" class="datepicker center-align" value="<?php echo date('d-M-Y', strtotime("-1 months", strtotime("NOW"))); ?>" id="sdate"  style="margin:5px;border-bottom:0px;">
            </div>
            <div class="col l2 center-align text-darken-2 ">
              <p>to</p>
            </div>
            <div class="col  l5 blue-text text-darken-2 ">
              <input type="date" class="datepicker center-align" value="<?php echo date("d-M-Y"); ?>" id="edate" placeholder="End Date" style="margin:5px;border-bottom:0px;">
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>

      <div class="container" id ="map" style="position:absolute;width: 84%;height: 96%;border:1px solid black;margin-bottom:-10px" >


        <script>

        var map = null;
        var marker=null;
        var markers=[];
        var mosImage= "{{asset('/images/marker.png')}}";
        var mapData=null;
        var mapDataType="mosquito";
        var heatmap=null;
        var state= 0;

        function initMap() {
          var myLatLng = {lat: 28.54539, lng: 77.188181};
          map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            disableDefaultUI:true,
            center:myLatLng,
            zoomControl:true,
            rotateControl:true
          });
      // map.setTilt(45);
      // map.setHeading(map.getHeading()||0+45);

      marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'IIT Delhi',
        draggable: true,
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

<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY','null')}}&signed_in=false&libraries=visualization&callback=initMap"></script> </script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('/js/moment.js')}}"></script>

<script src="{{asset('/js/pikaday.js')}}"></script>




<script >


$(document).ready(function()
{




  $("#reloadMap1").on('click', function() {
    document.getElementById("map").style.display = "";
    document.getElementById("graphContainer").style.display = "none"


    getData(mapDataType);



  });
  $("#sdate").on('change',function(){
            // var date=$('#sdate').val();
            // var newdate = $('#sdate').val().split("-").reverse().join("-");
            // console.log(newdate);
            if(state==0)
            {
              getData(mapDataType);
            }
            if(state==1)
            {
              showGraph(mapDataType);

            }
            if(state==2)
            {
              showHeatMap(mapDataType);

            }


          });

  $("#edate").on('change',function(){
    if(state==0)
    {
      getData(mapDataType);
    }
    if(state==1)
    {
      showGraph(mapDataType);

    }
    if(state==2)
    {
      showHeatMap(mapDataType);

    }


  });

  $("#reloadMap2").on('click', function() {
            // console.log('cbekvbhwv');

            document.getElementById("map").style.display = "";
            document.getElementById("graphContainer").style.display = "none"

            getData(mapDataType);



          });


      // $('.datepicker').pickadate({
      //   selectMonths: true,
      //   selectYears: 10,
      //   startDate:'1-1-2015',
      //   format: 'dd-mmm-yyyy',
      //   defaultdate: 'toady'
      // });
    var picker1 = new Pikaday({ field: document.getElementById('sdate'),
      format: 'D-MMM-YYYY',
      defaultDate:'today' });
    var picker2 = new Pikaday({ field: document.getElementById('edate'),
      format: 'D-MMM-YYYY',
      defaultDate:'today'
    });
    var picker3 = new Pikaday({ field: document.getElementById('idate'),
      format: 'D-MMM-YYYY',
      defaultDate:'today'
    });



      //       $('.datepicker').pickadate({
      //   selectMonths: true, // Creates a dropdown to control month
      //   selectYears: 15 // Creates a dropdown of 15 years to control year
      // });

    $("#reloadGraph1").on('click', function() {
            // console.log('cbekvbhwv');
            showGraph('mosquito');



          });

    $("#reloadGraph2").on('click', function() {
            // console.log('cbekvbhwv');
            showGraph('dog');



          });
    $("#reloadHeatMap1").on('click', function() {
            // console.log('cbekvbhwv');
            showHeatMap('mosquito');



          });             $("#reloadHeatMap2").on('click', function() {
            // console.log('cbekvbhwv');
            showHeatMap('dog');



          });




        });
    </script>

    <script src="{{asset('/js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>
    <script src="{{asset('/js/locationpicker.jquery.js')}}"></script>
    <!-- <script src="{{asset('/js/nouislider.js')}}"></script> -->
    <script src="{{asset('/js/jquery.canvasjs.min.js')}}"></script>
    <script src="{{asset('/js/canvasjs.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap-slider.min.js')}}"></script>

    <script>

    </script>

    <script language="javascript" type="text/javascript">




    function showGraph(type)
    {
      state=1;
      document.getElementById("map").style.display = "none";
      document.getElementById("graphContainer").style.display = ""; 

      var syear=$('#sdate').val().split("-")[2];
      var eyear=$('#edate').val().split("-")[2];
      var dataobj= {'type':type,'syear':syear,'eyear':eyear};
      $.ajax({
        url: '/graphdata/',
        type: 'GET',
        data: dataobj,
        success: function(data) {
          mapDataType=type;
      // console.log(data);

      var jsonData=(data);
      var formateddata=[];
      for( var i=0; i<jsonData.length;i++)
      {
       var dat=jsonData[i];
       var d= {x: new Date(dat.Year,dat.Month-1,1) , y:dat.Count};
       formateddata.push(d);
     }
      // console.log(formateddata);
      plotGraph(formateddata);


      // setMapOnAll(map);
    },
    error: function(e) {
      //called when there is an error
      console.log(e.message);
    }

  });

            // plotGraph();



          }

          function plotGraph(data)
          {

            var chart = new CanvasJS.Chart("graphContainer",
            {
              theme: "theme1",
              title:{
                text: "Dengue Cases"
              },
              animationEnabled: true,
              axisX: {
                valueFormatString: "MMM",
                interval:1,
                intervalType: "month"

              },
              axisY:{
                includeZero: false

              },
              data: [
              {        
                type: "line",
            //lineThickness: 3,        
            dataPoints: data
          }
          
          ]
        });

            chart.render();

          }


          function getData(type) {
            state=0;


            var month= {'Jan':1, 'Feb':2, 'Mar':3, 'Apr':4, 'May':5, 'Jun':6, 'Jul':7, 'Aug':8, 'Sep':9, 'Oct':10, 'Nov':11, 'Dec':12};
            var arr1= $('#sdate').val().split("-");
            var arr2= $('#edate').val().split("-");

            arr1[1]=month[arr1[1]];
            arr2[1]=month[arr2[1]];


            var sdate= arr1.reverse().join("-");;
            var edate= arr2.reverse().join("-");
            console.log(sdate);
            console.log(edate);
            var dataobj= {'type':type,'sdate':sdate,'edate':edate};

            $.ajax({
              url: '/mapdata/',
              type: 'GET',
              data: dataobj,
              success: function(data) {
      // console.log(data);
      mapData=data;
      mapDataType=type;
      setMapOnAll(null);
      setData(data);
      heatmap.setMap(null);
      // setMapOnAll(map);
    },
    error: function(e) {
      //called when there is an error
      console.log(e.message);
    }

  });
          }

          function showHeatMap(type)
          {
           state=2;
           document.getElementById("map").style.display = "";
           document.getElementById("graphContainer").style.display = "none";


           var month= {'Jan':1, 'Feb':2, 'Mar':3, 'Apr':4, 'May':5, 'Jun':6, 'Jul':7, 'Aug':8, 'Sep':9, 'Oct':10, 'Nov':11, 'Dec':12};
           var arr1= $('#sdate').val().split("-");
           var arr2= $('#edate').val().split("-");

           arr1[1]=month[arr1[1]];
           arr2[1]=month[arr2[1]];
           var sdate= arr1.reverse().join("-");;
           var edate= arr2.reverse().join("-");

           var dataobj= {'type':type,'sdate':sdate,'edate':edate};

           $.ajax({
            url: '/mapdata/',
            type: 'GET',
            data: dataobj,
            success: function(data) {
      // console.log(data);
      mapData=data;
      mapDataType=type;
      if(heatmap!=null)
      {
        heatmap.setMap(null);


      }
      // heatmap.setMap(null);

      var heatMapData=[];
      for(var i=0; i <mapData.length;i++)
      {
        var d=new google.maps.LatLng(mapData[i].lat, mapData[i].lng);
        heatMapData.push(d);
      }

      heatmap = new google.maps.visualization.HeatmapLayer({
        data:heatMapData,
        map:map

      });
      setMapOnAll(null);
      // setMapOnAll(map);




    },
    error: function(e) {
      //called when there is an error
      console.log(e.message);
    }

  });

        // heatmap.setMap(map);


      }

      function setData(locations) {

       console.log(locations);
       console.log("setting data on map");

       for(var i=0; i<locations.length;i++)
       {
        markers.push(new google.maps.Marker({ position: locations[i],
          map: map,
          title: 'Dengue',
          icon: mosImage,
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
          //$('#radius').val()
          var formData={
            'type' : $('#type').val(),
            'lat':$('#lat').val(),
            'lng':$('#lng').val(),
            'radius': 5         
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
