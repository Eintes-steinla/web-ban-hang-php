<?php
class loginController
{
    public function __construct()
    {
        // Check if the user is already logged in
        if (isset($_SESSION['user'])) {
            header('Location: index.php');
            exit;
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // $_SESSION['id'] = self::getUserID($this->username);
            // $_SESSION['username'] = $this->username;
            // $_SESSION['email'] = $this->email;

            // Validate the input
            if (empty($username) || empty($password)) {
                echo "Username and password are required.";
                return;
            }

            // $_SESSION['is_login'] = true;
            // Check the credentials (this is just a placeholder, replace with actual authentication logic)
            if ($username === 'admin' && $password === 'password') {
                $_SESSION['user'] = $username;
                header('Location: index.php');
                exit;
            } else {
                echo "Invalid username or password.";
            }
        }
    }
}
