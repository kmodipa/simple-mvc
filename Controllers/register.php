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
					$password = $_POST['passwd'];

					if (!Database::query('SELECT uid FROM users WHERE uid=:uid', array(':uid'=>$uid)))
					{
						if (strlen($uid) >= 3 && strlen($uid) <= 32)
						{
							if (preg_match('/[a-zA-Z0-9_]+/', $uid))
							{
								if (strlen($password) >= 6 && strlen($password) <= 100)
								{
									$password = hash('whirlpool', ($_POST['passwd'])); /* hash */
									if (filter_var($email, FILTER_VALIDATE_EMAIL))
									{
										if (!self::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email)))
										{
											Database::query('INSERT INTO users VALUES (\'\', :first_name, :last_name, :uid, :email, :password)', array(':first_name'=>$first_name, ':last_name'=>$last_name, ':uid'=>$uid, ':email'=>$email, ':password'=>$password));
											echo "Registered Successfully!";
											header('Location: index');
										}
										else{
											echo 'Email in use!';
										}
									}
									else {
										echo 'Invalid email!';
									}
								}
								else {
									echo "Invalid Passowrd!";
								}
							}
							else {
								echo 'Invalid user';
							}
						}
						else {
							echo 'Invalid user';
						}
					}
					else {
						echo "User already exists!";
					}

					//header('Location: index'); /* This is an example, remove it */
				}
			}
    }
?>
