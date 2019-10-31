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
    <div class="container">
        <div class="row">
            <?php while( have_posts() ): the_post(); ?>
                <div class="col-12 col-md-6">
                    <div class="card h-100 borderColour">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="card-body">
                            <div class="row">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php if( is_home() ): ?>
                                        <div class="col-12 col-md-3">
                                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-12 text-center mb-5">
                                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="col">
                                    <div>
                                        <?php if( is_home() ): ?>
                                            <?php the_excerpt() ; ?>
                                        <?php else: ?>
                                            <?php the_content(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <?php if( !is_singular() ): ?>
                                        <?php include('templates/button.php'); ?>
                                    <?php endif; ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
