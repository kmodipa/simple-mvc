<?php

if (isset($_SESSION['id']))
    echo "User ".$_SESSION['id']." logged in";
else
    echo "You are not logged in!";

if (isset($_POST['register']))
{
  header('Location: register');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts Import -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">

	<!-- Styling -->
  <link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/general.css">
  <link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/style.css">

</head>

	<body>
    <!-- Camagru Logo -->
    <div id = "logo">
      <img src="https://rawgit.com/kmodipa/simple-mvc/master/Views/images/logo.png" height='6%' width='66%'>
    </div>

		<!-- The login form -->
		<div id = "body">
			<h1>User Login</h1>
			<form action='login' method="POST" style="border:1px solid #ccc">
			  <div>
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="login">
			    <label><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="passwd">

			    <div class="clearfix">
			      <button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button>
			      <a href=""><button type="submit" class="registerbtn" name = "register" value="OK">Register</button></a><br><br><br>
            <p> <a href="">Forgot password?</a></p>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
