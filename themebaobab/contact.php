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
    <section class="diffuser section--second-color">
        <div class="diffuser__container">
            <h3 class="diffuser__heading section__heading--blue">Une remarque, une idée ou une sugestion ?</h3>
            <form class="form">
                <div class="form__nom">
                    <label class="form__label" for="nom-prenom">Nom et Prenom:</label>
                    <input class="form__input" type="text" id="nom-prenom" name="nom-prenom" placeholder="ex. Sarah Van Hout">
                </div>
                <div class="form__email">
                    <label class="form__label" for="email">Email *:</label>
                    <input class="form__input form__input-email" type="email" id="email" name="email" placeholder="ex. mon@email.com">
                </div>
                <div class="form__message">
                    <label class="form__label" for="msg">Message:</label>
                    <textarea class="form__textarea" id="msg" name="user_message" placeholder="Ecivez ici votre message..."></textarea>
                </div>
                <div class="button">
                    <button class="form__submit vieuw__link cta--medium cta--hover vieuw__link--clear-both" type="submit">Envoyer le message</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php
get_footer();
?>
