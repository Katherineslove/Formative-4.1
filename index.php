<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if(has_nav_menu('side_navigation')): ?>
            <div class="col-12 col-md-3">
                <div class="card h-80 mb-2 mt-2 p-2">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'menu_class' => 'list-group list-group-flush',
                        'container' => '',
                        'menu_id' => 'sideNav'
                    )); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card mt-3">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="card-body">
                            <?php if ( is_home() ): ?>
                                <div class="row">
                                    <div class="col-4">
                                        <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                    </div>
                                    <div class="col-8">
                                        <?php if ( is_home() ):?>
                                            <?php the_excerpt(); ?>
                                        <?php else: ?>
                                            <?php the_content(); ?>
                                        <?php endif; ?>

                                        <?php if (!is_single() ): ?>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go Somewhere</a>
                                        <?php endif; ?>
                                    </div>
                                <?php else: ?>
                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                    <?php if ( is_home() ):?>
                                        <?php the_excerpt(); ?>
                                    <?php else: ?>
                                        <br><br>
                                        <?php the_content(); ?>
                                    <?php endif; ?>
                                    <?php if (!is_single() ): ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go Somewhere</a>
                                    <?php endif; ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php get_footer(); ?>
