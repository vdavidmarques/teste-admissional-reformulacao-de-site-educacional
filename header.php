<?php 
    $host = 'http://localhost:8080/';
    $root = $host . 'teste-admissional-reformulacao-de-site-educacional' 
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex, nofollow" />

    <link rel="stylesheet" href="<?php echo $root ?>/dist/css/styles.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <meta name="generator" content="WordPress 6.5.3" />
    <title itemprop="name">Teste Site Educacional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
        rel="stylesheet" />
    <?php include 'utils/favicon.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="home blog">
    <header>
        <div class="header-menu-itens container">
            <div class="logotype">
                <a href="/" class="logo">
                    <img
                        src="<?php echo $root ?>/dist/icons/logo.svg"
                        alt=""
                        itemprop="image"
                        class="ease-in-out" />
                </a>
            </div>
            <div class="open-menu-mobile">
                <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
            </div>
            <div class="menu-items scroll-effect">
                <nav id="custom-header-menu">
                    <div class="menu-header-container">
                        <ul id="custom-header-menu" class="main-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144">
                                <a href="#segmentos-educacionais">Segmentos Educacionais</a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145">
                                <a href="#diferenciais-da-escola">Diferenciais</a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143">
                                <a href="#colegio">Colégio</a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147">
                                <a href="#contato">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>
        </div>
    </header>
    <main id="content" role="main">
        <div class="home">
            <div class="page home">