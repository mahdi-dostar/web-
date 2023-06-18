<!DOCKTYPE html>
<html lang="en-us">
    <head>
        <title>carStore new cars</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/newcar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/js/bootstrap5.min.css')}}">
        <script src="{{asset('CarStore/js/newcar.js')}}"></script>
        <script src="{{asset('CarStore/js/bootstrap5.bundle.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity=
        "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
        <link href="../../cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/css/bootstrap.min.css" rel=
        "stylesheet">
        <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/js/bootstrap.bundle.min.js">
        </script>
    </head>   
<body>
  <!-- start top first top heading -->
  <div class="container-fluit mycontainer">

    <div class="first_heading">
      <img src="{{asset('CarStore/icon/13-2-car-png.png')}}" class="col-sm-2 carIcon" id="caricon">
      <h6 class="phone"><img src="{{asset('CarStore/icon/568317.png')}}" alt="" width="40px" height="40px">
        &nbsp;&nbsp;+93 779 947 953 | <img src="{{asset('CarStore/icon/568148.png')}}" width="40px" height="40px">hussainimahdi327@gmail.com </h6>
    </div>
    <!-- start second heading including menu bar -->
    <div class="container-fluit second_heading">
      <h1 class="col-sm-2 carstore">
        <b><span class="car">car</span><span class="store">Store.</span></b>
      </h1>
            <div class="col-sm-1 home"><a href="{{route('home')}}">Home</a></div>
            <div class="col-sm-1 menu_item ">
            <div class="dropdown">
              <span class="dropdown-toggle" data-bs-toggle="dropdown">New Cars</span>
            </div>
          </div>
  
          <div class="col-sm-1 menu_item">
              <a href="{{route('Usedcar')}}">Used Cars</a>
            </div>
          
            <div class="col-sm-1 menu_item"><a href="{{route('home')}}">Contact</a></div>
            <div class="col-sm-1 menu_item"><a href="{{route('home')}}">About</a></div>
    </div>
    <!-- start body -->
    <div class="textb11">
      <h3 class="textB1">Have your new vehicale from here</h3>
      <h5 class="textB1">Great!</h5>
      <h6 class="textB1">Tell us a few ditails and we will giv you an instant price to work with.</h6>
    </div>
    <hr>
    <div>
      <div class="newcars_text">
      <p><h3>New cars</h3>We have found 12099 new cars for you!</p>
    </div>
      <input class="search" type="text" placeholder="search..." id="search" onblur="search()">
      <span id="search1"></span>
      </div>
      <hr>

    <div class="">
        <div class="div_slid1">
          <h3 class="sli1">Any option</h3>
          <div class="div_slid11">
            <h3 class="sli1">Postcode</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Price</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Promotion</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Vehicle type</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Make and Modal</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">color </h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">body style</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">doors</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Transmision</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Fuel type</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Age</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">nissan model</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">Fort ka moded</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">very good two years granty</h3>
          </div>
          <div class="div_slid11">
            <h3 class="sli1">many colors </h3>
          </div>
        </div>

        <div class="div_slid21">
          <h2>Have a vehicale to part exhange</h2>
          <p>Used cars for sale Here is our selection of used cars at carstore group in kabulAfghanistan
            we offer some fantastic used deals here at Carstore group, so why not come down to our showroom in 
          Afghanistan to see how we can help you with your next car.
          </p>
          <input type="text" placeholder="Get Valuation" width="130px" id="value" onblur="valuation();">
          <span id="value1"></span> 

          <h2>Have a the blue private bietifull car</h2>
          <p>Used cars for sale Here is our selection of used cars at carstore group in kabulAfghanistan
            we offer some fantastic used deals here at Carstore group, so why not come down to our showroom in 
          Afghanistan to see how we can help you with your next car.
          </p>
          <input type="text" placeholder="check the speed" width="130px" id="speed" onblur="speed();">
          <span id="speed1"></span>
          <h2>Have a the white privat fast and fantastic car</h2>
          <p>Used cars for sale Here is our selection of used cars at carstore group in kabulAfghanistan
            we offer some fantastic used deals here at Carstore group, so why not come down to our showroom in 
          Afghanistan to see how we can help you with your next car.
          </p>
          <input type="text" placeholder="check the protect" width="130px" id="protect" onblur="protect();">
          <span id="protect1"></span>
        </div>

        <div class="div_slid_new_cars">
          <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3" ></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner" style="height: 500px">
    <div class="carousel-item active">
      <img src="{{asset('CarStore/image/blackcar.webp')}}" alt="Los Angeles" class="d-block slid_show_car" style="width:95%;">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="buycar.html" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/side1BlacCar.webp')}}" alt="Chicago" class="d-block slid_show_car" style="width:95%">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
          <a href="buycar.html" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/backBlackCar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
          <a href="buycar.html" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/openDoorBlackCar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
          <a href="buycar.html" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/chairblackcar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
          <a href="buycar.html" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/farmaanblackcar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
          <a href="buycar.html" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/dalaablackcar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
      <table class="cars_table">
        <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
          <a href="{{asset('CarStore/buycar.html')}}" id="purchase" onclick="purchase();">purchase</a></td></tr>
        <tr><td class="cars_td">Light Black</td><td class="cars_td">12000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
      </table>
    </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

<div class="div_slid_new_carsblue">
  <!-- Carousel of blue car-->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="3" ></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner" style="height: 500px">
<div class="carousel-item active">
<img src="{{asset('CarStore/image/sideblueCar.webp')}}" alt="Los Angeles" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/side1blueCar.webp')}}" alt="Chicago" class="d-block slid_show_car" style="width:95%">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/backbluecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/openDoorbluecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/chairbluecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/farmanbluecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/dollaabluecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase1" onclick="purchase1();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>
</div>
</div>

<div class="div_slid_new_carswhite">
  <!-- Carousel of white car-->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="3" ></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner" style="height: 500px">
<div class="carousel-item active">
<img src="{{asset('CarStore/image/side1whitecar.webp')}}" alt="Los Angeles" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/frontWhiteCar.webp')}}" alt="Chicago" class="d-block slid_show_car" style="width:95%">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/backWhiteCar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/openWhiteDoorCar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/chairwhitecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/farmanbluecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>
<div class="carousel-item">
<img src="{{asset('CarStore/image/dallaawhitecar.webp')}}" alt="New York" class="d-block slid_show_car" style="width:95%;">
<table class="cars_table">
<tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
  <a href="buycar.html" id="purchase2" onclick="purchase2();">purchase</a></td></tr>
<tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
</table>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>
</div>
</div>
</div>
<div class="bmw1">
<img class="bmwimg1" src="{{asset('CarStore/image/BMW-3-Series-Exterior-167583.webp')}}" width="200px" height="190px">
<div class="bmwtxt1">
<span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
<pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
<span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
</div>
<div class="btn">
  <button class="btn btn-primary">Call</button><br><br>
  <a href="email.com"><button class="btn btn-primary">Email</button></a>
</div>
</div>

<div class="bmw2">
  <img class="bmwimg1" src="{{asset('CarStore/image/bmw-x1-facelift-right-front-three-quarter2.webp')}}" width="200px" height="190px">
  <div class="bmwtxt1">
  <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
  <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
  <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
  </div>
  <div class="btn">
    <button class="btn btn-primary">Call</button><br><br>
    <a href="email.com"><button class="btn btn-primary">Email</button></a>
  </div>
  </div>

  <div class="bmw3">
    <img class="bmwimg1" src="{{asset('CarStore/image/bmw-x4.jpg')}}" width="200px" height="190px">
    <div class="bmwtxt1">
    <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
    <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
    <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
    </div>
    <div class="btn">
      <button class="btn btn-primary">Call</button><br><br>
      <a href="email.com"><button class="btn btn-primary">Email</button></a>
    </div>
    </div>

    <div class="bmw2">
      <img class="bmwimg1" src="{{asset('CarStore/image/2021-Ford-EcoSport-Titanium-500x261.jpg')}}" width="200px" height="190px">
      <div class="bmwtxt1">
      <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
      <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
      <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
      </div>
      <div class="btn">
        <button class="btn btn-primary">Call</button><br><br>
        <a href="email.com"><button class="btn btn-primary">Email</button></a>
      </div>
      </div>

      <div class="bmw4">
        <img class="bmwimg1" src="{{asset('CarStore/image/Ford-EcoSport-Right-Front-Three-Quarter-159249.webp')}}" width="200px" height="190px">
        <div class="bmwtxt1">
        <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
        <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
        <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
        </div>
        <div class="btn">
          <button class="btn btn-primary">Call</button><br><br>
          <a href="email.com"><button class="btn btn-primary">Email</button></a>
        </div>
        </div>

        <div class="bmw2">
          <img class="bmwimg1" src="{{asset('CarStore/image/Ford-EcoSport-SE-launched-in-India-500x261.jpg')}}" width="200px" height="190px">
          <div class="bmwtxt1">
          <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
          <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
          <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
          </div>
          <div class="btn">
            <button class="btn btn-primary">Call</button><br><br>
            <a href="email.com"><button class="btn btn-primary">Email</button></a>
          </div>
          </div>

          <div class="bmw4">
            <img class="bmwimg1" src="{{asset('CarStore/image/Volkswagen-Passat-Headlamps-135233.webp')}}" width="200px" height="190px">
            <div class="bmwtxt1">
            <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
            <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
            <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
            </div>
            <div class="btn">
              <button class="btn btn-primary">Call</button><br><br>
              <a href="email.com"><button class="btn btn-primary">Email</button></a>
            </div>
            </div>
  
            <div class="bmw2">
              <img class="bmwimg1" src="{{asset('CarStore/image/Volkswagen-Ameo-Exterior-119016.webp')}}" width="200px" height="190px">
              <div class="bmwtxt1">
              <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
              <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
              <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
              </div>
              <div class="btn">
                <button class="btn btn-primary">Call</button><br><br>
                <a href="email.com"><button class="btn btn-primary">Email</button></a>
              </div>
              </div>
    
              <div class="bmw4">
                <img class="bmwimg1" src="{{asset('CarStore/image/virtus-right-front-three-quarter.webp')}}" width="200px" height="190px">
                <div class="bmwtxt1">
                <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
                <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
                <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
                </div>
                <div class="btn">
                  <button class="btn btn-primary">Call</button><br><br>
                  <a href="email.com"><button class="btn btn-primary">Email</button></a>
                </div>
                </div>
  
                <div class="bmw2">
                  <img class="bmwimg1" src="{{asset('CarStore/image/Toyota-Urban-Cruiser.jpg')}}" width="200px" height="190px">
                  <div class="bmwtxt1">
                  <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
                  <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
                  <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
                  </div>
                  <div class="btn">
                    <button class="btn btn-primary">Call</button><br><br>
                    <a href="email.com"><button class="btn btn-primary">Email</button></a>
                  </div>
                  </div>
        
                  <div class="bmw4">
                    <img class="bmwimg1" src="{{asset('CarStore/image/toyota-urban-ruise_360x240.webp')}}" width="200px" height="190px">
                    <div class="bmwtxt1">
                    <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
                    <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
                    <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
                    </div>
                    <div class="btn">
                      <button class="btn btn-primary">Call</button><br><br>
                      <a href="email.com"><button class="btn btn-primary">Email</button></a>
                    </div>
                    </div>

                    <div class="bmw2">
                      <img class="bmwimg1" src="{{asset('CarStore/image/virtus-right-front-three-quarter.webp')}}" width="200px" height="190px">
                      <div class="bmwtxt1">
                      <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
                      <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
                      <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
                      </div>
                      <div class="btn">
                        <button class="btn btn-primary">Call</button><br><br>
                        <a href="email.com"><button class="btn btn-primary">Email</button></a>
                      </div>
                      </div>
            
                      <div class="bmw4">
                        <img class="bmwimg1" src="{{asset('CarStore/image/toyota-vellfire_360x240.webp')}}" width="200px" height="190px">
                        <div class="bmwtxt1">
                        <span class="text-primary">S550 Maybach 2017 BMW S-550 MAYBACH ORIGINAL FULL OPTION WITH VIP SEAT MODEL</span> 
                        <pre>2017<img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20">         33,700 km</pre>
                        <span>Automatic 2017 BMW S-550 19 Inch Wheel, Power window, blue exlirior</span>
                        </div>
                        <div class="btn">
                          <button class="btn btn-primary">Call</button><br><br>
                          <a href="email.com"><button class="btn btn-primary">Email</button></a>
                        </div>
                        </div>
    

</div> <!--container fluit end div-->

<div class="stars">
  <img src="{{asset('CarStore/icon/star.jpg')}}" width="30px" height="30px">
  <img src="{{asset('CarStore/icon/star.jpg')}}" width="30px" height="30px">
  <img src="{{asset('CarStore/icon/star.jpg')}}" width="30px" height="30px">
  <img src="{{asset('CarStore/icon/star.jpg')}}" width="30px" height="30px">
  <img src="{{asset('CarStore/icon/star.jpg')}}" width="30px" height="30px">
  </div>
  
    <div id="footerdiv">
        <div id="text1"><h1 class="text-white">Car<span class="text-primary">Store</span></h1>
            <p>CarStore help keep your car in perfect condition from the day you buy it
              to the day you sell it.not only do we protect resale value, but we esure that no matter
              what the circumstance, we have you covered.</p>
            <h3>FOLLOW US</h3>
            <br>
            <div id="smdiv1">
              <img src="{{asset('CarStore/icon/facebook_logo_icon_147291.png')}}" width="50" height="50">
            </div>
            <div id="smdiv2">
              <img src="{{asset('CarStore/icon/8386110.png')}}" width="50" height="50">
            </div>
            <div id="smdiv3">
              <img src="{{asset('CarStore/icon/twitter-logo-on-transparent-background-free-vector.jpg')}}" width="50" height="50">
            </div>
            <div id="smdiv4">
              <img src="{{asset('CarStore/icon/568416.png')}}" width="50" height="50">
            </div>
        </div>
        <div id="text2"><h4 class="text-white">O U R &nbsp;&nbsp;S E R V I C E S</h4>
      <pre>
      About
      
      Destination
      
      Buy a Car
      
      Sell Your Car
      
      Guides
      
      Testimonial
      
      Blog
      </pre>
        </div>
        
        <div id="text3">
            <h4 class="text-white">U s e f u l l&nbsp;&nbsp;  L i n k s</h4>
      <pre>
      About
      
      Destination
      
      New Cars
      
      Used Cars
      
      Guides
      
      Testimonial
      
      Blog
      </pre>
        </div>
        
        <div id="text4">
            <h4 class="text-white">C o n t a c t &nbsp;&nbsp;U s</h4>
      <pre>
      123 Street, kabul, Afghanistan
      
      + 93 779 893 8932
      
      kabulAfghanistan@gmail.com
      
      <h5>Newsletter</h5>
      </pre><br>
            <form>
                <div class="input-group">
                    <input type="Email" class="form-control" id="signup" onblur="signup();">
                    <span style="height: 50px;"class="input-group-text">><a href="form1">Sign up</a></span>
                </div>
            </form>
        </div>
        
        <div style="
                    height: 100px;
                    float:left;
                    margin-left: 50px;
                    margin-top:20px;">
            
            Copyright &copy; <span class="text-success">Domain.</span> All right reserved
            <span style="float:right;
                         margin-left: 800px;">Designed By Mahdi Hussaini</span>
        </div>
        
      </div>
      
      </div>
      
      <script>
              document.getElementById("toastbtn").onclick = function() {
                var toastElList = [].slice.call(document.querySelectorAll('.toast'))
                var toastList = toastElList.map(function(toastEl) {
                  return new bootstrap.Toast(toastEl)
                })
                toastList.forEach(toast => toast.show())
              }
      </script>
      <script>
              var popoverTriggerList = 
              [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
              var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
              })
      </script>
              
      <script>
              var tooltipTriggerList = 
              [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
              var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
              })
      </script>
              
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
      crossorigin="anonymous"></script>
      </body>
      </html>