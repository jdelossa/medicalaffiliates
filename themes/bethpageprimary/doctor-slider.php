<div id="our-docs" class="jcarousel-wrapper">
    <div class="jcarousel">
        <ul>
		
		<?php 
			
			if (have_posts()): 

				while (have_posts()): 

					the_post();    
					
					$args = array(
				   		'post_type' => 'post',
					    'category' => '5' //Category ID for 'Doctors' is 5
				  	);
				  
				  	$posts = get_posts($args); 
				  
				  	if ($post):
						foreach($posts as $post): ?>
							
							<li><a href="<?= get_page_link($page->ID); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-polariod') ); ?></a></li>

						<?php endforeach;
					endif;

				endwhile; 

			endif; 

		?>

  		</ul>
    </div>

    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
</div>