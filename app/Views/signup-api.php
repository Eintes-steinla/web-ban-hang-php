<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// header('Content-Type: application/json; charset=UTF-8');

require_once __DIR__ . '../../Controllers/SignupController.php';
require_once __DIR__ . '../../../config/Config.php';

use App\Controllers\SignupController;
use Config\Config;

$conn = new mysqli(Config::DB_HOST, Config::DB_USER, Config::DB_PASS, Config::DB_NAME);

if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit;
}

$signupController = new SignupController($conn);

$response = $signupController->signUp();

echo $response ?: json_encode(['status' => 'error', 'message' => 'No response from server']);
