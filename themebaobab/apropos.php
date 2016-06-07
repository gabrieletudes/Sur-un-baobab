<?php
/*
      Template Name: Page about
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
            <section class="apropos section--third-bcg">
                <div class="articles__container">
                    <article class="apropos-article">
                        <h3 class="apropos-article__heading section__heading section__heading--alfaslab">Qui sommes nous ?</h3>
                        <div class="apropos-article__content article__p--margin">
                            <?php the_field('aboutpage_aboutcontent');?>
                    </div>
                        <figure>
                            <img class="article__image" src="<?php echo get_template_directory_uri() . '/assets/img/photo-sfdp-S002-medium.png' ?>" alt="image">
                        </figure>
                    </article>
                </div>
            </section>
            <section class="projet section--first-bcg">
                <div class="articles__container">
                    <article class="apropos-article">
                        <h3 class="apropos-article__heading section__heading section__heading--alfaslab">Notre Projet</h3>
                        <div class="apropos-article__content article__p--margin">
                            <?php the_field('aboutpage_project');?>
                    </div>
                    <figure>
                        <img class="article__image" src="<?php echo get_template_directory_uri() . '/assets/img/photo-sfdp-009-medium.png';?>" alt="image">
                    </figure>
                    <div class="projet__links">
                        <a class="cta cta--medium cta--blue cta--hover" href="<?php the_permalink('18');?>">Consulte nos courts-métrages</a>
                    <a class="cta cta--medium cta--yellow" href="<?php the_permalink('22');?>">Soutenez notre projet</a>
                    </div>
                    </article>
                </div>
            </section>
            <section class="gallery section--third-bcg">
                <div class="section__container">
                    <h3 class="section__heading section__heading--alfaslab">Gallerie Photos</h3>
                    <ul class="gallery__list">
                        <li class="gallery__elt">
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/imagegallery.png'?>" alt="" class="gallery__image">
                            <a href="#">
                                <span class="gallery__name">Sourir Malgache </span>
                                <span class="gallery__place">Madagascar</span>
                            </a>
                        </li>
                        <li class="gallery__elt">
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/imagegallery.png'?>" alt="" class="gallery__image">
                            <a href="#">
                                <span class="gallery__name">Sourir Malgache </span>
                                <span class="gallery__place">Madagascar</span>
                            </a>
                        </li>
                        <li class="gallery__elt">
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/imagegallery.png'?>" alt="" class="gallery__image">
                            <a href="#">
                                <span class="gallery__name">Sourir Malgache </span>
                                <span class="gallery__place">Madagascar</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="gallery__list">
                        <li class="gallery__elt">
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/imagegallery.png'?>" alt="" class="gallery__image">
                            <a href="#">
                                <span class="gallery__name">Sourir Malgache </span>
                                <span class="gallery__place">Madagascar</span>
                            </a>
                        </li>
                        <li class="gallery__elt">
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/imagegallery.png'?>" alt="" class="gallery__image">
                            <a href="#">
                                <span class="gallery__name">Sourir Malgache </span>
                                <span class="gallery__place">Madagascar</span>
                            </a>
                        </li>
                        <li class="gallery__elt">
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/imagegallery.png'?>" alt="" class="gallery__image">
                            <a href="#">
                                <span class="gallery__name">Sourir Malgache </span>
                                <span class="gallery__place">Madagascar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <?php
    get_footer();
    ?>
