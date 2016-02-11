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
            // var_dump($posts);
            $count++;

            if ($count % 1 == 1):
                echo '<div class="row">';
            endif; ?>
            <div class="col-md-4">
                <div class="doctor-card">
                    <div class="doctor-container">
                        <a href="<?= get_page_link($page->ID); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-circle')); ?></a>
                    </div>
                    <h4 class="doctor-name"><a href="<?= get_page_link($page->ID); ?>" class="btn doc-btn btn-default"><?= get_the_title($ID); ?></a></h4>
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