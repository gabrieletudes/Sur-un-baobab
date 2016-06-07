<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>
        <?php wp_title('|', true, 'right') . bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css';?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri() . '/assets/script/html5shiv.js';?>"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="topbar">
                <h1><a class="logo" href="<?php echo home_url()?>"><?php bloginfo('name');?></a></h1>
                <ul class="languages">
                    <li class="languages__elt"><a class="languages__link" href="#">fr</a></li>
                    <li class="languages__elt"><a class="languages__link" href="#">en</a></li>
                    <li class="languages__elt"><a class="languages__link" href="#">es</a></li>
                </ul>
            </div>
            <nav class="main-nav">
                <ul class="main-nav_list">
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-home" href="<?php echo home_url()?>">Baobab</a>
                    </li>
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-posts" href="<?php the_permalink(6);?>">
                            <?php _e('Actualites','b');?>
                        </a>
                    </li>
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-about" href="<?php the_permalink(16);?>">
                            <?php _e('À Propos','b');?>
                        </a>
                    </li>
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-short" href="<?php the_permalink(18);?>">
                            <?php _e('Courts-métrages','b');?>
                        </a>
                    </li>
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-tuto" href="<?php the_permalink(20);?>">
                            <?php _e('Anime toi-même','b');?>
                        </a>
                    </li>
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-donation" href="<?php the_permalink(22);?>">
                            <?php _e('Nous soutenir','b');?>
                        </a>
                    </li>
                    <li class="main-nav__elt">
                        <a class="main-nav__link main-nav__link--icon-contact" href="<?php the_permalink(24);?>">
                            <?php _e('Contact','b');?>
                        </a>
                    </li>
                </ul>
            </nav>
