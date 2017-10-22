<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<!-- Styling -->
    <?php
        $filepath = ROOT_DIR . "/Views/css/style.css";
        $type = pathinfo($filepath, PATHINFO_EXTENSION);
        $data = file_get_contents($filepath);
        $base64 = 'data:text/css;' . $type . ';base64,' . base64_encode($data);
        echo "<link " . "href=$base64 rel='stylesheet'>";
    ?>
</head>
<?php

if (isset($_SESSION['id']))
    echo "User ".$_SESSION['id']." logged in";
else
    echo "You are not logged in!";
?>
	<body>
		<!-- The login form -->
		<div class="container">
			<h2>User Login</h2>
			<form action=<?php ROOT_DIR."/Controllers/login.php" ?> method="POST" style="border:1px solid #ccc">
			  <div class="form_inside">
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="login">

			    <label><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="passwd">

			    <div class="clearfix">
			      <button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button>
			      <a href=""><button type="submit" class="registerbtn" name = "register" value="OK">Register</button></a>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
