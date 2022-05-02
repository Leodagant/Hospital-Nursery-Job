<?php
/* Template Name: Home */

    get_header(); ?>

    <section id="home">
        <div class="wrap">
            <div class="home_flex">
                <div class="flex_left">
                    <h1>MEL<span class="span_logo">EC</span></h1>
                    <h2>Entreprise d'energie</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, at earum minus molestias porro sunt.</p>
                    <a href="#">Nous contactez</a>
                </div>
                <div class="flex_right">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/heroimage.png" alt="Logo Hospital Nursery Job" />
                </div>
            </div>
        </div>
    </section>


<?php get_footer();