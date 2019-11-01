<?php
/*
Template Name: Product Category Template
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container mt-3">
    <div class="row">

        <?php if (has_post_thumbnail()): ?>
            <?php while( have_posts() ): the_post(); ?>
                <div class="col-4 mb-5">
                    <div class="card mt-3 shadow borderColour h-100">
                        <h5 class="card-header d-flex justify-content-center"><?php the_title(); ?></h5>
                        <div class="px-4 d-flex justify-content-center flex-column mt-4">
                            <?php if(is_home()): ?>
                                <?php the_excerpt(); ?>
                                <?php include('templates/button.php'); ?>
                            <?php else:?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php elseif (!has_post_thumbnail()): ?>
            <?php while( have_posts() ): the_post(); ?>
                <div class="col-4 mb-5">
                    <div class="card mt-3 shadow borderColour h-100">
                        <h5 class="card-header d-flex justify-content-center"><?php the_title(); ?></h5>
                        <div class="px-4 d-flex justify-content-center flex-column mt-4 mb-4">
                            <?php if(is_home()): ?>
                                <?php the_excerpt(); ?>
                            <?php else:?>
                                <?php the_content(); ?>
                                <?php include('templates/button.php'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>

</div><?php get_footer(); ?>
