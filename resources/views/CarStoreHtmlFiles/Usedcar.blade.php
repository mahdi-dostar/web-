<!DOCKTYPE html>
<html lang="en-us">
    <head>
        <title>carStore </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/usedcarstyle.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/js/bootstrap5.min.css')}}">
        <script src="{{asset('CarStore/js/script.js')}}"></script>
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
            <a href="{{route('newcar')}}">New Cars</a>
          </div>
        </div>

        <div class="col-sm-1 menu_item">
          <div class="dropdown">
            <span href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Used Cars</span>
          </div>
        </div>
        
          <div class="col-sm-1 menu_item"><a href="{{route('contact')}}">Contact</a></div>
          <div class="col-sm-1 menu_item"><a href="{{route('About')}}">About</a></div>
  </div>
  <!-- start body -->
  <div class="textb11">
    <h3 class="textB1">Have manu used cars vehicale from here</h3>
    <h5 class="textB1">Great!</h5>
    <h6 class="textB1">Tell us a few ditails and we will giv you an instant price to work with.</h6>
  </div>
  
  <!-- Carousel -->
<div class="">
<div id="demo" class="carousel slide slid-show col-6" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
   
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('CarStore/image/photo-1511919884226-fd3cad34687c - Copy.jpg')}}" alt="Los Angeles" class="d-block car1" style="width:90%">
      <br><h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">12000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy" onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/1213123.jpg')}}" alt="Chicago" class="d-block car1" style="width:90%">
      <br>
      <h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">13000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy" onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/photo-1608494873992-1ed1dd210fef.jpg')}}" alt="New York" class="d-block car1" style="width:90%">
      <br><h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">20000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy" onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/photo-1601584115197-04ecc0da31d7.jpg')}}" alt="New York" class="d-block car1" style="width:90%">
      <br><h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">13400$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy" onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/photo-1556800572-1b8aeef2c54f.jpg')}}" alt="New York" class="d-block car1" style="width:90%">
      <br><h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">11000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy"onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/photo-1608494873992-1ed1dd210fef.jpg')}}" alt="New York" class="d-block car1" style="width:90%">
      <br><h3 class="S_car_price"> Used car you can get with better price!!! <b><span class="text-danger">32000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy"onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/photo-1602038187784-41e649a79d38 - Copy.jpg')}}" alt="New York" class="d-block car1" style="width:90%">
      <br><h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">10000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy"onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
    <div class="carousel-item">
      <img src="{{asset('CarStore/image/istockphoto-1279002529-170667a.jpg')}}" alt="New York" class="d-block car1" style="width:90%" height="400px">
      <br><h3 class="S_car_price">Used car you can get with better price!!! <b><span class="text-danger">35000$</span></b></h3>
      <a href="{{route('buycar')}}" class="Sbuy"onclick="buy();" id="buy">buy</a>
      <img src="{{asset('CarStore/icon/568242.png')}}" width="50" height="50" class="Sheart">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- text body -->
<div class="textinfo">
<h1>Book Your Car Servicing, Repairs and MOT at CarStore</h1>
<p>CarStore help keep your car in perfect condition from the day you buy it
  to the day you sell it.not only do we protect resale value, but we esure that no matter
  what the circumstance, we have you covered.CarStore help keep your car in perfect condition from the day you buy it
  to the day you sell it.not only do we protect resale value, but we esure that no matter
  what the circumstance, we have you covered.CarStore help keep your car in perfect condition from the day you buy it
  to the day you sell it.not only do we protect resale value, but we esure that no matter
  what the circumstance, we have you covered.CarStore help keep your car in perfect condition from the day you buy it
  to the day you sell it.not only do we protect resale value, but we esure that no matter
  what the circumstance, we have you covered.CarStore help keep your car in perfect condition from the day you buy it
  to the day you sell it.not only do we protect resale value, but we esure that no matter
  what the circumstance, we have you covered.CarStore help keep your car in perfect condition from the day you buy it
  to the day you sell it.not only do we protect resale value, but we esure that no matter
  what the circumstance, we have you covered.</p>
</div>
</div>

<div class="">
  <div class="sidebar col-2">
    <h2 class="text-primary">Car Older Than 3 Years?</h2>
    <p>No problem! We look  after vedicles of all age and have a certified MOt testing center onside.</p>
    <h4 class="text-primary">
      CarSore Fixed Services Plans
      pay Monthy Servicing</h4>
      <p>we know that some customers prefer to pay off their car service ust line household bill.
        either the direct dibit or along with other existing payments.WE also know that our cusmers 
        like to protect in case 
        something goes wrong.which is why we assured that your vehicle is well looked after,with reductions on all of our 
        services such as repair costs and a range of added benefits'incloder as srandard.
        We love to go the extra mile for our customers and remove the most difficult elements of servicing for them if we can.
        talk to us today if you are interested in starting a Fixed service Plan or would like to apply for 0% interest free 
        finance to cover the costs of repair or service bill.</p>
        <hr>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Oil and Filter change
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Oil and Filter change
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Anti Freeze
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Windscreen Washer
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Power Steeringcheck
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Air filter check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Wash and Van
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Ford echeck
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Brack fliud check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Battery check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Reset Service check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Steering check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          check condition 
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          fliud check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Speed check
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Machin check 
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Best color biuti
        </div>
        <div class="tik">
          <img src="{{asset('CarStore/icon/568201.png')}}" width="40px" height="50px">
          Size and wight
        </div>
  </div>

  <!-- cars picture with its price -->
  <div class="cars col-9">
  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/273526186_1960676184103150_7108974172853571140_n.jpg')}}"
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar();" id="buy1">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">16000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20" id="hearth"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/286814668_2052818981555536_7789307623374423175_n.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar1();" id="buy0">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">12306$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/296952989_2097679947069439_4492368579103965522_n.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar2();" id="buy2">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15123$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/301872312_2113241755513258_112317888635476053_n.jpg')}}"
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar3();" id="buy2">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">18000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1556800572-1b8aeef2c54f - Copy.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar4();" id="buy3">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15123$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1553440569-bcc63803a83d.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar5();" id="buy5">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">34000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>
  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1506015391300-4802dc74de2e.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar6();" id="buy16">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">35000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1511919884226-fd3cad34687c - Copy.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td">
        <a href="{{route('buycar')}}" onclick="buycar7();" id="buy7">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15000$</td><td class="cars_td">
        <img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1601584115197-04ecc0da31d7.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td"><a href="{{route('buycar')}}" onclick="buycar8();" id="buy8">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15030$</td><td class="cars_td"><img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/istockphoto-1279002529-170667a.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td"><a href="{{route('buycar')}}" onclick="buycar9();" id="buy9">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15300$</td><td class="cars_td"><img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1602038187784-41e649a79d38.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td"><a href="{{route('buycar')}}" onclick="buycar10();" id="buy10">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15023$</td><td class="cars_td"><img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/photo-1533473359331-0135ef1b58bf.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td"><a href="{{route('buycar')}}" onclick="buycar11();" id="buy11">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15400$</td><td class="cars_td"><img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/61 .jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td"><a href="{{route('buycar')}}" onclick="buycar12();" id="buy12">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15500$</td><td class="cars_td"><img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_1 col-4">
    <img src="{{asset('CarStore/image/9.jpg')}}" 
    width="90%" height="70%" style="margin-left: 17px;">
    <table class="cars_table">
      <tr><td class="cars_td">Manual</td><td class="cars_td">5 Doors</td><td class="cars_td"><a href="{{route('buycar')}}" onclick="buycar13();" id="buy13">buy</td></tr>
      <tr><td class="cars_td">Light Black</td><td class="cars_td">15120$</td><td class="cars_td"><img src="{{asset('CarStore/icon/568242.png')}}" width="20" height="20"></td></tr>
    </table>
  </div>

  <div class="cars_t1 col-4">
    <h2>Book Your Car Servicing</h2>
    <p>CarStore help keep your car in perfect condition from the day you buy it
      to the day you sell it.not only do we protect resale value,</p>
      <h3>Book your next mot or service</h3>
      <img src="{{asset('CarStore/icon/568148.png')}}" width="50" height="50">
      <h3 class="text-danger">0797979222</h3>
  </div>
  <hr>
  <h3 class="brands">OUR MOST POPULAR BRANDS</h3>
  <div class="cars_t2 col-9">
    <img src="{{asset('CarStore/logo/12.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/13.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/14.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/15.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/16.png')}}" class="col-2">
    <hr>
    <img src="{{asset('CarStore/logo/17.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/18.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/13.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/15.png')}}" class="col-2">
    <img src="{{asset('CarStore/logo/14.png')}}" class="col-2">
    
  </div>

  </div>
</div>
<div id="footerdiv">
  <div id="text1"><h1 class="text-white">Car<span class="text-primary">Store</span></h1>
      <p>CarStore help keep your car in perfect condition from the day you buy it
        to the day you sell it.not only do we protect resale value, but we esure that no matter
        what the circumstance, we have you covered.</p>
      <h3>FOLLOW US</h3>
      <br>
      <div id="smdiv1">
        <a href="facebook.com"><img src="{{asset('CarStore/icon/facebook_logo_icon_147291.png')}}" width="50" height="50"></a>
      </div>
      <div id="smdiv2">
        <a href="telegram.com"><img src="{{asset('CarStore/icon/8386110.png')}}" width="50" height="50"></a>
      </div>
      <div id="smdiv3">
        <a href="twitter.com"> <img src="{{asset('CarStore/icon/twitter-logo-on-transparent-background-free-vector.jpg')}}" width="50" height="50"></a>
      </div>
      <div id="smdiv4">
        <a href="you tube.com"><img src="{{asset('CarStore/icon/568416.png')}}" width="50" height="50"></a>
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
              <input type="Email" class="form-control">
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