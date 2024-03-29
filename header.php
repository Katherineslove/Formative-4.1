<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Embrace Design</title>
    <?php wp_head(); ?>
</head>
<body>

    <?php if(has_nav_menu( 'top_navigation' )): ?>
        <nav class="navbar navbar-expand-md navbar-dark navColour" role="navigation">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8888/wordpress/"><?php echo get_bloginfo('name'); ?></a>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'top_navigation',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'top_navigation',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
            <form action="<?php echo home_url();?>" method="get" class="d-flex justify-content-center">
                <input type="hidden" name="post_type" value="page"></input>
                <input name="s" type="text" class="form-control" aria-describedby="searchPosts" placeholder="Search Posts" value="<?php the_search_query(); ?>">
                <?php include('templates/searchButton.php'); ?>
            </form>
        </nav>
    <?php endif; ?>
