CREATE DATABASE prodesk_db;
USE prodesk_db;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
   email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
     role ENUM('admin','employee') DEFAULT 'employee'
     );

     CREATE TABLE tasks (
      id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255),
        description TEXT,
         assigned_to INT,
          status ENUM('Open','In Progress','Closed') DEFAULT 'Open',
           priority ENUM('Low','Medium','High') DEFAULT 'Medium',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
             FOREIGN KEY (assigned_to) REFERENCES users(id)
             );

             -- Demo Users: admin@prodesk.com / admin123 , emp@prodesk.com / emp123
             INSERT INTO users (name, email, password, role) VALUES
             ('Admin', 'admin@prodesk.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin'),
             ('Rahul Employee', 'emp@prodesk.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'employee');