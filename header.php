<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<?php wp_head(); ?>

</head>
<body>
<div class="hero" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pexels-saravut-vanset-10410009.jpg) no-repeat center center; background-size: cover">
    <header class="header">
       
        <nav class="nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => 'false',
                'items_wrap' => '<ul>%3$s</ul>',
            )); ?>
        </nav>
    </header>

    <?php if (is_home()) { ?>
        <h1><?php bloginfo('name'); ?></h1>
    <?php } ?>

    <?php if (is_page()) { ?>
        <h1><?php the_title(); ?></h1>
    <?php } ?>