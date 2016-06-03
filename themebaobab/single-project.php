<?php
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
<section class="courts section--first-color">
    <div class="articles__container">
<?php
    $posts = new WP_Query( ['posts_per_page' => 1, 'post_type' => 'project','paged' => get_query_var( 'paged') ] );
    if ( $posts->have_posts() ): $posts->current_post();
?>
    <article class="page-court">
        <div class="page-court__content article__p--margin">
        <h4 class="page-court__heading"><?php the_field('single_project_title');?></h4>
        <ul class="page-court__liste">
            <li class="page-court__elt">
                <span class="page-court--fbold">Theme:</span> <?php the_field('single_project_duration');?>
            </li>
            <li class="page-court__elt">
                <span class="page-court--fbold">Participants:</span> <?php the_field('single_project_country');?>
            </li>
            <li class="page-court__elt">
                <span class="page-court--fbold">Thechniqu:</span> 2D, papier-découpé</li>
            </ul>
        </div>
        <a class="vieuw__link cta--medium cta--hover vieuw__link--clear-both" href="<?php the_permalink();?>">Voir cet court-métrage</a>
        <figure class="page-court__figure">
            <?php $image = get_field('single_project_poster');
                 $size = 'full'; // (thumbnail, medium, large, full or custom size)
                 if( $image ) {
                 echo wp_get_attachment_image( $image['id'], $size );
             }
                 ?>
        </figure>
    </article>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
</section>
<section class="diffuser section--second-color">
    <div class="diffuser__container">
        <h3 class="diffuser__heading section__heading--blue">Envie de diffuser un de nos court-metrages ?</h3>
        <div class="diffuser__content article__p--margin">
            <p>Si vous avez envie de diffuser un des nos films, envoyez-nous un message et on vous contactera le plus vite possible.</p>
        </div>
        <form class="form">
            <div class="form__nom">
                <label class="form__label" for="nom-prenom">Nom et Prenom*:</label>
                <input class="form__input" type="text" id="nom-prenom" name="nom-prenom" placeholder="ex. Sarah Van Hout">
            </div>

            <div class="form__email">
                <label class="form__label" for="email">Email:</label>
                <input class="form__input form__input-email" type="email" id="email" name="email" placeholder="ex. mon@email.com">
            </div>

            <div class="form__message">
                <label class="form__label" for="msg">Message:</label>
                <textarea class="form__textarea" id="msg" name="user_message" placeholder="Ecive ici votre message..."></textarea>
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
