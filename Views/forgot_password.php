<?php

if (isset($_SESSION['id']))
    echo "User ".$_SESSION['id']." logged in";
else
    echo "You are not logged in!";

if (isset($_POST['register']))
{
  header('Location: register');
}
elseif (isset($_POST['signin']))
{
  header('Location: login');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Password Recovery </title>
	<!-- Styling -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Google Fonts Import -->
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton">
 	 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">

 	<!-- Styling -->
  	<link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/general.css">
  	<link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/style.css">

  	<!-- css style -->
  	<?php
		$filepath = ROOT_DIR . "/Views/css/index.css";
		$type = pathinfo($filepath, PATHINFO_EXTENSION);
		$data = file_get_contents($filepath);
		$base64 = 'data:text/css;' . $type . ';base64,' . base64_encode($data);
		echo "<link "."href=$base64 rel='stylesheet'>"
	?>

</head>

	<body>
    <!-- Camagru Logo -->
    <div id = "logo">
      <img src="https://rawgit.com/kmodipa/simple-mvc/master/Views/images/logo.png" height='6%' width='66%'>
    </div>
    	<div>
			<!-- The nav-bar -->
			<ul class="nav">
				<li><a href="gallery">Gallery</a></li>
			</ul>
		</div>

		<!-- The login form -->
		<div id = "body">
			<h1 id="header">Password Recovery</h1>
			<form action='' method="POST" style="border:1px solid #ccc">
			  <div>
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="login">
			    <label><b>New Password</b></label>
			    <input type="password" placeholder="Enter New Password" name="new-passwd">
          <label><b>Retype New Password</b></label>
			    <input type="password" placeholder="Re-enter New Password" name="re-new-passwd">

			    <div class="clearfix">
			      <button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button>
			      <button type="submit" class="registerbtn" name = "register" value="OK">Register</button>
            <button type="submit" class="recoverybtn" name = "recovery" value="OK">Recover</button>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
