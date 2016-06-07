<?php

/*
Template Name: Homepage
*/

get_header();

?>
<div class="media" style="background:url(<?php the_field('header_background');?>) no-repeat center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php the_field('header_background');?>', sizingMethod='scale');-ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php the_field('header_background');?>', sizingMethod='scale')";">
    <div class="phrase">
        <h2 class="phrase__heading"><?php bloginfo('name'); ?></h2>
        <blockquote class="phrase__content">
            <?php the_field('header_intro');?>
        </blockquote>
        <p class="phrase__author">
            <?php the_field('homepage_author_name');?>
        </p>
        <a class="bouton__callout cta--yellow" href="<?php the_permalink('22');?>">
            <?php _e('Soutenez notre projet','b');?>
        </a>
    </div>
</div>
</header>
<main>
    <section class="collectif section--first-bcg">
        <article class="section__container ">
            <img class="collectif__image" src="<?php echo get_template_directory_uri() . '/assets/img/PelaFara_167.png' ?>" alt="">
            <h3 class="section__heading section__heading--alfaslab"><?php _e('Elena & François','b');?></h3>
            <p class="collectif__descriptif"><?php the_field('homepage_collectif');?></p>
            <a class="vieuw__link cta--medium cta--blue cta--hover" href="<?php the_permalink('16');?>"><?php _e('Lisez la suite sur le collectif','b');?></a>
        </article>
    </section>
    <section class="actualites section--second-bcg">
        <div class="section__container">
            <h3 class="section__heading section__heading--alfaslab"><?php _e('Dernières Actualites','b');?></h3>
            <!-- Debut WP_QUERY -->
            <?php
            $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
            <!-- Recup thumbnail et size -->
            <article class="actualites__article">
                <h4 class="actualites__subheading"><?php the_title();?></h4>
                <p class="actualites__descriptif">
                    <?php the_custom_excerpt('pagearticle_content',150)?>
                </p>
                <a class="actualites__lire vieuw__link vieuw__link--hover" href="<?php the_permalink();?>"><?php _e('Lire cet article','b');?></a>
            </article>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; endif; ?>
        <a class="vieuw__link cta--medium cta--blue cta--hover" href="<?php the_permalink('6');?>"><?php _e('Voir tout les actualites','b');?></a>
    </div>
</section>
<section class="diffusions section--third-bcg">
    <div class="section__container">
        <h3 class="section__heading section__heading--alfaslab"><?php _e('Nos dernières Courts-métrages ','b');?></h3>
        <!-- Debut WP_QUERY -->
        <?php
        $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'project'] );
        if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <article class="page-court">
            <div class="page-court__content article__p--margin">
                <h4 class="page-court__heading"><?php the_field('single_project_title');?></h4>
                <ul class="page-court__liste">
                    <li class="page-court__elt"><span class="page-court--fbold">Theme:</span>
                        <?php the_field('single_project_duration');?>
                    </li>
                    <li class="page-court__elt"><span class="page-court--fbold">Participants:</span>
                        <?php the_field('single_project_country');?>
                    </li>
                    <li class="page-court__elt"><span class="page-court--fbold">Thechniqu:</span> 2D, papier-découpé</li>
                </ul>
            </div>
            <a class="vieuw__link cta--medium cta--hover vieuw__link--clear-both" href="<?php the_permalink();?>"><?php _e('Voir cet court-métrage','b');?></a>
            <figure class="page-court__figure">
                <!-- Recup thumbnail at size -->
                <?php $image = get_field('single_project_poster');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image['id'], $size );
                }
                ?>
            </figure>
        </article>
        <?php wp_reset_postdata(); ?>
    <?php endwhile; endif; ?>
    <a class="vieuw__link cta--medium cta--blue cta--hover" href="<?php the_permalink('18');?>">
        <?php _e('Consulte tout nos courts-métrages','b');?>
    </a>
</div>
</section>
</main>
<?php
get_footer();
?>
