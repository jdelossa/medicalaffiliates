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

            if ($count % 2 == 1):
                echo '<div class="row">';
            endif; ?>
            
            <div class="col-sm-6">
                <div class="sub-section">
                    <div class="header">
                        <h4 class="doctor-name"><?= $post->post_title; ?></h4>
                        <span class="doctor-specialty"><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span>
                    </div>
                    <div class="row">

                        <div class="col-sm-6 col-sm-push-6">
                            <?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-circle')); ?>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6">
                            <div class="doctor-details">
                                <p>Winthrop-University Hospital</p>
                                <a href="<?= get_page_link($page->ID); ?>" class="btn btn-success">View My Profile </a>
                            </div>
                        </div>
                    </div>
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