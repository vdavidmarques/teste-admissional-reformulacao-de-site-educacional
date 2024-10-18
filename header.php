<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Admissional: Reformulação de Site Educacional</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="dist/css/styles.css" />
</head>

<body>
    <header class="header">
        <div class="container content">
            <div class="image">
                <img src="dist/images/logo.svg" alt="Logo da Instituição" class="logo">
            </div>
            <div class="navbar">
                <img src="dist/icons/navbar.svg" alt="Navbar" class="menu-icon" onclick="openMenu()">
                <div class="navbar__menu">
                    <nav>
                        <ul class="navbar__list">
                            <li><a href="#home" class="item">Home</a></li>
                            <li><a href="#about" class="item">Colégio</a></li>
                            <li><a href="#segments" class="item"> Segmentos</a></li>
                            <li><a href="#differentials" class="item">Diferenciais</a></li>
                            <li><a href="#contact" class="item">Contato</a></li>
                        </ul>
                    </nav>
                    <button onclick="closeMenu()" class="bg-close-menu-mobile">
                        Fechar menu
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main>