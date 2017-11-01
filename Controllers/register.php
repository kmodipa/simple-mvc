<?php
	class Register extends Controller
    {
			public static function create()
			{
				if (isset($_POST['register']) && isset($_POST['passwd']))
				{
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$uid = $_POST['login'];
					$email = $_POST['email'];
					$password = hash('whirlpool', ($_POST['passwd']));

					if (!Database::query('SELECT uid FROM users WHERE uid=:uid', array(':uid'=>$uid)))
					{
						Database::query('INSERT INTO users VALUES (\'\', :first_name, :last_name, :uid, :email, :password)', array(':first_name'=>$first_name, ':last_name'=>$last_name, ':uid'=>$uid, ':email'=>$email, ':password'=>$password));
						echo "Registered Successfully!";
					}
					else {
						echo "User already exists!";
					}

					//header('Location: index'); /* This is an example, remove it */
				}
			}
    }
?>
