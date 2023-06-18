<!DOCKTYPE html>
<html lang="en-us">
    <head>
        <title>contact </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/contact.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/bootstrap5.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('CarStore/js/bootstrap5.min.css')}}">
        <script src="{{asset('CarStore/js/buycar.js')}}"></script>
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
    <!-- first heading -->
<div class="header1_div">

</div>

<!-- second heading -->
<div class="header2_div">
    <div class="carstore"><h1>carStore</h1></div>
    <ul class="menu_item"> 
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('newcar')}}">New cars</a></li>
        <li><a href="{{route('Usedcar')}}">Used cars</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li><a href="{{route('About')}}">About</a></li>
    </ul>
</div>

<div class="img">
    <img src="{{asset('CarStore/image/banner.png')}}" width="100%" height="300px">
    <h1 class="wellcome">Contact us for better services <br>have the best services</h1>
    <p class="fill">Fill the bellow for better reletionship us</p>
    <img class="bigcar"src="{{asset('CarStore/image/track.png')}}" width="300px" height="200px">
</div>
<br><br><br>
<div class="form">
    <div class="form1">
        <b><p class="text-white">Contact us<br></p></b>
    User name: <br><input type="text"   placeholder="Please Enter your name..." onblur="user();" id="user">
    <span id="users"></span>
    <br>
    Last name: <br><input type="text" placeholder="Please Enter your last name..." onblur="last();" id="last">
    <span id="lasts"></span>
    <br>
    Email: <br><input type="email" placeholder="Please Enter your email..." onblur="email();" id="email">
    <span id="emails"></span>
    <br>
    Gender: Male<input type="radio" name="name">Female<input type="radio" name="name"><br>
    <textarea cols="30" rows="10" placeholder="comment"></textarea><br><br>
    <button type="button" id="send" onclick="send();">Contact</button>

    <input type="submit" value="Resend" id="resend" class="resend" onclick="resend();">
    </div>
    <b class="location">our location</b>
    <img src="{{asset('CarStore/image/map_big.jpg')}}" width="600px" height="300px" class="map"><br>
    <div class="add">
    <h3>Mailing Address</h3>
    <p><b>location</b></p>
    <p>kabul Afghanistan puli-e-surkh </p>
    <b>phone</b> +93 779 343 3434<br>
    <b>Email</b>: carstore2022@gmail.com
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