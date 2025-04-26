<?php

namespace App\Controllers;

use Config\Config;
use mysqli;

class SignupController
{
    private $conn;
    private $username;
    private $email;
    private $password;
    private $confirmPassword;

    // messages
    private const IS_REQUIRED = 'is required';
    private const ALREADY_EXISTS = 'already exists';
    private const INVALID_USERNAME = 'invalid username';
    private const INVALID_EMAIL = 'invalid email';
    private const DOES_NOT_MATCH = 'does not match';
    private const SIGNUP_SUCCESSFULLY = 'Registered successfully';

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
        $this->username = isset($_POST['username']) ? trim($_POST['username']) : null;
        $this->email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $this->password =  password_hash(trim($_POST['password'] ?? ''), PASSWORD_DEFAULT);
        $this->confirmPassword = isset($_POST['confirm-password']) ? trim($_POST['confirm-password']) : null;
    }

    public function signUp()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
            $errors = $this->validateInput();
            if (!empty($errors)) {
                return json_encode(["status" => "error", "errors" => $errors], JSON_UNESCAPED_UNICODE);
            }

            if ($this->insertUser()) {
                return json_encode(["status" => "success", "message" => self::SIGNUP_SUCCESSFULLY], JSON_UNESCAPED_UNICODE);
            }
        }
    }

    private function insertUser()
    {
        $stmt = $this->conn->prepare("INSERT INTO users (username, email, user_password) VALUES (?, ?, ?)");
        if (!$stmt) {
            return false;
        }
        $stmt->bind_param("sss", $this->username, $this->email, $this->password);
        return $stmt->execute();
    }

    private function validateInput()
    {
        $errors = [];

        // kiểm tra rỗng
        if (empty($this->username)) {
            $errors['username'] = self::IS_REQUIRED;
        } elseif (!preg_match('/^(?=.*[a-z])[a-z0-9 ._-]+$/', $this->username)) {
            $errors['username'] = self::INVALID_USERNAME;
        }
        if (password_verify('', $this->password)) {
            $errors['password'] = self::IS_REQUIRED;
        }
        if (empty($this->email)) {
            $errors['email'] = self::IS_REQUIRED;
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = self::INVALID_EMAIL;
        }
        // kiểm tra pass
        if (!password_verify($this->confirmPassword, $this->password)) {
            $errors['confirm-password'] = self::DOES_NOT_MATCH;
        }
        // kiểm tra người dùng đã tồn tại hay chưa
        if ($this->checkUsernameAlreadyExists($this->username)) {
            $errors['username'] = self::ALREADY_EXISTS;
        }
        if ($this->checkEmailAlreadyExists($this->email)) {
            $errors['email'] = self::ALREADY_EXISTS;
        }

        return $errors;
    }

    private function checkUsernameAlreadyExists($username)
    {
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0;
    }

    private function checkEmailAlreadyExists($email)
    {
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0;
    }
}
