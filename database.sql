CREATE DATABASE IF NOT EXISTS prodesk_db;
USE prodesk_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin','user','it_staff') DEFAULT 'user'
);

CREATE TABLE tickets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  title VARCHAR(255) NOT NULL,
  problem TEXT,
  category ENUM('Hardware','SAP','WMS','Network') DEFAULT 'Hardware',
  priority ENUM('High','Medium','Low') DEFAULT 'Low',
  status ENUM('Open','In Progress','Closed') DEFAULT 'Open',
  assigned_to INT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name, email, password, role) VALUES
('Admin', 'admin@prodesk.com', '123456', 'admin');