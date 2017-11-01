<?php
  class Login extends Controller
  {
    public static function login_user()
    {
      if (isset($_POST['signin']))
      {
        $uid = $_POST['login'];
        $password = $_POST['passwd'];

        if (Database::query('SELECT uid FROM users WHERE uid=:uid', array(':uid'=>$uid)))
        {
          echo "User registered";
          header('Location: index');
        }
        else {
          echo "User not registered";
        }
      }
    }
  }
?>
