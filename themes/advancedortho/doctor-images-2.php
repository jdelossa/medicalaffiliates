<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

    $args = array(
        'order' => 'ASC',
        'post_type' => 'post',
        'category' => '3', //Category ID for 'Garden City Doctors' is 3
        'numberposts' => 100
    );

    $posts = get_posts( $args );
    $count = 0;
    
    if ($post):

        foreach ( $posts as $post ):

            $count++;

            if ($count % 2 == 1):
                echo '<div class="row">';
            endif; ?>

            <div class="col-md-6">
                <div class="doctor-card">
                    <a href="<?= get_page_link($page->ID); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-thumbnail')); ?>
                        <h4 class="doctor-name"><?= $post->post_title; ?></h4>
                    </a>
                    <span class="doctor-specialty"><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span>
                </div>
            </div>

            <?php 

            if ($count % 2 == 0 ):
                echo '</div>'; 
            endif;

        endforeach;
        
    endif;

endwhile; 
endif; 
?>