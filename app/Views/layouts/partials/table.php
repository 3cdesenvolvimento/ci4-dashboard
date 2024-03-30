<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0 text-primary"><?= $titulo ?></h6>
            <a href="">Mostre Todos</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white bg-dark text-center">
                        <?php foreach( $table_header as $title_col ): ?>
                            <th scope="col"><?= $title_col ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $table_data as $cols ): ?>
                        <tr class="text-light">
                            <?php foreach( $cols as $cell ): ?>
                                <td><?= $cell ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>