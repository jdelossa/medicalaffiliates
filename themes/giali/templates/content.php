<div class="one-third" <?php post_class(); ?>>
        <div class="image">
            <a href="<?php the_permalink(); ?>">
                <?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'physician-photo')); ?> 
            </a>
        </div>
        <div class="overlay">
            <a href="<?php the_permalink(); ?>" class="entry-title"><?php the_title(); ?></a>
        </div>
</div>
