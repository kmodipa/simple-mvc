<?php
if (isset($_POST['signin']))
{
  header('Location: login');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Register</title>
  <!-- Styling -->
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

		<!-- The Registration form -->
		<div id = "body">
			<h2>User Registration</h2>
			<form action='register' method="POST" style="border:1px solid #ccc">
			  <div class="form_inside">
			  	<label><b>First Name</b></label>
			    <input type="text" placeholder="Enter First Name" name="first_name" >
			    <label><b>Last Name</b></label>
			    <input type="text" placeholder="Enter Last Name" name="last_name" >
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="login" >
          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" >
			    <label><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="passwd" >

			    <div class="clearfix">
			    	<a href=""><button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button></a>
			      <button type="submit" class="registerbtn" name = "register" value="OK">Register</button>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
