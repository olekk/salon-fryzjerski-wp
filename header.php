<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Studio metamorfoza | salon wizażu</title>

    <meta name="description"
        content="Uwolnij Swoje Piękno - Studio Metamorfoza w Opolu - odnowa, kosmetyka , fryzjerstwo, stylizacja paznokci, SPA" />

    <meta name="keywords" content="Fryzjer, Opole, Kosmetyczka, Wizaż, Makijaż, salon, tanio" />

    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Kalam&amp;subset=latin-ext" rel="stylesheet">
   
    <?php wp_head(); global $dane; ?>

</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #ddd">
        <div class="d-flex flex-grow-1">
            <a href="<?php echo $dane['fblink'] ?>" target="_blank" id="fb"><i
                    class="fab fa-facebook-f"></i></a>
            <a href="<?php echo $dane['instalink'] ?>" target="_blank" id="insta"><i
                    class="fab fa-instagram"></i></a>

            <div class="w-100 text-right" id="link0"></div>
            <a class="navbar-toggler mr-5" type="a" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </a>
        </div>

        <div class="collapse navbar-collapse flex-grow-1 text-right mr-5" id="myNavbar">
            <ul class="navbar-nav ml-auto">
                <!-- \\\Scroll-to/// -->
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item" id="link1">Kosmetyka</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item" id="link2">Wizaż</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item" id="link3">Makijaż permanentny</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item" id="link4">Cennik</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item" id="link5">Jak dojechać</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item" id="link6">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
