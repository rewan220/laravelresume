<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="mywork.css" />
  </head>
  <body>

  

    <div class="card" onclick="emsfunction()">
      <div class="card-image"></div>
      <div class="card-text">
        <span class="date">EMS</span>
        <h2>management system to schedule a company's data</h2>
        <p>its can be modified to all kind of Management system depending on the Agent wishes</p>
      </div>
      <div class="card-stats">
       
      </div>
    </div>
    <div class="card" onclick="shopfunction()">
      <div class="card-image card2"></div>
      <div class="card-text card2">
        <span class="date">clothes Store</span>
        <h2>E-commerece System</h2>
        <p>can be modified to all kind of shopping pages depending on the Agent Wishes</p>
      </div>
      <div class="card-stats card2">
        
      </div>
    </div>
    <div class="card" onclick="restaurantfunction()">
        <div class="card-image card3"></div>
        <div class="card-text card3">
          <span class="date">Restaurant</span>
          <h2>For reservations and ordering </h2>
          <p>Can be modified depending on the Agent Wishes </p>
        </div>
        <div class="card-stats card3">
          
        </div>
      </div>
      <div class="card" onclick="soonfunction()">
      <div class="card-image card4"></div>
      <div class="card-text card4">
        <span class="date">Photographer</span>
        <h2>Singel Pages</h2>
        <p>Personal Pages for all kind of advertiments</p>
      </div>
      <div class="card-stats card4">
        <div class="stat">
         
      </div>
    </div>
<script>
   function  emsfunction()
{
  window.location ="{{url('/ems')}}" ;
}
function shopfunction()
{
  window.location ="{{url('mywork/shop')}}" ;
}
function restaurantfunction()
{
  window.location ="{{url('mywork/restaurant')}}" ;
}
function soonfunction()
{
  window.location ="{{url('mywork/photo')}}" ;
}



</script>

    
  </body>
</html>
