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
				<li><a href="#">Gallery</a></li>
			</ul>
		</div>

		<!-- The Registration form -->
		<div id = "body">
			<h1 id="header">User Registration</h1>
			<form action='register' method="POST" style="border:1px solid #ccc">
			  <div>
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
			      <button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button>
			      <a href=""><button type="submit" class="registerbtn" name = "register" value="OK">Register</button></a><br><br><br>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
