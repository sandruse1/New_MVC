<?php
/**
 * Created by PhpStorm.
 * User: sandruse
 * Date: 24.01.18
 * Time: 1:13 PM
 */

class Database
{
    public static $host = "localhost";
    public static $dbName = "new_mvc";
    public static $userName = "root";
    public static $password = "11111111";

    private static function connect(){
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$userName, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}