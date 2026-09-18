# POS System

## IT0049 - Web System Technologies

### Technical Formative Assessment 2: From Arrays to a Real Database

This project is a basic Point-of-Sale (POS) system built with CodeIgniter 4. It extends the TFA1 application by replacing the temporary static PHP arrays used by the Customer Accounts and User Accounts pages with a MySQL database.

## Features

The application contains four pages:

- Home
- About
- Customer Accounts
- User Accounts

The Customer Accounts and User Accounts pages retrieve their records from MySQL through CodeIgniter Models using `findAll()`.

## MVC Flow

Customer Accounts:

```text
customers table
    ↓
CustomerModel
    ↓
Customers controller
    ↓
customers/index.php view
```

User Accounts:

```text
users table
    ↓
UserModel
    ↓
Users controller
    ↓
users/index.php view
```

## Routes

| Route | Page |
| --- | --- |
| `/` | Home |
| `/about` | About |
| `/customers` | Customer Accounts |
| `/users` | User Accounts |

## Technologies

- PHP 8.2+
- CodeIgniter 4
- MySQL / MariaDB
- XAMPP
- phpMyAdmin
- Composer

## Project Requirements

Before running the project locally, make sure you have:

- XAMPP installed
- Apache and MySQL running in XAMPP
- PHP 8.2 or higher
- Composer installed

## Database

The local database name used by this project is:

```text
pos_system_db
```

The SQL file is located at:

```text
database/pos_system_db.sql
```

It creates the required `customers` and `users` tables and inserts five sample records into each table.

## Database Setup with phpMyAdmin

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin at `http://localhost/phpmyadmin`.
3. Select the **Import** tab.
4. Choose `database/pos_system_db.sql` from this project.
5. Click **Import** or **Go**.
6. Confirm that the `pos_system_db` database contains the `customers` and `users` tables.
7. Confirm that each table contains at least five records.

## Environment Configuration

The project uses a `.env` file for the local database connection. The real `.env` file is ignored by Git for security.

A safe example is included as:

```text
.env.example
```

For a normal XAMPP MySQL installation, use:

```text
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = pos_system_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

If your MySQL `root` account has a password, place it only in your local `.env` file. Do not commit database passwords to GitHub.

## How to Run Locally

1. Copy or clone the project into your XAMPP `htdocs` directory, for example:

```text
C:\xampp\htdocs\pos-system
```

2. Open a terminal in the project root.
3. If the `vendor` directory is not present, run:

```bash
composer install
```

4. Import `database/pos_system_db.sql` using phpMyAdmin.
5. Make sure your local `.env` contains the correct database settings.
6. Start the CodeIgniter development server:

```bash
php spark serve
```

7. Open:

```text
http://localhost:8080/
```

## Important Project Files

```text
app/
├── Config/
│   └── Routes.php
├── Controllers/
│   ├── Customers.php
│   ├── Pages.php
│   └── Users.php
├── Models/
│   ├── CustomerModel.php
│   └── UserModel.php
└── Views/
    ├── customers/
    │   └── index.php
    ├── pages/
    │   ├── about.php
    │   └── home.php
    └── users/
        └── index.php

database/
└── pos_system_db.sql
```

## Models

`CustomerModel` communicates with the `customers` table.

`UserModel` communicates with the `users` table.

The controllers create the appropriate Model and call `findAll()` to retrieve records. The records are then passed to the corresponding view for display.

## GitHub Repository

Repository:

https://github.com/AngeloS1203/Santos_Angelo_POS_system

The repository should include the raw project files, this README, and the database export. The private `.env` file must remain excluded by `.gitignore`.

## Hosted Application

Hosted URL:

```text
TO BE ADDED AFTER DEPLOYMENT
```

The hosting environment must use its own production database credentials and base URL instead of the local XAMPP values.
