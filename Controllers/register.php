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
					$password = hash('whirlpool', ($_POST['passwd']));

					Database::query('INSERT INTO users VALUES (:first_name, :last_name, :uid, :passwd)', array(':first_name'=>$first_name, ':last_name'=>$last_name, ':uid'=>$uid, ':passwd'=>$password));
					//header('Location: index'); /* This is an example, remove it */
				}
			}
    }
?>
