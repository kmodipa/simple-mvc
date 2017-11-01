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
    <?php
    $filepath = ROOT_DIR . "/Views/css/style.css";
    $type = pathinfo($filepath, PATHINFO_EXTENSION);
    $data = file_get_contents($filepath);
    $base64 = 'data:text/css;' . $type . ';base64,' . base64_encode($data);
    echo "<link " . "href=$base64 rel='stylesheet'>";
    ?>
</head>

	<body>
		<!-- The Registration form -->
		<div class="container">
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
