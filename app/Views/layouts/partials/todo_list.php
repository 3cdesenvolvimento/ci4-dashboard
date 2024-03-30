<div class="col-sm-12 col-md-6 col-xl-4">
    <div class="h-100 bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4 text-primary">
            <h6 class="mb-0">Lista de Tarefas</h6>
            <a href="">Mostre Todos</a>
        </div>
        <div class="d-flex mb-2">
            <input class="form-control bg-dark border-0 text-white" type="text" placeholder="Informe a tarefa">
            <button type="button" class="btn btn-primary ms-2 text-white">Adicionar</button>
        </div>

        <?php foreach( $todo_list as $index => $task ): ?>

            <?php $css = $index != (count($todo_list) - 1) ? 'border-bottom' : null; ?>

            <div class="d-flex align-items-center <?= $css ?> py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <span><?= $task ?></span>
                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <script>
            window.addEventListener("DOMContentLoaded", () => {
                $(".form-check-input").on("click", function(){
                    if( $(this).prop('checked') )
                    {
                        var conteudo = $(this).parent().find('span').html();
                        $(this).parent().find('span').html("<del>"+conteudo+"</del>");
                    }
                    else
                    {
                        var conteudo = $(this).parent().find('span').find('del').html();
                        $(this).parent().find('span').html(conteudo);
                    }
                    $(this).parent().find('button').toggleClass('text-primary');
                });
            });
        </script>
    </div>
</div>