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
          if (password_verify($password, self::query('SELECT password FROM users WHERE uid=:uid', array(':uid'=>$uid))[0]['password']))
          {
            echo "User registered";
            header('Location: index');
          }
          else {
            echo "Incorrect password!";
          }
        }
        else {
          echo "User not registered";
        }
      }
    }
  }
?>
