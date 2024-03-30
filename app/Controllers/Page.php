<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function error_404()
    {
        return view('error_404');
    }

    public function blank_page()
    {
        return view('blank_page');
    }
}
