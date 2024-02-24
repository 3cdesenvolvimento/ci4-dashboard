<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login_frm');
    }

    public function login_submit()
    {
        echo 'Login';
    }

    public function signup()
    {
        echo 'Sign Up';
    }

    public function signup_submit()
    {
        echo 'Sign Up Submit';
    }

    public function forgot_password()
    {
        echo 'Forgot Password';
    }

    public function forgot_password_submit()
    {
        echo 'Forgot Password Submit';
    }
}
