<?php

namespace App\Controllers;

class Customers extends BaseController
{
    protected $helpers = ['url'];

    public function index()
    {
        $customers = [
            [
                'full_name' => 'Angela Reyes',
                'email' => 'angela.reyes@example.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Joshua Santos',
                'email' => 'joshua.santos@example.com',
                'phone' => '09182345678'
            ],
            [
                'full_name' => 'Mikaela Cruz',
                'email' => 'mikaela.cruz@example.com',
                'phone' => '09193456789'
            ],
            [
                'full_name' => 'Daniel Garcia',
                'email' => 'daniel.garcia@example.com',
                'phone' => '09204567890'
            ],
            [
                'full_name' => 'Sophia Mendoza',
                'email' => 'sophia.mendoza@example.com',
                'phone' => '09215678901'
            ]
        ];

        $data = [
            'title' => 'Customer Accounts',
            'customers' => $customers
        ];

        return view('customers/index', $data);
    }
}