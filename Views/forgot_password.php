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
	<title> Password Recovery </title>
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
		<!-- The login form -->
		<div class="container">
			<h2>Passowrd Recovery</h2>
			<form action='login' method="POST" style="border:1px solid #ccc">
			  <div class="form_inside">
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="login">

			    <label><b>New Password</b></label>
			    <input type="password" placeholder="Enter New Password" name="new-passwd">

          <label><b>Retype New Password</b></label>
			    <input type="password" placeholder="Re-enter New Password" name="re-new-passwd">

			    <div class="clearfix">
			      <button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button>
			      <button type="submit" class="registerbtn" name = "register" value="OK">Register</button>
            <button type="submit" class="registerbtn" name = "register" value="OK">Recover</button>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
