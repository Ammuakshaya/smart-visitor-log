CREATE DATABASE visitor_log;

USE visitor_log;

CREATE TABLE visitors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    mobile VARCHAR(10),
    purpose VARCHAR(255),
    photo VARCHAR(255),
    entry_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    exit_time DATETIME
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);
INSERT INTO admin (username, password)
VALUES ('admin', MD5('admin123'));
