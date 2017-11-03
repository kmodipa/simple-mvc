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
          $password = hash('whirlpool', ($_POST['passwd'])); /* hash */
          if ($password === Database::query('SELECT password FROM users WHERE uid=:uid', array(':uid'=>$uid))[0]['password'])
          {
            echo "User registered";
            header('Location: index');

            $cstrong = True;
            $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
            $user_id = Database::query('SELECT id FROM users WHERE uid=:uid', array(':uid'=>$uid))[0]['id'];
            Database::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));

            setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
            setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
            //echo $token;
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
