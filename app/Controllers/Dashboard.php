<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $status_options = ['Ativo', 'Inativo'];
        $table_header = ['Código', 'Nome', 'E-Mail', 'Telefone', 'Status'];
        $table_data = [];
        for( $i = 1; $i <= 10; $i++ )
        {
            $codigo = rand(10000, 99999);
            $nome = uniqid();
            $email = $nome.'@gmail.com';
            $fone = '('.rand(10, 99).') 9 '.rand(1000, 9999).'-'.rand(1000,9999);
            $status = $status_options[rand(0, 1)];

            $table_data[] = [$codigo, $nome, $email, $fone, $status];
        }

        $data = [
            'table_header' => $table_header,
            'table_data' => $table_data
        ];

        return view('dashboard', $data);
    }
}
