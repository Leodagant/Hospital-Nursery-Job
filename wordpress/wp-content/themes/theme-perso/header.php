<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>

<section id="header">
    <div class="wrap">
        <div class="header_flex">
            <div class="logo">
                <h1>MEL<span class="span_logo">EC</span></h1>
            </div>
            <div class="header_nav">
                <nav>
                    <ul>
                        <li><a href="<?php echo get_the_permalink(10) ?>">Accueil</a></li>
                        <li><a href="<?php echo get_the_permalink(16) ?>>">A propos</a></li>
                        <li><a href="<?php echo get_the_permalink(18) ?>">Chantier</a></li>
                        <li><a href="<?php echo get_the_permalink(20) ?>">Info</a></li>
                        <li><a href="<?php echo get_the_permalink(22) ?>" class="contact">Nous contacter</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>