<?php
/*
      Template Name: archive
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
    <a class="bouton__callout cta--yellow" href="<?php the_permalink('22');?>"><?php _e('Soutenez notre projet','b');?></a>
</div>
</div>
</header>
<main>
            <section class="actualites courts section--second-bcg">
                <div class="section__container">
                    <h3 class="section__heading section__heading--alfaslab">
                        <?php _e('Dernières Actualites','b')?>
                    </h3>
                    <!-- Debut WP_QUERY -->
                    <?php
                    $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
                    if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                    ?>

                    <!-- Recup thumbnail et size -->
                    <article class="actualites__article">
                        <h4 class="actualites__subheading">
                            <?php the_title();?></h4>
                        <p class="actualites__descriptif">
                            <?php the_custom_excerpt('pagearticle_content',150)?>
                        </p>
                        <a class="actualites__lire vieuw__link vieuw__link--hover" href="<?php the_permalink();?>"><?php _e('Lire cet article', 'b')?></a>
                    </article>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
                    <a class="vieuw__link cta--medium cta--blue cta--hover" href="<?php the_permalink('6');?>"><?php _e('Voir tout les actualites', 'b')?></a>
                </div>
            </section>
            <section class="articles courts section--third-bcg">
                <div class="articles__container">
                    <!-- Debut WP_QUERY -->
                    <?php
                    $posts = new WP_Query( ['posts_per_page' => -1, 'post_type' => 'post'] );
                    if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                    ?>
                    <!-- Recup thumbnail et size -->
                    <article class="article">
                        <h3 class="article__heading section__heading--blue">
                            <?php the_title();?>
                        </h3>
                        <p class="article__content">
                            <?php the_custom_excerpt('pagearticle_content',300)?>
                        </p>
                        <a class="vieuw__link cta--medium vieuw__link--hover vieuw__link--clear-both" href="<?php the_permalink();?>"><?php _e('Lire cet article','b')?></a>
                        <figure>
                            <img class="article__image" src="<?php echo get_template_directory_uri().'/assets/img/diffusion.png'?>" alt="image">
                        </figure>
                    </article>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
                    <aside class="categorie">
                        <nav>
                        <h3 class="categorie__heading"><?php _e('Choisissez une categorie','b')?></h3>
                        <ul class="categorie-nav">
                            <li class="categorie-nav__elt">
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Films</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Presse</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Madagascar</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Diffusions</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Films</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Presse</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Madagascar</a>
                            </li>
                            <li class="categorie-nav__elt">
                                <a class="categorie-nav__link" href="#">Diffusions</a>
                            </li>
                        </ul>
                        </nav>
                    </aside>
                </div>
            </section>
        </main>
        <?php
        get_footer();
        ?>
