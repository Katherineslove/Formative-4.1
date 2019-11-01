<?php
/*
Template Name: Contact Form
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row m-2">
        <div class="col-6">
            <div class="card mt-3">
                <h5 class="card-header"><?php the_title(); ?></h5>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address..">

                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add your message here..."></textarea>
                        </div>
                        <div class="row  d-flex justify-content-center">
                            <?php include('templates/submitButton.php'); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card mt-3 borderColour">
                        <div class="card-body p-0">
                            <?php if ( is_home() ): ?>
                                <?php the_excerpt(); ?>
                            <?php else: ?>
                                <br>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
</div>



<?php get_footer(); ?>
