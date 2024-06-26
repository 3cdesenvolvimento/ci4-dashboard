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
                            <a href="<?= site_url('auth/login') ?>" class="">
                                <h3 class="text-primary"><i class="fa fa-sign-in-alt me-2"></i><?= APP_NAME ?></h3>
                            </a>
                            <h3 class="text-white">Login</h3>
                        </div>

                        <?= form_open('auth/login_submit') ?>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">E-mail</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-white" for="exampleCheck1">Manter-me Conectado</label>
                            </div>
                            <a href="<?= site_url('auth/forgot_password') ?>">Esqueceu sua Senha?</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                        <?= form_close() ?>

                        <p class="text-center mb-0 text-white">Não tem uma conta? <a href="<?= site_url('auth/signup') ?>">Cadastre-se</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

<?= $this->endSection() ?>