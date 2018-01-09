<?php
/*
 * Am pretty sure some php script is suppose to go here.
 */

?>

<!DOCTYPE html>
<html>
<head>
	<title> Profile </title>
		<!-- Styling -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Fonts Import -->
	  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton">
	  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">

  		<!-- css style -->
		<link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/style.css">
		<link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/general.css">
		<link rel="stylesheet" type="text/css" href="https://rawgit.com/kmodipa/simple-mvc/master/Views/css/index.css">

</head>

<!-- It's a body thing -->
<body class="contaner">
		<!--<h1 style="text-align: center">My web cam</h1>-->

		<div id="logo">
			<!-- Logo image -->
			<img src="https://rawgit.com/fthwala/camagru/master/Camagru_mvc/images/styling/logo.png" height='6%' width='66%'>
		</div>

		<div>
			<!-- The nav-bar -->
			<ul class="nav">
				<li><a href="gallery">Gallery</a></li>
				<li><a href="user-profile">Profile</a></li>
				<li><a href="#">LogOut</a></li>
			</ul>
		</div>

		<div class='contaner' id='body'>
        	<h1 id = "header">Profile</h1>
				<!-- Camera Section -->
				<video autoplay="true" id="videoElement" width="100%" height="100%"></video> </br>
				<div class="clearfix">
					<button class="signupbtn" >Capture</button>
				</div>
				<button id="cbutton">Capture</button>

				<div>
					<!-- Preview -->
					<canvas id="canvas" width="500" height="375%"></canvas>
				</div>

				<div >
					<form method="post" action="" name="" enctype="multipart/form-data">
						<input type="file" name="img_file" id="img_file" />
						<input type="submit" class="submit_butt" value="Upload image" name="s">
			  		</form>
				</div>

		</div>

			<div class="layers">
				<form method="post" action="workarea" name="" enctype="multipart/form-data"></form>
			</div>



		<?php
			$filepath = ROOT_DIR . "/js/camera.js";
			$type = pathinfo($filepath, PATHINFO_EXTENSION);
			$data = file_get_contents($filepath);
			$base64 = 'data:text/javascript;' . $type . ';base64,' . base64_encode($data);
			echo "<script src='$base64'></script>";
		?>

</body>
</html>
