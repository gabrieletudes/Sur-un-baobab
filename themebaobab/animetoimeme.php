<?php
/*
Template Name: Animetoimeme Page
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
    <section class="tutoriels section--first-color">
        <div class="tutoriels__container">
            <article class="tutoriels-article">
                <h3 class="tutoriels-article__heading section__heading section__heading--weasel">Description tutoriels</h3>
                <div class="tutoriels-article__content article__p--margin">
                    <?php the_field('animetoimemepage_generaldescription');?>
                </div>
                <figure>
                    <img class="tutoriels-article__image" src="<?php the_field('animetoimemepage_image');?>" alt="image">
                </figure>
            </article>
        </div>
    </section>
    <section class="tutoriel section--third-color">
        <div class="tutoriels__container">
            <article class="tutoriel-article">
                <h3 class="tutoriel-article__heading section__heading section__heading--weasel">Creation d’un mini-studio</h3>
                <div class="tutoriel-article__content article__p--margin">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet.</p>
                </div>
                <a class="vieuw__link cta--medium cta--hover vieuw__link--clear-both" href="#">Click ici pour voir le tutoriel</a>
                <figure>
                    <img class="tutoriel-article__image" src="<?php echo get_template_directory_uri() . '/assets/img/photo-ts-010-small.png';?>" alt="image">
                </figure>
            </article>
            <article class="tutoriel-article">
                <h3 class="tutoriel-article__heading section__heading section__heading--weasel">Dessine ton histoire</h3>
                <div class="tutoriel-article__content article__p--margin">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet.</p>
                </div>
                <a class="vieuw__link cta--medium cta--hover vieuw__link--clear-both" href="#">Click ici pour voir le tutoriel</a>
                <figure>
                    <img class="tutoriel-article__image" src="<?php echo get_template_directory_uri() . '/assets/img/photo-ts-010-small.png';?>" alt="image">
                </figure>
            </article>
        </div>
    </section>
</main>
<?php
get_footer();
?>
