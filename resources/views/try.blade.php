
<html>

<head>
<link href="{{asset('/css/bootstrap-slider.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>



    <!-- <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> -->

    <div style="width:50%; height:10%">  
      <input id="ex2" style="width:100%" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/>
    </div>

  </body>


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="{{asset('/js/bootstrap-slider.js')}}"></script>
<style>
#ex2Slider .slider-selection {
  background: #BABABA;
}
</style>
  
<!-- <script src="{{asset('/js/extras/noUislider/nouislider.js')}}"></script> -->

  <script type="text/javascript">

 

$("#ex2").slider({});

 </script>


</html>



