<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

    $args = array(
        'order' => 'ASC',
        'post_type' => 'post',
        'category' => '2', //Category ID for physicians
        'numberposts' => 100
    );

    $posts = get_posts( $args );
    $count = 0;
    
    if ($post):

        foreach ( $posts as $post ):

            $count++;

            if ($count % 1 == 1):
                echo '<div class="row">';
            endif; ?>

            <div class="col-md-6">
                <div class="doctor-card">
                    <a href="<?php the_permalink(); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-thumbnail')); ?></a>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?= $post->post_title; ?></a>
                </div>
            </div>

            <?php 

            if ($count % 1 == 1 ):
                echo '</div>'; 
            endif;

        endforeach;
        
    endif;

endwhile; 
endif; 
?>