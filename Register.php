
<style>
    .SubmitButton{
  background-color: #BAD6AD;
  border: none;
  color: black;
  padding: 5px 30px;
  text-align: center;
  display: inline-block;
  font-size: 14px;
  cursor: pointer;
align-self: center;
        margin: auto;  
          border-radius: 5px;


}
    .text-center {
  text-align: center;
}
.center {
  margin: auto;
  width: 40%;
  padding: 10px;
}
</style>
<?php
include ('User.php');
$user = new User();


if(isset($_POST['Submit']))
{
$name=$_POST["name"];

$email=$_POST["email"];
$password = $_POST["password"];


  $AddUser = $user->AddUser($name, $email,$password);
  if($AddUser)
  {
    echo "You successfully signed up";
  }
  else  {
      echo "Something went wrong please try again";
    }
}
?>

<html>

<link href="forms.css" rel="stylesheet"  type="text/css">
<body>
   <div class ="center">
    <div class="container">
<br>
<form action="" method="post"  class='Register'>
<h1>Register</h1>
<br>
  Name<br>
  <input type="text" name="name" id='Name' required><br> <br>

  Email<br>
  <input type="email" name="email" required> <br> <br>
  Password<br>
  <input type="password" id="password" name="password" required><br><br>

 <div class="text-center">
  <input type="submit" value="Submit" name="Submit" class='SubmitButton' >
    </div>
</form>
       </div>
    </div>
    </body>
</html>