<?php
	class Register extends Controller
    {
			public static function create()
			{
				if (isset($_POST['register']) && isset($_POST['passwd']))
				{
					header('Location: index'); /* This is an example, remove it */
				}
			}
    }
?>
