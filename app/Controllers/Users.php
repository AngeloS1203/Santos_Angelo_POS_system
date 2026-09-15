<?php

namespace App\Controllers;

class Users extends BaseController
{
    protected $helpers = ['url'];

    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Andrea Lim',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Miguel Ramos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Patricia Flores',
                'role' => 'Manager'
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Kevin Torres',
                'role' => 'Inventory Staff'
            ],
            [
                'username' => 'sales01',
                'full_name' => 'Nicole Bautista',
                'role' => 'Sales Staff'
            ]
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users
        ];

        return view('users/index', $data);
    }
}