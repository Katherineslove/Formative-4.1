<?php get_header(); ?>

<?php if (has_header_image()): ?>
    <div class="container-fluid p-0 mb-4">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
            <div class="headerText">
                <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3 headerText"><?php echo get_bloginfo('name') ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if( have_posts() ): ?>
    <div class="container py-5">
        <div class="row">
            <?php while( have_posts() ): the_post(); ?>
                <div class="col-12 col-md-4 mb-3">
                    <?php get_template_part('templates/content', get_post_format()); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
