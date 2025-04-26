<?php

namespace Config;

use mysqli;

class Config
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "phpstore";

    // ket noi vao db nao
    public static function connect()
    {
        $dbname = self::DB_NAME;
        $server = self::DB_HOST;
        $user = self::DB_USER;
        $password = self::DB_PASS;

        $conn = new mysqli($server, $user, $password, $dbname);

        if ($conn->connect_error) {
            return json_encode([
                "status" => "error",
                "message" => "connect fail: " . $conn->connect_error
            ], JSON_UNESCAPED_UNICODE);
        }

        return $conn;
    }
}
