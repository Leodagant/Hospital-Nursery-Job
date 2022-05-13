    <section id="footer">
        <div class="wrap">
            <div class="footer_flex">
                <div class="footer_logo">
                    <a href="<?php echo get_the_permalink(10) ?>"><h1>MEL<span class="span_logo">EC</span></h1></a>
                </div>
                <div class="footer_bloc">
                    <p>Nos services</p>
                    <nav>
                        <ul>
                            <li><a href="<?php echo get_the_permalink(16) ?>>">A propos</a></li>
                            <li><a href="<?php echo get_the_permalink(18) ?>">Chantier</a></li>
                            <li><a href="<?php echo get_the_permalink(20) ?>">Info</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer_bloc">
                    <p>Mentions légal</p>
                    <nav>
                        <ul>
                            <li><a href="<?php echo get_the_permalink(16) ?>>">Mention légal</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer_bloc">
                    <p>Contact</p>
                    <nav>
                        <ul>
                            <li><a href="<?php echo get_the_permalink(22) ?>" class="contact">Nous contacter</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="separator"></div>
            <div class="footer_copyright">
                <p>Copyright 2022 - Tous droits réservés</p>
                <ul>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/facebook.png" alt="Logo Facebook" /></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/instagram.png" alt="Logo Instagram" /></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/twitter.png" alt="Logo Twitter" /></a></li>
                </ul>
            </div>
        </div>
    </section>


<?php wp_footer(); ?>
</body>
</html>
