-- Create the database
CREATE DATABASE IF NOT EXISTS db_latihan CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Use the database
USE db_latihan;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert a sample user
INSERT INTO users (username, password) VALUES 
('admin', 'admin123'),
('user1', 'password1'),
('user2', '123456');
