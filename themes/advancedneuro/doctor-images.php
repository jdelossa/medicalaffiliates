<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

    $args = array(
        'order' => 'ASC',
        'post_type' => 'post',
        'category' => '2', //Category ID for 'Doctors' is 2
        'numberposts' => 100
    );

    $posts = get_posts( $args );
    $count = 0;
    
    if ($post):

        foreach ( $posts as $post ):

            $count++;

            if ($count % 4 == 1):
                echo '<div class="row">';
            endif; ?>

            <div class="col-md-3">
                <div class="doctor-card">
                    <a href="<?= get_page_link($page->ID); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-rounded')); ?>
                        <h5 class="doctor-name"><?= $post->post_title; ?></h5>
                    </a>
                </div>
            </div>

            <?php 

            if ($count % 4 == 0 ):
                echo '</div>'; 
            endif;

        endforeach;
        
    endif;

endwhile; 
endif; 
?>