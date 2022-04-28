<?php
/* Template Name: Contact */

get_header(); ?>

    <section id="contact">
        <div class="wrap">
            <div class="home_flex">
                <div class="flex_left">
                    <form action="">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom">

                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom">

                        <label for="mail">Mail</label>
                        <input type="email" id="mail" name="mail">

                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet">

                        <label for="message">Message</label>
                        <input type="text" id="message" name="message">
                    </form>
                </div>
                <div class="flex_right"></div>
            </div>
        </div>
    </section>


<?php get_footer();