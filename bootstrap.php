<?php

use Dba\Connection;

define('_DIR_ROOT_', __DIR__);

// xử lý http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $web_root = "https://" . $_SERVER['HTTP_HOST'];
} else {
    $web_root = "http://" . $_SERVER['HTTP_HOST'];
}

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(__DIR__));
$web_root .= $folder;
define('_WEB_ROOT_', $web_root);

// tu dong load configs
$configs_dir = scandir('configs');
if (!empty($configs_dir)) {
    foreach ($configs_dir as $item) {
        if ($item != '.' && $item != '..' && file_exists('configs/' . $item)) {
            require_once 'configs/' . $item; // load routes config
        }
    }
}
require_once 'core/Route.php'; // load route class
require_once 'app/App.php'; // load app class

// kiem tra config va load database
if (!empty($config['database'])) {
    $db_config = array_filter($config['database']);

    if (!empty($db_config)) {
        require_once 'core/Connection.php'; // load database class
        require_once 'core/Database.php'; // load database class
        $db = new Database();
    }
}

require_once 'core/Model.php'; // load app class

require_once 'core/Controller.php'; // load base controller
