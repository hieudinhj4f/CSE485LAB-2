-- Tạo cơ sở dữ liệu
CREATE DATABASE tintuc;
USE tintuc;

-- Bảng users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL CHECK (role IN (0, 1))
);

-- Bảng categories
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Bảng news
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id) 
	 ON DELETE SET NULL 
	 ON UPDATE CASCADE
);

SELECT * FROM categories
SELECT * FROM NEWS

INSERT INTO categories(NAME) VALUES ('Sport')news
INSERT INTO news(title,)
