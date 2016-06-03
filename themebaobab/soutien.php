<?php
/*
      Template Name: Page Soutien
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
            <section class="soutiens section--first-color">
                <div class="articles__container">
                    <article class="soutiens-article">
                        <h3 class="soutiens-article__heading section__heading--blue">Introduction au soutien</h3>
                        <div class="soutiens-article__content article__p--margin">
                            <?php the_field('supportuspage_intro');?>
                        </div>
                        <figure>
                            <img class="soutiens-article__image" src="<?php echo get_template_directory_uri() .'/assets/img/photo-sfdp-S002-medium.png';?>" alt="image">
                        </figure>
                    </article>
                </div>
            </section>
            <section class="soutien section--third-color">
                <div class="articles__container">
                    <h2 class="section__heading section__heading--weasel">Moyens de soutien</h2>
                    <article class="soutien-article">
                        <h3 class="soutien-article__heading section__heading--blue"><?php the_field('supportuspage_firstmethod_title');?></h3>
                        <div class="soutien-article__content article__p--margin">
                            <?php the_field('supportuspage_firstmethod_intro');?>
                        </div>
                        <a class="vieuw__link cta--medium cta--hover vieuw__link--clear-both" href="#">Faites un don</a>
                        <figure>
                            <img class="soutien-article__image" src="<?php echo get_template_directory_uri() .'/assets/img/photo-ts-010-small.png';?>" alt="image">
                        </figure>
                    </article>
                    <article class="soutien-article">
                        <h3 class="soutien-article__heading section__heading--blue"><?php the_field('supportuspage_secondmethod_title');?></h3>
                        <div class="soutien-article__content article__p--margin">
                            <?php the_field('supportuspage_secondmethod_intro');?>
                        </div>
                        <figure>
                            <img class="soutien-article__image" src="<?php echo get_template_directory_uri() .'/assets/img/photo-ts-003-small.png';?>" alt="image">
                        </figure>
                    </article>
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
