<?php
/*
Template Name: Page Contact
*/

get_header();
?>
<div class="media" style="background: url(<?php the_field('header_background');?>) no-repeat center center;   -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php the_field('header_background');?>', sizingMethod='scale');
    -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php the_field('header_background');?>', sizingMethod='scale')";">
    <div class="phrase">
        <h2 class="phrase__heading"><?php the_title();?></h2>
        <blockquote class="phrase__content"><?php the_field('header_intro');?></blockquote>
    </div>
</div>
</header>
<main>
    <section class="contact-page section--first-clr">
        <div class="contact-page__container">
            <div class="contact-page__followus">
                <h3 class="contact-page__heading contact-page__heading-contact section__heading--alfaslab">Contact</h3>
                <p>
                    <?php the_field('contactpage_address') ?>
                </p>
                <ul class="contact-page-social">
                    <li class="contact-page-social__elt">
                        <a href="#" class="contact--icon-face contact--icon-hover contact--icon-alone">
                            <span class="contact--screen-reader"><?php _e('Suit nous sur Facebook','b');?></span>
                        </a>
                    </li>
                    <li class="contact-page-social__elt">
                        <a href="#" class="contact--icon-tweet contact--icon-hover contact--icon-alone">
                            <span class="contact--screen-reader"><?php _e('Suit nous sur Twitter','b');?></span>
                        </a>
                    </li>
                    <li class="contact-page-social__elt">
                        <a href="#" class="contact--icon-insta contact--icon-hover contact--icon-alone">
                            <span class="contact--screen-reader"><?php _e('Suit nous sur Instagram','b');?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="contact-page__carte contact-page__list">
                <li>
                    <h4 class="contact-page__heading">
                        <?php _e('Lieu ou nous nous trouvons actuellement','b');?>
                    </h4>
                </li>
                <li class="carte__image">
                    <img src="<?php the_field('contactpage_map') ?>" alt="image">
                </li>
            </ul>
            <ul class="contact-page-info">
                <li class="contact-page-info__elt contact--icon-email">
                    <?php the_field('contactpage_email');?>
                </li>
                <li class="contact-page-info__elt contact--icon-waap">
                    <?php the_field('contactpage_what'); ?>
                </li>
                <li class="contact-page-info__elt contact--icon-tel">
                    <?php the_field('contactpage_tel'); ?>
                </li>
            </ul>
        </div>
    </section>
    <section class="diffuser section--third-bcg">
        <div class="diffuser__container">
            <h3 class="diffuser__heading section__heading--blue"><?php _e('Une remarque, une idée ou une sugestion ?','b');?></h3>
            <?php echo do_shortcode( '[contact-form-7 id="9" title="Envie de diffuser cet film"]' ); ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>
