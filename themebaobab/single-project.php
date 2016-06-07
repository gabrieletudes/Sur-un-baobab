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
<main class="section--third-bcg">
    <section class="synopsis section--first-bcg">
        <div class="synopsis__container">
            <?php
            $yt=get_field('single_project_videourl');//inside in loop
            if( '' != $yt):?>
            <div class="yout-wrapper">
                <?php echo $GLOBALS['wp_embed']->autoembed($yt);//youtube video iframe?>
            </div>
        <?php endif;?>
        <h3 class="section__heading--blue section__heading--center section__heading--mabo "><?php _e('Synopsis du film' ,'b');?></h3>
        <div class="diffuser__content article__p--margin">
            <?php the_field('single_project_synopsis');?>
        </div>
        <a class="cta cta--medium cta--yellow cta--right" href="<?php the_permalink('22');?>">Soutenez notre projet</a>
    </div>
</section><!--synopsis fin-->
<section class="court">
    <div class="single-court__container">
        <?php
        $posts = new WP_Query( ['posts_per_page' => 1, 'post_type' => 'project','paged' => get_query_var( 'paged') ] );
        if ( $posts->have_posts() ): $posts->current_post();
        ?>
        <article class="single-court">
            <figure class="single-court__figure">
                <?php $image = get_field('single_project_poster');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image['id'], $size );
                }
                ?>
            </figure>
            <div class="single-court__content">
                <h4 class="section__heading section__heading--alfaslab"><?php _e('Fiche technique du film ' ,'b');?></h4>
                <table class="single-court__table">
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Titre français','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_title');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Durée','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_duration');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Pays','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_country');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Année','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_year');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Technique','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_technique');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Thème','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_subject');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Participants','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_cast');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Direction et coordination','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_di_co');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Assistants','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_assistants');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Histoire originale','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_story');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Musique','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_music');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Montage son','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_sounda');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Montage image','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_imageedit');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Production','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_production');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Langue','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_language');?>
                        </td>
                    </tr>
                    <tr>
                        <th class="single-court__th">
                            <?php _e('Sous-titres disponibles','b');?>
                        </th>
                        <td>
                            <?php the_field('single_project_subtitles');?>
                        </td>
                    </tr>
                </table>
            </div>
        </article>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
</section><!--fin court-->
<section class="court section--first-bcg">
    <div class="single-court__container">
        <article class="single-theproject">
            <h3 class="single-theproject__heading section__heading--blue"><?php the_field('single_project_about_title');?></h3>
            <div class="single-theproject__about article__p--margin">
                <?php the_field('single_project_about');?>
            </div>
            <figure>
                <img class="soutiens-article__image" src="<?php echo get_template_directory_uri() .'/assets/img/photo-sfdp-S002-medium.png';?>" alt="image">
            </figure>
        </article>
    </div>
</section><!--fin theproject-->
<section class="diffuser">
    <div class="diffuser__container">
        <h3 class="diffuser__heading section__heading--blue">Envie de diffuser un de nos court-metrages ?</h3>
        <div class="diffuser__content article__p--margin">
            <p>Si vous avez envie de diffuser un des nos films, envoyez-nous un message et on vous contactera le plus vite possible.</p>
        </div>
            <?php echo do_shortcode( '[contact-form-7 id="9" title="Envie de diffuser cet film"]' ); ?>
    </div>
</section>
</main>
<?php
get_footer();
?>
