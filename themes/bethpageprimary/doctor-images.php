<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

    $args = array(
        'post_type' => 'post',
        'category' => '2', //Category ID for 'Doctor' is 2
        'order' => 'ASC',
        'numberposts' => 100
    );

    $posts = get_posts( $args );
    $count = 0;
    
    if ($post):

        foreach ( $posts as $post ):

            $count++;

            if ($count % 3 == 1):
                echo '<div class="row-fluid">';
            endif; ?>

            <div class="span4">
                <div class="doctor-card">
                    <a href="<?php the_permalink(); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-polaroid')); ?>
                        <h4 class="doctor-name"><?= $post->post_title; ?></h4>
                    </a>
                    <span class="doctor-specialty"><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span>
                </div>
            </div>

            <?php 

            if ($count % 3 == 0 ):
                echo '</div>'; 
            endif;

        endforeach;
        
        echo '</div>';
    endif;

endwhile; 
endif; 
?>