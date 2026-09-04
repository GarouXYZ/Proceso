<?php
define('BASE_URL', 'http://localhost/user_ludikron/');

final class Database {
    private static ?PDO $pdo = null;

    public static function get(): PDO {
        if (!self::$pdo) {
            $dsn = 'mysql:host=localhost;port=3306;dbname=bd-ludikron;charset=utf8mb4';
            self::$pdo = new PDO($dsn, 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        }
        return self::$pdo;
    }
}
