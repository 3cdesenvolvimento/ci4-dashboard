<?= $this->extend('layouts/layout_main') ?>
<?= $this->section('content') ?>

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-line', 'titulo' => 'Total de Vendas', 'valor' => 'R$ 1.234,90']) ?>
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-bar', 'titulo' => 'Total de Receitas', 'valor' => 'R$ 1.456,00']) ?>
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-area', 'titulo' => 'Total de Despesas', 'valor' => 'R$ 2.345,00']) ?>
        <?= view('layouts/partials/totais', ['icone' => 'fa fa-chart-pie', 'titulo' => 'Total de Orçamentos', 'valor' => 'R$ 25.987,22']) ?>
    </div>
<?php
$chart_data1 = '{
    labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
    datasets: 
    [
        {
            label: "USA",
            data: [15, 30, 55, 65, 60, 80, 95],
            backgroundColor: "green"
        },
        {
            label: "UK",
            data: [8, 35, 40, 60, 70, 55, 75],
            backgroundColor: "blue"
        },
        {
            label: "AU",
            data: [12, 25, 45, 55, 65, 70, 60],
            backgroundColor: "red"
        }
    ]
}';

$chart_data2 = '{
    labels: ["MIAMI", "ORLANDO", "LONDRES", "TOKYO", "MADRID", "MOSCOU"],
    datasets: 
    [
        {
            label: "MÓVEIS",
            data: [300, 550, 650, 600, 800, 950],
            backgroundColor: "yellow"
        },
        {
            label: "PAPELARIA",
            data: [350, 400, 600, 700, 550, 750],
            backgroundColor: "orange"
        }
    ]
}';

$chart_data3 = '{
    labels: ["JAN. / 24", "FEV. / 24", "MAR. / 24", "ABR. / 24", "MAI. / 24"],
    datasets: 
    [
        {
            label: "TOTAL",
            data: [400.00, 600.00, 700.00, 550.00, 750.00],
            backgroundColor: "pink"
        }
    ]
}';

$chart_data4 = '{
    labels: ["PÃES", "BOLOS", "DOCES", "EMPADAS"],
    datasets: 
    [
        {
            label: "FEITOS",
            data: [400, 550, 650, 800, 800, 950],
            backgroundColor: "rgba(235, 20, 20, .3)",
            fill: true
        },
        {
            label: "CONSUMIDOS",
            data: [350, 400, 600, 700, 550, 750],
            backgroundColor: "rgba(235, 20, 20, .7)",
            fill: true
        }
    ]
}';

?>
    <div class="row pt-4 g-4">
        <?= view('layouts/partials/bar_chart', ['titulo' => 'Vendas Mundiais - País x Ano', 'uuid' => uniqid(), 'dados' => $chart_data1]) ?>
        <?= view('layouts/partials/bar_chart', ['titulo' => 'Vendas Mundiais - Produto x Cidade', 'uuid' => uniqid(), 'dados' => $chart_data2]) ?>
        <?= view('layouts/partials/bar_chart', ['titulo' => 'Vendas Mundiais - R$ x Mês', 'uuid' => uniqid(), 'dados' => $chart_data3]) ?>
        <?= view('layouts/partials/line_chart', ['titulo' => 'Consumo', 'uuid' => uniqid(), 'dados' => $chart_data4]) ?>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <?= view('layouts/partials/table', ['titulo' => 'Lista de Clientes']) ?>
</div>
<!-- Sale & Revenue End -->

<?= $this->endSection() ?>