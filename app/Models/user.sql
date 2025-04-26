CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,
    is_admin TINYINT(1) DEFAULT 0,
    register_date DATETIME DEFAULT CURRENT_TIMESTAMP -- thoi gian dang ky
);

INSERT INTO users (username, email, user_password, is_admin)
VALUES ('admin', 'admin@gmail.com', '12345678', 1);