<?php

session_start();
include ('User.php');
$user = new User();


if(isset($_POST['Submit']))
{
   $password = $_POST["password"];
    $email=$_POST["email"];

  $Login = $user->Login($email, $password);
  if($Login)
  {
    echo "You successfully logged in";
    header("location:index2.php");
  }
  else {
  echo "Your email or password is incorrect";
  }
}
?>



<link href="forms.css" rel="stylesheet"  type="text/css">


  <body>
   <div class ="center">
    <div class="container">
<form action="" method="post" name="login">
    <h1>Login </h1>
    <br><br>
Email <br>
<input type="text" name="email" required="" >
<br><br>
Password <br>
<input type="password" name="password" required="" />
<br><br><br>
    <div class="text-center">
<input class='SubmitButton' type="submit" value="Login" name="Submit">
<br><br>
<h4> Don't have an account? <a href='Register.php'> Register</a> </h4>
    </div>
</form>
      </div>
      </div>
      </body>
<style>

body{
  background-color: #FFFFFF;
     background-image: url('sg.jpg');
  
}

</style>

