<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4 text-white">
            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
            <h1 class="display-1 fw-bold">404</h1>
            <h1 class="mb-4">Página Não Encontrada</h1>
            <p class="mb-4">Lamentamos, mas a página que você procurou não existe em nosso site! Talvez vá para nossa página inicial ou tente usar uma pesquisa?</p>
            <a class="btn btn-primary rounded-pill py-3 px-5 text-white" href="<?= site_url('/dashboard') ?>">Voltar ao DashBoard</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>