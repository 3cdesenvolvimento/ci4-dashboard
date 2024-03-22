<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0 text-primary"><?= $titulo ?></h6>
            <a href="">Mostre Todos</a>
        </div>
        <canvas id="<?= $uuid ?>"></canvas>
    </div>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        var ctx1 = $("#<?= $uuid ?>").get(0).getContext("2d");
        var myChart1 = new Chart(ctx1, {
            type: "line",
            data: <?= $dados ?>,
            options: {
                responsive: true
            }
        });
    });
</script>