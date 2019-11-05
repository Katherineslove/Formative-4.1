<?php
/*
Template Name: About Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row m-2 d-flex justify-content-center">
        <div class="col-9">
            <div class="card mt-3 borderColour">
                <h5 class="card-header d-flex justify-content-center"><?php the_title(); ?></h5>
                <div class="card-body">
                    <?php if( have_posts() ): ?>
                        <?php while( have_posts() ): the_post(); ?>

                            <div class="card-body p-0">
                                <?php if ( is_home() ): ?>
                                    <?php the_excerpt(); ?>
                                <?php else: ?>
                                    <br>
                                    <?php the_content(); ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
