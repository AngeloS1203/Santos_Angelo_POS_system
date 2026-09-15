<?php
$title = $title ?? 'User Accounts';
$users = $users ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | POS System</title>
</head>

<body>

    <h1>User Accounts</h1>

    <p>
        Below are the staff records stored using a temporary static PHP array.
    </p>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($users as $user): ?>

                <tr>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['full_name'] ?></td>
                    <td><?= $user['role'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</body>

</html>