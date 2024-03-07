<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?= $this->include('layouts/partials/spinner.php') ?>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="<?= site_url('auth/forgot_password') ?>" class="">
                                <h3 class="text-primary"><i class="fa fa-unlock me-2"></i><?= APP_NAME ?></h3>
                            </a>
                            <h5 class="text-white">Recuperar sua senha</h5>
                        </div>

                        <p class="text-center text-white">Informe o seu endereço de e-mail para recuperar sua senha.</p>

                        <?= form_open('auth/forgot_password_submit') ?>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">E-mail</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Recuperar</button>
                        <?= form_close() ?>

                        <p class="text-center text-white mb-2">Não tem uma conta? <a href="<?= site_url('auth/signup') ?>">Cadastre-se</a></p>
                        <p class="text-center text-white mb-0">Já tem uma conta? <a href="<?= site_url('auth/login') ?>">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

<?= $this->endSection() ?>