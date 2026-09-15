<?php
$title = $title ?? 'About';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?> | POS System</title>
</head>

<body>

    <h1>About the POS System</h1>

    <p>
        This project is a basic Point-of-Sale system built using CodeIgniter 4.
    </p>

    <p>
        It demonstrates the Model-View-Controller or MVC architecture.
    </p>

    <p>
        Static PHP arrays are currently used as temporary data sources instead of a database.
    </p>

    <p>
        Database integration will be added in a later version.
    </p>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>

</body>
</html>