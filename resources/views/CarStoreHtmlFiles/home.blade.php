<!DOCKTYPE html>
<html lang="en-us">
    <head>
        <title>carStore new cars</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/homestyle.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="css/newcar.css"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/js/bootstrap5.min.css')}}">
        <script src="{{asset('CarStore/js/home.js')}}"></script>
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
          <div class="col-sm-1 home"><span href="{{route('home')}}">Home</span></div>
          <div class="col-sm-1 menu_item ">
          <div class="dropdown">
            <a href="{{route('newcar')}}">New Cars</a>
          </div>
        </div>

        <div class="col-sm-1 menu_item">
          <div class="dropdown">
            <a href="{{route('Usedcar')}}">Used Cars</a>
          </div>
        </div>
        
          <div class="col-sm-1 menu_item"><a href="contact.html">Contact</a></div>
          <div class="col-sm-1 menu_item"><a href="About.html">About</a></div>
  </div>

  <div class="backgroundimg">
    
    <div class="backform">
      
      <form class="formback" id="form" action="{{route('buycar')}}">
        <pre>   Find your next car today</pre>   
        <input type="text" name="name" id="model" placeholder="Choose a model..."><br>
        <input type="text" name="name" id="make" placeholder="Choose a make..."><br>
        <input type="email" name="email" id="email" placeholder="please email us..." ><br><br>
        <input type="submit" ondblclick="click();" value="send" id="submit">
      </form>
    </div>
    <div class="backimg1"></div>
  </div>
  <img class="imgback" src="{{asset('CarStore/icon/track.png')}}" width="300" height="200">
  <div class="about">
  <h1 class="text-success">About us</h1>
  <p>Car Older Than 3 Years?
    No problem! We look  after vedicles of all age and have a certified MOt testing center onside.
    
    CarSore Fixed Services Plans
    pay Monthy Servicing
    we know that some customers prefer to pay off their car service ust line household bill.
    either the direct dibit or along with other existing payments.WE also know that our 
    cusmers like to protect in case something goes wrong.which is why we assured that your 
    vehicle is well looked after,with reductions on all of our services such as repair cos.</p>
  </div>
  <img class="wellcome1" src="{{asset('CarStore/image/wellcome.jpg')}}" id="imgg" onmousemove="change();"width="700" height="600">
  <div class="cars_t2 col-9">
    <img src="{{asset('CarStore/logo/12.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/13.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/14.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/15.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/16.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/17.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/18.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/13.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/15.png')}}" class="col-1">
    <img src="{{asset('CarStore/logo/14.png')}}" class="col-1">
    
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