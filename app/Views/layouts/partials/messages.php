<div class="col-sm-12 col-md-6 col-xl-4">
    <div class="h-100 bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h6 class="mb-0 text-primary">Mensagens</h6>
            <a href="">Mostre Todos</a>
        </div>

        <?php foreach( $messages as $index => $message ): ?>

            <?php $css = $index != (count($messages) - 1) ? 'border-bottom' : null; ?>

            <div class="d-flex <?= $css ?> py-3">
                <img class="rounded-circle flex-shrink-0" src="<?= base_url('assets/img/'.$message->image) ?>" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 justify-content-between text-white">
                        <h6 class="mb-0"><?= $message->author ?></h6>
                        <small><?= $message->date_time ?></small>
                    </div>
                    <span><?= $message->message ?></span>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>