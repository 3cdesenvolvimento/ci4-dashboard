<?= $this->extend('layouts/layout_main') ?>
<?= $this->section('content') ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-line', 'titulo' => 'Total de Vendas', 'valor' => 'R$ 1.234,90']) ?>
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-bar', 'titulo' => 'Total de Receitas', 'valor' => 'R$ 1.456,00']) ?>
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-area', 'titulo' => 'Total de Despesas', 'valor' => 'R$ 2.345,00']) ?>
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-pie', 'titulo' => 'Total de Orçamentos', 'valor' => 'R$ 25.987,22']) ?>
    </div>
    <div class="row pt-4 g-4">
        <?= view('layouts/partials/bar_chart', ['titulo' => 'Vendas Mundiais - País x Ano', 'uuid' => uniqid(), 'dados' => $chart_data1]) ?>
        <?= view('layouts/partials/bar_chart', ['titulo' => 'Vendas Mundiais - Produto x Cidade', 'uuid' => uniqid(), 'dados' => $chart_data2]) ?>
        <?= view('layouts/partials/bar_chart', ['titulo' => 'Vendas Mundiais - R$ x Mês', 'uuid' => uniqid(), 'dados' => $chart_data3]) ?>
        <?= view('layouts/partials/line_chart', ['titulo' => 'Consumo', 'uuid' => uniqid(), 'dados' => $chart_data4]) ?>
    </div>
    <div class="row pt-4 g-4">
        <?= view('layouts/partials/table', ['titulo' => 'Lista de Clientes', 'table_header' => $table_header, 'table_data' => $table_data]) ?>
    </div>
    <div class="row pt-4 g-4">
        <?= view('layouts/partials/messages', ['messages' => $messages]) ?>
        <?= view('layouts/partials/calendar') ?>
        <?= view('layouts/partials/todo_list', ['todo_list' => $todo_list]) ?>
    </div>
</div>

<?= $this->endSection() ?>