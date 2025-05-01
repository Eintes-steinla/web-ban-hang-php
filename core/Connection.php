<?php
class Connection
{
    private static $instance = null;

    private function __construct($config)
    {
        try {
            // cau hinh dns
            $dns = 'mysql:dbname=' . $config['db'] . ';host=' . $config['host'];

            /**
             * cau hinh $options
             * - cau hinh utf8
             * - cau hinh ngoai le khi truy van loi
             */
            $options = [
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                // \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                // \PDO::ATTR_EMULATE_PREPARES => false,
            ];

            // khoi tao ket noi
            $conn = new \PDO($dns, $config['user'], $config['pass'], $options);
        } catch (\Exception $e) {
            $mess = $e->getMessage();
            die('Lỗi kết nối database: ' . $mess);
        }
    }

    public static function getInstance($config)
    {
        if (self::$instance == null) {
            self::$instance = new Connection($config);
        }

        return self::$instance;
    }
}
