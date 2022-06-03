<?php
/* Template Name: Home */

get_header(); ?>

    <section id="home">
        <div class="wrap">
            <div class="home_flex">
                <div class="flex_left">
                    <h1>MEL<span class="span_logo">EC</span></h1>
                    <h2>Entreprise d'energie</h2>
                    <p><?php the_field('presentation_page_accueil'); ?></p>
                    <a href="#">Nous contactez</a>
                </div>
                <div class="flex_right">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/heroimage.png" alt="Logo Hospital Nursery Job" />
                </div>
            </div>
            <div class="presentation">
                <div class="blocs">
                    <div class="bloc">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                        <p>Notre expérience</p>
                    </div>
                    <div class="bloc">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                        <p>Votre artisan local</p>
                    </div>
                    <div class="bloc">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                        <p>Un devis gratuit</p>
                    </div>
                </div>
            </div>

            <div class="absolute">
                <img class="degrade_haut" src="<?php echo get_template_directory_uri(); ?>/asset/img/diagonal.svg" alt="Cercle" />
                <div class="service">
                    <h1>Rénovation, dépannage électrique à ...</h1>
                    <div class="service_bloc">
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_gauche_1'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_droite_1'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_gauche_2'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p>?<?php the_field('colonne_droite_2'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_gauche_3'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_droite_3'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_gauche_4'); ?></p>
                            </div>
                        </div>
                        <div class="bloc">
                            <div class="bloc_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.png" alt="Cercle" />
                            </div>
                            <div class="bloc_text">
                                <h3>Notre expérience</h3>
                                <p><?php the_field('colonne_droite_4'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="degrade_bas" src="<?php echo get_template_directory_uri(); ?>/asset/img/diagonal.svg" alt="Cercle" />

            </div>

            <div class="slider">
                <div class="blocs_slider">
                    <div class="slider_gauche slider_bloc">
                        <h2>Ils ont adoré Melec</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam doloremque esse iure minus molestiae quae!</p>
                    </div>
                    <div class="slider_droite slider_bloc">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <p>"<?php the_field('caroussel_texte_1'); ?>"</p>
                                    <p><?php the_field('caroussel_prenom_1'); ?></p>
                                </li>
                                <li>
                                    <p>"<?php the_field('caroussel_texte_2'); ?>"</p>
                                    <p><?php the_field('caroussel_prenom_2'); ?></p>
                                </li>
                                <li>
                                    <p>"<?php the_field('caroussel_texte_3'); ?>"</p>
                                    <p><?php the_field('caroussel_prenom_3'); ?></p>
                                </li>
                                <li>
                                    <p>"<?php the_field('caroussel_texte_4'); ?>"</p>
                                    <p><?php the_field('caroussel_prenom_4'); ?></p>
                                </li>
                                <li>
                                    <p>"<?php the_field('caroussel_texte_5'); ?>"</p>
                                    <p><?php the_field('caroussel_prenom_5'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer();