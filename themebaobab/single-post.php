<?php

/*
Template Name: Single Article
*/
get_header();

?>
    <div class="media" style="background: url(<?php the_field('header_background');?>) no-repeat center center;   -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php the_field('header_background');?>', sizingMethod='scale');
    -ms-filter:" progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php the_field(' header_background ');?>', sizingMethod='scale' ) ";">
        <div class="phrase">
            <h2 class="phrase__heading"><?php the_title();?></h2>
            <blockquote class="phrase__content">
                <?php the_field('header_intro');?>
            </blockquote>
        </div>
    </div>
    </header>
    <main>
        <section class="actualites">
            <div class="section__container">

                <h3 class="section__heading section__heading--weasel">Dernieres Actualites</h3>

                <!-- Debut WP_QUERY -->
            <?php
            $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
                    <!-- Recup thumbnail et size -->

                    <article class="actualites__article">
                        <h4 class="actualites__subheading">
                            <?php the_title();?>
                        </h4>
                        <p class="actualites__descriptif">
                            <?php the_custom_excerpt('pagearticle_content',150)?>
                        </p>
                        <a class="actualites__lire vieuw__link vieuw__link--hover" href="<?php the_permalink();?>">Lire cet article</a>
                    </article>
                    <?php wp_reset_postdata(); ?>
                        <?php endwhile; endif; ?>
            <a class="vieuw__link cta--medium cta--blue cta--hover" href="<?php the_permalink('6');?>">Voir tout les actualites</a>
            </div>
        </section>
        <section class="articles section--third-color">
            <div class="articles__container">
                <!-- Debut WP_QUERY -->
                <?php
                    $posts = new WP_Query( ['posts_per_page' => 1, 'post_type' => 'post','paged' => get_query_var( 'paged') ] );
                    if ( $posts->have_posts() ): $posts->current_post();
                ?>
                    <article class="page-article">
                        <h3 class="page-article__heading section__heading section__heading--blue">
                            <?php the_title();?>
                        </h3>
                        <div class="page-article__content article__p--margin">
                                <?php the_field('pagearticle_content');?>
                        </div>
                        <a class="vieuw__link cta--medium cta--blue cta--hover vieuw__link vieuw__link--clear-both" href="<?php the_permalink('6');?>">Voir tout les actualites</a>
                        <figure>
                            <img class="article__image" src="<?php echo get_template_directory_uri() .'/assets/img/photo-ts-010-medium.png'?>" alt="image">
                        </figure>
                    </article>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
