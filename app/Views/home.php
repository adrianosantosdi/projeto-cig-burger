<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <title>CigBurger</title>
</head>
<body>

    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo da Página">
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div>
                    <a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a>
                </div>
                <div>
                    <a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a>
                </div>
                <div>
                    <a class="nav-link ms-5" href="<?= site_url('where_we_are') ?>">Onde Estamos</a>
                </div>
            </div>
        </div>
    </nav>

    <h1>Home</h1>

    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>