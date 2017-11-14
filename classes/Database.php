<?php

class Database
{
    public static $host = "127.0.0.1";
    public static $dbName = "example";
    public static $username = "root";
    public static $password = "root";

    /* The static just means we do not need to creat an object of the db-class in oreder to use it */
    private static function connect()
    {
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* Error reporting */
        return $pdo;
    }

    /* Database interaction */
    public static function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ',$query)[0] == 'SELECT')
        {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}


?>
