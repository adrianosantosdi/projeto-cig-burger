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

    <section class="container">
        <div class="col">
            <div class="row mb-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burger 01">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 01</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati ex magnam aliquid tenetur exercitationem esse culpa amet, neque nihil ab nulla fuga error, illo quae accusamus consequatur, maxime minima. Magni?
                    Dignissimos deserunt ea ratione odio, enim placeat adipisci eum magnam pariatur perspiciatis illum libero. Ad nesciunt expedita perferendis deleniti eveniet quas! Corrupti necessitatibus quaerat recusandae rerum repudiandae eligendi deleniti ullam.</p>
                    <h2 class="mt-3 product-text-color">R$ 15,00</h2>
                </div>
            </div>
            <div class="row mb-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 02</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati ex magnam aliquid tenetur exercitationem esse culpa amet, neque nihil ab nulla fuga error, illo quae accusamus consequatur, maxime minima. Magni?
                    Dignissimos deserunt ea ratione odio, enim placeat adipisci eum magnam pariatur perspiciatis illum libero. Ad nesciunt expedita perferendis deleniti eveniet quas! Corrupti necessitatibus quaerat recusandae rerum repudiandae eligendi deleniti ullam.</p>
                    <h2 class="mt-3 product-text-color">R$ 14,00</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burger 02">
                </div>
            </div>
            <div class="row mb-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burger 03">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 01</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati ex magnam aliquid tenetur exercitationem esse culpa amet, neque nihil ab nulla fuga error, illo quae accusamus consequatur, maxime minima. Magni?
                    Dignissimos deserunt ea ratione odio, enim placeat adipisci eum magnam pariatur perspiciatis illum libero. Ad nesciunt expedita perferendis deleniti eveniet quas! Corrupti necessitatibus quaerat recusandae rerum repudiandae eligendi deleniti ullam.</p>
                    <h2 class="mt-3 product-text-color">R$ 13,00</h2>
                </div>
            </div>
            <div class="row mb-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 02</h1>
                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati ex magnam aliquid tenetur exercitationem esse culpa amet, neque nihil ab nulla fuga error, illo quae accusamus consequatur, maxime minima. Magni?
                    Dignissimos deserunt ea ratione odio, enim placeat adipisci eum magnam pariatur perspiciatis illum libero. Ad nesciunt expedita perferendis deleniti eveniet quas! Corrupti necessitatibus quaerat recusandae rerum repudiandae eligendi deleniti ullam.</p>
                    <h2 class="mt-3 product-text-color">R$ 9,00</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burger 04">
                </div>
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