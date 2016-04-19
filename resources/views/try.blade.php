    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title>Minip</title>

      <!-- CSS  -->

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link href="{{asset('/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>




    </head>
    <body>


 <!--      <div class="row">
        <div class="col s4">
          <div class="card">
            <div class=" card-content black-text">

              <div class="col s6 center">
                <span class="card-title">Card Title</span>   

              </div>
              <div class="col s6">
               <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>  
              </div>

            </div>
          </div>
        </div>
      </div >
    -->
    <div class="row">
      <div class="col s4 ">
        <div class="card-panel hoverable teal">
          <div class="row no-padding">

           <div class="col s12 ">


              <div class="col s12">
                <div class=" col s6 ">
                  <p>Gender: Male </p>
                  <p>Age: 23 </p>
                  <p>Date: 23 April 2016 </p>

                </div>

                <div class=" col s6 ">


                  <img class= "materialboxed" src="{{asset("images/mosquito1.png")}}">

                </div>
              </div>
            </div>
    


          <div class=" col s12 ">
            <div class="card-panel teal hoverable ">
              <p>Hi I was bitten as Sac when i was returning from institute to hostel at 12 pm.

              </div>

            </div>

          </div>
        </div>
      </div>


    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/materialize.min.js')}}"></script>
  </body>
  </html>

