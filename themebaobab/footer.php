<footer class="footer">
    <ul class="footer-nav">
        <li>
            <h5 class="footer__heading">Menu</h5>
        </li>
        <li>
            <a class="footer-nav__link" href="<?php echo home_url()?>">Baobab</a>
        </li>
        <li>
            <a class="footer-nav__link" href="<?php the_permalink(6);?>">
                <?php _e('Actualites','b');?>
            </a>
        </li>
        <li>
            <a class="footer-nav__link" href="<?php the_permalink(16);?>">
                <?php _e('À Propos','b');?>
            </a>
        </li>
        <li>
            <a class="footer-nav__link" href="<?php the_permalink(18);?>">
                <?php _e('Courts-métrages','b');?>
            </a>
        </li>
        <li>
            <a class="footer-nav__link" href="<?php the_permalink(20);?>">
                <?php _e('Anime toi-même','b');?>
            </a>
        </li>
        <li>
            <a class="footer-nav__link" href="<?php the_permalink(22);?>">
                <?php _e('Nous soutenir','b');?>
            </a>
        </li>
        <li>

            <a class="footer-nav__link" href="<?php the_permalink(24);?>">
                <?php _e('Contact','b');?>
            </a>

        </li>
    </ul>
    <ul class="carte footer__list">
        <li>
            <h5 class="footer__heading">
                <?php _e('Lieu ou nous nous trouvons actuellement','b');?>
            </h5>
        </li>
        <li class="carte__image"><img src="<?php echo get_template_directory_uri() . '/assets/img/carte.png' ?>" alt="image"></li>
    </ul>
    <ul class="aides-nous">
        <li class="aides-nous__elt">
            <h5 class="footer__heading"><?php _e('Envie de nous aider ?','b');?></h5>
        </li>
        <li class="aides-nous__elt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur</li>
        <li class="aides-nous__elt">
            <a class="cta cta--small cta--yellow" href="<?php the_permalink('22');?>">
                <?php _e('Soutenez notre projet','b');?>
            </a>
        </li>
    </ul>
    <ul class="contact">
        <li class="contact__elt">
            <h5 class="contact-page__heading-contact section__heading--alfaslab">Contact</h5>
        </li>
        <li class="contact__elt contact--icon-email">surunbaobab@gmail.com</li>
        <li class="contact__elt contact--icon-waap">+32 495 348 966</li>
        <li class="contact__elt contact--icon-tel">+32 497 363 975</li>
    </ul>
</footer>
</div>
</body>

</html>
