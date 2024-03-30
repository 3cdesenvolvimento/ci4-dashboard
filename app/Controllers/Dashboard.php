<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use stdClass;

class Dashboard extends BaseController
{
    public function index()
    {
        // GRÁFICO 1
        $grf1 = [
                    'labels' => ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
                    'datasets' => []
                ];
        
        $obj1a = new stdClass();
        $obj1a->label = "USA";
        $obj1a->data = [15, 30, 55, 65, 60, 80, 95];
        $obj1a->backgroundColor = "green";
        $grf1['datasets'][] = $obj1a;

        $obj1b = new stdClass();
        $obj1b->label = "UK";
        $obj1b->data = [8, 35, 40, 60, 70, 55, 75];
        $obj1b->backgroundColor = "blue";
        $grf1['datasets'][] = $obj1b;

        $obj1c = new stdClass();
        $obj1c->label = "AU";
        $obj1c->data = [12, 25, 45, 55, 65, 70, 60];
        $obj1c->backgroundColor = "red";
        $grf1['datasets'][] = $obj1c;

        $chart_data1 = json_encode($grf1);

        // GRÁFICO 2
        $grf2 = [
            'labels' => ["MIAMI", "ORLANDO", "LONDRES", "TOKYO", "MADRID", "MOSCOU"],
            'datasets' => []
        ];

        $obj2a = new stdClass();
        $obj2a->label = "MÓVEIS";
        $obj2a->data = [300, 550, 650, 600, 800, 950];
        $obj2a->backgroundColor = "yellow";
        $grf2['datasets'][] = $obj2a;

        $obj2b = new stdClass();
        $obj2b->label = "PAPELARIA";
        $obj2b->data = [350, 400, 600, 700, 550, 750];
        $obj2b->backgroundColor = "orange";
        $grf2['datasets'][] = $obj2b;

        $chart_data2 = json_encode($grf2);

        // GRÁFICO 3
        $grf3 = [
            'labels' => ["JAN. / 24", "FEV. / 24", "MAR. / 24", "ABR. / 24", "MAI. / 24"],
            'datasets' => []
        ];

        $obj3a = new stdClass();
        $obj3a->label = "TOTAL";
        $obj3a->data = [400.00, 600.00, 700.00, 550.00, 750.00];
        $obj3a->backgroundColor = "pink";
        $grf3['datasets'][] = $obj3a;

        $chart_data3 = json_encode($grf3);

        // GRÁFICO 4
        $grf4 = [
            'labels' => ["PÃES", "BOLOS", "DOCES", "EMPADAS"],
            'datasets' => []
        ];

        $obj4a = new stdClass();
        $obj4a->label = "FEITOS";
        $obj4a->data = [400, 550, 650, 800, 800, 950];
        $obj4a->backgroundColor = "rgba(235, 20, 20, .3)";
        $obj4a->fill = true;
        $grf4['datasets'][] = $obj4a;

        $obj4b = new stdClass();
        $obj4b->label = "CONSUMIDOS";
        $obj4b->data = [350, 400, 600, 700, 550, 750];
        $obj4b->backgroundColor = "rgba(235, 20, 20, .7)";
        $obj4b->fill = true;
        $grf4['datasets'][] = $obj4b;

        $chart_data4 = json_encode($grf4);

        // TABELA
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

        // MENSAGENS
        $obj1 = new stdClass();
        $obj1->image = 'user.png';
        $obj1->author = 'John Doe';
        $obj1->date_time = '01/03/2022';
        $obj1->message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias rerum placeat commodi, illum nisi';

        $obj2 = new stdClass();
        $obj2->image = 'user.png';
        $obj2->author = 'John Doe';
        $obj2->date_time = '01/03/2022';
        $obj2->message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias rerum placeat commodi, illum nisi';

        $obj3 = new stdClass();
        $obj3->image = 'user.png';
        $obj3->author = 'John Doe';
        $obj3->date_time = '01/03/2022';
        $obj3->message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias rerum placeat commodi, illum nisi';

        $messages = [$obj1, $obj2, $obj3];

        // TAREFAS (ToDo List)
        $todo_list = ['Tarefa 01', 'Tarefa 02', 'Tarefa 03', 'Tarefa 04', 'Tarefa 05'];

        $data = [
            'chart_data1' => $chart_data1,
            'chart_data2' => $chart_data2,
            'chart_data3' => $chart_data3,
            'chart_data4' => $chart_data4,
            'table_header' => $table_header,
            'table_data' => $table_data,
            'messages' => $messages,
            'todo_list' => $todo_list
        ];

        return view('dashboard', $data);
    }
}
