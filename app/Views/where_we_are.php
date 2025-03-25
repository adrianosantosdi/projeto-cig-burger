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
                <a href="<?= site_url('/') ?>">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo da Página">
                </a>
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

    <section class="container product-box py-5">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="A nossa sala">
            </div>
            <div class="col-6">
                <p class="where-we-are-title mb-0">CIGBurger Paris</p>
                <p class="where-we-are-subtitle">Rua des hamburgers, 123 Paris</p>
                <div class="mb-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus assumenda doloremque distinctio animi hic esse beatae quis officiis. Nihil hic fugit obcaecati voluptatem voluptas, dolores quas quis iste fuga qui.
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="tel:+33123456789">+33 1 23 45 67 89</a>
                    </p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="email">
                    <p class="where-we-are-subtitle ms-3">
                        <a class="nav-link" href="cigburger@paris.com">cigburger@paris.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container product-box py-5">
        <div class="row">
            <div class="col text-center">
                <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Mapa">
            </div>
        </div>
    </section>

    <footer class="container-fluid 1t-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#">
                        <img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram">
                    </a>
                    <a href="#">
                        <img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="Whatsapp">
                    </a>

                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col text-center">
                <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>