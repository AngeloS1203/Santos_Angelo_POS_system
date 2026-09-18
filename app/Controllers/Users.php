<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    protected $helpers = ['url'];

    public function index()
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'User Accounts',
            'users' => $userModel->findAll()
        ];

        return view('users/index', $data);
    }
}
