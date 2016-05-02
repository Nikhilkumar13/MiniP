    <!DOCTYPE html>
    <html lang="en"   style="height: 100%">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Minip</title>

      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('/css/jsgrid/jsgrid-theme.min.css')}}">
      <link href="{{asset('/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="{{asset('/css/pikaday.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="{{asset('/css/jsgrid/jsgrid.min.css')}}">


      <style>


        .gm-style-iw {
         width: 400px !important;
         top: 20px !important;
         left: 20px !important;
         background-color: #fff;
         box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
         border: 2px solid rgba(72, 181, 233, 0.6);
         border-radius: 2px 2px 10px 10px;
       }

     </style>




   </head>
   <body style="height: 100%;" >



    <div  class="row"  style="height: 80%">

      <div class="col s2 " >
       <ul  id= "menu" class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header active"><i class="material-icons">bug_report</i>Dengue Cases </div>
          <div class="collapsible-body">
            <ul>
              <li class="collapsible-header" style="margin-left:20px"><a type="button"  id ="reloadMap1"><i class="material-icons">places</i>Location</a></li>
              <li class="collapsible-header" style="margin-left:20px" ><a type="button"  id ="reloadGraph1"><i class="material-icons">trending_up</i>Graphs</a></li>
              <li class="collapsible-header" style="margin-left:20px" ><a type="button"  id ="reloadHeatMap1"><i class="material-icons">layers</i>Heat Maps</a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">pets</i>Dog Bites</div>
          <div class="collapsible-body"><ul>
            <li class="collapsible-header" style="margin-left:20px"><a type="button"  id ="reloadMap2"><i class="material-icons">places</i>Location</a></li>
            <li class="collapsible-header" style="margin-left:20px" ><a type="button"  id ="reloadGraph2"><i class="material-icons">trending_up</i>Graphs</a></li>
            <li class="collapsible-header" style="margin-left:20px" ><a type="button"  id ="reloadHeatMap2"><i class="material-icons">layers</i>Heat Maps</a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><a style="color:black"   onclick="register(); return false;" ><i style="color:black" class="material-icons">add_location</i>Report Incident</a></div>
      </li>
      <li>
        <div class="collapsible-header"><a style="color:black"   onclick="showmycases(); return false;" ><i style="color:black" class="material-icons">add_location</i>My Cases</a></div>
      </li>

    </ul>
  </div>




  <div id ="registerform" class="col s2" style="display:none;">
    <form class="formValidate" id="formdata" style="">


      <div class="row">
        <div class="input-field col s12">
          <input  data-error="Age required! "name="age" placeholder="Your Age" id="age" type="text" class="validate truncate">
          <label for="age">User Age</label>
        </div>
      </div>


      <div class="row" style="display:none">
        <div class="input-field col s6 ">
          <input placeholder="lat" id="lat" type="text" class="validate truncate" >

          <label for="lat">Lat</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="lng" id="lng" type="text" class="validate truncate">
          <label for="lng">Long</label>


        </div>


      </div>
      <div class="row" style="display:none">
        <div class="input-field col s6 ">
          <input placeholder="Location" id="location" type="text" class="validate truncate" >

          <label for="location">Location</label>
        </div>


      </div>



      <div class="row" >
        <div class="col s6">
          <input name="gendergroup"  type="radio"  value ="male"  id="genderm" checked />

          <label for="genderm">Male</label>
        </div>

        <div class="col s6">
          <input name="gendergroup"  type="radio" value ="female"  id="genderf" />

          <label for="genderf">Female</label>
        </div>


      </div>



      <div class="row" >
        <div class="col s6">
          <input name="typegroup" type="radio"  value ="mosquito"  id="test1" checked />

          <label for="test1">Mosquito</label>
        </div>

        <div class="col s6">
          <input name="typegroup"  type="radio" value ="dog"  id="test2" />

          <label for="test2">Dog</label>
        </div>


      </div>

      <div class="row">



       <div class="col s6   blue-text text-darken-2 no-padding">
        <input placeholder="idate" type="date" class="datepicker tooltipped center-align" data-position="bottom" data-delay="50" data-tooltip="Click here to input date of the day you got bitten" value="<?php echo date("d-M-Y"); ?>" id="idate">
      </div>

      <div class="col s6 no-padding">
       <select  class= "browser-default" name="time" id="time">
        <option value="1:00">1:00 AM</option>
        <option value="1:30">1:30 AM</option>

        <option value="2:00">2:00 AM</option>
        <option value="2:30">2:30 AM</option>

        <option value="3:00">3:00 AM</option>
        <option value="3:30">3:30 AM</option>

        <option value="4:00">4:00 AM</option>
        <option value="4:30">4:30 AM</option>

        <option value="5:00">5:00 AM</option>
        <option value="5:30">5:30 AM</option>

        <option value="6:00">6:00 AM</option>
        <option value="6:30">6:30 AM</option>

        <option value="7:00">7:00 AM</option>
        <option value="7:30">7:30 AM</option>

        <option value="8:00">8:00 AM</option>
        <option value="8:30">8:30 AM</option>

        <option value="9:00">9:00 AM</option>
        <option value="9:30">9:30 AM</option>

        <option value="10:00">10:00 AM</option>
        <option value="10:30">10:30 AM</option>

        <option value="11:00">11:00 AM</option>
        <option value="11:30">11:30 AM</option>

        <option value="12:00">12:00 PM</option>
        <option value="12:30">12:30 PM</option>

        <option value="13:00">1:00 PM</option>
        <option value="13:30">1:30 PM</option>


        <option value="14:00">2:00 PM</option>
        <option value="14:30">2:30 PM</option>

        <option value="15:00">3:00 PM</option>
        <option value="15:30">3:30 PM</option>


        <option value="16:00">4:00 PM</option>
        <option value="16:30">4:30 PM</option>


        <option selected="selected" value="17:00">5:00 PM</option>
        <option value="17:30">5:30 PM</option>


        <option value="18:00">6:00 PM</option>
        <option value="18:30">6:30 PM</option>


        <option value="19:00">7:00 PM</option>
        <option value="19:30">7:30 PM</option>


        <option value="20:00">8:00 PM</option>
        <option value="20:30">8:30 PM</option>


        <option value="21:00">9:00 PM</option>
        <option value="21:30">9:30 PM</option>


        <option value="22:00">10:00 PM</option>
        <option value="22:30">10:30 PM</option>

        <option value="23:00">11:00 PM</option>
        <option value="23:30">11:30 PM</option>
      </select>
    </div>



  </div>
  <div class="file-field input-field">
    <div class="btn">
      <span>Photo</span>
      <input type="file">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>


  <div class="row">
    <div class="input-field col s12" >
      <textarea id="commentbox" class="materialize-textarea" length="200" ></textarea>
      <label for="commentbox">Comment Box</label>
    </div>
  </div>





  <div class="row">

    <div class="divider"></div>

    <div class="section">
      <button type="button" onclick="saveData(); return false;" class=" btn waves-effect waves-light btn col s5 right" data-position="bottom" data-delay="50" data-tooltip="Click me to Save Current Information filled">Save</button>
      <button type="button" onclick="back(); return false;" class="waves-effect waves-light btn col s5 left" data-position="bottom" data-delay="50" data-tooltip="Click me to go back to previous panel">Back</button>

    </div>
  </div>

</form>
</div>







<div class="col s10 no-padding ">
  <div class="row">

    <div  id = "datepanel" class="col s3" style="position:relative;z-index:1; margin-top:10px">

      <div class="row card-panel  hoverable  no-padding">
        <div class="col s5 no-padding ">

          <input type="date" class="datepicker center-align  blue-text text-darken-2" value="<?php echo date('d-M-Y', strtotime("-1 months", strtotime("NOW"))); ?>" id="sdate"  style="margin:5px;border-bottom:0px;">
        </div>


        <div class="col s2  no-padding ">
          <p class=" center-align text-darken-2 ">to</p>
        </div>

        <div class="col s5 no-padding">
          <input type="date" class="datepicker center-align blue-text text-darken-2" value="<?php echo date("d-M-Y"); ?>" id="edate" placeholder="End Date" style="margin:5px;border-bottom:0px;">
        </div>

      </div>
    </div>

    <div class="col s10 no-padding "  id= "mapcontainer" style="position:absolute;height:95%;" >
      <div class="col s12 center   card no-padding" id ="map" style="height:100%;" >


        <script>

          var map = null;
          var marker=null;
          var markers=[];
          var mosImage= "{{asset('/images/marker.png')}}";
          var mapData=null;
          var mapDataType="mosquito";
          var heatmap=null;
          var state= 0;
          var clickListener=null;
          var chart=null;

          function initMap() {
            var myLatLng = {lat: 28.54539, lng: 77.188181};
            map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center:myLatLng,
              dafaultUI:false,
              zoomControl:true,
              rotateControl:true,
            });


            marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: 'IIT Delhi',
              draggable: true,
            });
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
  </div>
</div>

<div  class="col s10  no-padding"  id="graphContainer" style="height: 400px; display:none">

  <div class="col s11  "  id="graph" style="width:100%;height:100%">

  </div>

</div>


<div class="col s10 no-padding" id="mycasescontainer" style="display: none;height: 100%; margin-top: -20px">
  <div class="card-panel" style="height: 90%">

    <table id="requesttable" class="table">
      <thead>
        <tr>
          <th data-align="center">Id</th>
          <th data-align="center">Location</th>
        </tr>
      </thead>

    </table>
  </div>
</div>
</div>  




<footer  class= "orange" style="margin-bottom:0px;bottom:0px; position:fixed; width:100%" >
  <div class="page-footer orange footer-copyright ">
    <div class="col s6 left orange">
      An Smart Campus Initiative <a class=" black-text" >IIT-Delhi</a>
    </div>

    <div class="col s6 right orange">
      Made by <a class="blue-text text-lighten-4" >Nikhil Kumar</a>
    </div>
  </div>
</footer>





</body>
</html>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY','null')}}&signed_in=false&libraries=visualization&callback=initMap"></script> </script>
<script src="{{asset('/js/moment.js')}}"></script>

<script src="{{asset('/js/pikaday.js')}}"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="{{asset('/js/jsgrid/jsgrid.min.js')}}"></script>





<script >
  $( document ).ready(function() {





    $('.tooltipped').tooltip({delay: 50});
    $( 'textarea#commentbox').characterCounter();
    $('.materialboxed').materialbox();


    $("#reloadMap1").on('click', function() {
      document.getElementById("mapcontainer").style.display = "";
      document.getElementById("map").style.display = "";
      document.getElementById("graphContainer").style.display = "none"
      document.getElementById("datepanel").style.display = "";
      document.getElementById("mycasescontainer").style.display = "none";


      mapDataType='mosquito';

      getData(mapDataType);



    });

    $("#sdate").on('change',function(){

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


      document.getElementById("map").style.display = "";
      document.getElementById("mapcontainer").style.display = "";
      document.getElementById("graphContainer").style.display = "none"
      document.getElementById("mycasescontainer").style.display = "none";

      mapDataType='dog';
      console.log(mapDataType);

      getData(mapDataType);



    });


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




    $("#reloadGraph1").on('click', function() {
      showGraph('mosquito');



    });

    $("#reloadGraph2").on('click', function() {
      showGraph('dog');



    });
    $("#reloadHeatMap1").on('click', function() {
      showHeatMap('mosquito');



    });             $("#reloadHeatMap2").on('click', function() {
      showHeatMap('dog');



    });




  });

</script>

<script src="{{asset('/js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>

<script>

</script>

<script language="javascript" type="text/javascript">




  function showGraph(type)
  {
    state=1;
    document.getElementById("mapcontainer").style.display = "none";

    document.getElementById("map").style.display = "none";
    document.getElementById("mycasescontainer").style.display = "none";
    document.getElementById("graphContainer").style.display = ""; 

      // document.getElementById("datepanel").style.display = "none";


      var sdate= moment($('#sdate').val(),'D-MMM-YYYY').format('YYYY-MM-DD');
      var edate= moment($('#edate').val(),'D-MMM-YYYY').format('YYYY-MM-DD');

      var dataobj= {'type':type,'sdate':sdate,'edate':edate};
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
       var d= {date: new Date(dat.date) , value:dat.Count};
       formateddata.push(d);
     }
      // console.log(formateddata);
      if(type=="dog")
      {
        plotGraph(formateddata ," Dog  Cases TimeLine");

      }
      else
      {
        plotGraph(formateddata , "Dengue Cases TimeLine");

      }


      // setMapOnAll(map);
    },
    error: function(e) {
      console.log(e.message);
    }

  });

      


    }

    function plotGraph(data , title)
    {

      chart = AmCharts.makeChart("graph", {
        "type": "serial",
        "theme": "light",
        "marginRight": 20,
        "marginLeft": 20,
        "autoMarginOffset": 20,
        "mouseWheelZoomEnabled":true,
        "dataDateFormat": "YYYY-MM-DD",
        "titles": [  {
          "text": title,
          "size": 15
        }
        ],
        "valueAxes": [{
          "id": "v1",
          "axisAlpha": 0,
          "position": "left",
          "ignoreAxisWidth":true,
          "title":"No. of Cases",
        }],
        "balloon": {
          "borderThickness": 1,
          "shadowAlpha": 0
        },
        "graphs": [{
          "id": "g1",
          "balloon":{
            "drop":true,
            "adjustBorderColor":false,
            "color":"#ffffff"
          },
          "bullet": "round",
          "bulletBorderAlpha": 1,
          "bulletColor": "#FFFFFF",
          "bulletSize": 5,
          "hideBulletsCount": 50,
          "lineThickness": 2,
          "title": "red line",
          "useLineColorForBulletBorder": true,
          "valueField": "value",
          "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
        }],
        "chartScrollbar": {
          "graph": "g1",
          "oppositeAxis":false,
          "offset":30,
          "scrollbarHeight": 80,
          "backgroundAlpha": 0,
          "selectedBackgroundAlpha": 0.1,
          "selectedBackgroundColor": "#888888",
          "graphFillAlpha": 0,
          "graphLineAlpha": 0.5,
          "selectedGraphFillAlpha": 0,
          "selectedGraphLineAlpha": 1,
          "autoGridCount":true,
          "color":"#AAAAAA"
        },
        "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha":1,
          "cursorColor":"#258cbb",
          "limitToGraph":"g1",
          "valueLineAlpha":0.2
        },
        "valueScrollbar":{
          "oppositeAxis":false,
          "offset":50,
          "scrollbarHeight":10
        },
        "categoryField": "date",
        "categoryAxis": {
          "parseDates": true,
          "dashLength": 1,
          "minorGridEnabled": true
        },
        "export": {
          "enabled": true
        },
        "dataProvider":data
      });

      chart.addListener("rendered", zoomChart);

      zoomChart();
    }

    function zoomChart() {
      chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
    }

    function getData(type) {
      state=0;
      google.maps.event.removeListener(clickListener);
      var sdate= moment($('#sdate').val(),'D-MMM-YYYY').format('YYYY-MM-DD');
      var edate= moment($('#edate').val(),'D-MMM-YYYY').format('YYYY-MM-DD');
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
      try {
       heatmap.setMap(null);}
       catch(err) {
        console.log("error handled");
      }
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
     document.getElementById("mapcontainer").style.display = "";

     document.getElementById("map").style.display = "";
     document.getElementById("graphContainer").style.display = "none";
     document.getElementById("datepanel").style.display = "";
     document.getElementById("mycasescontainer").style.display = "none";

     var sdate= moment($('#sdate').val(),'D-MMM-YYYY').format('YYYY-MM-DD');
     var edate= moment($('#edate').val(),'D-MMM-YYYY').format('YYYY-MM-DD');

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




      function attachSecretMessage(marker, secretMessage) {
        console.log();
        // var suburl="caseimage/"+;
        var url =  "{{asset("caseimage")}}"; 
        var content=   '<div class="row" style="margin-bottom:0px">'+
        '<div class="col s12">'+
        ' <div class="row no-padding"  style="margin-bottom:0px" >'+
        '<div class="col s12 ">'+
        '<div class=" col s4 ">'+
        '<p style="text-align:left" >'+
        'Gender: '+secretMessage['gender'] +
        '</p>'+
        '<p style="text-align:left">'+ 
        'Age: '+secretMessage['age'] +
        '</p>'+
        '<p style="text-align:left" >'+
        ' Date: '+secretMessage['formated_date']+
        '</p>'+
        '</p>'+
        '<p style="text-align:left" >'+
        ' Time: '+secretMessage['time']+
        '</p>'+
        '</div>'+

        '<div class=" col s8 ">'+
        '<img class= "materialboxed responsive-img right padding" width="80%" src="'+ url + '/'+secretMessage['url']+' ")}}">'+
        '</div>'+

        '</div>'+

        '<div class=" col s12 ">'+
        '<div class="col s12">'+
        '<div class="card-panel  hoverable ">'+
        '<p > '+
        secretMessage['comment']+
        '</p>'+

        '</div>'+

        '</div>'+
        '</div>'+

        '</div>'+
        '</div>'+
        '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: content
        });

        marker.addListener('click', function() {
          infowindow.open(marker.get('map'), marker);
        });

        google.maps.event.addListener(infowindow, 'domready', function() {

   // Reference to the DIV which receives the contents of the infowindow using jQuery
   var iwOuter = $('.gm-style-iw');

   /* The DIV we want to change is above the .gm-style-iw DIV.
    * So, we use jQuery and create a iwBackground variable,
    * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
    */
    var iwBackground = iwOuter.prev();

   // Remove the background shadow DIV
   iwBackground.children(':nth-child(2)').css({'display' : 'none'});

   // Remove the white background DIV
   iwBackground.children(':nth-child(4)').css({'display' : 'none'});

   var iwCloseBtn = iwOuter.next();

// Apply the desired effect to the close button
iwCloseBtn.css({
  opacity: '1', // by default the close button has an opacity of 0.7
  right: '24px', top: '10px', // button repositioning
   border: '0px solid #48b5e9', // increasing button border and new color
  'border-radius': '2px', // circular effect
  'box-shadow': '0 0 5px #3990B9' // 3D effect to highlight the button
});

// The API automatically applies 0.7 opacity to the button after the mouseout event.
// This function reverses this event to the desired value.
iwCloseBtn.mouseout(function(){
  $(this).css({opacity: '1'});
});

});

      }


      function setData(locations) {

       console.log(locations);
       console.log("setting data on map");

       for(var i=0; i<locations.length;i++)
       {

        var datamarker=new google.maps.Marker({ position: locations[i],
          map: map,
          icon: mosImage,
        });
        attachSecretMessage(datamarker,locations[i]); 
        markers.push(datamarker);
      }

    }

    function setMapOnAll(map)
    {
     for(var i=0; i <markers.length;i++)
     {
      markers[i].setMap(map);
    }

  }



  function back()
  {
    document.getElementById("registerform").style.display = "none";
    document.getElementById("menu").style.display = "";
    document.getElementById("datepanel").style.display = "";


  }

  function register()
  {

        // setMapOnAll(null);
        for(var i=0; i <markers.length;i++)
        {
          markers[i].setMap(null);
        }

        document.getElementById("menu").style.display = "none";
        document.getElementById("datepanel").style.display = "none";
        document.getElementById("registerform").style.display = "";
        document.getElementById("graphContainer").style.display = "none"; 
        document.getElementById("mapcontainer").style.display = "";
        document.getElementById("map").style.display = "";
        document.getElementById("mycasescontainer").style.display = "none";


        try {
         heatmap.setMap(null);}
         catch(err) {
          console.log("error handled");
        }
        



        clickListener= google.maps.event.addListener(map, 'click', function(event) {           
 //Get the location that the user clicked.
 var clickedLocation = event.latLng;
 console.log(event);
            //If the marker hasn't been added.
            if(marker === false){
                //Create the marker.
                marker = new google.maps.Marker({
                  position: clickedLocation,
                  map: map,
                    draggable: false //make it draggable
                  });
                //Listen for drag events!
                google.maps.event.addListener(marker, 'dragend', function(event){
                  markerLocation();
                });
              } else{
                //Marker has already been added, so just change its location.
                console.log("yo");
                marker.setTitle("");
                marker.setPosition(clickedLocation);

              }


              markerLocation();
            });
        Materialize.toast('Choose a Location on Map', 4000, 'rounded')




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
            marker.setTitle(''+responses[0].formatted_address);
            document.getElementById('location').value=responses[0].formatted_address;
            console.log(responses);

          } else {
           document.getElementById('location').value='Unknown location.';
         }
       });

      }



      function saveData() {

        var formData = new FormData();
        formData.append('type', $('input[name=typegroup]:checked').val());
        formData.append('gender',  $('input[name=gendergroup]:checked').val());
        formData.append( 'time',  $( "#time" ).val() );
        formData.append( 'lat', $('#lat').val() );
        formData.append('lng' , $('#lng').val() );
        formData.append('location' , $('#location').val() );
        formData.append( 'age',$('#age').val());
        formData.append( 'date',moment($('#idate').val(),'D-MMM-YYYY').format('YYYY-MM-DD'));
        formData.append( 'comment', $('#commentbox').val());
// Main magic with files here
formData.append('image', $('input[type=file]')[0].files[0]);
console.log(formData);
$.ajax({
  url: '/savedata/',
  type: 'POST',
  data: formData,
  processData: false,
  contentType: false,
  success: function(data) {

    Materialize.toast('Saved!', 4000, 'rounded')

  },
  error: function(e) {
      //called when there is an error
      console.log(e.message);
      Materialize.toast('Opps! did you forgot to fill something?', 4000, 'rounded')
    }

  });
}

function showmycases()
{

      // document.getElementById("menu").style.display = "none";
      document.getElementById("datepanel").style.display = "none";
      document.getElementById("registerform").style.display = "none";
      document.getElementById("graphContainer").style.display = "none"; 
      document.getElementById("mapcontainer").style.display = "none";
      document.getElementById("map").style.display = "none";
      document.getElementById("mycasescontainer").style.display = "";
      $("#requesttable").jsGrid({
                height: "auto",
                width: "100%",
                filtering: false,
                selecting:false,
                editing: false,
                sorting: true,
                paging: true,
                autoload: true,
                scroll: false,
                pageSize:5,
                controller: {
                    loadData: function(filter) {
                        var d = jQuery.Deferred();
                        $.ajax({
                            type: "GET",
                            url: '{{ url('mycasedata') }}',
                            data: {uid:'cs1120238'},
                            dataType: "json"
                        }).done(function(response) {
                            console.log(response);
                            d.resolve(response);
                        });
                        return d.promise();
                    },
                     deleteItem: function(item) {
                        var d = jQuery.Deferred();
                        $.ajax({
                            type: "PUT",
                            url: '{{ url('mycasedata') }}',
                            data: {uid:'cs1120238',id:item['id']},
                            dataType: "json"
                        });
                    }
                },
                pageButtonCount: 5,

                deleteConfirm: "Do you really want to delete this case?",
                    //autosearch:"true";
               fields:[
                    {title:"Case Id",editing: false,inserting: false, name: "id", type: "text", width: "100" },
                    
                    { title:"Date",align:"center",editing:false,name: "date", type: "text",editing:false,inserting: false, width: "150" },
                    {title:"Location" ,name: "location", type: "text",editing:false,inserting: false,width: "200"},
                    {title:"Type" ,name: "type", type: "text",editing:false,inserting: false,width: "100"},
                    {type: "control" ,modeSwitchButton: false, deleteButton: true},
                ]
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
