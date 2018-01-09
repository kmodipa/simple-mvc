<?php
/*
 * Am pretty sure some php script is suppose to go here.
 */

?>


<!DOCTYPE html>
<html>
<head>	
	<title> Gallery </title>
	<!-- Styling -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts Import -->
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton">
  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">

  	<!-- css style -->
  	<?php
		$filepath = ROOT_DIR . "/Views/css/index.css";
		$type = pathinfo($filepath, PATHINFO_EXTENSION);
		$data = file_get_contents($filepath);
		$base64 = 'data:text/css;' . $type . ';base64,' . base64_encode($data);
		echo "<link "."href=$base64 rel='stylesheet'>"
	?>

</head>

<!-- It's a body thing -->
<body>
	<h1> Gallery is working </h1>

	<!-- The nav-bar -->
	<ul class="nav">
		<li><a href="register">Register</a></li>
		<li><a href="login">Login</a></li>
		<li><a href="#">LogOut</a></li>
	</ul>
</body>
</html>