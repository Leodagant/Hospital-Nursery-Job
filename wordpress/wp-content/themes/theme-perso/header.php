<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                directionNav: false,
            });
        });
    </script>
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>

<section id="header">
    <div class="wrap">
        <nav class="navbar">
            <h1><a href="<?php echo get_the_permalink(10) ?>" class="nav-branding">MEL<span class="span_logo">EC</span></a></h1>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="<?php echo get_the_permalink(10) ?>" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo get_the_permalink(16) ?>" class="nav-link">A propos</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo get_the_permalink(18) ?>" class="nav-link">Chantier</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo get_the_permalink(20) ?>" class="nav-link">Info</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo get_the_permalink(22) ?>" class="nav-link" id="header_btn">Nous contacter</a>
                </li>
            </ul>
            <div class="burger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</section>