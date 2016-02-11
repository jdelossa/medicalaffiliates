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

//            if ($count % 3 == 1):
//                echo '<div class="row">';
//            endif; ?>

            <div class="doctor-row">
                <div class="doctor-card">
                    <?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-circle')); ?>
                        
                    <p style="font-size: 18px; margin-top: 10px; margin-bottom: 0;">Dr. <?= $post->post_title; ?></p>
                    <p style="font-size: 15px; margin-top: 0px; margin-bottom: 15px;"><span class="doctor-specialty"><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span></p>

                    <a href="<?= get_page_link($page->ID); ?>" class="doc-button">View My Profile</a>
    

                </div>
            </div>

            <?php 

            //if ($count % 3 == 0 ):
               // echo '</div>';
            //endif;

        endforeach;
        
    endif;

endwhile; 
endif; 
?>