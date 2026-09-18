<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    protected $helpers = ['url'];

    public function index()
    {
        $customerModel = new CustomerModel();

        $data = [
            'title' => 'Customer Accounts',
            'customers' => $customerModel->findAll()
        ];

        return view('customers/index', $data);
    }
}
