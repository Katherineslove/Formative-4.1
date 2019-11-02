<div class="card h-100 borderColour">
    <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"<?php the_excerpt(); ?></p>
            <?php include('button.php'); ?>
    </div>
</div>
