<html>
<!DOCKTYPE html>
<html lang="en-us">
    <head>
        <title>Login form </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/login.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/js/bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/font-awesome.min.css')}}">
        <script src="{{asset('CarStore/js/form.js')}}"></script>
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
<body class="body">
<?php
// define variables and set to empty values
$nameErr = $last_nameErr=$emailErr = $passwordErr = $Confirm_passwordErr = $genderErr = "";
$name = $last_name=$email = $password = $Confirm_password = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "last name is required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["Confirm_password"])) {
    $Confirm_passwordErr = "You must confirm password";
  } else {
    $password = test_input($_POST["Confirm_password"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

?>
    <div class="form" >
        <div class="form1">

        <form action="{{route('buycar')}}" method="post">
          <h3>LOGIN IN FORM</h3>
          <input placeholder="Name" type="text" name="name" value="{{old('name')}}" ><br>
        <span class="error"> <?php echo $nameErr;?></span>
        
        <input type="email" placeholder="Email" name="email" value="{{old('email')}}"><br>
        <span class="error"> <?php echo $emailErr;?></span>

        <input type="password" placeholder="Password" name="password" value="{{old('password')}}"><br><br>
    
        <input class="signin" ondblclick="click();" type="submit" value="Sign in"><br>
        <div class="signup"><a href="form1">Create Account!</a></div>
        
        </form>
</div>
    </div>

    
</body>
</html>