<html>
<!DOCKTYPE html>
<html lang="en-us">
    <head>
        <title>sing up </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('CarStore/css/form.css')}}">
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

        <form action="/signup" method="post">
        @csrf
          <h3>SIGN UP FORM</h3>
          <input placeholder="Name" type="text" name="name" value="{{old('name')}}" ><br>
        <span class="error"> <?php echo $nameErr;?></span>
        <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}"><br>

        <input type="email" placeholder="Email" name="email" value="{{old('email')}}"><br>
        <span class="error"> <?php echo $emailErr;?></span>

        <input type="password" placeholder="Password" name="password" value="{{old('password')}}"><br>
        <input type="password" placeholder="Confirm password" name="Confirm_password"><br>
        Gender: <input type="radio" name="gender">male
                 <input type="radio" name="gender">female<br><br>
        Remember me: <input type="checkbox" name="remember"><br>
        <input class="signin" type="submit" id="send" onclick="send();" value="Sign in"><br><br>
        <p>Already have an account!<a href="{{route('About')}}">sign in</a></p>    <br>
        
        </form>
</div>
    </div>

    
</body>
</html>