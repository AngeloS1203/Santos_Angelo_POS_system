CREATE DATABASE IF NOT EXISTS pos_system_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE pos_system_db;

DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS users;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Angela Reyes', 'angela.reyes@example.com', '09171234567', '2026-09-18 09:00:00'),
('Joshua Santos', 'joshua.santos@example.com', '09182345678', '2026-09-18 09:05:00'),
('Mikaela Cruz', 'mikaela.cruz@example.com', '09193456789', '2026-09-18 09:10:00'),
('Daniel Garcia', 'daniel.garcia@example.com', '09204567890', '2026-09-18 09:15:00'),
('Sophia Mendoza', 'sophia.mendoza@example.com', '09215678901', '2026-09-18 09:20:00');

INSERT INTO users (username, full_name, created_at) VALUES
('admin01', 'Andrea Lim', '2026-09-18 09:30:00'),
('cashier01', 'Miguel Ramos', '2026-09-18 09:35:00'),
('manager01', 'Patricia Flores', '2026-09-18 09:40:00'),
('inventory01', 'Kevin Torres', '2026-09-18 09:45:00'),
('sales01', 'Nicole Bautista', '2026-09-18 09:50:00');
