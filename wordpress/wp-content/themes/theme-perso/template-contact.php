<?php
/* Template Name: Contact */

get_header(); ?>

    <section id="contact">
        <div class="wrap">
            <div class="home_flex">
                <div class="flex_left">
                    <h1>Nous contacter</h1>
                    <form action="">
                        <div class="form1">
                            <div class="form_nom">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom">
                            </div>
                            <div class="form_prenom">
                                <label for="prenom">Prénom</label>
                                <input type="text" id="prenom" name="prenom">
                            </div>
                        </div>
                        <div class="form2">
                            <div>
                                <label for="mail">Adresse Mail</label>
                                <input type="email" id="mail" name="mail">
                            </div>
                            <div>
                                <label for="sujet">Sujet</label>
                                <input type="text" id="sujet" name="sujet">
                            </div>
                            <div class="input_message">
                                <label for="message">Message</label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                        </div>
                            <div class="input_submit">
                                <input type="submit" class="submitted">
                            </div>
                    </form>
                </div>
                <div class="flex_right">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/herobase2.png" alt="Logo Chantier" />
                </div>
            </div>
        </div>
    </section>


<?php get_footer();